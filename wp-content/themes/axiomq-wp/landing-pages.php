<?php
/**
 * Template Name: Landing Page
*/

get_header();
?>

  <div class="container-fluid">
    <section class="section-wrap intro team-intro">
      <div class="row">
        <div class="col-sm-12">
          <header class="section-landing-title">
            <h1><?php the_title(); ?></h1>
          </header>
          <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-12 col-md-6">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>

            <div class="col-12 col-md-6 right-side">
            <?php
                the_field('form_for_landing_page');
            ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
get_footer();