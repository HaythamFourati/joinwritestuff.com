<?php
/**
 * Hero Section - Komedy & Kindness Mail Club
 * ============================================
 * Warm, feminine design with emotional connection
 */
?>
<section id="hero-section" class="relative overflow-hidden pt-20 pb-12 lg:pt-28 lg:pb-16">
  <!-- Decorative background elements -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-20 right-10 w-64 h-64 bg-secondary/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-10 w-72 h-72 bg-accent/20 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
    
    <!-- Floating decorative hearts -->
    <div class="absolute top-32 left-[15%] animate-[gentle-float_6s_ease-in-out_infinite]">
      <svg class="w-12 h-12 text-accent/40" viewBox="0 0 24 24" fill="currentColor">
        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
      </svg>
    </div>
    
    <div class="absolute top-[45%] right-[12%] animate-[gentle-float_7s_ease-in-out_infinite_1s]">
      <svg class="w-10 h-10 text-primary/30" viewBox="0 0 24 24" fill="currentColor">
        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
      </svg>
    </div>
    
    <div class="absolute bottom-32 left-[20%] animate-[gentle-float_8s_ease-in-out_infinite_2s]">
      <svg class="w-8 h-8 text-secondary/40" viewBox="0 0 24 24" fill="currentColor">
        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
      </svg>
    </div>
    
    <!-- Floating mini envelopes -->
    <div class="absolute top-[25%] right-[20%] animate-[gentle-float_9s_ease-in-out_infinite]">
      <svg class="w-14 h-14 text-primary/25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <rect x="2" y="4" width="20" height="16" rx="2" />
        <path d="M2 7l10 7 10-7" />
      </svg>
    </div>
    
    <div class="absolute bottom-[35%] left-[10%] animate-[gentle-float_7.5s_ease-in-out_infinite_1.5s]">
      <svg class="w-12 h-12 text-accent/20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <rect x="2" y="4" width="20" height="16" rx="2" />
        <path d="M2 7l10 7 10-7" />
      </svg>
    </div>
    
    <!-- Sparkles/stars -->
    <div class="absolute top-[15%] left-[25%] animate-[soft-pulse_4s_ease-in-out_infinite]">
      <svg class="w-6 h-6 text-peach/40" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2l2.4 7.2H22l-6 4.8 2.4 7.2L12 16.8 5.6 21.2 8 14l-6-4.8h7.6L12 2z"/>
      </svg>
    </div>
    
    <div class="absolute top-[60%] right-[8%] animate-[soft-pulse_5s_ease-in-out_infinite_2s]">
      <svg class="w-5 h-5 text-secondary/50" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2l2.4 7.2H22l-6 4.8 2.4 7.2L12 16.8 5.6 21.2 8 14l-6-4.8h7.6L12 2z"/>
      </svg>
    </div>
    
    <div class="absolute bottom-[20%] right-[25%] animate-[soft-pulse_4.5s_ease-in-out_infinite_1s]">
      <svg class="w-4 h-4 text-primary/35" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2l2.4 7.2H22l-6 4.8 2.4 7.2L12 16.8 5.6 21.2 8 14l-6-4.8h7.6L12 2z"/>
      </svg>
    </div>
  </div>
  
  <div class="max-w-7xl mx-auto px-4 relative z-10">
    <div class="text-center">
      <div class="hero-content max-w-6xl mx-auto">
        <!-- Floating envelope decoration (animated by GSAP) - at the top -->
        <div class="relative mb-8 max-w-fit mx-auto">
          <div class="floating-envelope relative">
            <svg class="w-24 h-24 md:w-32 md:h-32 drop-shadow-2xl" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <rect x="10" y="25" width="80" height="50" rx="4" fill="#FFF" stroke="#F4A6A3" stroke-width="2"/>
              <path d="M10 25 L50 55 L90 25" fill="none" stroke="#F4A6A3" stroke-width="2"/>
              <circle cx="75" cy="35" r="8" fill="#E8B4D4"/>
            </svg>
            <!-- Heart decoration on envelope -->
            <div class="absolute -top-2 -right-2 animate-[heart-beat_2s_ease-in-out_infinite]">
              <svg class="w-6 h-6 text-accent drop-shadow-lg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </div>
            
            <!-- Surrounding decorative elements -->
            <div class="absolute -left-12 top-6 animate-[gentle-float_5s_ease-in-out_infinite]">
              <svg class="w-8 h-8 text-primary/40" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </div>
            
            <div class="absolute -right-12 top-8 animate-[gentle-float_6s_ease-in-out_infinite_1s]">
              <svg class="w-6 h-6 text-secondary/50" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </div>
            
            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 animate-[soft-pulse_3s_ease-in-out_infinite]">
              <svg class="w-5 h-5 text-peach/60" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2l2.4 7.2H22l-6 4.8 2.4 7.2L12 16.8 5.6 21.2 8 14l-6-4.8h7.6L12 2z"/>
              </svg>
            </div>
          </div>
        </div>
        
        <!-- Powerful startup-style headline -->
        <h1 class="hero-heading text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold tracking-tight mb-6 leading-[1.05] text-foreground px-4">
          <span class="hero-text-reveal">Your mailbox deserves</span><br>
          <span class="hero-text-reveal">better than</span><br>
          <span class="hero-text-reveal text-primary">bills and junk mail</span>
        </h1>
        
        <!-- Warm welcome tag - moved below headline -->
        <div class="inline-flex items-center mb-10 px-5 py-2.5 rounded-full bg-primary/90 border border-primary">
          <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          <span class="text-[14px] text-white font-bold">Only <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> founding member spots available</span>
        </div>
        
        <!-- Subheadline with emotional hook -->
        <p class="text-xl md:text-2xl text-muted-foreground mb-10 leading-relaxed max-w-3xl mx-auto font-light">
          Real paper. Real connection. <span class="text-foreground font-medium">Every month</span>, we send you an envelope filled with things that make you smile.
        </p>
        
        <!-- Social proof -->
        <div class="flex flex-wrap items-center justify-center gap-8 mb-10">
          <div class="flex items-center gap-3">
            <div class="flex -space-x-3">
              <div class="w-10 h-10 rounded-full bg-gradient-to-br from-secondary to-accent border-2 border-white shadow-md"></div>
              <div class="w-10 h-10 rounded-full bg-gradient-to-br from-accent to-primary border-2 border-white shadow-md"></div>
              <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-secondary border-2 border-white shadow-md"></div>
            </div>
            <div class="text-left">
              <p class="text-sm font-semibold text-foreground">Limited spots</p>
              <p class="text-xs text-muted-foreground">Only <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> available</p>
            </div>
          </div>
          <div class="w-px h-12 bg-border hidden sm:block"></div>
          <div class="text-center sm:text-left">
            <p class="text-3xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent"><?php echo esc_html(MONTHLY_PRICE); ?></p>
            <p class="text-sm text-muted-foreground">per month, cancel anytime</p>
          </div>
        </div>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-5 mb-12 justify-center">
          <a href="<?php echo !empty(STRIPE_PAYMENT_LINK) ? esc_url(STRIPE_PAYMENT_LINK) : '#founding-membership'; ?>" class="cta-pulse-button group inline-flex items-center justify-center px-10 py-5 rounded-2xl bg-gradient-to-r from-primary to-accent text-white text-lg font-bold hover:shadow-2xl hover:shadow-primary/40 transition-all duration-300 hover:-translate-y-1">
            Become a Founding Member
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
          <a href="#whats-inside" class="inline-flex items-center justify-center px-10 py-5 rounded-2xl bg-white border-2 border-border text-foreground text-lg font-bold hover:bg-muted/50 hover:border-primary/50 transition-all duration-300">
            See What's Inside
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
