<?php
/**
 * Single Blog Post — editorial article with TOC, author box, post nav.
 */
get_header(); ?>

<div class="hitm">
  <?php get_template_part('template-parts/header-nav'); ?>

  <div class="reading-bar" aria-hidden="true"><span></span></div>

  <?php if (have_posts()) : while (have_posts()) : the_post();
    $categories = get_the_category();
    $blog_url   = get_permalink(get_option('page_for_posts')) ?: home_url('/blog/');
  ?>

  <article class="article">
    <header class="article-head article-narrow">
      <div class="article-crumbs">
        <a href="<?php echo esc_url($blog_url); ?>" class="article-back">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
          Back to Blog
        </a>
        <?php if ($categories) : ?>
          <span class="article-cat"><?php echo esc_html($categories[0]->name); ?></span>
        <?php endif; ?>
      </div>

      <h1><?php the_title(); ?></h1>

      <div class="article-meta">
        <span class="who">
          <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
          <?php the_author(); ?>
        </span>
        <span class="sep"></span>
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('F j, Y')); ?></time>
        <span class="sep"></span>
        <span><?php echo (int) ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200); ?> min read</span>
      </div>
    </header>

    <?php if (has_post_thumbnail()) : ?>
      <div class="article-hero-img article-wide">
        <?php the_post_thumbnail('full'); ?>
      </div>
    <?php endif; ?>

    <div class="article-narrow">
      <?php
      $content = apply_filters('the_content', get_the_content());
      echo render_table_of_contents();
      ?>
      <div class="prose"><?php echo $content; ?></div>

      <?php $tags = get_the_tags(); if ($tags) : ?>
        <div class="article-tags">
          <span class="lbl">Tags:</span>
          <?php foreach ($tags as $tag) : ?>
            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="author-box">
        <?php echo get_avatar(get_the_author_meta('ID'), 112); ?>
        <div>
          <p class="lbl">Written by</p>
          <h3><?php the_author(); ?></h3>
          <p><?php echo esc_html(get_the_author_meta('description') ?: 'Part of the team bringing warmth back to your mailbox, one envelope at a time.'); ?></p>
        </div>
      </div>

      <?php
      $prev_post = get_previous_post();
      $next_post = get_next_post();
      if ($prev_post || $next_post) : ?>
        <nav class="post-nav" aria-label="Post navigation">
          <?php if ($prev_post) : ?>
            <a href="<?php echo esc_url(get_permalink($prev_post)); ?>">
              <span class="lbl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>Previous</span>
              <span class="t"><?php echo esc_html(get_the_title($prev_post)); ?></span>
            </a>
          <?php else : ?><span></span><?php endif; ?>

          <?php if ($next_post) : ?>
            <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="next">
              <span class="lbl">Next<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></span>
              <span class="t"><?php echo esc_html(get_the_title($next_post)); ?></span>
            </a>
          <?php else : ?><span></span><?php endif; ?>
        </nav>
      <?php endif; ?>
    </div>
  </article>

  <?php endwhile; endif; ?>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
