<?php
/**
 * Template part for displaying Fix for free sign up page
 */
?>

<div class="container free-fix-signup">
  <div class="row">
    <div class="col-md-8 offset-md-2 text-center">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <?php
      get_template_part( 'template-parts/form-fix-for-free' );
      ?>
    </div>
  </div>
</div>
