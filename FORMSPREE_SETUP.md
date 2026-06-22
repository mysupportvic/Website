# Formspree Email Setup

Your forms are now configured to use **Formspree** for email handling. This works perfectly with GitHub Pages and requires zero backend infrastructure.

## Quick Setup (3 minutes)

### 1. Create a Formspree account
- Go to https://formspree.io/
- Click "Sign Up" (Free tier included)
- Verify your email

### 2. Create a form for your contact email
- Click "New Form" 
- Enter your email: **admin@mysupportvic.com.au**
- You'll receive a confirmation email — click the link to verify
- Copy your **Form ID** (looks like: `xyzabc123`)

### 3. Update the forms in your code

Replace `FORMSPREE_ID` with your actual Form ID in two files:

**File 1: includes/pages/contact.php**
Find this line (around line 27):
```html
<form class="contact-form" id="contact-form" action="https://formspree.io/f/FORMSPREE_ID" method="POST">
```
Change to:
```html
<form class="contact-form" id="contact-form" action="https://formspree.io/f/xyzabc123" method="POST">
```

**File 2: includes/pages/home.php**
Find this line (around line 190):
```html
<form class="cta-form" id="cta-form" action="https://formspree.io/f/FORMSPREE_ID" method="POST">
```
Change to:
```html
<form class="cta-form" id="cta-form" action="https://formspree.io/f/xyzabc123" method="POST">
```

### 4. Regenerate static pages
```bash
php scripts/export-static.php
```

### 5. Test it
Fill out a form and submit. You should receive an email at admin@mysupportvic.com.au within seconds.

## Form Fields

Both forms send the following to your email:

### Contact Form
- Name
- Phone
- Service of Interest (dropdown)
- Message

### CTA Form (Home)
- Name
- Phone

## How It Works

1. User submits form → Formspree receives the POST
2. Formspree sends email to admin@mysupportvic.com.au
3. User is redirected to a success page (configurable in Formspree dashboard)
4. You can set custom success/error pages in Formspree settings

## Formspree Dashboard

Once set up, you can:
- View all submissions in your dashboard
- Export data
- Set custom redirect URLs
- View submission analytics
- Manage spam filtering

## GitHub Pages Compatible ✅

This solution works perfectly on GitHub Pages because:
- Forms POST to Formspree's servers (not your site)
- No backend code needed
- No build step required
- Works with static HTML files

## Need Multiple Forms?

If you want different email addresses for different forms, create separate Formspree forms and use different Form IDs.

## Troubleshooting

**Email not received?**
- Check Formspree email verification email
- Check spam/junk folder
- Verify email address in Formspree dashboard

**Forms not working?**
- Make sure you replaced `FORMSPREE_ID` with your actual ID
- Check browser console for errors
- Test in Formspree dashboard

**Custom domain issues?**
- Formspree works regardless of domain
- HTTPS recommended but HTTP also works

## Switching Services

If you ever want to switch back to the PHP backend or another service:
1. Update the form `action` attribute
2. Regenerate static pages
3. Deploy the updated files

