# Pull Request Checklist

Use this checklist before requesting a review. A PR should not be merged until all relevant boxes are checked.

---

## What does this PR change?

<!-- Write 1–3 sentences describing what you changed and why. -->



## Files changed

<!-- List the files you touched and a one-line reason for each. -->

| File | What changed |
|------|-------------|
|      |             |

---

## Checklist

### Content & Copy
- [ ] All text is proofread — no typos or grammar errors
- [ ] External links (course platform, lead magnets) open to the correct URLs
- [ ] Any new headlines or copy match the brand voice (direct, confident, student-focused)

### Code Quality
- [ ] No hard-coded color hex values — uses CSS variables from `style.css`
- [ ] No inline styles added to PHP templates (use CSS classes instead, or add a new class to `style.css`)
- [ ] All new PHP strings are wrapped in `esc_html_e()` or `esc_html()` for WordPress translation support
- [ ] No `var_dump()`, `print_r()`, or debug output left in PHP files
- [ ] JavaScript uses `DOMContentLoaded` — no raw DOM access before the page loads
- [ ] Comments are added to any new section of code that isn't self-explanatory

### Design
- [ ] Changes look correct on desktop (1280px+)
- [ ] Changes look correct on tablet (768px)
- [ ] Changes look correct on mobile (375px)
- [ ] New colors/styles use the EngiNearU design system tokens (see `style.css` `:root`)
- [ ] No gradients added — brand uses flat navy surfaces only
- [ ] Hover states work on interactive elements (links, buttons, cards)

### WordPress
- [ ] Any new `WP_Query` calls are followed by `wp_reset_postdata()`
- [ ] No direct database calls — use WP functions only
- [ ] New page templates are saved in `templates/` and have the correct `Template Name:` comment header

### Git Hygiene
- [ ] Branch name is descriptive (e.g., `feature/ap-cs-unit1`, `fix/sidebar-cta-link`)
- [ ] Commit messages follow the format: `[area]: description` (e.g., `style: update hero button color`)
- [ ] `CHANGELOG.md` updated with a note about this change
- [ ] No zip files, `.DS_Store`, or `node_modules/` accidentally committed (check `.gitignore`)

---

## Screenshots (if visual change)

<!-- Paste before/after screenshots here if any visible UI changed. -->

---

## Notes for reviewer

<!-- Anything the reviewer should specifically look at or be aware of? -->
