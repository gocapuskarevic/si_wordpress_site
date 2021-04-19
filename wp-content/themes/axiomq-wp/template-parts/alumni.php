<?php
/**
 * Template part for displaying Alumni content
 */
?>

<section class="section-wrap team-section alumni-section">
  <header class="section-title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h2><?php the_field('alumni_title'); ?></h2>
        </div>
      </div>
    </div>
  </header>
  <div class="container-fluid">
    <div class="row">
      <?php if( have_rows('alumni_member') ): ?>
        <?php while( have_rows('alumni_member') ): the_row();
          // vars
          $alumni_image = get_sub_field('alumni_image');
          $alumni_name = get_sub_field('alumni_name');
          $alumni_position = get_sub_field('alumni_position');
          $alumni_content = get_sub_field('alumni_content');
          ?>
          <div class="col-lg-3 col-md-4">
            <div class="team-member">
              <div class="team-member-highlight">
                <div class="hexagon-wrap hexagon">
                  <div class="hexagon-in1">
                    <div class="hexagon-in2">
                      <img src="<?php echo $alumni_image['url']; ?>" alt="<?php echo $alumni_image['alt'] ?>" />
                    </div>
                  </div>
                </div>
                <h4><?php echo $alumni_name; ?></h4>
                <h6><?php echo $alumni_position; ?></h6>
                <p>
                  <?php echo $alumni_content; ?>
                </p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
