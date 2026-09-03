<?php
/**
 * Template Name: Inner Page (Banner)
 * Banner hero + quick request bar + page content.
 * Used for service and product detail pages.
 *
 * @package AbuCal
 */

get_header();

$banner = get_template_directory_uri() . '/assets/images/inner-banner.jpg';
// Fall back to an existing image if the dedicated banner isn't present.
if ( ! file_exists( get_template_directory() . '/assets/images/inner-banner.jpg' ) ) {
	$banner = get_template_directory_uri() . '/assets/images/surveying.jpg';
}
?>

<main>
	<?php while ( have_posts() ) : the_post(); ?>

		<!-- Banner hero -->
		<section class="inner-banner" style="background-image: linear-gradient(120deg, rgba(15,36,71,0.78), rgba(26,58,107,0.5)), url('<?php echo esc_url( $banner ); ?>');">
			<div class="container">
				<div class="inner-banner-inner reveal">
					<?php
					// Breadcrumb-style parent link.
					$parent_id = wp_get_post_parent_id( get_the_ID() );
					if ( $parent_id ) :
						?>
						<span class="inner-crumb"><a href="<?php echo esc_url( get_permalink( $parent_id ) ); ?>"><?php echo esc_html( get_the_title( $parent_id ) ); ?></a> &nbsp;/&nbsp; <?php the_title(); ?></span>
					<?php endif; ?>
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</section>

		<!-- Quick request bar -->
		<div class="container">
			<div class="quick-request glass reveal">
				<div class="quick-request-head">
					<span class="eyebrow"><?php esc_html_e( 'Quick Service Request', 'abucal' ); ?></span>
					<h2><?php esc_html_e( 'Send Inspection Request', 'abucal' ); ?></h2>
				</div>
				<form class="quick-request-form" action="mailto:info@abucal.ae" method="post" enctype="text/plain">
					<input type="tel" name="phone" placeholder="<?php esc_attr_e( 'Phone number', 'abucal' ); ?>" required>
					<input type="text" name="location" placeholder="<?php esc_attr_e( 'Enter the location', 'abucal' ); ?>">
					<input type="hidden" name="service" value="<?php echo esc_attr( get_the_title() ); ?>">
					<button type="submit" class="btn btn-primary"><?php esc_html_e( 'Send', 'abucal' ); ?></button>
				</form>
			</div>
		</div>

		<!-- Page content -->
		<section class="page-content">
			<div class="container">
				<article class="content-wrap glass reveal">
					<?php the_content(); ?>
				</article>
			</div>
		</section>

	<?php endwhile; ?>
</main>

<?php
get_footer();
