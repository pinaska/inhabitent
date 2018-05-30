<?php
/**
 * Template Name: About Page Full-Width Page
 *
 * @package Inhabitent_Theme
 */
get_header('front'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" </php post_class(); ?>
        <header class="entry-header custom-hero">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'extra' ); ?>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <?php endif; ?>
        </header>
       
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">
    <!--GET OUR CUSTOM FIELDS HERE-->
    <h2>Our Story</h2>
    <?php echo CFS()->get( 'our_story' ); ?>
    <h2>Our Team</h2>
    <?php echo CFS()->get( 'our_team' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

        <?php endwhile; // End of the loop. ?>

       
      </article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


