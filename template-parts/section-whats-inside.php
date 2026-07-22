<?php
/**
 * What's Inside — Hug in the Mail 2026 redesign
 * Editorial spread photo + 12-col card grid + pull quote.
 */
// Monochrome line icons (inherit the badge color via currentColor).
$svg = fn($paths) => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">' . $paths . '</svg>';
$cards = array(
  array('c1', '01', $svg('<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/>'), 'A Heartfelt Letter', 'A personal, handwritten-style note about life, family, and the beautifully imperfect experience of being human.'),
  array('c2', '02', $svg('<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>'), 'A Thoughtful Reflection', 'A philosophical insight or gentle piece of wisdom to sit with and carry through your month.'),
  array('c3', '03', $svg('<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>'), 'A Sticker', 'A fun, collectible sticker to brighten your laptop, notebook, or wherever you need a little spark of joy.'),
  array('c4', '04', $svg('<path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3"/><path d="M21 15v7"/>'), 'A Recipe', 'A comforting recipe to make and share — because the best moments often happen around the kitchen table.'),
  array('c5', '05', $svg('<path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>'), 'A Pay It Forward Postcard', 'A blank postcard each month for you to write something kind and send to someone who needs it.'),
  array('c6', '06', $svg('<path d="M20 12v10H4V12"/><path d="M2 7h20v5H2z"/><path d="M12 22V7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>'), 'A Surprise', 'Something unexpected and delightful — because grown-ups deserve fun surprises too.'),
);
?>
<section class="section" id="whats-inside">
  <div class="wrap">
    <div class="deco-polaroid left" style="left:96px;top:70px;--rot:-6deg" aria-hidden="true">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/Garey ice cream.webp')); ?>" alt="" loading="lazy">
    </div>
    <div class="deco-polaroid right" style="right:96px;top:70px;--rot:5deg" aria-hidden="true">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/GreenOpenMouthHeadshot.webp')); ?>" alt="" loading="lazy">
    </div>
    <div class="section-head" data-aos>
      <span class="eyebrow">What Arrives in your mailbox</span>
      <h2 class="display">
        Each month, a carefully<br>
        <em style="font-style:italic;color:var(--brand)">curated envelope.</em>
      </h2>
      <p>Light as a smile, and packed with everything your soul needs in the moment.</p>
    </div>

    <div class="spread" data-aos>
      <div class="spread-marginalia" style="text-align:right">
        <span class="label">No. 01 / Letter</span>
        handwritten<br>in real ink, on<br>soft cream stock<br>
        <span style="display:inline-block;margin-top:8px;font-size:32px;color:var(--brand)">↘</span>
      </div>

      <div class="spread-photo">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/inside the mail.webp')); ?>" alt="A look inside the monthly envelope — letters, postcards, stickers and more" loading="lazy">
        <span class="pin" style="top:18%;left:22%"></span>
        <span class="pin" style="top:60%;left:70%"></span>
        <span class="pin" style="top:78%;left:30%"></span>
      </div>

      <div class="spread-marginalia">
        <span class="label">No. 06 / Surprise</span>
        <span style="display:inline-block;margin-bottom:8px;font-size:32px;color:var(--brand)">↙</span><br>
        sticker, recipe<br>postcard, a sweet<br>something unexpected
      </div>
    </div>

    <div class="inside-grid">
      <?php foreach ($cards as $c) : ?>
        <article class="in-card <?php echo esc_attr($c[0]); ?>" data-aos>
          <div class="icon"><?php echo $c[2]; ?></div>
          <span class="num"><?php echo esc_html($c[1]); ?></span>
          <h3><?php echo esc_html($c[3]); ?></h3>
          <p><?php echo esc_html($c[4]); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="wrap pullquote" data-aos>
    <q>It's not just a subscription. It's not just content.<br>It's a tiny pause in a busy world.</q>
    <span class="src">— No screen required —</span>
  </div>
</section>
