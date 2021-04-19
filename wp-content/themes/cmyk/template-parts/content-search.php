<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="col-12 col-md-6">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="page-header">
      <h1 class="entry-title">
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      </h1>
    </header><!-- .entry-header -->
    <div class="entry-content clearfix">
      <div class="post-featured-image"><?php the_post_thumbnail(); ?></div>
      <?php the_excerpt(); ?>
    </div>
  </article><!-- #post-## -->
</div>
