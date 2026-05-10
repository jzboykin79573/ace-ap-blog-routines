# Changelog — ace-ap-blog

All notable changes to the EngiNearU AP Exam Prep theme are documented here.

Format: `[version] — YYYY-MM-DD`  
Types: `Added` · `Changed` · `Fixed` · `Removed`

---

## [2.0.0] — 2026-04-25

### Added
- Multi-subject hub homepage (`front-page.php`) — AP Calculus card + AP CS Coming Soon card
- AP Computer Science Prep page template (`templates/page-ap-computer-science-prep.php`)
- Free Resources section on homepage (3 lead magnet cards)
- Course Platform CTA band on homepage
- Subject badge system in `functions.php` (`ace_subject_badge()`) — auto-labels posts AB / BC
- Open Graph meta tags for social sharing (`ace_open_graph()` in `functions.php`)
- Breadcrumb navigation (`ace_breadcrumbs()` in `functions.php`)
- Author box on single posts (`single.php`)
- Related posts section on single posts (`single.php`)
- Prev/Next post navigation on single posts (`single.php`)
- Sidebar: Review Sheets CTA widget (`sidebar.php`)
- Sidebar: Placeholder categories until WP Admin categories are created (`sidebar.php`)
- Sticky header scroll shadow effect (`assets/js/main.js`)
- Smooth anchor scroll with header offset (`assets/js/main.js`)
- `ace-hero` (1200×630) and `ace-card` (600×338) image sizes (`functions.php`)
- GitHub repository setup: README, .gitignore, CHANGELOG, PR template

### Changed
- Design system updated to full EngiNearU token set (navy/gold/ink scales, full spacing system)
- Font stack updated: Montserrat (display) + Nunito Sans (body) + JetBrains Mono (code)
- Hero pattern uses inline SVG data URI (no external image dependency)
- All button variants unified in `style.css` (`.btn-primary`, `.btn-secondary`, `.btn-outline`, `.btn-outline-light`)

---

## [1.0.0] — 2024-04-24 (initial theme)

### Added
- Base WordPress theme scaffold
- `style.css`, `functions.php`, `header.php`, `footer.php`
- `index.php` blog archive template
- `single.php` single post template
- `sidebar.php` with search widget and category list
- `assets/js/main.js` with mobile menu toggle
- Initial ACE AP design system tokens

---

## How to Add a Changelog Entry

When you push a change, add a line here BEFORE merging your PR:

```
## [version] — YYYY-MM-DD

### Changed
- Brief description of what changed and in which file
```

Keep descriptions short and specific — "Updated hero headline in front-page.php" not "Updated file."
