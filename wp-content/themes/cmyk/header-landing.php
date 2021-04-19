<?php
/**
 * The header for Landing pages
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oxygen:400,700|Rock+Salt" rel="stylesheet">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/inc/assets/images/favicon.png">
<?php wp_head(); ?>
<!-- Bing code -->
<meta name="msvalidate.01" content="0D0DDB7374D149E002B8F3F0A371343B" />
<!-- Yandex code -->
<meta name="yandex-verification" content="c6e13ebbc42b24c2" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102343200-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-102343200-1');
</script>
<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MFM79ZH');</script>
<!-- End Google Tag Manager -->
<!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '1518873334817702');
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1"
    src="https://www.facebook.com/tr?id=1518873334817702&ev=PageView
    &noscript=1"/>
  </noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?> id="landing">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
  <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFM79ZH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 float-right">
            <div class="logo">
              <h2>
                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                  <img src="<?php bloginfo('template_url'); ?>/inc/assets/images/logo-white-small.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="img-fluid">
                </a>
              </h2>
            </div>
          </div>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <header class="section-title">
                <h1 class="text-center"><?php the_field('landing_title'); ?></h1>
                <p>
                  <?php the_field('landing_subtitle'); ?>
                </p>
              </header>
            </div>
          </div>
        </div>
      </section>
    </header>
  <?php endif; ?>
