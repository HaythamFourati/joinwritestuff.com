<?php
/**
 * The Kindness Ripple Section
 * ============================================
 * Editorial split: text left, hand-dropping-heart illustration right
 */
?>
<section id="kindness-ripple" class="relative py-20 lg:py-32 overflow-hidden">
  <!-- Decorative founder polaroids -->
  <div class="absolute top-12 right-4 xl:right-12 hidden lg:block pointer-events-none z-0" style="transform: rotate(-8deg);">
    <div class="bg-white p-2 pb-6 shadow-2xl shadow-foreground/15">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/GreenOpenMouthHeadshot.webp')); ?>" alt="" class="block w-[140px] h-[170px] object-cover" loading="lazy">
    </div>
  </div>
  <div class="absolute bottom-16 left-4 xl:left-12 hidden lg:block pointer-events-none z-0" style="transform: rotate(7deg);">
    <div class="bg-white p-2 pb-6 shadow-2xl shadow-foreground/15">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/Garey with baby.webp')); ?>" alt="" class="block w-[150px] h-[180px] object-cover" loading="lazy">
    </div>
  </div>
  <div class="max-w-5xl mx-auto px-4 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-6 items-center">

      <!-- Left: Text -->
      <div class="max-w-lg">
        <h2 class="mb-6">
          <span class="block text-3xl md:text-4xl lg:text-5xl italic text-muted-foreground font-normal">The</span>
          <span class="block text-4xl md:text-5xl lg:text-6xl font-bold text-foreground -mt-1">Kindness Ripple</span>
        </h2>
        <p class="text-lg md:text-xl text-muted-foreground leading-relaxed mb-4">
          One small act. A thousand quiet echoes.
        </p>
        <p class="text-base text-muted-foreground leading-relaxed mb-8">
          After you've enjoyed your monthly envelope, we invite you to pass it on. Leave it somewhere unexpected. Slip it into a friend's bag. Mail it to someone who needs a smile. Because kindness was never meant to sit still.
        </p>

        

        <p class="text-lg md:text-xl font-semibold text-foreground">
          Send one. Watch it travel.
        </p>
      </div>

      <!-- Right: Illustration -->
      <div class="flex justify-center md:justify-end">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/kindness ripple.webp')); ?>"
             alt="A hand gently dropping a heart into water, creating ripples"
             class="w-full max-w-md md:max-w-lg"
             loading="lazy"
             width="600"
             height="500">
      </div>

    </div>
  </div>
</section>
