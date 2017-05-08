<?php   // Get field Name for photos
    $image = get_field('photo'); 
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];
      // size
      $size = 'large';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];
    // email  
     $email = get_field('email');
     // count classes
     if($count == 3) {
         $class = 'staff-3';
         $count = 0;
     } else {
         $class = 'staff-1';
     }
     // count up
     $count++;
    ?>


<div class="staff <?php echo $class; ?> blocks">
<?php //echo $count; ?>
    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
    
    <div class="staff-content">
        <h3><?php the_title(); ?></h3>
        <div class="jobtitle">
                <?php the_field('job_title'); ?>
        </div><!-- jobtitle -->
        <div class="staff-email">
                <a href="mailto:<?php echo antispambot($email); ?>">
                    <?php echo antispambot($email); ?>
            </a>  
        </div><!-- staff email -->
        <div class="readmore">  
                <a href="<?php the_permalink(); ?>">more</a>
        </div><!-- staff readmore -->
        <div class="read">  
                read more
        </div><!-- staff read -->
   </div><!-- staff content -->
   
</div><!-- staff -->