<?php
/**
 * The template for displaying Home page
 */
get_header(); ?>
<canvas id="canvas" tabindex='1'> </canvas>
  <div id="background-holder" style="background: url(<?php the_field('image'); ?>) no-repeat; z-index: 1;">
    <section class="section-wrap convincer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-spacing">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
        <?php get_template_part( 'template-parts/step' ); ?>
      </div>
    </section>
  </div>

  <?php get_template_part( 'template-parts/about' ); ?>

  <?php get_template_part( 'template-parts/principles' ); ?>

  <?php get_template_part( 'template-parts/excerpt', 'container' ); ?>

<?php
get_footer();
