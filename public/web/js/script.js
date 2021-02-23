/*global $,owl,smoothScroll,AOS,alert*/
$(document).ready(function () {
    "use strict";

    /* ---------------------------------------------
     Loader Screen
    --------------------------------------------- */
    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('#loading').fadeOut(1000);
    });

    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('.loader').fadeOut(1000);
    });


    $('[data-tool="tooltip"]').tooltip({
        trigger: 'hover',
        animate: true,
        delay: 50,
        container: 'body'
    });

    /* ---------------------------------------------
     Scrool To Top Button Function
    --------------------------------------------- */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("right", "20px");
        } else {
            $(".toTop").css("right", "-100px");
        }
    });

    $(".toTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //customize the header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.main-head').addClass('sticky');
        } else {
            $('.main-head').removeClass('sticky');
        }
    });

    $('[data-fancybox]').fancybox();

    $(".products-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["", ""],
        dots: true,
        autoplay: 5000,
        items: 4,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1300: {
                items: 4
            }
        }
    });

    $(".brands-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["", ""],
        dots: true,
        autoplay: 5000,
        items: 4,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    $(".rel-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["", ""],
        dots: true,
        autoplay: 5000,
        items: 3.5,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3.5
            }
        }
    });


    $(".h-slider").owlCarousel({
        nav: false,
        loop: true,
        dots: true,
        autoplay: 5000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        items: 1
    });

    $(".i-slider").owlCarousel({
        nav: false,
        loop: true,
        dots: true,
        autoplay: 5000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        items: 1
    });

    $('.op-search').click(function () {
        $('.search-area').addClass('on');
        $('.overlay-s').addClass('on');
    });

    $('.op-menu').click(function () {
        $('.main-sidebar').addClass('on');
        $('.overlay-s').addClass('on');
    });

    $('.op-notif').click(function () {
        $('.notifications').addClass('on');
        $('.overlay-s').addClass('on');
    });

    $('.op-user').click(function () {
        $('.user-area').addClass('on');
        $('.overlay-s').addClass('on');
    });

    $('.overlay-s').click(function () {
        $('.search-area, .main-sidebar, .notifications, .user-area').removeClass('on');
        $(this).removeClass('on');
    });

    AOS.init({
        once: true
    });

    $('select').niceSelect();


    var changeSlide = 4; // mobile -1, desktop + 1
    // Resize and refresh page. slider-two slideBy bug remove
    var slide = changeSlide;
    if ($(window).width() < 600) {
        var slide = changeSlide;
        slide--;
    } else if ($(window).width() > 999) {
        var slide = changeSlide;
        slide++;
    } else {
        var slide = changeSlide;
    }
    $('.one').owlCarousel({
        nav: false,
        items: 1,
        autoplay: false
    })
    $('.two').owlCarousel({
        nav: false,
        margin: 15,
        mouseDrag: false,
        touchDrag: false,
        responsive: {
            0: {
                items: changeSlide - 1,
                slideBy: changeSlide - 1
            },
            600: {
                items: changeSlide,
                slideBy: changeSlide
            },
            1000: {
                items: changeSlide - 1,
                slideBy: changeSlide - 1
            }
        }
    })
    var owl = $('.one');
    owl.owlCarousel();
    owl.on('translated.owl.carousel', function (event) {
        $(".right").removeClass("nonr");
        $(".left").removeClass("nonl");
        if ($('.one .owl-next').is(".disabled")) {
            $(".slider .right").addClass("nonr");
        }
        if ($('.one .owl-prev').is(".disabled")) {
            $(".slider .left").addClass("nonl");
        }
        $('.slider-two .item').removeClass("active");
        var c = $(".slider .owl-item.active").index();
        $('.slider-two .item').eq(c).addClass("active");
        var d = Math.ceil((c + 1) / (slide)) - 1;
        $(".slider-two .owl-dots .owl-dot").eq(d).trigger('click');
    })
    $('.right').click(function () {
        $(".slider .owl-next").trigger('click');
    });
    $('.left').click(function () {
        $(".slider .owl-prev").trigger('click');
    });
    $('.slider-two .item').click(function () {
        var b = $(".item").index(this);
        $(".slider .owl-dots .owl-dot").eq(b).trigger('click');
        $(".slider-two .item").removeClass("active");
        $(this).addClass("active");
    });
    var owl2 = $('.two');
    owl2.owlCarousel();
    owl2.on('translated.owl.carousel', function (event) {
        $(".right-t").removeClass("nonr-t");
        $(".left-t").removeClass("nonl-t");
        if ($('.two .owl-next').is(".disabled")) {
            $(".slider-two .right-t").addClass("nonr-t");
        }
        if ($('.two .owl-prev').is(".disabled")) {
            $(".slider-two .left-t").addClass("nonl-t");
        }
    })
    $('.right-t').click(function () {
        $(".slider-two .owl-next").trigger('click');
    });
    $('.left-t').click(function () {
        $(".slider-two .owl-prev").trigger('click');
    });

    $('.op-social').click(function () {
        $('.social.shares').slideToggle();
    });
    if ($('.file-upload').length) {
        $('.file-upload').file_upload();
    }

    if ($('.select-nosearch').length) {
        $('.select-nosearch').select2({
            minimumResultsForSearch: Infinity
        });
    }


    
    //* Form js
    function verificationForm(){
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function () {
            return false;
        })
    }; 
    
    //* Add Phone no select
    function phoneNoselect(){
        if ( $('#msform').length ){   
            $("#phone").intlTelInput(); 
            $("#phone").intlTelInput("setNumber", "+880"); 
        };
    }; 
    //* Select js
    function nice_Select(){
        if ( $('.product_select').length ){ 
            $('select').niceSelect();
        };
    }; 
    /*Function Calls*/  
    verificationForm ();
    phoneNoselect ();
    nice_Select ();
});