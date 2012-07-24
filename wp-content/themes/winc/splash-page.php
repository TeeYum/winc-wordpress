<?php
/**
 * Template Name: Splash Page
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 * Home page that essentially acts as the splash page
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/splashPage/assets/css/home.css" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/splashPage/assets/css/home.css" />
<![endif]-->
<?php wp_head(); ?>

</head>

<body> 
    <div class="container">
		<div id="homeMain" >
			<div id="quotes"></div> 
			<div id="winc"></div>
			<div id="homeLinks">
				<p><a href="/about-us">Who We Are</a></p>	
				<p><a href="/about-us/staff-bios">What We Do</a></p>	
				<p><a href="/blog">WinC News</a></p>	
				<p><a href="#">Join A Conversation</a></p>	
			</div>
		</div>
		<div id="splashSocial" class="hide">
			<p><a href="http://www.facebook.com/worldinconversationproject/">Facebook</a> -	<a href="http://twitter.com/worldinconvo">Twitter</a></p>
		</div>		
		<script src="<?php echo get_template_directory_uri(); ?>/splashPage/assets/js/homeAnimation.js"></script>
	</div>
<div class="clear"></div>
		
</body>
</html>
