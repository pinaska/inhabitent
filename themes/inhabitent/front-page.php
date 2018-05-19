<?php
/**
 * The front page template file
 *
 * 
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Inhabitent_Theme
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>

	<!-- <div id="primary" class="content-area"> checking if the side can be full-width-->
	<div>
		<!-- <main id="main" class="site-main" role="main"> checking if the side can be full-width-->
		<main>
		
		<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>

			<section class="front-page-banner">
				<img src="" alt="">
			</section><!--banner-->

			<section class="shop container">
				<h2>SHOP STUFF</h2>	
			</section><!--shop-->

			<section class="blog container">
				<h2>INHABITENT JOURNAL</h2>
				<div class="blog-posts-container">
					<!-- // posts loop. I am checking if this can display 3 posts with clickable thumbnail -->
					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post();?>

				<div class="blog-posts-single"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('')?></a></div><!--blog-posts-single-->
				<?php
					endwhile; wp_reset_postdata(); ?>
				</div><!--blog-posts-->
					
			</section><!--blog-->

			<section class="adventures container">
			<h2>LATEST ADVENTURES</h2>

			</section><!--adventures-->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>