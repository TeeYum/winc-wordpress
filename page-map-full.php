<?php
/*
Template Name: Map of Dialogues 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="dialogue-map" class="span12 well dropShadow">
					<img src="<?php bloginfo('template_directory'); ?>/images/whomap.png" alt="picture" />
				</div>	
				
				<div id="main" class="span12 well dropShadow" role="main">
					
					<a href="#" class="btn btn-large btn-danger" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Click to toggle popover</a>	
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
