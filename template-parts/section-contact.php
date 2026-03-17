<?php
/**
 * Contact Section - Join Write Stuff
 * ============================================
 * Playful, pretty contact section
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
  
  <div class="max-w-6xl mx-auto px-4 relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-primary/20 to-accent/20 border border-primary/30 text-primary text-sm font-bold mb-6">
        <span class="text-xl">💌</span>
        <span>Get In Touch</span>
      </div>
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6">
        We'd Love to <span class="text-primary">Hear From You</span>
      </h2>
      <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
        Have questions about the mail club? Curious about what's inside? Want to know more about becoming a founding member? Send us a message! ✨
      </p>
    </div>
    
    <!-- Centered Form -->
    <div class="max-w-2xl mx-auto">
      <div id="contact-form-root" class="bg-gradient-to-br from-white to-accent/5 rounded-3xl p-8 lg:p-10 border-2 border-accent/20 shadow-lg hover:shadow-xl transition-all duration-500">
        <div class="text-center mb-8">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/20 text-accent text-sm font-bold mb-4">
            <span class="text-lg">✉️</span>
            <span>Send a Message</span>
          </div>
          <h3 class="text-2xl font-bold text-foreground">Drop Us a Line</h3>
        </div>
        
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
          echo do_shortcode('[contact-form-7 id="27f9550" title="Contact form 1"]');
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
