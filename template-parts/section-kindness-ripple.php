<?php
/**
 * The Kindness Ripple Section
 * ============================================
 * Realistic water-drop ripple effect
 */
?>
<style>
  /* Realistic water ripple — thin rings born small, expand outward, fade */
  @keyframes water-drop {
    0%   { transform: translate(-50%, -50%) scale(0); opacity: 0.2; }
    100% { transform: translate(-50%, -50%) scale(1); opacity: 0; }
  }
  .ripple-surface .ring {
    position: absolute;
    top: 50%; left: 50%;
    border-radius: 50%;
    border: 1px solid hsl(352 72% 38%);
    transform: translate(-50%, -50%) scale(0);
    animation: water-drop 4s cubic-bezier(0.2, 0.6, 0.4, 1) infinite;
  }
  .ripple-surface .ring:nth-child(1) { width: 120px; height: 120px; animation-delay: 0s; }
  .ripple-surface .ring:nth-child(2) { width: 240px; height: 240px; animation-delay: 0.6s; }
  .ripple-surface .ring:nth-child(3) { width: 380px; height: 380px; animation-delay: 1.2s; border-color: hsl(30 92% 53%); }
  .ripple-surface .ring:nth-child(4) { width: 540px; height: 540px; animation-delay: 1.8s; }
  .ripple-surface .ring:nth-child(5) { width: 720px; height: 720px; animation-delay: 2.4s; border-color: hsl(30 92% 53%); }
  .ripple-surface .ring:nth-child(6) { width: 920px; height: 920px; animation-delay: 3.0s; }

  /* Second wave — offset timing for continuous feel */
  .ripple-surface .ring:nth-child(7)  { width: 120px; height: 120px; animation-delay: 2s; }
  .ripple-surface .ring:nth-child(8)  { width: 240px; height: 240px; animation-delay: 2.6s; }
  .ripple-surface .ring:nth-child(9)  { width: 380px; height: 380px; animation-delay: 3.2s; border-color: hsl(30 92% 53%); }
  .ripple-surface .ring:nth-child(10) { width: 540px; height: 540px; animation-delay: 3.8s; }

  /* Drop point pulse */
  @keyframes drop-pulse {
    0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.2; }
    50%      { transform: translate(-50%, -50%) scale(1.4); opacity: 0.05; }
  }
  .drop-point {
    position: absolute;
    top: 50%; left: 50%;
    width: 10px; height: 10px;
    border-radius: 50%;
    background: hsl(352 72% 38%);
    transform: translate(-50%, -50%);
    animation: drop-pulse 2s ease-in-out infinite;
  }

  /* Step dot ripple */
  @keyframes step-ring {
    0%, 100% { box-shadow: 0 0 0 0 hsla(352,72%,38%,0.2); }
    50%      { box-shadow: 0 0 0 10px hsla(352,72%,38%,0); }
  }
  .step-dot { animation: step-ring 3s ease-in-out infinite; }
  .step-dot-2 { animation: step-ring 3s ease-in-out 1s infinite; }
  .step-dot-3 { animation: step-ring 3s ease-in-out 2s infinite; }

  @media (prefers-reduced-motion: reduce) {
    .ripple-surface .ring { animation: none; opacity: 0; }
    .drop-point { animation: none; }
    .step-dot, .step-dot-2, .step-dot-3 { animation: none; box-shadow: none; }
  }
</style>

<section id="kindness-ripple" class="relative py-20 lg:py-28 overflow-hidden">

  <!-- Water surface — ripple rings radiate from center -->
  <div class="ripple-surface absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="drop-point"></div>
  </div>

  <div class="relative z-10 max-w-3xl mx-auto px-4">

    <!-- Header -->
    <div class="text-center mb-14">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-4">
        The Kindness Ripple
      </h2>
      <p class="text-lg text-muted-foreground leading-relaxed max-w-xl mx-auto">
        After you've enjoyed your monthly envelope, we invite you to pass it on. Because kindness grows when it moves.
      </p>
    </div>

    <!-- 3 Steps — vertical journey with thread -->
    <div class="relative max-w-lg mx-auto mb-16">

      <!-- Thread line -->
      <div class="absolute left-6 md:left-7 top-8 bottom-8 w-px pointer-events-none" aria-hidden="true"
           style="background: linear-gradient(to bottom, hsl(352 72% 38% / 0.2), hsl(30 92% 53% / 0.2), hsl(352 72% 38% / 0.2));"></div>

      <!-- Step 1 -->
      <div class="flex items-start gap-5 md:gap-6 mb-12">
        <div class="step-dot flex-shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary/10 flex items-center justify-center relative z-10">
          <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M2 7l10 7 10-7"/>
          </svg>
        </div>
        <div class="pt-2">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-1">You Receive It</h3>
          <p class="text-muted-foreground text-[15px] leading-relaxed">
            A small envelope arrives with a smile inside.
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="flex items-start gap-5 md:gap-6 mb-12">
        <div class="step-dot-2 flex-shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-accent/10 flex items-center justify-center relative z-10">
          <svg class="w-5 h-5 md:w-6 md:h-6 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
          </svg>
        </div>
        <div class="pt-2">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-1">You Read It</h3>
          <p class="text-muted-foreground text-[15px] leading-relaxed">
            You laugh, reflect, and feel a little more connected.
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="flex items-start gap-5 md:gap-6">
        <div class="step-dot-3 flex-shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-full bg-primary/10 flex items-center justify-center relative z-10">
          <svg class="w-5 h-5 md:w-6 md:h-6 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </div>
        <div class="pt-2">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-1">You Pass It On</h3>
          <p class="text-muted-foreground text-[15px] leading-relaxed">
            Leave it on a desk. Slip it into a friend's bag. Send it to someone who needs a smile.
          </p>
        </div>
      </div>

    </div>

    <!-- Closing -->
    <div class="text-center">
      <p class="text-2xl md:text-3xl text-foreground font-bold mb-3">
        One envelope. Many smiles.
      </p>
      <p class="text-muted-foreground text-base">
        Someone else gets the joy — and the ripple keeps going.
      </p>
    </div>

  </div>
</section>
