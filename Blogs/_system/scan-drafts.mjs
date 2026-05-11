#!/usr/bin/env node
// Scan drafts/ and decide what to publish next.
// Enforces the 2/day cap via _queue/publish-state.json.
// Outputs JSON describing the next action so the orchestrating skill can take it.
//
// Usage:
//   node scan-drafts.mjs              # picks the next ready post (oldest first)
//   node scan-drafts.mjs --slug <s>   # targets a specific slug (manual publish)
//   node scan-drafts.mjs --force      # bypass cap (manual override)
//
// Output shapes:
//   { action: "skip", reason: "cap_reached", count: 2 }
//   { action: "skip", reason: "no_ready_drafts" }
//   { action: "skip", reason: "already_published", slug }
//   { action: "skip", reason: "no_preview_html", slug }
//   { action: "skip", reason: "draft_not_found", slug }
//   { action: "publish", slug, title, content_path, today, count_before }
//
// Side effects: writes the extracted post body to a temp file referenced by content_path.

import { readFile, writeFile, readdir, mkdir } from 'node:fs/promises';
import { existsSync, readFileSync, writeFileSync } from 'node:fs';
import { dirname, join } from 'node:path';
import { fileURLToPath } from 'node:url';
import { tmpdir } from 'node:os';

const __dirname = dirname(fileURLToPath(import.meta.url));
const BLOG_ROOT = join(__dirname, '..');
const DRAFTS_DIR = join(BLOG_ROOT, 'drafts');
const PREVIEWS_DIR = join(BLOG_ROOT, 'previews');
const QUEUE_DIR = join(BLOG_ROOT, '_queue');
const STATE_PATH = join(QUEUE_DIR, 'publish-state.json');
const REGISTRY_PATH = join(QUEUE_DIR, 'wp-post-ids.json');

const DAILY_CAP = 2;

function parseArgs(argv) {
  const args = {};
  for (let i = 2; i < argv.length; i++) {
    const a = argv[i];
    if (!a.startsWith('--')) continue;
    const key = a.slice(2);
    const next = argv[i + 1];
    if (!next || next.startsWith('--')) { args[key] = true; }
    else { args[key] = next; i++; }
  }
  return args;
}

function todayISO() {
  return new Date().toISOString().slice(0, 10);
}

function readJson(path, fallback) {
  if (!existsSync(path)) return fallback;
  try { return JSON.parse(readFileSync(path, 'utf8')); }
  catch { return fallback; }
}

function readState() {
  const today = todayISO();
  const state = readJson(STATE_PATH, { date: today, count: 0 });
  if (state.date !== today) return { date: today, count: 0 };
  return state;
}

function readRegistry() {
  return readJson(REGISTRY_PATH, {});
}

function parseFrontMatter(md) {
  if (!md.startsWith('---')) return {};
  const end = md.indexOf('\n---', 3);
  if (end === -1) return {};
  const block = md.slice(3, end).trim();
  const fm = {};
  for (const rawLine of block.split('\n')) {
    const line = rawLine.replace(/\r$/, '');
    if (!line.trim() || line.trim().startsWith('#')) continue;
    const colon = line.indexOf(':');
    if (colon === -1) continue;
    const key = line.slice(0, colon).trim();
    let value = line.slice(colon + 1).trim();
    if ((value.startsWith('"') && value.endsWith('"')) || (value.startsWith("'") && value.endsWith("'"))) {
      value = value.slice(1, -1);
    }
    if (value === 'true') value = true;
    else if (value === 'false') value = false;
    fm[key] = value;
  }
  return fm;
}

const START_MARK = '▼▼▼ START: PASTE THIS INTO WORDPRESS CUSTOM HTML BLOCK ▼▼▼';
const END_MARK = '▲▲▲ END: WORDPRESS CUSTOM HTML BLOCK ▲▲▲';

// The markers appear twice in each preview: once as guide text inside a <code> tag,
// once inside the real HTML comment around the paste block. We want the one inside
// an HTML comment (no </code> tag between the marker and the most recent <!-- opener).
function findMarkerInComment(html, marker) {
  let idx = html.indexOf(marker);
  while (idx !== -1) {
    const openIdx = html.lastIndexOf('<!--', idx);
    const closeIdx = html.lastIndexOf('-->', idx);
    if (openIdx !== -1 && openIdx > closeIdx) return idx;
    idx = html.indexOf(marker, idx + marker.length);
  }
  return -1;
}

function extractWpBody(html) {
  const startIdx = findMarkerInComment(html, START_MARK);
  const endIdx = findMarkerInComment(html, END_MARK);
  if (startIdx === -1 || endIdx === -1 || endIdx <= startIdx) return null;
  const afterStartComment = html.indexOf('-->', startIdx);
  if (afterStartComment === -1 || afterStartComment >= endIdx) return null;
  const beforeEndComment = html.lastIndexOf('<!--', endIdx);
  if (beforeEndComment === -1 || beforeEndComment <= afterStartComment) return null;
  return html.slice(afterStartComment + 3, beforeEndComment).trim();
}

async function listReadyDrafts() {
  const entries = await readdir(DRAFTS_DIR);
  const out = [];
  for (const name of entries) {
    if (!name.endsWith('.md')) continue;
    const path = join(DRAFTS_DIR, name);
    const md = await readFile(path, 'utf8');
    const fm = parseFrontMatter(md);
    if (fm.ready_to_publish !== true) continue;
    if (!fm.slug) continue;
    if (!fm.title) continue;
    out.push({ filename: name, path, fm });
  }
  out.sort((a, b) => {
    const da = String(a.fm.date || '');
    const db = String(b.fm.date || '');
    if (da !== db) return da < db ? -1 : 1;
    return a.filename < b.filename ? -1 : 1;
  });
  return out;
}

async function emitContentTempFile(slug, body) {
  const dir = join(tmpdir(), 'ace-blog-publish');
  if (!existsSync(dir)) await mkdir(dir, { recursive: true });
  const path = join(dir, `${slug}.html`);
  await writeFile(path, body);
  return path;
}

async function main() {
  const args = parseArgs(process.argv);
  const state = readState();
  const registry = readRegistry();

  if (!args.force && state.count >= DAILY_CAP) {
    console.log(JSON.stringify({ action: 'skip', reason: 'cap_reached', count: state.count }));
    return;
  }

  let chosen;
  if (args.slug) {
    const path = join(DRAFTS_DIR, `${args.slug}.md`);
    if (!existsSync(path)) {
      console.log(JSON.stringify({ action: 'skip', reason: 'draft_not_found', slug: args.slug }));
      return;
    }
    const md = await readFile(path, 'utf8');
    const fm = parseFrontMatter(md);
    if (!fm.slug || !fm.title) {
      console.log(JSON.stringify({ action: 'skip', reason: 'incomplete_front_matter', slug: args.slug }));
      return;
    }
    chosen = { filename: `${args.slug}.md`, path, fm };
  } else {
    const ready = await listReadyDrafts();
    const unpublished = ready.filter((r) => !registry[r.fm.slug]);
    if (unpublished.length === 0) {
      console.log(JSON.stringify({ action: 'skip', reason: 'no_ready_drafts' }));
      return;
    }
    chosen = unpublished[0];
  }

  if (registry[chosen.fm.slug]) {
    console.log(JSON.stringify({ action: 'skip', reason: 'already_published', slug: chosen.fm.slug }));
    return;
  }

  const previewPath = join(PREVIEWS_DIR, `${chosen.fm.slug}.html`);
  if (!existsSync(previewPath)) {
    console.log(JSON.stringify({ action: 'skip', reason: 'no_preview_html', slug: chosen.fm.slug, expected_at: previewPath }));
    return;
  }
  const html = await readFile(previewPath, 'utf8');
  const body = extractWpBody(html);
  if (!body) {
    console.log(JSON.stringify({ action: 'skip', reason: 'paste_markers_missing', slug: chosen.fm.slug }));
    return;
  }
  const contentPath = await emitContentTempFile(chosen.fm.slug, body);

  console.log(JSON.stringify({
    action: 'publish',
    slug: chosen.fm.slug,
    title: chosen.fm.title,
    content_path: contentPath,
    primary_keyword: chosen.fm.primary_keyword || null,
    date: chosen.fm.date || null,
    today: state.date,
    count_before: state.count,
    daily_cap: DAILY_CAP,
  }));
}

main().catch((err) => {
  console.error(err.message || String(err));
  process.exit(1);
});
