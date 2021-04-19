<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="categories-menu clearfix">
        <button class="navbar-toggler blog-toggler d-lg-none" type="button" data-toggle="collapse" data-target=".blog-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
          Show categories
        </button>
        <nav class="collapse navbar-collapse blog-nav" id="blog_nav">
          <?php
          wp_nav_menu(array(
          'theme_location'  => 'blog',
          'container'       => 'div',
          'container_id'    => 'cat-menu',
          'menu_id'         => false,
          'menu_class'      => 'menu',
          'depth'           => 3,
          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
          'walker'          => new wp_bootstrap_navwalker()
          ));
          ?>
        </nav>
      </div>
    </div>
  </div>
</div>
