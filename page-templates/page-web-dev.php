<?php
/**
 * Template Name: Web Dev
 *
 */

get_header(); ?>

	<div class="wrapper">
    <div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
                
                <div class="entry-content">
                	
                	<?php the_content(); ?>
                    
                    <?php 
						$link = get_field('next_service');
						if( $link != '' ) { ?>
                    <div class="next-service-link">
                    	<a href="<?php echo $link; ?>">&raquo;</a>
                    </div><!-- next service link -->
                    <?php } ?>
                    
                    <?php if(is_page(7)) : get_template_part('inc/process'); endif; ?>
                    
                </div><!-- entry content -->
                
			<?php endwhile; // end of the loop. ?>
            
            
            
            
<?php
if(is_page(104)) : // Responsive Websites page. Feed in portfolio tagged, "Responsive". (by ID)

	// Too many things tagged responsive. 
	// Want to put in animation of desktop to mobile...
	//get_template_part('tagged-responsive');

endif; // end if is page ?>
            
            
            

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('web-dev'); ?>
</div><!-- wrapper -->
<?php get_footer(); ?>