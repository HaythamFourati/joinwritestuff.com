<?php
/**
 * Founding Membership Section - Limited Launch Offer
 * ============================================
 * Pricing, benefits, and primary CTA
 */
?>
<section id="founding-membership" class="relative py-16 lg:py-24 bg-background">
  <div class="max-w-4xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">Limited founding membership</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Become one of the first <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> members
      </h2>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">
        We're launching with a small, intimate founding group — just <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> people who believe that joy deserves a stamp.
      </p>
    </div>

    <!-- Pricing Card -->
    <div class="max-w-md mx-auto mb-12">
      <div class="bg-white rounded-xl border border-border p-8 md:p-10">
        <!-- Badge -->
        <p class="text-sm font-semibold text-primary mb-6">Founding Member</p>

        <!-- Price -->
        <div class="mb-8">
          <div class="flex items-baseline gap-2 mb-2">
            <span class="text-5xl font-bold text-foreground"><?php echo esc_html(MONTHLY_PRICE); ?></span>
            <span class="text-lg text-muted-foreground">/month</span>
          </div>
          <p class="text-sm text-muted-foreground">Cancel anytime. Joy guaranteed every month.</p>
        </div>

        <!-- Benefits List -->
        <ul class="space-y-4 mb-8">
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">Monthly envelope delivered straight to your door</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">Founding member recognition in every issue</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">Direct input on future content and surprises</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">Be first to receive every new edition</span>
          </li>
        </ul>

        <!-- CTA Button -->
        <a href="<?php echo !empty(STRIPE_PAYMENT_LINK) ? esc_url(STRIPE_PAYMENT_LINK) : '#contact'; ?>" class="block w-full py-4 rounded-lg bg-primary text-white text-base font-semibold text-center hover:bg-primary/90 transition-colors duration-200">
          Join the Founding Members
        </a>

        <!-- Trust message -->
        <p class="text-center text-sm text-muted-foreground mt-5 flex items-center justify-center gap-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Secure payment. Cancel anytime.
        </p>
      </div>
    </div>

    <!-- Value Proposition -->
    <div class="text-center max-w-2xl mx-auto">
      <p class="text-lg text-foreground mb-3 font-medium">
        You're not just subscribing. You're helping bring this idea to life.
      </p>
      <p class="text-muted-foreground leading-relaxed">
        Your feedback and enthusiasm will shape every future envelope we send. This is where the story begins — and you get to be part of the first chapter.
      </p>
    </div>
  </div>
</section>
