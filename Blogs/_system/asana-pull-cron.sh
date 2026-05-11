#!/bin/bash
# Hourly Asana attachment downloader for ACE AP blog drafts.
# Runs asana-pull.mjs and logs the result to asana-pull.log.
# Designed to be invoked by launchd. Safe to run manually.

set -u
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
LOG_FILE="$SCRIPT_DIR/asana-pull.log"

# Ensure node is on PATH (launchd's environment is minimal).
export PATH="/usr/local/bin:/opt/homebrew/bin:/usr/bin:/bin:$PATH"

log() {
  printf '[%s] %s\n' "$(date '+%Y-%m-%d %H:%M:%S')" "$*" >> "$LOG_FILE"
}

log "=== run start ==="

if [ ! -f "$SCRIPT_DIR/.env" ]; then
  log "ERROR: .env missing"
  exit 1
fi

OUTPUT=$(node "$SCRIPT_DIR/asana-pull.mjs" 2>&1)
EXIT_CODE=$?

if [ $EXIT_CODE -ne 0 ]; then
  log "ERROR exit=$EXIT_CODE: $OUTPUT"
  exit $EXIT_CODE
fi

log "$OUTPUT"
