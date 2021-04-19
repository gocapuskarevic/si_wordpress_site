<?php
/**
 * Template Name: Wide with Container
*/

get_header();
?>

  <div class="container-fluid">
    <section class="section-wrap intro team-intro">
      <div class="row">
        <div class="col-sm-12">
          <header class="section-title">
            <h1><?php the_title(); ?></h1>
          </header>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  </div>

<?php
get_footer();
