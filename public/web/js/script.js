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
        $('.loader0').fadeOut(1000);
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
        items: 4.5,
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
                items: 4.5
            }
        }
    });


    $(".h-slider").owlCarousel({
        nav: true,
        loop: true,
        dots: true,
        autoplay: 5000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        items: 1
    });




    $(".latest-requests-slider").owlCarousel({
        nav: false,
        loop: true,
        dots: true,
        autoplay: 4000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        items: 6,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            767: {
                items: 3
            },
            991: {
                items: 4
            },
            1024: {
                items: 6
            },
            2000: {
                items: 6
            }
        }
    });



    $(".h-offers-slider").owlCarousel({
        nav: false,
        loop: true,
        dots: true,
        autoplay: 4000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        items: 6,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            767: {
                items: 3
            },
            991: {
                items: 4
            },
            1024: {
                items: 6
            },
            2000: {
                items: 6
            }
        }
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





    //* Add Phone no select
    function phoneNoselect() {
        if ($('#msform').length) {
            $("#phone").intlTelInput();
            $("#phone").intlTelInput("setNumber", "+880");
        };
    };
    //* Select js
    function nice_Select() {
        if ($('.product_select').length) {
            $('select').niceSelect();
        };
    };
    /*Function Calls*/
    phoneNoselect();
    nice_Select();
});






$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});









/****************************************************/
// category page

$('.category-toggle').click(function (e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
        $(this).toggleClass("active").siblings().removeClass("active");
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().slideToggle();
        $this.next().toggleClass('show');
        $(this).toggleClass("active").siblings().removeClass("active");

    }

    // $(".category-toggle").click(function(){
    //     $(this).toggleClass("active").siblings().removeClass("active");
    // })
});


$('#country_id').change(function () {
    var cid = $(this).val();


    if (cid) {

        $.ajax({
            type: "get",
            url: " /getStates/" + cid,
            success: function (res) {
                if (res) {
                    $("#state_id").empty();
                    $("#city_id").empty();
                    $("#state_id").append('<option selected disabled>' + select_state + '</option>');
                    $.each(res, function (key, value) {
                        $("#state_id").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    $('#state_id').niceSelect('update');

                }
            }

        });
    }

    document.getElementById("country_id_value").value = cid;

});
$('#state_id').change(function () {

    var sid = $(this).val();

    if (sid) {
        $.ajax({
            type: "get",
            url: "/getCities/" + sid,
            success: function (res) {
                if (res) {
                    $("#city_id").empty();
                    $("#city_id").append('<option selected disabled>' + select_city + '</option>');
                    $.each(res, function (key, value) {
                        $("#city_id").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    $('#city_id').niceSelect('update');

                }
            }

        });
    }

    document.getElementById("state_id_value").value = sid;

});
$('#city_id').change(function () {
    document.getElementById("city_id_value").value = $(this).val();
});


$(".select-nosearch").select2({
    placeholder: "  {{ __('general.categories') }}  ",
    allowClear: true
});



function ValidateStepOne() {
    var fields = ["supplier_name", "email", "hot_number", "mobile", "category_ids", "password", "password_confirmation"];

    $.each(fields, function (index, field) {
        $('#' + field).removeClass("error-input");
        $('.' + field + '_err').text('');
    });

    let supplier_name_value = $("input[name=supplier_name]").val();
    let email_value = $("input[name=email]").val();
    let mobile_value = $("input[name=mobile]").val();
    let hot_number_value = $("input[name=hot_number]").val();
    var categories_value = $('#category_ids').val();;
    let password_value = document.getElementById("password").value;
    let password_confirmation_value = document.getElementById("password_confirmation").value;
    let _token = $('meta[name="csrf-token"]').attr('content');


    $.ajax({
        url: "/ValidateStepOne",
        type: "POST",
        data: {
            supplier_name: supplier_name_value,
            email: email_value,
            mobile: mobile_value,
            hot_number: hot_number_value,
            category_ids: categories_value,
            password: password_value,
            password_confirmation: password_confirmation_value,
            _token: _token
        },
        success: function (data) {
            console.log(data);
            if ($.isEmptyObject(data.error)) {
                console.log('success');

                var current_step_id = "information_form";
                var next_step_id = "location_form";

                verificationForm.NextStep(current_step_id, next_step_id);

            } else {
                console.log(data.error);
                printErrorMsg(data.error);
            }
        },
    });
}


function ValidateStepTwo() {

    var fields = ["state_id", "city_id", "country_id", "street_nom", "zip_code", "address", "lat", "lang"];

    $.each(fields, function (index, field) {
        $('#' + field).removeClass("error-input");
        $('.' + field + '_err').text('');
    });

    let country_id_value = $("input[name=country_id]").val();
    let state_id_value = $("input[name=state_id]").val();
    let city_value = $("input[name=city_id]").val();
    let street_nom_value = $("input[name=street_nom]").val();
    var zip_code_value = $('#zip_code').val();
    let address_value = document.getElementById("address").value;
    let lat_value = document.getElementById("lat").value;
    let lang_value = document.getElementById("lng").value;
    let _token = $('meta[name="csrf-token"]').attr('content');


    $.ajax({
        url: "/ValidateStepTwo",
        type: "POST",
        data: {
            country_id: country_id_value,
            state_id: state_id_value,
            city_id: city_value,
            street_nom: street_nom_value,
            zip_code: zip_code_value,
            address: address_value,
            lat: lat_value,
            lang: lang_value,
            _token: _token
        },
        success: function (data) {
            console.log(data);
            if ($.isEmptyObject(data.error)) {
                console.log('success');

                var current_step_id = "location_form";
                var next_step_id = "Images_form";

                verificationForm.NextStep(current_step_id, next_step_id);

            } else {
                console.log(data.error);
                printErrorMsg(data.error);
            }
        },
    });
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#msform').submit(function (e) {
    e.preventDefault();

    var fields = ["store_background", "store_image"];

    $.each(fields, function (index, field) {
        $('#' + field).removeClass("error-input");
        $('.' + field + '_err').text('');
    });

    let formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url: `/ValidateStepThree`,
        data: formData,
        contentType: false,
        processData: false,

        success: function (data) {
            console.log(data);
            if ($.isEmptyObject(data.error)) {
                console.log('success');
                event.returnValue = true;
                $("#msform").submit();
                return true;

            } else {
                console.log(data.error);
                printErrorMsg(data.error);
            }
        },


    });
});




//* Form js
function verificationForm() {
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    function NextStep(current_step_id, next_step_id) {
        if (animating) return false;
        animating = true;

        // current_fs = $(this).parent();
        // next_fs = $(this).parent().next();

        current_fs = $("#" + current_step_id);
        next_fs = $("#" + next_step_id);

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        // next_fs.show();
        $("#" + next_step_id).show();


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
    };

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

    verificationForm.NextStep = NextStep;


    $(".submit").click(function () {
        return false;
    })
};


verificationForm();


function printErrorMsg(msg) {
    $.each(msg, function (key, value) {
        $('#' + key).addClass("error-input");

        $('.' + key + '_err').text(value);
    });

}
