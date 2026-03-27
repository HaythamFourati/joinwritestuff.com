<?php
/**
 * Hero Section - Hug in the Mail
 * ============================================
 * 2-column editorial hero: copy left, envelope illustration right
 */
?>
<section id="hero-section" class="relative overflow-hidden pt-18 pb-16 lg:pt-16 lg:pb-24">
  <!-- Subtle background wash -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-0 right-0 w-[50%] h-full bg-secondary/20 blur-3xl rounded-full -translate-y-1/4 translate-x-1/4"></div>
  </div>
  
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

      <!-- Right: Envelope Illustration -->
      <div class="hero-illustration order-1 lg:order-2 flex justify-center lg:justify-end">
        <div class="relative w-[300px] h-[300px] md:w-[380px] md:h-[380px] lg:w-[440px] lg:h-[440px]">
          
          <!-- Soft background circle -->
          <div class="hero-bg-circle absolute inset-4 rounded-full bg-secondary/40"></div>
          
          <!-- Main SVG illustration -->
          <svg class="relative w-full h-full" viewBox="0 0 460 460" fill="none" xmlns="http://www.w3.org/2000/svg">
            
            <!-- Shadow filter for envelope -->
            <defs>
              <filter id="envelope-shadow" x="-5%" y="-5%" width="110%" height="115%">
                <feDropShadow dx="0" dy="4" stdDeviation="8" flood-color="hsl(20 15% 20%)" flood-opacity="0.08"/>
              </filter>
            </defs>

            <!-- Decorative dots -->
            <g class="hero-dots">
              <circle cx="65" cy="110" r="4" fill="hsl(350 55% 55%)" opacity="0.2"/>
              <circle cx="400" cy="140" r="3" fill="hsl(350 55% 55%)" opacity="0.15"/>
              <circle cx="50" cy="360" r="3" fill="hsl(30 25% 75%)" opacity="0.3"/>
              <circle cx="410" cy="340" r="5" fill="hsl(30 25% 75%)" opacity="0.2"/>
              <circle cx="200" cy="70" r="3" fill="hsl(350 45% 60%)" opacity="0.15"/>
            </g>
            
            <!-- Small floating stamp (top-right) -->
            <g class="hero-stamp" transform="translate(346, 108)">
              <rect x="0" y="0" width="50" height="38" rx="4" fill="hsl(30 25% 92%)" stroke="hsl(30 15% 88%)" stroke-width="1"/>
              <rect x="7" y="7" width="36" height="24" rx="2" fill="hsl(350 55% 55%)" opacity="0.15"/>
              <path d="M13 19 L25 11 L37 19" stroke="hsl(350 55% 55%)" stroke-width="1.5" fill="none" opacity="0.4"/>
            </g>

            <!-- Small star burst (top-left) -->
            <g class="hero-sparkle" transform="translate(96, 172)" opacity="0.25">
              <line x1="0" y1="-10" x2="0" y2="10" stroke="hsl(350 55% 55%)" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="-10" y1="0" x2="10" y2="0" stroke="hsl(350 55% 55%)" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="-7" y1="-7" x2="7" y2="7" stroke="hsl(350 55% 55%)" stroke-width="1" stroke-linecap="round"/>
              <line x1="7" y1="-7" x2="-7" y2="7" stroke="hsl(350 55% 55%)" stroke-width="1" stroke-linecap="round"/>
            </g>

            <!-- === MAIN COMPOSITION: centered at 230,230 === -->

            <!-- Letter tucked into envelope (resting state) -->
            <g class="hero-letter" transform="translate(140, 160)">
              <rect x="0" y="0" width="180" height="130" rx="6" fill="white" stroke="hsl(30 15% 82%)" stroke-width="1.5"/>
              <line x1="24" y1="30" x2="156" y2="30" stroke="hsl(30 15% 78%)" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="24" y1="48" x2="142" y2="48" stroke="hsl(30 15% 82%)" stroke-width="2" stroke-linecap="round"/>
              <line x1="24" y1="64" x2="130" y2="64" stroke="hsl(30 15% 85%)" stroke-width="2" stroke-linecap="round"/>
              <line x1="24" y1="80" x2="110" y2="80" stroke="hsl(30 15% 85%)" stroke-width="2" stroke-linecap="round"/>
              <path d="M36 102 C36 97, 28 94, 28 98 C28 102, 36 110, 36 110 C36 110, 44 102, 44 98 C44 94, 36 97, 36 102Z" fill="hsl(350 55% 55%)" opacity="0.3"/>
            </g>

            <!-- Envelope body centered inside the circle -->
            <g class="hero-envelope" transform="translate(90, 168)" filter="url(#envelope-shadow)">
              <rect x="0" y="0" width="280" height="160" rx="10" fill="white" stroke="hsl(30 15% 82%)" stroke-width="2"/>
              <!-- V-fold lines on envelope face -->
              <path d="M4 4 L140 90 L276 4" stroke="hsl(30 15% 87%)" stroke-width="1.5" fill="none"/>
              <!-- Envelope flap (open, tilted back) -->
              <path class="hero-flap" d="M0 2 L140 -65 L280 2" fill="hsl(30 25% 96%)" stroke="hsl(30 15% 82%)" stroke-width="2" stroke-linejoin="round"/>
              <path class="hero-flap-inner" d="M6 2 L140 -57 L274 2" fill="hsl(30 25% 93%)" opacity="0.8"/>
            </g>

            <!-- Wax seal (on the envelope face, lower-center) -->
            <g class="hero-seal" transform="translate(230, 286)">
              <circle cx="0" cy="0" r="20" fill="hsl(350 55% 55%)"/>
              <circle cx="0" cy="0" r="16" fill="none" stroke="hsl(350 55% 65%)" stroke-width="1"/>
              <path d="M0 -4 C0 -8, -7 -11, -7 -6 C-7 -2, 0 5, 0 5 C0 5, 7 -2, 7 -6 C7 -11, 0 -8, 0 -4Z" fill="white" opacity="0.9"/>
            </g>

            <!-- Small postcard floating (right side) -->
            <g class="hero-postcard" transform="translate(350, 186) rotate(-8)">
              <rect x="0" y="0" width="56" height="42" rx="4" fill="white" stroke="hsl(30 15% 86%)" stroke-width="1"/>
              <line x1="10" y1="14" x2="46" y2="14" stroke="hsl(30 15% 84%)" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="10" y1="24" x2="38" y2="24" stroke="hsl(30 15% 87%)" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="10" y1="33" x2="28" y2="33" stroke="hsl(30 15% 90%)" stroke-width="1" stroke-linecap="round"/>
            </g>

            <!-- Small floating heart (bottom-right) -->
            <g class="hero-heart" transform="translate(372, 304)" opacity="0.3">
              <path d="M0 -3 C0 -7, -6 -9, -6 -5 C-6 -1, 0 5, 0 5 C0 5, 6 -1, 6 -5 C6 -9, 0 -7, 0 -3Z" fill="hsl(350 55% 55%)"/>
            </g>

          </svg>
        </div>
      </div>

    </div>
  </div>
</section>
