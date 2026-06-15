<?php
/**
 * Testimonials Section - 3 Subscriber Video Testimonials
 * ============================================
 * Carousel of 3 real Hug In The Mail subscriber testimonials.
 */
$testimonials = [
  [
    'video_id' => 'HiV3nH6TyQM',
    'name'     => 'Leslie',
    'label'    => '— LESLIE, SUBSCRIBER',
    'quote'    => '"I could really use a hug — and one came in the mail."',
    'story'    => 'After losing both of her parents and a dear friend this past year, Leslie shared something that deeply moved us. She said that in a world that can feel so disconnected, receiving her Hug in the Mail felt like exactly what her heart needed.',
    'rotation' => '-rotate-1',
  ],
  [
    'video_id' => 'UaJ2BirDlEk',
    'name'     => 'A subscriber',
    'label'    => '— A SUBSCRIBER',
    'quote'    => '"Something in the mail that actually made me smile."',
    'story'    => 'In a world of notifications and noise, this subscriber shares what it means to receive something tangible — a small, beautiful reminder that someone took the time to think of them.',
    'rotation' => 'rotate-1',
  ],
  [
    'video_id' => 'vmaqV76Ujx0',
    'name'     => 'A subscriber',
    'label'    => '— A SUBSCRIBER',
    'quote'    => '"It feels like getting a hug from a stranger who somehow knows you."',
    'story'    => 'The surprise of opening an envelope that carries warmth, humor, and heart. This subscriber captures exactly what Hug in the Mail is about — human connection through paper.',
    'rotation' => '-rotate-1',
  ],
];
?>
<section id="testimonials" class="relative py-20 lg:py-28 overflow-hidden">

  <!-- Ambient background -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute top-0 right-0 w-[600px] h-[500px] opacity-25" style="background: radial-gradient(ellipse at top right, hsl(15 60% 82%) 0%, transparent 65%);"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[400px] opacity-20" style="background: radial-gradient(ellipse at bottom left, hsl(30 92% 70%) 0%, transparent 65%);"></div>
  </div>

  <div class="max-w-5xl mx-auto px-4 relative z-10">

    <!-- Section header -->
    <div class="text-center mb-14">
      <div class="inline-flex items-center gap-2 bg-primary/8 border border-primary/20 text-primary text-[11px] font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-6">
        <svg class="w-3 h-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        Real subscribers
      </div>
      <h2 class="text-3xl md:text-4xl lg:text-[2.75rem] font-bold tracking-tight text-foreground mb-4 leading-[1.1]">
        Hear it from people <span class="relative inline-block text-primary">who loved it
          <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 120 8" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M2 5.5 C20 2, 50 7, 80 4 S110 6, 118 5" stroke="hsl(30 92% 53%)" stroke-width="3" stroke-linecap="round"/>
          </svg>
        </span>
      </h2>
      <p class="text-base text-muted-foreground max-w-md mx-auto">Real words from real people who </br> opened their mailbox and felt it.</p>
    </div>

    <!-- Testimonial Carousel -->
    <div id="testimonials-carousel" class="relative" data-active="0">

      <?php foreach ( $testimonials as $i => $t ) : ?>
      <!-- Slide <?php echo $i; ?> -->
      <div
        class="testimonial-slide grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center transition-opacity duration-300<?php echo $i === 0 ? '' : ' hidden'; ?>"
        data-slide="<?php echo $i; ?>"
      >

        <!-- Left: Copy -->
        <div class="order-2 lg:order-1 text-center lg:text-left">

          <!-- Pull quote -->
          <div class="border-l-4 border-accent pl-4 mb-7">
            <p class="text-xl md:text-2xl text-foreground font-semibold leading-snug italic">
              <?php echo esc_html( $t['quote'] ); ?>
            </p>
          </div>

          <!-- Body -->
          <p class="text-base text-muted-foreground leading-relaxed mb-8 max-w-md mx-auto lg:mx-0">
            <?php echo esc_html( $t['story'] ); ?>
          </p>

          <!-- CTA -->
          <a href="#contact" class="group inline-flex items-center justify-center px-7 py-3.5 rounded-full bg-primary text-white text-base font-semibold shadow-lg shadow-primary/25 hover:bg-primary/90 transition-all duration-200">
            Get yours in the mail
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>

        </div>

        <!-- Right: Video -->
        <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
          <div class="relative">
            <div class="absolute inset-[-20px] rounded-[2rem] border-2 border-dashed border-primary/15 pointer-events-none" aria-hidden="true"></div>
            <div class="absolute inset-[-40px] rounded-[2.5rem] border border-accent/10 pointer-events-none" aria-hidden="true"></div>

            <!-- Polaroid frame -->
            <div class="bg-white p-3 pb-8 shadow-2xl shadow-foreground/20 <?php echo esc_attr( $t['rotation'] ); ?> hover:rotate-0 transition-transform duration-500" style="border-radius: 4px;">
              <div class="w-[240px] md:w-[275px] lg:w-[310px] overflow-hidden" style="border-radius: 2px;">
                <div class="aspect-[3/4.2] relative" id="testimonial-video-wrapper-<?php echo $i; ?>">
                  <div id="testimonial-video-poster-<?php echo $i; ?>" class="absolute inset-0 cursor-pointer group">
                    <img
                      src="https://i.ytimg.com/vi/<?php echo esc_attr( $t['video_id'] ); ?>/hqdefault.jpg"
                      alt="<?php echo esc_attr( $t['name'] ); ?> subscriber testimonial"
                      class="w-full h-full object-cover block"
                      width="480" height="360"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute top-3 left-3 right-3">
                      <p class="text-white text-[11px] font-semibold leading-snug drop-shadow-sm italic"><?php echo esc_html( $t['quote'] ); ?></p>
                    </div>
                    <div class="absolute bottom-3 right-3 w-12 h-12 rounded-full bg-primary flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-200">
                      <svg class="w-5 h-5 text-white ml-0.5" viewBox="0 0 24 24" fill="currentColor">
                        <polygon points="5,3 19,12 5,21"/>
                      </svg>
                    </div>
                    <div class="absolute bottom-3 left-3 bg-white/95 text-foreground text-[10px] font-bold tracking-wide px-2.5 py-1 rounded-full shadow">
                      <?php echo esc_html( $t['label'] ); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-accent text-white text-[11px] font-bold tracking-wide px-3 py-1 rounded-full shadow-md whitespace-nowrap">
              ✉ A subscriber's story
            </div>
          </div>
        </div>

      </div>
      <?php endforeach; ?>

      <!-- Navigation dots -->
      <div class="flex items-center justify-center gap-3 mt-14" id="testimonials-dots" role="tablist" aria-label="<?php esc_attr_e( 'Testimonial navigation', 'monthly-detox' ); ?>">
        <?php foreach ( $testimonials as $i => $t ) : ?>
        <button
          class="testimonial-dot w-2.5 h-2.5 rounded-full transition-all duration-200 <?php echo $i === 0 ? 'bg-primary scale-125' : 'bg-foreground/20 hover:bg-foreground/40'; ?>"
          data-dot="<?php echo $i; ?>"
          role="tab"
          aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
          aria-label="<?php echo esc_attr( sprintf( 'Testimonial %d', $i + 1 ) ); ?>"
        ></button>
        <?php endforeach; ?>
      </div>

      <!-- Prev / Next arrows -->
      <div class="flex items-center justify-center gap-4 mt-5">
        <button id="testimonials-prev" class="w-10 h-10 rounded-full border-2 border-foreground/15 flex items-center justify-center text-foreground/50 hover:border-primary hover:text-primary transition-all duration-200" aria-label="<?php esc_attr_e( 'Previous testimonial', 'monthly-detox' ); ?>">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <span class="text-sm text-muted-foreground font-medium" id="testimonials-counter">1 / <?php echo count( $testimonials ); ?></span>
        <button id="testimonials-next" class="w-10 h-10 rounded-full border-2 border-foreground/15 flex items-center justify-center text-foreground/50 hover:border-primary hover:text-primary transition-all duration-200" aria-label="<?php esc_attr_e( 'Next testimonial', 'monthly-detox' ); ?>">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>

    </div><!-- /#testimonials-carousel -->

  </div>
</section>
