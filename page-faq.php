<?php
/**
 * Template Name: FAQ Page
 * Description: Frequently Asked Questions page with playful, pretty styling
 */

get_header();
?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <main id="faq-page" class="relative">
  <!-- Hero Section -->
  <section class="relative py-10 lg:py-14 bg-gradient-to-b from-muted/20 to-background overflow-hidden">
    <!-- Decorative floating elements -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute top-20 left-[10%] w-20 h-20 bg-primary/10 rounded-full blur-2xl animate-[gentle-float_10s_ease-in-out_infinite]"></div>
      <div class="absolute bottom-32 right-[15%] w-24 h-24 bg-accent/10 rounded-full blur-2xl animate-[gentle-float_12s_ease-in-out_infinite_3s]"></div>
      <div class="absolute top-1/3 right-[20%] animate-[gentle-float_8s_ease-in-out_infinite_1s]">
        <span class="text-4xl opacity-20">❓</span>
      </div>
      <div class="absolute bottom-1/3 left-[15%] animate-[gentle-float_9s_ease-in-out_infinite_2s]">
        <span class="text-3xl opacity-20">💡</span>
      </div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-primary/20 to-accent/20 border border-primary/30 text-primary text-sm font-bold mb-6">
          <span class="text-xl">❓</span>
          <span>Got Questions?</span>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">
          Frequently Asked <span class="text-primary">Questions</span>
        </h1>
        <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
          Everything you need to know about Join Write Stuff. Can't find what you're looking for? Feel free to reach out! 💌
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ Content -->
  <section class="py-12 lg:py-16 bg-background">
    <div class="max-w-3xl mx-auto px-4">
      <div class="space-y-6">
        
        <!-- FAQ Item 1 -->
        <div class="bg-gradient-to-br from-white to-primary/5 rounded-3xl p-6 lg:p-8 border-2 border-primary/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-primary flex-shrink-0">💌</span>
            <span>What exactly is Join Write Stuff?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Join Write Stuff is a monthly mail subscription that brings real paper, real laughter, and real connection to your mailbox. Each month, we send you a carefully curated envelope filled with comedy, kindness, heartfelt letters, and delightful surprises. It's like getting a warm hug in the mail!
          </p>
        </div>

        <!-- FAQ Item 2 -->
        <div class="bg-gradient-to-br from-white to-accent/5 rounded-3xl p-6 lg:p-8 border-2 border-accent/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-accent flex-shrink-0">📬</span>
            <span>What's included in each envelope?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9 mb-4">
            Every month, you'll receive:
          </p>
          <ul class="text-lg text-muted-foreground leading-relaxed pl-9 space-y-2">
            <li>• Some jokes that'll make you laugh out loud</li>
            <li>• A vulnerable, heartfelt letter about life and being human</li>
            <li>• A short reflection or philosophical insight</li>
            <li>• A sticker or fun surprise (because grown-ups deserve treats too!)</li>
            <li>• A pay-it-forward postcard to spread kindness</li>
            <li>• A short meditation for moments of peace</li>
          </ul>
        </div>

        <!-- FAQ Item 3 -->
        <div class="bg-gradient-to-br from-white to-secondary/5 rounded-3xl p-6 lg:p-8 border-2 border-secondary/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-secondary flex-shrink-0">💰</span>
            <span>How much does it cost?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Join Write Stuff costs <?php echo esc_html(MONTHLY_PRICE); ?> per month. As a founding member, you'll lock in this special price forever! You can cancel anytime with no strings attached.
          </p>
        </div>

        <!-- FAQ Item 4 -->
        <div class="bg-gradient-to-br from-white to-peach/5 rounded-3xl p-6 lg:p-8 border-2 border-peach/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-primary flex-shrink-0">🎁</span>
            <span>What makes founding members special?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Founding members are the first <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> people to join Join Write Stuff! You'll lock in the founding member price forever, get exclusive content, and be part of shaping what this community becomes. Plus, you'll always have bragging rights as an OG member! 😄
          </p>
        </div>

        <!-- FAQ Item 5 -->
        <div class="bg-gradient-to-br from-white to-mint/5 rounded-3xl p-6 lg:p-8 border-2 border-mint/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-accent flex-shrink-0">📮</span>
            <span>When will I receive my first envelope?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Envelopes are sent out at the beginning of each month. If you sign up mid-month, your first envelope will arrive at the start of the following month. We'll send you a welcome email with all the details!
          </p>
        </div>

        <!-- FAQ Item 6 -->
        <div class="bg-gradient-to-br from-white to-primary/5 rounded-3xl p-6 lg:p-8 border-2 border-primary/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-secondary flex-shrink-0">🌍</span>
            <span>Do you ship internationally?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Currently, we ship within the United States. International shipping is something we're exploring for the future! If you're outside the US and interested, please reach out and let us know.
          </p>
        </div>

        <!-- FAQ Item 7 -->
        <div class="bg-gradient-to-br from-white to-accent/5 rounded-3xl p-6 lg:p-8 border-2 border-accent/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-primary flex-shrink-0">❌</span>
            <span>Can I cancel anytime?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Absolutely! There's no long-term commitment. You can cancel your subscription anytime, and you'll continue to receive envelopes through the end of your billing period. No hard feelings, we promise! 💕
          </p>
        </div>

        <!-- FAQ Item 8 -->
        <div class="bg-gradient-to-br from-white to-secondary/5 rounded-3xl p-6 lg:p-8 border-2 border-secondary/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-accent flex-shrink-0">🎨</span>
            <span>Who creates the content?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Join Write Stuff is created by three people who got tired of doomscrolling and decided to do something about it — with stamps! We write, curate, and design every piece with care, humor, and a whole lot of heart.
          </p>
        </div>

        <!-- FAQ Item 9 -->
        <div class="bg-gradient-to-br from-white to-peach/5 rounded-3xl p-6 lg:p-8 border-2 border-peach/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-secondary flex-shrink-0">🎁</span>
            <span>Can I gift a subscription?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9">
            Yes! A Join Write Stuff subscription makes a wonderful gift. Just reach out to us at <?php echo esc_html(SITE_EMAIL); ?> and we'll help you set up a gift subscription for someone special.
          </p>
        </div>

        <!-- FAQ Item 10 -->
        <div class="bg-gradient-to-br from-white to-mint/5 rounded-3xl p-6 lg:p-8 border-2 border-mint/20 hover:shadow-xl transition-all duration-500">
          <h3 class="text-xl md:text-2xl font-bold text-foreground mb-4 flex items-start gap-3">
            <span class="text-primary flex-shrink-0">💬</span>
            <span>Still have questions?</span>
          </h3>
          <p class="text-lg text-muted-foreground leading-relaxed pl-9 mb-4">
            We'd love to hear from you! Send us a message and we'll get back to you as soon as possible.
          </p>
          <div class="pl-9">
            <a href="<?php echo home_url('/#contact'); ?>" class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl bg-gradient-to-r from-primary to-accent text-white text-lg font-bold hover:shadow-2xl hover:shadow-primary/40 transition-all duration-300 hover:-translate-y-1">
              Contact Us
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14"/>
                <path d="m12 5 7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-16 lg:py-20 bg-gradient-to-b from-background to-muted/20">
    <div class="max-w-3xl mx-auto px-4 text-center">
      <div class="bg-gradient-to-r from-primary/10 via-accent/10 to-secondary/10 rounded-3xl p-10 border-2 border-primary/20">
        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
          Ready to Join? ✨
        </h2>
        <p class="text-lg text-muted-foreground mb-8">
          Become a founding member and start receiving joy in your mailbox every month!
        </p>
        <a href="<?php echo home_url('/#founding-membership'); ?>" class="inline-flex items-center gap-2 px-10 py-5 rounded-2xl bg-gradient-to-r from-primary to-accent text-white text-lg font-bold hover:shadow-2xl hover:shadow-primary/40 transition-all duration-300 hover:-translate-y-1">
          Become a Founding Member
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14"/>
            <path d="m12 5 7 7-7 7"/>
          </svg>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php
get_footer();
?>
