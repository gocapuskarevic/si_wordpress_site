<?php
/**
 * Template Name: Blank without Container
 */

get_header();
?>

  <div class="container">
    <div class="row">
      <div class="col">
        <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'notitle' );
          endwhile; // End of the loop.
        ?>
      </div>
    </div>
  </div>


<?php
get_footer();
