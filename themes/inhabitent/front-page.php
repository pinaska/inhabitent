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


		<!--banner-->
			<section class="front-page-banner">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/inhabitent-logo-full.svg" alt="Inhabitent logo"/></a>
			</section><!--banner-->

	<div id="primary" class="home content-area">
		<main id="main" class="site-main" role="main">	
			<section class="front shop container">
				<h2>SHOP STUFF</h2>	

				<?php $terms = get_terms(array (
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				));
				if(!empty ($terms) && ! is_wp_error($terms)) : ?>
				<div class="product-container">
					<?php  foreach($terms as $term) : ?>
						<div class="single-product-item">
							<img src="<?php echo get_stylesheet_directory_uri() . '/img/'. $term->slug;?>.svg" alt="<?php echo $term->name; ?>"/>
							<p><?php echo $term->description;?></p>
							<p>
								<a class="button-green" href="<?php echo get_term_link( $term );?>">
								<?php echo $term->name; ?> Stuff</a>
							</p>
			</div>	
			<?php endforeach;?>
			</div>

			<?php endif;?>
			</section><!--end of shop-->

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