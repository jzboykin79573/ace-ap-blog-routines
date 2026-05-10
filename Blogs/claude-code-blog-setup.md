# Claude Code Setup Guide — ACE AP Calculus Blog System

This guide gets you from zero to a fully automated blog engine where you say
"writing blog" and Claude Code reads your skill, writes your draft, and saves
everything to the right folder. No uploading. No resetting. Just the trigger.

---

## Step 1 — Install Claude Code

Claude Code runs in your terminal. You need Node.js installed first.

**Check if you already have Node.js:**
Open Terminal (Mac) or Command Prompt (Windows) and type:
```
node --version
```
If you see a version number, you are good. If not, go to nodejs.org and
download the LTS version. Install it like any normal app.

**Install Claude Code:**
Once Node.js is installed, paste this into your terminal:
```
npm install -g @anthropic/claude-code
```
Wait for it to finish. Then type:
```
claude
```
It will ask you to log in with your Anthropic account. Use the same account
as your Claude.ai. Follow the prompts.

---

## Step 2 — Create Your Blog Folder Structure

On your computer, create this folder structure. You can do it manually in
Finder (Mac) or File Explorer (Windows), or paste this into your terminal:

**Mac/Linux:**
```
mkdir -p ~/aceapcalculus-blog/skill
mkdir -p ~/aceapcalculus-blog/drafts
mkdir -p ~/aceapcalculus-blog/previews
mkdir -p ~/aceapcalculus-blog/published
```

**Windows:**
```
mkdir %USERPROFILE%\aceapcalculus-blog\skill
mkdir %USERPROFILE%\aceapcalculus-blog\drafts
mkdir %USERPROFILE%\aceapcalculus-blog\previews
mkdir %USERPROFILE%\aceapcalculus-blog\published
```

Your folder structure will look like this:
```
aceapcalculus-blog/
  skill/
    ace-apcalculus-blog-SKILL.md    <- skill file lives here permanently
  drafts/
    post-01-what-is-a-derivative.md
    post-02-limits.md
    ...
  previews/
    post-01-preview.html
    post-02-preview.html
    ...
  published/
    <- move posts here after Zach's Flow review and publish
```

---

## Step 3 — Save Your Skill File

Take the `ace-apcalculus-blog-SKILL.md` file from today's session and move
it into:
```
aceapcalculus-blog/skill/ace-apcalculus-blog-SKILL.md
```

This file never moves. Claude Code will read it every time you start a blog
session. When we update the skill after future posts, you replace this file
with the new version. That is the only maintenance required.

---

## Step 4 — Create a CLAUDE.md Project File

This is the key step. Claude Code looks for a file called `CLAUDE.md` in
whatever folder you open it from. This file tells Claude Code exactly what
to do when it starts — including where the skill is and what triggers it.

Create a file called `CLAUDE.md` inside your `aceapcalculus-blog` folder
and paste this into it:

```markdown
# ACE AP Calculus Blog Engine — Claude Code Project

## What this project is
This is Zach's blog content engine for ACE AP Calculus and EngiNearU.
Every blog post is written here, reviewed by Zach, and then published
to enginearu.com.

## Skill file location
Before doing anything blog-related, always read the full skill file at:
skill/ace-apcalculus-blog-SKILL.md

This file contains Zach's voice rules, the 5-layer humanization audit
system, post structure, CTA rules, MathJax formatting, Desmos rules,
and all lessons learned from previous posts.

## Trigger
When Zach says "writing blog" or "write a blog" or provides a blog
topic trigger in this format:

TOPIC: [topic name]
PRIMARY KEYWORD: [search phrase]
UNIT: [unit number]
TRANSCRIPT: [paste or "none"]
GRAPH NEEDED: [yes/no]
CTA THIS POST: [A/B/C/D/E]
EXISTING POSTS: [titles or "none"]
PERSONAL NOTE: [Zach's teaching moment]
DATE: [today's date]

...immediately:
1. Read skill/ace-apcalculus-blog-SKILL.md
2. Generate the full blog post following the 11-section structure
3. Save the .md draft to: drafts/post-[number]-[slug].md
4. Save the HTML preview to: previews/post-[number]-[slug].html
5. Confirm both files are saved and tell Zach where they are

## Folder rules
- drafts/ — all .md WordPress-ready files go here
- previews/ — all .html visual previews go here
- published/ — Zach moves files here manually after publishing
- skill/ — skill file only, do not write blog content here

## Voice rules (always active)
- I = Zach teaching or sharing experience
- We = Zach and student working through something together
- You = always addressing the student
- Zero em-dashes
- Never open a section with a definition
- No forbidden phrases (see skill file for full list)

## Output format
Always produce two files per post:
1. [slug].md — clean WordPress-ready markdown with MathJax
2. [slug].html — styled visual preview with browser chrome UI,
   math rendering, editable fields, and Zach's Flow checklist
```

Save this file. Claude Code reads it automatically every time you open
the project.

---

## Step 5 — Start a Blog Session

From now on, every blog session starts the same way:

1. Open your terminal
2. Navigate to your blog folder:
```
cd ~/aceapcalculus-blog
```
3. Start Claude Code:
```
claude
```
4. Claude Code reads your CLAUDE.md automatically and knows the full system
5. Say your trigger:
```
writing blog

TOPIC: Chain Rule
PRIMARY KEYWORD: chain rule AP Calculus
UNIT: Unit 3 — AB and BC
TRANSCRIPT: none
GRAPH NEEDED: yes — composite function curve
CTA THIS POST: A
EXISTING POSTS: What is a Derivative
PERSONAL NOTE: Students always forget to multiply by the derivative
of the inside function. They get the outside right and stop there.
DATE: April 26, 2026
```
6. Claude Code reads the skill file, writes the full post, saves both
   files, and tells you exactly where they are

---

## Step 6 — After Zach's Flow Review

Once you have reviewed the post and made your edits:

1. Open the `.md` file and copy the content into WordPress
2. Move both files into the `published/` folder so you know what is live
3. Update the `EXISTING POSTS` field in your next trigger with the new
   post title so internal links stay current

---

## Updating the Skill File

After each post we build together, I will give you an updated
`ace-apcalculus-blog-SKILL.md` that includes new lessons learned.

To update:
1. Download the new skill file from the Claude.ai session
2. Replace the file at `aceapcalculus-blog/skill/ace-apcalculus-blog-SKILL.md`
3. That is it — Claude Code picks it up automatically next session

---

## Quick Reference — Daily Blog Workflow

```
1. Open terminal
2. cd ~/aceapcalculus-blog
3. claude
4. Say: "writing blog" + paste your topic trigger
5. Claude Code reads skill, writes draft, saves files
6. Open previews/[post].html in your browser to review
7. Make edits to drafts/[post].md
8. Paste into WordPress
9. Move to published/
10. Done
```

Total active time per post: 10-15 minutes including your review.
Claude Code handles the rest.

---

## Troubleshooting

**"command not found: claude"**
Node.js installed correctly but Claude Code is not in your path.
Try: `npx @anthropic/claude-code`

**Claude Code does not read the skill file**
Make sure CLAUDE.md is in the root of the folder you opened
(`aceapcalculus-blog/`) and that the skill file path in CLAUDE.md
matches exactly where you saved it.

**Math does not render in the preview**
The HTML preview uses MathJax from a CDN. Make sure you have an
internet connection when opening the preview file.

**Post saves to the wrong folder**
Check that you ran `claude` from inside `aceapcalculus-blog/` and
not from your home directory. The folder you are in when you type
`claude` is the project root Claude Code works from.

---

*Setup guide created April 26, 2026. Update skill file after each
post iteration.*
