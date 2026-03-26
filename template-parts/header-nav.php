<?php
/**
 * Header Navigation - Komedy & Kindness Mail Club
 * Warm, friendly navigation with CTA focus
 */
?>
<header id="site-header" class="sticky top-0 z-50 w-full pt-4">
  <nav id="navbar-root" class="relative z-40 w-full px-4">
    <div class="relative z-[60] mx-auto hidden w-full max-w-6xl flex-row items-center justify-between rounded-2xl bg-white/80 backdrop-blur-md border border-primary/10 px-6 py-3 lg:flex transition-all duration-500 ease-out shadow-sm">
      <!-- Logo -->
      <a href="<?php echo home_url(); ?>" class="relative z-20 flex items-center gap-3">
        <!-- Creative logo: Envelope with heart hug -->
        <div class="w-9 h-9 flex items-center justify-center transition-all duration-300">
          <svg class="w-9 h-9" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Envelope -->
            <rect x="6" y="12" width="28" height="20" rx="2" class="fill-primary" opacity="0.9"/>
            <path d="M6 14 L20 24 L34 14" class="stroke-white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <!-- Heart on top -->
            <path d="M20 10 C20 10, 17 6, 14 6 C11 6, 9 8, 9 10.5 C9 13, 11 15, 20 20 C29 15, 31 13, 31 10.5 C31 8, 29 6, 26 6 C23 6, 20 10, 20 10 Z" class="fill-accent" opacity="0.95"/>
          </svg>
        </div>
        <div class="flex flex-col">
          <span class="font-semibold text-[15px] leading-tight text-foreground tracking-tight transition-colors duration-300"><?php echo esc_html(SITE_NAME); ?></span>
          <?php if (SITE_TAGLINE): ?>
          <span class="text-[11px] leading-tight text-muted-foreground tracking-wide uppercase transition-colors duration-300"><?php echo esc_html(SITE_TAGLINE); ?></span>
          <?php endif; ?>
        </div>
      </a>

      <!-- Navigation Items -->
      <div class="flex flex-row items-center gap-1">
        <a href="<?php echo home_url('/'); ?>" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">Home</a>
        <a href="#whats-inside" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">What's Inside</a>
        <a href="#who-we-are" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">About</a>
        <a href="<?php echo home_url('/faq'); ?>" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">FAQ</a>
        <a href="#contact" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">Join</a>
      </div>

      <!-- Actions -->
      <div class="relative z-20 flex items-center gap-3">
        <a href="<?php echo !empty(STRIPE_PAYMENT_LINK) ? esc_url(STRIPE_PAYMENT_LINK) : '#founding-membership'; ?>" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-primary to-accent text-white text-[13px] font-semibold hover:shadow-lg hover:shadow-primary/30 transition-all duration-200">
          Join Now
        </a>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-nav-root" class="relative z-50 mx-auto flex w-full flex-col bg-white/80 backdrop-blur-md rounded-2xl border border-primary/10 px-4 py-3 lg:hidden">
      <div class="flex w-full flex-row items-center justify-between">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-2.5">
          <!-- Creative logo: Envelope with heart hug (mobile) -->
          <div class="w-8 h-8 flex items-center justify-center">
            <svg class="w-8 h-8" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <!-- Envelope -->
              <rect x="6" y="12" width="28" height="20" rx="2" class="fill-primary" opacity="0.9"/>
              <path d="M6 14 L20 24 L34 14" class="stroke-white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <!-- Heart on top -->
              <path d="M20 10 C20 10, 17 6, 14 6 C11 6, 9 8, 9 10.5 C9 13, 11 15, 20 20 C29 15, 31 13, 31 10.5 C31 8, 29 6, 26 6 C23 6, 20 10, 20 10 Z" class="fill-accent" opacity="0.95"/>
            </svg>
          </div>
          <span class="font-semibold text-sm text-foreground tracking-tight"><?php echo esc_html(SITE_NAME); ?></span>
        </a>
        <button id="mobile-menu-toggle" class="w-9 h-9 flex items-center justify-center rounded-lg hover:bg-primary/5 transition-colors" aria-label="Toggle menu">
          <svg id="mobile-menu-icon-open" class="w-5 h-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg id="mobile-menu-icon-close" class="w-5 h-5 text-foreground hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
      
      <!-- Mobile Menu Panel -->
      <div id="mobile-menu-panel" class="hidden w-full pt-4 pb-2">
        <div class="flex flex-col gap-1">
          <a href="<?php echo home_url('/'); ?>" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors">Home</a>
          <a href="#whats-inside" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors">What's Inside</a>
          <a href="#who-we-are" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors">About</a>
          <a href="<?php echo home_url('/faq'); ?>" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors">FAQ</a>
          <a href="#contact" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors">Join</a>
        </div>
        
        <!-- Mobile CTA -->
        <div class="mt-4 pt-4 border-t border-border/50">
          <a href="<?php echo !empty(STRIPE_PAYMENT_LINK) ? esc_url(STRIPE_PAYMENT_LINK) : '#founding-membership'; ?>" class="flex items-center justify-center gap-2 px-4 py-3 text-[14px] text-white font-semibold rounded-xl bg-gradient-to-r from-primary to-accent hover:shadow-lg transition-all">
            Join Founding Members
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>
