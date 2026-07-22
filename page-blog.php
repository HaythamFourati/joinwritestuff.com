<?php
/**
 * Template Name: Blog
 * Blog listing page (paginated custom query).
 */
get_header(); ?>

<div class="hitm">
  <?php get_template_part('template-parts/header-nav'); ?>

  <header class="page-hero wrap">
    <span class="eyebrow">From the Envelope</span>
    <h1>Stories &amp; Updates</h1>
    <p>Thoughts on kindness, connection, and the joy of real mail — straight from the team behind the envelopes.</p>
  </header>

  <main class="blog-wrap wrap">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $blog_query = new WP_Query(array(
      'post_type'      => 'post',
      'posts_per_page' => 9,
      'paged'          => $paged,
    ));

    if ($blog_query->have_posts()) : ?>
      <div class="blog-grid">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
          <?php get_template_part('template-parts/post-card'); ?>
        <?php endwhile; ?>
      </div>

      <?php
      $pagination = paginate_links(array(
        'total'     => $blog_query->max_num_pages,
        'current'   => $paged,
        'prev_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>',
        'next_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>',
        'type'      => 'array',
      ));
      if ($pagination) {
        echo '<nav class="pagination" aria-label="Pagination">' . implode('', $pagination) . '</nav>';
      }
      wp_reset_postdata();
      ?>
    <?php else : ?>
      <div class="empty">
        <div class="icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg></div>
        <h2>No stories yet</h2>
        <p>We're writing our first envelope. Check back soon.</p>
      </div>
    <?php endif; ?>
  </main>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
