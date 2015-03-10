
<?php get_header(); ?>
<div class="main">
  <div class="container">

     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
       <h2><?php the_title(); ?></h2>
       <h4><?php the_field('project_type'); ?></h4>
      <div class="technologies">
        <?php
        $terms = get_the_terms( $post->ID, 'technologies' ); if ( $terms && ! is_wp_error( $terms ) ) : 
         $technologies_links = array();
         foreach ( $terms as $term ) {
           $technologies_links[] = $term->name;
         }             
        ?>
        <div class="tech">
         <?php 
           foreach($technologies_links as $tech) {
             echo "<span class='tech'>" . $tech . "</span>";
           }       
          ?>
        </div> <!-- end .tech -->
     </div><!--  end. technologies -->
     <div class="portfolioDescription">
       <?php 
        while(have_rows('display_image'))  : the_row();
        ?>
        <?php $image = get_sub_field('image') ?>
        <?php $desc = get_sub_field('description') ?>
        <img src=" <?php echo $image['url']?>" alt="">
        <p><?php echo $desc ?></p>
       
      <?php endwhile; ?>
     </div> <!-- end .portfolioDescription -->

        <div class="viewLive">
          <p>View Live</p>
        </div><!--  end .viewLive -->
         <?php $image = get_field('featured_image') ?>
        <img src="<?php echo $image ['sizes'] ['medium'] ?>" alt="">

      
        <?php endif; ?>
       
     <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
<?php get_footer(); ?>



        