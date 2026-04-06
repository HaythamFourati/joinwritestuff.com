<?php
/**
 * Default Page Template
 * ============================================
 * Simple single page with header, WP content area, and footer
 */

get_header();
?>

<div class="min-h-screen text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>

  <main class="relative pt-24 pb-16 lg:pt-32 lg:pb-24">
    <div class="max-w-3xl mx-auto px-4">

      <?php while ( have_posts() ) : the_post(); ?>

        <!-- Page Title -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-8">
          <?php the_title(); ?>
        </h1>

        <!-- Page Content -->
        <div class="prose prose-lg max-w-none text-foreground/90
                    prose-headings:text-foreground prose-headings:font-bold
                    prose-a:text-primary prose-a:no-underline hover:prose-a:underline
                    prose-strong:text-foreground
                    prose-img:rounded-xl prose-img:shadow-sm">
          <?php the_content(); ?>
        </div>

      <?php endwhile; ?>

    </div>
  </main>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
