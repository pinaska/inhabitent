<?php
/**
 * The template for displaying archive adventures page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header container">
			<h1 class="page-title"> LATEST ADVENTURES </h1>


			</header><!-- .page-header -->
			<div class="adventure-grid container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
                <div class="adventure-grid-item">
						<div class="product-item-thumbnail">
							<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'large' ); ?></a>
                        </div>
                        

              <div class="adventure-item-info">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <a class="adventures-post-button" href=<?php echo get_permalink() ?>>read more</a>
              </div>
					
					
					</div>
				<?php endwhile; ?>
			</div><!--end of adventures grid-->	

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>