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
                    <img class="wow fadeInUp" src="<?php bloginfo('template_url'); ?>/images/pencil.png">
                </div>
            </section>


			<!--<div class="about-contents">	
            

           </div> secondary -->
                
		<?php endwhile; // end of the loop. ?>
        
        
<!-- About Us



Our Focus



Our Team



Supporting our Community

Bellaworks supports the work of organizations who are making a positive impact in the community. We offer a 5% pricing discount to all qualified non-profit organizations. -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
</div><!-- wrapper -->
<?php get_footer(); ?>