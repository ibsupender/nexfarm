jQuery(document).ready(function($) {

    var rtl;
     
    if (pranayama_yoga_data.rtl == '1') {
        rtl = true;
    } else {
        rtl = false;
    }

    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $(".testimonial-tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".testimonial-tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    /* Equal Height */
    $('.section-three .col').matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });

    $('html').click(function() {
        $('.site-header .header-b .btn-search .search-form').hide();
    });

    $('.site-header .header-b .btn-search .search-form').click(function(event) {
        event.stopPropagation();
    });
    $(".site-header .header-b .btn-search .search").click(function() {
        $(".site-header .search-form").slideToggle();
        return false;
    });

    $(".testimonial-tabs-menu").owlCarousel({
        // Most important owl features
        items: 3,
        // Navigation
        nav: false,
        margin: 20,
        rtl: rtl,
        mouseDrag: false,
        rewindNav: false,
        pagination: false,
        itemsTablet: [768, 3],
        itemsMobile: [767, 1],
    });

    var wsize = $(window).width();
    if (wsize > 767) {
        $(".testimonial .testimonial-tabs-menu .owl-stage div:nth-child(2)").addClass("current");
    } else {
        $(".testimonial .testimonial-tabs-menu .owl-stage div:first-child").addClass("current");
    }

    //mobile menu
    if (wsize < 1025) {
        $('.menu-opener').click(function() {
            $('body').addClass('menu-open');

            $('.btn-close-menu').click(function() {
                $('body').removeClass('menu-open');
            });

            $('.overlay').click(function() {
                $('body').removeClass('menu-open');
            });

        });



        $('.main-navigation').prepend('<div class="btn-close-menu"></div>');

        $('.main-navigation ul .menu-item-has-children').append('<div class="angle-down"></div>');

        $('.main-navigation ul li .angle-down').click(function() {
            $(this).prev().slideToggle();
            $(this).toggleClass('active');
        });
    }
});