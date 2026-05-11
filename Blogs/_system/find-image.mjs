#!/usr/bin/env node
// Find a featured image for a post in a local folder by matching the slug in the filename.
// Usage:
//   node find-image.mjs --slug <slug> --folder "<absolute folder path>"
// Output JSON:
//   { found: true, path: "/abs/path/to/image.png" }
//   { found: false, reason: "folder_missing" | "no_match", folder, slug }

import { readdir, stat } from 'node:fs/promises';
import { existsSync } from 'node:fs';
import { join, extname } from 'node:path';

const IMAGE_EXTS = new Set(['.png', '.jpg', '.jpeg', '.webp', '.gif']);

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

async function main() {
  const args = parseArgs(process.argv);
  if (!args.slug || !args.folder) {
    console.error('Missing --slug or --folder');
    process.exit(2);
  }
  const folder = args.folder.replace(/^~/, process.env.HOME || '');
  if (!existsSync(folder)) {
    console.log(JSON.stringify({ found: false, reason: 'folder_missing', folder, slug: args.slug }));
    return;
  }
  const entries = await readdir(folder);
  const matches = [];
  for (const name of entries) {
    const ext = extname(name).toLowerCase();
    if (!IMAGE_EXTS.has(ext)) continue;
    if (!name.toLowerCase().includes(args.slug.toLowerCase())) continue;
    const path = join(folder, name);
    const s = await stat(path);
    matches.push({ path, mtime: s.mtimeMs });
  }
  if (matches.length === 0) {
    console.log(JSON.stringify({ found: false, reason: 'no_match', folder, slug: args.slug }));
    return;
  }
  matches.sort((a, b) => b.mtime - a.mtime);
  console.log(JSON.stringify({ found: true, path: matches[0].path }));
}

main().catch((err) => {
  console.error(err.message || String(err));
  process.exit(1);
});
