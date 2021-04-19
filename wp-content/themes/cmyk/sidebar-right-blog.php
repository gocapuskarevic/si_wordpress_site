<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<div class="sidebar__inner">
<div class="title-ms">
  <div class="row">
    <div class="col-12">
      <h4 class="follow-us__title"><?php the_field('follow_us', 'option'); ?></h4>
      <?php echo do_shortcode('[addthis tool=addthis_horizontal_follow_toolbox]'); ?>
      <h4>Categories</h4>
    </div>
  </div>
</div>
<div class="categories-sidebar">
  <div class="row">
    <div class="col-12">
      <?php wp_list_categories( array(
        'show_count'    => true,
        'exclude_slugs' => [ 'unkategorisiert', 'most-popular' ],
        'title_li'      => ''
      ));?>
    </div>
  </div>
</div>

<div class="title-ms">
  <div class="row">
    <div class="col-12">
      <h4>Most popular</h4>
    </div>
  </div>
</div>
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'most-popular',
    'posts_per_page' => 10,
);
$arr_posts = new WP_Query( $args );
if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
<div class="most-popular-post">
  <div class="media">
    <div class="mr-3">
      <div class="post-ms-img">
        <?php the_post_thumbnail( 'blog-thumbnail' ); ?>
      </div>
    </div>
    <div class="media-body">
    <div class="mt-0">
      <p class="category-name">
        <a href="<?php the_permalink(); ?>">
        <?php incomplete_cat_list(', '); ?>
        </a>
      </p>
      <h5 class="post-ms-title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h5>
    </div>
  </div>
  </div>
</div>
<?php endwhile;
endif; ?></div>

<script type="text/javascript">
window.onload=function(){
  var tmp=document.getElementsByTagName('body')[0].clientWidth;
if(tmp>979){
    var sidebarS = new StickySidebar('#sidebar', {
        containerSelector: '.blog-index',
        innerWrapperSelector: '.sidebar__inner',
        topSpacing: 75,
        bottomSpacing: 20
    });
  }
}

</script>
