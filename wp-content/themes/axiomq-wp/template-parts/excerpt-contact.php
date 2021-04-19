<?php
/**
 * Template part for displaying Excerpt contact content
 */
?>

<div class="excerpt-wrap contant-info">
  <h5><?php the_field('contact_excerpt_title', 'option'); ?></h5>
    <?php the_field('contact_excerpt_content', 'option'); ?>
    <p>
    <?php $email_is= str_replace('.com','aaa',str_replace('@','class',get_field('contact_mail', 'option'))); ?>
      <a href="#" class="message" data-message="<?php echo $email_is; ?>">
        <?php the_field('mail_icon', 'option'); ?>
        <?php echo encode_unicode(get_field('contact_mail', 'option')); ?>
      </a>
      <span>
        <a href="tel:<?php the_field('phone_number_code', 'option'); ?>">
          <?php the_field('phone_icon', 'option'); ?>
          <?php the_field('phone_number', 'option'); ?>
        </a>
      </span>
    </p>
    <p>
    <?php $email_is= str_replace('.com','aaa',str_replace('@','class',get_field('second_email_contact', 'option'))); ?>
    <a href="#" class="message" data-message="<?php echo $email_is; ?>">
        <?php the_field('mail_icon', 'option'); ?>
        <?php echo encode_unicode(get_field('second_email_contact', 'option')); ?>
      </a>
    </p>
    <div class="follow-us">
      <h4 class="follow-us__title"><?php the_field('follow_us', 'option'); ?></h4>
      <?php echo do_shortcode('[addthis tool=addthis_horizontal_follow_toolbox]'); ?>
    </div>

    

    <div class="content-no-spacer">
      <?php the_field('contact_second_title', 'option'); ?>
      <?php
        get_template_part( 'template-parts/address' );
      ?>
    </div>
  <img class="excerpt-coffee" src="<?php the_field('excerpt_image', 'option'); ?>">
  <?php if (!is_page( 'contact' ) && !is_page( 'kontakt' )): ?>
    <a href="<?php the_field('contact_button_link', 'option'); ?>" class="btn btn-white btn-width-md excerpt-button"><?php the_field('contact_button_link_text', 'option'); ?></a>
  <?php endif; ?>
</div>
