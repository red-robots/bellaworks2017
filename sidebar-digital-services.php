<div id="secondary" class="widget-area" role="complementary">
<?php
	$i=0;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'page',
	'post_parent' => 10, // digital services
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC'
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
        
    <?php $wp_query->the_post();  $i++; ?>	
    
    <div class="side-subpage wow fadeInRight" data-wow-delay=".<?php echo $i; ?>s" >
        <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
            <?php the_field('quick_description'); ?>
        </a>
    </div><!-- side subpages -->
    
    <?php endwhile; endif; ?>
	
</div><!-- #secondary -->
