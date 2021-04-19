<?php
/**
 * Template part for displaying Fix for free page
 */
?>

<section class="section-wrap the-report-wrap fix-for-free">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-md-7">
        <?php

          $image = get_field('image');

          if( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?>" class="img-fluid float-right the-report-image" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
    </div>
   </div>
</section>
