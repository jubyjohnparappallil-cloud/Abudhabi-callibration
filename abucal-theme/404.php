<?php
/**
 * 404 template.
 *
 * @package AbuCal
 */

get_header();
?>

<div class="page-content">
	<div class="container">
		<div class="content-wrap glass reveal" style="text-align:center;">
			<span class="eyebrow"><?php esc_html_e( 'Error 404', 'abucal' ); ?></span>
			<h1><?php esc_html_e( 'Page Not Found', 'abucal' ); ?></h1>
			<p><?php esc_html_e( "The page you're looking for doesn't exist or has been moved.", 'abucal' ); ?></p>
			<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'abucal' ); ?></a></p>
		</div>
	</div>
</div>

<?php
get_footer();
