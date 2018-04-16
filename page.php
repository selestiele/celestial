<?php 

get_header(); ?>
<main id="gen-page">

<?php if (has_post_thumbnail() ) : ?>
     <section class="featured">
          <?php the_post_thumbnail('featured'); ?>
     </section>
<?php endif; ?>
     <article id="primary">
          <?php while (have_posts() ) : ?>
               <h2 class="pageTitle"><?php the_title(); ?></h2>
               <?php the_post();
                     the_content();
          endwhile; ?>
     </article>
</main>
<?php get_footer(); ?>
