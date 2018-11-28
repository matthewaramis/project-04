<?php
/**
 * Template part for displaying posts.
 *
 * @package Matthew_Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="thumbnail-mask">
        <a href="<?php echo get_the_permalink(); ?>">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
        </div>
		<?php endif; ?>

        <div class="product-info">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <div class="archive-price">$<?php echo CFS()->get ( 'price' ); ?></div>
        
        </div>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
