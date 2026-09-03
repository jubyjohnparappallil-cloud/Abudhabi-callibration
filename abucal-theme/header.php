<?php
/**
 * Header template.
 *
 * @package AbuCal
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="bg-orbs" aria-hidden="true">
	<span class="orb orb-1"></span>
	<span class="orb orb-2"></span>
	<span class="orb orb-3"></span>
</div>

<div class="topbar glass">
	<div class="container topbar-inner">
		<div class="topbar-item"><span><?php esc_html_e( 'Mon–Sat: 08:30 – 18:00', 'abucal' ); ?></span></div>
		<div class="topbar-item"><a href="mailto:info@abucal.ae">info@abucal.ae</a></div>
		<div class="topbar-item"><a href="tel:+971501234567">+971 50 123 4567</a></div>
	</div>
</div>

<header class="site-header<?php echo is_front_page() ? ' site-header--overlay' : ''; ?>" id="siteHeader">
	<div class="container header-inner">
		<?php if ( has_custom_logo() ) : ?>
			<div class="brand"><?php the_custom_logo(); ?></div>
		<?php else : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<span class="brand-mark">AD</span>
				<span class="brand-text">Abu <strong>Dhabi</strong></span>
			</a>
		<?php endif; ?>

		<nav class="main-nav" id="mainNav" aria-label="<?php esc_attr_e( 'Primary', 'abucal' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => 'abucal_fallback_menu',
				)
			);
			?>
		</nav>

		<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary nav-cta"><?php esc_html_e( 'Get a Quote', 'abucal' ); ?></a>

		<button class="nav-toggle" id="navToggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'abucal' ); ?>" aria-expanded="false">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>
