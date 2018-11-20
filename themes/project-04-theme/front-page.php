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

		<p class="shop-stuff-header">Shop Stuff</p>

		<section class="shop-stuff">
<!-- Shop Stuff Loop -->
<?php 
$terms = get_terms(array(
	'taxonomy' => 'product_type',
	'hide_empty' => 0,
));

foreach($terms as $term): ?>

<div class="frontpage-term">
	<img src="<?php echo get_template_directory_uri() . '/images' . '/product-type-icons/' . $term->slug . '.svg' ?>"
	alt="<?php echo $term->name; ?>" />
	<p><?php echo $term->description; ?></p>
	<p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> Stuff</a></p>
</div>
<?php endforeach; ?>

</section>

		<p class="inhabitent-journal-header">Inhabitent Journal</p>

<section class="inhabitent-journal">
<!-- Inhabitent Journal Loop -->
<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
   <?php /* Content from your array of post results goes here */ ?>

	<article class="journal-entry">
		<?php if (has_post_thumbnail() ) {
			the_post_thumbnail('large');
		}
		?>
		<span class="entry-meta">
		<?php
		red_starter_posted_on();
		echo ' / ';
		comments_number('0 Comments', '1 Comment', '% Comments');
		?>
</span>
<a href=">?php echo get_the_permalink(); ?>">
	<?php the_title(); ?>
	</a>
	<a class="read-more" href="<?php echo get_the_permalink(); ?>">
	Read more
	</a>
	</article>
	<?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
	</section>