<?php
/*
Template Name: Time Clock Page 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">
<?	
					$ipaddress = $_SERVER['REMOTE_ADDR'];
					$error = rand(0, 2);
					if ($ipaddress == '128.118.17.253'){

						echo "<iframe src='https://docs.google.com/spreadsheet/embeddedform?formkey=dGQxbHg1MmxiQW9KeHlJd1BHMjMyYkE6MQ' width='760' height='900' frameborder='0' marginheight='0' marginwidth='0'>Loading...</iframe>";	

					} else {
						if ($error == 0)
						{
							echo '<img src="http://s13.postimage.org/y3ozd8xuf/ERMAGHERDBERNERNERS.jpg" alt="lol get a life" />';
							echo '<p>OH, YOU THOUGHT THERE WAS SOMETHING RELEVANT HERE?</p>';
						} else if($error == 1) {
							echo '<img src="http://s11.postimage.org/qw70uxver/Perfect_World.jpg" alt="lol get a life" />';
							echo '<p>SORRY, WHAT EXACTLY WERE YOU DOING? CLOCKING IN?</p>';
						} else {
							echo '<img src="http://www.withinwindows.com/files/uploads/2012/05/ming.png " alt="lol get a life" />';
							echo '<p>DID YOU TYPE THE RIGHT URL? PROBABLY LOL</p>';
						}
					}
?>						
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
