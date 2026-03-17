<?php
/**
 * How It Works Section - Visual Timeline
 * ============================================
 * Shows the simple, joyful experience of receiving mail
 */
?>
<section id="how-it-works" class="relative py-10 lg:py-14 bg-gradient-to-b from-muted/20 to-background overflow-hidden">
  <!-- Decorative floating elements -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute top-20 left-[10%] w-16 h-16 bg-primary/10 rounded-full blur-2xl animate-[gentle-float_8s_ease-in-out_infinite]"></div>
    <div class="absolute top-40 right-[15%] w-20 h-20 bg-accent/10 rounded-full blur-2xl animate-[gentle-float_10s_ease-in-out_infinite_2s]"></div>
    <div class="absolute bottom-32 left-[20%] w-24 h-24 bg-secondary/10 rounded-full blur-2xl animate-[gentle-float_12s_ease-in-out_infinite_4s]"></div>
  </div>
  
  <div class="max-w-6xl mx-auto px-4 relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-20">
      <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-accent/20 to-secondary/20 border border-accent/30 text-accent text-sm font-bold mb-6">
        <span class="text-xl">✨</span>
        <span>The Experience</span>
      </div>
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">
        Here's What Happens <span class="text-primary">Once a Month</span>
      </h2>
      <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
        When your envelope arrives 👇
      </p>
    </div>

    <!-- Timeline Steps -->
    <div class="relative space-y-12">
      <!-- Step 1 -->
      <div class="timeline-step relative">
        <div class="bg-gradient-to-br from-white to-primary/10 rounded-3xl p-8 md:p-10 border-2 border-primary/30 shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-[1.02]">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Big Emoji Icon -->
            <div class="flex-shrink-0">
              <div class="relative">
                <div class="w-28 h-28 md:w-32 md:h-32 rounded-full bg-gradient-to-br from-primary/20 to-accent/30 flex items-center justify-center">
                  <span class="text-7xl">📬</span>
                </div>
                <!-- Floating hearts -->
                <div class="absolute -top-2 -right-2 animate-[gentle-float_3s_ease-in-out_infinite]">
                  <span class="text-2xl">💕</span>
                </div>
              </div>
            </div>
            
            <!-- Content -->
            <div class="flex-1 text-center md:text-left">
              <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/20 text-primary text-sm font-bold mb-4">
                <span>Step 1</span>
                <span class="text-lg">→</span>
              </div>
              <h3 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Walk to Mailbox
              </h3>
              <p class="text-lg text-muted-foreground leading-relaxed">
                Find something unexpected waiting for you — not a bill, not junk mail, but a genuine surprise.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="timeline-step relative">
        <div class="bg-gradient-to-br from-white to-accent/10 rounded-3xl p-8 md:p-10 border-2 border-accent/30 shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-[1.02]">
          <div class="flex flex-col md:flex-row-reverse items-center gap-8">
            <!-- Big Emoji Icon -->
            <div class="flex-shrink-0">
              <div class="relative">
                <div class="w-28 h-28 md:w-32 md:h-32 rounded-full bg-gradient-to-br from-accent/20 to-secondary/30 flex items-center justify-center">
                  <span class="text-7xl">💌</span>
                </div>
                <!-- Floating sparkles -->
                <div class="absolute -bottom-2 -left-2 animate-[soft-pulse_3s_ease-in-out_infinite_0.5s]">
                  <span class="text-2xl">✨</span>
                </div>
              </div>
            </div>
            
            <!-- Content -->
            <div class="flex-1 text-center md:text-right">
              <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/20 text-accent text-sm font-bold mb-4">
                <span>Step 2</span>
                <span class="text-lg">→</span>
              </div>
              <h3 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Open Envelope
              </h3>
              <p class="text-lg text-muted-foreground leading-relaxed">
                Genuine curiosity unfolds. That feeling of anticipation — what's inside this time?
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="timeline-step relative">
        <div class="bg-gradient-to-br from-white to-secondary/10 rounded-3xl p-8 md:p-10 border-2 border-secondary/30 shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-[1.02]">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Big Emoji Icon -->
            <div class="flex-shrink-0">
              <div class="relative">
                <div class="w-28 h-28 md:w-32 md:h-32 rounded-full bg-gradient-to-br from-secondary/20 to-primary/30 flex items-center justify-center">
                  <span class="text-7xl">📖</span>
                </div>
                <!-- Floating heart -->
                <div class="absolute -top-2 -right-2 animate-[heart-beat_2s_ease-in-out_infinite]">
                  <span class="text-2xl">❤️</span>
                </div>
              </div>
            </div>
            
            <!-- Content -->
            <div class="flex-1 text-center md:text-left">
              <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/20 text-foreground text-sm font-bold mb-4">
                <span>Step 3</span>
                <span class="text-lg">→</span>
              </div>
              <h3 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Read a Story
              </h3>
              <p class="text-lg text-muted-foreground leading-relaxed">
                Feel warmly connected to something real, something human, something that matters.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="timeline-step relative">
        <div class="bg-gradient-to-br from-white to-peach/10 rounded-3xl p-8 md:p-10 border-2 border-peach/30 shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-[1.02]">
          <div class="flex flex-col md:flex-row-reverse items-center gap-8">
            <!-- Big Emoji Icon -->
            <div class="flex-shrink-0">
              <div class="relative">
                <div class="w-28 h-28 md:w-32 md:h-32 rounded-full bg-gradient-to-br from-peach/20 to-accent/30 flex items-center justify-center">
                  <span class="text-7xl">😄</span>
                </div>
                <!-- Floating stars -->
                <div class="absolute -bottom-2 -left-2 animate-[soft-pulse_3s_ease-in-out_infinite_1.5s]">
                  <span class="text-2xl">⭐</span>
                </div>
              </div>
            </div>
            
            <!-- Content -->
            <div class="flex-1 text-center md:text-right">
              <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-peach/20 text-foreground text-sm font-bold mb-4">
                <span>Step 4</span>
                <span class="text-lg">🎉</span>
              </div>
              <h3 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Laugh Out Loud
              </h3>
              <p class="text-lg text-muted-foreground leading-relaxed">
                A genuine laugh that brightens your day. Share it with someone nearby. Spread the joy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Message -->
    <div class="text-center mt-16">
      <div class="inline-block bg-gradient-to-r from-primary/10 via-accent/10 to-secondary/10 rounded-3xl p-8 border-2 border-primary/20">
        <p class="text-2xl md:text-3xl font-bold text-foreground mb-4">
          A reminder that slow, thoughtful, and funny <br class="hidden md:block"/>still has a place in your life. ✨
        </p>
        <p class="text-lg text-muted-foreground">
          No screen required. 💌
        </p>
      </div>
    </div>
  </div>
</section>
