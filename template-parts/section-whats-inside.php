<?php
/**
 * What's Inside Section - Monthly Envelope Contents
 * ============================================
 * Showcases the items included in each monthly delivery
 */
?>
<section id="whats-inside" class="relative py-16 lg:py-24 bg-background">
  <!-- Decorative accents scattered around content -->
  <!-- Near header -->
  <div class="absolute top-[8rem] left-[22%] opacity-20 hidden lg:block pointer-events-none">
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
      <circle cx="4" cy="4" r="2.5" fill="hsl(350 55% 55%)"/>
      <circle cx="14" cy="7" r="2" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>
  <div class="absolute top-[6rem] right-[25%] opacity-18 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <line x1="8" y1="0" x2="8" y2="16" stroke="hsl(350 55% 55%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="0" y1="8" x2="16" y2="8" stroke="hsl(350 55% 55%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="2" y1="2" x2="14" y2="14" stroke="hsl(350 55% 55%)" stroke-width="1" stroke-linecap="round"/>
      <line x1="14" y1="2" x2="2" y2="14" stroke="hsl(350 55% 55%)" stroke-width="1" stroke-linecap="round"/>
    </svg>
  </div>
  <!-- Around card grid -->
  <div class="absolute top-[15rem] left-[8%] opacity-16 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(350 45% 60%)"/>
      <circle cx="11" cy="7" r="1.5" fill="hsl(350 55% 55%)"/>
    </svg>
  </div>
  <div class="absolute top-[17rem] right-[6%] opacity-15 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(350 55% 55%)"/>
      <circle cx="13" cy="6" r="1.5" fill="hsl(30 25% 75%)"/>
      <circle cx="7" cy="12" r="1.5" fill="hsl(350 45% 60%)"/>
    </svg>
  </div>
  <div class="absolute top-[24rem] left-[28%] opacity-14 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <line x1="7" y1="0" x2="7" y2="14" stroke="hsl(350 55% 55%)" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="0" y1="7" x2="14" y2="7" stroke="hsl(350 55% 55%)" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
  </div>
  <div class="absolute bottom-[10rem] right-[20%] opacity-16 hidden lg:block pointer-events-none">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(350 55% 55%)"/>
      <circle cx="13" cy="8" r="1.5" fill="hsl(30 25% 75%)"/>
    </svg>
  </div>
  <div class="absolute bottom-[6rem] left-[12%] opacity-12 hidden lg:block pointer-events-none">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
      <circle cx="3" cy="3" r="2" fill="hsl(350 45% 60%)"/>
      <circle cx="11" cy="6" r="1.5" fill="hsl(350 55% 55%)"/>
    </svg>
  </div>

  <div class="max-w-5xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-14 max-w-2xl mx-auto relative">
      <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">What arrives in your mailbox</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Each month, a carefully curated envelope
      </h2>
      <p class="text-lg text-muted-foreground leading-relaxed">
        Light as a smile, and packed with everything your soul needs in the moment.
      </p>
    </div>

    <!-- Content Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
      
      <!-- Item 1: Heartfelt Letter -->
      <div class="whats-inside-card group bg-white rounded-xl p-8 border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M2 7l10 7 10-7"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Heartfelt Letter</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          A personal note about life, family, and the beautifully imperfect experience of being human.
        </p>
      </div>

      <!-- Item 2: Reflection -->
      <div class="whats-inside-card group bg-white rounded-xl p-8 border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Thoughtful Reflection</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          A philosophical insight or gentle wisdom to carry with you over time.
        </p>
      </div>

      <!-- Item 3: Sticker/Surprise -->
      <div class="whats-inside-card group bg-white rounded-xl p-8 border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 12v10H4V12"/>
            <path d="M2 7h20v5H2z"/>
            <path d="M12 22V7"/>
            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/>
            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Sticker or Surprise</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          A small tactile delight — because grown-ups deserve fun surprises too. Remember Cracker Jacks?
        </p>
      </div>

      <!-- Item 4: Pay It Forward Postcard -->
      <div class="whats-inside-card group bg-white rounded-xl p-8 border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-300 lg:col-start-1">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Pay It Forward Postcard</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          A new postcard each month that you can use to spread kindness to someone else.
        </p>
      </div>

      <!-- Item 5: Meditation -->
      <div class="whats-inside-card group bg-white rounded-xl p-8 border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="mb-5 w-12 h-12 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Guided Meditation</h3>
        <p class="text-muted-foreground leading-relaxed text-[15px]">
          Joyful divinity in less than 5 minutes. A moment of peace in your busy day.
        </p>
      </div>

    </div>

    <!-- Bottom Quote -->
    <div class="text-center mt-16 max-w-2xl mx-auto">
      <blockquote class="text-xl md:text-2xl text-foreground font-medium italic leading-relaxed">
        "It's not a subscription. It's not content. It's a tiny pause in a busy world."
      </blockquote>
      <p class="text-base text-muted-foreground mt-4">
        No screen required.
      </p>
    </div>
  </div>
</section>
