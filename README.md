# Komedy & Kindness Mail Club

A warm, feminine WordPress theme for the Komedy & Kindness Mail Club. Built with Tailwind CSS v4, React enhancements, and gentle GSAP animations. Bringing back the joy of real mail — one envelope at a time.

## Features

- **Warm, Feminine Design** - Soft coral, lavender, and pink color palette with rounded aesthetics
- **Tailwind CSS v4** - Custom design tokens for a cohesive, joyful brand
- **React + GSAP Animations** - Gentle, elegant animations (floating envelope, soft fades, gentle pulses)
- **Subscription-Focused** - Founding membership section with Stripe integration ready
- **Mobile-First & Accessible** - Respects `prefers-reduced-motion`, touch-friendly
- **Core Web Vitals Optimized** - Fast LCP, minimal CLS, optimized fonts
- **Contact Form 7 Ready** - Pre-styled warm contact form
- **BrowserSync** - Live reload during development

---

## Quick Start

### 1. Install the Theme

Copy the theme folder to your WordPress installation:

```bash
cp -r gsap-wp-boilerplate /path/to/wordpress/wp-content/themes/
```

### 2. Install Dependencies

```bash
cd wp-content/themes/gsap-wp-boilerplate
npm install
```

### 3. Configure Your Site

Edit `functions.php` and update the site configuration constants:

```php
// Brand
define('SITE_NAME', 'Komedy & Kindness Mail Club');
define('SITE_TAGLINE', 'Real Paper. Real Warmth. Real Connection.');
define('SITE_LOGO_INITIALS', 'K&K');

// Contact
define('SITE_EMAIL', 'hello@komedykindness.com');

// Social Links (leave empty to hide)
define('SITE_SOCIAL_FACEBOOK', '');
define('SITE_SOCIAL_LINKEDIN', '');
define('SITE_SOCIAL_TWITTER', '');
define('SITE_SOCIAL_INSTAGRAM', '');

// Subscription Details
define('FOUNDING_MEMBERS_LIMIT', '50');
define('MONTHLY_PRICE', '$10');
define('STRIPE_PAYMENT_LINK', ''); // Add your Stripe payment link here
```

### 4. Add Stripe Payment Link

Once you have your Stripe payment link ready:

1. Open `functions.php`
2. Update the `STRIPE_PAYMENT_LINK` constant with your Stripe link
3. The "Join Founding Members" buttons will automatically use this link

### 5. Update BrowserSync Domain (if needed)

The theme is configured for `haytham-fourati.local`. Update `package.json` if your domain is different:

```json
"sync": "browser-sync start -p 'haytham-fourati.local' --files '**/*.php' 'build/*.js' 'build/*.css'"
```

### 6. Build & Activate

```bash
# Build for production
npm run build

# Or start development mode
npm run preview
```

Then activate the theme in WordPress Admin → Appearance → Themes.

---

## Project Structure

```
Monthly-Detox/
├── build/                    # Compiled assets (generated)
│   ├── index.js              # Bundled React/GSAP
│   └── index.css             # Compiled Tailwind
├── src/
│   ├── index.js              # React entry point
│   ├── index.css             # Tailwind entry (warm color palette + animations)
│   └── components/
│       └── Enhancer.jsx      # React enhancements & gentle GSAP animations
├── template-parts/           # Reusable PHP partials
│   ├── header-nav.php        # Site navigation
│   ├── section-hero.php      # Homepage hero with floating envelope
│   ├── section-whats-inside.php    # Monthly envelope contents grid
│   ├── section-how-it-works.php    # Visual timeline
│   ├── section-founding-membership.php  # Pricing & CTA
│   ├── section-who-we-are.php      # Mission & values
│   ├── section-contact.php   # Contact form
│   └── footer-site.php       # Site footer
├── front-page.php            # Homepage template
├── page-blog.php             # Blog listing template
├── single.php                # Single blog post
├── archive.php               # Category/tag archives
├── index.php                 # Fallback template
├── header.php                # Document head + SEO
├── footer.php                # Document footer
├── functions.php             # Theme setup & configuration
├── style.css                 # Theme metadata (required by WP)
└── package.json              # NPM scripts & dependencies
```

---

## NPM Scripts

| Command | Description |
|---------|-------------|
| `npm run preview` | Full dev environment with BrowserSync live reload |
| `npm run start` | JS + CSS watch (no BrowserSync) |
| `npm run build` | Production build (minified) |
| `npm run buildwp` | Build JS only |
| `npm run tailwindbuild` | Build CSS only |
| `npm run tailwindwatch` | Watch CSS only |

---

## Customization Guide

### Homepage Sections

The homepage consists of the following sections (in order):

| Section | File | Purpose |
|---------|------|---------|
| Hero | `section-hero.php` | Emotional headline, CTA, floating envelope animation |
| What's Inside | `section-whats-inside.php` | 6 items included in monthly envelope |
| How It Works | `section-how-it-works.php` | 4-step visual timeline |
| Founding Membership | `section-founding-membership.php` | Pricing card, benefits, CTA |
| Who We Are | `section-who-we-are.php` | Mission & values (4 cards) |
| Contact | `section-contact.php` | Simple contact form |

### Color Palette

The theme uses a warm, feminine color palette defined in `src/index.css`:

```css
@theme {
  /* Soft coral primary - warmth & connection */
  --color-primary: hsl(12 85% 68%);
  
  /* Gentle lavender secondary - calm & kindness */
  --color-secondary: hsl(270 50% 85%);
  
  /* Warm pink accent - joy & playfulness */
  --color-accent: hsl(340 75% 75%);
  
  /* Peach highlight - for special elements */
  --color-peach: hsl(25 95% 75%);
  
  /* Soft mint - for success/positive states */
  --color-mint: hsl(150 40% 75%);
  
  /* Cream background */
  --color-background: hsl(30 40% 97%);
  
  /* Warm dark brown text */
  --color-foreground: hsl(25 25% 25%);
  
  /* Rounded, friendly aesthetic */
  --radius: 1.5rem;
}
```

### Custom Animations

The theme includes gentle, elegant animations:

- **Floating Envelope** - Gentle up/down motion on hero section
- **Soft Pulse** - Subtle scale animation on CTA buttons
- **Gentle Float** - Used for decorative elements
- **Scroll Animations** - Cards fade up on scroll (desktop only)

All animations respect `prefers-reduced-motion` for accessibility.

### Contact Form 7 Setup

1. Install the Contact Form 7 plugin
2. Create a new form in Contact → Contact Forms
3. Copy the form shortcode
4. Update `section-contact.php` with your shortcode:

```php
echo do_shortcode('[contact-form-7 id="abc123" title="Contact Form"]');
```

The theme includes pre-styled CF7 classes. Use this form template:

```html
<div class="cf7-custom-form">
  <div class="cf7-row cf7-two-col">
    <div class="cf7-field">
      <label class="cf7-label">Full Name</label>
      [text* your-name class:cf7-input placeholder "John Smith"]
    </div>
    <div class="cf7-field">
      <label class="cf7-label">Phone</label>
      [tel* your-phone class:cf7-input placeholder "(555) 123-4567"]
    </div>
  </div>
  <div class="cf7-field">
    <label class="cf7-label">Email</label>
    [email* your-email class:cf7-input placeholder "john@example.com"]
  </div>
  <div class="cf7-field">
    <label class="cf7-label">Message</label>
    [textarea* your-message class:cf7-textarea rows:4 placeholder "How can we help?"]
  </div>
  <div class="cf7-submit-wrap">
    [submit class:cf7-submit "Send Message"]
  </div>
</div>
```

---

## GSAP Animations

All animations are in `src/components/Enhancer.jsx`. The theme includes:

### On-Load Animations
- Header slide-in
- Hero text character reveal (desktop)
- Hero image slice reveal
- Hero badge pop-in

### Scroll Animations (Desktop Only)
- Section headers fade up
- Cards batch animate with stagger
- Image slice reveals
- Content fade-in

### Adding New Animations

1. Add a CSS class to your element (e.g., `.my-animated-element`)
2. Add the animation in `Enhancer.jsx`:

```jsx
// Inside the useEffect with GSAP context
ScrollTrigger.create({
  trigger: '.my-animated-element',
  start: 'top 80%',
  once: true,
  onEnter: () => {
    gsap.fromTo('.my-animated-element',
      { y: 40, opacity: 0 },
      { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
    )
  }
})
```

---

## Creating New Pages

### Option 1: Simple Page (uses default template)

Create a page in WordPress Admin. It will use `index.php` or `page.php`.

### Option 2: Custom Page Template

1. Create a new file: `page-{slug}.php` or `template-{name}.php`
2. Add the template header:

```php
<?php
/**
 * Template Name: My Custom Page
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Your content here -->
  
  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root (required for animations) -->
<div id="react-enhancer"></div>

<?php get_footer();
```

---

## Performance

### Mobile Optimizations
- ScrollTrigger animations disabled on mobile (< 1024px)
- Simple fade-in animations only
- All content visible immediately
- Native browser scroll

### Desktop Optimizations
- `ScrollTrigger.batch()` for efficient card animations
- One-time triggers (not continuous scrub)
- Deferred JS loading
- Hero image preloading

### Accessibility
- `prefers-reduced-motion` fully respected
- Visible focus states on all interactive elements
- Semantic HTML structure
- ARIA labels where needed

---

## Tech Stack

| Technology | Version | Purpose |
|------------|---------|---------|
| PHP | 7.4+ | WordPress templates |
| Tailwind CSS | v4.0 | Utility-first styling |
| React | 18+ | Client-side enhancements |
| GSAP | 3.14+ | Scroll animations |
| @wordpress/scripts | 30+ | JS bundling (webpack) |
| BrowserSync | 3.0 | Live reload |

---

## Checklist for New Projects

- [ ] Update `functions.php` site configuration
- [ ] Update `package.json` BrowserSync domain
- [ ] Customize `section-hero.php` headline and image
- [ ] Update `section-practice-areas.php` services
- [ ] Update `section-about.php` content and images
- [ ] Replace `section-testimonials.php` testimonials
- [ ] Configure Contact Form 7 and update shortcode
- [ ] Update `header.php` SEO meta tags
- [ ] Update `footer-site.php` links and tagline
- [ ] Update `Enhancer.jsx` reviews carousel (if used)
- [ ] Replace `screenshot.png` with your design
- [ ] Update `style.css` theme name and author
- [ ] Run `npm run build` for production

---

## License

GPL-2.0-or-later

---

## Credits

Built with modern WordPress development best practices. Uses:
- [Tailwind CSS](https://tailwindcss.com)
- [GSAP](https://greensock.com/gsap/)
- [Lucide Icons](https://lucide.dev)
- [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)
