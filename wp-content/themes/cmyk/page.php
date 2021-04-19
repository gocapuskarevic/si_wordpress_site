<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

  <div class="container-fluid">
    <?php
    while ( have_posts() ) : the_post();
    	if (is_front_page()):
        get_template_part( 'template-parts/portfolio' );
      endif;
      get_template_part( 'template-parts/content', 'page' );
    endwhile; // End of the loop.
    ?>
  </div>


  

 
<?php
get_footer();
