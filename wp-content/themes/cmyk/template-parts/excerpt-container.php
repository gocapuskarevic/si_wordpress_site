<?php
/**
 * Template part for displaying Excerpt content
 */
?>

<div class="container-fluid">
  <div class="hr-line"></div>
</div>
<section class="section-wrap section-excerpt">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <?php get_template_part( 'template-parts/excerpt' ); ?>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <?php get_template_part( 'template-parts/excerpt', 'contact' ); ?>
      </div>
    </div>
  </div>
</section>
