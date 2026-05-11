#!/usr/bin/env node
// Publish a single blog post to WordPress: upload featured image, create post.
// Reads credentials from ../_system/.env (key=value, one per line).
// Usage:
//   node publish-to-wp.mjs --slug <slug> --title <title> --content <path> --image <path> [--status publish|draft]
// Emits JSON on stdout: { wp_post_id, live_url, media_id }

import { readFile, writeFile, stat } from 'node:fs/promises';
import { existsSync, readFileSync } from 'node:fs';
import { basename, dirname, join, extname } from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = dirname(fileURLToPath(import.meta.url));
const ENV_PATH = join(__dirname, '.env');
const AUTHOR_CACHE_PATH = join(__dirname, '.wp-author-id');

function loadEnv(path) {
  if (!existsSync(path)) {
    throw new Error(`Missing ${path}. Copy .env.example to .env and fill in values.`);
  }
  const env = {};
  for (const line of readFileSync(path, 'utf8').split('\n')) {
    const trimmed = line.trim();
    if (!trimmed || trimmed.startsWith('#')) continue;
    const eq = trimmed.indexOf('=');
    if (eq === -1) continue;
    const key = trimmed.slice(0, eq).trim();
    let value = trimmed.slice(eq + 1).trim();
    if ((value.startsWith('"') && value.endsWith('"')) || (value.startsWith("'") && value.endsWith("'"))) {
      value = value.slice(1, -1);
    }
    env[key] = value;
  }
  for (const key of ['WP_URL', 'WP_USER', 'WP_APP_PASSWORD']) {
    if (!env[key]) throw new Error(`Missing ${key} in ${path}`);
  }
  env.WP_URL = env.WP_URL.replace(/\/+$/, '');
  return env;
}

function parseArgs(argv) {
  const args = {};
  for (let i = 2; i < argv.length; i++) {
    const a = argv[i];
    if (!a.startsWith('--')) continue;
    const key = a.slice(2);
    const next = argv[i + 1];
    if (!next || next.startsWith('--')) {
      args[key] = true;
    } else {
      args[key] = next;
      i++;
    }
  }
  return args;
}

function authHeader(env) {
  const token = Buffer.from(`${env.WP_USER}:${env.WP_APP_PASSWORD}`).toString('base64');
  return `Basic ${token}`;
}

async function wpFetch(env, path, init = {}) {
  const url = `${env.WP_URL}/wp-json${path}`;
  const headers = { Authorization: authHeader(env), ...(init.headers || {}) };
  const res = await fetch(url, { ...init, headers });
  if (!res.ok) {
    const body = await res.text();
    throw new Error(`WP ${init.method || 'GET'} ${path} failed: ${res.status} ${res.statusText}\n${body}`);
  }
  return res.json();
}

async function resolveAuthorId(env, displayName) {
  if (existsSync(AUTHOR_CACHE_PATH)) {
    const cached = readFileSync(AUTHOR_CACHE_PATH, 'utf8').trim();
    if (cached && /^\d+$/.test(cached)) return Number(cached);
  }
  const users = await wpFetch(env, `/wp/v2/users?search=${encodeURIComponent(displayName)}&context=edit`);
  const match = users.find((u) => u.name === displayName) || users[0];
  if (!match) throw new Error(`No WordPress user found matching "${displayName}".`);
  await writeFile(AUTHOR_CACHE_PATH, String(match.id));
  return match.id;
}

function mimeFromExt(ext) {
  const map = { '.png': 'image/png', '.jpg': 'image/jpeg', '.jpeg': 'image/jpeg', '.webp': 'image/webp', '.gif': 'image/gif' };
  return map[ext.toLowerCase()] || 'application/octet-stream';
}

async function uploadMedia(env, imagePath, slug) {
  const ext = extname(imagePath) || '.png';
  const filename = `${slug}-featured${ext}`;
  const body = await readFile(imagePath);
  const stats = await stat(imagePath);
  const res = await fetch(`${env.WP_URL}/wp-json/wp/v2/media`, {
    method: 'POST',
    headers: {
      Authorization: authHeader(env),
      'Content-Type': mimeFromExt(ext),
      'Content-Disposition': `attachment; filename="${filename}"`,
      'Content-Length': String(stats.size),
    },
    body,
  });
  if (!res.ok) {
    const text = await res.text();
    throw new Error(`Media upload failed: ${res.status} ${res.statusText}\n${text}`);
  }
  return res.json();
}

async function createPost(env, { title, slug, content, authorId, featuredMediaId, status }) {
  return wpFetch(env, '/wp/v2/posts', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      title,
      slug,
      content,
      status: status || 'publish',
      author: authorId,
      featured_media: featuredMediaId,
    }),
  });
}

async function main() {
  const args = parseArgs(process.argv);
  for (const required of ['slug', 'title', 'content', 'image']) {
    if (!args[required]) {
      console.error(`Missing required --${required}`);
      process.exit(2);
    }
  }
  const env = loadEnv(ENV_PATH);
  const authorName = env.WP_AUTHOR_NAME || 'Zach Boykin';
  const content = await readFile(args.content, 'utf8');
  const authorId = await resolveAuthorId(env, authorName);
  const media = await uploadMedia(env, args.image, args.slug);
  const post = await createPost(env, {
    title: args.title,
    slug: args.slug,
    content,
    authorId,
    featuredMediaId: media.id,
    status: args.status || 'publish',
  });
  const out = {
    wp_post_id: post.id,
    live_url: post.link,
    media_id: media.id,
    media_url: media.source_url,
    status: post.status,
  };
  console.log(JSON.stringify(out));
}

main().catch((err) => {
  console.error(err.message || String(err));
  process.exit(1);
});
