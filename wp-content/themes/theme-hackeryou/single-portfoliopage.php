<?php get_header(); ?>

<div class="main">
  <div class="container">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="content portfolioPage">
          <h2><?php the_title(); ?></h2>
          <h4><?php the_content(); ?></h4>
      </div> <!-- /.content .portfolioPage -->
      <div class="portfolioPieces2">
      <!-- how do I bring the info from one custom post page into another -->
        <?php echo get_posts('$portfollio');
         ?>
      </div>
      <?php endwhile; // end of the loop. ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>