<?php
/**
 * Template part for displaying Contact info content
 */
?>

<?php if( have_rows('contact_info', 25) ): ?>
  <ul>
  <?php while( have_rows('contact_info', 25) ): the_row();
    // vars
    $icon = get_sub_field('icon');
    $info = get_sub_field('info');
    ?>
    <li>
      <i class="fa fa-<?php echo $icon; ?>"></i>
      <?php echo $info; ?>
    </li>
  <?php endwhile; ?>
  </ul>
<?php endif; ?>
