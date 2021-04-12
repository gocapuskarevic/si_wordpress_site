<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section class="hero" style="background: url('<?php echo get_template_directory_uri() . '/inc/images/404hero.jpg'; ?>')top/cover no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-7">
        <h1>404</h1>
        <h2>stranica nije pronađena.</h2>
      </div>
    </div>
  </div>
</section>
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="error-info">
          <p>Stranica koju ste tražili ne postoji, vratite se na početnu stranu:</p>
          <a href="<?php echo get_home_url(); ?>">Početna</a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer();
