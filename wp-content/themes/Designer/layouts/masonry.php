<?php
$args = array(
          'posts_per_page'  => -1,
          'post_type'       => 'post',
          'post_status'     => 'publish',
          'order'           => 'ASC', 
        );
$stories = new WP_Query( $args );
?>
<div class="container">
  <div class="row">
    <div class="masonry">
      <?php 
      if( $stories->have_posts()) :
        while( $stories->have_posts()) : $stories->the_post(); ?>
          <div class="masonry-brick">
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_permalink(); ?>" class="masonry-link">
              <div class="modal">
                <div class="info">
                  <div class="wrapp-info">
                    <p><?php the_field('post_author'); ?></p>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; wp_reset_postdata();
      endif; ?>       
    </div>
  </div>
</div>