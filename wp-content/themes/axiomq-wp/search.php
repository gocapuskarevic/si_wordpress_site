<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section class="section-wrap section-blog">
  <?php if ( have_posts() ) : ?>
    <div class="social-share">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
    <div class="container-fluid">
      <section class="blog-search blog-padding">
        <div class="row">
          <div class="col-12">
          <header class="page-header">
            <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-starter' ), '<h3>' . get_search_query() . '</h3>' ); ?></h1><!-- .page-header -->
          </div>
        </div>
      </section>
        <div class="blog-index">
          <div class="row">
            <div class="col-lg-8 col-md-12">
            <div id="measurement">
              <div class="row posts-list">
                <?php
                /* Start the Loop */
                  while ( have_posts() ) : the_post();
                    /**
                    * Run the loop for the search to output the results.
                    * If you want to overload this in a child theme then include a file
                    * called content-search.php and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', 'search' );
                  endwhile;
                  the_posts_navigation();
                ?>
              </div>
            <?php
            global $wp_query;
            $count = $wp_query->found_posts;
            if ($count > 10) :?>
            <div class="row">
              <div class="col-sm-12">
                <ul class="pager">
                  <li class="previous"><?php next_posts_link( '&larr;&nbsp;Older', ''); ?></li>
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
  <?php
  else : ?>
    <div class="container-fluid">
      <div class="row">
        <?php get_template_part( 'template-parts/content', 'none' );  ?>
      </div>
    </div>
  <?php endif; ?>
</section>

<?php
get_footer();
