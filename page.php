<?php
/**
 * Default Page Template — header, WP content, footer.
 */
get_header(); ?>

<div class="hitm">
  <?php get_template_part('template-parts/header-nav'); ?>

  <main class="page-body">
    <div class="article-narrow">
      <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="prose"><?php the_content(); ?></div>
      <?php endwhile; ?>
    </div>
  </main>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
