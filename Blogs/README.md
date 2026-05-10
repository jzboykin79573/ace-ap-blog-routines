# ACE AP Calculus — Blog Engine

## Folder Structure

```
Blogs/
├── _system/                        ← skill file + setup docs (never blog content)
│   ├── ace-apcalculus-blog-SKILL.md
│   └── claude-code-blog-setup.md
├── _queue/                         ← content planning + skill iteration log
│   ├── content-queue.md            ← planned topics, published URLs, internal link index
│   └── skill-changelog.md          ← what changed after each post + SKILL DELTA entries
├── drafts/                         ← .md files, one per post (post-01-slug.md)
├── previews/                       ← .html visual previews matching each draft
├── published/                      ← move both .md and .html here after WordPress publish
└── README.md                       ← this file
```

## Daily Workflow

1. Open terminal → `cd` to this project → `claude`
2. Say the trigger (see `_system/claude-code-blog-setup.md`)
3. Claude reads `_system/ace-apcalculus-blog-SKILL.md`, writes draft + preview
4. Open `previews/post-XX-slug.html` in browser to review
5. Edit `drafts/post-XX-slug.md` as needed
6. Paste into WordPress (see WordPress steps below)
7. Move both files to `published/`
8. Update `_queue/content-queue.md` with live URL + internal link index
9. Add SKILL DELTA to `_queue/skill-changelog.md`

## Updating the Skill

After each post, copy SKILL DELTA notes into `_queue/skill-changelog.md`, then update `_system/ace-apcalculus-blog-SKILL.md` with the new lessons. The file in `_system/` is what Claude reads every session.
