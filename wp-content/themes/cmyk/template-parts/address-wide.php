<?php
/**
 * Template part for displaying Address wide content
 */
?>

<div class="row">
  <div class="col-12">
    <div class="title-contact-info">
      <h5><?php the_field('contact_info_title', 'option'); ?></h5>
      <?php the_field('contact_second_title', 'option'); ?>
    </div>
  </div>
  <div class="col-md-4 col-12">
    <div class="box-left contact-box">
      <a href="<?php the_field('address_icon', 'option'); ?>">
        <i class="fal fa-location-arrow"></i>
      </a>
      <address>
        <?php the_field('contact_address', 'option'); ?>
      </address>
    </div>
  </div>
  <div class="col-md-4 col-12">
    <div class="box-center contact-box">
      <a href="tel:<?php the_field('phone_number_code', 'option'); ?>">
        <?php the_field('phone_icon', 'option'); ?>
        <?php the_field('phone_number', 'option'); ?>
      </a>
    </div>
  </div>
  <div class="col-md-4 col-12">
    <div class="box-right contact-box">
    <?php $email_is= str_replace('.com','aaa',str_replace('@','class',get_field('contact_mail', 'option'))); ?>
      <a href="#" class="message" data-message="<?php echo $email_is; ?>">
        <?php the_field('mail_icon', 'option'); ?>
        <?php echo encode_unicode(get_field('contact_mail', 'option')); ?>
      </a>
    </div>
  </div>
</div>
