<?php
/**
 * What's Inside Section - Monthly Envelope Contents
 * ============================================
 * Showcases the 6 items included in each monthly delivery
 */
?>
<section id="whats-inside" class="relative py-20 lg:py-28 bg-gradient-to-b from-background to-muted/30">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-16 max-w-2xl mx-auto">
      <span class="inline-block px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-4">
        What Arrives in Your Mailbox
      </span>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Each Month, a Carefully <span class="text-primary">Curated Envelope</span>
      </h2>
      <p class="text-lg text-muted-foreground leading-relaxed">
        Light as a smile, and packed with everything your soul needs in the moment.
      </p>
    </div>

    <!-- Content Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
      
      <!-- Item 1: Jokes -->
      <div class="whats-inside-card group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border/50 hover:border-primary/30 hover:-translate-y-2">
        <div class="absolute top-6 right-6 w-12 h-12 bg-gradient-to-br from-primary/20 to-accent/20 rounded-2xl flex items-center justify-center">
          <span class="text-2xl">😄</span>
        </div>
        <div class="mb-4">
          <svg class="w-12 h-12 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/>
            <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
            <line x1="9" y1="9" x2="9.01" y2="9"/>
            <line x1="15" y1="9" x2="15.01" y2="9"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">Some Jokes</h3>
        <p class="text-muted-foreground leading-relaxed">
          Lighthearted comedy that earns a genuine laugh — the kind you share out loud.
        </p>
      </div>

      <!-- Item 2: Heartfelt Letter -->
      <div class="whats-inside-card group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border/50 hover:border-accent/30 hover:-translate-y-2">
        <div class="absolute top-6 right-6 w-12 h-12 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-2xl flex items-center justify-center">
          <span class="text-2xl">💌</span>
        </div>
        <div class="mb-4">
          <svg class="w-12 h-12 text-accent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Vulnerable Heartfelt Letter</h3>
        <p class="text-muted-foreground leading-relaxed">
          A personal note about life, family, and the beautifully imperfect experience of being human.
        </p>
      </div>

      <!-- Item 3: Reflection -->
      <div class="whats-inside-card group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border/50 hover:border-secondary/30 hover:-translate-y-2">
        <div class="absolute top-6 right-6 w-12 h-12 bg-gradient-to-br from-secondary/20 to-primary/20 rounded-2xl flex items-center justify-center">
          <span class="text-2xl">🌿</span>
        </div>
        <div class="mb-4">
          <svg class="w-12 h-12 text-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2v20M2 12h20"/>
            <circle cx="12" cy="12" r="4"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Short Reflection</h3>
        <p class="text-muted-foreground leading-relaxed">
          A philosophical insight or gentle wisdom to carry with you over time.
        </p>
      </div>

      <!-- Item 4: Sticker/Surprise -->
      <div class="whats-inside-card group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border/50 hover:border-primary/30 hover:-translate-y-2">
        <div class="absolute top-6 right-6 w-12 h-12 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-2xl flex items-center justify-center">
          <span class="text-2xl">✨</span>
        </div>
        <div class="mb-4">
          <svg class="w-12 h-12 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 12v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6"/>
            <path d="M2 7h20v5H2z"/>
            <path d="M12 22V7"/>
            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/>
            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Sticker or Surprise</h3>
        <p class="text-muted-foreground leading-relaxed">
          A small tactile delight — because grown-ups deserve fun surprises too. Remember Cracker Jacks?
        </p>
      </div>

      <!-- Item 5: Pay It Forward Postcard -->
      <div class="whats-inside-card group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border/50 hover:border-accent/30 hover:-translate-y-2">
        <div class="absolute top-6 right-6 w-12 h-12 bg-gradient-to-br from-accent/20 to-primary/20 rounded-2xl flex items-center justify-center">
          <span class="text-2xl">📮</span>
        </div>
        <div class="mb-4">
          <svg class="w-12 h-12 text-accent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M22 7l-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Pay It Forward Postcard</h3>
        <p class="text-muted-foreground leading-relaxed">
          A new postcard each month that you can use to spread kindness to someone else.
        </p>
      </div>

      <!-- Item 6: Meditation -->
      <div class="whats-inside-card group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-border/50 hover:border-secondary/30 hover:-translate-y-2">
        <div class="absolute top-6 right-6 w-12 h-12 bg-gradient-to-br from-secondary/20 to-accent/20 rounded-2xl flex items-center justify-center">
          <span class="text-2xl">🧘</span>
        </div>
        <div class="mb-4">
          <svg class="w-12 h-12 text-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3">A Short Meditation</h3>
        <p class="text-muted-foreground leading-relaxed">
          Joyful divinity in less than 5 minutes. A moment of peace in your busy day.
        </p>
      </div>

    </div>

    <!-- Bottom CTA -->
    <div class="text-center mt-16">
      <p class="text-lg text-muted-foreground mb-6 italic">
        "It's not a subscription. It's not content. It's a tiny pause in a busy world."
      </p>
      <p class="text-sm text-muted-foreground">
        No screen required. 📭
      </p>
    </div>
  </div>
</section>
