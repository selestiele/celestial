<?php 

get_header();

if (has_post_thumbnail() ) : ?>
     <section class="featured">
          <?php the_post_thumbnail('featured'); ?>
     </section>
<?php else : ?>
     <section class="noimage">
         <?php the_title(); ?>
     </section>
<?php endif; ?>
<section id="primary">
     <?php while (have_posts() ) :
          the_post();
          the_content();
     endwhile; ?>
</section>

<?php get_footer(); ?>
