jQuery(document).ready(function() {
  var date = new Date();
  var year = date.getFullYear();
  jQuery('.current-year').text(year);

  jQuery('.about-block .block-subtitle').matchHeight();
  jQuery('.equal-height').matchHeight();
  if (jQuery(window).width() > 767) {
    jQuery('.post-excerpt').matchHeight();
    jQuery('.entry-title').matchHeight();
  }

  jQuery('body').on('click', '.main-menu-toggle', function() {
    var jQuerythis = jQuery(this),
        jQuerypushMenu = jQuerythis.closest('body').find('.main-menu'),
        jQuerybody = jQuerythis.closest('body');

    if(jQuerythis.hasClass('active')) {
      jQuerythis.removeClass('active');
      jQuerybody.removeClass('navigation-open');
      jQuerypushMenu.removeClass('active');
    } else {
      jQuerythis.addClass('active');
      jQuerybody.addClass('navigation-open');
      jQuerypushMenu.addClass('active');
    }
  });

  if (jQuery('.badge').length) {
    if (jQuery(window).width() > 767) {
      setTimeout(function() {
        jQuery('.badge').addClass('active');
      }, 250);
    }

    jQuery(window).resize(function() {
      if (jQuery(window).width() > 767) {
        setTimeout(function() {
          jQuery('.badge').addClass('active');
        }, 250);
      }
    });
  }

  if (jQuery(".more-scroll").length) {
    jQuery(".more-scroll").scroll();
  }
});
