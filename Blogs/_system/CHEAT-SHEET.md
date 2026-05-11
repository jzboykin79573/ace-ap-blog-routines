# ACE AP Blog Auto-Publisher: Cheat Sheet

## The 30-second mental model

Two things have to be true for a post to ship:

1. The draft has `ready_to_publish: true` in its YAML front-matter.
2. An image whose filename contains the post slug exists in `/Users/zachboykin/AIProjects/Blog Titles/`.

When both are true, the next scheduled run (8am or 4pm) publishes the post to enginearu.com as "Zach Boykin," uploads the image as the featured image, and logs the result. Hard cap: 2 posts per day.

## What to do per post

1. Finish the draft. Open `drafts/post-XX-slug.md` and add this line to the YAML block at the top:
   ```
   ready_to_publish: true
   ```
2. In Claude Design, generate the featured image. Download it to:
   ```
   /Users/zachboykin/AIProjects/Blog Titles/
   ```
   Name it so the post slug appears in the filename, e.g.:
   ```
   post-11-area-between-curves.png
   ```
   PNG, JPG, JPEG, WEBP, or GIF all work. The slug match is case-insensitive.
3. Either wait for the next 8am or 4pm tick, or run it now:
   ```bash
   /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_system/publish-cron.sh
   ```

That's it. Each run publishes at most one post. With two runs per day, you cap at two.

## What blocks a publish (skip reasons)

If the pipeline logs `action: skip`, here's what each reason means:

| Reason | Fix |
|--------|-----|
| `no_ready_drafts` | No draft has `ready_to_publish: true`. Set the flag. |
| `cap_reached` | You already published 2 today. Wait until tomorrow, or pass `--force` if urgent. |
| `already_published` | The slug is in `wp-post-ids.json`. Already shipped, no action. |
| `no_preview_html` | The preview HTML file is missing for that slug. Re-run preview generation. |
| `paste_markers_missing` | The preview HTML lacks the `START` / `END` comment markers around the WP block. Regenerate the preview. |
| no image found | Save the image to `Blog Titles/` with the slug in the filename. |

## How to check what's happening

**Most recent run:**
```bash
tail -20 /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_system/publish.log
```

**What's already published:**
```bash
cat /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_queue/wp-post-ids.json
```

**Today's count toward the 2/day cap:**
```bash
cat /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_queue/publish-state.json
```

**Is the schedule active?**
```bash
launchctl list | grep aceblog
```
If it lists `com.zachboykin.aceblog.publish` with a number (last exit status) in the second column, it's active. `0` means the last run succeeded. Non-zero means something failed (check publish.log).

## Manual overrides

**Publish a specific slug right now (still respects the 2/day cap):**
The scheduled script always picks the oldest ready draft. To publish a specific one, use the scan script directly:
```bash
node /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_system/scan-drafts.mjs --slug post-XX-name
```
This just shows what would publish. To actually do it, run the full wrapper after you've set that draft as the only one with `ready_to_publish: true`, then run `publish-cron.sh`.

**Bypass the 2/day cap (use sparingly):**
```bash
node /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_system/scan-drafts.mjs --force
```
Note: only the scan respects `--force`. The cron wrapper does not pass it through, so the cap holds in normal use.

**Pause the schedule:**
```bash
launchctl unload ~/Library/LaunchAgents/com.zachboykin.aceblog.publish.plist
```

**Resume the schedule:**
```bash
launchctl load ~/Library/LaunchAgents/com.zachboykin.aceblog.publish.plist
```

## What gets published, exactly

- **Title:** the `title:` field from the draft front-matter.
- **Slug (URL):** the `slug:` field from front-matter (this becomes part of the URL).
- **Body:** everything between the `▼▼▼ START` and `▲▲▲ END` comment markers in the preview HTML.
- **Author:** Zach Boykin (resolved to user ID on first run, cached in `.wp-author-id`).
- **Featured image:** the image you put in `Blog Titles/`.
- **Status:** Published (immediately live, not draft).

## What to do when something breaks

**WP returned an error (401, 403, 404):**
- `401` = auth failed. Regenerate the Application Password in WP Admin > Users > Zach Boykin > Application Passwords. Update `.env`.
- `403` = the WP user lacks publish permission. Check that the "Zach Boykin" user has Author or Editor role.
- `404` = the WP REST API is blocked. Check that `https://enginearu.com/wp-json/wp/v2/posts` is reachable.

**LaunchAgent ran but no post was created:**
Check `tail -30 publish.log` for the skip reason. Most common: no image in Blog Titles, or the slug doesn't match the filename.

**Wrong post got published:**
The scanner picks the OLDEST ready draft by `date:` field. If two drafts are ready, the one with the earlier date ships first. To control order, either publish manually one at a time, or stagger which draft has `ready_to_publish: true`.

**Need to unpublish:**
The scripts do not unpublish. Log into WP Admin, set the post to Draft, and delete the corresponding entry in `wp-post-ids.json` if you want the pipeline to be allowed to publish that slug again.

## Files (so you know what does what)

- `_system/.env` (gitignored): WP credentials and the Blog Titles folder path.
- `_system/publish-cron.sh`: the wrapper that launchd runs. Orchestrates the four scripts below.
- `_system/scan-drafts.mjs`: scans drafts, enforces cap, extracts body.
- `_system/find-image.mjs`: searches Blog Titles by slug.
- `_system/publish-to-wp.mjs`: WordPress REST API calls.
- `_system/record-publish.mjs`: writes state files after a successful publish.
- `_queue/wp-post-ids.json`: registry of published slugs (committed).
- `_queue/publish-state.json` (gitignored): today's date and count.
- `~/Library/LaunchAgents/com.zachboykin.aceblog.publish.plist`: the schedule itself.

## Safe smoke test (recommended before relying on the schedule)

This proves the whole pipeline end-to-end without trusting it blindly.

1. Pick `post-19-position-velocity-acceleration` as a guinea pig.
2. Open `drafts/post-19-position-velocity-acceleration.md` and add `ready_to_publish: true` to the front-matter.
3. Save any PNG to `/Users/zachboykin/AIProjects/Blog Titles/post-19-position-velocity-acceleration.png`. A throwaway placeholder is fine.
4. Run:
   ```bash
   /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_system/publish-cron.sh
   tail -20 /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_system/publish.log
   ```
5. Check enginearu.com for the new post. If it's there, you're confirmed working. If not, the log tells you why.
6. If you want to remove the test post: WP Admin > Posts > delete; then delete the `post-19...` entry from `_queue/wp-post-ids.json` if you want to be able to re-publish.

## What I'd worry about (and what to watch the first week)

- **First WP call may fail** if the username or app password has a typo. The log will say so. Easy fix.
- **Author lookup** assumes "Zach Boykin" is the exact display name in WP. If it's actually "Zach James" or differs, edit `.env` to set `WP_AUTHOR_NAME` to the real value, then delete `_system/.wp-author-id` so it re-resolves.
- **First launchd fire** might prompt for network permission. If 8am tomorrow's log shows nothing, check System Settings > Privacy & Security > Automation or > Full Disk Access.
- **Image naming** is the most common failure mode. If your image filename is "untitled.png" or just the title with no slug, find-image returns no_match and the post sits unpublished. Always include the slug.
