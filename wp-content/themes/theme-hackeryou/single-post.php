<?php get_header(); ?>

<div class="main">
  <div class="container contPost">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="content portfolioPage">
        <?php $feat_image= wp_get_attachment_url(get_post_thumbnail_id($aboutid[0], 'thumbnail-size', true));
         ?>
        <div class="image" style="background-image: url('<?php echo $feat_image ?>')">
          <h2><?php the_title(); ?></h2>
        </div>
          
          <p><?php the_content(); ?><p>
          <?php get_permalink(50); ?>
          <a class="back" href="<?php echo get_permalink(50)?>">Back to Blog</a>
      </div> <!-- /.content .portfolioPage -->
      <?php endwhile; // end of the loop. ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>