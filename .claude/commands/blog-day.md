---
description: Run the daily blog production pipeline. Topic curation → parallel drafting → mechanical audit. Stops before WP publish so Zach can do the subjective audit.
argument-hint: [--note "<student moment>"] [--case-study "<data>"] [--topics "topic1, topic2"] [--single] [--dry-run]
---

# /blog-day — Daily Blog Pipeline

You are orchestrating the daily blog production pipeline for ACE AP Calculus. Your job is to coordinate sub-agents in the right order, pass arguments through, and surface decision points to Zach. Do not draft posts yourself.

## Arguments

User input: `$ARGUMENTS`

Parse for:
- `--note "<text>"` — pass to topic-curator and forward to both drafters as PERSONAL NOTE.
- `--case-study "<data>"` — a specific real data point, student story, or tutoring observation unique to Zach's practice. Pass to topic-curator as the UNIQUE_ANGLE seed and forward to both drafters as CASE_STUDY. More structured than `--note`; use when Zach has a concrete stat or story to anchor the post. If neither `--case-study` nor `--note` is passed, topic-curator will include a "NEEDS INPUT" prompt in UNIQUE_ANGLE — Zach can fill it in before saying "go."
- `--topics "<topic1>, <topic2>"` — Zach is overriding curation. Pass to topic-curator unchanged.
- `--single` — produce 1 post instead of 2.
- `--dry-run` — only run topic-curator, do not draft. Pass through to topic-curator.
- `--remote-proposal` — REMOTE ROUTINE MODE. Run topic-curator only, persist its proposal to `Blogs/_queue/pending-approval.md`, push to `main`, email the proposal via Gmail MCP, then exit. No interactive approval gate. See `## Remote modes` section.
- `--remote-draft` — REMOTE ROUTINE MODE. Skip Step 1 entirely. Read topics from `Blogs/_queue/pending-approval.md`, run Steps 2–4, commit drafts + previews to `daily-YYYY-MM-DD` branch, and open a PR with the DAY READY summary as the body. See `## Remote modes` section.

## Pipeline

### Step 1 — Topic curation (blocking)

Invoke the `topic-curator` sub-agent with the parsed arguments.

When it returns the topic proposal block, present it verbatim to Zach and stop. Do not proceed to drafting.

If `--dry-run` was passed, end here — no further action.

If Zach replies "go", proceed to Step 2 with the proposed topics.
If Zach edits the block, use his edited topics.
If Zach replies anything else, treat it as feedback and re-invoke topic-curator with his note.

### Step 2 — Enrich topic blocks before drafting

Before invoking any drafter, read `Blogs/_queue/content-queue.md` and extract:
- `NEXT_HOOK_TYPE` — from the Hook Rotation table
- `NEXT_POST_TYPE` — from the Post Type Rotation table
- The unit-to-pillar map — to resolve `PILLAR_SLUG` for each topic's unit

For each approved topic block, append these fields before passing to the drafter:

```
HOOK_TYPE: <NEXT_HOOK_TYPE from content-queue.md>
POST_TYPE: <NEXT_POST_TYPE from content-queue.md>
CLUSTER_ROLE: spoke
PILLAR_SLUG: <match the topic's UNIT against the unit-to-pillar map; use "TBD" if not yet written>
DATA_YEAR: <current year — YYYY>
```

If Zach's edited topic block already includes any of these fields, preserve his values and do not overwrite. If `--single` was passed, only enrich and draft the one approved topic.

### Step 3 — Parallel drafting

For each enriched topic, invoke a `drafter` sub-agent **in parallel** (single message, multiple Agent calls). Pass the full enriched topic block as input.

If `--single`, only invoke one drafter.

Wait for all drafters to return `DRAFTER_DONE`.

If any drafter returns `DRAFTER_INPUT_ERROR`, surface the error to Zach and stop. Do not retry without Zach's instruction.

### Step 4 — Mechanical audit (per draft, sequential is fine)

For each draft produced in Step 2, invoke `mechanical-auditor` with the path to the `.md` file.

If a draft returns `FAIL`:
- Re-invoke its `drafter` with the FAIL report and the original topic block.
- Re-run `mechanical-auditor` on the regenerated draft.
- Maximum 2 retry loops per draft. After 2 retries, surface the persistent failures to Zach with `AUDIT_RETRY_EXHAUSTED` and stop for that draft.

If a draft returns `PASS`, mark it ready.

### Step 5 — Hand off to Zach

After all drafts pass mechanical audit (or retries are exhausted), emit a single summary message in this format:

```
DAY READY — <YYYY-MM-DD>

✅ post-NN-slug-1.md — <word count> words — PASS
   📊 SERP target: ~<N> words (avg of top 3 for "<primary keyword>") | Coverage gaps addressed: <list or "none">
✅ post-NN-slug-2.md — <word count> words — PASS
   📊 SERP target: ~<N> words (avg of top 3 for "<primary keyword>") | Coverage gaps addressed: <list or "none">

Open the previews in your browser (each has a Publishing Guide at the top):
- Blogs/previews/post-NN-slug-1.html
- Blogs/previews/post-NN-slug-2.html

Workflow per post:
1. Subjective audit (~6 min): Layers 1, 2, 4 — opinion, contradiction, ugly truth.
2. Edit the .md if you flag anything (preview reflects on reload).
3. Follow the Publishing Guide in the preview to paste into WordPress.
4. Schedule in WP (don't hard-publish).

After both posts are scheduled in WordPress, archive locally:
  /blog-archive post-NN-slug-1 post-NN-slug-2 --url "<live url 1>" --url "<live url 2>"
```

If any draft hit `AUDIT_RETRY_EXHAUSTED`, replace its line with:
```
⚠️  post-NN-slug — RETRY EXHAUSTED. Manual fix needed before archive:
    <list of persistent failures>
```

## Remote modes (overrides Pipeline)

These two modes split `/blog-day` across two scheduled remote routines so the approval gate can survive a stateless run. The proposal routine emails Zach; he approves by tapping "Run now" on the drafter routine.

### `--remote-proposal` (Routine 1)

1. Invoke `topic-curator` exactly as in Step 1 (forward `--note`, `--case-study`, `--topics`, `--single` if present). Reject `--dry-run` in this mode — emit `REMOTE_PROPOSAL_INVALID_FLAG: --dry-run` and exit if combined.
2. After the curator returns its TOPIC PROPOSALS block, write that block verbatim to `Blogs/_queue/pending-approval.md`, replacing the file's contents.
3. Stage, commit, and push:
   ```
   git add Blogs/_queue/pending-approval.md
   git commit -m "topics: pending approval $(date +%Y-%m-%d)"
   git push origin main
   ```
4. Send an email via Gmail MCP:
   - **To:** james@aceapcalculus.com
   - **Subject:** `ACE blog topics — YYYY-MM-DD`
   - **Body:** the curator's TOPIC PROPOSALS block, followed by:
     ```
     ---
     To approve as-is, tap "Run now" on the ace-blog-daily-drafter routine.
     To edit topics first, edit Blogs/_queue/pending-approval.md on main and push, then tap "Run now."
     ```
5. Exit. Do NOT proceed to Steps 2–5.

If the Gmail MCP send fails, still commit pending-approval.md (so the drafter routine can run if Zach sees the failure) but emit `REMOTE_PROPOSAL_EMAIL_FAILED: <error>` as a fatal error so the routine surfaces a failure.

### `--remote-draft` (Routine 2)

1. Skip Step 1 entirely. Do not invoke topic-curator.
2. `git pull origin main` to ensure the latest pending-approval.md (Zach may have edited it).
3. Read `Blogs/_queue/pending-approval.md`. Parse the TOPIC PROPOSALS block as if it had come from the curator.
   - If the file is missing: emit `REMOTE_DRAFT_NO_TOPICS: pending-approval.md not found` and exit.
   - If the file has not changed since the last `daily-*` PR was opened: emit `REMOTE_DRAFT_STALE_TOPICS: same topics already drafted in PR #<num>` and exit.
4. Run Step 2 (enrich) using the topics from the file.
5. Run Step 3 (parallel drafting) — same `DRAFTER_INPUT_ERROR` handling as the interactive flow.
6. Run Step 4 (mechanical audit) — same retry logic.
7. After all drafts pass mechanical audit (or hit `AUDIT_RETRY_EXHAUSTED`), instead of emitting the Step 5 summary text:
   ```
   DATE=$(date +%Y-%m-%d)
   git checkout -b daily-$DATE
   git add Blogs/drafts/post-*.md Blogs/previews/post-*.html
   git commit -m "drafts: daily $DATE"
   git push -u origin daily-$DATE
   gh pr create \
     --title "Daily drafts — $DATE" \
     --body "<DAY READY summary block — see format below>" \
     --base main \
     --head daily-$DATE
   ```
8. PR body uses the DAY READY summary from Step 5 with the workflow lines replaced by:
   ```
   Workflow per post (from your phone):
   1. Open the .html preview in the GitHub app to skim — Publishing Guide is at the top.
   2. Subjective audit (~6 min): Layers 1, 2, 4 — opinion, contradiction, ugly truth.
   3. To edit, push commits to this branch (preview reflects on next pull).
   4. Merge the PR when ready.

   Then locally:
   - git checkout main && git pull
   - Open each Blogs/previews/post-NN-slug.html in your browser.
   - Follow the Publishing Guide to paste into WordPress, schedule (don't hard-publish).
   - After both posts are scheduled, run /blog-archive ... locally to move files to published/.
   ```
9. Exit.

### Hard rules for remote modes
- Never run `--remote-proposal` and `--remote-draft` concurrently — they touch the same `pending-approval.md`.
- Never push directly to `main` from `--remote-draft`. Always go via PR.
- If `pending-approval.md` is missing in `--remote-draft`, do not invent topics. Exit with `REMOTE_DRAFT_NO_TOPICS`.
- The Gmail MCP send is a hard requirement of `--remote-proposal` — if it fails, the routine surfaces a fatal error.

## Hard rules

- Never skip the mechanical-auditor.
- Never silently swap topics. If you can't produce a draft for a topic, stop and ask.
- Pass `--note` through to drafters via the topic block's PERSONAL NOTE field.
- Pass `--case-study` through to drafters via the topic block's CASE_STUDY field.
- Never write to `published/`. Only `/blog-archive` moves files there.
- Publishing happens in WordPress, manually. This command never touches the WP REST API.
