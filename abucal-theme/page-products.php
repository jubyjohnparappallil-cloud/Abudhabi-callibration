<?php
/**
 * Template Name: Products Page
 * A designed Products layout for Abu Dhabi Calibration.
 *
 * @package AbuCal
 */

get_header();

$products = array(
	array( '🌡️', 'Temperature and Humidity Data Logger', 'temperature-and-humidity-data-logger' ),
	array( '📦', 'Single-Use Data Logger', 'single-use-data-logger' ),
	array( '🔁', 'Reusable (Multi-Use) Data Loggers', 'reusable-multi-use-data-loggers' ),
	array( '📡', 'Real-Time (GSM/GPRS) Data Loggers', 'real-time-gsm-gprs-data-loggers' ),
	array( '🔌', 'USB PDF Data Loggers', 'usb-pdf-data-loggers' ),
	array( '📶', 'Bluetooth-Enabled Data Loggers', 'bluetooth-enabled-data-loggers' ),
	array( '❄️', 'Dry Ice / Ultra Low-Temperature Data Loggers', 'dry-ice-ultra-low-temperature-data-loggers' ),
	array( '🏭', 'Room Pressure Monitoring System', 'room-pressure-monitoring-system' ),
	array( '💧', 'Water Leakage Monitoring System', 'water-leakage-monitoring-system' ),
	array( '🟢', 'CO Sensor System', 'co-sensor-system' ),
);
?>

<main>
	<section class="page-hero">
		<div class="container">
			<div class="page-hero-inner reveal">
				<span class="eyebrow"><?php esc_html_e( 'Our Products', 'abucal' ); ?></span>
				<h1><?php esc_html_e( 'Monitoring & Data Logging Solutions', 'abucal' ); ?></h1>
				<p><?php esc_html_e( 'A complete range of data loggers and monitoring systems supplied and supported across Abu Dhabi and the UAE.', 'abucal' ); ?></p>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="services-grid">
				<?php foreach ( $products as $p ) : ?>
					<a class="glass card service-card reveal" href="<?php echo esc_url( home_url( '/' . $p[2] . '/' ) ); ?>">
						<div class="service-icon"><?php echo esc_html( $p[0] ); ?></div>
						<h3><?php echo esc_html( $p[1] ); ?></h3>
						<p><?php esc_html_e( 'Reliable, accurate monitoring for your industry.', 'abucal' ); ?></p>
						<span class="card-link"><?php esc_html_e( 'Learn more →', 'abucal' ); ?></span>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="leading-card glass reveal">
				<span class="eyebrow"><?php esc_html_e( 'Need Help Choosing?', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Talk to Our Product Specialists', 'abucal' ); ?></h2>
				<p><?php esc_html_e( 'Not sure which monitoring solution fits your needs? Our team will help you select the right product for your industry and compliance requirements.', 'abucal' ); ?></p>
				<div class="leading-actions">
					<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Contact Us', 'abucal' ); ?></a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
