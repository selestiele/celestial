<?php
/* 
 * Template Name: Pricing
 */

get_header();
?>

<main class="pricing">
    <section id="sun" class="packages">
        <div class="sunHeader">
          <?php
            // query for the about page
            $sun_query = new WP_Query( 'pagename=sun' );
            // "loop" through query (even though it's just one page) 
            while ( $sun_query->have_posts() ) : $sun_query->the_post(); ?>
         
        <h2 class="package-title"><?php the_title(); ?></h2>  </div> 
               <?php   the_content();
            endwhile;
               // reset post data (important!)
               wp_reset_postdata();
               ?>
    </section>  
    
    <section id="moon" class="packages">
         <div class="moonHeader"> 
         <?php
          // query for the about page
          $moon_query = new WP_Query( 'pagename=moon' );
          // "loop" through query (even though it's just one page) 
          while ( $moon_query->have_posts() ) : $moon_query->the_post();
               ?>
         <h2 class="package-title moon"><?php the_title(); ?></h2> </div>  
            <?php the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
    </section>
    
    <section id="star" class="packages">
         <div class="starHeader"><?php
          // query for the about page
          $star_query = new WP_Query( 'pagename=star' );
          // "loop" through query (even though it's just one page) 
          while ( $star_query->have_posts() ) : $star_query->the_post();
               ?>
         <h2 class="package-title star"><?php the_title(); ?></h2></div>   
            <?php the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
    </section>
    
    <section id="galaxy" class="packages">
         <?php
          // query for the about page
          $galaxy_query = new WP_Query( 'pagename=galaxy' );
          // "loop" through query (even though it's just one page) 
          while ( $galaxy_query->have_posts() ) : $galaxy_query->the_post();
               ?>
        <h2 class="package-title galaxy"><?php the_title(); ?></h2>   
            <?php the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
    </section>
    
    <section id="constellation" class="packages">
         <?php
          // query for the about page
          $constellation_query = new WP_Query( 'pagename=constellation' );
          // "loop" through query (even though it's just one page) 
          while ( $constellation_query->have_posts() ) : $constellation_query->the_post();
               ?>
        <h2 class="package-title constellation"><?php the_title(); ?></h2>   
            <?php the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
    </section>
    
    <section id="alacarte" class="">
         <?php 
            if (have_posts()) :
                  while (have_posts()) :
                        get_the_title();                  
                        the_post();
                        the_content();
                  endwhile;
            endif;  ?>
    </section>
    
</main>


