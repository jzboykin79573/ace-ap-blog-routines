---
description: Update a published post with corrected exam data, new College Board changes, or SEO improvements. Does NOT create a new post. Does NOT change voice, structure, or the WordPress URL.
argument-hint: <slug> [--data-only | --seo-only | --full]
---

# /blog-refresh — Update a Published Post

You refresh an existing published post. This is not a rewrite. It is a targeted correction pass: update stale exam data, fix broken internal links, re-gate seasonal CTAs, and advance `DATA_YEAR`. Voice, structure, and the WordPress slug are never changed.

## Arguments

User input: `$ARGUMENTS`

Parse for:
- One slug (e.g. `post-01-what-is-a-derivative`). Required.
- `--data-only` — only update exam data fields. Skip link and CTA checks.
- `--seo-only` — only update SEO Metadata block (title tag, meta description, keyword cluster). Skip everything else.
- `--full` — full rewrite pass. Use for posts more than 2 years old where voice and structure have drifted. This is rare.

If no slug provided:
```
USAGE: /blog-refresh <slug> [--data-only | --seo-only | --full]
Example: /blog-refresh post-01-what-is-a-derivative
```
and stop.

## Pre-flight

1. Confirm `Blogs/published/<slug>*.md` exists. If not, check `Blogs/drafts/` — the post may not have been published yet. If neither exists, fail with the slug not found.
2. Read the current skill file: `Blogs/_system/ace-apcalculus-blog-SKILL.md` (all sections).
3. Read the post front matter to determine `DATA_YEAR`, `DATE`, `post_type`, and `CLUSTER_ROLE`.

## Step 1: Exam data verification (skip if `--seo-only`)

WebFetch the official College Board AP Calculus AB and BC course descriptions:
- `https://apcentral.collegeboard.org/courses/ap-calculus-ab`
- `https://apcentral.collegeboard.org/courses/ap-calculus-bc`

Check every piece of exam data in the post against current CB materials. Exam data includes:
- AP score cut scores (composite thresholds for 3, 4, 5)
- MCQ and FRQ question counts and time limits
- Calculator-active vs. calculator-inactive section breakdown
- Scoring weights (percent of exam score per section)
- College credit examples ("a 5 typically earns X credit hours...")

Log every discrepancy. Update only the values that have changed. Do not rewrite surrounding prose — edit the data value in place.

After verifying, advance `DATA_YEAR` to the current year in the YAML front matter.

## Step 2: Internal link check (skip if `--data-only` or `--seo-only`)

For each internal Markdown link in the post body:
1. Extract the slug from the URL.
2. Check if `Blogs/published/<slug>*.md` exists.
3. If the linked post does not exist in published/, flag it as a broken link with the line number.

Do not auto-fix broken links. Report them and let Zach decide whether to remove the link, update the URL, or leave it pending a future publish.

## Step 3: Seasonal CTA re-gating (skip if `--data-only` or `--seo-only`)

Get today's date. Apply skill Section 6 CTA rules:
- If today is Sep 16 through Dec 31: remove or comment out any summer program CTAs (`/summer-diagnostic-page`, July/August programs). Replace with a year-round CTA.
- If today is Jan 1 through Sep 15: summer CTAs are allowed. If the post is missing them and the topic is relevant, flag for Zach to add (do not add automatically).

## Step 4: SEO Metadata update (always, unless `--data-only`)

Re-check:
- SEO Title ≤60 characters and contains the PRIMARY_KEYWORD
- Meta Description ≤160 characters
- KEYWORD_CLUSTER has at least 4 entries

Update any field that fails. Do not change the slug.

## Step 5: Apply changes

Make only the changes identified in Steps 1-4. Do not touch:
- Post voice, structure, or humanization layers
- The WordPress slug or any internal heading structure
- The SKILL DELTA block from the original draft

Add a refresh comment at the top of the file, immediately below the YAML front matter closing `---`:
```
<!-- REFRESHED: YYYY-MM-DD — [one-line summary: e.g., "Updated cut scores for 2026 exam; fixed 1 broken internal link"] -->
```

If a refresh comment already exists from a previous refresh, append a new line rather than replacing:
```
<!-- REFRESHED: 2026-05-01 — Updated cut scores -->
<!-- REFRESHED: 2027-05-03 — Updated MCQ time limit; removed stale summer CTA -->
```

## Step 6: Move and audit

Move the updated file:
```bash
cp Blogs/published/<slug>.md Blogs/drafts/<slug>.md
```
Leave the original in `published/` until Zach confirms the refreshed version is live on WordPress.

Run mechanical-auditor on the refreshed draft:
```
/mechanical-auditor Blogs/drafts/<slug>.md
```

## Output

```
REFRESH_DONE
slug: <slug>
data_changes:
  - Cut score for AP 5: [old value] → [new value]
  - FRQ time limit: [old value] → [new value]
  - (or "none")
link_changes:
  - L142: broken link to /post-03-limits-intro — post not yet in published/
  - (or "none")
cta_changes:
  - Removed summer program CTA (current date Sep 16 – Dec 31)
  - (or "none")
seo_changes:
  - Meta description was 172 chars → trimmed to 158
  - (or "none")
data_year: [old] → [new]
auditor: PASS [22 checks] | FAIL (N issues — list follows)
next_step: Review changes in Blogs/drafts/<slug>.md, then re-publish to WordPress and move back to Blogs/published/.
```

## Hard rules

- Never change the WordPress slug. Changing the slug breaks all inbound links.
- Never rewrite the SKILL DELTA block. That block belongs to the original draft session.
- Never auto-publish. The refreshed draft goes to `drafts/` for Zach's review first.
- If `--full` is passed, treat the post like a new draft: apply the full skill file, all voice gates, all audit rules. Return `DRAFTER_DONE` format, not `REFRESH_DONE`.
- The original published file stays in `published/` until Zach moves it after re-publishing.
