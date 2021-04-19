<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<section class="intro">
    <div class="row">
      <div class="col-lg-9">
        <header class="section-title">
          <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content(); ?>
      </div>
    </div>
    <?php the_post_thumbnail(); ?>
  </section>






