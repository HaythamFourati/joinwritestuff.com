<?php
/**
 * The Kindness Ripple — Hug in the Mail 2026 redesign
 * Editorial split: copy left, circular photo with animated ripple rings right.
 */
?>
<section class="ripple-section" id="kindness-ripple">
  <div class="wrap ripple-grid" data-aos>
    <div class="deco-polaroid left" style="top:20px;--rot:6deg" aria-hidden="true">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/lookupsunbrickLOVE.webp')); ?>" alt="" loading="lazy">
    </div>
    <div class="deco-polaroid right" style="top:110px;--rot:-5deg" aria-hidden="true">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/Garey with baby.webp')); ?>" alt="" loading="lazy">
    </div>
    <div class="ripple-copy">
      <span class="chip" style="margin-bottom:16px">♥ Pass it on</span>
      <h2>
        <span class="the">The</span>
        Kindness <em>Ripple.</em>
      </h2>
      <p>
        After you've enjoyed your monthly envelope, we invite you to pass it on.
        Leave it somewhere unexpected. Slip it into a friend's bag. Mail it to
        someone who needs a smile.
      </p>
      <p class="quote">Because kindness was never meant to sit still.</p>
      <p class="cta-line">Send one. <a href="#contact">Watch it travel.</a></p>
    </div>

    <div class="ripple-vis">
      <div class="ripple-photo-frame">
        <img src="https://images.unsplash.com/photo-1617052083857-81678da101e7?q=80&w=1170&auto=format&fit=crop" alt="A moment of warmth and human connection" loading="lazy">
      </div>
      <div class="ripple-circle" aria-hidden="true">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
      </div>
    </div>
  </div>
</section>
