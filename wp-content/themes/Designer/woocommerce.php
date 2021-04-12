<?php
/**
 * The template for displaying Woocommerce Product
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

  <div class="container">
    <div class="row">
      <div class="col">
        <?php woocommerce_content(); ?>
      </div>
    </div>
  </div>

<?php
get_footer();
