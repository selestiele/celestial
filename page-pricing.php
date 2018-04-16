<?php
/* 
 * Template Name: Pricing
 */

get_header();
?>

<main class="pricing">
    <section id="sun" class="packages">
        <div class="sunHeader packageHeader">
            <?php
          // query for the about page
          $sun_query = new WP_Query( 'pagename=sun' );
          // "loop" through query (even though it's just one page) 
          while ( $sun_query->have_posts() ) : $sun_query->the_post();
               ?>
         </div>
        <h2 class="package-title sun"><?php the_title(); ?></h2>   
            <p><?php the_excerpt(); ?></p>
           <?php endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Sun Package' ) ) ); ?>"><button class="learnMore">Learn More</button></a>
    </section>  
    
    <section id="moon" class="packages">
         <div class="moonHeader packageHeader"> 
         <?php
          // query for the about page
          $moon_query = new WP_Query( 'pagename=moon' );
          // "loop" through query (even though it's just one page) 
          while ( $moon_query->have_posts() ) : $moon_query->the_post();
               ?>
         </div>
        <h2 class="package-title moon"><?php the_title(); ?></h2>   
            <p><?php the_excerpt(); ?></p>
           <?php endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Moon Package' ) ) ); ?>"><button class="learnMore">Learn More</button></a>
    </section>
    
    <section id="star" class="packages">
         <div class="starHeader packageHeader"><?php
          // query for the about page
          $star_query = new WP_Query( 'pagename=star' );
          // "loop" through query (even though it's just one page) 
          while ( $star_query->have_posts() ) : $star_query->the_post();
               ?></div>
         <h2 class="package-title star"><?php the_title(); ?></h2>   
            <p><?php the_excerpt(); ?></p>
           <?php endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
         <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Star Package' ) ) ); ?>"><button class="learnMore">Learn More</button></a>
    </section>
    
    <section id="galaxy" class="packages">
         <div class="galaxyHeader packageHeader"><?php
          // query for the about page
          $galaxy_query = new WP_Query( 'pagename=galaxy' );
          // "loop" through query (even though it's just one page) 
          while ( $galaxy_query->have_posts() ) : $galaxy_query->the_post();
               ?></div>
             <h2 class="package-title galaxy"><?php the_title(); ?></h2>   
            <p><?php the_excerpt(); ?></p>
           <?php endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
             <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Galaxy Package' ) ) ); ?>"><button class="learnMore">Learn More</button></a>
    </section>
    
    <section id="constellation" class="packages">
         <div class="constellationHeader packageHeader"><?php
          // query for the about page
          $constellation_query = new WP_Query( 'pagename=constellation' );
          // "loop" through query (even though it's just one page) 
          while ( $constellation_query->have_posts() ) : $constellation_query->the_post();
               ?></div>
             <h2 class="package-title constellation"><?php the_title(); ?></h2>   
           <p><?php the_excerpt(); ?></p>
           <?php endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
             <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Constellation Package' ) ) ); ?>"><button class="learnMore">Learn More</button></a>
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

<?php  get_footer(); ?>


