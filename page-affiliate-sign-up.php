<?php
/** Template Name: Affiliate Sign-up */
if ( ! defined( 'ABSPATH' ) ) { exit; }
wp_enqueue_style( 'hitm-affiliate-page', get_theme_file_uri( '/assets/affiliate-signup.css' ), array( 'hitm-design' ), filemtime( get_theme_file_path( '/assets/affiliate-signup.css' ) ) );
// Render before wp_head so the form's assets are available in the document head.
$application = shortcode_exists( 'hug_affiliate_signup' ) ? do_shortcode( '[hug_affiliate_signup]' ) : '';
get_header();
?>
<div class="hitm affiliate-signup-page">
	<?php get_template_part( 'template-parts/header-nav' ); ?>
	<main>
		<header class="affiliate-recruit-hero wrap">
			<h1>Hug in the Mail <em>affiliates.</em></h1>
			<p>Help more mailboxes feel a little less ordinary.</p>
			<div class="affiliate-recruit-mail" aria-label="Letters, art, and reflections from Hug in the Mail">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/hero-mail/letter.webp' ) ); ?>" alt="A personal letter from Elaine" width="180" height="220">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/hero-mail/postcard-art.webp' ) ); ?>" alt="Colorful postcard artwork included in the mail" width="180" height="220">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/hero-mail/reflection-card.webp' ) ); ?>" alt="The Well reflection card" width="180" height="220">
			</div>
		</header>
		<section class="affiliate-recruit-body wrap" aria-label="Affiliate application">
			<div class="affiliate-recruit-story">
				<h2>Good mail.<br>Good people.<br><em>A little more connection.</em></h2>
				<p>Every month, we send real letters, art, a recipe, a reflection, and a surprise. If that sounds like something your community would love, we'd love to meet you.</p>
				<ol class="affiliate-recruit-steps">
					<li><strong>Say hello.</strong><p>Tell us about yourself and where you'd share Hug in the Mail.</p></li>
					<li><strong>We'll get in touch.</strong><p>Our team reviews your application and confirms the program details.</p></li>
					<li><strong>Share the hugs.</strong><p>Once approved, get your personal referral link and earn on qualifying paid subscriptions.</p></li>
				</ol>
				<?php if ( class_exists( 'HITM_Affiliate_Portal' ) ) : ?><p class="affiliate-recruit-existing">Already part of the family?<br><a href="<?php echo esc_url( HITM_Affiliate_Portal::url() ); ?>">Sign in to your affiliate portal</a></p><?php endif; ?>
			</div>
			<div class="affiliate-recruit-form">
				<?php if ( $application ) { echo $application; } else { ?><h2>Let's talk about spreading the hugs.</h2><p>Applications are temporarily unavailable. Please email <a href="mailto:<?php echo esc_attr( SITE_EMAIL ); ?>"><?php echo esc_html( SITE_EMAIL ); ?></a>.</p><?php } ?>
			</div>
		</section>
	</main>
	<?php get_template_part( 'template-parts/footer-site' ); ?>
</div>
<?php get_footer(); ?>
