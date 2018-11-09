<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
		 height:65px;
		 width:320px;
		 background-size: 320px 65px;
		 background-repeat: no-repeat;
			padding-bottom: 30px;
		}
	</style>
 <?php }
 add_action( 'login_enqueue_scripts', 'my_login_logo' );

// function inhabitent_logo() {
// 	echo '<style type="text/css">                                                                   
// 		h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
// 		height: 120px !important; width: 410px !important; margin-left: 0px;}                            
// 	</style>';
// }
// add_action('login_head', 'inhabitent_logo');

function filter_login_headerurl( $login_header_url ) {
    $login_header_url= "http://localhost:8888/project-04/";
   return $login_header_url;
};

add_filter( 'login_headerurl', 'filter_login_headerurl', 10, 1 );
