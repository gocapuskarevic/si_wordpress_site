<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div class="video-placeholder" style="background: url('<?php the_field('hero_video_placeholder'); ?>') center/cover no-repeat;">
<div class="overlay"></div>
  <i class="far fa-play-circle"></i>
  <div class="post-video" data-video='<?php the_field('post_video'); ?>'>
  </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', get_post_format() );

        endwhile; // End of the loop.
        ?>
      </div>
    </div>
  </div>

<?php
get_footer();
