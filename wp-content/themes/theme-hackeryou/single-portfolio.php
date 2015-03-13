
<?php get_header(); ?>
<div class="main">
  <div class="container">

     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="portfolioPieces clearfix">
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
        <ul>
         <?php 
           foreach($technologies_links as $tech) {
             echo "<li class='tech'>" . $tech . "</li>";
           }       
          ?>
         </ul> 
        </div> <!-- end .tech -->
     </div><!--  end. technologies -->
     <div class="portfolioDescription clearfix">
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
          <a href="<?php the_field('live'); ?>" target="_"><p>View Live</p></a>
        </div><!--  end .viewLive -->

      </div> <!-- end .portfolioPieces -->
        <?php endif; ?>
       
     <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
<?php get_footer(); ?>



        