<?php
/**
 * Blog Archive Template (category / tag / search)
 */
get_header(); ?>

<div class="hitm">
  <?php get_template_part('template-parts/header-nav'); ?>

  <header class="page-hero wrap">
    <span class="eyebrow">From the Envelope</span>
    <h1>
      <?php if (is_category()) : single_cat_title();
      elseif (is_tag()) : single_tag_title('Tagged: ');
      elseif (is_search()) : ?>Search: &ldquo;<?php the_search_query(); ?>&rdquo;<?php
      else : ?>Stories &amp; Updates<?php endif; ?>
    </h1>
    <p>Thoughts on kindness, connection, and the joy of real mail — straight from the team behind the envelopes.</p>
  </header>

  <main class="blog-wrap wrap">
    <?php if (have_posts()) : ?>
      <div class="blog-grid">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/post-card'); ?>
        <?php endwhile; ?>
      </div>

      <?php
      $pagination = paginate_links(array(
        'prev_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>',
        'next_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>',
        'type'      => 'array',
      ));
      if ($pagination) {
        echo '<nav class="pagination" aria-label="Pagination">' . implode('', $pagination) . '</nav>';
      }
      ?>
    <?php else : ?>
      <div class="empty">
        <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg></div>
        <h2>Nothing here yet</h2>
        <p>No stories match this view. Check back soon.</p>
      </div>
    <?php endif; ?>
  </main>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
