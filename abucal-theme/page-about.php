<?php
/**
 * Template Name: About Page
 * A designed About Us layout for Abu Dhabi Calibration.
 *
 * @package Abu Dhabi Calibration
 */

get_header();

$about_img   = get_template_directory() . '/assets/images/about.jpg';
$about_img_u = get_template_directory_uri() . '/assets/images/about.jpg';

$why = array(
	array( '📜', __( 'ISO Certified', 'abucal' ), __( 'Compliant with ISO/IEC 17025:2017 & ISO 9001:2015, so every calibration, test, and training meets the highest international standards.', 'abucal' ) ),
	array( '🎯', __( 'Tailored Solutions', 'abucal' ), __( "Customized calibration and maintenance services built around the unique needs of the UAE's dynamic industries.", 'abucal' ) ),
	array( '🔧', __( 'Comprehensive Services', 'abucal' ), __( 'From supply and installation to calibration, maintenance, repair, and expert training — a complete lifecycle solution.', 'abucal' ) ),
);

$industries = array(
	'Oil and Gas', 'Marine', 'Manufacturing', 'Water Treatment', 'Defence and Aviation',
	'Power and Energy', 'Bio Medical', 'Pharmaceutical', 'Refineries', 'Hotel Industry',
	'Engineering & Contracting', 'Cement Manufacturing', 'Food & Dairy Manufacturing',
);
?>

<main>
	<!-- Page hero -->
	<section class="page-hero">
		<div class="container">
			<div class="page-hero-inner reveal">
				<span class="eyebrow"><?php esc_html_e( 'Calibration Company in Abu Dhabi – UAE', 'abucal' ); ?></span>
				<h1><?php esc_html_e( 'About Abu Dhabi Calibration', 'abucal' ); ?></h1>
				<p><?php esc_html_e( 'A leading calibration company in Abu Dhabi, delivering precise, reliable, and comprehensive services across every major industry in the UAE.', 'abucal' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Intro: text + image -->
	<section class="section">
		<div class="container">
			<div class="about-feature">
				<div class="about-text reveal">
					<span class="eyebrow"><?php esc_html_e( 'Who We Are', 'abucal' ); ?></span>
					<h2><?php esc_html_e( 'Precision You Can Depend On', 'abucal' ); ?></h2>
					<p><?php esc_html_e( 'Abu Dhabi Calibration Instrumentation and Calibration Services LLC is a leading calibration company in Abu Dhabi – UAE, dedicated to delivering precise, reliable, and comprehensive calibration services across various industries. With an unwavering focus on quality, we ensure your equipment maintains peak performance and complies with regulatory standards.', 'abucal' ); ?></p>
					<p><?php esc_html_e( 'As one of the best calibration companies in the UAE, we serve key sectors such as oil and gas, manufacturing, healthcare, marine, and more.', 'abucal' ); ?></p>
				</div>
				<?php if ( file_exists( $about_img ) ) : ?>
					<div class="about-photo glass reveal">
						<img src="<?php echo esc_url( $about_img_u ); ?>" alt="<?php esc_attr_e( 'Abu Dhabi Calibration calibration company in Abu Dhabi', 'abucal' ); ?>" loading="lazy" />
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Mission -->
	<section class="section">
		<div class="container">
			<div class="mission-card glass reveal">
				<span class="eyebrow"><?php esc_html_e( 'Our Mission', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Empowering Industries to Achieve Excellence', 'abucal' ); ?></h2>
				<p><?php esc_html_e( 'At Abu Dhabi Calibration, our mission is to provide exceptional calibration services that empower industries to achieve operational excellence. We aim to be the go-to calibration company in Abu Dhabi and across the UAE, offering solutions that guarantee accuracy, safety, and reliability for all your instruments.', 'abucal' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Why choose us -->
	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'Why Choose Abu Dhabi Calibration', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Trusted Across Abu Dhabi & the UAE', 'abucal' ); ?></h2>
			</div>
			<div class="services-grid">
				<?php foreach ( $why as $w ) : ?>
					<article class="glass card service-card reveal">
						<div class="service-icon"><?php echo esc_html( $w[0] ); ?></div>
						<h3><?php echo esc_html( $w[1] ); ?></h3>
						<p><?php echo esc_html( $w[2] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Industries -->
	<section class="section">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'Sectors', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Industries We Serve', 'abucal' ); ?></h2>
			</div>
			<div class="industries-grid">
				<?php foreach ( $industries as $ind ) : ?>
					<div class="glass pill reveal"><?php echo esc_html( $ind ); ?></div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Partner CTA -->
	<section class="section">
		<div class="container">
			<div class="leading-card glass reveal">
				<span class="eyebrow"><?php esc_html_e( 'Partner With Us', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Calibration Solutions Built for Your Industry', 'abucal' ); ?></h2>
				<p><?php esc_html_e( "With extensive experience and a steadfast dedication to quality, Abu Dhabi Calibration stands out among calibration companies in Abu Dhabi and across the UAE. Our Quality Management System adheres to ISO/IEC 17025:2017 and ISO 9001:2015, ensuring impartial, reliable, and competent services in every project.", 'abucal' ); ?></p>
				<div class="leading-actions">
					<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Talk to Our Experts', 'abucal' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="btn btn-ghost"><?php esc_html_e( 'View Services', 'abucal' ); ?></a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
