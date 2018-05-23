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

	<div id="primary" class="home content-area">
		<main id="main" class="site-main" role="main">

			<section class="front-page-banner">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inhabitent-logo-full.svg" alt="Inhabitent logo"/></a>
			</section><!--banner-->

			<section class="front shop container">
				<h2>SHOP STUFF</h2>	
				<div class="product-container">
					<article class="single-product-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/do.svg" alt="orange-paper-map"/>
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<p>
							<a class="button-green" href="http://">do stuff</a>
						</p>
					</article>
					<article class="single-product-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/eat.svg" alt="orange-mug"/>
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<p>
							<a class="button-green" href="http://">eat stuff</a>
						</p>
					</article>
					<article class="single-product-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sleep.svg" alt="orange-sleeping-bag"/>
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<p>
							<a class="button-green" href="http://">sleep stuff</a>
						</p>
					</article>
					<article class="single-product-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wear.svg" alt="orange-tuk"/>
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<p>
							<a class="button-green" href="http://">wear stuff</a>
						</p>
						</article>
					</div>


			</section><!--shop-->

			<section class="front blog container">
				<h2>INHABITENT JOURNAL</h2>
				<div class="blog-posts-container">
					<!-- // posts loop. I am checking if this can display 3 posts with clickable thumbnail -->
					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post();?>

					<article class="blog-posts-single">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('')?></a>
							<div class="blog-posts-single-text">
								<div class="entry-meta">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
								</div><!-- .entry-meta -->
								<div class="blog-post-title">
									<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
								</div><!--blog-posts-title-->
								<div>
									<a class="button-black-border" href="<?php the_permalink() ?>">read entry</a>
								</div><!--blog-posts-title-->
							</div><!--blog-posts-single-text-->
					</article><!--blog-posts-single-->

				<?php
					endwhile; wp_reset_postdata(); ?>
				</div><!--blog-posts-->
					
			</section><!--blog-->

			<section class="front adventures container">
			<h2>LATEST ADVENTURES</h2>
			
				<div class="adventures-posts-container">
					<article class="adventures-posts-single a">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/canoe-girl.jpg" alt="girl-in-the-canoe"/>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('')?></a>
							<div class="adventures-posts-single-text">
								<div class="adventures-post-title">
									<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
								</div><!--blog-posts-title-->
								<div class="adventures-post-button">
									<a href="<?php the_permalink() ?>">read more</a>
								</div><!--blog-posts-title-->
							</div><!--blog-posts-single-text-->
					</article><!--blog-posts-single-->
					<article class="adventures-posts-single">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/beach-bonfire.jpg" alt="bonfire-on-the-beach"/>
					</article>
					<article class="adventures-posts-single">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mountain-hikers.jpg" alt="people-on-the-moutain-trail"/>
					</article>
					<article class="adventures-posts-single">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/night-sky.jpg" alt="sky-and-stars-at-night"/>
					</article>

				</div><!--adventures-posts-container-->	


          <div class="adventures-button"><a href=<?php echo get_post_type_archive_link( 'adventure' ) ?>>more adventure</a>
				</div>
			</section><!--adventures-->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>