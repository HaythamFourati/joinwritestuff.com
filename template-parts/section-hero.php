<?php
/**
 * Hero Section — Hug in the Mail 2026 redesign
 * Editorial split: copy left, envelope with real monthly contents right.
 */
$hero_mail = array(
  'letter'     => get_theme_file_uri('/assets/hero-mail/letter.webp'),
  'postcard'   => get_theme_file_uri('/assets/hero-mail/postcard-art.webp'),
  'reflection' => get_theme_file_uri('/assets/hero-mail/reflection-card.webp'),
);
?>
<section class="hero" id="hero-section">
  <div class="wrap hero-grid">
    <div class="hero-left">
      <span class="chip">✉ A Monthly Envelope of Warmth</span>
      <h1 class="display">
        Your mailbox<br>deserves <em>a hug.</em>
      </h1>
      <p class="hero-sub">
        Real paper. Real connection. Every month, an envelope filled with
        things that make you pause, reflect, and smile.
      </p>
      <div class="hero-cta">
        <a href="<?php echo esc_url(home_url('/checkout')); ?>" class="btn primary">
          Subscribe — <?php echo esc_html(MONTHLY_PRICE); ?>/mo <span class="arr">→</span>
        </a>
        <a href="#whats-inside" class="btn ghost">See What's Inside</a>
      </div>
      <p class="hero-fine">
        Founding member pricing — locked in forever. Cancel anytime.
      </p>
    </div>

    <div class="hero-card">
      <div class="hand-note" aria-hidden="true">
        <span style="color:var(--brand)">postmarked</span><br>
        <span>with care</span>
        <span class="arrow">↗</span>
      </div>
      <div class="envelope-stage">
        <div class="env-back"></div>

        <div
          class="mail-contents"
          role="img"
          aria-label="A personal letter, a reflection card, and original art spilling from a Hug in the Mail envelope"
        >
          <span class="mail-piece mail-piece-letter">
            <img src="<?php echo esc_url($hero_mail['letter']); ?>" alt="" width="700" height="1100" loading="eager" fetchpriority="high" decoding="async">
          </span>
          <span class="mail-piece mail-piece-reflection">
            <img src="<?php echo esc_url($hero_mail['reflection']); ?>" alt="" width="560" height="880" loading="eager" decoding="async">
          </span>
          <span class="mail-piece mail-piece-postcard">
            <img src="<?php echo esc_url($hero_mail['postcard']); ?>" alt="" width="700" height="906" loading="eager" decoding="async">
          </span>
        </div>

        <div class="env-pocket"></div>

        <img
          class="env-logo"
          src="<?php echo esc_url(get_theme_file_uri('/assets/logo-cropped.png')); ?>"
          alt="<?php echo esc_attr(SITE_NAME); ?>"
          width="69" height="72"
        >

        <div class="env-flap">
          <svg viewBox="0 0 100 50" preserveAspectRatio="none">
            <defs>
              <linearGradient id="flap" x1="0" x2="0" y1="0" y2="1">
                <stop offset="0" stop-color="#E5D2AB"></stop>
                <stop offset="1" stop-color="#F0E0C2"></stop>
              </linearGradient>
            </defs>
            <polygon points="50,2 98,48 2,48" fill="url(#flap)" stroke="rgba(0,0,0,0.1)" stroke-width="0.6"></polygon>
            <line x1="50" y1="2" x2="50" y2="48" stroke="rgba(0,0,0,0.06)" stroke-width="0.4"></line>
          </svg>
        </div>

        <div class="stamp">
          <div class="stamp-inner">♥<small>FOREVER</small></div>
        </div>

        <div class="postmark">
          <svg width="110" height="110" viewBox="0 0 120 120" fill="none">
            <circle cx="60" cy="60" r="56" stroke="currentColor" stroke-width="1.2" stroke-dasharray="3 3"></circle>
            <circle cx="60" cy="60" r="46" stroke="currentColor" stroke-width="0.8"></circle>
            <text x="60" y="42" text-anchor="middle" font-size="9" fill="currentColor" letter-spacing="1">FIRST CLASS</text>
            <text x="60" y="62" text-anchor="middle" font-size="13" fill="currentColor" font-style="italic">Est. 2026</text>
            <text x="60" y="76" text-anchor="middle" font-size="9" fill="currentColor" letter-spacing="1">WARMTH</text>
            <text x="60" y="92" text-anchor="middle" font-size="7" fill="currentColor" letter-spacing="1">BY MAIL</text>
          </svg>
        </div>

        <div class="address">
          TO:<br>
          <b>You,</b><br>
          Somewhere kind,<br>
          Earth, 2026
        </div>

        <a href="#testimonials" class="watch">
          <span class="play">▶</span> Watch our story
        </a>
      </div>
    </div>
  </div>
</section>
