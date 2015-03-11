<?php

/*
	Template Name: Custom Contact 
*/

get_header();  ?>

<div class="main">
  <div class="containerMain clearfix">
    <?php // Start the loop ?>

    <!-- Contact Info -->
    <?php if(have_posts() ) while(have_posts()) : the_post(); ?>
      <div class="contact">
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile; ?>  

  
  
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>