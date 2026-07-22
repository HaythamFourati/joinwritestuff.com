<?php
/**
 * The Experience — Hug in the Mail 2026 redesign
 * Vertical dashed "route" timeline with four steps.
 */
$steps = array(
  array('01', 'Walk to your mailbox', 'Find something unexpected waiting for you — not a bill, not junk mail, but a genuine surprise.', 'decopics/Linda at cafe.webp'),
  array('02', 'Open the envelope',    'Genuine curiosity unfolds. That feeling of anticipation — what\'s inside this time?', ''),
  array('03', 'Read a story',         'Feel warmly connected to something real, something human, something that matters.', ''),
  array('04', 'Feel connected',       'A moment of warmth and belonging. Real connection in a world that often feels too fast and too digital.', 'decopics/Linda walking in the woods with Luna.webp'),
);
?>
<section class="section" id="how-it-works">
  <div class="wrap">
    <div class="section-head" data-aos>
      <span class="eyebrow">The Experience</span>
      <h2 class="display">
        Here's what happens<br>
        <em style="font-style:italic;color:var(--brand)">once a month.</em>
      </h2>
      <p>Four simple moments, from your mailbox to your heart.</p>
    </div>

    <div class="route">
      <?php foreach ($steps as $i => $s) : ?>
        <div class="step<?php echo $i === 0 ? ' active' : ''; ?>" data-aos>
          <div class="dot-num"><?php echo esc_html($s[0]); ?></div>
          <div style="position:relative">
            <h3 class="display"><?php echo esc_html($s[1]); ?></h3>
            <p><?php echo esc_html($s[2]); ?></p>
            <?php if ($s[3]) : ?>
              <div class="photo-strip">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/' . $s[3])); ?>" alt="" loading="lazy">
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:56px;max-width:680px;margin-inline:auto">
      <p style="font-size:17px;color:var(--ink-soft)">
        A little reminder that joy, curiosity, and connection are alive and well
        — sometimes arriving in an envelope.
      </p>
    </div>
  </div>
</section>
