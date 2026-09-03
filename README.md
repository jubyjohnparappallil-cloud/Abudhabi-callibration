# Abu Dhabi Calibration — WordPress Site

A modern glassmorphism WordPress theme and site for **Abu Dhabi Calibration**, an instrumentation and calibration services company in Abu Dhabi, UAE.

## Features

- Glassmorphism design (white + navy blue) with a full-screen hero
- Sticky glass header that solidifies on scroll
- Auto-running image gallery + parallax section
- Services and Products with dropdown menus and detail pages
- Blog, FAQ (accordion), About, and Contact pages
- Floating WhatsApp button, chat assistant, language switcher
- SEO-ready: meta tags, geo tags, and JSON-LD LocalBusiness schema
- Fully mobile responsive

## Repository contents

| Path | Description |
|------|-------------|
| `abucal-theme/` | The complete WordPress theme (install this) |
| `deploy/Dockerfile` | WordPress image with the theme baked in |
| `render.yaml` | Render.com deployment blueprint (WordPress + database) |

## Install the theme (any WordPress host)

1. Zip the `abucal-theme` folder (or use `abucal-theme.zip`).
2. In WordPress admin: **Appearance → Themes → Add New → Upload Theme**.
3. Choose the zip, **Install**, then **Activate**.

## Deploy on Render.com (free tier for demos)

1. Push this repo to GitHub (done).
2. Go to [render.com](https://render.com) → **New +** → **Blueprint**.
3. Select this repository. Render reads `render.yaml` and provisions WordPress + a database.
4. Open the generated URL, finish WordPress setup, and activate the theme.

> Note: Render's free tier sleeps after inactivity and the free database is time-limited.
> For a permanent public site, use a paid plan or a WordPress host (e.g. Hostinger, Cloudways).

## Recommended plugins

- **Rank Math** — SEO (titles, sitemaps, schema, Search Console)
- **Contact Form 7** — enquiry forms
- **GTranslate** or **Polylang** — Arabic / multilingual

## Local development

This project was developed locally with PHP + SQLite (via the SQLite Database Integration plugin), so it runs without MySQL for testing.

```
php -S localhost:8080
```

Then open http://localhost:8080
