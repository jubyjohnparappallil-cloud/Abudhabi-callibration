<?php
/**
 * Template Name: Contact Page
 * A designed Contact Us layout for Abu Dhabi Calibration.
 *
 * @package AbuCal
 */

get_header();
?>

<main>
	<!-- Page hero -->
	<section class="page-hero">
		<div class="container">
			<div class="page-hero-inner reveal">
				<span class="eyebrow"><?php esc_html_e( 'Get In Touch', 'abucal' ); ?></span>
				<h1><?php esc_html_e( 'Contact Us', 'abucal' ); ?></h1>
				<p><?php esc_html_e( "We'd love to hear from you. We guarantee prompt service and a quick response to every enquiry, be it through phone or email.", 'abucal' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Contact details + form -->
	<section class="section">
		<div class="container">
			<div class="contact-grid">
				<div class="glass card contact-info reveal">
					<span class="eyebrow"><?php esc_html_e( 'Contact Info', 'abucal' ); ?></span>
					<h3><?php esc_html_e( 'Reach Our Team', 'abucal' ); ?></h3>

					<div class="info-row">
						<span class="info-label"><?php esc_html_e( 'Phone', 'abucal' ); ?></span>
						<a href="tel:+971566654326">+971 56 665 4326</a>
						<a href="tel:+97124567890">+971 2 456 7890</a>
					</div>
					<div class="info-row">
						<span class="info-label"><?php esc_html_e( 'Email', 'abucal' ); ?></span>
						<a href="mailto:info@abucal.ae">info@abucal.ae</a>
					</div>
					<div class="info-row">
						<span class="info-label"><?php esc_html_e( 'Address', 'abucal' ); ?></span>
						<address>Building No. 79, Musaffah,<br>MUSAFFAH 38, Abu Dhabi,<br>United Arab Emirates</address>
					</div>
					<div class="info-row">
						<span class="info-label"><?php esc_html_e( 'Working Hours', 'abucal' ); ?></span>
						<span><?php esc_html_e( 'Mon–Sat: 08:30 – 18:00', 'abucal' ); ?></span>
					</div>
				</div>

				<form class="glass card contact-form reveal" action="mailto:info@abucal.ae" method="post" enctype="text/plain">
					<h3><?php esc_html_e( 'Send Enquiry', 'abucal' ); ?></h3>
					<div class="field"><input type="text" name="name" placeholder="<?php esc_attr_e( 'Full Name', 'abucal' ); ?>" required></div>
					<div class="field"><input type="email" name="email" placeholder="<?php esc_attr_e( 'Email Address', 'abucal' ); ?>" required></div>
					<div class="field"><input type="tel" name="phone" placeholder="<?php esc_attr_e( 'Phone Number', 'abucal' ); ?>"></div>
					<div class="field"><textarea name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your requirements', 'abucal' ); ?>" required></textarea></div>
					<button type="submit" class="btn btn-primary btn-full"><?php esc_html_e( 'Send Your Enquiry', 'abucal' ); ?></button>
				</form>
			</div>

			<!-- Map -->
			<div class="contact-map glass reveal">
				<iframe
					title="<?php esc_attr_e( 'Abu Dhabi Calibration location', 'abucal' ); ?>"
					src="https://www.google.com/maps?q=Musaffah%20M-38%20Abu%20Dhabi&output=embed"
					width="100%" height="380" style="border:0;" allowfullscreen loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
