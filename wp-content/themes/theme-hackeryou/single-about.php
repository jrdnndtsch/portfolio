
<?php
get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
    <?php wp_reset_postdata(); // return any back to regular scheduled programming ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>