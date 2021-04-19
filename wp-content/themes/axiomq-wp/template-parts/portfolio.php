<?php
/**
 * Template part for displaying Portfolio page content
 */
?>


<section class="largest-clients">
  <div class="container-fluid">
    <div class="row">
      <?php if( have_rows('client') ): ?>
        <?php while( have_rows('client') ): the_row();
          $image = get_sub_field('client_logo');
          $content = get_sub_field('client_text_content');
          $link = get_sub_field('client_url');?>
          <div class="col-lg-4 col-12">
            <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo wp_get_attachment_image_url($image,'medium_large'); ?>" alt="image"></a>
            <p><?php echo $content; ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


<div class="portfolio-tags">
  <div class="container-fluid">
    <ul class="portfolio-menu">
      <li class="portfolio-menu-item">
        <a class="current" href="#" data-filter="all">All</a>
      </li>
      <?php if( have_rows('portfolio_entry') ): ?>
        <?php while( have_rows('portfolio_entry') ): the_row(); ?>
          <?php $tags = get_sub_field_object('portfolio_tag'); ?>
            <?php foreach($tags['choices'] as $tag) :
            $tag_name = $tag;
            $tag =  strtolower(str_replace([' ', '/'], '-', $tag));
            $tag = str_replace('&', 'a', $tag)?>
              <li class="portfolio-menu-item"><a href="#" data-filter="<?php echo $tag; ?>"><?php echo $tag_name; ?></a></li>
            <?php endforeach;
          break;
        endwhile;
        reset_rows();
      endif;
      ?>
    </ul>
  </div>
</div>
<section class="section-wrap portfolio-wrap">
  <div class="img-background-body hidden"></div>
    <div class="container-fluid">
      <div class="row">
      <?php if(get_field('word_client')) $word = get_field('word_client'); ?>
      <?php if(get_field('tools_technologies')) $tools_technologies = get_field('tools_technologies'); ?>
        <?php if( have_rows('portfolio_entry') ): ?>

          <?php while( have_rows('portfolio_entry') ): the_row();

          $image = get_sub_field('portfolio_screenshot');
          $title = get_sub_field('portfolio_title');
          $content = get_sub_field('portfolio_content');
          $flag = get_sub_field('flag');
          $link = get_sub_field('client_url');
          $logo_link = get_sub_field('logo_url');
          $logo = get_sub_field('client_logo');
          $icon = get_sub_field('icon');
          $icon_name = get_sub_field('icon_name');
          $item_tag = get_sub_field('portfolio_tag');
            $tag_item = array();
            foreach($item_tag as $item) {
            $item = strtolower(str_replace([' ', '/'], '-', $item));
            $item = str_replace('&','a', $item);
            array_push($tag_item, $item);
          } ?>

        <div class="col-lg-4 col-md-6 col-12 flex column port-col <?php foreach($tag_item as $item){ echo $item.' ';} ?>">
          <div class="portfolio-wrapper">
            <?php if($image['filesize']): ?>
              <div class="portfolio-screenshot">
                <?php if( $link ): ?>
                <?php endif; ?>
                  <img class="img-responsive" src="<?php echo wp_get_attachment_image_url($image['ID'],'medium_large'); ?>" alt="<?php echo $image['alt'] ?>" />
                  <div class="img-hover">
                    <i class="far fa-search-plus magnify mx-3"></i>
                    <?php if( $link ): ?>
                      <a class="hover-site-url" target="blank" href="<?php echo $link; ?>">
                        <i class="far fa-link mx-3"></i>
                      </a>
                    <?php endif; ?>
                  </div>
                <div class="image-modal hidden_img">
                <img class="img-responsive" src="<?php echo $image['url']; ?>" srcset="<?php echo wp_get_attachment_image_srcset($image['ID']); ?>" sizes="(max-width:330px) 300px,(max-width:800px) 768px, 1230px" alt="<?php echo $image['alt'] ?>" />
                  <a href="#"><i class="fal fa-times"></i></a>
                </div>
              </div>
            <?php endif; ?>
            <div class="portfolio-content">
              <div class="portfolio-content-title">
                <h4><?php echo $title; ?></h4>
                <a class="hover-site-url" target="blank" href="<?php echo $link; ?>">
                  <i class="far fa-link"></i>
                </a>
              </div>
              <p class="portfolio-title"><?php echo $word.' '.get_sub_field('client_location'); ?></p>
              <p><?php echo $content; ?></p>
              <div class="tech-list-wrap">
                <p class="mb-3 portfolio-title"><?php echo $tools_technologies; ?></p>
                <ul class="tech-list">
                  <?php while( have_rows('tech_list') ): the_row(); ?>
                    <li>
                      <i class="<?php if( get_sub_field('icon') )?><?php the_sub_field('icon'); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php the_sub_field('icon_name'); ?>"></i>
                    </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php get_template_part( 'template-parts/excerpt', 'container' ); ?>
