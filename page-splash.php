<?php
/*
Template Name: Splash Page
*/
?>

<html lang="en"><head>
    <meta charset="utf-8">
    <title>World In Conversation Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<link href="<?php echo get_template_directory_uri(); ?>/splashPage/assets/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/splashPage/assets/css/home.css" />	
	<link href="<?php echo get_template_directory_uri(); ?>/splashPage/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>
		<div class="container">
			<div id="homeMain" >
				<div id="quotes"></div> 
				<div id="world"></div>
				<div id="inConversation"></div>
				<div id="homeLinks">
					<p><a href="">Who We Are</a></p>	
					<div class="dots"></div>	
					<p><a href="">What We Do</a></p>	
					<div class="dots"></div>	
					<p><a href="">WinC News</a></p>	
					<div class="dots"></div>	
					<p><a href="converse.html">Join A Conversation</a></p>	
				</div>
			</div>
			<div id="splashSocial" class="hide">
				<p><a href="http://www.facebook.com/worldinconversationproject/">Facebook</a> -	<a href="http://twitter.com/worldinconvo">Twitter</a></p>
			</div>		

		</div> <!-- /container -->

		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo get_template_directory_uri(); ?>/splashPage/assets/js/jquery.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/splashPage/assets/js/homeAnimation.js"></script>
  
	</body>
</html>

