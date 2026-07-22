<?php
/**
 * Our Mission / Founders — Hug in the Mail 2026 redesign
 * Three founder portraits + three mission cards.
 */
$founders = array(
  array('Elaine', 'Co-founder · Curation',   'Elaine Williams.webp'),
  array('Garey',  'Co-founder · Operations',  'GareySimmons.webp'),
  array('Linda',  'Co-founder · Words',       'Linda Tighe.webp'),
);
$mission = array(
  array('I.',   'We believe in humanity',   'Behind every screen is a real person craving real connection. We\'re here for the human stuff — the messy, beautiful parts.'),
  array('II.',  'We champion connection',    'Real relationships are built through consistent, thoughtful gestures. A letter a month is a small act with a surprisingly big impact.'),
  array('III.', 'We bring back warmth',      'We\'re on a mission to make everyday life feel a little warmer, a little kinder, and a little more worth celebrating.'),
);
?>
<section class="section" id="who-we-are">
  <div class="wrap">
    <div class="section-head" data-aos>
      <span class="eyebrow">Our Mission</span>
      <h2 class="display">
        Who is <em style="font-style:italic;color:var(--brand)">behind this.</em>
      </h2>
      <p>We believe the world needs more real moments — and fewer notifications.</p>
    </div>

    <div class="founders">
      <?php foreach ($founders as $f) : ?>
        <div class="founder" data-aos>
          <div class="founder-frame">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/' . $f[2])); ?>" alt="<?php echo esc_attr($f[0]); ?>" loading="lazy">
          </div>
          <h4><?php echo esc_html($f[0]); ?></h4>
          <small><?php echo esc_html($f[1]); ?></small>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mission-cards">
      <?php foreach ($mission as $m) : ?>
        <div class="mission" data-aos>
          <span class="num"><?php echo esc_html($m[0]); ?></span>
          <h3><?php echo esc_html($m[1]); ?></h3>
          <p><?php echo esc_html($m[2]); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
