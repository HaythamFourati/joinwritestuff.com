<?php
/**
 * Header Navigation - Hug in the Mail
 * Editorial masthead: centered logo, flanked by 2 actions
 */
?>
<header id="site-header" class="sticky top-0 z-50 w-full" data-scrolled="false">
  <nav id="navbar-root" class="relative z-40 w-full px-4 py-3" style="transition: padding 0.3s ease;">
    <div class="relative z-[60] mx-auto w-full max-w-5xl rounded-xl px-4 md:px-8 py-3">
      <!-- Background overlay — transitions opacity only (GPU-composited) -->
      <div id="navbar-bg" class="absolute inset-0 rounded-xl bg-white/95 backdrop-blur-md opacity-0 pointer-events-none" style="transition: opacity 0.3s ease; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.08);"></div>

      <div class="relative z-10 grid grid-cols-3 items-center">

        <!-- Left: FAQ -->
        <div class="flex justify-start">
          <a href="<?php echo home_url('/faq'); ?>" class="bg-foreground px-4 py-2 md:px-5 md:py-2.5 rounded-lg text-white text-[13px] md:text-sm font-semibold hover:bg-foreground transition-colors duration-200">
            FAQ
          </a>
        </div>

        <!-- Center: Big Logo -->
        <div class="flex justify-center">
          <a href="<?php echo home_url(); ?>" class="block">
            <img id="navbar-logo" src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="<?php echo esc_attr(SITE_NAME); ?>" class="h-20 md:h-32 w-auto" style="transition: height 0.3s ease;">
          </a>
        </div>

        <!-- Right: Join Waiting List -->
        <div class="flex justify-end">
          <a href="<?php echo !empty(STRIPE_WAITLIST_LINK) ? esc_url(STRIPE_WAITLIST_LINK) : '#contact'; ?>" class="px-3 py-2 md:px-5 md:py-2.5 rounded-lg bg-primary text-white text-[12px] md:text-sm font-semibold hover:bg-primary/90 transition-colors duration-200">
            Join Waiting List
          </a>
        </div>

      </div>
    </div>
  </nav>
</header>
