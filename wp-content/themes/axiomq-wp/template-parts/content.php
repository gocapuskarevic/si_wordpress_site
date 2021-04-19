<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div class="col-12 col-md-6">
  <article class="post" id="post-<?php the_ID(); ?>">
    <header class="page-header">
      <h1 class="entry-title">
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      </h1>
    </header>
    <div class="entry-content clearfix">
      <div class="post-featured-image">
        <a href="<?php the_permalink() ?>">
          <?php the_post_thumbnail('medium_large'); ?>
        </a>
      </div>
      <p class='post-excerpt'>
        <?php echo get_the_excerpt(); ?>
      </p>
    </div>
  </article>
</div>
