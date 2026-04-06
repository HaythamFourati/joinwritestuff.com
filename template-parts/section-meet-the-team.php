<?php
/**
 * Meet the Team Section
 * ============================================
 * The three people behind The Monthly Detox
 */
?>
<section id="meet-the-team" class="relative py-16 lg:py-24">
  <div class="max-w-5xl mx-auto px-4">

    <!-- Section Header -->
    <div class="text-center mb-14">
      <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">The people behind the envelopes</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Meet the Team
      </h2>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">
        Three people who got tired of doomscrolling and decided to do something about it — with stamps.
      </p>
    </div>

    <!-- Team Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-3xl mx-auto">

      <!-- Garey Simmons -->
      <div class="text-center">
        <div class="w-40 h-40 md:w-48 md:h-48 mx-auto mb-6 rounded-full overflow-hidden border-3 border-primary/15 shadow-lg">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/GareySimmons.webp')); ?>" alt="Garey Simmons" class="w-full h-full object-cover" loading="lazy" width="192" height="192">
        </div>
        <h3 class="text-xl md:text-2xl font-bold text-foreground">Garey Simmons</h3>
      </div>

      <!-- Elaine Williams -->
      <div class="text-center">
        <div class="w-40 h-40 md:w-48 md:h-48 mx-auto mb-6 rounded-full overflow-hidden border-3 border-accent/15 shadow-lg">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/Elaine Williams.webp')); ?>" alt="Elaine Williams" class="w-full h-full object-cover" loading="lazy" width="192" height="192">
        </div>
        <h3 class="text-xl md:text-2xl font-bold text-foreground">Elaine Williams</h3>
      </div>

      <!-- Linda Tighe -->
      <div class="text-center">
        <div class="w-40 h-40 md:w-48 md:h-48 mx-auto mb-6 rounded-full overflow-hidden border-3 border-primary/15 shadow-lg">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/Linda Tighe.webp')); ?>" alt="Linda Tighe" class="w-full h-full object-cover" loading="lazy" width="192" height="192">
        </div>
        <h3 class="text-xl md:text-2xl font-bold text-foreground">Linda Tighe</h3>
      </div>

    </div>
  </div>
</section>
