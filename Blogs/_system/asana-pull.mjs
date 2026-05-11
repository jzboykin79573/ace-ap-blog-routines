#!/usr/bin/env node
// Download attached draft + preview files from completed Asana proposal tasks.
// Searches Asana for tasks named "ACE blog topics — *" assigned to me, walks
// their attachments, downloads any that look like a blog file (post-NN-slug.md
// or .html), and writes them into Blogs/drafts/ or Blogs/previews/.
//
// Idempotent: each attachment is tracked by GID in
// _queue/asana-download-state.json; already-downloaded attachments are skipped.
//
// Reads ASANA_PAT from ../_system/.env. Generate one at app.asana.com/0/my-apps.

import { readFile, writeFile, mkdir } from 'node:fs/promises';
import { existsSync, readFileSync } from 'node:fs';
import { dirname, join, basename, extname } from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = dirname(fileURLToPath(import.meta.url));
const BLOG_ROOT = join(__dirname, '..');
const ENV_PATH = join(__dirname, '.env');
const DRAFTS_DIR = join(BLOG_ROOT, 'drafts');
const PREVIEWS_DIR = join(BLOG_ROOT, 'previews');
const STATE_PATH = join(BLOG_ROOT, '_queue', 'asana-download-state.json');

const ASANA_API = 'https://app.asana.com/api/1.0';
const TASK_NAME_PREFIX = 'ACE blog topics —';
const FILENAME_PATTERN = /^post-\d+[A-Za-z0-9_-]*\.(md|html)$/;

function loadEnv(path) {
  if (!existsSync(path)) {
    throw new Error(`Missing ${path}. Copy .env.example to .env and fill in ASANA_PAT.`);
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
  if (!env.ASANA_PAT) throw new Error(`Missing ASANA_PAT in ${path}`);
  return env;
}

function readJson(path, fallback) {
  if (!existsSync(path)) return fallback;
  try { return JSON.parse(readFileSync(path, 'utf8')); } catch { return fallback; }
}

async function asana(env, path) {
  const res = await fetch(`${ASANA_API}${path}`, {
    headers: { Authorization: `Bearer ${env.ASANA_PAT}`, Accept: 'application/json' },
  });
  if (!res.ok) {
    const body = await res.text();
    throw new Error(`Asana ${path} failed: ${res.status} ${res.statusText}\n${body.slice(0, 500)}`);
  }
  return res.json();
}

async function getMyGid(env) {
  const data = await asana(env, '/users/me?opt_fields=gid');
  return data.data.gid;
}

async function getRecentMatchingTasks(env, myGid) {
  // Pull recent tasks assigned to me (Asana doesn't support direct name-prefix
  // filtering in /tasks, so we filter client-side after fetching).
  const since = new Date(Date.now() - 14 * 24 * 60 * 60 * 1000).toISOString();
  const data = await asana(env, `/tasks?assignee=${myGid}&workspace=&modified_since=${encodeURIComponent(since)}&opt_fields=name,completed,modified_at&limit=100`);
  return (data.data || []).filter((t) => typeof t.name === 'string' && t.name.startsWith(TASK_NAME_PREFIX));
}

async function getWorkspaceGid(env) {
  const data = await asana(env, '/users/me?opt_fields=workspaces');
  if (!data.data.workspaces || data.data.workspaces.length === 0) {
    throw new Error('No workspaces returned for this user.');
  }
  return data.data.workspaces[0].gid;
}

async function searchTasksInWorkspace(env, workspaceGid) {
  const params = new URLSearchParams({
    'resource_subtype': 'default_task',
    'opt_fields': 'name,completed,modified_at,assignee',
    'sort_by': 'modified_at',
    'sort_ascending': 'false',
    'limit': '50',
  });
  const data = await asana(env, `/workspaces/${workspaceGid}/tasks/search?${params.toString()}`);
  return (data.data || []).filter((t) => typeof t.name === 'string' && t.name.startsWith(TASK_NAME_PREFIX));
}

async function getTaskAttachments(env, taskGid) {
  const data = await asana(env, `/tasks/${taskGid}/attachments?opt_fields=name,download_url,resource_type`);
  return data.data || [];
}

async function downloadAttachment(env, attachmentGid) {
  const data = await asana(env, `/attachments/${attachmentGid}?opt_fields=name,download_url`);
  const url = data.data.download_url;
  if (!url) throw new Error(`Attachment ${attachmentGid} has no download_url`);
  const res = await fetch(url);
  if (!res.ok) throw new Error(`Attachment download failed: ${res.status} ${res.statusText}`);
  const buf = Buffer.from(await res.arrayBuffer());
  return { name: data.data.name, buffer: buf };
}

function destinationFor(filename) {
  const ext = extname(filename).toLowerCase();
  if (ext === '.md') return join(DRAFTS_DIR, filename);
  if (ext === '.html') return join(PREVIEWS_DIR, filename);
  return null;
}

async function main() {
  const env = loadEnv(ENV_PATH);
  const state = readJson(STATE_PATH, { downloaded: {} });
  if (!state.downloaded) state.downloaded = {};

  const myGid = await getMyGid(env);

  let tasks = [];
  try {
    const workspaceGid = await getWorkspaceGid(env);
    tasks = await searchTasksInWorkspace(env, workspaceGid);
    tasks = tasks.filter((t) => !t.assignee || t.assignee.gid === myGid);
  } catch (err) {
    // Fall back to /users/me/user_task_list if workspace search isn't allowed.
    console.error(`Workspace search failed (${err.message.slice(0, 120)}), trying tasks-since.`);
    tasks = await getRecentMatchingTasks(env, myGid);
  }

  if (tasks.length === 0) {
    console.log(JSON.stringify({ checked: 0, downloaded: 0, skipped: 0, message: 'no matching tasks found' }));
    return;
  }

  let downloaded = 0;
  let skipped = 0;
  const results = [];

  for (const task of tasks) {
    let atts;
    try {
      atts = await getTaskAttachments(env, task.gid);
    } catch (err) {
      results.push({ task: task.name, error: err.message.slice(0, 200) });
      continue;
    }
    for (const att of atts) {
      const filename = att.name || '';
      if (!FILENAME_PATTERN.test(filename)) continue;
      if (state.downloaded[att.gid]) { skipped++; continue; }
      const dest = destinationFor(filename);
      if (!dest) { skipped++; continue; }
      if (existsSync(dest)) {
        // Local already has a file with this name; record and skip rather than overwrite.
        state.downloaded[att.gid] = { filename, dest, written_at: new Date().toISOString(), skipped_existing: true };
        skipped++;
        continue;
      }
      try {
        const { buffer } = await downloadAttachment(env, att.gid);
        await mkdir(dirname(dest), { recursive: true });
        await writeFile(dest, buffer);
        state.downloaded[att.gid] = { filename, dest, written_at: new Date().toISOString() };
        downloaded++;
        results.push({ task: task.name, filename, dest });
      } catch (err) {
        results.push({ task: task.name, filename, error: err.message.slice(0, 200) });
      }
    }
  }

  if (!existsSync(dirname(STATE_PATH))) await mkdir(dirname(STATE_PATH), { recursive: true });
  await writeFile(STATE_PATH, JSON.stringify(state, null, 2) + '\n');

  console.log(JSON.stringify({ checked: tasks.length, downloaded, skipped, results }));
}

main().catch((err) => {
  console.error(err.message || String(err));
  process.exit(1);
});
