<?php
/**
* Template Name: Page blank
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

<?php
if (is_page( 'what-we-do' ) ): ?>
  <?php
  get_template_part( 'template-parts/what-we-do' );
  ?>
<?php endif;
?>

<?php
get_footer(); ?>
