jQuery( function ( $ ) {
    'use strict';
    // here for each comment reply link of WordPress
    $( '.comment-reply-link' ).addClass( 'btn btn-primary' );

    // here for the submit button of the comment reply form
    $( '#commentsubmit' ).addClass( 'btn btn-primary' );

    // The WordPress Default Widgets
    // Now we'll add some classes for the WordPress default widgets - let's go

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

    // Fix woocommerce checkout layout
    $('#customer_details .col-1').addClass('col-12').removeClass('col-1');
    $('#customer_details .col-2').addClass('col-12').removeClass('col-2');
    $('.woocommerce-MyAccount-content .col-1').addClass('col-12').removeClass('col-1');
    $('.woocommerce-MyAccount-content .col-2').addClass('col-12').removeClass('col-2');

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

    $('.fa-play-circle').click(function(){
        $(this).remove();
        $('.video-placeholder').css('background-image', 'none');
        $('.video-placeholder').css('background-color', '#000');
        $('.post-video').css('display','block');
        $('.post-video').animate({'opacity':'1'},400);
        $('.overlay').remove();
        $('.post-video').css('z-index','0');
        var iframe = $('.post-video').data('video');
        $('.post-video').data('video','');
        $('.post-video').append(iframe);
    });

    $( "<p class='share-story'>Podeli priču</p>" ).insertBefore( ".addtoany_list" );
    $( '<div class="bottom-info"><p>'+$('#author-info').data('author')+'</p><p>Fotografija: Vojin Ivkov</p><p>Video: '+$('#author-info').data('video')+'</p></div>' ).insertAfter('.addtoany_list');

    $('ul#menu-menu-1 li').each(function(){
        var text = $(this).find('a').attr('title');
        var finnal = '';
        if(text == 'Home'){
            $(this).find('a').text('');
            $(this).find('a').append('<i class="fas fa-home"></i>');
        }else{
            var short = text.split(' ');
            if(short.length > 5){
                for( var i=0; i<5; i++){
                    if(i==4){
                        finnal+=short[i]+'...';
                    }else{
                        finnal+=short[i]+' ';
                    }
                }
            }else {
                finnal = text;
            }
            $(this).find('a').text(finnal);
        }
    })

    if($('.owl-carousel').length>0){
        $('.owl-carousel').owlCarousel({
            lazyLoad:true,
            loop:true,
            responsiveClass:true,
            nav:true,
            dots:false,
            navText: ['<i class="fal fa-arrow-circle-left"></i>','<i class="fal fa-arrow-circle-right"></i>'],
            responsive:{
                0:{
                    items:1,
                },
                992:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        });
    }

    if($( window ).width() < 992){
        var $play_btn = $('.video-placeholder i');
        console.log($($play_btn).css('z-index'));
        $('.navbar-toggler-icon').click(function(){
            if($($play_btn).css('z-index') == 10){
                $($play_btn).css('z-index','0');
            }else $($play_btn).css('z-index','10');
        })
    }

    
  
});


// Lightbox-----------------------------------------------------------------------
    var allUrls=[];

    function openLightBox(arg){
    var lb = document.getElementById('gallery-lightbox');
    lb.firstChild.nextSibling.src=arg;
    lb.style.display='flex';
    find_image();
    document.getElementById('prev').setAttribute('data-url',arg);
    document.getElementById('next').setAttribute('data-url',arg);

    }

    var counter=0;
    var currentPosition;

    function switch_image(thisobj){
    var forChange=document.getElementById('gallery-lightbox').firstChild.nextSibling;
    console.log(forChange);

    var direction=thisobj.getAttribute('id');
    if (counter==0){
        //Find element in array
        var current=thisobj.getAttribute('data-url');
        allUrls=urls;
        currentPosition=allUrls.indexOf(current);
    }
    if(direction=='next'){
    if(currentPosition==allUrls.length-1){
        currentPosition=0;
        forChange.src=allUrls[currentPosition];
        find_image();
    }
    else{
        forChange.src=allUrls[currentPosition+1];
        currentPosition++;
        find_image();
    }

    } else{
    if(currentPosition==0){
        currentPosition=allUrls.length-1;
        forChange.src=allUrls[currentPosition];
        find_image();
    }
    else{
        forChange.src=allUrls[currentPosition-1];
        find_image();
        currentPosition--;
    }
    }
    counter++;
    }

    function find_image(){
    var $img=document.getElementById('gallery-lightbox__animate');
    jQuery($img).css('opacity','0');
    jQuery($img).animate({opacity:1},500);

    }

    function close_gallery(){
    jQuery('#gallery-lightbox').css('display','none');
    counter=0;
    }

// Lightbox-----------------------------------------------------------------------


