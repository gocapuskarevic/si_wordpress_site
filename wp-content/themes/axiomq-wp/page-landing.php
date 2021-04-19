<?php
/**
* Template Name: Page Landing
*/

get_header('landing'); ?>

  <?php
  if (is_page( 'the-report' ) ): ?>
    <?php
    get_template_part( 'template-parts/report' );
    ?>
  <?php endif;
  ?>

  <?php
  if (is_page( 'fix-for-free' ) ): ?>
    <?php
    get_template_part( 'template-parts/fix-for-free' );
    ?>
  <?php endif;
  ?>

  <?php
  if (is_page( 'fix-for-free-sign-up' ) ): ?>
    <?php
    get_template_part( 'template-parts/fix-for-free-sign-up' );
    ?>
  <?php endif;
  ?>

  <?php
  if (is_page( 'launch-your-web-store' ) ): ?>
    <?php
    get_template_part( 'template-parts/ecommerce' );
    ?>
  <?php endif;
  ?>

  <?php
  if (is_page( 'thank-you' ) ): ?>
    <?php
    get_template_part( 'template-parts/thank-you' );
    ?>
  <?php endif;
  ?>

<?php
get_footer('landing'); ?>
