<?php
/**
 * Abu Dhabi Calibration Calibration theme functions.
 *
 * @package Abu Dhabi Calibration
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

define( 'ABUCAL_VERSION', '2.1.0' );

/**
 * Theme setup: supports, menus, image sizes.
 */
function abucal_setup() {
	add_theme_support( 'title-tag' ); // Lets WP / SEO plugins manage <title>.
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 48,
			'width'       => 160,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'abucal' ),
			'footer'  => __( 'Footer Menu', 'abucal' ),
		)
	);
}
add_action( 'after_setup_theme', 'abucal_setup' );

/**
 * Enqueue styles and scripts.
 */
function abucal_assets() {
	// Google Font.
	wp_enqueue_style(
		'abucal-fonts',
		'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap',
		array(),
		null
	);

	// Main stylesheet (theme root style.css).
	wp_enqueue_style( 'abucal-style', get_stylesheet_uri(), array( 'abucal-fonts' ), ABUCAL_VERSION );

	// Front-end JS (nav toggle + reveal animations).
	wp_enqueue_script( 'abucal-main', get_template_directory_uri() . '/assets/js/main.js', array(), ABUCAL_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'abucal_assets' );

/**
 * Register a "Service" custom post type so services are editable and SEO-friendly.
 */
function abucal_register_services_cpt() {
	$labels = array(
		'name'          => __( 'Services', 'abucal' ),
		'singular_name' => __( 'Service', 'abucal' ),
		'add_new_item'  => __( 'Add New Service', 'abucal' ),
		'edit_item'     => __( 'Edit Service', 'abucal' ),
		'menu_name'     => __( 'Services', 'abucal' ),
	);

	register_post_type(
		'service',
		array(
			'labels'       => $labels,
			'public'       => true,
			'has_archive'  => false,
			'menu_icon'    => 'dashicons-admin-tools',
			'rewrite'      => array( 'slug' => 'service' ),
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest' => true, // Gutenberg + REST support.
		)
	);
}
add_action( 'init', 'abucal_register_services_cpt' );

/**
 * Register widget area for the footer.
 */
function abucal_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'abucal' ),
			'id'            => 'footer-1',
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'abucal_widgets_init' );

/**
 * Fallback menu when no primary menu is assigned.
 */
function abucal_fallback_menu() {
	echo '<ul>';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">About</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">Contact</a></li>';
	echo '</ul>';
}

/**
 * Output JSON-LD LocalBusiness schema in the head.
 * Rank Math / Yoast handle article & breadcrumb schema; this adds the business entity.
 */
function abucal_local_business_schema() {
	if ( ! is_front_page() ) {
		return;
	}
	$schema = array(
		'@context'      => 'https://schema.org',
		'@type'         => 'LocalBusiness',
		'name'          => get_bloginfo( 'name' ),
		'url'           => home_url( '/' ),
		'telephone'     => '+971501234567',
		'priceRange'    => '$$',
		'address'       => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => 'Mussafah Industrial Area, M-40',
			'addressLocality' => 'Abu Dhabi',
			'addressRegion'   => 'Abu Dhabi',
			'addressCountry'  => 'AE',
		),
		'geo'           => array(
			'@type'     => 'GeoCoordinates',
			'latitude'  => 24.453884,
			'longitude' => 54.377343,
		),
		'openingHours'  => 'Mo-Sa 08:30-18:00',
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
}
add_action( 'wp_head', 'abucal_local_business_schema' );

/**
 * Add useful SEO meta only if no SEO plugin (Rank Math/Yoast) is active.
 * Avoids duplicate tags when a plugin already manages meta.
 */
function abucal_basic_meta() {
	if ( defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) ) {
		return;
	}
	if ( is_front_page() ) {
		echo '<meta name="description" content="' . esc_attr__( 'ISO 9001:2015 certified calibration and testing services in Abu Dhabi and across the UAE. Electrical, pressure, temperature and dimensional calibration.', 'abucal' ) . '">' . "\n";
	} elseif ( is_singular() ) {
		$excerpt = wp_strip_all_tags( get_the_excerpt() );
		if ( $excerpt ) {
			echo '<meta name="description" content="' . esc_attr( wp_trim_words( $excerpt, 30 ) ) . '">' . "\n";
		}
	}
	echo '<meta name="geo.region" content="AE-AZ">' . "\n";
	echo '<meta name="geo.placename" content="Abu Dhabi">' . "\n";
}
add_action( 'wp_head', 'abucal_basic_meta', 1 );

/**
 * Custom excerpt length for cards.
 */
function abucal_excerpt_length() {
	return 22;
}
add_filter( 'excerpt_length', 'abucal_excerpt_length' );







