<?php
/**
 * Template part for displaying Team page content
 */
?>
<canvas id="canvas" tabindex="1"> </canvas>
<section class="section-wrap">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="intro-text">
          <?php the_field('intro_text'); ?>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <?php if( have_rows('team_member') ): $counter=0;?>
        <?php while( have_rows('team_member') ): the_row();
          // vars
          $team_member_image = get_sub_field('team_member_image');
          $team_member_name = get_sub_field('team_member_name');
          $team_member_position = get_sub_field('team_member_position');
          $team_member_content = get_sub_field('team_member_content');
          ?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="team-member">
              <div class="team-member-modal"></div>
                <div class="team-member-info">
                  <a class="team-member-close" href="#"><i class="fal fa-times"></i></a>
                  <h4><?php echo $team_member_name; ?></h4>
                  <h6><?php echo $team_member_position; ?></h6>
                  <p>
                    <?php echo $team_member_content; ?>
                  </p>
                  <div class="team-member-social">
                    <?php if( have_rows('team_member_social') ): ?>
                      <ul>
                        <?php while( have_rows('team_member_social') ): the_row();
                          $team_member_social = get_sub_field('team_member_social_icon');
                          $team_member_social_link = get_sub_field('team_member_social_link');
                        ?>
                          <?php if(!empty($team_member_social_link)) : ?><li><a href="<?php echo $team_member_social_link; ?>" target="blank"><span class="fab fa-<?php the_sub_field('team_member_social_icon'); ?>"></span></a></li><?php endif; ?>
                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="team-member-img" style="overflow:hidden">
                  <img src="<?php echo $team_member_image['url']; ?>" alt="<?php echo $team_member_image['alt'] ?>" />
                    <div class="img-overlay">
                    <i class="fal fa-info-circle"></i>
                    </div>
                </div>
              <h4><?php echo $team_member_name; echo '<span class="for-mobile-only"><i class="fal fa-info-circle"></i></span>'; ?></h4>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/associates' ); ?>
<?php get_template_part( 'template-parts/member' ); ?>
<?php get_template_part( 'template-parts/excerpt', 'container' ); ?>
