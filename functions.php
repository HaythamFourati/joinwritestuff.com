<?php

/**
 * ============================================
 * SITE CONFIGURATION - UPDATE THESE FOR YOUR PROJECT
 * ============================================
 * Change these values once to update site-wide.
 * All template parts reference these constants.
 */

// Brand
define('SITE_NAME', 'Hug in the Mail');
define('SITE_TAGLINE', 'Real Connection.');
define('SITE_LOGO_INITIALS', 'HM');

// Contact
define('SITE_PHONE', '');
define('SITE_PHONE_LINK', '');
define('SITE_EMAIL', 'info@huginthemail.com');

// Social Links (leave empty to hide)
define('SITE_SOCIAL_YOUTUBE', 'https://www.youtube.com/@HugInTheMail');
define('SITE_SOCIAL_FACEBOOK', 'https://www.facebook.com/profile.php?id=61567239342701');
define('SITE_SOCIAL_TIKTOK', 'https://www.tiktok.com/@hug.in.the.mail.c');
define('SITE_SOCIAL_LINKEDIN', '');
define('SITE_SOCIAL_TWITTER', '');
define('SITE_SOCIAL_INSTAGRAM', 'https://www.instagram.com/huginthemailclub/');

// Subscription Details
define('FOUNDING_MEMBERS_LIMIT', '50');
define('MONTHLY_PRICE', '$11');
define('STRIPE_PAYMENT_LINK', ''); // TODO: Add Stripe payment link here when ready
define('STRIPE_WAITLIST_LINK', 'https://book.stripe.com/9B6cN45Mb6Xm5wtfVzbwk00');

// Office Address (optional - leave empty if not needed)
define('SITE_OFFICE_PRIMARY_ADDRESS', '');
define('SITE_OFFICE_PRIMARY_NAME', '');
define('SITE_OFFICE_SECONDARY_ADDRESS', '');

// Trust Indicators (not used in current design but kept for compatibility)
define('SITE_YEARS_EXPERIENCE', '');
define('SITE_CLIENTS_HELPED', '');
define('SITE_RATING', '');
define('SITE_RATING_SOURCE', '');

function boilerplate_load_assets() {
  // Single site-wide design system — "Hug in the Mail" 2026 redesign.
  wp_enqueue_style('hitm-design', get_theme_file_uri('/assets/design.css'), array(), '1.8');
  wp_enqueue_script('hitm-design', get_theme_file_uri('/assets/design.js'), array(), '1.2', true);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// Preload the central hero letter for LCP optimization.
function boilerplate_preload_hero_image() {
  if (is_front_page()) {
    echo '<link rel="preload" as="image" href="' . esc_url(get_theme_file_uri('/assets/hero-mail/letter.webp')) . '" fetchpriority="high">';
  }
}
add_action('wp_head', 'boilerplate_preload_hero_image', 1);

/**
 * Generate Table of Contents from post content headings
 * Extracts h2 and h3 tags and creates anchor links
 */
function generate_table_of_contents($content) {
  if (!is_single()) {
    return $content;
  }

  // Match h2 and h3 headings
  preg_match_all('/<h([2-3])([^>]*)>(.+?)<\/h[2-3]>/i', $content, $matches, PREG_SET_ORDER);

  if (empty($matches)) {
    return $content;
  }

  $toc_items = [];
  $modified_content = $content;

  foreach ($matches as $index => $match) {
    $level = $match[1];
    $attrs = $match[2];
    $heading_text = strip_tags($match[3]);
    $anchor_id = 'heading-' . $index . '-' . sanitize_title($heading_text);

    // Add to TOC array
    $toc_items[] = [
      'level' => $level,
      'text' => $heading_text,
      'id' => $anchor_id
    ];

    // Add id attribute to heading in content
    $new_heading = '<h' . $level . ' id="' . esc_attr($anchor_id) . '"' . $attrs . '>' . $match[3] . '</h' . $level . '>';
    $modified_content = str_replace($match[0], $new_heading, $modified_content);
  }

  // Store TOC items in global for template use
  $GLOBALS['post_toc_items'] = $toc_items;

  return $modified_content;
}
add_filter('the_content', 'generate_table_of_contents', 5);

/**
 * Render Table of Contents HTML
 */
function render_table_of_contents() {
  if (empty($GLOBALS['post_toc_items'])) {
    return '';
  }

  $toc_items = $GLOBALS['post_toc_items'];
  
  ob_start();
  ?>
  <nav class="toc" aria-label="Table of contents">
    <h2>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16"/><path d="M4 12h16"/><path d="M4 18h12"/></svg>
      Table of Contents
    </h2>
    <ul>
      <?php foreach ($toc_items as $item) : ?>
        <li class="<?php echo $item['level'] === '3' ? 'sub' : ''; ?>">
          <a href="#<?php echo esc_attr($item['id']); ?>"><?php echo esc_html($item['text']); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
  <?php
  return ob_get_clean();
}
