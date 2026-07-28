<?php
/**
 * Announcement strip + sticky nav — Hug in the Mail 2026 redesign
 */
$strip_items = array(
  'Founding member pricing — ' . MONTHLY_PRICE . '/mo, locked in forever',
  'Free shipping in the US',
  'Cancel anytime',
  'Real paper. Real connection.',
  'Postmarked with love',
);
$blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog/');
$social_links = array_filter(array(
  'youtube' => array(
    'label' => 'YouTube',
    'url'   => SITE_SOCIAL_YOUTUBE,
  ),
  'facebook' => array(
    'label' => 'Facebook',
    'url'   => SITE_SOCIAL_FACEBOOK,
  ),
  'tiktok' => array(
    'label' => 'TikTok',
    'url'   => SITE_SOCIAL_TIKTOK,
  ),
  'instagram' => array(
    'label' => 'Instagram',
    'url'   => SITE_SOCIAL_INSTAGRAM,
  ),
), static fn($social) => !empty($social['url']));
?>
<div class="strip">
  <div class="strip-track">
    <?php for ($dup = 0; $dup < 2; $dup++) : ?>
      <span>
        <?php foreach ($strip_items as $item) : ?>
          <i><?php echo esc_html($item); ?></i>
          <span class="dot"></span>
        <?php endforeach; ?>
      </span>
    <?php endfor; ?>
  </div>
</div>

<header class="nav">
  <div class="wrap nav-inner">
    <a href="<?php echo esc_url(home_url()); ?>" class="logo-mark logo-mark--icon-only" aria-label="<?php echo esc_attr(SITE_NAME); ?>">
      <img
        src="<?php echo esc_url(get_theme_file_uri('/assets/logo-cropped.png')); ?>"
        alt="<?php echo esc_attr(SITE_NAME); ?>"
        width="69"
        height="72"
      >
    </a>
    <nav class="nav-links" aria-label="Primary navigation">
      <a href="<?php echo esc_url(home_url('/#whats-inside')); ?>">What's Inside</a>
      <a href="<?php echo esc_url(home_url('/#how-it-works')); ?>">How It Works</a>
      <a href="<?php echo esc_url(home_url('/#testimonials')); ?>">Testimonials</a>
      <a href="<?php echo esc_url(home_url('/#who-we-are')); ?>">Our Story</a>
      <a href="<?php echo esc_url($blog_url); ?>">Blog</a>
      <a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a>
    </nav>
    <div class="nav-actions">
      <?php if ($social_links) : ?>
        <nav class="nav-social" aria-label="Follow Hug in the Mail">
          <?php foreach ($social_links as $network => $social) : ?>
            <a
              class="social-link social-link--<?php echo esc_attr($network); ?>"
              href="<?php echo esc_url($social['url']); ?>"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="<?php echo esc_attr('Follow Hug in the Mail on ' . $social['label']); ?>"
              title="<?php echo esc_attr($social['label']); ?>"
            >
              <span class="social-icon" aria-hidden="true"></span>
            </a>
          <?php endforeach; ?>
        </nav>
      <?php endif; ?>
      <a href="<?php echo esc_url(home_url('/checkout')); ?>" class="btn primary nav-cta">
        <span>Subscribe</span>
        <span class="nav-price">— <?php echo esc_html(MONTHLY_PRICE); ?><span style="opacity:.7">/mo</span></span>
        <span class="arr">→</span>
      </a>
    </div>
  </div>
</header>
