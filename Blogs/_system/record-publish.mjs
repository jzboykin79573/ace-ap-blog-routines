#!/usr/bin/env node
// Record a successful publish: update wp-post-ids.json, increment publish-state.json,
// and append the live URL to content-queue.md. Run after publish-to-wp.mjs succeeds.
//
// Usage:
//   node record-publish.mjs --slug <slug> --wp-post-id <id> --live-url <url> [--title <title>]

import { readFile, writeFile, appendFile } from 'node:fs/promises';
import { existsSync, readFileSync } from 'node:fs';
import { dirname, join } from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = dirname(fileURLToPath(import.meta.url));
const BLOG_ROOT = join(__dirname, '..');
const QUEUE_DIR = join(BLOG_ROOT, '_queue');
const STATE_PATH = join(QUEUE_DIR, 'publish-state.json');
const REGISTRY_PATH = join(QUEUE_DIR, 'wp-post-ids.json');
const CONTENT_QUEUE_PATH = join(QUEUE_DIR, 'content-queue.md');

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

async function main() {
  const args = parseArgs(process.argv);
  for (const required of ['slug', 'wp-post-id', 'live-url']) {
    if (!args[required]) {
      console.error(`Missing required --${required}`);
      process.exit(2);
    }
  }

  const today = todayISO();
  const slug = args.slug;
  const wpPostId = Number(args['wp-post-id']);
  const liveUrl = args['live-url'];
  const title = args.title || '';

  const registry = readJson(REGISTRY_PATH, {});
  if (registry[slug]) {
    console.error(`Refusing to overwrite existing registry entry for ${slug}`);
    process.exit(3);
  }
  registry[slug] = { wp_post_id: wpPostId, live_url: liveUrl, published_at: new Date().toISOString() };
  await writeFile(REGISTRY_PATH, JSON.stringify(registry, null, 2) + '\n');

  const state = readJson(STATE_PATH, { date: today, count: 0 });
  const next = state.date === today ? { date: today, count: state.count + 1 } : { date: today, count: 1 };
  await writeFile(STATE_PATH, JSON.stringify(next, null, 2) + '\n');

  if (existsSync(CONTENT_QUEUE_PATH)) {
    const line = `\n- [${title || slug}](${liveUrl}) — published ${today}\n`;
    await appendFile(CONTENT_QUEUE_PATH, line);
  }

  console.log(JSON.stringify({ recorded: true, slug, wp_post_id: wpPostId, count_today: next.count }));
}

main().catch((err) => {
  console.error(err.message || String(err));
  process.exit(1);
});
