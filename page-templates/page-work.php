<?php
/**
 * Template Name: Our Work
 *
 */

get_header(); ?>

	<div class="wrapper">
    <div id="primary" class="">
		<div id="content" role="main">
        
        <header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
        
        <div class="entry-content">
        <?php while(have_posts()) : the_post(); ?>
        
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div><!-- entry content -->

			<?php
			$i = 0;
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'portfolio',
				'posts_per_page' => -1,
				'paged' => $paged,
				 'orderby'   => 'menu_order',
			      'order'     => 'ASC'
			));
				if ($wp_query->have_posts()) : ?>
    
    

<?php 

// Create Filter buttons from all Categories that have posts 
		
		// create an array
		// 
				
			 //} // endforeach
			
		 //} // if not empty
 
	// Filter Buttons output
	// echo '<div id="filters" class="button-group">' ."\n";
	// // Create filter buttons from terms
	// 	foreach ($filterLinks as $links) {
	// 		echo '<button class="portbutton" data-filter="' . $links['slug'] . '">' . $links['name'] . '</button>'."\n";
	// 	}
	// echo '</div><!-- isotope filters -->';
?>


<div id="containder" class="work-gallery">
<?php while ($wp_query->have_posts()) : ?>
<?php $wp_query->the_post(); $i++;?>
	
<?php
// Get the terms with each post
// $terms = get_the_terms( $post->ID, 'categorized' );
						
// if ( $terms && ! is_wp_error( $terms ) ) : 

// 	$cat_links = array();

// 	foreach ( $terms as $term ) {
// 		$cat_links[] = $term->slug;
// 	}
						
// 	$mycats = join( " ", $cat_links );
//  endif; 

if( $i == 2 ) {
	$postClass = "right";
} else {
	$postClass = "left";
}


 ?>


    <div class=" portblock <?php echo $postClass; ?>">
     <?php  
		// Get field Name
		$image = get_field('featured_image'); 
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$size = 'thumbfeed';
		$thumb = $image['sizes'][ $size ];
			
		?>
       <div class="port-img">
       		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
       </div><!-- port image -->
       <div class="below">
       		<h2><?php the_title(); ?></h2>
       </div>
       <div class="portfolio-link"><a href="<?php the_permalink(); ?>">keep reading</a></div>
    </div><!-- item -->

    <?php 

    if( $i == 2 ) { 
    	$i = 0;
    	?>
    	<div class="clear"></div>
    <?php } ?>

    
    
    
    <?php endwhile; ?>
    </div><!-- container -->
    
    <?php pagi_posts_nav(); ?>
    
    <?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
</div><!-- wrapper -->
<?php get_footer(); ?>