<?php
/**
 * Front Page Template - Hug in the Mail Homepage
 * PHP renders all content, React enhances with GSAP animations
 */

get_header(); ?>

<div class="min-h-screen text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  <?php get_template_part('template-parts/section-hero'); ?>
  <?php get_template_part('template-parts/section-whats-inside'); ?>
  <?php get_template_part('template-parts/section-how-it-works'); ?>
  <?php get_template_part('template-parts/section-who-we-are'); ?>
  <?php get_template_part('template-parts/section-founding-membership'); ?>
  <?php get_template_part('template-parts/section-kindness-ripple'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
