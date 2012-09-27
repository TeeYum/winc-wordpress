<?php
/*
Template Name: Map of Dialogues 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="map-hero" class="span12 well dropShadow">
					<div id="map-container">
						<div id="state-college" class="map-dot"  data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title"></div>
					</div>				
				</div>	
				
				<div id="map-main" class="span12 well dropShadow" >
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/maps.js" ></script>
<?php get_footer(); ?>
