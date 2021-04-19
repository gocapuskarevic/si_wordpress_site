<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

  <section class="contact-map">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </section>

  <section class="section-wrap section-excerpt contact-wrap">
    <div class="container-fluid">
      <div class="row test">

          <div class="col-lg-6">
              <div class="contact-block">
                  <?php get_template_part( 'template-parts/excerpt' ); ?>
                </div>
            </div>

        <div class="offset-lg-1 col-lg-5">
          <?php get_template_part( 'template-parts/excerpt', 'contact' ); ?>

        </div>
      </div>

    </div>
  </section>

<?php
get_footer();
