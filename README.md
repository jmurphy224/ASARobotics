# ASA Robotics — Website Mockups

Static HTML/CSS mockups for the All Saints Academy Robotics site (asarbots.org),
built as design references before the real WordPress + Bluehost build.

## Pages

All pages live at the repo root — this is the single source of truth for
both the GitHub Pages preview and the Bluehost deployment.

| File | Page |
|---|---|
| `index.html` | Home |
| `programs.html` | Programs (hub) |
| `explore.html` | FLL Explore (K–4) |
| `challenge.html` | FLL Challenge (4–7) |
| `ftc.html` | FIRST Tech Challenge (7–12) |
| `teams.html` | Teams (full roster) |
| `schedule.html` | Schedule |
| `join.html` | Join us |

## Live preview

**https://jmurphy224.github.io/ASARobotics/**

(GitHub Pages source: `main` branch, `/ (root)` folder.)

Nav, footer, and in-page CTAs are all linked between pages, so it's fully
click-through-able.

## Deploying to Bluehost

This repo is set up to clone directly into `public_html` via cPanel's Git
Version Control tool — no subfolder shuffling needed, since the files sit at
root. Clone URL: `https://github.com/jmurphy224/ASARobotics.git`.

## WordPress theme

A real, working WordPress theme built from this design lives on the
[`wordpress-theme`](https://github.com/jmurphy224/ASARobotics/tree/wordpress-theme)
branch — see that branch's `SETUP.md` for installation, page setup, and menu
configuration. This `main` branch stays the static-HTML preview only.

## Status

These are **static, single-file design mockups** — not the live WordPress
site. Team names, costs, meeting times, and some dates are still placeholder
content and need to be swapped for real info before this becomes the actual
WordPress build. The Join us form doesn't submit anywhere yet — that'll need
a real form plugin (WPForms, Fluent Forms, or similar) once rebuilt in
WordPress.

Each file is self-contained (inline CSS, Google Fonts via CDN) so you can open
any one directly in a browser with no build step.
