<?php
/**
 * Single post / service template.
 *
 * @package AbuCal
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<div class="page-content">
		<div class="container">
			<article class="content-wrap glass reveal">
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="post-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></div>
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
				<?php if ( has_post_thumbnail() ) : ?>
					<p><?php the_post_thumbnail( 'large' ); ?></p>
				<?php endif; ?>
				<?php the_content(); ?>
			</article>
		</div>
	</div>
	<?php
endwhile;

get_footer();
