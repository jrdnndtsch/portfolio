<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
    	<div class="blogRoll">
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    		<h2><?php the_title(); ?></h2>
    		<p><?php the_field('teaser'); ?></p>
    		<?php $feat_image= wp_get_attachment_url(get_post_thumbnail_id($aboutid[0], 'thumbnail-size', true));
    		 ?>
    		 <img src="<?php echo $feat_image ?>" alt="">
    	  <?php endwhile; ?>	
    	</div> <!-- end .blogRoll -->
    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>