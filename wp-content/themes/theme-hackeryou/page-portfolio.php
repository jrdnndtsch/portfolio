<?php

/*
	Template Name: Custom Portfolio 
*/

get_header();  ?>

<div class="main">
  <div class="containerMain clearfix">
    <?php // Start the loop ?>

    <!-- Portfolio Info -->

  
    <?php $latestPosts = new WP_Query(array(
      'post_type'=> 'portfolio', // we only want blog posts
    )); ?>

    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
        <div class="featuredPortfolio">
          <h2><?php the_title(); ?></h2>
          <p><?php the_field('project_type') ?></p>
          <div class="tech">
          <ul>
            <?php
              $terms = get_the_terms( $post->ID, 'technologies' ); if ( $terms && ! is_wp_error( $terms ) ) : 
              $technologies_links = array();
              foreach ( $terms as $term ) {
                $technologies_links[] = $term->name;
              }             
            ?>
            <?php 
              foreach($technologies_links as $tech) {
              echo "<li class='tech'>" . $tech . "</li>";
            }       
           ?>
           </ul>
         </div> <!-- end .tech -->
        <p> <?php the_field('short_desc'); ?></p>
        <div class="viewLive">
           <p>View Live</p>
        </div><!--  end .viewLive -->
        <?php endif; ?>
    	</div> <!-- end .featuredPortfolio -->
    <?php endwhile // end custom loop ?>
    <?php wp_reset_postdata(); // return any back to regular scheduled programming ?>
    <!-- END Portfolio Info --> 
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>