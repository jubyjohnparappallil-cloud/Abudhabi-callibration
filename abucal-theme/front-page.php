<?php
/**
 * Front page template: the marketing landing page.
 *
 * @package Abu Dhabi Calibration
 */

get_header();

$stats = array(
	array( '7+', __( 'Years Experience', 'abucal' ) ),
	array( 'ISO', __( '9001:2015 Certified', 'abucal' ) ),
	array( '2k+', __( 'Instruments Calibrated', 'abucal' ) ),
);

$why = array(
	__( 'Accredited laboratory & traceable standards', 'abucal' ),
	__( 'Fast turnaround, minimal downtime', 'abucal' ),
	__( 'On-site & in-lab calibration options', 'abucal' ),
	__( 'Dedicated support across the UAE', 'abucal' ),
);

$industries = array(
	__( 'Oil & Gas', 'abucal' ),
	__( 'Healthcare', 'abucal' ),
	__( 'Manufacturing', 'abucal' ),
	__( 'Energy & Utilities', 'abucal' ),
	__( 'Aerospace', 'abucal' ),
	__( 'Construction', 'abucal' ),
	__( 'Food & Beverage', 'abucal' ),
	__( 'Pharmaceuticals', 'abucal' ),
);

// Fallback services if no "Service" posts exist yet.
$default_services = array(
	array( '⚡', __( 'Electrical Calibration', 'abucal' ), __( 'Multimeters, oscilloscopes, power sources and more, calibrated to national standards.', 'abucal' ) ),
	array( '🌡️', __( 'Temperature Calibration', 'abucal' ), __( 'Thermocouples, RTDs, thermometers and thermal chambers with precise traceability.', 'abucal' ) ),
	array( '📈', __( 'Pressure Calibration', 'abucal' ), __( 'Gauges, transmitters and transducers calibrated for accuracy and safety.', 'abucal' ) ),
	array( '📐', __( 'Dimensional Calibration', 'abucal' ), __( 'Calipers, micrometers, gauge blocks and precision measuring instruments.', 'abucal' ) ),
	array( '⚖️', __( 'Mass & Weight', 'abucal' ), __( 'Balances, weighing scales and standard weights verified to strict tolerances.', 'abucal' ) ),
	array( '💨', __( 'Flow & Gas Detection', 'abucal' ), __( 'Flow meters and gas detectors calibrated for critical industrial safety.', 'abucal' ) ),
);
?>

<main>
	<!-- Hero (full-screen image, header overlays it) -->
	<?php $hero_bg = get_template_directory_uri() . '/assets/images/hero.jpg'; ?>
	<section class="hero hero--fullscreen" id="home" style="background-image: linear-gradient(120deg, rgba(15,36,71,0.82), rgba(15,36,71,0.45)), url('<?php echo esc_url( $hero_bg ); ?>');">
		<div class="container">
			<div class="hero-inner reveal">
				<span class="eyebrow eyebrow--light"><?php esc_html_e( 'Precise Calibration in Abu Dhabi', 'abucal' ); ?></span>
				<h1><?php esc_html_e( 'Testing & Calibration', 'abucal' ); ?><br><span class="grad-text"><?php esc_html_e( 'Services in the UAE', 'abucal' ); ?></span></h1>
				<p><?php esc_html_e( 'Our goal is to let you manage your business without worrying about errors in the machine. ISO-certified calibration you can trust.', 'abucal' ); ?></p>
				<div class="hero-actions">
					<a href="#contact" class="btn btn-primary"><?php esc_html_e( 'Get Free Quote', 'abucal' ); ?></a>
					<a href="#services" class="btn btn-glass"><?php esc_html_e( 'Know More', 'abucal' ); ?></a>
				</div>
				<div class="hero-stats hero-stats--light">
					<?php foreach ( $stats as $s ) : ?>
						<div class="stat"><strong><?php echo esc_html( $s[0] ); ?></strong><span><?php echo esc_html( $s[1] ); ?></span></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<a href="#about" class="hero-scroll" aria-label="<?php esc_attr_e( 'Scroll down', 'abucal' ); ?>"><span></span></a>
	</section>

	<!-- What We Offer: icon feature cards -->
	<section class="section" id="offer">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'What We Offer', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Complete Calibration & Testing Solutions', 'abucal' ); ?></h2>
			</div>
			<div class="offer-grid">
				<div class="offer-card glass reveal">
					<div class="offer-icon">
						<svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<path d="M20 8 L20 40 M28 8 L12 40"/><circle cx="46" cy="20" r="10"/><path d="M46 12v4 M46 24v4 M38 20h4 M50 20h4"/><path d="M10 48h44 M14 54v-6 M22 54v-6 M30 54v-6 M38 54v-6 M46 54v-6"/>
						</svg>
					</div>
					<h3><?php esc_html_e( 'Calibration', 'abucal' ); ?></h3>
					<p><?php esc_html_e( 'Accurate, traceable calibration for pressure, temperature, electrical, mass, flow and more.', 'abucal' ); ?></p>
					<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Read More', 'abucal' ); ?></a>
				</div>

				<div class="offer-card glass reveal">
					<div class="offer-icon">
						<svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<path d="M14 6h26l10 10v42H14z"/><path d="M40 6v10h10"/><path d="M20 24h8 M20 32h8 M20 40h6"/><circle cx="42" cy="40" r="9"/><path d="M38 40l3 3 5-6"/>
						</svg>
					</div>
					<h3><?php esc_html_e( 'Testing', 'abucal' ); ?></h3>
					<p><?php esc_html_e( 'Reliable testing and PAT services to keep your equipment safe and compliant.', 'abucal' ); ?></p>
					<a href="<?php echo esc_url( home_url( '/portable-appliance-testing-pat-test/' ) ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Read More', 'abucal' ); ?></a>
				</div>

				<div class="offer-card glass reveal">
					<div class="offer-icon">
						<svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<path d="M32 10 L54 20 L32 30 L10 20 Z"/><path d="M18 25v12c0 4 6 8 14 8s14-4 14-8V25"/><path d="M54 20v12"/>
						</svg>
					</div>
					<h3><?php esc_html_e( 'Training', 'abucal' ); ?></h3>
					<p><?php esc_html_e( 'Practical HSE and instrument training to empower your team with the right skills.', 'abucal' ); ?></p>
					<a href="<?php echo esc_url( home_url( '/health-and-safety-hse-trainings/' ) ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Read More', 'abucal' ); ?></a>
				</div>

				<div class="offer-card glass reveal">
					<div class="offer-icon">
						<svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<rect x="12" y="14" width="40" height="28" rx="3"/><path d="M20 24h10 M20 32h16"/><path d="M24 50h16 M32 42v8"/>
						</svg>
					</div>
					<h3><?php esc_html_e( 'Monitoring Products', 'abucal' ); ?></h3>
					<p><?php esc_html_e( 'Data loggers and monitoring systems for temperature, humidity, pressure and gas.', 'abucal' ); ?></p>
					<a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Read More', 'abucal' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<!-- About -->
	<?php $abucal_about_img = get_template_directory() . '/assets/images/calibration.jpg'; ?>
	<section class="section" id="about">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'About Abu Dhabi Calibration', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Abu Dhabi Calibration Services', 'abucal' ); ?></h2>
			</div>

			<div class="about-feature">
				<div class="about-text reveal">
					<p><?php esc_html_e( 'Abu Dhabi Calibration Instrumentation and Calibration Services LLC is a leading provider of professional calibration services in the UAE, offering precise and reliable solutions to meet the needs of various industries. Our commitment to excellence and precision ensures that businesses across the UAE receive top-quality services tailored to maintain equipment performance and regulatory compliance. As one of the most trusted names in calibration services, we are dedicated to helping industries achieve operational efficiency and accurate measurement results.', 'abucal' ); ?></p>
					<p><?php esc_html_e( 'At Abu Dhabi Calibration, we offer a comprehensive range of calibration services designed to cater to the unique requirements of different sectors. Whether it is electrical calibration, pressure calibration, or temperature calibration, our services ensure that your equipment functions at its best. With advanced tools and skilled professionals, we provide reliable calibration services in the UAE to industries such as oil and gas, manufacturing, healthcare, and energy. Our ability to customize our solutions sets us apart from other providers of calibration services in Abu Dhabi.', 'abucal' ); ?></p>

					<div class="ring-block">
						<span class="ring-label">📞 <?php esc_html_e( 'Give us a ring!', 'abucal' ); ?></span>
						<a class="ring-number" href="tel:+97124567890">+971 (2) 456 7890</a>
						<a class="ring-number" href="tel:+971566654326">+971 56 665 4326</a>
					</div>
				</div>
				<div class="about-photo glass reveal">
					<?php if ( file_exists( $abucal_about_img ) ) : ?>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/calibration.jpg' ); ?>" alt="<?php esc_attr_e( 'Abu Dhabi Calibration calibration services in Abu Dhabi', 'abucal' ); ?>" loading="lazy" />
					<?php endif; ?>
				</div>
			</div>

			<div class="glass card about-card reveal" style="margin-top:24px;">
				<h3><?php esc_html_e( 'Why Choose Us', 'abucal' ); ?></h3>
				<ul class="check-list check-list-cols">
					<?php foreach ( $why as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>

	<!-- ISO-Certified Partner -->
	<section class="section" id="quality">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'Quality & Compliance', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Your ISO-Certified Calibration Partner', 'abucal' ); ?></h2>
			</div>
			<div class="quality-grid">
				<div class="glass card reveal">
					<div class="service-icon">🎯</div>
					<h3><?php esc_html_e( 'Precision You Can Rely On', 'abucal' ); ?></h3>
					<p><?php esc_html_e( 'Our focus on quality is at the core of everything we do. All our calibration services are conducted in compliance with strict ISO standards, including ISO 9001:2015 certification. This ensures that your instruments are calibrated to the highest level of accuracy, reducing errors and enhancing operational performance. Businesses rely on our calibration services in the UAE to minimize downtime, improve efficiency, and maintain compliance with industry regulations.', 'abucal' ); ?></p>
				</div>
				<div class="glass card reveal">
					<div class="service-icon">🏆</div>
					<h3><?php esc_html_e( 'Tailored to Your Industry', 'abucal' ); ?></h3>
					<p><?php esc_html_e( 'What makes Abu Dhabi Calibration unique is our ability to deliver tailored calibration services that address the specific challenges faced by UAE industries. From ensuring precision in healthcare equipment to maintaining safety in oil and gas operations, our services are crafted to meet the highest standards. We aim to be the go-to provider for calibration services in Abu Dhabi and across the UAE, offering solutions that businesses can trust for consistent and reliable performance.', 'abucal' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Leading the Way -->
	<section class="section" id="leading">
		<div class="container">
			<div class="leading-card glass reveal">
				<span class="eyebrow"><?php esc_html_e( 'Why Abu Dhabi Calibration', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Leading the Way in UAE Calibration Services', 'abucal' ); ?></h2>
				<p><?php esc_html_e( 'Partnering with Abu Dhabi Calibration means working with a team that prioritizes accuracy and customer satisfaction. Our advanced equipment, combined with our expertise, ensures that our calibration services consistently exceed expectations. By choosing us, you gain access to a trusted provider that understands the critical role calibration services play in achieving operational success. We are proud to serve as one of the most reliable names in calibration services in the UAE.', 'abucal' ); ?></p>
				<p><?php esc_html_e( 'At Abu Dhabi Calibration, we believe that accurate calibration is the foundation of industrial success. Our calibration services are designed not only to meet but exceed your expectations, providing long-term benefits for your business. Whether you need calibration services in Abu Dhabi or elsewhere in the UAE, our team is ready to support your needs. Contact us today to learn how our trusted calibration services can elevate your operations and ensure equipment accuracy.', 'abucal' ); ?></p>
				<div class="leading-actions">
					<a href="#contact" class="btn btn-primary"><?php esc_html_e( 'Talk to Our Experts', 'abucal' ); ?></a>
					<button type="button" class="btn btn-ghost" id="openChatBtn"><?php esc_html_e( 'Chat With Us', 'abucal' ); ?></button>
				</div>
			</div>
		</div>
	</section>

	<!-- Parallax band: sticky text over fixed image -->
	<?php $parallax_bg = get_template_directory_uri() . '/assets/images/slide2.jpg'; ?>
	<section class="parallax" style="background-image: linear-gradient(120deg, rgba(15,36,71,0.85), rgba(26,58,107,0.55)), url('<?php echo esc_url( $parallax_bg ); ?>');">
		<div class="container parallax-inner reveal">
			<span class="eyebrow eyebrow--light"><?php esc_html_e( 'Trusted Precision', 'abucal' ); ?></span>
			<h2><?php esc_html_e( 'Measurement You Can Rely On, Every Single Time', 'abucal' ); ?></h2>
			<p><?php esc_html_e( 'From oil & gas to healthcare, industries across the UAE trust Abu Dhabi Calibration for accurate, ISO-certified calibration and testing.', 'abucal' ); ?></p>
			<div class="parallax-stats">
				<div class="pstat"><strong>7+</strong><span><?php esc_html_e( 'Years Experience', 'abucal' ); ?></span></div>
				<div class="pstat"><strong>2000+</strong><span><?php esc_html_e( 'Instruments Calibrated', 'abucal' ); ?></span></div>
				<div class="pstat"><strong>50+</strong><span><?php esc_html_e( 'Industries Served', 'abucal' ); ?></span></div>
				<div class="pstat"><strong>100%</strong><span><?php esc_html_e( 'Traceable Results', 'abucal' ); ?></span></div>
			</div>
			<a href="#contact" class="btn btn-glass"><?php esc_html_e( 'Get Free Quote', 'abucal' ); ?></a>
		</div>
	</section>

	<!-- Services -->
	<section class="section" id="services">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'What We Do', 'abucal' ); ?></span>
				<h2><?php esc_html_e( 'Comprehensive Calibration Services', 'abucal' ); ?></h2>
				<p class="section-sub"><?php esc_html_e( 'Tailored solutions engineered for the unique requirements of every sector.', 'abucal' ); ?></p>
			</div>
			<div class="services-grid">
				<?php
				$service_query = new WP_Query(
					array(
						'post_type'      => 'service',
						'posts_per_page' => 6,
					)
				);

				if ( $service_query->have_posts() ) :
					while ( $service_query->have_posts() ) :
						$service_query->the_post();
						$icon = get_post_meta( get_the_ID(), 'service_icon', true );
						?>
						<article class="glass card service-card reveal">
							<div class="service-icon"><?php echo esc_html( $icon ? $icon : '🔧' ); ?></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					foreach ( $default_services as $s ) :
						?>
						<article class="glass card service-card reveal">
							<div class="service-icon"><?php echo esc_html( $s[0] ); ?></div>
							<h3><?php echo esc_html( $s[1] ); ?></h3>
							<p><?php echo esc_html( $s[2] ); ?></p>
						</article>
						<?php
					endforeach;
				endif;
				?>
			</div>
		</div>
	</section>

	<!-- Industries -->
	<section class="section" id="industries">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'Industries We Serve', 'abucal' ); ?></span>
				<h2><?php esc_html_e( "Trusted Across Abu Dhabi's Key Sectors", 'abucal' ); ?></h2>
			</div>
			<div class="industries-grid">
				<?php foreach ( $industries as $ind ) : ?>
					<div class="glass pill reveal"><?php echo esc_html( $ind ); ?></div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Auto-running image marquee -->
	<?php
	$marquee = array( 'electrical.jpg', 'pressure.jpg', 'temperature.jpg', 'gas.jpg', 'mass.jpg', 'surveying.jpg', 'linear.jpg', 'flow.jpg' );
	$marquee_imgs = array();
	foreach ( $marquee as $m ) {
		if ( file_exists( get_template_directory() . '/assets/images/services/' . $m ) ) {
			$marquee_imgs[] = get_template_directory_uri() . '/assets/images/services/' . $m;
		}
	}
	if ( ! empty( $marquee_imgs ) ) :
		?>
		<section class="marquee-section reveal" aria-label="<?php esc_attr_e( 'Our work gallery', 'abucal' ); ?>">
			<div class="marquee">
				<div class="marquee-track">
					<?php
					// Print twice for a seamless loop.
					for ( $r = 0; $r < 2; $r++ ) :
						foreach ( $marquee_imgs as $src ) :
							?>
							<div class="marquee-item"><img src="<?php echo esc_url( $src ); ?>" alt="<?php esc_attr_e( 'Calibration work', 'abucal' ); ?>" loading="lazy"></div>
							<?php
						endforeach;
					endfor;
					?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Contact -->
	<section class="section" id="contact">
		<div class="container">
			<div class="section-head reveal">
				<span class="eyebrow"><?php esc_html_e( 'Get In Touch', 'abucal' ); ?></span>
				<h2><?php esc_html_e( "We'd Love to Hear From You", 'abucal' ); ?></h2>
				<p class="section-sub"><?php esc_html_e( 'Prompt service and quick responses to every enquiry, by phone or email.', 'abucal' ); ?></p>
			</div>
			<div class="contact-grid">
				<div class="glass card contact-info reveal">
					<h3><?php esc_html_e( 'Contact Info', 'abucal' ); ?></h3>
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
						<address>Abu Dhabi Calibration Instrumentation & Calibration Services LLC,<br>Mussafah Industrial Area, M-40,<br>Abu Dhabi, United Arab Emirates</address>
					</div>
				</div>

				<?php
				// Prefer Contact Form 7 if installed; otherwise show a mailto fallback form.
				if ( shortcode_exists( 'contact-form-7' ) && get_option( 'abucal_cf7_id' ) ) {
					echo '<div class="glass card contact-form reveal">';
					echo do_shortcode( '[contact-form-7 id="' . esc_attr( get_option( 'abucal_cf7_id' ) ) . '"]' );
					echo '</div>';
				} else {
					?>
					<form class="glass card contact-form reveal" action="mailto:info@abucal.ae" method="post" enctype="text/plain">
						<h3><?php esc_html_e( 'Send Enquiry', 'abucal' ); ?></h3>
						<div class="field"><input type="text" name="name" placeholder="<?php esc_attr_e( 'Full Name', 'abucal' ); ?>" required></div>
						<div class="field"><input type="email" name="email" placeholder="<?php esc_attr_e( 'Email Address', 'abucal' ); ?>" required></div>
						<div class="field"><input type="tel" name="phone" placeholder="<?php esc_attr_e( 'Phone Number', 'abucal' ); ?>"></div>
						<div class="field"><textarea name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your requirements', 'abucal' ); ?>" required></textarea></div>
						<button type="submit" class="btn btn-primary btn-full"><?php esc_html_e( 'Send Your Enquiry', 'abucal' ); ?></button>
						<p class="form-note"><?php esc_html_e( 'Tip: install Contact Form 7 for a proper enquiry form.', 'abucal' ); ?></p>
					</form>
					<?php
				}
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
