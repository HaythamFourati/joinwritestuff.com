<?php
/**
 * How It Works Section - Clean Timeline
 * ============================================
 * Shows the simple experience of receiving mail
 */
?>
<section id="how-it-works" class="relative py-16 lg:py-24 overflow-hidden">
  <!-- Decorative founder polaroids -->
  <div class="absolute top-12 left-4 xl:left-12 hidden lg:block pointer-events-none z-0" style="transform: rotate(6deg);">
    <div class="bg-white p-2 pb-6 shadow-2xl shadow-foreground/15">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/Linda at cafe.webp')); ?>" alt="" class="block w-[140px] h-[170px] object-cover" loading="lazy">
    </div>
  </div>
  <div class="absolute bottom-16 right-4 xl:right-14 hidden lg:block pointer-events-none z-0" style="transform: rotate(-5deg);">
    <div class="bg-white p-2 pb-6 shadow-2xl shadow-foreground/15">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/decopics/Linda walking in the woods with Luna.webp')); ?>" alt="" class="block w-[150px] h-[180px] object-cover" loading="lazy">
    </div>
  </div>
  <!-- Decorative accents around timeline -->
  <!-- Near header -->
  <div class="absolute top-[7rem] left-[20%] opacity-18 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
      <circle cx="13" cy="6" r="1.5" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>
  <div class="absolute top-[9rem] right-[18%] opacity-16 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <line x1="7" y1="0" x2="7" y2="14" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="0" y1="7" x2="14" y2="7" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
  </div>
  <!-- Around timeline cards -->
  <div class="absolute top-[14rem] left-[6%] opacity-15 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(30 92% 53%)"/>
      <circle cx="13" cy="7" r="1.5" fill="hsl(352 72% 38%)"/>
    </svg>
  </div>
  <div class="absolute top-[18rem] right-[8%] opacity-14 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
      <circle cx="11" cy="8" r="1.5" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>
  <div class="absolute top-[26rem] left-[10%] opacity-16 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <line x1="8" y1="0" x2="8" y2="16" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="0" y1="8" x2="16" y2="8" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
  </div>
  <div class="absolute bottom-[14rem] right-[12%] opacity-15 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
      <circle cx="11" cy="6" r="1.5" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>
  <div class="absolute bottom-[8rem] left-[15%] opacity-12 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(30 92% 53%)"/>
      <circle cx="13" cy="8" r="1.5" fill="hsl(352 72% 38%)"/>
    </svg>
  </div>

  <div class="max-w-4xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">The experience</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Here's what happens once a month
      </h2>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
        Four simple moments, from your mailbox to your heart.
      </p>
    </div>

    <!-- Steps -->
    <div class="space-y-6">
      <!-- Step 1 -->
      <div class="timeline-step p-10 md:p-12 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold">1</div>
          <div>
            <h3 class="text-xl md:text-2xl font-bold text-foreground mb-2">Walk to your mailbox</h3>
            <p class="text-muted-foreground leading-relaxed">
              Find something unexpected waiting for you — not a bill, not junk mail, but a genuine surprise.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="timeline-step p-10 md:p-12 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold">2</div>
          <div>
            <h3 class="text-xl md:text-2xl font-bold text-foreground mb-2">Open the envelope</h3>
            <p class="text-muted-foreground leading-relaxed">
              Genuine curiosity unfolds. That feeling of anticipation — what's inside this time?
            </p>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="timeline-step p-10 md:p-12 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold">3</div>
          <div>
            <h3 class="text-xl md:text-2xl font-bold text-foreground mb-2">Read a story</h3>
            <p class="text-muted-foreground leading-relaxed">
              Feel warmly connected to something real, something human, something that matters.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="timeline-step p-10 md:p-12 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center text-sm font-bold">4</div>
          <div>
            <h3 class="text-xl md:text-2xl font-bold text-foreground mb-2">Feel connected</h3>
            <p class="text-muted-foreground leading-relaxed">
              A moment of warmth and belonging. Real connection in a world that often feels too fast and too digital.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Message -->
    <div class="text-center mt-14">
      <p class="text-xl md:text-2xl text-foreground font-medium leading-relaxed">
        A little reminder that joy, curiosity, and connection are alive and well<br class="hidden md:block">  - sometimes arriving in an envelope.
      </p>
    </div>
  </div>
</section>
