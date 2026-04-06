<?php
/**
 * Header Navigation - Hug in the Mail
 * Clean, editorial navigation
 */
?>
<header id="site-header" class="sticky top-0 z-50 w-full pt-4">
  <nav id="navbar-root" class="relative z-40 w-full px-4">
    <div class="relative z-[60] mx-auto hidden w-full max-w-5xl flex-row items-center justify-between rounded-xl bg-white/90 backdrop-blur-md border border-border/60 px-6 py-3 lg:flex transition-all duration-300 shadow-sm">
      <!-- Logo -->
      <a href="<?php echo home_url(); ?>" class="relative z-20 flex items-center gap-2">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="<?php echo esc_attr(SITE_NAME); ?>" class="h-20 w-auto -ml-5">
      </a>

      <!-- Navigation Items -->
      <div class="flex flex-row items-center gap-1">
        <a href="<?php echo home_url('/'); ?>" class="px-3.5 py-2 text-[13px] text-muted-foreground hover:text-foreground font-medium transition-colors duration-200">Home</a>
        <a href="#whats-inside" class="px-3.5 py-2 text-[13px] text-muted-foreground hover:text-foreground font-medium transition-colors duration-200">What's Inside</a>
        <a href="#who-we-are" class="px-3.5 py-2 text-[13px] text-muted-foreground hover:text-foreground font-medium transition-colors duration-200">About</a>
        <a href="<?php echo home_url('/faq'); ?>" class="px-3.5 py-2 text-[13px] text-muted-foreground hover:text-foreground font-medium transition-colors duration-200">FAQ</a>
        <a href="#contact" class="px-3.5 py-2 text-[13px] text-muted-foreground hover:text-foreground font-medium transition-colors duration-200">Join</a>
      </div>

      <!-- Actions -->
      <div class="relative z-20 flex items-center gap-3">
        <a href="<?php echo !empty(STRIPE_WAITLIST_LINK) ? esc_url(STRIPE_WAITLIST_LINK) : '#contact'; ?>" class="px-5 py-2 rounded-lg bg-primary text-white text-[13px] font-semibold hover:bg-primary/90 transition-colors duration-200">
          Join Waiting List
        </a>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-nav-root" class="relative z-50 mx-auto flex w-full flex-col bg-white/90 backdrop-blur-md rounded-xl border border-border/60 px-4 py-3 lg:hidden">
      <div class="flex w-full flex-row items-center justify-between">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-2">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="<?php echo esc_attr(SITE_NAME); ?>" class="h-18 w-auto -ml-3">
        </a>
        <button id="mobile-menu-toggle" class="w-9 h-9 flex items-center justify-center rounded-lg hover:bg-muted transition-colors" aria-label="Toggle menu">
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
          <a href="<?php echo home_url('/'); ?>" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-muted transition-colors">Home</a>
          <a href="#whats-inside" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-muted transition-colors">What's Inside</a>
          <a href="#who-we-are" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-muted transition-colors">About</a>
          <a href="<?php echo home_url('/faq'); ?>" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-muted transition-colors">FAQ</a>
          <a href="#contact" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-muted transition-colors">Join</a>
        </div>
        
        <!-- Mobile CTA -->
        <div class="mt-4 pt-4 border-t border-border/50">
          <a href="<?php echo !empty(STRIPE_WAITLIST_LINK) ? esc_url(STRIPE_WAITLIST_LINK) : '#contact'; ?>" class="flex items-center justify-center px-4 py-3 text-[14px] text-white font-semibold rounded-lg bg-primary hover:bg-primary/90 transition-colors">
            Join Waiting List
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>
