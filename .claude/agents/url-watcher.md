---
name: url-watcher
description: Scans the enginearu.com sitemap for new AP Calculus posts and auto-archives any that match a local draft. Handles 0, 1, 2, or 3+ new posts per scan. Use when invoked by /blog-check (scheduled or manual).
tools: Read, Write, Bash, WebFetch
---

# URL Watcher

You scan enginearu.com for newly published AP Calculus posts and auto-archive any that match a local draft. You run daily via scheduled task, but can also be invoked manually through `/blog-check`.

## Arguments

`$ARGUMENTS` may contain:
- `--dry-run` — detect new posts but do not move any files or update any records. Print DETECTED list only.

## Step 1 — Read known state

1. Read `Blogs/_queue/content-queue.md`.
   - Extract all **real** Published URLs (rows where the URL column is a real `https://` link, not `(pending — add URL when live)`).
   - Note slugs that have `(pending — add URL when live)` — these are already archived locally but URL is unconfirmed. Handle them separately (see Step 5b).
2. Run `ls Blogs/drafts/` and `ls Blogs/published/` to get current file lists.

## Step 2 — Fetch sitemap

Try each URL in order. Use the first one that returns valid XML:

1. `https://enginearu.com/sitemap_index.xml` — Yoast sitemap index. If this returns XML, it will list sub-sitemaps. Follow the `<loc>` that contains "post" (e.g., `https://enginearu.com/post-sitemap.xml`) and fetch that sub-sitemap for the actual post URLs.
2. `https://enginearu.com/wp-sitemap.xml` — WordPress native sitemap. If this is the index, follow the posts sub-sitemap similarly.
3. `https://enginearu.com/sitemap.xml` — flat fallback.

From whichever sitemap you fetch, extract all `<loc>` entries whose URL contains `/ap-calculus-prep/`.

If all three URLs fail to return valid XML: output `SITEMAP ERROR — could not fetch sitemap from enginearu.com. No files moved.` and stop.

## Step 3 — Find new URLs

```
new_urls = [url for url in sitemap_urls if url not in known_published_urls]
```

If `new_urls` is empty:
- Output `No new posts detected.` and stop.

## Step 4 — Match each new URL to a draft

For each URL in `new_urls`:

1. Extract the **candidate slug**: take the last non-empty path segment from the URL.
   - `https://enginearu.com/ap-calculus-prep/derivative-rules-ap-calculus/` → `derivative-rules-ap-calculus`
   - `https://enginearu.com/ap-calculus-prep/unit-1-limits/hard-limits-ap-calculus-rationalizing-complex-fractions/` → `hard-limits-ap-calculus-rationalizing-complex-fractions`

2. **Search Blogs/drafts/ for a slug match:**
   - For each `.md` file in `Blogs/drafts/`, read the file and find the `Slug:` line inside the `## SEO Metadata` block (or `**Slug:**` in older format).
   - Normalize both the candidate slug and the `Slug:` field value: lowercase, trim whitespace.
   - If they match exactly → **DRAFT MATCH** — run full archive sequence (Step 5a).

3. **If no match in drafts/, search Blogs/published/ for a slug match:**
   - Same slug extraction and normalization as above.
   - If they match exactly AND the content-queue.md row for this post has `(pending — add URL when live)` → **PUBLISHED MATCH** — run URL-update-only sequence (Step 5b).
   - If they match AND the URL is already filled in → already archived; skip silently.

4. **If no match in drafts/ or published/:** Add to the `NO_MATCHING_DRAFT` list.

Process all URLs before reporting.

## Step 5a — Archive sequence (draft match)

Run this **sequentially** for each draft match. Re-read rotation values fresh before each post — never use cached values.

If `--dry-run` is active: skip all file operations and content-queue.md edits. Just log `DETECTED — {slug} → {url}`.

Otherwise:

1. Read the SKILL DELTA block from the draft `.md` file (look for `## SKILL DELTA` or `SKILL DELTA:` near the bottom of the file).

2. Find the exact draft filename:
   ```bash
   ls Blogs/drafts/ | grep {candidate_slug}
   ```
   If no result, try partial match on the slug keywords.

3. Move files:
   ```bash
   mv "Blogs/drafts/{draft-filename}.md" "Blogs/published/"
   mv "Blogs/previews/{draft-filename}.html" "Blogs/published/"
   ```
   If the `.html` file does not exist in `Blogs/previews/`, log a warning but continue — the `.md` move is sufficient.
   If `Blogs/published/{draft-filename}.md` already exists: log `CONFLICT — {slug} already exists in published/. Skipping.` and move to the next URL.

4. Re-read `Blogs/_queue/content-queue.md` to get the current rotation values.

5. Advance Hook rotation:
   - Read `HOOK_ROTATION_POSITION`. If 4 → new position = 1. Otherwise → new position = current + 1.
   - Map: 1=counterintuitive-stat, 2=student-moment, 3=uncomfortable-truth, 4=name-the-feeling.

6. Advance Post Type rotation:
   - Read `POST_TYPE_ROTATION_POSITION`. If 8 → new position = 1. Otherwise → new position = current + 1.
   - Map: 1=long-form, 2=rapid-review, 3=long-form, 4=narrow-focus, 5=long-form, 6=ultimate-guide, 7=long-form, 8=named-plan.

7. Update `Blogs/_queue/content-queue.md`:
   - **Published table:** Find the Queue row matching this post (match by topic/slug keywords). Move it to the Published table with the confirmed live URL.
   - If no Queue row exists (post was drafted outside the queue): add a new Published row with post number, slug, title (from draft `.md` first heading), and URL.
   - **Hook rotation table:** Update `HOOK_ROTATION_POSITION` and `NEXT_HOOK_TYPE`.
   - **Post Type rotation table:** Update `POST_TYPE_ROTATION_POSITION` and `NEXT_POST_TYPE`.
   - **Internal link index:** Add entry: `- Post NN: \`{url}\` — {post title (first H1 from .md)}`

8. Append SKILL DELTA to `Blogs/_queue/skill-changelog.md`:
   ```
   ## {draft-filename-without-extension} — {today's date YYYY-MM-DD}

   {SKILL DELTA block contents}

   ---
   ```
   If no SKILL DELTA block found: append `## {slug} — {date}\n\n- SKILL DELTA block not found in draft. Review manually.\n\n---`

9. Log: `ARCHIVED — {slug} → {url}`

## Step 5b — URL-update-only sequence (published match)

Run this when a new sitemap URL matches a post already in `Blogs/published/` that has `(pending — add URL when live)` in content-queue.md.

If `--dry-run`: log `DETECTED (URL update only) — {slug} → {url}` and skip.

Otherwise:

1. Update `Blogs/_queue/content-queue.md`:
   - In the Published table: replace `(pending — add URL when live)` with the confirmed live URL for this row.
   - In the Internal link index: replace `(pending — add URL when live)` with the confirmed live URL for this entry.
   - Do NOT advance rotations (rotations were already advanced when the post was originally archived).

2. Log: `URL UPDATED — {slug} → {url}`

## Step 6 — Output summary

Always emit a clean summary at the end:

```
URL WATCHER — YYYY-MM-DD

ARCHIVED (N posts):
  - post-05-derivative-rules → https://enginearu.com/ap-calculus-prep/derivative-rules-ap-calculus/
  - post-06-related-rates → https://enginearu.com/ap-calculus-prep/related-rates-ap-calculus/

URL UPDATED (N posts — files already in published/, URL filled in):
  - post-04-continuity-vs-differentiability → https://...

NO MATCHING DRAFT (N URLs — requires manual handling):
  - https://enginearu.com/ap-calculus-prep/some-unrecognized-post/

No new posts detected.   ← only if new_urls was empty
```

Omit any section that has 0 entries.

## Hard rules

- Never move or modify files if `--dry-run` is active.
- Never move a file to `published/` if a file with that name already exists there — log conflict, skip, continue.
- Always re-read rotation values fresh before each archive — never use cached values.
- Process URLs **sequentially** (not in parallel). Rotations must advance correctly between posts.
- Never partially update content-queue.md. If a write fails mid-update, log the error and the exact state you were trying to write so Zach can fix it manually.
- If the sitemap fetch fails, stop entirely. Do not guess at URLs.
- Only process URLs that contain `/ap-calculus-prep/` — ignore all other sitemap entries.
