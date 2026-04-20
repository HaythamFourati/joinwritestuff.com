<?php
/**
 * Template Name: FAQ Page
 * Description: Frequently Asked Questions page with playful, pretty styling
 */

get_header();
?>

<div class="min-h-screen text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <main id="faq-page" class="relative">
  <!-- Hero Section -->
  <section class="relative pt-24 pb-12 lg:pt-32 lg:pb-16">
    <!-- Decorative accents densely around FAQ content -->
    <div class="absolute top-[8rem] left-[16%] opacity-18 hidden lg:block pointer-events-none">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <line x1="8" y1="0" x2="8" y2="16" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
        <line x1="0" y1="8" x2="16" y2="8" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
        <line x1="2" y1="2" x2="14" y2="14" stroke="hsl(352 72% 38%)" stroke-width="1" stroke-linecap="round"/>
        <line x1="14" y1="2" x2="2" y2="14" stroke="hsl(352 72% 38%)" stroke-width="1" stroke-linecap="round"/>
      </svg>
    </div>
    <div class="absolute top-[10rem] right-[18%] opacity-16 hidden lg:block pointer-events-none">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
        <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
        <circle cx="11" cy="6" r="1.5" fill="hsl(30 25% 75%)"/>
      </svg>
    </div>
    <div class="absolute top-[14rem] left-[22%] opacity-15 hidden lg:block pointer-events-none">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
        <circle cx="3" cy="3" r="2" fill="hsl(30 92% 53%)"/>
        <circle cx="11" cy="8" r="1.5" fill="hsl(352 72% 38%)"/>
      </svg>
    </div>
    <div class="absolute top-[18rem] right-[14%] opacity-14 hidden lg:block pointer-events-none">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <line x1="8" y1="0" x2="8" y2="16" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
        <line x1="0" y1="8" x2="16" y2="8" stroke="hsl(352 72% 38%)" stroke-width="1.5" stroke-linecap="round"/>
      </svg>
    </div>
    <div class="absolute top-[24rem] left-[12%] opacity-16 hidden lg:block pointer-events-none">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
        <circle cx="3" cy="3" r="2" fill="hsl(352 72% 38%)"/>
        <circle cx="11" cy="7" r="1.5" fill="hsl(30 25% 75%)"/>
      </svg>
    </div>

    <div class="max-w-3xl mx-auto px-4">
      <div class="text-center">
        <p class="text-sm font-medium text-muted-foreground mb-4 tracking-wide uppercase">Got questions?</p>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mb-6">
          Frequently asked questions
        </h1>
        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
          Everything you need to know about <?php echo esc_html(SITE_NAME); ?>. Can't find what you're looking for? <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="text-primary hover:underline">Reach out</a>.
        </p>
      </div>
    </div>
  </section>

  <!-- FAQ Content -->
  <section class="py-12 lg:py-16">
    <div class="max-w-3xl mx-auto px-4">
      <div class="space-y-4">
        
        <!-- FAQ Item 1 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            What exactly is <?php echo esc_html(SITE_NAME); ?>?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            <?php echo esc_html(SITE_NAME); ?> is a monthly mail subscription that brings real paper, real connection, and real warmth to your mailbox. Each month, we send you a carefully curated envelope filled with kindness, heartfelt letters, and delightful surprises. It's like getting a warm hug in the mail.
          </p>
        </div>

        <!-- FAQ Item 2 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            What's included in each envelope?
          </h3>
          <p class="text-muted-foreground leading-relaxed mb-3">
            Every month, you'll receive:
          </p>
          <ul class="text-muted-foreground leading-relaxed space-y-1.5 list-disc list-inside">
            <li>A vulnerable, heartfelt letter about life and being human</li>
            <li>A short reflection or philosophical insight</li>
            <li>A sticker or fun surprise</li>
            <li>A pay-it-forward postcard to spread kindness</li>
            <li>A short guided meditation for moments of peace</li>
          </ul>
        </div>

        <!-- FAQ Item 3 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            How much does it cost?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            <?php echo esc_html(SITE_NAME); ?> costs <?php echo esc_html(MONTHLY_PRICE); ?> per month. As a founding member, you'll lock in this special price forever. You can cancel anytime with no strings attached.
          </p>
        </div>

        <!-- FAQ Item 4 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            What makes founding members special?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            Founding members are the first <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> people to join. You'll lock in the founding member price forever, get exclusive content, and be part of shaping what this community becomes.
          </p>
        </div>

        <!-- FAQ Item 5 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            When will I receive my first envelope?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            Envelopes are sent out at the beginning of each month. If you sign up mid-month, your first envelope will arrive at the start of the following month. We'll send you a welcome email with all the details.
          </p>
        </div>

        <!-- FAQ Item 6 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            Do you ship internationally?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            Currently, we ship within the United States. International shipping is something we're exploring for the future. If you're outside the US and interested, please reach out and let us know.
          </p>
        </div>

        <!-- FAQ Item 7 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            Can I cancel anytime?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            Absolutely. There's no long-term commitment. You can cancel your subscription anytime, and you'll continue to receive envelopes through the end of your billing period.
          </p>
        </div>

        <!-- FAQ Item 8 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            Who creates the content?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            <?php echo esc_html(SITE_NAME); ?> is created by three people who got tired of doomscrolling and decided to do something about it — with stamps. We write, curate, and design every piece with care and heart.
          </p>
        </div>

        <!-- FAQ Item 9 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            Can I gift a subscription?
          </h3>
          <p class="text-muted-foreground leading-relaxed">
            Yes — and it's one of the most meaningful gifts you can give. Add your recipient's information at checkout, use your own payment details, and we'll deliver a monthly reminder that they're loved.
          </p>
        </div>

        <!-- FAQ Item 10 -->
        <div class="bg-white rounded-xl p-6 lg:p-8 border border-border">
          <h3 class="text-lg md:text-xl font-bold text-foreground mb-3">
            Still have questions?
          </h3>
          <p class="text-muted-foreground leading-relaxed mb-4">
            We'd love to hear from you. Send us a message and we'll get back to you as soon as possible.
          </p>
          <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-primary text-white text-sm font-semibold hover:bg-primary/90 transition-colors duration-200">
            Get in Touch
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14"/>
              <path d="m12 5 7 7-7 7"/>
            </svg>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-16 lg:py-20">
    <div class="max-w-2xl mx-auto px-4 text-center">
      <h2 class="text-2xl md:text-3xl font-bold text-foreground mb-4">
        Ready to join?
      </h2>
      <p class="text-muted-foreground mb-8">
        Become a founding member and start receiving joy in your mailbox every month.
      </p>
      <a href="<?php echo home_url('/#contact'); ?>" class="inline-flex items-center gap-2 px-8 py-4 rounded-lg bg-primary text-white text-base font-semibold hover:bg-primary/90 transition-colors duration-200">
        Join Waiting List
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14"/>
          <path d="m12 5 7 7-7 7"/>
        </svg>
      </a>
    </div>
  </section>
</main>

<?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php
get_footer();
?>
