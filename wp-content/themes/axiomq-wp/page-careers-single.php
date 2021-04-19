<?php
/**
* Template Name: Careers single
*/

get_header(); ?>

<section class="section-wrap single-job">
  <header class="section-title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <ul class="badge-list">
            <li class="badge green">
              <div class="badge-icon">
                <i class="fal fa-<?php the_field('badge_icon'); ?>"></i>
              </div>
            </li>
            <li class="single-post-title">
              <h2><?php the_title(); ?></h2>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="job-details">
          <p><?php the_field('location'); ?></p>

          <p><?php the_field('work_type'); ?></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="job-description">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="social-share">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<?php get_template_part( 'template-parts/excerpt', 'container' ); ?>

<?php
get_footer(); ?>
