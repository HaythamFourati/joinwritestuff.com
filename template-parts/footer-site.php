<?php
/**
 * Site Footer - Hug in the Mail
 * ============================================
 * Clean, minimal footer
 */
?>
<footer class="bg-black text-white/90 relative">
  <!-- Decorative accents around footer content -->
  <div class="absolute top-16 left-[18%] opacity-12 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="white"/>
      <circle cx="11" cy="6" r="1.5" fill="white"/>
    </svg>
  </div>
  <div class="absolute top-20 right-[22%] opacity-10 hidden lg:block pointer-events-none">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
      <line x1="6" y1="0" x2="6" y2="12" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="0" y1="6" x2="12" y2="6" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
  </div>
  <div class="absolute bottom-24 left-[14%] opacity-11 hidden lg:block pointer-events-none">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
      <circle cx="3" cy="3" r="1.5" fill="white"/>
      <circle cx="9" cy="7" r="1.5" fill="white"/>
    </svg>
  </div>
  <div class="absolute bottom-20 right-[16%] opacity-9 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="white"/>
      <circle cx="11" cy="8" r="1.5" fill="white"/>
    </svg>
  </div>

  <!-- Main Footer -->
  <div class="max-w-5xl mx-auto px-4 py-14">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">
      <!-- Brand Column -->
      <div class="lg:col-span-4">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-2 mb-5">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="<?php echo esc_attr(SITE_NAME); ?>" class="h-15 w-auto brightness-0 invert -ml-5">
        </a>
        <p class="text-[14px] text-white/50 leading-relaxed mb-6 max-w-xs">
          Bringing back the joy of real mail. One envelope at a time.
        </p>
        <!-- Social Links -->
        <?php if (SITE_SOCIAL_FACEBOOK || SITE_SOCIAL_LINKEDIN || SITE_SOCIAL_TWITTER || SITE_SOCIAL_INSTAGRAM): ?>
        <div class="flex items-center gap-2">
          <?php if (SITE_SOCIAL_FACEBOOK): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_FACEBOOK); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center transition-colors" aria-label="Facebook">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (SITE_SOCIAL_LINKEDIN): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_LINKEDIN); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center transition-colors" aria-label="LinkedIn">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (SITE_SOCIAL_TWITTER): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_TWITTER); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center transition-colors" aria-label="X (Twitter)">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (SITE_SOCIAL_INSTAGRAM): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_INSTAGRAM); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center transition-colors" aria-label="Instagram">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>

      <!-- Quick Links -->
      <nav aria-label="Quick Links" class="lg:col-span-3">
        <h4 class="font-semibold text-[13px] text-white/40 mb-5 tracking-wide uppercase">Explore</h4>
        <ul class="space-y-3">
          <li><a href="#whats-inside" class="text-[14px] text-white/60 hover:text-white transition-colors">What's Inside</a></li>
          <li><a href="#how-it-works" class="text-[14px] text-white/60 hover:text-white transition-colors">How It Works</a></li>
          <li><a href="#who-we-are" class="text-[14px] text-white/60 hover:text-white transition-colors">About Us</a></li>
          <li><a href="<?php echo home_url('/faq'); ?>" class="text-[14px] text-white/60 hover:text-white transition-colors">FAQ</a></li>
          <li><a href="#contact" class="text-[14px] text-white/60 hover:text-white transition-colors">Join</a></li>
        </ul>
      </nav>

      <!-- Contact Info -->
      <div class="lg:col-span-5">
        <h4 class="font-semibold text-[13px] text-white/40 mb-5 tracking-wide uppercase">Get in Touch</h4>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 text-white/40 mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <rect x="2" y="4" width="20" height="16" rx="2"/>
              <path d="M2 7l10 7 10-7"/>
            </svg>
            <div>
              <p class="text-[13px] text-white/40">Email us</p>
              <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="text-[14px] text-white/80 hover:text-white transition-colors break-all"><?php echo esc_html(SITE_EMAIL); ?></a>
            </div>
          </li>
          <li class="pt-2">
            <p class="text-[13px] text-white/40 leading-relaxed">
              Questions? Send us a message and we'll respond as soon as possible.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-white/10">
    <div class="max-w-5xl mx-auto px-4 py-5">
      <div class="flex flex-col md:flex-row justify-between items-center gap-3">
        <p class="text-[13px] text-white/40">
          &copy; <?php echo date('Y'); ?> <?php echo esc_html(SITE_NAME); ?>. All rights reserved.
        </p>
        <p class="text-[12px] text-white/30 text-center md:text-right">
          Bringing warmth back to your mailbox, one envelope at a time.
        </p>
      </div>
    </div>
  </div>
</footer>
