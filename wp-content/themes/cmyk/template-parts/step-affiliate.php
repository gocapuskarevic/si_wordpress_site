<?php
/**
 * Template part for displaying Step affiliate content
 */
?>

<section class="process">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h3 class="text-center"><?php the_field('affiliate_title'); ?></h3>
      </div>
    </div>
    <?php if( have_rows('affiliate_badge') ): ?>
      <div class="row">
        <?php while( have_rows('affiliate_badge') ): the_row();
          // vars
          $affiliate_icon = get_sub_field('affiliate_icon');
          $affiliate_title = get_sub_field('affiliate_title');
        ?>
          <div class="col-md-3 col-6">
            <div class="badge-wrap">
              <div class="badge-holder">
                <div class="badge-icon">
                  <i class="<?php echo $affiliate_icon; ?>"></i>
                </div>
                <div class="badge-title equal-height"><?php echo $affiliate_title; ?></div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
