<?php
/**
 * The template for displaying all single posts.
 *
 * @package Matthew_Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="header-wrapper">			
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->
</div>


<div class="product-content-wrapper">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


	<div class="entry-content">

<?php echo '$'. CFS()->get( 'price' ); ?>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="social-links">
        <button type="button" class='btn inverse-btn'>
            <i class='fab fa-facebook'></i>
            Like
        </button>
        <button type="button" class='btn inverse-btn'>
            <i class='fab fa-twitter'></i>
            Tweet
        </button>
        <button type="button" class='btn inverse-btn'>
            <i class='fab fa-pinterest'></i>
            Pin
        </button>
	</div>
</div>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

			<?php the_post_navigation(); ?>



			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
