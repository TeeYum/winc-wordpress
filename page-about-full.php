<?php
/*
Template Name: About Page Template 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="about-hero" class="span12 well dropShadow">
					<img src="<?php bloginfo('template_directory'); ?>/images/whomap.png" alt="picture" />
				</div>	
				<div id="about-main" class="span12 clearfix well dropShadow" role="main">
					
					<? //staff head shots ?>
					<ul class="thumbnails">
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/images/headshots/Laurie-Mulvey.png" alt="Laurie Mulvey" />
								<h3 class="about-name">Laurie Mulvey</h3>
								<p class="about-title">Executive Director</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/images/headshots/Sam-Richards.png" alt="Sam Richards" />
								<h3 class="about-name">Sam Richards</h3>
								<p class="about-title">Director of Development</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/images/headshots/DJ-Seballos.png" alt="Sam Richards" />
								<h3 class="about-name">DJ Seballos</h3>
								<p class="about-title">Assistant Director</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/images/headshots/Tim-Taylor.png" alt="Sam Richards" />
								<h3 class="about-name">Tim Taylor</h3>
								<p class="about-title">Director of Operations</p>
							</div>	
						</li>		
					</ul>


					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
