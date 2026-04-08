<?php
/**
 * Hero Section - Hug in the Mail
 * ============================================
 * 2-column editorial hero: copy left, envelope illustration right
 */
?>
<section id="hero-section" class="relative overflow-hidden pt-10 pb-12 lg:pt-8 lg:pb-16">
  
  <div class="max-w-6xl mx-auto px-4 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-12 items-center">
      
      <!-- Left: Copy -->
      <div class="hero-content order-2 lg:order-1 text-center lg:text-left">
        <!-- Small label -->
        <p class="text-sm font-medium text-muted-foreground mb-8 tracking-wide uppercase">A monthly envelope of warmth</p>
        
        <!-- Headline -->
        <h1 class="hero-heading text-4xl md:text-5xl xl:text-6xl font-bold tracking-tight mb-8 leading-[1.08] text-foreground">
          Your mailbox<br class="hidden sm:block">
          deserves
          <span class="text-primary">better</span>
        </h1>
        
        <!-- Subheadline -->
        <p class="text-lg text-muted-foreground mb-10 leading-relaxed max-w-md mx-auto lg:mx-0">
          Real paper. Real connection. Every month, an envelope filled with things that make you pause, reflect, and smile.
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start mb-8">
          <a href="<?php echo !empty(STRIPE_WAITLIST_LINK) ? esc_url(STRIPE_WAITLIST_LINK) : '#contact'; ?>" class="group inline-flex items-center justify-center px-7 py-3.5 rounded-lg bg-primary text-white text-base font-semibold hover:bg-primary/90 transition-colors duration-200">
            Join Waiting List — $1
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
          <a href="#whats-inside" class="inline-flex items-center justify-center px-7 py-3.5 rounded-lg border border-border text-foreground text-base font-semibold hover:bg-muted transition-colors duration-200">
            See What's Inside
          </a>
        </div>

        <!-- Trust line -->
        <p class="text-sm text-muted-foreground">
          $1 reserves your spot — credited to your first month. Cancel anytime.
        </p>
      </div>

      <!-- Right: YouTube Short Video -->
      <div class="hero-illustration order-1 lg:order-2 flex justify-center lg:justify-center">
        <div class="relative w-[260px] md:w-[300px] lg:w-[340px] rounded-2xl overflow-hidden shadow-2xl shadow-foreground/10">
          <div class="aspect-[3/4.2]">
            <iframe
              src="https://www.youtube.com/embed/iGQefR6aLe8?autoplay=0&loop=1&playlist=iGQefR6aLe8&controls=1&showinfo=0&rel=0&modestbranding=1&playsinline=1"
              title="The Monthly Detox — A hug in the mail"
              class="w-full h-full"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
