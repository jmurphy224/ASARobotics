# ASA Robotics WordPress Theme — Setup

## 1. Install the theme

**Via Bluehost cPanel Git Version Control:**
- Clone URL: `https://github.com/jmurphy224/ASARobotics.git`
- Repository Path: `wp-content/themes/asa-robotics-theme`
- After cloning, cPanel checks out the `main` branch by default — that's the
  static-HTML preview site, **not** this theme. Go to Manage next to the
  repository and switch/pull the **`wordpress-theme`** branch instead, which
  has just these theme files at its root.

**Or manually**: download this branch as a zip from GitHub (branch dropdown
→ `wordpress-theme` → Code → Download ZIP) and upload via Appearance →
Themes → Add New → Upload Theme.

Then: **Appearance → Themes → Activate** "ASA Robotics."

## 2. Create your pages with these exact slugs

WordPress automatically applies the matching template to a page based on its
slug — no manual "choose a template" step needed. Create these 8 pages
(Pages → Add New), and make sure the **slug** (visible under the title field,
or in Permalink settings) matches exactly:

| Page title | Slug | Template used |
|---|---|---|
| Home | `home` (or any — see step 3) | `front-page.php` |
| Programs | `programs` | `page-programs.php` |
| FLL Explore | `explore` | `page-explore.php` |
| FLL Challenge | `challenge` | `page-challenge.php` |
| FIRST Tech Challenge | `ftc` | `page-ftc.php` |
| Teams | `teams` | `page-teams.php` |
| Schedule | `schedule` | `page-schedule.php` |
| Join us | `join` | `page-join.php` |

You can leave the page content blank for all of these except a generic
fallback page — the templates supply their own content. (An Editor typing
something into the block editor on, say, the Explore page won't show up
anywhere yet — see "What's still hardcoded" below.)

## 3. Set the static homepage

Settings → Reading → "Your homepage displays" → **A static page** → Homepage:
select your "Home" page. This tells WordPress to use `front-page.php`.

## 4. Set up the navigation menu

Appearance → Menus → Create a new menu → add your 8 pages (or just the top
4 — Programs, Teams, Schedule, Join us — since Explore/Challenge/FTC are
reached through the Programs page) → assign it to **Primary Menu** location.

## 5. Add other editors

Users → Add New → assign the **Editor** role to anyone who should be able to
edit page content without touching code/plugins/settings.

## 6. Set contact info and homepage hero text

Appearance → Customize:
- **Club Contact Info** — email, phone, footer blurb
- **Homepage Hero** — eyebrow text, headline, subheadline, and the 3 stat
  numbers on the homepage

These are the only pieces of copy on the site editable purely through
point-and-click, no code.

## 7. Install a form plugin for Join us

The interest form on the Join us page is a static, non-functional placeholder
(see the comment at the top of `page-join.php`). Install WPForms or Fluent
Forms, build the real form, and swap in its shortcode as instructed in that
file's comments.

## What's still hardcoded (and how to change it)

Team rosters, schedule events, program comparison figures, and FAQ items live
as **PHP arrays at the top of each page template** — not in the WordPress
database, and not editable through the block editor. To update them each
season (new team names, new schedule), edit the array in the relevant
`page-*.php` file directly.

This is a deliberate scope trade-off: it keeps the theme simple and free of
extra plugins, at the cost of requiring a code edit (not a wp-admin edit) to
update team/schedule data. If you want non-technical volunteers to manage
team rosters through wp-admin too, the natural next step is a custom "Team"
post type (with fields for team number, program, description, meeting day) —
ask and this can be built as a follow-up.
