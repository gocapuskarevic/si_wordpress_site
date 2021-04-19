<?php
/**
 * Template part for displaying Fix for free page
 */
?>

<section class="section-wrap the-report-wrap thank-you">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center"><?php the_field('thank_you_title'); ?></h2>
      </div>
      <div class="col-12">
        <h3 class="quote text-center"><?php the_field('thank_you_subtitle'); ?></h3>
      </div>
      <div class="col-12">
        <div class="text-center"><?php the_field('thank_you_content'); ?></div>
      </div>
      <div class="col-12">
        <div class="text-center">
          <?php

            $image = get_field('thank_you_image');

            if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
        </div>
      </div>
    </div>
   </div>
</section>
