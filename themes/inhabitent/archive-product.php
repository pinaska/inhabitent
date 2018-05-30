<?php
/**
 * The template for displaying archive shop pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1 class="page-title"> Shop stuff </h1>
			<!-- add extra menu for product taxonomies -->
			<?php wp_nav_menu( array( 'theme_location' => 'product-menu' ) ); ?>


			</header><!-- .page-header -->
			<div class="product-grid container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="product-grid-item">
						<div class="product-item-thumbnail">
							<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'small' ); ?></a>
						</div>
					
						
						<div class="product-item-info">
							<?php the_title( '<p class="entry-title">', '</p>' ); ?>
							<p class="price dots"></p>
							<p class="price"><?php echo CFS()->get( 'price' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			</div><!--end of products grid-->	

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>