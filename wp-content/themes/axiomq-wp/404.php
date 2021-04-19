<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

  <section class="section-wrap spacing-wrap">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <header class="section-title">
            <h1>Page not found. Sorry.</h1>
          </header>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <p>Maybe try one of the links in the navigation?</p>
          <p>Or go back to <a class="primary" href="<?php echo esc_url( home_url( '/' )); ?>" title="AxiomQ"><strong>AxiomQ</strong></a> homepage.</p>
        </div>
        <div class="col-lg-4">
          <img src="<?php bloginfo('template_url'); ?>/inc/assets/images/convincer.png" alt="" class="img-responsive">
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
