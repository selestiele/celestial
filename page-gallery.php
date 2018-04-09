<?php
/* Template Name: Gallery  */

get_header(); ?>

<main class="page-container" id="gallery">
         
    <article class="gallery-content">
    <?php  
        while (have_posts()) : the_post();
            if ($gallery = get_post_gallery(get_the_ID(), false ) ) :
                
                //loop through all the images
                 $i = 1;
                foreach ( $gallery['src'] as $src) { ?> 
                    <img src="<?php echo $src;  ?>" class="gallery-item" id="item-<?php echo $i; ?>" alt="Gallery Item">
                <?php $i++;
                    if ($i > 9) :
                         break;
                    endif;
                }
            endif; 
        endwhile; ?>
    </article>  
</main>
<?php
get_footer(); 
wp_footer();
?>