<?php
/**
 * Template part for displaying What we do page content
 */
?>
<?php if( have_rows('image_text_block') ): ?>
  <?php while ( have_rows('image_text_block') ) : the_row(); ?>
    <section id="<?php the_sub_field('section_id'); ?>" class="section-wrap text-wrap <?php the_sub_field('section_class'); ?>">
      <div class="container">
        <div class="row">
          <?php if( have_rows('image_block') ): ?>
            <?php while ( have_rows('image_block') ) : the_row(); ?>
              <?php if(get_row_layout() == "image_text_image_field"): ?>
                <div class="col-lg-5 image-list-wrap one">
                  <div class="img-block" id="<?php the_sub_field('block_name'); ?>" style="background: url('<?php the_sub_field('badge_icon'); ?>') center/contain no-repeat">
                  </div>
                </div>
              <?php endif; ?>
              <?php if(get_row_layout() == "image_text_field"): ?>
                <div class="col-lg-7 image-list-wrap two">
                  <div class="text-block">
                    <h2><?php the_sub_field('title'); ?></h2>
                    <div class="entry-content">
                      <h4><?php the_sub_field('subtitle'); ?></h4>
                      <p><?php the_sub_field('content'); ?></p>
                    </div>  
                  </div>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/excerpt', 'container' ); ?>