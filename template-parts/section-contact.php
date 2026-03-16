<?php
/**
 * Contact Section - Komedy & Kindness Mail Club
 * ============================================
 * Simple, warm contact section
 */
?>
<section id="contact" class="py-20 lg:py-28 bg-gradient-to-br from-secondary/10 to-accent/10">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">
      <!-- Left Column - Info -->
      <div class="contact-info">
        <span class="inline-block px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-6">
          Questions?
        </span>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight text-foreground mb-6">
          We'd Love to <span class="text-primary">Hear From You</span>
        </h2>
        <p class="text-lg text-muted-foreground leading-relaxed mb-8">
          Have questions about the mail club? Curious about what's inside? Want to know more about becoming a founding member? Send us a message!
        </p>

        <!-- Contact Details -->
        <div class="space-y-5 mb-8">
          <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="flex items-center gap-4 group">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-accent flex items-center justify-center group-hover:scale-110 transition-transform">
              <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <div>
              <p class="text-[13px] text-muted-foreground">Email Us</p>
              <p class="text-[16px] font-semibold text-foreground group-hover:text-primary transition-colors"><?php echo esc_html(SITE_EMAIL); ?></p>
            </div>
          </a>
          <div class="pt-4">
            <p class="text-sm text-muted-foreground italic">
              We typically respond within 24 hours. Can't wait to connect with you! 💌
            </p>
          </div>
        </div>
      </div>

      <!-- Right Column - Form -->
      <div id="contact-form-root" class="bg-white rounded-2xl p-8 border border-border/50 shadow-sm">
        <h3 class="text-xl font-semibold text-foreground mb-6">Send Us a Message</h3>
        
        <?php 
        // Contact Form 7 Integration
        // ============================================
        // After installing CF7 plugin and creating a form:
        // 1. Go to Contact > Contact Forms in WP Admin
        // 2. Copy the shortcode (e.g., [contact-form-7 id="abc123" title="Contact"])
        // 3. Replace the shortcode below with your actual form shortcode
        
        if (shortcode_exists('contact-form-7')) {
          // CF7 is installed - use the shortcode
          // TODO: Update this shortcode with your actual CF7 form ID
          echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact Form"]');
        } else {
          // Fallback form when CF7 is not installed
        ?>
        <form id="contact-form" class="cf7-custom-form" method="post" action="">
          <?php wp_nonce_field('contact_form_submit', 'contact_nonce'); ?>
          
          <div class="cf7-row cf7-two-col">
            <div class="cf7-field">
              <label class="cf7-label">Full Name</label>
              <input type="text" name="name" placeholder="John Smith" class="cf7-input" required />
            </div>
            <div class="cf7-field">
              <label class="cf7-label">Phone Number</label>
              <input type="tel" name="phone" placeholder="(555) 123-4567" class="cf7-input" required />
            </div>
          </div>

          <div class="cf7-field">
            <label class="cf7-label">Email Address</label>
            <input type="email" name="email" placeholder="john@example.com" class="cf7-input" required />
          </div>

          <!-- TODO: Update service options for your project -->
          <div class="cf7-field">
            <label class="cf7-label">Service Needed</label>
            <select name="service" class="cf7-select">
              <option value="">Select a service...</option>
              <option value="service-1">Service One</option>
              <option value="service-2">Service Two</option>
              <option value="service-3">Service Three</option>
              <option value="service-4">Service Four</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="cf7-field">
            <label class="cf7-label">How Can We Help?</label>
            <textarea name="message" placeholder="Briefly describe your situation..." rows="4" class="cf7-textarea" required></textarea>
          </div>

          <div class="cf7-submit-wrap">
            <button type="submit" class="cf7-submit">Send Message</button>
          </div>

          <p class="cf7-disclaimer">By submitting, you agree to our privacy policy. We'll never share your information.</p>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
