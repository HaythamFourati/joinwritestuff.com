<?php
/**
 * Join Section - Founding Membership + Waiting List
 * ============================================
 * Combined pricing cards side by side
 */
?>
<section id="contact" class="relative py-16 lg:py-24">
  <div class="max-w-5xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-14">
      <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">Limited founding membership</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Become one of the first <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> members
      </h2>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">
        We're launching with a small, intimate founding group — just <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> people who believe that joy deserves a stamp.
      </p>
    </div>

    <!-- Pricing Cards - Side by Side -->
    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto mb-14">

      <!-- Card 1: Waiting List ($1) -->
      <div class="bg-white rounded-xl border border-border p-8 md:p-10">
        <p class="text-sm font-semibold text-muted-foreground mb-6">Reserve Your Spot</p>

        <div class="mb-8">
          <div class="flex items-baseline gap-2 mb-2">
            <span class="text-5xl font-bold text-foreground">$1</span>
          </div>
          <p class="text-sm text-muted-foreground">One-time reservation fee, credited to your first month</p>
        </div>

        <ul class="space-y-4 mb-8">
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">Be first in line when we launch</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">$1 credited toward your first month</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">Exclusive early access updates</span>
          </li>
        </ul>

        <a href="<?php echo !empty(STRIPE_WAITLIST_LINK) ? esc_url(STRIPE_WAITLIST_LINK) : '#'; ?>" class="block w-full py-4 rounded-lg bg-foreground text-white text-base font-semibold text-center hover:bg-foreground/90 transition-colors duration-200">
          Join Waiting List for $1
        </a>

        <p class="text-center text-sm text-muted-foreground mt-5 flex items-center justify-center gap-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Secure payment. Cancel anytime.
        </p>
      </div>

      <!-- Card 2: Founding Member ($11/mo) -->
      <div class="bg-white rounded-xl border-2 border-primary p-8 md:p-10 relative">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary text-white text-xs font-semibold px-4 py-1 rounded-full">Most Popular</div>
        <p class="text-sm font-semibold text-primary mb-6">Founding Member</p>

        <div class="mb-8">
          <div class="flex items-baseline gap-2 mb-2">
            <span class="text-5xl font-bold text-foreground"><?php echo esc_html(MONTHLY_PRICE); ?></span>
            <span class="text-lg text-muted-foreground">/month</span>
          </div>
          <p class="text-sm text-muted-foreground">Cancel anytime. Joy guaranteed every month.</p>
        </div>

        <ul class="space-y-4 mb-8">
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[15px]">Monthly envelope delivered to your door</span>
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

        <a href="<?php echo !empty(STRIPE_PAYMENT_LINK) ? esc_url(STRIPE_PAYMENT_LINK) : '#'; ?>" class="block w-full py-4 rounded-lg bg-primary text-white text-base font-semibold text-center hover:bg-primary/90 transition-colors duration-200">
          Join the Founding Members
        </a>

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
      <p class="text-muted-foreground leading-relaxed mb-6">
        Your feedback and enthusiasm will shape every future envelope we send. This is where the story begins — and you get to be part of the first chapter.
      </p>
      <p class="text-muted-foreground">
        Have questions? <a href="<?php echo home_url('/faq'); ?>" class="text-primary hover:underline font-medium">Check our FAQ</a> or reach out at <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="text-primary hover:underline font-medium"><?php echo esc_html(SITE_EMAIL); ?></a>
      </p>
    </div>
  </div>
</section>
