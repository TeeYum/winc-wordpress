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
				<button class="btn btn-large btn-danger" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Click to toggle popover</button>				
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/maps.js" ></script>
<?php get_footer(); ?>
