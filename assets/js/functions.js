/*global jQuery */
/* Contents
// ------------------------------------------------>
    1.  LOADING SCREEN
    2.  BACKGROUND INSERT
    3.	MODULE SEARCH
    4.	MODULE CART
    5.	MODULE CANCEL
    6.  MOBILE MENU
    7.  NAVBAR STICKY
    8.  AJAX MAILCHIMP
    9.  AJAX CAMPAIGN MONITOR          
    10.  OWL CAROUSEL
    11.  MAGNIFIC POPUP       
    12. MAGNIFIC POPUP VIDEO
    13. BACK TO TOP
    14. SCROLL TO
    15. SLIDER RANGE
    16. AJAX CONTACT FORM
    17. PARALLAX FOOTER
    18. NICE SELECT INPUT
    19. ACCORDION ACTIVATION
    20. SHOP PRODUCT QUANTITY
    21. BANNER CLOSE
*/
(function ($) {
    "use strict";
    /* ------------------  LOADING SCREEN ------------------ */

    $(window).on("load", function () {
        $(".preloader").fadeOut(5000);
        $(".preloader").remove();
    });

    /* ------------------  Background INSERT ------------------ */

    var $bgSection = $(".bg-section");
    var $bgPattern = $(".bg-pattern");
    var $colBg = $(".col-bg");

    $bgSection.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = 'url(' + bgSrc + ')';
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-section");
        $(this).remove();
    });

    $bgPattern.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = 'url(' + bgSrc + ')';
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-pattern");
        $(this).remove();
    });

    $colBg.each(function () {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = 'url(' + bgSrc + ')';
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("col-bg");
        $(this).remove();
    });

    /* ------------------  MODULE SEARCH  ------------------ */

    var $moduleSearch = $(".module-icon-search"),
        $searchWarp = $(".module-search-warp");

    $moduleSearch.on("click", function () {
        $(this).parent().addClass("module-active");
        $(this).parent().siblings().removeClass("module-active");
        $searchWarp.addClass("search-warp-active");
    });

    /* ------------------  MODULE CART ------------------ */

    var $moduleCart = $(".module-icon-cart"),
        $cartWarp = $(".module-cart-warp");

    $moduleCart.on("click", function () {
        $(this).parent().toggleClass("module-active");
        $(this).parent().siblings().removeClass("module-active");
    });

    /* ------------------  MODULE CANCEL ------------------ */

    var $module = $(".module"),
        $moduleWarp = $(".module-warp"),
        $moduleCancel = $(".module-cancel");

    $moduleCancel.on("click", function (e) {
        $module.removeClass("module-active");
        $searchWarp.removeClass("search-warp-active");
        e.stopPropagation();
        e.preventDefault();
    });

    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $module.removeClass("module-active");
            $moduleWarp.removeClass("active");
            $searchWarp.removeClass("search-warp-active");
            $popMenuWarp.removeClass("popup-menu-warp-active");
        }
    });

    /* ------------------  MOBILE MENU ------------------ */
    var $w = $(window);
    var $wWidth = $w.width();
    var mobile_resolution_size = "1200";
    var $dropToggle = $("[data-toggle='dropdown']");
    $dropToggle.on("click", function (event) {
        $(this).each(() => {
            if ($wWidth <= mobile_resolution_size && $(this).attr('href') === '#') {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass("show");
                $(this).parent().toggleClass("show");
            } else if ($wWidth <= mobile_resolution_size && !$(this).attr('href') !== '#') {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass("show");
                $(this).parent().toggleClass("show");
                $(this).children('span').on('click', () => {
                    window.location.href = $(this).attr('href');
                })
            }
        })
    });

    /* ------------------ NAVBAR STICKY ------------------ */

    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            $('.navbar-sticky').addClass('navbar-fixed');
        } else {
            $('.navbar-sticky').removeClass('navbar-fixed');
        }
    });

    /* ------------------  AJAX MAILCHIMP ------------------ */

    $('.mailchimp').ajaxChimp({
        url: "http://wplly.us5.list-manage.com/subscribe/post?u=91b69df995c1c90e1de2f6497&id=aa0f2ab5fa", //Replace with your own mailchimp Campaigns URL.
        callback: chimpCallback

    });

    function chimpCallback(resp) {
        if (resp.result === 'success') {
            $('.subscribe-alert').html('<div class="alert alert-success">' + resp.msg + '</div>').fadeIn(1000);
            //$('.subscribe-alert').delay(6000).fadeOut();

        } else if (resp.result === 'error') {
            $('.subscribe-alert').html('<div class="alert alert-danger">' + resp.msg + '</div>').fadeIn(1000);
        }
    }

    $('.subscribe-alert').on('click', function () {
        $(this).fadeOut();
    });

    /* ------------------  AJAX CAMPAIGN MONITOR  ------------------ */

    $('#campaignmonitor').submit(function (e) {
        e.preventDefault();
        $.getJSON(
            this.action + "?callback=?",
            $(this).serialize(),
            function (data) {
                if (data.Status === 400) {
                    alert("Error: " + data.Message);
                } else { // 200
                    alert("Success: " + data.Message);
                }
            });
    });

    /* ------------------ OWL CAROUSEL ------------------ */

    var $carouselDirection = $("html").attr("dir");
    if ($carouselDirection == "rtl") {
        var $carouselrtl = true;
    } else {
        var $carouselrtl = false;
    }

    $(".carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data('loop'),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data('space'),
            nav: $Carousel.data('nav'),
            dots: $Carousel.data('dots'),
            center: $Carousel.data('center'),
            dotsSpeed: $Carousel.data('speed'),
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: $Carousel.data('slide-rs'),
                },
                1000: {
                    items: $Carousel.data('slide'),
                }
            }
        });
    });

    $(".custom-carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data('loop'),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data('space'),
            nav: $Carousel.data('nav'),
            dots: $Carousel.data('dots'),
            center: $Carousel.data('center'),
            dotsSpeed: $Carousel.data('speed'),
            dotsContainer: '#carousel-custom-dots',
            thumbs: true,
            thumbsPrerendered: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: $Carousel.data('slide-rs'),
                },
                1000: {
                    items: $Carousel.data('slide'),
                }
            }
        });
    });
    $(".client-carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data('loop'),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data('space'),
            nav: $Carousel.data('nav'),
            dots: $Carousel.data('dots'),
            center: $Carousel.data('center'),
            dotsSpeed: $Carousel.data('speed'),
            dotsContainer: '#carousel-custom-dots',
            thumbs: true,
            thumbsPrerendered: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: $Carousel.data('slide-rs'),
                },
                1000: {
                    items: $Carousel.data('slide'),
                }
            }
        });
    });
    $(".slider-carousel").each(function () {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data('loop'),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data('space'),
            nav: $Carousel.data('nav'),
            dots: $Carousel.data('dots'),
            center: $Carousel.data('center'),
            dotsSpeed: $Carousel.data('speed'),
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: $Carousel.data('slide-rs'),
                },
                1000: {
                    items: $Carousel.data('slide'),
                }
            },
        });
    });
    // Clicking On Thumbs
    $('.owl-thumbs .owl-thumb-item').on('click', function () {
        $(this).siblings(".owl-thumb-item").removeClass('active');
        $(this).addClass('active');
        $(".custom-carousel").trigger('to.owl.carousel', [$(this).index(), 300]);
    });
    // Draging The Carousel And The Thumbs Still has Active Class 
    $(".custom-carousel").on('changed.owl.carousel', function (event) {
        var items = event.item.count; // Number of items
        var item = event.item.index; // Position of the current item
        var owlDots = document.querySelectorAll('.owl-thumbs .owl-thumb-item');
        if (owlDots.length > 0) {
            owlDots[item].click()
        }
    })
    // Clicking The Custom Nav
    $('.custom-navs .next').click(function () {
        $(".custom-carousel").trigger('next.owl.carousel');
    });

    $('.custom-navs .prev').click(function () {
        $(".custom-carousel").trigger('prev.owl.carousel');
    });

    /* ------------------ MAGNIFIC POPUP ------------------ */

    var $imgPopup = $(".img-popup");
    $imgPopup.magnificPopup({
        type: "image"
    });
    $('.img-gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /* ------------------  MAGNIFIC POPUP VIDEO ------------------ */

    $('.popup-video,.popup-gmaps').magnificPopup({
        disableOn: 700,
        mainClass: 'mfp-fade',
        removalDelay: 0,
        preloader: false,
        fixedContentPos: false,
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                }
            },
            srcAction: 'iframe_src',
        }
    });

    /* ------------------  BACK TO TOP ------------------ */

    var backTop = $('#back-to-top');

    if (backTop.length) {
        var scrollTrigger = 200, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    backTop.addClass('show');
                } else {
                    backTop.removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        backTop.on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    /* ------------------  SCROLL TO ------------------ */

    var aScroll = $('a[data-scroll="scrollTo"]');
    aScroll.on('click', function (event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
            if ($(this).hasClass("menu-item")) {
                $(this).parent().addClass("active");
                $(this).parent().siblings().removeClass("active");
            }
        }
    });

    /* ------------------ SLIDER RANGE ------------------ */

    var $sliderRange = $("#slider-range"),
        $sliderAmount = $("#amount");
    $sliderRange.slider({
        range: true,
        min: 0,
        max: 500,
        values: [50, 300],
        slide: function (event, ui) {
            $sliderAmount.val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $sliderAmount.val("$" + $sliderRange.slider("values", 0) + " - $" + $sliderRange.slider("values", 1));

    /* ------------------  AJAX CONTACT FORM  ------------------ */

    var contactForm = $(".contactForm"),
        contactResult = $('.contact-result');
    contactForm.validate({
        debug: false,
        submitHandler: function (contactForm) {
            $(contactResult, contactForm).html('Please Wait...');
            $.ajax({
                type: "POST",
                url: "assets/php/contact.php",
                data: $(contactForm).serialize(),
                timeout: 20000,
                success: function (msg) {
                    $(contactResult, contactForm).html('<div class="alert alert-success" role="alert"><strong>Thank you. We will contact you shortly.</strong></div>').delay(3000).fadeOut(2000);
                },
                error: $('.thanks').show()
            });
            return false;
        }
    });

    /* ------------------  PARALLAX FOOTER ------------------ */

    siteFooter();
    $(window).resize(function () {
        siteFooter();
    });

    function siteFooter() {
        var siteContent = $('#wrapperParallax');

        var siteFooter = $('#footerParallax');
        var siteFooterHeight = siteFooter.height();

        siteContent.css({
            "margin-bottom": siteFooterHeight
        });
    };

    /* ------------------  NICE SELECT INPUT  ------------------ */

    $('select').niceSelect();

    /* ------------------  ACCORDION ACTIVATION  ------------------ */

    $('.collapse').on('shown.bs.collapse', function () {
        $(this).parent('.card').addClass('active-acc');
    });
    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).parent('.card').removeClass('active-acc');
    });

    /* ------------------  SHOP PRODUCT QUANTITY  ------------------ */

    $('.product-quantity span ').on('click', 'a.plus, a.minus', function () {
        // Get current quantity values
        var qty = $(this).parents('.product-quantity').find('.pro-qunt');
        var val = parseFloat(qty.val());
        var max = parseFloat(qty.data('max'));
        var min = parseFloat(qty.data('min'));
        var step = parseFloat(qty.data('step'));

        // Check If Quantity value is undefined or non numeric 
        if (isNaN(val)) {
            var val = 0;
        }

        // Change the value if plus or minus
        if ($(this).is('.plus')) {
            if (max && (max <= val)) {
                qty.val(max);
            } else {
                qty.val(val + step);
            }
        } else {
            if (min && (min >= val)) {
                qty.val(min);
            } else if (val > 1) {
                qty.val(val - step);
            }
        }
    });

    /* ------------------  BANNER CLOSE  ------------------ */

    $('.offer-banner  .banner-close').on('click', function () {
        $(this).parent('.offer-banner').remove()
    })

}(jQuery));