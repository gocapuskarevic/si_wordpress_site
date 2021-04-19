<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
  <section class="section-wrap section-blog pb-3">
    <div class="container-fluid">
      <div class="blog-index">
        <div class="row">
          <div class="col-md-8">
            <div class="category-list-wrap">
              <?php
              while ( have_posts() ) : the_post();
                $current_post = get_the_ID();

                get_template_part( 'template-parts/content', 'single', get_post_format() );

              endwhile; // End of the loop.
              ?>


                <div class="follow-us follow-us__single">
                  <h4 class="follow-us__title"><?php the_field('follow_us', 'option'); ?></h4>
                <?php echo do_shortcode('[addthis tool=addthis_horizontal_follow_toolbox]'); ?>
                </div>
            </div>
            <div class="latest-posts home-posts">
              <h2>Latest Posts</h2>
              <div class="row">
                <?php $catquery = new WP_Query( array( 'posts_per_page' => 9, 'post__not_in'=>array( $current_post ) ) );
                while($catquery->have_posts()) : $catquery->the_post(); ?>
                  <div class="col-md-4 mb-5">
                    <div class="post-item">
                      <div class="post-item-img">
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">
                        </a>
                      </div>
                      <h3 class="post-item-title">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h3>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
              </div>
            </div>
            <?php
              // var_dump(  $recent_posts->posts[0]->post_title);
            wp_reset_postdata(); ?>
          </div>
          <div class="col-md-3 offset-md-1">
            <aside class="sidebar title-ms" id="sidebar">
              <?php get_template_part( 'sidebar-right' ); ?>
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
