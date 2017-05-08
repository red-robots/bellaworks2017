<?php
/**
 * Template Name: About
 *
 */

get_header(); ?>

	<div class="wrapper">
    
        <div id="primary" class="">
		  <div id="content" role="main">
        
        <?php while ( have_posts() ) : the_post(); ?>

            <section class="about home-section wow fadeIn" >
                <div class="content">
                    <div class="entry-content">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header><!-- .entry-header -->
                            <h2>We are committed to delivering creative, practical solutions with personalized service</h2>
                            <p>— all with the end goal of helping our clients’ businesses & organizations grow.</p>
                            <p>Founded in January of 2007 by Lucy Caldwell and Peyton Earey, Bellaworks Web Design is a full-service website development company based in Charlotte, North Carolina. We have a dedicated team of experienced professionals that will help you every step of the way. We are committed to delivering creative, practical solutions with personalized service .</p>
                            <div class="button">
                                <a href="<?php bloginfo('url'); ?>/contact-us/">Start your project with us today &raquo</a>
                            </div>
                        
                            <?php //the_content(); ?>
                        </div><!-- entry content -->
                </div>
                <div class="image-about">
                <?php $banner = get_bloginfo('template_url') . '/images/pencil.gif?' . date("Ymdgis"); ?>
                    <img src="<?php echo $banner; ?>">
                </div>
            </section>
        <?php endwhile; // end of the loop. ?>
        
    <section class="staff-section">
        <header class="entry-header">
            <h2 class="section-header">Our Staff</h2>
        </header>
            <?php
                $wp_query = new WP_Query();
                $wp_query->query(array(
                'post_type'=>'staff',
                'posts_per_page' => -1,
                'orderby'   => 'menu_order',
                'order'     => 'ASC',
                'paged' => $paged
            ));
                if ($wp_query->have_posts()) : 
                // set count for class
                  $count = 0; 
                ?>
                    <div class="staff-container">
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                      
                        <?php get_template_part('inc/staff'); ?>
                
                    <?php endwhile; ?>
                    </div><!-- staff container -->
                    <?php pagi_posts_nav(); ?>
                    
                <?php endif; ?>
            </section>
            <!-- staff -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
</div><!-- wrapper -->
<?php get_footer(); ?>