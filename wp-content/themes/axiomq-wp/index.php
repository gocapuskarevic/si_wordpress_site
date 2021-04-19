<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php get_template_part( 'template-parts/category-menu' ); ?>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <?php get_search_form(); ?>
      </div>
    </div>
</div>
<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://axiomq.us2.list-manage.com/subscribe/post?u=1f6d726df45858546d6ffdb60&amp;id=23dca4b9de" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe</h2>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1f6d726df45858546d6ffdb60_23dca4b9de" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

<section class="section-wrap section-blog">
  <div class="container-fluid">
    <div class="blog-index">
      <div class="row">
        <div class="col-lg-8 col-md-12">
        <div id="measurement">
          <div class="row posts-list">
            <?php
              if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                  get_template_part( 'template-parts/content', get_post_format() );
                endwhile;
                the_posts_navigation();
              else :
                get_template_part( 'template-parts/content', 'none' );
              endif; ?>
          </div>
          <?php
          global $wp_query;
          $count = $wp_query->found_posts;
          if ($count > 10) :?>
          <div class="row">
            <div class="col-12">
              <ul class="pager">
                <li class="previous"><?php next_posts_link( '&larr;&nbsp;Older', '' ); ?></li>
                <li class="next"><?php previous_posts_link( 'Newer&nbsp;&rarr;' ); ?></li>
              </ul>
            </div>
          </div>
          <?php endif; ?>
          <!-- <div class="row">
            <div class="col-12">
              <aside class="sidebar blog-index-footer">
                <?php // get_template_part( 'sidebar-footer' ); ?>
              </aside>
            </div>
          </div>-->
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-md-12">
          <aside class="sidebar" id="sidebar">
            <?php get_template_part( 'sidebar-right-blog' ); ?>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="social-share">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<?php
get_footer();

