<?php
/**
 * Fallback / blog listing template.
 *
 * @package AbuCal
 */

get_header();
?>

<div class="page-content">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><?php esc_html_e( 'Insights', 'abucal' ); ?></span>
			<h1><?php echo esc_html( is_home() ? __( 'Latest Articles', 'abucal' ) : get_the_archive_title() ); ?></h1>
		</div>

		<?php if ( have_posts() ) : ?>
			<div class="posts-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article class="glass post-card reveal">
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
						<?php endif; ?>
						<div class="body">
							<div class="post-meta"><?php echo esc_html( get_the_date() ); ?></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
						</div>
					</article>
					<?php
				endwhile;
				?>
			</div>

			<div class="pagination">
				<?php echo paginate_links(); ?>
			</div>
		<?php else : ?>
			<div class="content-wrap glass">
				<p><?php esc_html_e( 'No posts found.', 'abucal' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
