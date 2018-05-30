<?php
/**
 * The template for displaying all adventure type custom posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            
				<?php the_post_thumbnail( 'extra large' ); ?>
			
                <div class="single-adventure-text container">
			        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-meta">
                 <?php red_starter_posted_by(); ?>
            </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
            <?php the_content(); ?>
            </div>

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
</div><!--end of single-adventure-text-->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>