<?php
/**
 * Template Name: FAQ
 * FAQ page — auto-applies to the page with slug "faq"; also selectable.
 */
$faq = array(
  'General Questions' => array(
    array('What is a monthly letter subscription?', 'A monthly letter subscription is a service that delivers real, physical letters to your mailbox each month. It is designed to provide a meaningful, offline experience through thoughtful writing, reflections, and small surprises.'),
    array('What makes this different from a subscription box?', 'Unlike traditional subscription boxes that focus on products, a monthly letter subscription focuses on emotional connection, storytelling, and meaningful experiences. The value comes from the message, not just the items.'),
    array('Why choose physical letters instead of digital content?', 'Physical letters create a deeper emotional impact. They encourage you to slow down, disconnect from screens, and engage with something tangible and personal.'),
  ),
  'What You Receive' => array(
    array('What is included in each monthly delivery?', 'Each delivery typically includes a heartfelt letter, a reflection or short story, a small surprise item, and sometimes a postcard you can pass on to someone else.'),
    array('Are the letters handwritten?', 'The letters are designed to feel personal and human, often printed in a style that mimics handwritten text while maintaining clarity and consistency.'),
    array('Are the contents the same every month?', 'No. Each month features new themes, stories, and surprises to keep the experience fresh and meaningful.'),
  ),
  'Subscription & Delivery' => array(
    array('How does the monthly letter subscription work?', 'You sign up, and each month a new letter package is delivered to your mailbox. There is no digital access required, making it a completely offline experience.'),
    array('Where do you ship?', 'Shipping availability depends on your service coverage. Many monthly letter subscriptions offer domestic and international delivery options.'),
    array('When will I receive my first letter?', 'Your first delivery usually arrives within the next mailing cycle after you sign up. Exact timing may vary depending on your location.'),
    array('Can I cancel my subscription?', 'Yes. Most subscriptions allow you to cancel at any time before the next billing cycle.'),
  ),
  'Gifting' => array(
    array('Is this a good gift idea?', 'Yes. A monthly letter subscription is a unique and thoughtful gift that focuses on emotional connection rather than material items. It is perfect for birthdays, holidays, or simply showing someone you care.'),
    array('Can I send this subscription to someone else?', 'Absolutely. You can subscribe on behalf of someone and have the letters delivered directly to their address.'),
    array('Do you offer gift plans?', 'Many services offer prepaid gift options for a set number of months, making it easy to give a meaningful experience.'),
  ),
  'Experience & Benefits' => array(
    array('Who is this subscription for?', 'This experience is ideal for anyone seeking a break from digital overload, people who appreciate thoughtful writing, or those looking for a meaningful monthly ritual.'),
    array('What are the benefits of receiving letters by mail?', 'Receiving real letters promotes mindfulness, reduces screen time, and creates a stronger emotional connection compared to digital communication.'),
    array('What is the "kindness ripple" concept?', 'Some letters include elements designed to be shared with others, encouraging you to pass on kindness and create a ripple effect of human connection beyond your own experience.'),
  ),
);
get_header(); ?>

<div class="hitm">
  <?php get_template_part('template-parts/header-nav'); ?>

  <header class="page-hero wrap">
    <span class="eyebrow">Support</span>
    <h1>Monthly Letter Subscription FAQs</h1>
    <p>Find answers to common questions about our monthly letter subscription, how it works, what you receive, and why it is a meaningful alternative to digital communication.</p>
  </header>

  <main class="faq wrap">
    <?php $first = true; $i = 0; foreach ($faq as $group => $items) : $i++; ?>
      <section class="faq-group">
        <h2><span class="n"><?php echo esc_html(sprintf('%02d', $i)); ?></span><?php echo esc_html($group); ?></h2>
        <?php foreach ($items as $qa) : ?>
          <details class="faq-item"<?php echo $first ? ' open' : ''; $first = false; ?>>
            <summary><?php echo esc_html($qa[0]); ?></summary>
            <div class="faq-a"><?php echo esc_html($qa[1]); ?></div>
          </details>
        <?php endforeach; ?>
      </section>
    <?php endforeach; ?>

    <section class="faq-cta">
      <h2>Still have questions?</h2>
      <p>If you need more information about our monthly letter subscription, feel free to contact us. We are happy to help you understand how the experience works and how you can get started.</p>
      <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="btn primary">Contact Us <span class="arr">→</span></a>
    </section>
  </main>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer();
