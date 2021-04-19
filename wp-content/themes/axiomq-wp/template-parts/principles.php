<?php
/**
 * Template part for displaying Principles content
 */
?>

<section class="bg-turquoise section-wrap  text-center media-wrap direction-row">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <header class="section-title">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="big-title"><?php the_field('principles_title'); ?></h2>
            </div>
            <div class="col-sm-12">
              <?php the_field('principles_intro'); ?>
            </div>
          </div>
        </header>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <?php if( have_rows('media_block') ): ?>
            <?php while( have_rows('media_block') ): the_row();
              // vars
              $media_block_icon = get_sub_field('media_block_icon');
              $media_block_title = get_sub_field('media_block_title');
              $media_block_content = get_sub_field('media_block_content');
              ?>
              <div class="col-md-6">
                <div class="media-block">
                  <i class="far fa-<?php echo $media_block_icon; ?>"></i>
                  <h3 class="block-subtitle"><?php echo $media_block_title; ?></h3>
                  <p>
                    <?php echo $media_block_content; ?>
                  </p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
