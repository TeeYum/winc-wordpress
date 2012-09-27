<?php
/*
Template Name: Map of Dialogues 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="map-hero" class="span12 well dropShadow">
					<img src="<?php bloginfo('template_directory'); ?>/images/whomap.png" alt="picture" />
				</div>	
				
				<div id="map-main" class="span12 well dropShadow" >
					<a href="#" data-trigger="click" class="btn btn-large btn-danger" rel="popover" data-content="And heres some amazing content. Its very engaging. right?" data-original-title="A Title" onclick="$('.btn-danger').popover()" >Click to toggle popover</a>	
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
