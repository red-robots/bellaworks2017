<?php
/**
 * Template Name: Contact
 *
 */

get_header(); ?>

	<div class="wrapper">
    
    <div id="secondary" class="widget-area">

<?php 
// all stuff from page
$address = get_field('street_address');
$city = get_field('city');
$state = get_field('state'); 
$zip = get_field('zip');
$phone = get_field('phone');
$email = get_field('Email');
$daysOfWeek = get_field('days_of_week');
$hours = get_field('hours');
?>

<div itemscope itemtype="http://schema.org/LocalBusiness" class="side-contact">

	<div class="side-contact-item">
	<h2>Address</h2>
    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress"><?php echo $address . '</span><br>';
		   echo '<span itemprop="addressLocality">'.$city . '</span>, <span itemprop="addressRegion">' . $state . '</span> <span itemprop="postalCode">' . $zip . '</span><br>';
	?>
    </p>
    </div><!-- side contact item -->
    
    <div class="side-contact-item">
    <h2>Phone</h2>
    <p itemprop="telephone">
    <?php echo $phone; ?>
    </p>
    <h2>Email</h2>
    <p>
    <a href="mailto:<?php echo antispambot($email); ?>">
  	<span itemprop="email"><?php echo antispambot($email); ?></span>
		</a>
    </p>
    </div><!-- side contact item -->
    
    <div class="side-contact-item">
    <h2>Hours</h2>
    <p itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
<span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
    <span itemprop="name"><?php echo $daysOfWeek . '</span></span><br>';
		   echo $hours;
	
	 ?>
     </p>
     </div><!-- side contact item -->
     
     <div class="side-contact-item">
     	<div class="google-map">
                    <div class="entry-content">
                    	<h2>Find Us</h2>
                       <?php the_field('google_map'); ?>
                    </div><!-- entry content -->
                </div><!-- entry content -->
     </div><!-- side contact item -->

</div><!-- entry content -->


	
    
</div><!-- secondary -->
    
    
    <div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
                
                <div class="entry-content">
                	<?php the_content(); ?>
                </div><!-- entry content -->
                
                <div class="contact-form">
                    <div class="entry-content">
                    	<h2>Send us a Message</h2>
                        <div class="contact-body">
                       <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
                    </div><!-- contact body -->
                    </div><!-- entry content -->
                </div><!-- contact-form -->
                
                
                
                
                
                
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


</div><!-- wrapper -->
<?php get_footer(); ?>