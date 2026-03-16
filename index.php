<?php
/**
 * Index Template - Fallback template for WordPress
 * Used when no more specific template is found
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <section class="py-24">
    <div class="max-w-6xl mx-auto px-4">
      <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); ?>
            <article class="blog-card group bg-white rounded-2xl border border-border/50 overflow-hidden hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] overflow-hidden">
                  <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
                </a>
              <?php endif; ?>
              <div class="p-6">
                <h2 class="text-[18px] font-semibold text-foreground mb-3 leading-snug group-hover:text-primary transition-colors">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="text-muted-foreground text-[14px] leading-relaxed mb-4 line-clamp-2">
                  <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[13px] text-primary font-medium">
                  Read More
                  <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <div class="text-center py-16">
          <h2 class="text-xl font-semibold text-foreground mb-2">No content found</h2>
          <p class="text-muted-foreground">Please check back later.</p>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();