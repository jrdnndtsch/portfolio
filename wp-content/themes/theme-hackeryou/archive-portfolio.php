<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="portfolioPieces">
        <h2><?php the_title(); ?></h2>
        <p class="type"><?php the_field('project_type'); ?></p>
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
        <p><?php the_field('short_desc') ?></p>

        <?php get_permalink(); ?>
         <div class="viewLive">
           <a href="<?php echo get_permalink() ?>"><p>Learn More</p></a>
         </div>
         
         <div class="viewLive">
           <a href="<?php the_field('live'); ?>" target="_"><p>View Live</p></a>
         </div><!--  end .viewLive -->
          <?php $image = get_field('featured_image') ?>
         <!-- <img src="<?php echo $image ['sizes'] ['medium'] ?>" alt=""> -->
       
         <?php endif; ?>
      </div><!--  end. technologies -->
  </div> <!-- end .portfolioPieces -->
        
      <?php endwhile; // end of the loop. ?>




    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
