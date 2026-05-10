# ace-ap-blog — EngiNearU AP Exam Prep WordPress Theme

**Author:** Zach Boykin — james@aceapcalculus.com  
**Version:** 2.0.0  
**Deployed on:** Netlify (WordPress)  
**Covers:** AP Calculus AB · AP Calculus BC · AP Computer Science Prep (coming soon)

---

## What This Repository Is

This repo contains the **WordPress theme** that powers the EngiNearU AP Exam Prep blog. Every file in here maps 1-to-1 to a page, section, or feature on the site. When you want to change how the site looks or what it says, you edit a file here, commit it, and push — that's it.

---

## Repository Layout

```
ace-ap-blog/
│
├── .github/
│   └── PULL_REQUEST_TEMPLATE.md   ← Checklist every PR must complete before merging
│
├── assets/
│   └── js/
│       └── main.js                ← All client-side JavaScript (mobile nav, scroll effects)
│
├── templates/
│   └── page-ap-computer-science-prep.php  ← Custom "Coming Soon" page for AP CS section
│
├── .gitignore                     ← Tells Git what NOT to track (WP core, uploads, secrets)
├── CHANGELOG.md                   ← Running log of every change made to the theme
│
├── style.css          ★ DESIGN SYSTEM — all colors, fonts, spacing, and component styles
├── functions.php      ★ THEME ENGINE  — WordPress setup, helper functions, hooks
├── header.php             → Rendered at the TOP of every page (logo + navigation)
├── footer.php             → Rendered at the BOTTOM of every page (footer links + copyright)
├── front-page.php         → The HOMEPAGE (hero, subject cards, resources, latest posts)
├── index.php              → The BLOG LISTING page and all archive/search/category pages
├── single.php             → An individual BLOG POST page (full article view)
└── sidebar.php            → The right-hand SIDEBAR (search, CTA widgets, category list)
```

### Quick guide: "Where do I edit X?"

| I want to change…                     | Edit this file              |
|---------------------------------------|-----------------------------|
| Site colors, fonts, spacing           | `style.css`                 |
| Navigation links                      | `header.php`                |
| Footer links or copyright text        | `footer.php`                |
| Homepage hero headline or stats       | `front-page.php`            |
| Homepage resource cards               | `front-page.php`            |
| Blog listing page layout              | `index.php`                 |
| Single post layout (author box, nav)  | `single.php`                |
| Sidebar widgets (CTA, topics list)    | `sidebar.php`               |
| AP CS Coming Soon page                | `templates/page-ap-computer-science-prep.php` |
| Mobile menu behavior / scroll effects | `assets/js/main.js`         |
| WordPress image sizes, menus, hooks   | `functions.php`             |

---

## Design System Quick Reference

All colors and spacing are defined as **CSS variables** at the top of `style.css`. **Never hard-code a color value** — always use a variable so changes propagate everywhere.

| Token                | Value      | Use                                     |
|----------------------|------------|-----------------------------------------|
| `--navy-700`         | `#103059`  | Primary brand navy — hero, headings     |
| `--gold-600`         | `#F4B626`  | Primary accent — CTAs, focus rings      |
| `--gold-700`         | `#D69916`  | Eyebrow labels, icon accents            |
| `--ink-700`          | `#2F3A4D`  | Body text                               |
| `--white`            | `#FFFFFF`  | Backgrounds, card surfaces              |
| `--font-display`     | Montserrat | Headings, buttons, labels               |
| `--font-body`        | Nunito Sans| Body copy                               |
| `--font-mono`        | JetBrains Mono | Code snippets                       |

---

## How to Install Locally (WordPress)

1. Install WordPress locally using [Local by Flywheel](https://localwp.com) or any LAMP stack.
2. Clone this repo into your WordPress themes directory:
   ```
   wp-content/themes/ace-ap-blog/
   ```
3. In **WP Admin → Appearance → Themes**, activate **EngiNearU — AP Calculus Prep**.
4. In **WP Admin → Appearance → Menus**, create a menu assigned to **Primary Navigation**.
5. Create a **Page** with slug `ap-computer-science-prep` — it will automatically use the custom template in `templates/`.

---

## How to Deploy to Netlify

This theme is served via a WordPress install hosted behind Netlify. To deploy changes:

1. Push commits to `main` (or open a PR and merge it).
2. The Netlify build will pick up the changes automatically (if connected via Git).
3. If using manual deploys, zip the theme folder and upload via the Netlify dashboard.

---

## Contribution Guide (for Zach & business partner)

### Branching strategy

```
main              ← production — always live on the site
  └── feature/my-change   ← your working branch
```

- **Never commit directly to `main`.**
- Create a branch, make your changes, open a Pull Request, have your partner review it, then merge.

### Commit message format

Use this format so the Git history is easy to scan:

```
[area]: short description of what changed

Examples:
  style: update hero headline on front-page.php
  content: add AP Calc BC unit 9 resources to front-page.php
  fix: correct sidebar CTA link for review sheets
  feature: add AP CS A study guide page template
```

### Before you push

- [ ] Check that the site renders correctly locally
- [ ] Run through the PR checklist in `.github/PULL_REQUEST_TEMPLATE.md`
- [ ] Update `CHANGELOG.md` with a brief note about what changed

---

## WordPress Categories to Create

In **WP Admin → Posts → Categories**, create these to power the sidebar Topics list and post badges:

- `limits` — Unit 1: Limits & Continuity
- `derivatives` — Unit 2 & 3: Differentiation
- `integrals` — Unit 6: Integration & Accumulation
- `series` — Unit 10: Infinite Sequences & Series
- `exam-prep` — Exam strategy posts
- `calc-ab` — Posts specific to AB
- `calc-bc` — Posts specific to BC

---

## External Links Referenced in the Theme

| Purpose                | URL                                          |
|------------------------|----------------------------------------------|
| Course platform        | https://course.enginearu.com                 |
| Free guide (lead magnet) | https://www.aceapcalculus.com/before-apcalc |
| Summer diagnostic      | https://www.aceapcalculus.com/summer-diagnostic-page |
| Review sheets          | https://www.aceapcalculus.com/reviewsheet50  |

---

*Last updated: April 2026*
