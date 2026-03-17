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
        <!-- Modern logo mark using primary color -->
        <div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center transition-all duration-300">
          <span class="text-white font-semibold text-sm tracking-tight"><?php echo esc_html(SITE_LOGO_INITIALS); ?></span>
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
        <a href="#contact" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">Contact</a>
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
          <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
            <span class="text-white font-semibold text-xs tracking-tight"><?php echo esc_html(SITE_LOGO_INITIALS); ?></span>
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
          <a href="#contact" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors">Contact</a>
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
