jQuery( function ( $ ) {
    'use strict';
    // here for each comment reply link of wordpress
    $( '.comment-reply-link' ).addClass( 'btn btn-primary' );

    // here for the submit button of the comment reply form
    $( '#commentsubmit' ).addClass( 'btn btn-primary' );

    // The WordPress Default Widgets
    // Now we'll add some classes for the wordpress default widgets - let's go

    // the search widget
    $( '.widget_search input.search-field' ).addClass( 'form-control' );
    $( '.widget_search input.search-submit' ).addClass( 'btn btn-default' );
    $( '.variations_form .variations .value > select' ).addClass( 'form-control' );
    $( '.widget_rss ul' ).addClass( 'media-list' );

    $( '.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul, .widget_product_categories ul' ).addClass( 'nav flex-column' );
    $( '.widget_meta ul li, .widget_recent_entries ul li, .widget_archive ul li, .widget_categories ul li, .widget_nav_menu ul li, .widget_pages ul li, .widget_product_categories ul li' ).addClass( 'nav-item' );
    $( '.widget_meta ul li a, .widget_recent_entries ul li a, .widget_archive ul li a, .widget_categories ul li a, .widget_nav_menu ul li a, .widget_pages ul li a, .widget_product_categories ul li a' ).addClass( 'nav-link' );

    $( '.widget_recent_comments ul#recentcomments' ).css( 'list-style', 'none').css( 'padding-left', '0' );
    $( '.widget_recent_comments ul#recentcomments li' ).css( 'padding', '5px 15px');

    $( 'table#wp-calendar' ).addClass( 'table table-striped');

    // Adding Class to contact form 7 form
    $('.wpcf7-form-control').not(".wpcf7-submit, .wpcf7-acceptance, .wpcf7-file, .wpcf7-radio").addClass('form-control');
    $('.wpcf7-submit').addClass('btn btn-primary');

    // Adding Class to Woocommerce form
    $('.woocommerce-Input--text, .woocommerce-Input--email, .woocommerce-Input--password').addClass('form-control');
    $('.woocommerce-Button.button').addClass('btn btn-primary mt-2').removeClass('button');

    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
    });


    // Add Option to add Fullwidth Section
    function fullWidthSection(){
        var screenWidth = $(window).width();
        if ($('.entry-content').length) {
            var leftoffset = $('.entry-content').offset().left;
        }else{
            var leftoffset = 0;
        }
        $('.full-bleed-section').css({
            'position': 'relative',
            'left': '-'+leftoffset+'px',
            'box-sizing': 'border-box',
            'width': screenWidth,
        });
    }
    fullWidthSection();
    $( window ).resize(function() {
        fullWidthSection();
    });

    // Allow smooth scroll
    $('.page-scroller').on('click', function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing');
    });

    //Portfolio page--> displays all tiles
    function showAll(){
        $(".portfolio-wrap").animate({opacity:"1"},800);
    }
    showAll();

    //Display checked category
    function getId(){
        $(".port-col").css('opacity','0');
        var isTrue=this.getAttribute("data-filter");
        
        if(isTrue=="all"){

            $(".port-col").animate({opacity:"1"},3000)

        }else {

            $("."+isTrue).animate({opacity:'1'},3000)
            
        }

    }
    //Add event listener on each li a
    (function(){
        var chk=document.getElementsByClassName("portfolio-menu-item");
        var chkF=Array.prototype.slice.call(chk,0);
        chkF.forEach(function(input){
        input.children[0].addEventListener("click",getId);
         })
    })()

    $('.portfolio-screenshot').click(function(e){
        if(event.target.tagName == 'A') {
            e.preventDefault();
            $('.img-background-body').addClass('hidden');
            $('.image-modal').addClass('hidden_img');

        } else if(event.target.tagName == "I") {
            console.log(event.target);
            if($(event.target).hasClass('magnify')){
            $('.image-modal').addClass('hidden_img');
            $('.image-modal', this).removeClass('hidden_img');
            $('.img-background-body').removeClass('hidden');
            }
        }
    });

    
    if($(window).width() > 979 ){
        $('li > a:contains("Kontakt")').remove();
        $('li > a:contains("Contact")').remove();
        $( 'li:empty' ).remove();
    }
    $('h4:contains("ANWENDUNGSENTWICKLUNG")').css('height','75px');
    $('h4:contains("ANWENDUNGSENTWICKLUNG")').css('margin-left','-10px');
    
    //Team member page
    
    if($(window).width() > 991 ){
        $('.for-mobile-only').each(function(){
            $(this).remove();
        })
        $('.team-member').on('click', function(){
            var teamInfo = $('.team-member-info', this);
            if(teamInfo.hasClass('visible')) {
                var checkClassState = false;
            } else {
                    checkClassState = true;
            }
            
            if (event.target.tagName == 'I' && event.target.classList.contains('fa-info-circle')) {
                $('.team-member-info').removeClass('visible');
                $(teamInfo).toggleClass( 'visible', checkClassState);
                $('.team-member-modal', this).addClass("visible");
            } else if($(event.target).hasClass('team-member-modal') || event.target.tagName == 'I' ) {
               
                event.preventDefault();
                $('.team-member-modal', this).removeClass('visible');
                $(teamInfo).toggleClass( 'visible', checkClassState);
            }
        });
        $( ".team-member-img" ).hover(
            function() {
              $(this).find(".img-overlay").animate({opacity: 1}, 300);
            }, function() {
              $(this).find(".img-overlay").animate({opacity: 0}, 100);
            }
          );
    }else {
       
        $('.team-member').on('click', function(){
            var teamInfo = $('.team-member-info', this);
            if(teamInfo.hasClass('visible')) {
                var checkClassState = false;
            } else {
                    checkClassState = true;
            }
            if ( event.target.classList.contains('img-overlay') || event.target.classList.contains('fa-info-circle') ) {
                $('.team-member-info').removeClass('visible');
                $(teamInfo).toggleClass( 'visible', checkClassState);
                $('.team-member-modal', this).addClass("visible");
            } else if($(event.target).hasClass('team-member-modal') || event.target.tagName == 'I' ) {

                event.preventDefault();
                $('.team-member-modal', this).removeClass('visible');
                $(teamInfo).toggleClass( 'visible', checkClassState);
            }
        });
    }


    $(document).click(function(e){
        if(!$(e.target).hasClass('magnify') && $(".portfolio-screenshot .image-modal").not(".hidden_img").length > 0) {
            e.preventDefault();
            $('.img-background-body').addClass('hidden');
            $('.image-modal').addClass('hidden_img');
        }
    });

    $('.portfolio-menu-item a').click(function(e){
        e.preventDefault();
        $('.portfolio-menu-item a').removeClass('current');
        $(this).addClass('current');
        var value = $(this).data('filter');
        if(value == 'all') {
            $('.port-col').removeClass('hidden');
        } else {
            $('.port-col').addClass('hidden');
            $('.port-col.'+value).removeClass('hidden');
        }
    });

    (function(){
        $('.blog-nav ul li a').removeClass('current');
        var pathname = window.location.pathname;
        var origin = window.location.origin;
        var sub;
        var blog_menu = $('.blog-nav ul li a');

        for(var i=0; i<blog_menu.length; i++){
           sub = blog_menu[i].href.substring(origin.length);
           if(sub.slice(-1) != '/') {
               sub += '/';
           }
           if (sub == pathname) {
               $(blog_menu[i]).addClass('current');
           }
        }
    })();

    if($(window).width() > 991 ){
        $(window).scroll(function () {
            var current = $(window).scrollTop();
            if( current > 300 ) {
                $( "#header-fixed" ).css( 'top', '0px' );
            } else {
                $("#header-fixed").css( 'top', '-72px' );
            }
        });
    }else {
        $( "#header-fixed" ).remove();
    }

    $('.order').on('click', function(){
        order($(this).data('url'))
    })
});

//Open email client and replace characters(Avoid spammers)
(function($){
    var link=$('.message');
    if(link){
        link.each(function(){
            $(this).on('click',function(e){
                e.preventDefault();
                var link_to_go=$(this).data('message').replace('class','@').replace('aaa','.com');
                window.location.replace('mailto:'+link_to_go);
              });
        })
    }
})(jQuery);
   


function order(image_url) {
    var all_data = { action: "order", mail: window.sessionStorage.getItem( "email"), url : image_url };
    jQuery.ajax({
        url: "http://localhost/si_wordpress_site/wp-admin/admin-ajax.php",
        method: "POST",
        async: true,
        data: all_data,
    }).done(function(html) {
           alert('Order is sent.')
    }).fail(function(xhr, status, err) { console.log([xhr, status, err]); });
}
  
    