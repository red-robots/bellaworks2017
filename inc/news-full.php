<div class="item newsblock-full">
    <a href="<?php the_permalink(); ?>">
    <?php if ( has_post_thumbnail() ) { ?>
        <div class="image-wrap">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php  } ?>
        <div class="news-content">
            
                <h2><?php the_title(); ?></h2>

                <?php the_excerpt(); ?>
                    
            
            <div class="read">keep reading</div>
         </div><!-- news content -->
    </a>
</div><!-- item -->