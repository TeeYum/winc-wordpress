<?php
/*
Template Name: Map of Dialogues 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="map-hero" class="span12 well dropShadow">
					<img src="<?php bloginfo('template_directory'); ?>/images/map.png" alt="picture" />
				</div>	
				
				<div id="map-main" class="span12 well dropShadow" >
				<a href="#" class="btn btn-large btn-danger">Click to toggle popover</a>	
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/map.js" ></script>
<?php get_footer(); ?>
