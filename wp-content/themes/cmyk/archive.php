<?php
 /**
* Template Name: Archive
 */

get_header(); ?>
<?php get_template_part( 'template-parts/category-menu' ); ?>
<section class="section-wrap section-blog">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <header class="page-header">
          <h1 class="entry-title">
            <?php the_title(); ?>
          </h1>
        </header>
        <div class="category-list-wrap">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-md-3 offset-md-1">
        <aside class="sidebar" id="sidebar">
          <?php get_template_part( 'sidebar-footer' ); ?>
        </aside>
      </div>
    </div>
  </div>
</section>

<div class="social-share">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<?php
get_footer();
