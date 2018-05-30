<?php
/**
 * The template for displaying all product type custom posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-product-img">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
				
			<div class="single-product-content">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p class="price"><?php echo CFS()->get( 'price' ); ?></p>
				<?php the_content(); ?>	

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
		</div><!--.single-product-content-->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>