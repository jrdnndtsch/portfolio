<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content portfolioPiece">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_field('project_type') ?></p>
        <div class="tags">
          <?php while(has_sub_field('tags')): ?>
          <?php $tag = get_sub_field('tag');
           ?>
           <p><?php echo $tag; ?></p> 
          <?php endwhile; ?>
        </div> <!-- END .tags -->
        <p><?php the_field('short_desc') ?></p>
        </div>
        <?php //the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>


        <!-- <div class="images">
          <?php while(has_sub_field('images')) : ?>
            <?php //for every image caption combo this codde is run ?>
            <figure>
            <?php $image = get_sub_field('image'); ?>
             <img src="<?php echo $image['sizes']['square']; ?>" alt="">
              <figcaption><?php the_sub_field('caption'); ?></figcaption>
            </figure>
          <?php endwhile; //end images loop?> -->