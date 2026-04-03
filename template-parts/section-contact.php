<?php
/**
 * Waiting List Section - Hug in the Mail
 * ============================================
 * $1 waiting list signup with Stripe payment
 */
?>
<section id="contact" class="relative py-16 lg:py-24">
  <div class="max-w-4xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">Limited spots available</p>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
        Join our waiting list
      </h2>
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
        Secure your spot for just $1 and be the first to know when we launch. Your $1 will be credited toward your first month.
      </p>
    </div>
    
    <!-- Waiting List Card -->
    <div class="max-w-md mx-auto">
      <div class="bg-white rounded-xl p-8 md:p-10 border border-border">
        
        <!-- Price Display -->
        <div class="mb-8">
          <p class="text-sm font-semibold text-primary mb-4">Reserve Your Spot</p>
          <div class="mb-2">
            <span class="text-5xl font-bold text-foreground">$1</span>
          </div>
          <p class="text-sm text-muted-foreground">One-time reservation fee, credited to your first month</p>
        </div>

        <!-- Benefits List -->
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

        <!-- CTA Button -->
        <a href="<?php echo !empty(STRIPE_WAITLIST_LINK) ? esc_url(STRIPE_WAITLIST_LINK) : '#'; ?>" class="block w-full py-4 rounded-lg bg-primary text-white text-base font-semibold text-center hover:bg-primary/90 transition-colors duration-200 mb-4">
          Join Waiting List for $1
        </a>
        
        <!-- Trust Badge -->
        <p class="text-center text-sm text-muted-foreground flex items-center justify-center gap-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          Secure payment. Cancel anytime.
        </p>
      </div>
    </div>

    <!-- Bottom Note -->
    <div class="text-center mt-10">
      <p class="text-muted-foreground">
        Have questions? <a href="<?php echo home_url('/faq'); ?>" class="text-primary hover:underline font-medium">Check our FAQ</a> or reach out at <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="text-primary hover:underline font-medium"><?php echo esc_html(SITE_EMAIL); ?></a>
      </p>
    </div>
  </div>
</section>
