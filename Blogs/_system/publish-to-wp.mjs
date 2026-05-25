#!/usr/bin/env node
// Publish a single blog post to WordPress: upload featured image, create post.
// Reads credentials from ../_system/.env (key=value, one per line).
// Auto-assigns:
//   - Parent category 'AP Calculus Prep' (ID 8)
//   - Unit child category based on --unit hint (e.g. "Unit 6: Integration" → cat 11)
//   - Matching unit tag (creates the tag if it doesn't exist)
// Usage:
//   node publish-to-wp.mjs --slug <slug> --title <title> --content <path> [--image <path>] [--unit "<unit hint>"] [--focus-keyword <kw>] [--meta-description <desc>] [--status publish|draft]
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

const AP_CALC_CAT = 8;
const STUDY_TIPS_CAT = 7;
const EXAM_PREP_CAT = 6;

// Maps a unit hint (frontmatter `unit:` value) to the WP child-category ID.
function unitToCategoryId(unitHint, slug) {
  const u = String(unitHint || '').toLowerCase();
  const s = String(slug || '').toLowerCase();
  if (u.includes('summer') || s.includes('summer-prep') || s.includes('bootcamp')) return STUDY_TIPS_CAT;
  if (u.includes('exam') || u.includes('cross-unit') || s.includes('score-gap')) return EXAM_PREP_CAT;
  // Match "Unit N" or unit number patterns
  const m = u.match(/unit[\s\-:]*(\d+)/);
  const n = m ? Number(m[1]) : null;
  const unitMap = { 1: 3, 2: 4, 3: 2, 4: 5, 5: 10, 6: 11, 7: 12, 8: 13, 9: 14, 10: 15 };
  return n && unitMap[n] ? unitMap[n] : null;
}

// Maps a unit child-category ID to the human label we want for the tag.
function unitCategoryToTagInfo(catId) {
  const m = {
    3:  { slug: 'unit-1', name: 'Unit 1: Limits' },
    4:  { slug: 'unit-2', name: 'Unit 2: Differentiation Basics' },
    2:  { slug: 'unit-3', name: 'Unit 3: Differentiation Advanced' },
    5:  { slug: 'unit-4', name: 'Unit 4: Contextual Applications' },
    10: { slug: 'unit-5', name: 'Unit 5: Analytical Applications' },
    11: { slug: 'unit-6', name: 'Unit 6: Integration' },
    12: { slug: 'unit-7', name: 'Unit 7: Differential Equations' },
    13: { slug: 'unit-8', name: 'Unit 8: Applications of Integration' },
    14: { slug: 'unit-9', name: 'Unit 9: Parametric & Polar' },
    15: { slug: 'unit-10', name: 'Unit 10: Series' },
    [STUDY_TIPS_CAT]: { slug: 'summer-prep', name: 'Summer Prep' },
    [EXAM_PREP_CAT]:  { slug: 'exam-prep', name: 'Exam Prep' },
  };
  return m[catId] || null;
}

async function getOrCreateTag(env, slug, name) {
  const existing = await wpFetch(env, `/wp/v2/tags?slug=${encodeURIComponent(slug)}`);
  if (existing.length > 0) return existing[0].id;
  return (await wpFetch(env, '/wp/v2/tags', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ name, slug }),
  })).id;
}

async function resolveCategoriesAndTags(env, { unitHint, slug }) {
  const categories = [AP_CALC_CAT];
  const tags = [];
  const unitCat = unitToCategoryId(unitHint, slug);
  if (unitCat && unitCat !== AP_CALC_CAT) categories.push(unitCat);
  // Match tag to the unit category (or to summer/exam-prep if that's what we picked)
  const tagInfo = unitCategoryToTagInfo(unitCat);
  if (tagInfo) {
    const tagId = await getOrCreateTag(env, tagInfo.slug, tagInfo.name);
    tags.push(tagId);
  }
  return { categories, tags };
}

async function createPost(env, { title, slug, content, authorId, featuredMediaId, status, categories, tags }) {
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
      categories: categories || [AP_CALC_CAT],
      tags: tags || [],
    }),
  });
}

async function updateRankMath(env, postId, { focusKeyword, metaDescription }) {
  if (!focusKeyword && !metaDescription) return;
  const body = new URLSearchParams({ objectID: String(postId), objectType: 'post' });
  if (focusKeyword) body.set('meta[rank_math_focus_keyword]', focusKeyword);
  if (metaDescription) body.set('meta[rank_math_description]', metaDescription);
  const url = `${env.WP_URL}/wp-json/rankmath/v1/updateMeta`;
  const token = Buffer.from(`${env.WP_USER}:${env.WP_APP_PASSWORD}`).toString('base64');
  const res = await fetch(url, {
    method: 'POST',
    headers: { Authorization: `Basic ${token}`, 'Content-Type': 'application/x-www-form-urlencoded' },
    body: body.toString(),
  });
  if (!res.ok) {
    const text = await res.text();
    throw new Error(`Rank Math updateMeta failed: ${res.status} ${res.statusText}\n${text}`);
  }
  return res.json();
}

// ─── Pre-publish hygiene (audit 2026-05-25) ───────────────────
// Block slugs that look like `post-NN-…`. The numeric prefix is a leftover
// from internal drafting filenames and hurts SEO. The caller should pass
// a topic-only slug. We auto-rewrite when the suffix is recoverable, and
// hard-fail otherwise so it surfaces during publish rather than silently
// shipping a bad URL.
function sanitizeSlug(slug) {
  const m = String(slug || '').match(/^post-\d+-(.+)$/i);
  if (!m) return slug;
  const stripped = m[1];
  console.warn(`[sanitize] slug "${slug}" looks like a draft filename — rewriting to "${stripped}"`);
  return stripped;
}

// Remove the duplicate hero <h1> generated by the drafter template. The
// post template renders both an inline-styled hero card AND a plain <h1>
// with the same text. Strip the inline-styled one so each page has a
// single H1 (SEO).
function stripDuplicateHeroH1(html) {
  return html.replace(
    /<h1[^>]*style="[^"]*font-family:\s*Montserrat[^"]*font-size:\s*24px[^"]*"[^>]*>[\s\S]*?<\/h1>\s*/i,
    ''
  );
}

// Collapse stray newlines inside H2/H3 that contain unicode math glyphs.
// Some editors insert \n around every non-ASCII char, producing jagged
// multi-line headings at render time.
const HEADING_MATH_GLYPH = /[\u{1D400}-\u{1D7FF}′″‴]/u;
function collapseMathHeadingWhitespace(html) {
  return html.replace(/<(h[23])([^>]*)>([\s\S]*?)<\/\1>/gi, (m, tag, attrs, inner) => {
    if (!HEADING_MATH_GLYPH.test(inner) || !/\n/.test(inner)) return m;
    return `<${tag}${attrs}>${inner.replace(/\s+/g, ' ').trim()}</${tag}>`;
  });
}

function sanitizeContent(html) {
  let out = html;
  const before = out;
  out = stripDuplicateHeroH1(out);
  if (out !== before) console.warn('[sanitize] stripped duplicate hero <h1>');
  const before2 = out;
  out = collapseMathHeadingWhitespace(out);
  if (out !== before2) console.warn('[sanitize] collapsed whitespace in math headings');
  return out;
}

async function main() {
  const args = parseArgs(process.argv);
  for (const required of ['slug', 'title', 'content']) {
    if (!args[required]) {
      console.error(`Missing required --${required}`);
      process.exit(2);
    }
  }
  args.slug = sanitizeSlug(args.slug);
  const env = loadEnv(ENV_PATH);
  const authorName = env.WP_AUTHOR_NAME || 'Zach Boykin';
  const content = sanitizeContent(await readFile(args.content, 'utf8'));
  const authorId = await resolveAuthorId(env, authorName);
  const media = args.image ? await uploadMedia(env, args.image, args.slug) : null;
  const { categories, tags } = await resolveCategoriesAndTags(env, { unitHint: args.unit, slug: args.slug });
  const post = await createPost(env, {
    title: args.title,
    slug: args.slug,
    content,
    authorId,
    featuredMediaId: media ? media.id : 0,
    status: args.status || 'publish',
    categories,
    tags,
  });
  await updateRankMath(env, post.id, {
    focusKeyword: args['focus-keyword'] || null,
    metaDescription: args['meta-description'] || null,
  });
  const out = {
    wp_post_id: post.id,
    live_url: post.link,
    media_id: media ? media.id : null,
    media_url: media ? media.source_url : null,
    status: post.status,
  };
  console.log(JSON.stringify(out));
}

main().catch((err) => {
  console.error(err.message || String(err));
  process.exit(1);
});
