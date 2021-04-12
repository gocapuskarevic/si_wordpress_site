<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
  <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1">
            <div class="support">
              <div class="donate-logo">
                <img src="<?php echo get_template_directory_uri() . '/inc/images/doniraj_logo.png'; ?>">
              </div>
              <span>Podržite nas na <a href="https://donations.ndnv.org">donations.ndnv.org</a></span>
            </div>
            <p>Priče su nastale uz podršku European Endowment for Democracy. Stavovi izneti u ovim tekstovima ne predstavljaju nužno i stavove organizacije  European Endowment for Democracy.</p> 
          </div>
        </div>
      </div>
      
    </div>

    <?php get_template_part( 'footer-widget' ); ?>
  	<footer class="footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
  		<div class="container">
        <div class="row footer-flex">
          <div class="col-12 col-lg-8">
            <div class="footer__info">
              <p>© Sva prava zadržana 2020. <a href="https://www.autonomija.info/">autonomija.info</a> <span class="dash">-</span> <span class="site-name">Lica krize</span></p>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="social-share-footer">
              <a href="https://www.facebook.com/Autonomija">
                <svg width="30" height="30" viewBox="0 0 31 30" xmlns="http://www.w3.org/2000/svg">
                <path class="st0" d="M30.1826 15.0913C30.1826 6.75456 23.428 0 15.0913 0C6.75456 0 0 6.75456 0 15.0913C0 22.6235 5.51866 28.8669 12.7333 30V19.4538H8.89959V15.0913H12.7333V11.7663C12.7333 7.98438 14.9848 5.89533 18.4333 5.89533C20.0848 5.89533 21.8118 6.18986 21.8118 6.18986V9.90183H19.9083C18.0341 9.90183 17.4493 11.0653 17.4493 12.2586V15.0913H21.6347L20.9653 19.4538H17.4493V30C24.6639 28.8669 30.1826 22.6235 30.1826 15.0913Z"/>
                </svg>
              </a>
              <a href="https://twitter.com/autonomijandnv">
                <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                  <path class="st0" fill-rule="evenodd" clip-rule="evenodd" d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30ZM22.8346 11.2949C22.8346 11.1283 22.8346 10.9618 22.8227 10.7952C23.5722 10.2479 24.2266 9.56979 24.75 8.80839C24.06 9.10579 23.3105 9.31999 22.5371 9.40323C23.3342 8.92738 23.941 8.17785 24.2265 7.28554C23.4889 7.72572 22.6561 8.04696 21.7876 8.21352C21.0856 7.46399 20.0863 7 18.9798 7C16.8503 7 15.137 8.72508 15.137 10.8428C15.137 11.1403 15.1727 11.4377 15.2322 11.7232C12.0438 11.5566 9.20033 10.0338 7.30866 7.70192C6.97552 8.27299 6.7852 8.92734 6.7852 9.64116C6.7852 10.9737 7.46331 12.1515 8.49837 12.8415C7.86787 12.8178 7.27295 12.6393 6.76139 12.3538V12.4013C6.76139 14.2692 8.08203 15.8158 9.84281 16.1728C9.52161 16.256 9.17656 16.3036 8.83155 16.3036C8.58169 16.3036 8.34376 16.2798 8.10579 16.2442C8.59359 17.767 10.0094 18.8734 11.6988 18.9092C10.3782 19.9442 8.72444 20.551 6.92798 20.551C6.60674 20.551 6.30934 20.5391 6 20.5034C7.70131 21.5979 9.72383 22.2285 11.901 22.2285C18.968 22.2285 22.8346 16.375 22.8346 11.2949Z"/>
                </svg>
              </a>
              <a href="https://www.instagram.com/karikature_autonomija/?hl=en">
                <svg width="30" height="30" viewBox="0 0 31 31" xmlns="http://www.w3.org/2000/svg">
                  <path class="st0" d="M15.0966 17.923C16.5783 17.923 17.7795 16.7218 17.7795 15.2401C17.7795 13.7583 16.5783 12.5571 15.0966 12.5571C13.6149 12.5571 12.4137 13.7583 12.4137 15.2401C12.4137 16.7218 13.6149 17.923 15.0966 17.923Z"/>
                  <path class="st0" d="M18.4502 8.65479H11.743C10.7674 8.65479 9.91377 8.95966 9.365 9.50844C8.81623 10.0572 8.51135 10.9109 8.51135 11.8865V18.5938C8.51135 19.5694 8.81623 20.4231 9.42597 21.0328C10.0357 21.581 10.8284 21.8859 11.804 21.8859H18.4502C19.4258 21.8859 20.2795 21.581 20.8283 21.0328C21.438 20.4841 21.7429 19.6298 21.7429 18.6548V11.9475C21.7429 10.9719 21.438 10.1792 20.8892 9.56942C20.2795 8.95966 19.4862 8.65479 18.4502 8.65479ZM15.0966 19.3859C12.7796 19.3859 10.9503 17.4956 10.9503 15.2401C10.9503 12.9231 12.8406 11.0938 15.0966 11.0938C17.3521 11.0938 19.3039 12.9231 19.3039 15.2401C19.3039 17.5566 17.4137 19.3859 15.0966 19.3859ZM19.4258 11.8865C18.8771 11.8865 18.4502 11.4597 18.4502 10.9109C18.4502 10.3621 18.8765 9.93527 19.4258 9.93527C19.9752 9.93527 20.4014 10.3621 20.4014 10.9109C20.4014 11.4597 19.9746 11.8865 19.4258 11.8865Z"/>
                  <path class="st0" d="M15.2185 0.118164C6.92597 0.118164 0.21875 6.82548 0.21875 15.1176C0.21875 23.4108 6.92597 30.1182 15.2185 30.1182C23.5111 30.1182 30.2183 23.4108 30.2183 15.1176C30.2793 6.82548 23.5111 0.118164 15.2185 0.118164ZM23.2062 18.6547C23.2062 20.0572 22.7184 21.2767 21.8648 22.1297C21.0111 22.9834 19.7917 23.4108 18.4502 23.4108H11.804C10.4625 23.4108 9.24302 22.984 8.38937 22.1297C7.47475 21.2767 7.04792 20.0572 7.04792 18.6547V11.9474C7.04792 9.14256 8.93814 7.19133 11.804 7.19133H18.5112C19.9142 7.19133 21.0721 7.67914 21.9258 8.5328C22.7794 9.38646 23.2069 10.545 23.2069 11.9474V18.6547H23.2062Z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
  		</div>
  	</footer>
  <?php endif; ?>

  <?php wp_footer(); ?>
</body>
</html>
