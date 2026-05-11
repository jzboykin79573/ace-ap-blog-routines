#!/bin/bash
# ACE AP blog auto-publisher cron wrapper.
# Runs the full pipeline: scan drafts → find image → publish to WP → record.
# Designed to be invoked by cron / launchd. Logs to publish.log next to this script.
# Cron usage:
#   0 8,16 * * * /Users/zachboykin/AIProjects/ace-ap-blog/Blogs/_system/publish-cron.sh

set -u
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
ENV_FILE="$SCRIPT_DIR/.env"
LOG_FILE="$SCRIPT_DIR/publish.log"

# Ensure node is on PATH (cron has a minimal PATH by default).
export PATH="/usr/local/bin:/opt/homebrew/bin:/usr/bin:/bin:$PATH"

log() {
  printf '[%s] %s\n' "$(date '+%Y-%m-%d %H:%M:%S')" "$*" >> "$LOG_FILE"
}

fail() {
  log "ERROR: $*"
  exit 1
}

if [ ! -f "$ENV_FILE" ]; then
  fail ".env missing at $ENV_FILE"
fi

# Load BLOG_TITLES_FOLDER from .env without exporting credentials to environment.
BLOG_TITLES_FOLDER=$(grep -E '^BLOG_TITLES_FOLDER=' "$ENV_FILE" | head -1 | cut -d'=' -f2- | sed 's/^"\(.*\)"$/\1/' | sed "s/^'\(.*\)'$/\1/")
if [ -z "$BLOG_TITLES_FOLDER" ]; then
  fail "BLOG_TITLES_FOLDER not set in .env"
fi
# Expand leading ~ to HOME
BLOG_TITLES_FOLDER="${BLOG_TITLES_FOLDER/#\~/$HOME}"

log "=== run start ==="

# Step 1: scan drafts
SCAN_OUTPUT=$(node "$SCRIPT_DIR/scan-drafts.mjs" 2>&1)
SCAN_EXIT=$?
if [ $SCAN_EXIT -ne 0 ]; then
  fail "scan-drafts exited $SCAN_EXIT: $SCAN_OUTPUT"
fi
log "scan: $SCAN_OUTPUT"

ACTION=$(echo "$SCAN_OUTPUT" | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).action||"")}catch{console.log("")}})')
if [ "$ACTION" != "publish" ]; then
  log "nothing to do (action=$ACTION); exiting cleanly"
  exit 0
fi

SLUG=$(echo "$SCAN_OUTPUT" | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).slug||"")}catch{console.log("")}})')
TITLE=$(echo "$SCAN_OUTPUT" | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).title||"")}catch{console.log("")}})')
CONTENT_PATH=$(echo "$SCAN_OUTPUT" | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).content_path||"")}catch{console.log("")}})')

if [ -z "$SLUG" ] || [ -z "$TITLE" ] || [ -z "$CONTENT_PATH" ]; then
  fail "scan output missing slug/title/content_path: $SCAN_OUTPUT"
fi

# Step 2: find image in local Blog Titles folder
IMG_OUTPUT=$(node "$SCRIPT_DIR/find-image.mjs" --slug "$SLUG" --folder "$BLOG_TITLES_FOLDER" 2>&1)
IMG_EXIT=$?
if [ $IMG_EXIT -ne 0 ]; then
  fail "find-image exited $IMG_EXIT: $IMG_OUTPUT"
fi
log "image: $IMG_OUTPUT"

FOUND=$(echo "$IMG_OUTPUT" | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).found?"true":"false")}catch{console.log("false")}})')
if [ "$FOUND" != "true" ]; then
  log "no image for $SLUG in $BLOG_TITLES_FOLDER; export from Claude Design and try again."
  exit 0
fi
IMAGE_PATH=$(echo "$IMG_OUTPUT" | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).path||"")}catch{console.log("")}})')

# Step 3: publish to WordPress
PUB_OUTPUT=$(node "$SCRIPT_DIR/publish-to-wp.mjs" --slug "$SLUG" --title "$TITLE" --content "$CONTENT_PATH" --image "$IMAGE_PATH" 2>&1)
PUB_EXIT=$?
if [ $PUB_EXIT -ne 0 ]; then
  fail "publish-to-wp exited $PUB_EXIT (output suppressed to avoid leaking credentials in error responses)"
fi
log "publish: $(echo "$PUB_OUTPUT" | tail -1)"

WP_POST_ID=$(echo "$PUB_OUTPUT" | tail -1 | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).wp_post_id||"")}catch{console.log("")}})')
LIVE_URL=$(echo "$PUB_OUTPUT" | tail -1 | node -e 'let s="";process.stdin.on("data",d=>s+=d).on("end",()=>{try{console.log(JSON.parse(s).live_url||"")}catch{console.log("")}})')

if [ -z "$WP_POST_ID" ] || [ -z "$LIVE_URL" ]; then
  fail "publish output missing wp_post_id/live_url"
fi

# Step 4: record state
REC_OUTPUT=$(node "$SCRIPT_DIR/record-publish.mjs" --slug "$SLUG" --wp-post-id "$WP_POST_ID" --live-url "$LIVE_URL" --title "$TITLE" 2>&1)
REC_EXIT=$?
if [ $REC_EXIT -ne 0 ]; then
  fail "record-publish exited $REC_EXIT: $REC_OUTPUT"
fi
log "record: $REC_OUTPUT"

log "=== published $SLUG -> $LIVE_URL ==="
