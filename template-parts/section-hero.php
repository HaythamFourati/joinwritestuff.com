<?php
/**
 * Hero Section - Hug in the Mail
 * ============================================
 * 2-column editorial hero: copy left, video right
 */
?>
<section id="hero-section" class="relative overflow-hidden pt-6 pb-14 lg:pt-8 lg:pb-20">

  <!-- Ambient background glow -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <!-- Warm blush radial behind copy -->
    <div class="absolute -top-20 -left-20 w-[600px] h-[600px] rounded-full opacity-30" style="background: radial-gradient(circle, hsl(15 60% 82%) 0%, transparent 70%);"></div>
    <!-- Soft orange glow behind video -->
    <div class="absolute top-10 right-0 w-[500px] h-[500px] rounded-full opacity-20" style="background: radial-gradient(circle, hsl(30 92% 70%) 0%, transparent 65%);"></div>
  </div>

  <div class="max-w-6xl mx-auto px-4 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Left: Copy -->
      <div class="hero-content order-2 lg:order-1 text-center lg:text-left">

        <!-- Badge label -->
        <div class="inline-flex items-center gap-2 bg-primary/8 border border-primary/20 text-primary text-[12px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-7">
          <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M2 7l10 7 10-7"/>
          </svg>
          A monthly envelope of warmth
        </div>

        <!-- Headline -->
        <h1 class="hero-heading text-4xl md:text-5xl xl:text-[3.75rem] font-bold tracking-tight mb-6 leading-[1.06] text-foreground">
          Your mailbox<br class="hidden sm:block">
          deserves
          <span class="relative inline-block text-primary">
            a hug
            <!-- Hand-drawn underline -->
            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 120 8" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M2 5.5 C20 2, 50 7, 80 4 S110 6, 118 5" stroke="hsl(30 92% 53%)" stroke-width="3" stroke-linecap="round"/>
            </svg>
          </span>
        </h1>

        <!-- Subheadline -->
        <p class="text-lg md:text-xl text-muted-foreground mb-10 leading-relaxed max-w-md mx-auto lg:mx-0">
          Real paper. Real connection. Every month, an envelope filled with things that make you pause, reflect, and smile.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start mb-7">
          <a href="#contact" class="group inline-flex items-center justify-center px-8 py-4 rounded-full bg-primary text-white text-base font-semibold shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/35 transition-all duration-200">
            Subscribe — $11/mo
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
          <a href="#whats-inside" class="inline-flex items-center justify-center px-8 py-4 rounded-full border-2 border-foreground/15 text-foreground text-base font-semibold hover:border-foreground/30 hover:bg-foreground/4 transition-all duration-200">
            See What's Inside
          </a>
        </div>

        <!-- Trust line -->
        <div class="flex items-center gap-2 justify-center lg:justify-start text-sm text-muted-foreground">
          <svg class="w-4 h-4 text-primary flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Founding member pricing — locked in forever. Cancel anytime.
        </div>
      </div>

      <!-- Right: YouTube Short Video -->
      <div class="hero-illustration order-1 lg:order-2 flex justify-center lg:justify-end">
        <!-- Decorative ring behind video -->
        <div class="relative">
          <div class="absolute inset-[-20px] rounded-[2rem] border-2 border-dashed border-primary/15 pointer-events-none" aria-hidden="true"></div>
          <div class="absolute inset-[-40px] rounded-[2.5rem] border border-accent/10 pointer-events-none" aria-hidden="true"></div>

          <!-- Polaroid-style frame -->
          <div class="bg-white p-3 pb-8 shadow-2xl shadow-foreground/20 rotate-1 hover:rotate-0 transition-transform duration-500" style="border-radius: 4px;">
            <div class="w-[240px] md:w-[275px] lg:w-[310px] overflow-hidden" style="border-radius: 2px;">
              <div class="aspect-[3/4.2] relative" id="hero-video-wrapper">
                <!-- Thumbnail shown by default -->
                <div id="hero-video-poster" class="absolute inset-0 cursor-pointer group">
                  <img
                    src="https://i.ytimg.com/vi/iGQefR6aLe8/hqdefault.jpg"
                    alt="Watch our story"
                    class="w-full h-full object-cover block"
                  >
                  <!-- Play button: bottom-right, away from face -->
                  <div class="absolute bottom-3 right-3 w-12 h-12 rounded-full bg-primary flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
                    <svg class="w-5 h-5 text-white ml-0.5" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="5,3 19,12 5,21"/>
                    </svg>
                  </div>
                </div>
                <!-- iframe injected on click -->
              </div>
            </div>
          </div>

          <!-- Small accent tag on the polaroid -->
          <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-accent text-white text-[11px] font-bold tracking-wide px-3 py-1 rounded-full shadow-md whitespace-nowrap">
            Watch our story ✉
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
