<?php
/**
 * Rather than lumping all theme functions into a single file, this functions file is used for 
 * initializing the theme framework, which activates files in the order that it needs. Users
 * should create a child theme and make changes to its functions.php file (not this one).
 *
 * @package Hybrid
 * @subpackage Functions
 */

/* Load the Hybrid class. */
require_once( TEMPLATEPATH . '/library/classes/hybrid.php' );

/* Initialize the Hybrid framework. */
$hybrid = new Hybrid();
$hybrid->init();





/********* EDITS FROM JAMES ********/


/**
 * This silly little bugger hooks into the sidebar functions to hide the
 * primary sidebar on the frontpage only. This will let us set the column
 * widths on that page as we want, and it won't show all the categories and
 * stuff, instead we'll put in three dynamic widget areas on the bottom of
 * the homepage.
 **/
add_filter( 'sidebars_widgets', 'my_disable_widgets' );

function my_disable_widgets( $sidebars_widgets ) {
	if ( is_page('about-us') ) $sidebars_widgets['primary'] = false;
	return $sidebars_widgets;
}
/**
 * End sidebar hide-and-seek
 **/


/** LET'S ADD SOME SIDEBARS! **/
register_sidebar( array( 'name' => __( 'Home Blog Page', $domain ), 'id' => 'home-blog', 'description' => __( 'Loaded after the page\'s main content area.', $domain ), 'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside">', 'after_widget' => '</div></div>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>' ) );
register_sidebar( array( 'name' => __( 'About Us: Left Column', $domain ), 'id' => 'home-left', 'description' => __( 'Loaded in the left column on the homepage.', $domain ), 'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside">', 'after_widget' => '</div></div>', 'before_title' => '<h2>', 'after_title' => '</h2>' ) );
register_sidebar( array( 'name' => __( 'About Us: Right Column', $domain ), 'id' => 'home-right', 'description' => __( 'Loaded in the right column on the homepage.', $domain ), 'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside">', 'after_widget' => '</div></div>', 'before_title' => '<h2>', 'after_title' => '</h2>' ) );
register_sidebar( array( 'name' => __( 'About Us Footer: Left', $domain ), 'id' => 'footer-left', 'description' => __( 'Loaded after the page\'s main content area.', $domain ), 'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside">', 'after_widget' => '</div></div>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>' ) );
register_sidebar( array( 'name' => __( 'About Us Footer: Middle', $domain ), 'id' => 'footer-middle', 'description' => __( 'Loaded after the page\'s main content area.', $domain ), 'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside">', 'after_widget' => '</div></div>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>' ) );
register_sidebar( array( 'name' => __( 'About Us Footer: Right', $domain ), 'id' => 'footer-right', 'description' => __( 'Loaded after the page\'s main content area.', $domain ), 'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside">', 'after_widget' => '</div></div>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>' ) );
 


?>