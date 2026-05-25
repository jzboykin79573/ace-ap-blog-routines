#!/usr/bin/env node
// One-off fixer for the 2026-05-25 blog audit.
//
// Per-post targeted edits applied via WP REST PATCH:
//   447 chain-rule          → strip duplicate hero <h1> block
//   444 limits-ultimate     → strip duplicate hero <h1> block
//   489 concavity           → collapse whitespace inside H2s with unicode math
//   487 fdt                 → collapse whitespace inside H2s with unicode math
//   483 integration-ultimate → fix "Q:\n" summary prefix + remove orphan <canvas> + slug rename
//   485 score-gap           → slug rename only
//   392 integration-parts   → slug rename only
//
// Pass --apply to PATCH. Default is dry-run (prints unified-ish diff per post).

import { readFileSync, writeFileSync, mkdirSync } from 'node:fs';
import { dirname, join } from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = dirname(fileURLToPath(import.meta.url));
const ENV_PATH = join(__dirname, '..', '.env');
const OUT_DIR = join(__dirname, 'audit-2026-05-25-diffs');

function loadEnv(path) {
  const env = {};
  for (const line of readFileSync(path, 'utf8').split('\n')) {
    const t = line.trim();
    if (!t || t.startsWith('#')) continue;
    const eq = t.indexOf('=');
    if (eq === -1) continue;
    const k = t.slice(0, eq).trim();
    let v = t.slice(eq + 1).trim();
    if ((v.startsWith('"') && v.endsWith('"')) || (v.startsWith("'") && v.endsWith("'"))) v = v.slice(1, -1);
    env[k] = v;
  }
  env.WP_URL = env.WP_URL.replace(/\/+$/, '');
  return env;
}

const env = loadEnv(ENV_PATH);
const auth = 'Basic ' + Buffer.from(`${env.WP_USER}:${env.WP_APP_PASSWORD}`).toString('base64');

async function wpGet(id) {
  const r = await fetch(`${env.WP_URL}/wp-json/wp/v2/posts/${id}?context=edit`, { headers: { Authorization: auth } });
  if (!r.ok) throw new Error(`GET ${id}: ${r.status} ${await r.text()}`);
  return r.json();
}

async function wpPatch(id, body) {
  const r = await fetch(`${env.WP_URL}/wp-json/wp/v2/posts/${id}`, {
    method: 'POST',
    headers: { Authorization: auth, 'Content-Type': 'application/json' },
    body: JSON.stringify(body),
  });
  if (!r.ok) throw new Error(`PATCH ${id}: ${r.status} ${await r.text()}`);
  return r.json();
}

// ─── Transformations ──────────────────────────────────────────

// Match <h1 ...> ... </h1> where style attr suggests the hero duplicate
// (font-size:24px in inline style, Montserrat). The audited posts have
// exactly one such hero <h1> immediately followed by a plain <h1> with
// the same text — we strip the inline-styled hero card.
function stripDuplicateHeroH1(html) {
  const re = /<h1[^>]*style="[^"]*font-family:\s*Montserrat[^"]*font-size:\s*24px[^"]*"[^>]*>[\s\S]*?<\/h1>\s*/i;
  return html.replace(re, '');
}

// The theme already renders the post title as <h1> in single.php
// (via the_title()), so any <h1> inside post content is a duplicate.
// Demote in-content <h1> to <h2> so each page has exactly one H1.
function demoteInContentH1(html) {
  return html.replace(/<h1(\s[^>]*)?>([\s\S]*?)<\/h1>/gi, (_m, attrs, inner) => `<h2${attrs || ''}>${inner}</h2>`);
}

// Unicode mathematical alphanumeric block: U+1D400–U+1D7FF
// Plus primes ′″‴ and double-prime style ” used in
// the audited heading "𝑓 ” (𝑐) = 0".
const MATH_GLYPH = /[\u{1D400}-\u{1D7FF}′″‴“”]/u;

// Collapse whitespace (incl newlines) inside H2 that contains unicode math.
// Leaves clean H2s untouched.
function collapseMathH2Whitespace(html) {
  return html.replace(/<h2([^>]*)>([\s\S]*?)<\/h2>/gi, (m, attrs, inner) => {
    if (!MATH_GLYPH.test(inner)) return m;
    if (!/\n/.test(inner)) return m;
    const collapsed = inner.replace(/\s+/g, ' ').trim();
    return `<h2${attrs}>${collapsed}</h2>`;
  });
}

// Replace <summary>Q:\n<text></summary> with <summary><strong>Q.</strong> <text></summary>
function fixQSummary(html) {
  return html.replace(/<summary([^>]*)>\s*Q:\s*\n+\s*([\s\S]*?)<\/summary>/gi,
    (_m, attrs, txt) => `<summary${attrs}><strong>Q.</strong> ${txt.trim()}</summary>`);
}

// Remove a self-closing or empty <canvas> that has no width/height attribute
// and isn't referenced by any Chart.js init in the post.
function removeOrphanCanvas(html) {
  const hasChartInit = /new\s+Chart\s*\(/.test(html);
  if (hasChartInit) return html; // safe — leave alone
  // Remove <canvas ...></canvas> blocks with no inner content
  return html.replace(/<canvas\b[^>]*>\s*<\/canvas>/gi, '');
}

// ─── Per-post recipes ─────────────────────────────────────────

// Hero-strip runs first (removes inline-styled hero H1), then demote
// any remaining in-content <h1> to <h2> so the theme's auto-rendered
// title is the only H1 on the page.
const DEFAULT_TRANSFORMS = [stripDuplicateHeroH1, demoteInContentH1];

const RECIPES = [
  { id: 447, label: 'chain-rule',                  transforms: DEFAULT_TRANSFORMS },
  { id: 444, label: 'limits-ultimate-guide',       transforms: DEFAULT_TRANSFORMS },
  { id: 489, label: 'concavity',                   transforms: [...DEFAULT_TRANSFORMS, collapseMathH2Whitespace] },
  { id: 487, label: 'first-second-derivative-test', transforms: [...DEFAULT_TRANSFORMS, collapseMathH2Whitespace] },
  { id: 483, label: 'integration-ultimate-guide',  transforms: [...DEFAULT_TRANSFORMS, fixQSummary, removeOrphanCanvas] },
  { id: 485, label: 'practice-score-gap',          transforms: DEFAULT_TRANSFORMS },
  { id: 475, label: 'lhopitals-rule',              transforms: DEFAULT_TRANSFORMS },
  { id: 473, label: 'implicit-differentiation',    transforms: DEFAULT_TRANSFORMS },
  { id: 392, label: 'integration-by-parts',        transforms: DEFAULT_TRANSFORMS },
];

// ─── Diff helper ──────────────────────────────────────────────
function quickDiff(before, after, ctx = 60) {
  const out = [];
  let i = 0;
  while (i < before.length || i < after.length) {
    if (before[i] === after[i]) { i++; continue; }
    const start = Math.max(0, i - ctx);
    const b = before.slice(start, i + ctx).replace(/\n/g, '⏎');
    const a = after.slice(start, i + ctx).replace(/\n/g, '⏎');
    out.push(`@@ near offset ${i}\n- ${b}\n+ ${a}`);
    // skip ahead to next sync point
    while (i < before.length && i < after.length && before[i] !== after[i]) i++;
    while (i < before.length && i < after.length && before[i] === after[i]) i++;
    if (out.length >= 6) { out.push('… (more changes truncated)'); break; }
  }
  return out.join('\n\n');
}

// ─── Main ─────────────────────────────────────────────────────
const APPLY = process.argv.includes('--apply');

mkdirSync(OUT_DIR, { recursive: true });

const summary = [];

for (const r of RECIPES) {
  process.stdout.write(`\n=== [${r.id}] ${r.label} ===\n`);
  const post = await wpGet(r.id);
  const before = post.content.raw;
  let after = before;
  for (const t of r.transforms) after = t(after);

  const contentChanged = after !== before;
  const slugChange = r.slug && r.slug !== post.slug ? { from: post.slug, to: r.slug } : null;

  if (!contentChanged && !slugChange) {
    console.log('  no changes needed');
    summary.push({ id: r.id, label: r.label, action: 'noop' });
    continue;
  }

  if (contentChanged) {
    const beforeFile = join(OUT_DIR, `${r.id}-${r.label}.before.html`);
    const afterFile  = join(OUT_DIR, `${r.id}-${r.label}.after.html`);
    writeFileSync(beforeFile, before);
    writeFileSync(afterFile, after);
    console.log(`  content diff (saved to ${beforeFile.replace(__dirname + '/', '')}):`);
    console.log(quickDiff(before, after).split('\n').map(l => '    ' + l).join('\n'));
  }
  if (slugChange) console.log(`  slug: ${slugChange.from}  →  ${slugChange.to}`);

  if (APPLY) {
    const body = {};
    if (contentChanged) body.content = after;
    if (slugChange) body.slug = slugChange.to;
    const updated = await wpPatch(r.id, body);
    console.log(`  ✓ PATCHED  live_url=${updated.link}`);
    summary.push({ id: r.id, label: r.label, action: 'applied', slug: updated.slug, link: updated.link });
  } else {
    summary.push({ id: r.id, label: r.label, action: 'dry-run', contentChanged, slugChange });
  }
}

console.log('\n--- summary ---');
console.log(JSON.stringify(summary, null, 2));
console.log(`\nMode: ${APPLY ? 'APPLIED' : 'DRY-RUN (pass --apply to PATCH live)'}`);
