# My Support NDIS Website (PHP)

Maintainable PHP website for an NDIS startup provider, with shared templates, centralized content config, clean routes, and responsive layouts for desktop, tablet, and phone.

## Current Status

- Server-rendered PHP pages are active and routed through shared templates.
- Core content and route definitions are centralized in `includes/site.php`.
- Navigation, footer, and service dropdown are generated from config.
- Responsive behavior is implemented across shared CSS and page-specific styles.

## Run Locally

### Requirements

- PHP 8+
- Node.js (optional, only for `npm` scripts)

### Start PHP server (recommended)

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
- `/demo.php` Demo / approach
- `/participants.php` Participants
- `/budget-tracking.php` Testimonials page

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

This project is PHP-based. Deploy to any host that supports PHP:

- cPanel/shared hosting (Apache/Nginx + PHP)
- VPS (Nginx/Apache + PHP-FPM)
- Managed PHP hosting platforms

No build step is required.

## Dependencies

### npm

- `serve` (for optional static serving in development scripts)

### CDN

- Tabler Icons webfont
- Google Fonts (`Playfair Display`, `Inter`)
