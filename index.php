<?php
/**
 * The main template file
 *
 * 
 */

get_header(); 

$banner = get_bloginfo('template_url') . '/images/banner-5.gif?' . date("Ymdgis");
?>

<div class="banner-home">
    <img src="<?php echo $banner; ?>">
    <div class="banner-text">
        <h2 class="homeintro">
            <!-- <span itemprop="priceRange">Creative Digital Strategies. Custom website design and development for businesses who value a personalized approach.</span> -->
            <span itemprop="priceRange">Creative Digital Strategies.</span> 
        </h2>
        <h3 class="wwd">
           We design a custom online presence branded to align with your company, engage with your customers, and strategically drive results.
        </h3>
     </div>
</div>

<?php 

// going to change to 3 random ones.
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type' => 'portfolio',
'posts_per_page'=>'3',
'orderby' => 'rand',
'tax_query' => array(
	'relation' => 'AND',
	array(
		'taxonomy' => 'categorized',
		'field'    => 'term_id',
		'terms'    => array( 11 ),
	),
	array(
		'taxonomy' => 'categorized',
		'field'    => 'term_id',
		'terms'    => array( 12 ),
		'operator' => 'NOT IN',
	),
	array(
		'taxonomy' => 'tagged',
		'field'    => 'term_id',
		'terms'    => array( 14,17,34 ),
		'operator' => 'NOT IN',
	),
),
));
if ($wp_query->have_posts()) : ?>
    
<div class="home-projects ">
    <div class="wrapper">
        <section class="home-projects-container home-section">
            <h2 class="center header">Recent Projects</h2>
            <div class="clear"></div>
            <?php while ($wp_query->have_posts()) : ?>
            <?php $wp_query->the_post(); ?>

            <?php  
            // Get field Name
            $image = get_field('featured_image'); 
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];

            // thumbnail or custom size that will go
            // into the "thumb" variable.
            $size = 'homethumb';
            $thumb = $image['sizes'][ $size ];
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
            	
            ?>


        <div class="grid">
        	<figure class="effect-ruby">
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                <figcaption>
                    <?php the_excerpt(); ?>
                    <h2><?php the_title(); ?></h2>
                  <a href="<?php the_permalink(); ?>">Read more</a>
                </figcaption>
            </figure>
        </div><!-- grid -->


        <?php endwhile; ?>
        </section><!-- home projects container -->
    </div><!-- wrapper -->
</div><!-- home projects -->
    <?php endif; ?>
    
<section class="why-work home-section wow fadeInUp">
    <div class="content">
        <h2 class="part">Why Work With Us</h2>
        <h3>Your ideas matter to us.</h3>
        
        <p>We take a very personalized approach to the work we do. We create custom solutions tailored to what you need and we get there by listening to you. You will be part of the process from concept to launch, and your input matters.</p>
        
        <div class="button">
            <a href="<?php bloginfo('url'); ?>/why-work-with-us">More Reasons &raquo;</a>
        </div>
    </div>
    <div class="image">
        <img class="wow fadeInUp" src="<?php bloginfo('template_url'); ?>/images/lightbulb.png">
    </div>
</section>
  
    

<div class="home-projects ">
    <div class="wrapper">
        <section class="home-projects-container home-section">
            <h2 class="center header">Our Blog</h2>
            <div class="clear"></div>

                <?php 
                $wp_query = new WP_Query();
                $wp_query->query(array(
                    'post_type' => 'post',
                    'posts_per_page'=>'3'
                ));
                if ($wp_query->have_posts()) : ?>
                    
                <div class="home-latestpost" style="background-image:url(<?php echo $background; ?>);">
                    <?php while ($wp_query->have_posts()) : ?>
                    <?php $wp_query->the_post(); 
                    // Get field Name
                    $ID = get_the_ID();
                    $thumb = get_the_post_thumbnail($ID, 'homethumb');
                    ?>
                    
                    <div class="grid">
                        <figure class="effect-ruby">
                        <?php echo $thumb; ?>
                            <figcaption>
                                <div class="small-excerpt"><?php the_excerpt(); ?></div>
                                <h2><?php the_title(); ?></h2>
                              <a href="<?php the_permalink(); ?>">Read more</a>
                            </figcaption>
                        </figure>
                    </div><!-- grid -->
                    
                    <?php endwhile; ?>
                    <div class="home-latestpost-opacity" style=" background-color: rgba(255,255,255,<?php echo $opacity; ?>);">
                    </div><!-- home latestpost opacity -->
                </div><!-- home latestpost -->
                <?php endif; ?>
            </section><!-- home projects container -->
    </div><!-- wrapper -->
</div><!-- home projects -->
 


<?php get_footer(); ?>