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
          <div class="col-lg-7">
            <nav class="nav nav-footer">
              <nav class="nav nav-footer">
                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => '',
                'menu_id'         => false,
                'menu_class'      => 'menu',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
              </nav>
            </nav>
          </div>
          <div class="col-lg-5">
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
  <!--<script src="<?php bloginfo('template_url') ?>/inc/assets/js/smooth-scroll.js"></script> -->
  <?php
  if(is_page('home')||is_page('team')||is_page('startseite')||is_page('wir-sind-axiomq')){?>
    <script src="<?php bloginfo('template_url') ?>/inc/assets/js/parallax-background.js"></script><?php
  }
  ?>


  <!-- Drip -->
  <script type="text/javascript">
    var _dcq = _dcq || [];
    var _dcs = _dcs || {};
    _dcs.account = '9571016';

    (function() {
      var dc = document.createElement('script');
      dc.type = 'text/javascript'; dc.async = true;
      dc.src = '//tag.getdrip.com/9571016.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(dc, s);
    })();
  </script>
  <!-- end Drip -->

  	
  <script type="text/javascript"> _linkedin_partner_id = "418778"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=418778&fmt=gif" /> </noscript>

  </body>
</html>
