<?php
/**
 * Who We Are Section - Values & Mission
 * ============================================
 * Showcases the core values behind the mail club
 */
?>
<section id="who-we-are" class="relative py-16 lg:py-24">
  <!-- Decorative accents densely around value cards -->
  <!-- Near header -->
  <div class="absolute top-[6rem] left-[24%] opacity-18 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
      <circle cx="13" cy="7" r="1.5" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>
  <div class="absolute top-[8rem] right-[22%] opacity-16 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <line x1="7" y1="0" x2="7" y2="14" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="0" y1="7" x2="14" y2="7" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
  </div>
  <!-- Around value cards -->
  <div class="absolute top-[13rem] left-[7%] opacity-16 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <line x1="8" y1="0" x2="8" y2="16" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="0" y1="8" x2="16" y2="8" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="2" y1="2" x2="14" y2="14" stroke="hsl(352 72% 38%)" stroke-width="1" stroke-linecap="round"/>
      <line x1="14" y1="2" x2="2" y2="14" stroke="hsl(352 72% 38%)" stroke-width="1" stroke-linecap="round"/>
    </svg>
  </div>
  <div class="absolute top-[16rem] right-[9%] opacity-14 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
      <circle cx="11" cy="7" r="1.5" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>
  <div class="absolute top-[21rem] left-[26%] opacity-15 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(30 92% 53%)"/>
      <circle cx="11" cy="8" r="1.5" fill="hsl(352 72% 38%)"/>
    </svg>
  </div>
  <div class="absolute bottom-[12rem] right-[18%] opacity-16 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
      <circle cx="13" cy="6" r="1.5" fill="hsl(30 25% 75%)"/>
      <circle cx="7" cy="12" r="1.5" fill="hsl(30 92% 53%)"/>
    </svg>
  </div>
  <div class="absolute bottom-[8rem] left-[14%] opacity-12 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
      <circle cx="11" cy="7" r="1.5" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>

  <div class="max-w-5xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-14">
      <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">Our mission</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Who is behind this
      </h2>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
        We believe the world needs more real moments — and fewer notifications.
      </p>

      <!-- Team Photos -->
      <div class="flex justify-center items-center gap-8 md:gap-14 mt-10">
        <div class="text-center">
          <div class="w-32 h-32 md:w-44 md:h-44 mx-auto mb-4 rounded-full overflow-hidden border-3 border-accent/15 shadow-lg">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/Elaine Williams.webp')); ?>" alt="Elaine Williams" class="w-full h-full object-cover" loading="lazy" width="176" height="176">
          </div>
          <p class="text-base md:text-lg font-bold text-foreground">Elaine</p>
        </div>
        <div class="text-center">
          <div class="w-32 h-32 md:w-44 md:h-44 mx-auto mb-4 rounded-full overflow-hidden border-3 border-primary/15 shadow-lg">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/GareySimmons.webp')); ?>" alt="Garey Simmons" class="w-full h-full object-cover" loading="lazy" width="176" height="176">
          </div>
          <p class="text-base md:text-lg font-bold text-foreground">Garey</p>
        </div>
        <div class="text-center">
          <div class="w-32 h-32 md:w-44 md:h-44 mx-auto mb-4 rounded-full overflow-hidden border-3 border-primary/15 shadow-lg">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/Linda Tighe.webp')); ?>" alt="Linda Tighe" class="w-full h-full object-cover" loading="lazy" width="176" height="176">
          </div>
          <p class="text-base md:text-lg font-bold text-foreground">Linda</p>
        </div>
      </div>
    </div>

    <!-- Values Grid -->
    <div class="grid md:grid-cols-3 gap-6 mb-14">
      
      <!-- Value 1: Humanity -->
      <div class="value-card p-10 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">We believe in humanity</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          Behind every screen is a real person craving real connection. We're here for the human stuff — the messy, beautiful parts.
        </p>
      </div>

      <!-- Value 2: Connection -->
      <div class="value-card p-10 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">We champion connection</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          Real relationships are built through consistent, thoughtful gestures. A letter a month is a small act with a surprisingly big impact.
        </p>
      </div>

      <!-- Value 3: Warmth -->
      <div class="value-card p-10 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">We bring back warmth</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          We're on a mission to make everyday life feel a little warmer, a little kinder, and a little more worth celebrating.
        </p>
      </div>

    </div>

    <!-- Bottom CTA -->
    <div class="text-center max-w-2xl mx-auto">
      <p class="text-xl md:text-2xl text-foreground font-medium mb-3 leading-relaxed">
        Join us in bringing back the joy of real mail.
      </p>
      <p class="text-muted-foreground mb-8">
        One envelope at a time. One smile at a time. One connection at a time.
      </p>
      <a href="#contact" class="inline-flex items-center gap-2 px-8 py-4 rounded-lg bg-primary text-white text-base font-semibold hover:bg-primary/90 transition-colors duration-200">
        Become a Founding Member
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14"/>
          <path d="m12 5 7 7-7 7"/>
        </svg>
      </a>
    </div>
  </div>
</section>
