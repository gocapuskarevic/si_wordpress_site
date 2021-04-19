<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

  <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <div class="container-fluid">
      <footer class="footer">
        <div class="row">
          <div class="col-sm-12">
            <p class="legal"><?php echo get_bloginfo('name'); ?> &copy; All Rights Reserved <?php echo date('Y'); ?></p>
          </div>
        </div>
      </footer>
    </div>
  <?php endif; ?>

  <?php wp_footer(); ?>

  <script src="<?php bloginfo('template_url') ?>/inc/assets/js/vendors/jquery.matchHeight.js"></script>
  <script src="<?php bloginfo('template_url') ?>/inc/assets/js/vendors/easing.js"></script>
  <script src="<?php bloginfo('template_url') ?>/inc/assets/js/app.js"></script>

  </body>
</html>
