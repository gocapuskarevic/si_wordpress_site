<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<h2><?php the_field('post_author'); ?></h2>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
			// 	'after'  => '</div>',
			// ) );
		?>
	</div><!-- .entry-content -->

	<div id="author-info" data-author="<?php the_field('post_author'); ?>" data-video="<?php the_field('video_author'); ?>"></div>
	
	<div class="post-carousel">
		<?php 
			if( have_rows('post_carousel') ):?>
				<div class="owl-carousel"><?php
					while( have_rows('post_carousel') ) : the_row(); $url =  wp_get_attachment_url(get_sub_field('carousel_item')); ?>
						<div class="item"><img src="<?php echo $url; ?>" onclick="openLightBox('<?php echo $url ?>');" data-url="<?php echo $url ?>"></div>
					<?php endwhile; ?>
				</div>
				<?php 
			endif;
		?>

		<?php 
			if( have_rows('post_carousel') ):?>
			<?php  echo '<script>var urls=new Array;</script>'; 
					while( have_rows('post_carousel') ) : the_row(); $url =  wp_get_attachment_url(get_sub_field('carousel_item')); ?>
						<?php echo '<script>urls.push("'.$url.'");</script>'; ?>
					<?php endwhile; ?>
			<?php 
			endif;
		?>

      <?php //Lightbox for gallery ?>
      <div id="gallery-lightbox">
				<img src='' alt="image" id="gallery-lightbox__animate">
				<div id="prev" onclick="switch_image(this);"><i class="fal fa-angle-left"></i></div>
        <div id="next" onclick="switch_image(this);"><i class="fal fa-angle-right"></i></div>
        <div id="top" onclick="close_gallery();"><i class="fal fa-times"></i></div>
      </div>
	</div>
</article><!-- #post-## -->
