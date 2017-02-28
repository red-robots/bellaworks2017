

<article class="post home-section ">
    <div class="image">
        <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail(); ?>
        <?php  } ?>
    </div>
    <div class="content">
        <h2 class="part"><?php the_title(); ?></h2>
      
        <?php the_excerpt(); ?>
        
        <div class="button">
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>
   
</article>