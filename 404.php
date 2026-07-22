<?php
/**
 * 404 — Page Not Found
 */
$blog_url = get_permalink(get_option('page_for_posts')) ?: home_url('/blog/');
get_header(); ?>

<div class="hitm">
  <?php get_template_part('template-parts/header-nav'); ?>

  <main class="notfound wrap">
    <span class="eyebrow">Error 404 · Return to sender</span>
    <div class="big">404</div>
    <h1>This letter never arrived.</h1>
    <p>The page you're looking for got lost in the mail — moved, renamed, or perhaps it was never here at all. Let's get you back to something warm.</p>
    <div class="actions">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn primary">Back home <span class="arr">→</span></a>
      <a href="<?php echo esc_url($blog_url); ?>" class="btn ghost">Read the blog</a>
    </div>
  </main>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
