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

<section class="section-wrap section-blog">
  <div class="container-fluid">
    <div class="blog-index">
      <div class="row">
        <div class="col-lg-8 col-md-12">
        <div id="measurement">
          <div class="row">
            <div class="col-12">
              <header class="page-header">
                <h1 class="entry-title">
                  Category: <?php single_cat_title(); ?>
                </h1>
              </header>
            </div>
          </div>
          <div class="category-list-wrap">
            <?php if ( have_posts() ) : ?>
            <div class="row">
              <?php while ( have_posts() ) : the_post(); ?>
              <div class="col-md-6 col-12">
                <article class="post" id="post-<?php the_ID(); ?>">
                  <header class="page-header">
                    <h1 class="entry-title">
                      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </h1>
                  </header>
                  <div class="entry-content clearfix">
                    <div class="post-featured-image"><?php the_post_thumbnail(); ?></div>
                    <?php the_excerpt(); ?>
                  </div>
                </article>
              </div>
              <?php
             endwhile;
              the_posts_navigation();
            else :
              get_template_part( 'template-parts/content', 'none' );
            endif; ?>
            </div>
          </div>
          <?php
          global $wp_query;
          $count = $wp_query->found_posts;
          if ($count > 10) :?>
          <div class="row">
            <div class="col-sm-12">
              <ul class="pager">
                <li class="previous"><?php next_posts_link( '&larr;&nbsp;Older', '' ); ?></li>
                <li class="next"><?php previous_posts_link( 'Newer&nbsp;&rarr;' ); ?></li>
              </ul>
            </div>
          </div>
          <?php endif; ?>
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
