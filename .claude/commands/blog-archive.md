---
description: Archive drafts after Zach has manually published them to WordPress. Moves files from drafts/ + previews/ to published/ and updates content-queue.md with the live URL.
argument-hint: <draft-id> [<draft-id>...] [--url "https://..."]
---

# /blog-archive — Move Drafts to Published

You archive drafts that Zach has already manually posted to WordPress. The actual publishing happens in WordPress (via the Publishing Guide built into each `.html` preview). Your job is bookkeeping: move files, update the queue, log the SKILL DELTA.

## Arguments

User input: `$ARGUMENTS`

Parse for:
- One or more draft IDs (e.g. `post-02 post-03` or `post-02-limits-intro`). At least one required.
- `--url "<live URL>"` — optional. The published WordPress URL. If multiple drafts and one URL, ask Zach which draft it belongs to. If multiple `--url` flags, pair them with drafts in order.

If no draft IDs provided, respond:
```
USAGE: /blog-archive <draft-id> [<draft-id>...] [--url "https://..."]
Example: /blog-archive post-02-limits-intro --url "https://enginearu.com/limits-intro"
```
and stop.

## Pre-flight

For each draft ID:
1. Confirm `Blogs/drafts/<draft-id>*.md` exists.
2. Confirm `Blogs/previews/<draft-id>*.html` exists.
3. Confirm the same slug does NOT already exist in `Blogs/published/`.

If any check fails, list what's wrong and stop. Don't move anything.

## Confirm with Zach

Before moving anything, surface what you're about to do:

```
Ready to archive:
- post-02-limits-intro.md  → Blogs/published/
- post-02-limits-intro.html → Blogs/published/
content-queue.md will be updated to mark this row as Published.

Confirm with "yes" or cancel.
```

Wait for "yes" (or equivalent affirmative). On anything else, treat as cancel.

## Execute

For each draft:

```bash
mv Blogs/drafts/<draft-id>*.md Blogs/published/
mv Blogs/previews/<draft-id>*.html Blogs/published/
```

Then update `Blogs/_queue/content-queue.md`:
- Move the row from the Queue or In Progress table to the Published table.
- Fill in the Published URL column with the `--url` value if provided, else `(pending — add URL when live)`.
- Add the slug to the "Internal link index" section so future posts can link to it.

Read the SKILL DELTA block from the bottom of the archived `.md`. Append it to `Blogs/_queue/skill-changelog.md` under a header `## post-NN-slug — <today's date>`. This is what feeds the next skill iteration.

Advance both rotations in `Blogs/_queue/content-queue.md`:

Hook rotation:
1. Read the current `HOOK_ROTATION_POSITION` value (1-4).
2. Increment by 1. If the current value is 4, wrap to 1.
3. Map the new position: 1=counterintuitive-stat, 2=student-moment, 3=uncomfortable-truth, 4=name-the-feeling.
4. Update both `HOOK_ROTATION_POSITION` and `NEXT_HOOK_TYPE`.

Post type rotation:
1. Read the current `POST_TYPE_ROTATION_POSITION` value (1-8).
2. Increment by 1. If the current value is 8, wrap to 1.
3. Map the new position: 1=long-form, 2=rapid-review, 3=long-form, 4=narrow-focus, 5=long-form, 6=ultimate-guide, 7=long-form, 8=named-plan.
4. Update both `POST_TYPE_ROTATION_POSITION` and `NEXT_POST_TYPE`.

## Output format

```
ARCHIVED — post-02-limits-intro
  files: Blogs/published/post-02-limits-intro.{md,html}
  queue: content-queue.md updated (Published table, internal link index)
  delta: appended to skill-changelog.md

ARCHIVED — post-03-derivative-rules
  ...

Done. 2 posts archived.
```

If a draft fails mid-batch, report it inline, do not roll back the others:
```
FAILED — post-NN-slug: <reason>
```

## Hard rules

- Never archive a draft that hasn't passed mechanical-auditor. If you can't tell whether it has, ask Zach.
- Never overwrite a file in `published/`. If a file with the same name exists, fail loudly.
- Never modify the body of the `.md` or `.html` during archive. Move only.
- The SKILL DELTA capture is non-optional — that's how the system learns. If the .md is missing a SKILL DELTA block, flag it but proceed.
