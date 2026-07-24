<?php
/**
 * Site Footer — Hug in the Mail 2026 redesign
 * Dark four-column footer.
 */
$blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog/');
?>
<footer class="foot">
  <div class="wrap">
    <div class="foot-grid">
      <div class="foot-brand">
        <a href="<?php echo esc_url(home_url()); ?>" class="logo-mark" aria-label="<?php echo esc_attr(SITE_NAME); ?>">
          <img
            src="<?php echo esc_url(get_theme_file_uri('/assets/logo-cropped.png')); ?>"
            alt="<?php echo esc_attr(SITE_NAME); ?>"
            width="69"
            height="72"
          >
        </a>
        <p>Bringing back the joy of real mail. One envelope at a time.</p>
      </div>

      <div>
        <h5>Explore</h5>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/#whats-inside')); ?>">What's Inside</a></li>
          <li><a href="<?php echo esc_url(home_url('/#how-it-works')); ?>">How It Works</a></li>
          <li><a href="<?php echo esc_url(home_url('/#who-we-are')); ?>">Our Story</a></li>
          <li><a href="<?php echo esc_url($blog_url); ?>">Blog</a></li>
        </ul>
      </div>

      <div>
        <h5>Support</h5>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
          <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Join / Pricing</a></li>
          <li><a href="<?php echo esc_url(home_url('/checkout')); ?>">Subscribe</a></li>
          <li><a href="https://billing.stripe.com/p/login/9B6cN45Mb6Xm5wtfVzbwk00" target="_blank" rel="noopener noreferrer">Manage Subscription</a></li>
          <li><a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <div class="foot-bottom">
      <span>&copy; <?php echo esc_html(date('Y')); ?> <?php echo esc_html(SITE_NAME); ?>. All rights reserved.</span>
      <span>
        <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" style="margin-right:24px">Privacy Policy</a>
        <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">Terms of Service</a>
      </span>
    </div>
  </div>
</footer>
