<?php
/**
 * Template part for displaying Excerpt content
 */
?>
<div class="excerpt-wrap">
  <?php if( is_page( array( 'contact', 'careers', 'kontakt' ) )  ): ?>
    <h5><?php the_field('affiliate_excerpt_title', 'option'); ?></h5>
    <p>
      <?php the_field('affiliate_excerpt_content', 'option'); ?>
    </p>
    <?php if( get_field('affiliate_excerpt_link', 'option') ): ?>
      <a href="<?php the_field('affiliate_excerpt_link', 'option'); ?>" class="btn btn-rose btn-width-md excerpt-button"><?php the_field('affiliate_excerpt_link_text', 'option'); ?></a>
    <?php endif; ?>
  <?php else: ?>
    <h5><?php the_field('excerpt_title', 'option'); ?></h5>
    <p>
      <?php the_field('excerpt_content', 'option'); ?>
    </p>
    <div class="row">
      <div class="col-lg-12">
      <?php if( get_field('excerpt_bottom_text', 'option') ): ?>
        <div class="content-spacer">
          <p>
            <?php the_field('excerpt_bottom_text', 'option'); ?>
          </p>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php if( get_field('excerpt_link', 'option') ): ?>
      <a href="<?php the_field('excerpt_link', 'option'); ?>" class="btn btn-rose-transparent excerpt-button"><?php the_field('excerpt_link_text', 'option'); ?></a>
    <?php endif; ?>
  <?php endif; ?>
</div>
