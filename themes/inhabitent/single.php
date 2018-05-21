<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="social-buttons">
				<div type="button" class="button-black-border">
					<i class="fab fa-facebook" aria-hidden="true"></i>
					like
				</div>
				<div type="button" class="button-black-border">
					<i class="fab fa-twitter" aria-hidden="true"></i>
					tweet
				</div>
				<div type="button" class="button-black-border">
					<i class="fab fa-pinterest" aria-hidden="true"></i>
					pin
				</div>
			</div>


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
