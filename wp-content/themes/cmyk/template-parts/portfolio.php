<?php
/**
 * Template part for displaying Portfolio page content
 */
?>


<section class="intro">
    <div class="row">
      <div class="col-lg-9">
        <header class="section-title">
          <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content(); ?>
      </div>
    </div>
    <?php the_post_thumbnail(); ?>
  </section>


<section class="section-wrap portfolio-wrap">
  <div class="img-background-body hidden"></div>
    <div class="container-fluid">
      <div class="row">

         

<?php $posts_args = array(
                        'post_type'     => 'axiomqwiki',
                        'post_status'   => 'publish',
                        'order'         => 'DESC',
                        'orderby'       => 'date',
                        'posts_per_page' => 3
                    );

                    $design_posts = new WP_Query($posts_args); ?>

<?php if ($design_posts->have_posts()) : ?>
  <?php while ($design_posts->have_posts()) : $design_posts->the_post(); ?>
  <div class="col-lg-4 col-md-6 col-12 flex column port-col">
          <div class="portfolio-wrapper">
              <div class="portfolio-screenshot">
                  <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" />
                  <div class="img-hover">
                    <i class="far fa-search-plus magnify mx-3"></i>
                    
                  </div>
                <div class="image-modal hidden_img">
                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" />
                  <a href="#"><i class="fal fa-times"></i></a>
                </div>
              </div>
            <div class="portfolio-content">
              <div class="portfolio-content-title">
                <h4><?php the_title(); ?></h4>
                <a class="hover-site-url" target="blank" href="<?php echo $link; ?>">
                  <i class="far fa-link"></i>
                </a>
              </div>
              
            </div>
          </div>
        </div>
        <?php endwhile;?>
        <?php endif;?>

        
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/excerpt', 'container' ); ?>
