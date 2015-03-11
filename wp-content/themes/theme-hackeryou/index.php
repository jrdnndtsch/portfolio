<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content blogRoll clearfix">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="innerWrapper blogPost clearfix">
            <div class="colorSquare"></div>
            <div class="blogInfo clearfix">
        		<h2><?php the_title(); ?></h2>
        		<p><?php the_field('teaser'); ?></p>
                <?php get_permalink(); ?>
                <a href="<?php echo get_permalink(); ?>">read more</a>
            </div>
            <div class="blogImg clearfix">
                <?php $feat_image= wp_get_attachment_url(get_post_thumbnail_id($aboutid[0], 'thumbnail-size', true));
        		 ?>
        		 <img src="<?php echo $feat_image ?>" alt="">
             </div>
    	</div> <!-- end .innerWrapper .blogRoll -->
        <?php endwhile; ?>    
    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>