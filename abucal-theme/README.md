# AbuCal Calibration — WordPress Theme

A modern glassmorphism WordPress theme for AbuCal Instrumentation & Calibration Services (Abu Dhabi), built for high-level SEO.

## What's included

- Glassmorphism design (frosted glass panels, animated gradient background)
- SEO-ready markup: title-tag support, meta description fallback, geo meta, and JSON-LD `LocalBusiness` schema
- Works cleanly with **Rank Math** or **Yoast** (theme steps aside when a plugin manages meta)
- `Service` custom post type so services are editable and each gets its own SEO page
- Responsive layout with mobile nav
- Blog, archive, single, page, search, and 404 templates
- Contact Form 7 support (falls back to a simple form)

## Install

1. Zip the `abucal-theme` folder:
   - The zip must contain the `abucal-theme` folder with `style.css` at its top level.
2. In WordPress admin: **Appearance → Themes → Add New → Upload Theme**, choose the zip, install, and **Activate**.
   - Or copy the `abucal-theme` folder into `wp-content/themes/` on your server.

## Set it up

1. **Front page:** Go to **Settings → Reading → Your homepage displays → A static page**, or leave "Your latest posts". `front-page.php` renders the landing page automatically regardless.
2. **Menus:** **Appearance → Menus** — create a menu and assign it to the **Primary Menu** location. Use custom links like `/#services`, `/#about`, `/#contact` for on-page scrolling.
3. **Logo:** **Appearance → Customize → Site Identity → Logo**.
4. **Services:** Add entries under **Services** in the admin. Add a custom field named `service_icon` with an emoji (e.g. `⚡`) to set the card icon. If no services exist, sensible defaults show.
5. **Contact form:** Install **Contact Form 7**, create a form, then (optionally) store its ID so the theme renders it in the contact section.

## SEO checklist (high-level SEO)

1. Install **Rank Math** (recommended) or **Yoast SEO**.
2. Run the setup wizard; connect **Google Search Console**.
3. Enable the **XML sitemap** (both plugins generate one automatically at `/sitemap_index.xml`).
4. Set your **business name, logo, and social profiles** in the plugin's Local SEO / Titles settings. The theme already outputs `LocalBusiness` JSON-LD on the homepage — in Rank Math, set the Knowledge Graph type to "Organization/Local Business" so they align.
5. Add a **focus keyword** to each page/post/service (e.g. "calibration services Abu Dhabi").
6. Fill in **meta title + description** per page in the plugin's snippet editor.
7. Add **alt text** to every image.
8. Submit the sitemap in **Google Search Console**.
9. Consider a caching/performance plugin (WP Rocket, LiteSpeed Cache) for Core Web Vitals — speed is a ranking factor.

## Local preview (optional)

Use one of these to run WordPress locally:

- **Local** (localwp.com) — easiest, one click.
- **XAMPP** — install, drop WordPress in `htdocs`, create a MySQL DB.
- **Docker** — `wordpress` + `mysql` images.

Then place `abucal-theme` in `wp-content/themes/` and activate.

## Notes

- The homepage `LocalBusiness` schema uses placeholder phone/address/geo values in `functions.php`. Update them to your real details.
- Replace social links in `footer.php` with your real profiles.
