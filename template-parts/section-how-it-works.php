<?php
/**
 * How It Works Section - Visual Timeline
 * ============================================
 * Shows the simple, joyful experience of receiving mail
 */
?>
<section id="how-it-works" class="relative py-20 lg:py-28 bg-background">
  <div class="max-w-5xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <span class="inline-block px-4 py-2 rounded-full bg-accent/10 text-accent text-sm font-semibold mb-4">
        The Experience
      </span>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Here's What Happens <span class="text-primary">Once a Month</span>
      </h2>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
        When your envelope arrives 👇
      </p>
    </div>

    <!-- Timeline Steps -->
    <div class="relative">
      <!-- Connecting line (hidden on mobile) -->
      <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-primary via-accent to-secondary transform -translate-x-1/2"></div>

      <!-- Step 1 -->
      <div class="timeline-step relative mb-16 lg:mb-20">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
          <!-- Content (left on desktop) -->
          <div class="lg:text-right order-2 lg:order-1">
            <div class="inline-block lg:inline px-4 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-3">
              Step 1
            </div>
            <h3 class="text-2xl md:text-3xl font-bold text-foreground mb-4">
              Walk to Mailbox
            </h3>
            <p class="text-lg text-muted-foreground leading-relaxed max-w-md lg:ml-auto">
              Find something unexpected waiting for you — not a bill, not junk mail, but a genuine surprise.
            </p>
          </div>
          
          <!-- Icon (right on desktop) -->
          <div class="order-1 lg:order-2 flex justify-start lg:justify-start">
            <div class="relative">
              <div class="w-20 h-20 lg:w-24 lg:h-24 rounded-3xl bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-xl">
                <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.5C2 7 4 5 6.5 5H18c2.2 0 4 1.8 4 4v8Z"/>
                  <polyline points="15,9 22,9 22,17"/>
                  <path d="M6.5 5C9 5 11 7 11 9.5V17a2 2 0 0 1-2 2v0"/>
                  <line x1="6" y1="10" x2="7" y2="10"/>
                </svg>
              </div>
              <!-- Decorative element -->
              <div class="absolute -top-2 -right-2 w-6 h-6 bg-accent rounded-full animate-[soft-pulse_3s_ease-in-out_infinite]"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="timeline-step relative mb-16 lg:mb-20">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
          <!-- Icon (left on desktop) -->
          <div class="order-1 flex justify-start lg:justify-end">
            <div class="relative">
              <div class="w-20 h-20 lg:w-24 lg:h-24 rounded-3xl bg-gradient-to-br from-accent to-secondary flex items-center justify-center shadow-xl">
                <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
              </div>
              <div class="absolute -bottom-2 -left-2 w-6 h-6 bg-secondary rounded-full animate-[soft-pulse_3s_ease-in-out_infinite_0.5s]"></div>
            </div>
          </div>
          
          <!-- Content (right on desktop) -->
          <div class="order-2">
            <div class="inline-block px-4 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-semibold mb-3">
              Step 2
            </div>
            <h3 class="text-2xl md:text-3xl font-bold text-foreground mb-4">
              Open Envelope
            </h3>
            <p class="text-lg text-muted-foreground leading-relaxed max-w-md">
              Genuine curiosity unfolds. That feeling of anticipation — what's inside this time?
            </p>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="timeline-step relative mb-16 lg:mb-20">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
          <!-- Content (left on desktop) -->
          <div class="lg:text-right order-2 lg:order-1">
            <div class="inline-block lg:inline px-4 py-1.5 rounded-full bg-secondary/10 text-secondary text-sm font-semibold mb-3">
              Step 3
            </div>
            <h3 class="text-2xl md:text-3xl font-bold text-foreground mb-4">
              Read a Story
            </h3>
            <p class="text-lg text-muted-foreground leading-relaxed max-w-md lg:ml-auto">
              Feel warmly connected to something real, something human, something that matters.
            </p>
          </div>
          
          <!-- Icon (right on desktop) -->
          <div class="order-1 lg:order-2 flex justify-start lg:justify-start">
            <div class="relative">
              <div class="w-20 h-20 lg:w-24 lg:h-24 rounded-3xl bg-gradient-to-br from-secondary to-primary flex items-center justify-center shadow-xl">
                <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                  <path d="M8 7h8"/>
                  <path d="M8 11h8"/>
                </svg>
              </div>
              <div class="absolute -top-2 -right-2 w-6 h-6 bg-primary rounded-full animate-[soft-pulse_3s_ease-in-out_infinite_1s]"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="timeline-step relative">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
          <!-- Icon (left on desktop) -->
          <div class="order-1 flex justify-start lg:justify-end">
            <div class="relative">
              <div class="w-20 h-20 lg:w-24 lg:h-24 rounded-3xl bg-gradient-to-br from-primary via-accent to-secondary flex items-center justify-center shadow-xl">
                <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/>
                  <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                  <line x1="9" y1="9" x2="9.01" y2="9"/>
                  <line x1="15" y1="9" x2="15.01" y2="9"/>
                </svg>
              </div>
              <div class="absolute -bottom-2 -left-2 w-6 h-6 bg-accent rounded-full animate-[soft-pulse_3s_ease-in-out_infinite_1.5s]"></div>
            </div>
          </div>
          
          <!-- Content (right on desktop) -->
          <div class="order-2">
            <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-3">
              Step 4
            </div>
            <h3 class="text-2xl md:text-3xl font-bold text-foreground mb-4">
              Laugh Out Loud
            </h3>
            <p class="text-lg text-muted-foreground leading-relaxed max-w-md">
              A genuine laugh that brightens your day. Share it with someone nearby. Spread the joy.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Message -->
    <div class="text-center mt-20 pt-12 border-t border-border/50">
      <p class="text-xl md:text-2xl font-semibold text-foreground mb-4">
        A reminder that slow, thoughtful, and funny still has a place in your life.
      </p>
      <p class="text-muted-foreground">
        No screen required. 💌
      </p>
    </div>
  </div>
</section>
