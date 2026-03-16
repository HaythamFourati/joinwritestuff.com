<?php
/**
 * Services/Practice Areas Section - Clean 2025 Modern Design
 * ============================================
 * Displays a grid of service cards with icons.
 * TODO: Customize the services array below for your project.
 * Icons are from Lucide (https://lucide.dev) - copy SVG code directly.
 */

// TODO: Update these services for your project
$services = [
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    'title' => 'Service One',
    'description' => 'A brief description of your first service. Explain the value and benefits to clients.',
    'url' => '#services'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m16 12-4-4-4 4"/><path d="M12 16V8"/></svg>',
    'title' => 'Service Two',
    'description' => 'A brief description of your second service. Highlight what makes it unique.',
    'url' => '#services'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
    'title' => 'Service Three',
    'description' => 'A brief description of your third service. Focus on client outcomes.',
    'url' => '#services'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'title' => 'Service Four',
    'description' => 'A brief description of your fourth service. Build trust with specifics.',
    'url' => '#services'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>',
    'title' => 'Service Five',
    'description' => 'A brief description of your fifth service. Keep it concise and compelling.',
    'url' => '#services'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
    'title' => 'Service Six',
    'description' => 'A brief description of your sixth service. End with a strong value proposition.',
    'url' => '#services'
  ]
];
?>
<section id="services" class="py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Header - TODO: Update for your project -->
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 lg:gap-6 mb-10 lg:mb-14">
      <div class="max-w-xl">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          What We Offer
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground">
          Our Services
        </h2>
      </div>
      <p class="text-muted-foreground text-[15px] leading-relaxed max-w-md lg:text-right">
        Comprehensive solutions tailored to your needs. We're here to help you succeed.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach ($services as $index => $service): ?>
      <article class="practice-card group relative p-6 rounded-2xl bg-white border border-border/50 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
            <?php echo $service['icon']; ?>
          </div>
          <div class="flex-1 min-w-0">
            <h3 class="text-[17px] font-semibold text-foreground mb-2 group-hover:text-primary transition-colors"><?php echo esc_html($service['title']); ?></h3>
            <p class="text-muted-foreground text-[14px] leading-relaxed"><?php echo esc_html($service['description']); ?></p>
          </div>
        </div>
        <div class="mt-5 pt-4 border-t border-border/50">
          <a href="<?php echo esc_url(home_url($service['url'])); ?>" class="inline-flex items-center text-[13px] text-primary font-medium group-hover:gap-2 transition-all">
            Learn More 
            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
