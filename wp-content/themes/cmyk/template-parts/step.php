<?php
/**
 * Template part for displaying Step content
 */
?>

<?php if( have_rows('badge') ) : ?>
  <div class="container-fluid">
    <section class="process">
      <div class="row">
        <?php while( have_rows('badge') ): the_row();
          // vars
          $badge_title = get_sub_field('badge_title');
          $badge_icon = get_sub_field('badge_icon');
          $badge_hover_icon = get_sub_field('badge_hover_icon');
          $badge_link = get_sub_field('badge_link');
          $badge_link_text = get_sub_field('badge_link_text');
          $badge_grid = get_sub_field('badge_grid');

          ?>
          <div class="<?php echo $badge_grid; ?>">
            <div class="badge-wrap">
            <?php if( get_sub_field('badge_link') ): ?>
              <a href="<?php echo $badge_link; ?>">
            <?php endif; ?>
                <div class="badge-icon">
                  <div class="badge-img-wrap">
                    <img class="badge-default" src="<?php echo $badge_icon['url']; ?>">
                    <img class="badge-hover" src="<?php echo  $badge_hover_icon['url']; ?>">
                  </div>
                  <!--<i class="<?php echo $badge_icon['url']; ?>"></i>-->
                </div>
                <h4 class="equal-height"><?php echo $badge_title; ?></h4>
            <?php if( get_sub_field('badge_link') ): ?>
              </a>
            <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="brain-box">
            <?php if( get_field('brain-title') ): ?>
              <h2 class="text-center">
                <?php the_field('brain-title'); ?>
              </h2>
            <?php endif; ?>
            <div class="row">
              <?php if( have_rows('four_services') ) : ?>
                <?php while( have_rows('four_services') ) : the_row(); ?>
                  <div class="col-12 col-md-6 col-lg-3 services-wrap text-center pt-lg-5">
                    <h4><?php the_sub_field( 'service_text' ); ?></h4>
                    <a class="btn btn-rose" href="<?php the_sub_field( 'service_link' ); ?>">GET A FREE QUOTE</a>
                    <hr class="mt-5 mb-5">
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php endif; ?>
