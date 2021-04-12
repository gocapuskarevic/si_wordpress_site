<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */


if (have_rows('page_widgets')) : 
  while (have_rows('page_widgets')) : the_row(); 

    if (get_row_layout() == "hero") : // layout: Hero
      include get_theme_file_path( '/layouts/hero.php' );
      
    elseif (get_row_layout() == "masonry") : // layout: Masonry
      include get_theme_file_path( '/layouts/masonry.php' );

    elseif (get_row_layout() == "text_block") : // layout: Text block
      include get_theme_file_path( '/layouts/text-block.php' );
      
    endif;
    
  endwhile;
endif;

?>
