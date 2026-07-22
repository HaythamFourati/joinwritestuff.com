<?php
/**
 * Founding Membership / Pricing — Hug in the Mail 2026 redesign
 * Dark section, two plans (monthly + yearly) linking to their checkout choice.
 */
$checkout_link         = home_url('/checkout');
$monthly_checkout_link = add_query_arg('plan', 'monthly', $checkout_link);
$annual_checkout_link  = add_query_arg('plan', 'annual', $checkout_link);
?>
<section class="found-section" id="contact">
  <div class="wrap">
    <div class="section-head" data-aos>
      <span class="eyebrow">Limited Founding Membership</span>
      <h2 class="display">
        Become one of the <em>first <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> members.</em>
      </h2>
      <p>
        We're launching with a small, intimate founding group — just
        <?php echo esc_html(FOUNDING_MEMBERS_LIMIT); ?> people who believe that joy deserves a stamp.
      </p>
    </div>

    <div class="founding-details">
      <div>
        <span class="eyebrow">Where should we send the hug?</span>
        <p>Enter the details of the person receiving the Hug in the Mail — whether that's you or someone special.</p>
      </div>
      <div>
        <span class="eyebrow">Taking care of the details</span>
        <p>Enter the payment information for the person covering the subscription — you, or a generous gift-giver.</p>
      </div>
    </div>

    <div class="pricing">
      <div class="plan standard" data-aos>
        <span class="meta">✉ Monthly Plan</span>
        <h3 class="display">Pay month-to-month</h3>
        <div class="price"><?php echo esc_html(MONTHLY_PRICE); ?><small>/ month</small></div>
        <p class="plan-desc">Billed monthly — cancel anytime</p>
        <ul>
          <li>Monthly envelope of warmth</li>
          <li>Founding member pricing</li>
          <li>Cancel anytime</li>
        </ul>
        <a href="<?php echo esc_url($monthly_checkout_link); ?>" class="btn">Subscribe Monthly <span class="arr">→</span></a>
        <p class="plan-secure">🔒 Secure payment</p>
      </div>

      <div class="plan featured" data-aos>
        <span class="save-tag">Save $22</span>
        <span class="meta">$ Yearly Plan</span>
        <h3 class="display">Best value — save $22/year</h3>
        <div class="price">$110 <s>$132</s><small>/ year</small></div>
        <p class="plan-desc">Billed annually — just $9.17/month</p>
        <ul>
          <li>12 monthly envelopes</li>
          <li>Save $22 compared to monthly</li>
          <li>Founding member pricing locked in</li>
        </ul>
        <a href="<?php echo esc_url($annual_checkout_link); ?>" class="btn">Subscribe Yearly <span class="arr">→</span></a>
        <p class="plan-secure">🔒 Secure payment</p>
      </div>
    </div>

    <div class="found-foot">
      You're not just subscribing. You're helping bring this idea to life.<br>
      Your feedback and enthusiasm will shape every future envelope we send. This
      is where the story begins — and you get to be part of the first chapter.<br><br>
      Have questions? <a href="<?php echo esc_url(home_url('/faq')); ?>">Check our FAQ</a>
      or reach out at <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>"><?php echo esc_html(SITE_EMAIL); ?></a>
    </div>
  </div>
</section>
