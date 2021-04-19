<?php
/**
* Template Name: Page with convincer
*/

get_header(); ?>

  <div class="affiliate-style">
    <section class="convincer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1><?php the_title(); ?></h1>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
          </div>
        </div>
        <div class="img-wrap">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/step' ); ?>

    <?php get_template_part( 'template-parts/about' ); ?>

    <section class="section-wrap contact-wrap">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="contact-block">

              <?php get_template_part( 'template-parts/address-wide' ); ?>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
get_footer(); ?>
