<?php
/**
 * Template part for displaying About content
 */
?>

<?php if( have_rows('about_block') ): ?>
  <section class="section-wrap about-abbreviation background-block" id="more">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="excerpt-wrap">
            <p><?php the_field('text_area'); ?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php while( have_rows('about_block') ): the_row();
          // vars
          $about_title = get_sub_field('about_title');
          $about_content = get_sub_field('about_content');
          $about_link = get_sub_field('about_link');
          $about_link_text = get_sub_field('about_link_text');
          ?>
          <div class="col-md-4">
            <div class="about-block">
              <h3 class="block-subtitle"><?php echo $about_title; ?></h3>
              <p class="equal-height">
                <?php echo $about_content; ?>
              </p>

              <?php if( $about_link ): ?>
                <a href="<?php echo $about_link; ?>" class="btn btn-white btn-width-md">
              <?php endif; ?>

              <?php echo $about_link_text; ?>

              <?php if( $about_link ): ?>
                </a>
              <?php endif; ?>

            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if( have_rows('expertise_block') ): ?>
  <section id="expertise-home">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2><?php the_field('expertise_title'); ?></h2>
        </div>
      </div>
      <div class="row">
        <?php while( have_rows('expertise_block') ): the_row();
          // vars
          $expertise_title = get_sub_field('expertise_title');
          $expertise_content = get_sub_field('expertise_content');
          ?>
          <div class="col-md-4">
            <div class="expertise-block">
              <h3 class="block-subtitle"><?php echo $expertise_title; ?></h3>
              <p class="equal-height">
                <?php echo $expertise_content; ?>
              </p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="row">
        <div class="col-12 expertise-block-link">
        <a href="<?php echo the_field('expertise_link'); ?>" class="btn btn-white btn-width-md"><?php echo the_field('expertise_link_text'); ?></a>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
