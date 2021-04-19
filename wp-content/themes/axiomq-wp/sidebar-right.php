<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<style>
<style>
.sidebar{
    will-change: min-height;
}

.sidebar__inner{
    transform: translate(0, 0); /* For browsers don't support translate3d. */
    transform: translate3d(0, 0, 0);
    will-change: position, transform;
}
</style>
<div class="sidebar__inner">

<div class="sidebar-widget">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget 2') ) : endif; ?>
</div>
<div class="sidebar-widget">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget 3') ) : endif; ?>
</div>
</div>
<script type="text/javascript">
window.onload=function(){
  if(document.body.clientWidth>755){
    var sidebar = new StickySidebar('#sidebar', {
        containerSelector: '.section-wrap',
        innerWrapperSelector: '.sidebar__inner',
        topSpacing: 20,
        bottomSpacing: 20
    });
  }
}

</script>
