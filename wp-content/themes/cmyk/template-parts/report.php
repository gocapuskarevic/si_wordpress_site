<?php
/**
 * Template part for displaying Report page
 */

?>

<section class="section-wrap the-report-wrap">
  <header class="section-title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 offset-md-2">
          <h2><?php the_field('report_title'); ?></h2>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-7">
        <h3><strong><?php the_field('report_subtitle'); ?></strong></h3>
        <p>
          <?php the_field('report_content'); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">
        <?php if( have_rows('report_content_block') ): ?>
          <?php while( have_rows('report_content_block') ): the_row();
            // vars
            $report_icon = get_sub_field('report_icon');
            $report_title = get_sub_field('report_title');
            $report_description = get_sub_field('report_description');
            ?>
            <section class="section-wrap text-wrap">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-2">
                    <div class="badge-icon float-right">
                      <i class="<?php echo $report_icon; ?>"></i>
                    </div>
                  </div>
                  <div class="col-10">
                    <div class="text-block">
                      <h3><?php echo $report_title; ?></h3>
                      <p><?php echo $report_description; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="col-md-5">
        <?php

          $image = get_field('report_image');

          if( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?>" class="img-fluid float-right the-report-image" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <?php if( have_rows('report_block') ): ?>
          <?php while( have_rows('report_block') ): the_row();
            // vars
            $report_block_title = get_sub_field('report_block_title');
            $report_block_content = get_sub_field('report_block_content');
            ?>
            <section class="more-space">
              <h3><?php echo $report_block_title; ?></h3>
              <p>
                <?php echo $report_block_content; ?>
              </p>
            </section>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <?php
        get_template_part( 'template-parts/form' );
        ?>
      </div>
    </div>
  </div>
</section>
