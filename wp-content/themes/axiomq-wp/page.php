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
      get_template_part( 'template-parts/content', 'page' );
    endwhile; // End of the loop.
    ?>
  </div>

  <?php
  if (is_page( 'team' ) || is_page( 'wir-sind-axiomq' )): ?>
    <?php
    get_template_part( 'template-parts/team' );
    ?>
  <?php endif;
  ?>

  <?php
  if (is_page( 'portfolio' ) || is_page( 'unsere-juengste-arbeit' ) ): ?>
    <?php
    get_template_part( 'template-parts/portfolio' );
    ?>
  <?php endif;
  ?>

  <?php
  if (is_page( 'careers' ) ): ?>
    <?php
    get_template_part( 'template-parts/careers' );
    ?>
  <?php endif;
  ?>

<?php
if (is_page( 'what-we-do' ) ): ?>
  <?php
  get_template_part( 'template-parts/what-we-do' );
  ?>
<?php endif;
?>

<?php
get_footer();
