<?php
/**
 * About Section - Clean 2025 Modern Design
 * ============================================
 * Two-part about section with GSAP scroll animations.
 * TODO: Customize content, images, and team member info for your project.
 */
?>
<section id="about" class="py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
      <!-- Text Content -->
      <div class="showcase-text-1">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Why Choose Us
        </span>
        <!-- TODO: Update headline and copy for your project -->
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-6">
          Dedicated to Your Success
        </h2>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-5">
          We believe in building lasting relationships with our clients. Our approach combines expertise with genuine care, ensuring you receive personalized attention every step of the way.
        </p>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
          With years of experience and a commitment to excellence, we've helped countless clients achieve their goals. Let us show you what dedicated service looks like.
        </p>
        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border text-foreground/80 text-[15px] font-medium hover:bg-muted/50 hover:border-primary/20 transition-all duration-200 group">
          Schedule a Consultation
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>

      <!-- Image - TODO: Replace with your own image -->
      <div class="showcase-image-1 relative">
        <div class="relative rounded-3xl overflow-hidden aspect-[4/3]">
          <div class="image-slices absolute inset-0 z-10 flex">
            <div class="slice-1 w-1/3 h-full bg-background"></div>
            <div class="slice-2 w-1/3 h-full bg-background"></div>
            <div class="slice-3 w-1/3 h-full bg-background"></div>
          </div>
          <img 
            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2000&auto=format&fit=crop" 
            alt="Team collaboration" 
            class="w-full h-full object-cover"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Meet the Team/Founder Section - TODO: Customize for your team -->
<section class="py-16 lg:py-24 bg-muted/30">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
      <!-- Image - TODO: Replace with team/founder photo -->
      <div class="showcase-image-2 relative order-1 lg:order-1">
        <div class="relative rounded-3xl overflow-hidden aspect-[3/4] max-w-md mx-auto lg:mx-0">
          <div class="image-slices-2 absolute inset-0 z-10 flex">
            <div class="slice-1 w-1/3 h-full bg-muted/30"></div>
            <div class="slice-2 w-1/3 h-full bg-muted/30"></div>
            <div class="slice-3 w-1/3 h-full bg-muted/30"></div>
          </div>
          <img 
            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1000&auto=format&fit=crop" 
            alt="Team member portrait" 
            class="w-full h-full object-cover object-top"
            loading="lazy"
          />
        </div>
      </div>

      <!-- Text Content - TODO: Update with your team/founder info -->
      <div class="showcase-text-2 lg:order-2">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Meet the Founder
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-4">
          Your Name Here
        </h2>
        <p class="text-5xl md:text-6xl font-semibold text-primary/15 mb-6">Since 20XX</p>
        
        <div class="bg-white rounded-2xl p-6 border border-border/50 shadow-sm">
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            A brief bio about the founder or key team member. Highlight experience, values, and what drives the business. Make it personal and relatable.
          </p>
          <!-- TODO: Update tags for your expertise -->
          <div class="flex flex-wrap gap-3">
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/5 text-primary text-[13px] font-medium">
              Industry Expert
            </span>
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/5 text-primary text-[13px] font-medium">
              <?php echo esc_html(SITE_YEARS_EXPERIENCE); ?> Years Experience
            </span>
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/5 text-primary text-[13px] font-medium">
              Certified Professional
            </span>
          </div>
        </div>

        <a href="#contact" class="inline-flex items-center mt-6 text-[14px] text-primary font-medium group">
          Get in Touch
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>
