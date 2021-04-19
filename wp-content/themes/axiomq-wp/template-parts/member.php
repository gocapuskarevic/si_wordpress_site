<?php
/**
 * Template part for displaying Proud member scontent
 */
?>

<?php if( get_field('member') ): ?>
  <section class="section-wrap">
    <header class="section-title">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <h2><?php the_field('member_title'); ?></h2>
          </div>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <?php if( have_rows('member') ): ?>
          <?php while( have_rows('member') ): the_row();
            // vars
            $member_image = get_sub_field('member_image');
            $member_link = get_sub_field('member_link');
            ?>
            <div class="col-12 text-center">
              <?php if( $member_link ): ?>
                <a href="<?php echo $member_link; ?>" target="_blanc">
              <?php endif; ?>
                <img src="<?php echo $member_image['url']; ?>" alt="<?php echo $member_image['alt'] ?>" />
              <?php if( $member_link ): ?>
                </a>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

