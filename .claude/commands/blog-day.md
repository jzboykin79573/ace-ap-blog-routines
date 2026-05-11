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
- `--remote-proposal` — REMOTE ROUTINE MODE. Run topic-curator only, then create an Asana task in My Tasks with the proposal block as the task description, then exit. No interactive approval gate. See `## Remote modes` section.
- `--remote-draft` — REMOTE ROUTINE MODE. Skip Step 1 entirely. Read topics from the latest incomplete Asana task titled `ACE blog topics — *`, run Steps 2–4, commit drafts + previews to `daily-YYYY-MM-DD` branch, open a PR with the DAY READY summary as the body, then mark the Asana task complete. See `## Remote modes` section.

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

These two modes split `/blog-day` across two scheduled remote routines so the approval gate can survive a stateless run. The proposal routine creates an Asana task with the proposals; Zach reviews on his phone and approves by tapping "Run now" on the drafter routine. The Asana task description is the **source of truth** for topics — Zach can edit it before approving, and the drafter reads the task, not git.

Both modes require the **Asana** MCP connector to be attached to the routine. The relevant Asana tools (names may vary by SDK version, follow the actual tool list available at runtime):
- `mcp__asana__get_me` — to find Zach's Asana user GID for assignment
- `mcp__asana__create_tasks` — to create the proposal task
- `mcp__asana__search_tasks` — to find the latest pending proposal task
- `mcp__asana__get_task` — to read the task description (which holds the topic block)
- `mcp__asana__update_tasks` — to mark the task complete after drafting
- `mcp__asana__add_comment` — for status updates on the task

### `--remote-proposal` (Routine 1)

1. Invoke `topic-curator` exactly as in Step 1 (forward `--note`, `--case-study`, `--topics`, `--single` if present). Reject `--dry-run` in this mode — emit `REMOTE_PROPOSAL_INVALID_FLAG: --dry-run` and exit if combined.
2. Take the curator's TOPIC PROPOSALS block as a string. Strip the trailing `Reply "go"...` instruction line — that's an interactive-mode artifact and shouldn't appear in the Asana task.
3. Get Zach's Asana user GID via `mcp__asana__get_me` (used for assignee).
4. Create an Asana task via `mcp__asana__create_tasks`:
   - **name:** `ACE blog topics — YYYY-MM-DD`
   - **assignee:** Zach's GID
   - **notes** (description): the trimmed TOPIC PROPOSALS block, followed by a blank line, then this footer verbatim:
     ```
     ---
     APPROVAL INSTRUCTIONS

     To approve as-is: open the Claude Code app or claude.ai/code/routines and tap "Run now" on the ace-blog-daily-drafter routine.

     To edit topics first: edit this task's description above (replace TOPIC fields, keep block format intact), save, then tap "Run now" on the drafter routine. The drafter reads the latest description.

     The drafter will mark this task Complete and add a comment with the PR link when drafts are ready.
     ```
   - Do NOT specify a project (leave it as a private My Tasks task) unless the runtime tool requires one. If `create_tasks` requires a workspace_gid, fetch it from `get_me` (workspaces array, take the first).
5. Capture the new task's GID. Echo it in the routine's output for audit (`REMOTE_PROPOSAL_TASK_GID: <gid>`).
6. Exit. Do NOT touch `pending-approval.md`, do NOT push to git.

If `mcp__asana__create_tasks` fails (network, auth, etc.), emit `REMOTE_PROPOSAL_ASANA_FAILED: <error>` as a fatal error so the routine surfaces a failure. Do NOT fall back to email — Asana is the only handoff in this mode.

### `--remote-draft` (Routine 2)

1. Skip Step 1 entirely. Do not invoke topic-curator.
2. `git pull origin main` to ensure the working copy matches main (the drafter writes new files; the topic source is Asana, not git).
3. Find the latest pending proposal task via `mcp__asana__search_tasks`:
   - Filter: assignee = me, completed = false, name starts with `ACE blog topics — `, sort by created_at desc, limit 1.
   - If zero results: emit `REMOTE_DRAFT_NO_PENDING_TOPICS: no incomplete Asana task matching 'ACE blog topics — *' found` and exit cleanly.
4. Fetch the full task via `mcp__asana__get_task`. Parse the `notes` field:
   - Strip the `--- APPROVAL INSTRUCTIONS ...` footer.
   - The remaining text is the TOPIC PROPOSALS block. Parse it with the same logic the orchestrator uses to handle Zach's interactive edits in Step 1.
   - If parsing fails: add a comment to the task via `mcp__asana__add_comment` saying "Drafter could not parse the topic block. Check formatting and tap Run Now again." then exit with `REMOTE_DRAFT_PARSE_FAILED`.
5. Run Step 2 (enrich) using the topics from the parsed task description.
6. Run Step 3 (parallel drafting) — same `DRAFTER_INPUT_ERROR` handling as the interactive flow.
7. Run Step 4 (mechanical audit) — same retry logic.
8. After all drafts pass mechanical audit (or hit `AUDIT_RETRY_EXHAUSTED`), commit drafts and open a PR. **Use the GitHub Integration MCP (or `gh` if available in the runtime) to open the PR; do NOT use a personal access token.**
   ```
   DATE=$(date +%Y-%m-%d)
   git checkout -b daily-$DATE
   git add Blogs/drafts/post-*.md Blogs/previews/post-*.html
   git commit -m "drafts: daily $DATE"
   git push -u origin daily-$DATE
   ```
   Then open the PR. Title: `Daily drafts — YYYY-MM-DD`. Base: `main`. Head: `daily-YYYY-MM-DD`. Body: see format in step 9.
9. PR body uses the DAY READY summary from Step 5 with the workflow lines replaced by:
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
10. After the PR is created, mark the Asana task complete via `mcp__asana__update_tasks` (set `completed: true`) and add a comment via `mcp__asana__add_comment`:
    ```
    Drafted in PR #<N>: <PR URL>
    ```
11. Exit.

### Hard rules for remote modes
- Never run `--remote-proposal` and `--remote-draft` concurrently — though they touch different surfaces (Asana create vs Asana read), the drafter assumes there's exactly one pending proposal task.
- Never push directly to `main` from `--remote-draft`. Always go via PR.
- If no pending Asana task is found in `--remote-draft`, do not invent topics or fall back to git. Exit cleanly with `REMOTE_DRAFT_NO_PENDING_TOPICS`.
- The Asana MCP calls in both modes are hard requirements — if they fail, the routine surfaces a fatal error.
- Do NOT modify `Blogs/_queue/pending-approval.md` in either remote mode. That path was an earlier design and is no longer used; the source of truth is the Asana task.

## Hard rules

- Never skip the mechanical-auditor.
- Never silently swap topics. If you can't produce a draft for a topic, stop and ask.
- Pass `--note` through to drafters via the topic block's PERSONAL NOTE field.
- Pass `--case-study` through to drafters via the topic block's CASE_STUDY field.
- Never write to `published/`. Only `/blog-archive` moves files there.
- Publishing happens in WordPress, manually. This command never touches the WP REST API.
