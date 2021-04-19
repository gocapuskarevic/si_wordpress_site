<?php
/**
 * Template part for displaying eCommerce
 */
?>

<section class="section-wrap ecommerce">
  <div class="container-fluid">
    <div class="row">
        <?php while( have_rows('ecommerce_intro') ): the_row(); ?>
        <div class=" col-md-6 col-lg-3 mb-6 mb-lg-0">
          <div class="ecommerce-box">
            <div class="circle number-position"></div>
            <div class="intro-number number-position">
              <p><?php the_sub_field('intro_icon'); ?></p>
            </div>
            <h5><?php the_sub_field('intro_title'); ?></h5>
            <p><?php the_sub_field('intro_paragraph'); ?></p>
          </div>
        </div>
        <?php endwhile; ?>
    </div>
  </div>
</section>
  <section class="ecommerce-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">
          <?php the_content(); ?>
        </div>
      </div>
     </div>
   </section>

