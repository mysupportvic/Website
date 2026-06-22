# Email Form Configuration

## ⚡ Using Formspree (GitHub Pages Compatible)

Forms are now configured to use **Formspree** for email handling. This works seamlessly with static hosting (GitHub Pages, Netlify, etc.).

**See [FORMSPREE_SETUP.md](FORMSPREE_SETUP.md) for quick 3-minute setup instructions.**

## Quick Summary

1. Sign up at https://formspree.io/ (free)
2. Create a form for `admin@mysupportvic.com.au`
3. Copy your Form ID
4. Replace `FORMSPREE_ID` in `includes/pages/contact.php` and `includes/pages/home.php`
5. Run `php scripts/export-static.php`
6. Done! Forms now send emails via Formspree

