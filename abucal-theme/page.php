<?php
/**
 * Single page template.
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
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		</div>
	</div>
	<?php
endwhile;

get_footer();
