<?php
/**
 * Template Name: Digital Services
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
                    
                    
                </div><!-- entry content -->
                
			<?php endwhile; // end of the loop. ?>
            



		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('digital-services'); ?>
</div><!-- wrapper -->
<?php get_footer(); ?>