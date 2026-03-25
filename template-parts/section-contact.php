<?php
/**
 * Waiting List Section - Join Write Stuff
 * ============================================
 * $1 waiting list signup with Stripe payment
 */
?>
<section id="contact" class="relative py-10 lg:py-14 bg-gradient-to-b from-muted/20 to-background overflow-hidden">
  <!-- Decorative floating elements -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute top-20 left-[8%] w-20 h-20 bg-primary/10 rounded-full blur-2xl animate-[gentle-float_10s_ease-in-out_infinite]"></div>
    <div class="absolute bottom-32 right-[12%] w-24 h-24 bg-accent/10 rounded-full blur-2xl animate-[gentle-float_12s_ease-in-out_infinite_3s]"></div>
    <div class="absolute top-1/2 left-[15%] animate-[gentle-float_8s_ease-in-out_infinite_1s]">
      <span class="text-4xl opacity-20">✉️</span>
    </div>
    <div class="absolute top-1/3 right-[20%] animate-[gentle-float_9s_ease-in-out_infinite_2s]">
      <span class="text-3xl opacity-20">💌</span>
    </div>
  </div>
  
  <div class="max-w-4xl mx-auto px-4 relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-primary/20 to-accent/20 border border-primary/30 text-primary text-sm font-bold mb-6">
        <span class="text-xl">🎟️</span>
        <span>Limited Spots Available</span>
      </div>
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">
        Join Our <span class="text-primary">Waiting List</span>
      </h2>
      <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
        Secure your spot for just $1 and be the first to know when we launch. Your $1 will be credited toward your first month! 💌
      </p>
    </div>
    
    <!-- Waiting List Card -->
    <div class="max-w-lg mx-auto">
      <div class="bg-gradient-to-br from-white to-primary/5 rounded-3xl p-10 lg:p-12 border-2 border-primary/20 shadow-xl hover:shadow-2xl transition-all duration-500">
        
        <!-- Price Display -->
        <div class="text-center mb-8">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-bold mb-4">
            <span>⚡</span>
            <span>Reserve Your Spot</span>
          </div>
          <div class="mb-2">
            <span class="text-6xl font-bold text-foreground">$1</span>
          </div>
          <p class="text-sm text-muted-foreground">One-time reservation fee (credited to your first month)</p>
        </div>

        <!-- Benefits List -->
        <ul class="space-y-4 mb-8">
          <li class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-foreground leading-relaxed">Be first in line when we launch</span>
          </li>
          <li class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/10 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-accent" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-foreground leading-relaxed">$1 credited toward your first month</span>
          </li>
          <li class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-foreground leading-relaxed">Exclusive early access updates</span>
          </li>
          
        </ul>

        <!-- CTA Button -->
        <a href="<?php echo !empty(STRIPE_WAITLIST_LINK) ? esc_url(STRIPE_WAITLIST_LINK) : '#'; ?>" class="block w-full px-8 py-5 rounded-2xl bg-gradient-to-r from-primary to-accent text-white text-lg font-bold text-center hover:shadow-2xl hover:shadow-primary/40 transition-all duration-300 hover:-translate-y-1 mb-4">
          Join Waiting List for $1
        </a>
        
        <!-- Trust Badge -->
        <div class="flex items-center justify-center gap-2 text-sm text-muted-foreground">
          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          <span>Secure payment. Cancel anytime.</span>
        </div>
      </div>
    </div>

    <!-- Bottom Note -->
    <div class="text-center mt-12">
      <p class="text-lg text-muted-foreground">
        Have questions? <a href="<?php echo home_url('/faq'); ?>" class="text-primary hover:underline font-medium">Check our FAQ</a> or reach out at <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="text-primary hover:underline font-medium"><?php echo esc_html(SITE_EMAIL); ?></a>
      </p>
    </div>
  </div>
</section>
