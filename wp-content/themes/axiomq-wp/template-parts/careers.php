<?php
/**
 * Template part for displaying Careers page content
 */
?>

  <div class="container-fluid">
    <div class="row mt-6">
      <?php if( have_rows('position') ): ?>
        <?php while( have_rows('position') ): the_row();
          // vars
          $badge_icon = get_sub_field('badge_icon');
          $position_title = get_sub_field('position_title');
          $position_excerpt = get_sub_field('position_excerpt');
          $position_link = get_sub_field('position_link');
          $position_link_text = get_sub_field('position_link_text');
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="position-wrap equal-height">
              <div class="position-title">
                <ul class="badge-list">
                  <li class="badge turquoise">
                    <div class="badge-icon">
                      <i class="fal fa-<?php echo $badge_icon; ?>"></i>
                    </div>
                  </li>
                </ul>
                <h3><?php echo $position_title; ?></h3>
              </div>
              <p><?php echo $position_excerpt; ?></p>
              <a href="<?php echo $position_link; ?>" rel="full-article" class="btn btn-white btn-width-md"><?php echo $position_link_text ?></a>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/excerpt', 'container' ); ?>