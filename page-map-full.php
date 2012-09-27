<?php
/*
Template Name: Map of Dialogues 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="map-hero" class="span12 well dropShadow">
					<div id="map-container">
						<div id="state-college" class="map-dot"  data-content="And here's some amazing content. It's very engaging. right?" data-original-title="World In Conversation Hq, asdfasdf asdf asdf asdf "></div>
						<div id="minnesota" class="map-dot"  data-content="And here's some amazing content. It's very engaging. right?" data-original-title="Leech Lake Tribal College"></div>
						<div id="isreal" class="map-dot"  data-content="And here's some amazing content. It's very engaging. right?" data-original-title="Isreal"></div>
					</div>				
				</div>	
				
				<div id="map-main" class="span12 well dropShadow" >
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/maps.js" ></script>
<?php get_footer(); ?>
