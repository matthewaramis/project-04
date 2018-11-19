<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="screen-reader-text">', '</h1>' ); ?>
	</header><!-- .entry-header -->

			<?php endwhile; // End of the loop. ?>

		<div class="home-hero">
	
		</div>

		<p class="shop-stuff">Shop Stuff</p>

		<p class="inhabitent-journal">Inhabitent Journal</p>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
