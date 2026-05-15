<?php
/**
 * Latest Blog Posts Section
 * ============================================
 * Pulls the 3 most recent posts and displays them as editorial cards.
 */

$recent_posts = new WP_Query([
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => 3,
  'orderby'        => 'date',
  'order'          => 'DESC',
]);

if ( ! $recent_posts->have_posts() ) return;
?>
<section id="latest-posts" class="relative py-20 lg:py-28 overflow-hidden">

  <!-- Ambient background -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute top-0 left-0 w-[600px] h-[500px] opacity-20" style="background: radial-gradient(ellipse at top left, hsl(30 92% 70%) 0%, transparent 65%);"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[400px] opacity-20" style="background: radial-gradient(ellipse at bottom right, hsl(15 60% 82%) 0%, transparent 65%);"></div>
  </div>

  <div class="max-w-5xl mx-auto px-4 relative z-10">

    <!-- Section header -->
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-12">
      <div>
        <div class="inline-flex items-center gap-2 bg-primary/8 border border-primary/20 text-primary text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">
          <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          From the blog
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-foreground leading-tight">
          Letters, thoughts &amp;<br class="hidden sm:block"> a little wisdom
        </h2>
      </div>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path('blog') ) ); ?>"
         class="shrink-0 inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-primary/80 transition-colors">
        Read all posts
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>

    <!-- Posts grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
      <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
      <article class="group flex flex-col bg-white rounded-2xl overflow-hidden shadow-md shadow-foreground/6 hover:shadow-xl hover:shadow-foreground/10 hover:-translate-y-1 transition-all duration-300">

        <!-- Thumbnail -->
        <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" class="block overflow-hidden aspect-[4/3]" tabindex="-1" aria-hidden="true">
          <?php the_post_thumbnail('medium_large', [
            'class'   => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500',
            'loading' => 'lazy',
          ]); ?>
        </a>
        <?php else : ?>
        <a href="<?php the_permalink(); ?>" class="block aspect-[4/3] bg-secondary flex items-center justify-center" tabindex="-1" aria-hidden="true">
          <svg class="w-10 h-10 text-muted-foreground/30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
        </a>
        <?php endif; ?>

        <!-- Content -->
        <div class="flex flex-col flex-1 p-6">

          <!-- Category + date -->
          <div class="flex items-center gap-3 mb-3">
            <?php
            $cats = get_the_category();
            if ( $cats ) :
            ?>
            <span class="text-[11px] font-semibold text-primary uppercase tracking-wide"><?php echo esc_html( $cats[0]->name ); ?></span>
            <span class="w-1 h-1 rounded-full bg-muted-foreground/30"></span>
            <?php endif; ?>
            <time class="text-[12px] text-muted-foreground" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
              <?php echo esc_html( get_the_date('M j, Y') ); ?>
            </time>
          </div>

          <!-- Title -->
          <h3 class="text-[17px] font-bold text-foreground leading-snug mb-3 group-hover:text-primary transition-colors duration-200">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>

          <!-- Excerpt -->
          <p class="text-[14px] text-muted-foreground leading-relaxed line-clamp-3 flex-1">
            <?php echo wp_trim_words( get_the_excerpt(), 20, '…' ); ?>
          </p>

          <!-- Read more -->
          <a href="<?php the_permalink(); ?>"
             class="mt-5 inline-flex items-center gap-1.5 text-[13px] font-semibold text-primary hover:gap-2.5 transition-all duration-200">
            Read more
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>

        </div>
      </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

  </div>
</section>
