<?php
/**
 * Front Page Template - Hug in the Mail Homepage
 */

get_header(); ?>

<div class="hitm">
  <?php get_template_part('template-parts/header-nav'); ?>
  <main>
  <?php get_template_part('template-parts/section-hero'); ?>
  <?php get_template_part('template-parts/section-whats-inside'); ?>
  <?php get_template_part('template-parts/section-how-it-works'); ?>
  <?php get_template_part('template-parts/section-testimonials'); ?>
  <?php get_template_part('template-parts/section-who-we-are'); ?>
  <?php get_template_part('template-parts/section-founding-membership'); ?>
  <?php get_template_part('template-parts/section-kindness-ripple'); ?>
  </main>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
