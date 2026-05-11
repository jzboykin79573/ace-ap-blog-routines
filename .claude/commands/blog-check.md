---
description: Scan enginearu.com for newly published AP Calculus posts and auto-archive any that match a local draft. Handles 0, 1, 2, or 3+ new posts per scan. Safe to run anytime — use --dry-run to preview without making changes.
argument-hint: [--dry-run]
---

# /blog-check — Scan for New Live Posts and Auto-Archive

You are the orchestrator for the daily URL scan pipeline. Your job is to invoke the `url-watcher` agent and surface results to Zach.

## Arguments

`$ARGUMENTS` may contain:
- `--dry-run` — preview mode. Detect new posts but do not archive anything. Pass through to url-watcher.

## Pipeline

### Step 1 — Invoke url-watcher

Invoke the `url-watcher` sub-agent, passing `--dry-run` if present in arguments.

Wait for url-watcher to complete and return its summary.

### Step 2 — Surface results

Emit the url-watcher summary verbatim.

If any posts were archived (not dry-run), add this reminder at the end:

```
---
Local records updated. Next steps:
- content-queue.md — Published table + rotations + internal link index: ✅ updated
- skill-changelog.md — SKILL DELTAs: ✅ appended
- Blogs/published/ — files moved: ✅ done

No action needed from you unless any posts appear in the "NO MATCHING DRAFT" list above.
```

If `--dry-run` was used, add:

```
---
DRY RUN — no files were moved and no records were updated.
Run /blog-check (without --dry-run) to archive the detected posts.
```

## Hard rules

- Never skip the url-watcher. Always invoke it even if you think nothing new is live.
- Never write to `Blogs/published/` directly. url-watcher handles all file operations.
- Never advance rotations manually. url-watcher handles rotation advancement.
- This command is safe to run multiple times. url-watcher is idempotent — it will not re-archive a post that is already in published/.
