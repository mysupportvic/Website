# My Support NDIS Website (PHP → Static HTML)

Maintainable PHP website for an NDIS startup provider, with shared templates, centralized content config, clean routes, and responsive layouts for desktop, tablet, and phone.
The project now includes a static export step so it can be deployed on GitHub Pages.

## Current Status

- Server-rendered PHP pages are active and routed through shared templates.
- Static HTML pages can be generated from PHP entry points via `scripts/export-static.php`.
- Core content and route definitions are centralized in `includes/site.php`.
- Navigation, footer, and service dropdown are generated from config.
- Responsive behavior is implemented across shared CSS and page-specific styles.

## Run Locally

### Requirements

- PHP 8+
- Node.js (optional, only for `npm` scripts)

### Generate static HTML (for GitHub Pages)

```bash
npm run build:static
```

or directly:

```bash
php scripts/export-static.php
```

### Preview static site

```bash
npm run dev
```

### Start PHP server (optional, template development)

```bash
npm run dev:php
```

Or directly:

```bash
php -S localhost:8000
```

Open: `http://localhost:8000`

### PowerShell note (Windows)

If `npm` is blocked by execution policy, use:

```powershell
npm.cmd run dev:php
```

## Routes

### Primary pages

- `/` Home
- `/about` About Us
- `/contact` Contact
- `/demo.html` Demo / approach
- `/participants.html` Participants
- `/budget-tracking.html` Testimonials page

### Services

- `/services`
- `/services/daily-living`
- `/services/community-participation`
- `/services/transport`
- `/services/domestic-support`
- `/services/companionship`
- `/services/cultural-support`

## Project Structure

```text
ndis-website/
├── index.php
├── about/
│   └── index.php
├── contact/
│   └── index.php
├── services/
│   ├── index.php
│   ├── daily-living/index.php
│   ├── community-participation/index.php
│   ├── transport/index.php
│   ├── domestic-support/index.php
│   ├── companionship/index.php
│   └── cultural-support/index.php
├── includes/
│   ├── site.php
│   ├── page-shell.php
│   ├── nav.php
│   ├── footer.php
│   └── pages/
│       ├── home.php
│       ├── about.php
│       ├── contact.php
│       ├── service.php
│       ├── participants.php
│       ├── demo.php
│       └── budget-tracking.php
├── css/
│   ├── global.css
│   ├── nav.css
│   ├── footer.css
│   ├── home.css
│   ├── service.css
│   ├── info-pages.css
│   ├── demo-testimonials.css
│   └── responsive-overrides.css
└── js/components/nav-interactions.js
```

## Content Management

Update content in `includes/site.php`:

- `$routes` for URL targets
- `$site['nav']` for top nav items
- `$site['services']` for service cards + dropdown links
- `$site['servicePages']` for page-specific service content blocks
- `$site['steps']`, `$site['reasons']`, `$site['testimonials']`, `$site['footerLinks']`

### Business profile fields

Edit these keys under `$site`:

- `name`
- `phone`
- `email`
- `address`
- `hours`
- `region`
- `description`

## Styling & Responsiveness

- `css/global.css`: tokens, typography, shared utilities
- `css/nav.css`: desktop/mobile navigation and dropdown behavior
- `css/home.css`: home sections
- `css/service.css`: service/`/services/*` layouts
- `css/info-pages.css`: About + Contact
- `css/demo-testimonials.css`: Demo + Testimonials pages
- `css/responsive-overrides.css`: fallback overrides for legacy inline-style sections

## Forms

Current forms are demo-mode and show alert confirmations.

- Home CTA form: inline handler in `includes/page-shell.php`
- Contact form: inline handler in `includes/pages/contact.php`

To enable real submissions, connect either:

- Formspree
- EmailJS
- Custom backend endpoint (POST)

## Deployment

For GitHub Pages deployment:

1. Generate static files:

	```bash
	npm run build:static
	```

2. Commit and push generated HTML files (`index.html`, `about/index.html`, `services/**/index.html`, etc.) and `.nojekyll`.
3. In GitHub repository settings, enable Pages and deploy from the branch/folder you committed.

Because links and asset paths are rewritten as relative paths during export, the site works on both custom domains and `username.github.io/repository-name/` project URLs.

## Dependencies

### npm

- `serve` (for optional static serving in development scripts)

### CDN

- Tabler Icons webfont
- Google Fonts (`Playfair Display`, `Inter`)
