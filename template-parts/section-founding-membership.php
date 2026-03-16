<?php
/**
 * Founding Membership Section - Limited Launch Offer
 * ============================================
 * Pricing, benefits, and primary CTA
 */
?>
<section id="founding-membership" class="relative py-20 lg:py-28 bg-gradient-to-br from-primary/5 via-accent/5 to-secondary/5 overflow-hidden">
  <!-- Decorative background -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>
  </div>

  <div class="max-w-4xl mx-auto px-4 relative z-10">
    <!-- Limited Badge -->
    <div class="text-center mb-8">
      <div class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gradient-to-r from-primary to-accent text-white font-semibold shadow-lg">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
        </svg>
        <span>Limited Founding Membership</span>
      </div>
    </div>

    <!-- Main Heading -->
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Become One of the <span class="text-primary">First <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> Members</span>
      </h2>
      <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">
        We're launching with a small, intimate founding group — just <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> people who believe that joy deserves a stamp.
      </p>
    </div>

    <!-- Pricing Card -->
    <div class="max-w-lg mx-auto mb-12">
      <div class="relative bg-white rounded-3xl shadow-2xl border-2 border-primary/20 p-8 md:p-10">
        <!-- Founding Member Badge -->
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
          <span class="inline-block px-6 py-2 rounded-full bg-gradient-to-r from-accent to-secondary text-white text-sm font-bold shadow-lg">
            Founding Member
          </span>
        </div>

        <!-- Price -->
        <div class="text-center mb-8 mt-4">
          <div class="flex items-baseline justify-center gap-2 mb-2">
            <span class="text-5xl md:text-6xl font-bold text-foreground"><?php echo esc_html(MONTHLY_PRICE); ?></span>
            <span class="text-xl text-muted-foreground">/month</span>
          </div>
          <p class="text-sm text-muted-foreground">Cancel anytime. Joy guaranteed every month. 😊</p>
        </div>

        <!-- Benefits List -->
        <ul class="space-y-4 mb-8">
          <li class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-foreground leading-relaxed">Monthly envelope delivered straight to your door</span>
          </li>
          <li class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-accent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-foreground leading-relaxed">Founding member recognition in every issue</span>
          </li>
          <li class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-secondary/10 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-secondary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-foreground leading-relaxed">Direct input on future content and surprises</span>
          </li>
          <li class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-foreground leading-relaxed">Be first to receive every new edition</span>
          </li>
        </ul>

        <!-- CTA Button -->
        <a href="<?php echo !empty(STRIPE_PAYMENT_LINK) ? esc_url(STRIPE_PAYMENT_LINK) : '#contact'; ?>" class="cta-pulse-button block w-full py-5 rounded-2xl bg-gradient-to-r from-primary to-accent text-white text-lg font-bold text-center hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
          <span class="flex items-center justify-center gap-2">
            Join the Founding Members
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14"/>
              <path d="m12 5 7 7-7 7"/>
            </svg>
          </span>
        </a>

        <!-- Trust message -->
        <p class="text-center text-sm text-muted-foreground mt-6">
          <svg class="w-4 h-4 inline mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Secure payment. Cancel anytime.
        </p>
      </div>
    </div>

    <!-- Value Proposition -->
    <div class="text-center max-w-2xl mx-auto">
      <p class="text-lg text-foreground mb-4 font-medium">
        You're not just subscribing. You're helping bring this idea to life.
      </p>
      <p class="text-muted-foreground leading-relaxed">
        Your feedback, your laughter, and your enthusiasm will shape every future envelope we send. This is where the story begins — and you get to be part of the first chapter.
      </p>
    </div>
  </div>
</section>
