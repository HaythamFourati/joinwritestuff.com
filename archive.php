<?php
/**
 * Blog Archive Template
 * ============================================
 * Grid of blog posts with torn paper card style
 */

get_header(); ?>

<div class="min-h-screen text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>

  <!-- Hero Section -->
  <section class="relative pt-28 pb-14 lg:pt-36 lg:pb-20">
    <div class="max-w-5xl mx-auto px-4">
      <div class="text-center max-w-2xl mx-auto">
        <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">From the Envelope</p>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
          <?php if (is_category()) : ?>
            <?php single_cat_title(); ?>
          <?php elseif (is_tag()) : ?>
            <?php single_tag_title('Tagged: '); ?>
          <?php elseif (is_search()) : ?>
            Search: "<?php the_search_query(); ?>"
          <?php else : ?>
            Stories & Updates
          <?php endif; ?>
        </h1>
        <p class="text-lg text-muted-foreground leading-relaxed">
          Thoughts on kindness, connection, and the joy of real mail — straight from the team behind the envelopes.
        </p>
      </div>
    </div>
  </section>

  <!-- Blog Posts Grid -->
  <section class="pb-20 lg:pb-28">
    <div class="max-w-5xl mx-auto px-4">
      <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); ?>
            <article class="blog-card group">
              <div class="h-full p-6 md:p-8 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] rounded-lg overflow-hidden mb-5">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
                  </a>
                <?php endif; ?>

                <!-- Category -->
                <?php
                $categories = get_the_category();
                if ($categories) : ?>
                  <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="inline-block text-[11px] font-semibold text-primary uppercase tracking-wider mb-3 hover:text-primary/80 transition-colors">
                    <?php echo esc_html($categories[0]->name); ?>
                  </a>
                <?php endif; ?>

                <!-- Title -->
                <h2 class="text-lg font-bold text-foreground mb-3 leading-snug group-hover:text-primary transition-colors">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <!-- Excerpt -->
                <p class="text-muted-foreground text-[14px] leading-relaxed mb-5 line-clamp-3">
                  <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                </p>

                <!-- Meta -->
                <div class="flex items-center justify-between mt-auto">
                  <time datetime="<?php echo get_the_date('c'); ?>" class="text-[12px] text-muted-foreground">
                    <?php echo get_the_date('M j, Y'); ?>
                  </time>
                  <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[13px] text-primary font-medium">
                    Read
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                  </a>
                </div>

              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php
        $pagination = paginate_links([
          'prev_text' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>',
          'next_text' => '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>',
          'type' => 'array',
        ]);
        if ($pagination) : ?>
          <nav class="mt-16 flex justify-center items-center gap-2" aria-label="<?php esc_attr_e('Pagination', 'monthly-detox'); ?>">
            <?php foreach ($pagination as $page) : ?>
              <span class="[&>a]:px-4 [&>a]:py-2 [&>a]:rounded-lg [&>a]:text-sm [&>a]:font-medium [&>a]:text-foreground/70 [&>a]:hover:bg-primary/10 [&>a]:hover:text-primary [&>a]:transition-colors [&>span]:px-4 [&>span]:py-2 [&>span]:rounded-lg [&>span]:text-sm [&>span]:font-medium [&>span.current]:bg-primary [&>span.current]:text-white">
                <?php echo $page; ?>
              </span>
            <?php endforeach; ?>
          </nav>
        <?php endif; ?>

      <?php else : ?>
        <div class="text-center py-20">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
          </div>
          <h2 class="text-xl font-bold text-foreground mb-2">No stories yet</h2>
          <p class="text-muted-foreground">We're writing our first envelope. Check back soon.</p>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
