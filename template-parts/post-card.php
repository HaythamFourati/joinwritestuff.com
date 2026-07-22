<?php
/**
 * Blog post card — used by the blog listing, archive, and blog page template.
 * Expects to be called inside the loop.
 */
$categories = get_the_category();
?>
<article class="post">
  <a href="<?php the_permalink(); ?>" class="post-thumb<?php echo has_post_thumbnail() ? '' : ' post-thumb--empty'; ?>" aria-hidden="true" tabindex="-1">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('large'); ?>
    <?php else : ?>
      ✉
    <?php endif; ?>
  </a>
  <div class="post-body">
    <span class="post-meta">
      <?php echo $categories ? esc_html($categories[0]->name) . ' · ' : ''; ?><?php echo esc_html(get_the_date('M j, Y')); ?>
    </span>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '…')); ?></p>
    <div class="post-foot">
      <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('M j, Y')); ?></time>
      <a href="<?php the_permalink(); ?>" class="read">Read
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</article>
