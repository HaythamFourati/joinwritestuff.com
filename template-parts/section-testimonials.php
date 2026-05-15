<?php
/**
 * Testimonials Section - Subscriber Video Testimonial
 * ============================================
 * Featured single video testimonial from a real Hug In The Mail subscriber.
 */
$video_id = 'HiV3nH6TyQM';
?>
<section id="testimonials" class="relative py-20 lg:py-28 overflow-hidden">

  <!-- Ambient background -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute top-0 right-0 w-[600px] h-[500px] opacity-25" style="background: radial-gradient(ellipse at top right, hsl(15 60% 82%) 0%, transparent 65%);"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[400px] opacity-20" style="background: radial-gradient(ellipse at bottom left, hsl(30 92% 70%) 0%, transparent 65%);"></div>
  </div>

  <div class="max-w-5xl mx-auto px-4 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Left: Copy -->
      <div class="order-2 lg:order-1 text-center lg:text-left">

        <!-- Badge -->
        <div class="inline-flex items-center gap-2 bg-primary/8 border border-primary/20 text-primary text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-7">
          <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          A real subscriber
        </div>

        <!-- Headline -->
        <h2 class="text-3xl md:text-4xl lg:text-[2.75rem] font-bold tracking-tight text-foreground mb-6 leading-[1.1]">
          Hear it from someone <span class="relative inline-block text-primary">who lived it
            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 120 8" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M2 5.5 C20 2, 50 7, 80 4 S110 6, 118 5" stroke="hsl(30 92% 53%)" stroke-width="3" stroke-linecap="round"/>
            </svg>
          </span>
        </h2>

        <!-- Pull quote -->
        <div class="border-l-4 border-accent pl-4 mb-7">
          <p class="text-lg md:text-xl text-foreground font-medium leading-snug italic">
            "I could really use a hug &mdash; and one came in the mail."
          </p>
        </div>

        <!-- Body -->
        <div class="flex flex-col gap-2 mb-8 max-w-md mx-auto lg:mx-0 text-base text-muted-foreground leading-relaxed">
          <p>After losing both of her parents and a dear friend this past year, Leslie shared something that deeply moved us.</p>
          <p>She said that in a world that can feel so disconnected, we truly need each other — and that receiving her Hug in the Mail felt like exactly what her heart needed.</p>
          <p class="text-foreground/80 font-medium">Not just to send pretty mail. But to send comfort. Connection. Humanity.</p>
          <p>A reminder that someone, somewhere, is thinking about you.</p>
        </div>

        <!-- CTA -->
        <a href="#contact" class="group inline-flex items-center justify-center px-7 py-3.5 rounded-full bg-primary text-white text-base font-semibold shadow-lg shadow-primary/25 hover:bg-primary/90 transition-all duration-200">
          Get yours in the mail
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>

      </div>

      <!-- Right: Testimonial Video -->
      <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
        <div class="relative">
          <!-- Decorative rings -->
          <div class="absolute inset-[-20px] rounded-[2rem] border-2 border-dashed border-primary/15 pointer-events-none" aria-hidden="true"></div>
          <div class="absolute inset-[-40px] rounded-[2.5rem] border border-accent/10 pointer-events-none" aria-hidden="true"></div>

          <!-- Polaroid frame -->
          <div class="bg-white p-3 pb-8 shadow-2xl shadow-foreground/20 -rotate-1 hover:rotate-0 transition-transform duration-500" style="border-radius: 4px;">
            <div class="w-[240px] md:w-[275px] lg:w-[310px] overflow-hidden" style="border-radius: 2px;">
              <div class="aspect-[3/4.2] relative" id="testimonial-video-wrapper">
                <!-- Thumbnail shown by default -->
                <div id="testimonial-video-poster" class="absolute inset-0 cursor-pointer group">
                  <img
                    src="https://i.ytimg.com/vi/<?php echo esc_attr($video_id); ?>/hqdefault.jpg"
                    alt="Subscriber testimonial"
                    class="w-full h-full object-cover block"
                  >
                  <!-- Subtle overlay for contrast -->
                  <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                  <!-- Play button: bottom-right -->
                  <div class="absolute bottom-3 right-3 w-12 h-12 rounded-full bg-primary flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
                    <svg class="w-5 h-5 text-white ml-0.5" viewBox="0 0 24 24" fill="currentColor">
                      <polygon points="5,3 19,12 5,21"/>
                    </svg>
                  </div>
                  <!-- Caption tag -->
                  <div class="absolute bottom-3 left-3 bg-white/95 text-foreground text-[10px] font-bold tracking-wide px-2.5 py-1 rounded-full shadow">
                    HER WORDS
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Bottom tag -->
          <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-accent text-white text-[11px] font-bold tracking-wide px-3 py-1 rounded-full shadow-md whitespace-nowrap">
            ✉ A subscriber's story
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
