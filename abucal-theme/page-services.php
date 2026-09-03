<?php
/**
 * Template Name: Services Page
 * A designed Services layout for Abu Dhabi Calibration.
 *
 * @package Abu Dhabi Calibration
 */

get_header();

$capabilities = array(
	array( 'pressure.jpg', 'Pressure Calibration', 'pressure-calibration' ),
	array( 'electrical.jpg', 'Electrical Calibration', 'electrical-calibration' ),
	array( 'temperature.jpg', 'Temperature & Humidity', 'humidity-and-temperature-calibration' ),
	array( 'gas.jpg', 'Gas Detectors & Alarms', 'gas-detector-calibration' ),
	array( 'mass.jpg', 'Mass and Force', 'mass-and-force-calibration' ),
	array( 'flow.jpg', 'Flow and Volume', 'flow-and-volume-calibration' ),
	array( 'surveying.jpg', 'Surveying Equipments', 'surveying-equipment-calibration' ),
	array( 'linear.jpg', 'Linear Calibration', 'linear-calibration' ),
	array( 'torque.jpg', 'Torque & Other Instruments', 'torque-other-instruments' ),
);
$svc_img_base = get_template_directory_uri() . '/assets/images/services/';
?>

<main>
	<!-- Page hero -->
	<section class="page-hero">
		<div class="container">
			<div class="page-hero-inner reveal">
				<span class="eyebrow"><?php esc_html_e( 'What We Do', 'abucal' ); ?></span>
				<h1><?php esc_html_e( 'Our Calibration Services', 'abucal' ); ?></h1>
				<p><?php esc_html_e( 'We offer a wide range of calibration for the following parameters, all delivered to ISO-certified standards across Abu Dhabi and the UAE.', 'abucal' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Capabilities grid -->
	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'Our Calibration Capabilities', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Precision Across Every Parameter', 'abucal' ); ?></h2>
			</div>
			<div class="services-grid">
				<?php foreach ( $capabilities as $c ) : ?>
					<a class="glass service-photo-card reveal" href="<?php echo esc_url( home_url( '/' . $c[2] . '/' ) ); ?>">
						<div class="service-photo">
							<img src="<?php echo esc_url( $svc_img_base . $c[0] ); ?>" alt="<?php echo esc_attr( $c[1] ); ?>" loading="lazy" />
						</div>
						<div class="service-photo-body">
							<h3><?php echo esc_html( $c[1] ); ?></h3>
							<p><?php echo esc_html( sprintf( __( 'Reliable, traceable %s services tailored to your industry.', 'abucal' ), strtolower( $c[1] ) ) ); ?></p>
							<span class="card-link"><?php esc_html_e( 'Learn more →', 'abucal' ); ?></span>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Contact CTA -->
	<section class="section">
		<div class="container">
			<div class="contact-grid">
				<div class="glass card contact-info reveal">
					<span class="eyebrow"><?php esc_html_e( 'Contact Info', 'abucal' ); ?></span>
					<h3><?php esc_html_e( "We'd Love to Hear From You", 'abucal' ); ?></h3>
					<p><?php esc_html_e( 'We guarantee prompt service and a quick response to every enquiry, by phone or email.', 'abucal' ); ?></p>
					<div class="info-row">
						<span class="info-label"><?php esc_html_e( 'Phone', 'abucal' ); ?></span>
						<a href="tel:+971501234567">+971 50 123 4567</a>
						<a href="tel:+97124567890">+971 2 456 7890</a>
					</div>
					<div class="info-row">
						<span class="info-label"><?php esc_html_e( 'Email', 'abucal' ); ?></span>
						<a href="mailto:info@abucal.ae">info@abucal.ae</a>
					</div>
					<div class="info-row">
						<span class="info-label"><?php esc_html_e( 'Address', 'abucal' ); ?></span>
						<address>Abu Dhabi Calibration Instrumentation &amp; Calibration Services LLC,<br>Mussafah Industrial Area, M-40,<br>Abu Dhabi, United Arab Emirates</address>
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
		</div>
	</section>
</main>

<?php
get_footer();
