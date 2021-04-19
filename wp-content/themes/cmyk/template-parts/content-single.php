<?php
/**
 * Template part for displaying page content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<header class="page-header">
  <h1 class="single-entry-title">
    <?php the_title(); ?>
  </h1>
  <p class="meta text-muted">
    <?php echo get_the_date(); ?> |
    Posted by <?php the_author(); ?>
    in <?php the_category(', ') ?>
  </p>
</header>
<?php the_content();
?>

<div class="mt-5">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
