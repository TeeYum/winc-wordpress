<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Hybrid
 * @subpackage Template
 */

hybrid_doctype(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<head profile="<?php hybrid_profile_uri(); ?>">
<link rel=”shortcut icon” href=”images/favicon.ico”  />
<title><?php hybrid_document_title(); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<style>
.menu-container {clear: both;}
body {background-color: transparent;}
</style>


<?php hybrid_head(); // Hybrid head hook ?>
<?php wp_head(); // WP head hook ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29115203-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta name="google-site-verification" content="XRIAS4INWt8cCB2wZVIKMi9rSam6X7ofvtbC_NTW83s" />

</head>

<body class="<?php hybrid_body_class(); ?>">

<?php hybrid_before_html(); // Before HTML hook ?>

<div id="body-container">
	<?php hybrid_before_header(); // Before header hook ?>

	<div id="header-container">
		<div id="header">
			
			<a href="http://www.worldinconversation.org" alt="World in Conversation"><img src="http://www.worldinconversation.org/wp-content/uploads/2010/08/SideBySideLogoWEB-copy2.jpg" border=0 id="logo" /></a>
<a href="http://www.psu.edu" target="_blank"><img src="http://www.worldinconversation.org/wp-content/uploads/2010/08/PSUShield33.jpg" id="penn-logo"></a>

			<a href="https://php.scripts.psu.edu/webaccess/dept/worldinconversation/winc/" target="_blank" alt="Register for a conversation!"><img src="http://www.worldinconversation.org/wp-content/uploads/2010/07/join.gif" id="join-conversation-button" border=0 /></a>
		</div><!-- #header -->

	</div><!-- #header-container -->
	<?php hybrid_after_header(); // After header hook ?>

	<div id="container">

		<?php hybrid_before_container(); // Before container hook ?>