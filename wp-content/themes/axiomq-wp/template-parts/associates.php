<?php
/**
 * Template part for displaying Friends and Associates content
 */
?>

<section class="section-wrap pb-4">
  <header class="section-title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h2><?php the_field('associates_title'); ?></h2>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="associates-wrap mt-3">
          <?php if( have_rows('associates') ): ?>
            <?php while( have_rows('associates') ): the_row();
              // vars
              $associates_image = get_sub_field('associates_image');
              $associates_link = get_sub_field('associates_link');
              ?>
              <div class="associates text-center">
                <?php if( $associates_link ): ?>
                  <a href="<?php echo $associates_link; ?>" target="_blanc">
                <?php endif; ?>
                <img src="<?php echo $associates_image['url']; ?>" alt="<?php echo $associates_image['alt'] ?>" width="150" />
                <?php if( $associates_link ): ?>
                  </a>
                <?php endif; ?>

              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

