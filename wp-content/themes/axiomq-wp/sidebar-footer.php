<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>


<div class="sidebar-widget">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget 4') ) : endif; ?>
</div>
<div class="sidebar-widget">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget 5') ) : endif; ?>
</div>
