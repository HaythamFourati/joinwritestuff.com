<?php
/**
 * Testimonial — Hug in the Mail 2026 redesign
 * Leslie's handwritten letter + her video portrait, with a "More stories"
 * row of clickable subscriber video polaroids beneath.
 */
$leslie_video = 'HiV3nH6TyQM';

// Supporting subscriber videos (click to play). [id, caption].
$more_stories = array(
  array('UaJ2BirDlEk', 'Something in the mail that made me smile'),
  array('vmaqV76Ujx0', 'Like a hug from a stranger'),
  array('y4Y67kP1UhE', 'A little envelope of warmth'),
  array('tUQd9rGIkXo', 'Real connection, by mail'),
);
?>
<section class="section letter-section" id="testimonials">
  <div class="wrap wrap-grid">
    <div class="testimonial-side" data-aos>
      <span class="chip">★ A real subscriber</span>
      <h2 class="display" style="margin-top:16px">
        Hear it from<br>
        someone <em>who lived it.</em>
      </h2>
      <div class="portrait">
        <div class="frame" data-yt="<?php echo esc_attr($leslie_video); ?>" data-yt-title="Leslie — Hug in the Mail subscriber" role="button" tabindex="0" aria-label="Play Leslie's subscriber story">
          <img src="https://i.ytimg.com/vi/<?php echo esc_attr($leslie_video); ?>/hqdefault.jpg" alt="Leslie, a Hug in the Mail subscriber" loading="lazy">
          <span class="play-big"><span>▶</span></span>
        </div>
      </div>
    </div>

    <div class="real-letter" data-aos>
      <span class="stamp-mini">A subscriber's story</span>
      <div class="salutation">Dear friend,</div>
      <div class="body">
        <p>"I could really use a hug — and one came in the mail."</p>
        <p style="margin-top:16px">
          After losing both of her parents and a dear friend this past year,
          Leslie shared something that deeply moved us. She said that in a
          world that can feel so disconnected, we truly need each other —
          and that receiving her Hug in the Mail felt like exactly what her
          heart needed.
        </p>
        <p style="margin-top:16px">
          <strong>Not just to send pretty mail. But to send comfort. Connection. Humanity.</strong>
        </p>
        <p style="margin-top:16px">
          A reminder that someone, somewhere, is thinking about you.
        </p>
      </div>
      <div class="signoff">— with love, Leslie</div>
    </div>
  </div>

  <div class="wrap more-stories" data-aos>
    <span class="eyebrow" style="display:block;text-align:center">More real stories</span>
    <div class="stories-row">
      <?php foreach ($more_stories as $v) : ?>
        <figure class="story-clip">
          <div class="clip-card">
            <div class="clip-media" data-yt="<?php echo esc_attr($v[0]); ?>" data-yt-title="<?php echo esc_attr($v[1]); ?> — Hug in the Mail subscriber" role="button" tabindex="0" aria-label="Play subscriber story">
              <img src="https://i.ytimg.com/vi/<?php echo esc_attr($v[0]); ?>/hqdefault.jpg" alt="" loading="lazy">
              <span class="clip-play"><span>▶</span></span>
            </div>
            <span class="clip-cap"><?php echo esc_html($v[1]); ?></span>
          </div>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="wrap" style="text-align:center;margin-top:48px">
    <a href="#contact" class="btn primary">
      Get yours in the mail <span class="arr">→</span>
    </a>
  </div>
</section>
