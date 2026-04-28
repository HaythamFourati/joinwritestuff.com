<?php
/**
 * The Kindness Ripple Section
 * ============================================
 * Editorial split: text left, hand-dropping-heart illustration right
 */
?>
<section id="kindness-ripple" class="relative py-20 lg:py-32 overflow-hidden">

  <!-- Ambient background -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute bottom-0 left-0 w-[700px] h-[500px] opacity-25" style="background: radial-gradient(ellipse at bottom left, hsl(15 60% 82%) 0%, transparent 65%);"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[400px] opacity-15" style="background: radial-gradient(ellipse at top right, hsl(30 92% 70%) 0%, transparent 65%);"></div>
  </div>

  <div class="max-w-5xl mx-auto px-4 relative z-10">

    <!-- Decorative founder polaroids -->
    <div class="deco-polaroid absolute top-8 -right-[200px] hidden xl:block pointer-events-none z-0" data-rotation="-8" style="transform: rotate(-8deg);">
      <div class="bg-white p-2 pb-6 shadow-2xl shadow-foreground/15">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/GreenOpenMouthHeadshot.webp')); ?>" alt="" class="block w-[168px] h-[204px] object-cover" loading="lazy">
      </div>
    </div>
    <div class="deco-polaroid absolute bottom-8 -left-[200px] hidden xl:block pointer-events-none z-0" data-rotation="7" style="transform: rotate(7deg);">
      <div class="bg-white p-2 pb-6 shadow-2xl shadow-foreground/15">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/Garey with baby.webp')); ?>" alt="" class="block w-[180px] h-[216px] object-cover" loading="lazy">
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Left: Text -->
      <div class="max-w-lg">

        <!-- Badge -->
        <div class="inline-flex items-center gap-2 bg-primary/8 border border-primary/20 text-primary text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-7">
          <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
          Pass it on
        </div>

        <!-- Headline -->
        <h2 class="mb-5">
          <span class="block text-2xl md:text-3xl lg:text-4xl italic text-muted-foreground font-normal leading-snug">The</span>
          <span class="block text-4xl md:text-5xl lg:text-[3.5rem] font-bold text-foreground leading-tight -mt-1">Kindness <span class="text-primary">Ripple</span></span>
        </h2>

        <!-- Body -->
        <p class="text-base md:text-lg text-muted-foreground leading-relaxed mb-6">
          After you've enjoyed your monthly envelope, we invite you to pass it on. Leave it somewhere unexpected. Slip it into a friend's bag. Mail it to someone who needs a smile.
        </p>

        <p class="text-sm text-muted-foreground italic mb-8 border-l-3 border-accent pl-3">
          Because kindness was never meant to sit still.
        </p>

        <!-- Closing line -->
        <p class="text-xl md:text-2xl font-bold text-foreground">
          Send one. <span class="text-primary">Watch it travel.</span>
        </p>

      </div>

      <!-- Right: Illustration -->
      <div class="flex justify-center md:justify-end">
        <div class="relative w-full">
          <!-- Soft glow ring behind illustration -->
          <div class="absolute inset-0 rounded-full opacity-50 pointer-events-none scale-110" style="background: radial-gradient(circle, hsl(15 60% 80%) 0%, transparent 65%);"></div>
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/kindness ripple.webp')); ?>"
               alt="A hand gently dropping a heart into water, creating ripples"
               class="relative w-full max-w-none drop-shadow-2xl"
               loading="lazy"
               width="600"
               height="500">
        </div>
      </div>

    </div>
  </div>
</section>
