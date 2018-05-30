<?php
/**
 * Template Name: About Page
 * The template for displaying about page with custom fields.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title about">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!--GET OUR CUSTOM FIELDS HERE-->
        <h2>Our Story</h2>
    <?php echo CFS()->get( 'our_story' ); ?>
    <h2>Our Team</h2>
    <?php echo CFS()->get( 'our_team' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>