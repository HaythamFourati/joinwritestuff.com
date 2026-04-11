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

    <!-- Pricing Cards -->
    <div class="grid md:grid-cols-2 gap-6 max-w-3xl mx-auto mb-14">

      <!-- Card 1: Regular Subscription -->
      <div class="p-8 md:p-10 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="mb-2 w-10 h-10 bg-primary/8 rounded-lg flex items-center justify-center">
          <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M2 7l10 7 10-7"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-1">Hug in the Mail</h3>
        <p class="text-sm text-muted-foreground mb-6">Monthly subscription for yourself</p>

        <div class="mb-6">
          <div class="flex items-baseline gap-1 mb-1">
            <span class="text-4xl font-bold text-foreground">$11</span>
            <span class="text-sm text-muted-foreground">/ month</span>
          </div>
          <p class="text-xs text-muted-foreground">Founding member price — locked in forever</p>
        </div>

        <ul class="space-y-3 mb-8">
          <li class="flex items-start gap-2.5">
            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[14px]">Monthly envelope of warmth</span>
          </li>
          <li class="flex items-start gap-2.5">
            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[14px]">Founding member pricing forever</span>
          </li>
          <li class="flex items-start gap-2.5">
            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[14px]">Cancel anytime</span>
          </li>
        </ul>

        <a href="https://buy.stripe.com/fZudR8gqP95u6AxcJnbwk02" class="block w-full py-3.5 rounded-lg bg-primary text-white text-[15px] font-semibold text-center hover:bg-primary/90 transition-colors duration-200">
          Subscribe Now
        </a>

        <p class="text-center text-xs text-muted-foreground mt-4 flex items-center justify-center gap-1.5">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Secure payment via Stripe
        </p>
      </div>

      <!-- Card 2: Gift Subscription -->
      <div class="p-8 md:p-10 bg-no-repeat transition-all duration-300" style="background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/torn paper card.webp')); ?>'); background-size: 100% 100%;">
        <div class="mb-2 w-10 h-10 bg-accent/15 rounded-lg flex items-center justify-center">
          <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M20 12v10H4V12"/>
            <path d="M2 7h20v5H2z"/>
            <path d="M12 22V7"/>
            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/>
            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-1">Gift to a Friend</h3>
        <p class="text-sm text-muted-foreground mb-6">Send a hug to someone you love</p>

        <div class="mb-6">
          <div class="flex items-baseline gap-1 mb-1">
            <span class="text-4xl font-bold text-foreground">$11</span>
            <span class="text-sm text-muted-foreground">/ month</span>
          </div>
          <p class="text-xs text-muted-foreground">Gift a monthly hug to someone special</p>
        </div>

        <ul class="space-y-3 mb-8">
          <li class="flex items-start gap-2.5">
            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[14px]">Gift a monthly envelope of joy</span>
          </li>
          <li class="flex items-start gap-2.5">
            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[14px]">We'll include a personal note</span>
          </li>
          <li class="flex items-start gap-2.5">
            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span class="text-foreground text-[14px]">The kindest surprise they'll get</span>
          </li>
        </ul>

        <a href="https://buy.stripe.com/cNieVcgqP2H61gd6kZbwk03" class="block w-full py-3.5 rounded-lg border-2 border-primary text-primary text-[15px] font-semibold text-center hover:bg-primary hover:text-white transition-colors duration-200">
          Gift a Subscription
        </a>

        <p class="text-center text-xs text-muted-foreground mt-4 flex items-center justify-center gap-1.5">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Secure payment via Stripe
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
