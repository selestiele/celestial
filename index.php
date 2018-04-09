<?php
get_header();
?>
<main>

      <article>
            <?php 
            if (have_posts()) :
                  while (have_posts()) :
                        get_the_title();                  
                        the_post();
                        the_content();
                  endwhile;
            endif;  ?>
      </article>
        
</main>
<?php
get_footer(); 

?>