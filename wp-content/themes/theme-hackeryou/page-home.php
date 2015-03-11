<?php

/*
	Template Name: Custom Home 
*/

get_header();  ?>

<div class="main">
  <div class="container clearfix">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php endwhile; // end the loop?>

    <!-- About Info -->
  <div class="test">
    <?php $about= new WP_Query(array(
      'post_type' => 'about'
      )); ?>
    <?php if($about->have_posts()) while($about->have_posts()) : $about->the_post() ?>
      <?php the_content(); ?>
   <?php endwhile ?>
  </div>

    <!-- Portfolio Info -->

  
    <?php $latestPosts = new WP_Query(array(
      'post_type'=> 'portfolio', // we only want blog posts
      'posts_per_page'=> 3
    )); ?>

    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
        <div class="featuredPortfolio">
          <h2><?php the_title(); ?></h2>
          <p><?php the_field('project_type') ?></p>
          <div class="tech">
            <?php
              $terms = get_the_terms( $post->ID, 'technologies' ); if ( $terms && ! is_wp_error( $terms ) ) : 
              $technologies_links = array();
              foreach ( $terms as $term ) {
                $technologies_links[] = $term->name;
              }             
            ?>
            <?php 
              foreach($technologies_links as $tech) {
              echo "<span class='tech'>" . $tech . "</span>";
            }       
           ?>
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