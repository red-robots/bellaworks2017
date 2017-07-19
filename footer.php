<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<meta itemprop="streetAddress" content="220 East Blvd Suite 200A">
	<meta itemprop="addressLocality" content="Charlotte">
	<meta itemprop="addressRegion" content="North Carolina">
	<meta itemprop="addressCountry" content="United States">
	<meta itemprop="postalCode" content="28203"></span>
	<meta itemprop="name" content="Bellaworks">
	<meta itemprop="url" content="https://bellaworksweb.com/">
	<meta itemprop="email" content="info@bellaworksweb.com">

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
		<div class="site-info">
		
         	<div class="footer-cred">
             <?php 
			 		$address = get_field('address','option'); 
			 		$city = get_field('city','option');
					$state = get_field('state','option');
					$zip = get_field('zip','option');
					$year = date('Y');
					$phone = get_field('phone_number','option');
					$fax = get_field('fax','option');

					$facebook = get_field('facebook_link','option');
					$linkedin = get_field('linkedin_link','option');
					$pinterest = get_field('pintrest_link','option');
					$instagram = get_field('instagram_link','option');
					$twitter = get_field('twitter_link','option');
			 ?>
             <div class="footer-text">
			  <?php echo '&copy; ' . $year . ' Bellaworks Web | ' . $address . ' | ' . $city . ' , ' . $state . ' ' . $zip; ?>
              </div><!-- footer text -->
			  	<?php //acc_social_links(); ?>
			  	<div class="social social-head">
					<ul>
						<?php if($facebook != '') { ?>
							<li class="facebook">
								<i class="fa fa-facebook" aria-hidden="true">
									<a target="_blank" href="<?php echo $facebook; ?>"></a>
								</i>
							</li>
						<?php } ?>
						<?php if($pinterest != '') { ?>
							<li class="pinterest">
								<i class="fa fa-pinterest" aria-hidden="true">
									<a target="_blank" href="<?php echo $pinterest; ?>"></a>
								</i>
							</li>
						<?php } ?>
						<?php if($instagram != '') { ?>
							<li class="instagram">
								<i class="fa fa-instagram" aria-hidden="true">
									<a target="_blank" href="<?php echo $instagram; ?>"></a>
								</i>
							</li>
						<?php } ?>
						<?php if($twitter != '') { ?>
							<li class="twitter">
								<i class="fa fa-twitter" aria-hidden="true">
									<a target="_blank" href="<?php echo $twitter; ?>"></a>
								</i>
							</li>
						<?php } ?>
						<?php if($linkedin != '') { ?>
							<li class="linkedin">
								<i class="fa fa-linkedin" aria-hidden="true">
									<a target="_blank" href="<?php echo $linkedin; ?>"></a>
								</i>
							</li>
						<?php } ?>
					</ul>
				</div>
             </div><!-- footer cred -->
             
            
		</div><!-- .site-info -->
        
       
        
	</footer><!-- #colophon -->
<?php the_field('google_analtyics','option'); ?>
<?php wp_footer(); ?>


</body>
</html>