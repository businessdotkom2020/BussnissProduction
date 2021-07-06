@extends('layouts.app')

@php
$menu = false ;
@endphp


@push('styles')

<style>
    #map {
        position: initial !important;
        height: 100% !important;
        width: 100% !important;
    }
</style>

<script>
    WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = {{ asset('vendor//webfont.js')}};
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
</script>

<link rel="preload" href="{{ asset('vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}" as="font"
    type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="{{ asset('vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/style.min.css')}}">




@endpush

@section('content')



<main class="main">
    <div class="intro-section">
        <div class="owl-carousel owl-theme owl-nav-inner owl-dot-inner animation-slider owl-loaded owl-drag"
            data-owl-options="{
            'nav': false,
            'dots': true,
            'items': 1,
            'autoplay': false,
            'responsive': {
                '1630': {
                    'nav': true,
                    'dots': false
                }
            }
        }">

            <!-- End of .intro-slide1 -->


            <!-- End of .intro-slide2 -->


            <!-- End of .intro-slide3 -->
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-1519px, 0px, 0px); transition: all 0.7s ease 0s; width: 4558px;">
                    <div class="owl-item" style="width: 1519.2px;">
                        <div class="banner banner-fixed intro-slide intro-slide1"
                            style="background-image: url(assets/images/demos/demo2/slides/slide-1.jpg); background-color: #f1f0f0;"
                            data-index="1">
                            <div class="container">
                                <figure class="slide-image floating-item slide-animate" data-animation-options="{
                        'name': 'fadeInDownShorter', 'duration': '1s'
                    }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                    data-child-depth="0.2"
                                    style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; animation-duration: 1s; animation-delay: 0.2s;">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/slides/ski.png"
                                        alt="Ski" width="729" height="570" class="layer" data-depth="0.2"
                                        style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(8.69484px, -10.7706px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                </figure>
                                <div class="banner-content text-right y-50 ml-auto">
                                    <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate"
                                        data-animation-options="{
                            'name': 'fadeInUpShorter', 'duration': '1s'
                        }" style="animation-duration: 1s; animation-delay: 0.2s;">Deals And Promotions</h5>
                                    <h3 class="banner-title ls-25 mb-6 slide-animate" data-animation-options="{
                            'name': 'fadeInUpShorter', 'duration': '1s'
                        }" style="animation-duration: 1s; animation-delay: 0.2s;">Fashion <span
                                            class="text-primary">Skiwears</span> for the ardent Sports devotees
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                            'name': 'fadeInUpShorter', 'duration': '1s'
                        }" style="animation-duration: 1s; animation-delay: 0.2s;">
                                        Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 1519.2px;">
                        <div class="banner banner-fixed intro-slide intro-slide2"
                            style="background-image: url(assets/images/demos/demo2/slides/slide-2.jpg); background-color: #d9ddd9;"
                            data-index="2">
                            <div class="container">
                                <figure class="slide-image floating-item slide-animate fadeInUpShorter show-content"
                                    data-animation-options="{
                        'name': 'fadeInUpShorter', 'duration': '1s'
                    }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                    data-child-depth="0.2"
                                    style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; animation-duration: 1s; animation-delay: 0.2s;">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/slides/woman.png"
                                        alt="Ski" width="865" height="732" class="layer" data-depth="0.2"
                                        style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(10.3169px, -13.8317px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                </figure>
                                <div class="banner-content y-50">
                                    <h5 class="banner-subtitle text-uppercase font-weight-bold mb-2 slide-animate fadeInRightShorter show-content"
                                        data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.5s'
                        }" style="animation-duration: 1s; animation-delay: 0.5s;">News And Inspiration</h5>
                                    <h3 class="banner-title ls-25 mb-2 text-uppercase lh-1 slide-animate fadeInRightShorter show-content"
                                        data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.7s'
                        }" style="animation-duration: 1s; animation-delay: 0.7s;">Natural Sound</h3>
                                    <div class="banner-price-info font-weight-bold text-dark ls-25 slide-animate fadeInRightShorter show-content"
                                        data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.9s'
                        }" style="animation-duration: 1s; animation-delay: 0.9s;">Sale up to
                                        <span class="text-primary font-weight-bolder text-uppercase ls-normal">30%
                                            Off</span></div>
                                    <p class="font-weight-normal text-default ls-25 slide-animate fadeInRightShorter show-content"
                                        data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '1.1s'
                        }" style="animation-duration: 1s; animation-delay: 1.1s;">Free returns extended to 30 days
                                        after delivery</p>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate fadeInRightShorter show-content"
                                        data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '1.3s'
                        }" style="animation-duration: 1s; animation-delay: 1.3s;">
                                        Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1519.2px;">
                        <div class="banner banner-fixed intro-slide intro-slide3"
                            style="background-image: url(assets/images/demos/demo2/slides/slide-3.jpg); background-color: #d0cfcb;"
                            data-index="3">
                            <div class="container">
                                <figure class="slide-image floating-item slide-animate" data-animation-options="{
                        'name': 'fadeInRightShorter', 'duration': '1s'
                    }" data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                    data-child-depth="0.2"
                                    style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/slides/man.png"
                                        alt="Ski" width="527" height="481" class="layer" data-depth="0.2"
                                        style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(6.28557px, -9.08883px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                </figure>
                                <div class="banner-content y-50">
                                    <h5 class="banner-subtitle text-uppercase font-weight-bold slide-animate"
                                        data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s'
                        }">Top Monthly Seller</h5>
                                    <h4 class="banner-title ls-25 slide-animate" data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s'
                        }">Sumsung 52 Inches Full HD <span class="text-primary">Smart LED</span> TV</h4>
                                    <p class="font-weight-normal text-dark slide-animate" data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s'
                        }">Only until the end of this week.</p>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                            'name': 'fadeInRightShorter', 'duration': '1s'
                        }">Shop Now<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                        class="w-icon-angle-left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="w-icon-angle-right"></i></button></div>
            <div class="owl-dots"><button role="presentation" class="owl-dot"><span></span></button><button
                    role="presentation" class="owl-dot active"><span></span></button><button role="presentation"
                    class="owl-dot"><span></span></button></div>
        </div>
    </div>
    <!-- End of .intro-section -->

    <div class="container">
        <div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1icon-box-wrapper appear-animate br-sm mt-6 mb-6"
            data-owl-options="{
            'nav': false,
            'dots': false,
            'loop': false,
            'responsive': {
                '0': {
                    'items': 1
                },
                '576': {
                    'items': 2
                },
                '768': {
                    'items': 3
                },
                '992': {
                    'items': 3
                },
                '1200': {
                    'items': 4
                }
            }
        }">
            <div class="icon-box icon-box-side icon-box-primary">
                <span class="icon-box-icon icon-shipping">
                    <i class="w-icon-truck"></i>
                </span>
                <div class="icon-box-content">
                    <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                    <p class="text-default">For all orders over $99</p>
                </div>
            </div>
            <div class="icon-box icon-box-side icon-box-primary">
                <span class="icon-box-icon icon-payment">
                    <i class="w-icon-bag"></i>
                </span>
                <div class="icon-box-content">
                    <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                    <p class="text-default">We ensure secure payment</p>
                </div>
            </div>
            <div class="icon-box icon-box-side icon-box-primary icon-box-money">
                <span class="icon-box-icon icon-money">
                    <i class="w-icon-money"></i>
                </span>
                <div class="icon-box-content">
                    <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                    <p class="text-default">Any back within 30 days</p>
                </div>
            </div>
            <div class="icon-box icon-box-side icon-box-primary icon-box-chat">
                <span class="icon-box-icon icon-chat">
                    <i class="w-icon-chat"></i>
                </span>
                <div class="icon-box-content">
                    <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                    <p class="text-default">Call or email us 24/7</p>
                </div>
            </div>
        </div>
        <!-- End of Iocn Box Wrapper -->

        <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/1-1.jpg" alt="Category Banner" width="610"
                            height="160" style="background-color: #ecedec;" />
                    </figure>
                    <div class="banner-content y-50 mt-0">
                        <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                        </h5>
                        <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                class="font-weight-normal                       text-capitalize">Collection</span>
                        </h3>
                        <div class="banner-price-info font-weight-normal">Starting at <span
                                class="text-secondary                       font-weight-bolder">$170.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/1-2.jpg" alt="Category Banner" width="610"
                            height="160" style="background-color: #636363;" />
                    </figure>
                    <div class="banner-content y-50 mt-0">
                        <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                        <h3 class="banner-title text-white text-uppercase">Accessories<br><span
                                class="font-weight-normal text-capitalize">Collection</span></h3>
                        <div class="banner-price-info text-white font-weight-normal text-capitalize">Only From
                            <span class="text-secondary font-weight-bolder">$90.00</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Category Banner Wrapper -->

        <div class="row deals-wrapper appear-animate mb-8">
            <div class="col-lg-9 mb-4">
                <div class="single-product h-100 br-sm">
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">Deals Hot Of The Day</h4>
                    <div class="owl-carousel owl-theme owl-nav-top owl-nav-lg row cols-1 gutter-no" data-owl-options="{
                        'nav': true,
                        'dots': false,
                        'margin': 20,
                        'items': 1
                    }">
                        <div class="product product-single row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical mb-0">
                                    <div
                                        class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/1-1-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/1-1-800x900.jpg"
                                                alt="Product Image" width="800" height="900">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/1-2-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/1-2-800x900.jpg"
                                                alt="Product Image" width="362" height="408">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/1-3-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/1-3-800x900.jpg"
                                                alt="Product Image" width="362" height="408">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/1-4-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/1-4-800x900.jpg"
                                                alt="Product Image" width="362" height="408">
                                        </figure>
                                    </div>
                                    <div class="product-thumbs-wrap">
                                        <div class="product-thumbs">
                                            <div class="product-thumb active">
                                                <img src="assets/images/demos/demo1/products/1-1-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                            <div class="product-thumb">
                                                <img src="assets/images/demos/demo1/products/1-2-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                            <div class="product-thumb">
                                                <img src="assets/images/demos/demo1/products/1-3-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                            <div class="product-thumb">
                                                <img src="assets/images/demos/demo1/products/1-4-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">25% Off</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details scrollable">
                                    <h2 class="product-title mb-1"><a href="product-default.html">Coat Pool
                                            Comfort Jacket</a></h2>

                                    <hr class="product-divider">

                                    <div class="product-price"><ins class="new-price ls-50">$150.00 -
                                            $180.00</ins></div>

                                    <div class="product-countdown-container flex-wrap">
                                        <label class="mr-2 text-default">Offer Ends In:</label>
                                        <div class="product-countdown countdown-compact" data-until="2022, 12, 31"
                                            data-compact="true">
                                            629 days, 11: 59: 52</div>
                                    </div>

                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                    </div>

                                    <div class="product-form product-variation-form product-size-swatch mb-3">
                                        <label class="mb-1">Size:</label>
                                        <div class="flex-wrap d-flex align-items-center product-variations">
                                            <a href="#" class="size">Extra Large</a>
                                            <a href="#" class="size">Large</a>
                                            <a href="#" class="size">Medium</a>
                                            <a href="#" class="size">Small</a>
                                        </div>
                                        <a href="#" class="product-variation-clean">Clean All</a>
                                    </div>

                                    <div class="product-variation-price">
                                        <span></span>
                                    </div>

                                    <div class="product-form pt-4">
                                        <div class="product-qty-form mb-2 mr-2">
                                            <div class="input-group">
                                                <input class="quantity form-control" type="number" min="1"
                                                    max="10000000">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-cart">
                                            <i class="w-icon-cart"></i>
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>

                                    <div class="social-links-wrapper mt-1">
                                        <div class="social-links">
                                            <div class="social-icons social-no-color border-thin">
                                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                            </div>
                                        </div>
                                        <span class="divider d-xs-show"></span>
                                        <div class="product-link-wrapper d-flex">
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                            <a href="#"
                                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product Single -->
                        <div class="product product-single row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical mb-0">
                                    <div
                                        class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/2-1-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/2-1-800x900.jpg"
                                                alt="Product Image" width="800" height="900">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/2-2-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/2-2-800x900.jpg"
                                                alt="Product Image" width="362" height="408">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/2-3-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/2-3-800x900.jpg"
                                                alt="Product Image" width="362" height="408">
                                        </figure>
                                        <figure class="product-image">
                                            <img src="assets/images/demos/demo1/products/2-4-600x675.jpg"
                                                data-zoom-image="assets/images/demos/demo1/products/2-4-800x900.jpg"
                                                alt="Product Image" width="362" height="408">
                                        </figure>
                                    </div>
                                    <div class="product-thumbs-wrap">
                                        <div class="product-thumbs">
                                            <div class="product-thumb active">
                                                <img src="assets/images/demos/demo1/products/2-1-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                            <div class="product-thumb">
                                                <img src="assets/images/demos/demo1/products/2-2-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                            <div class="product-thumb">
                                                <img src="assets/images/demos/demo1/products/2-3-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                            <div class="product-thumb">
                                                <img src="assets/images/demos/demo1/products/2-4-600x675.jpg"
                                                    alt="Product thumb" width="60" height="68" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">25% Off</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details scrollable">
                                    <h2 class="product-title mb-1"><a href="product-default.html">Beyond OTP
                                            Shirt</a></h2>

                                    <hr class="product-divider">

                                    <div class="product-price"><ins class="new-price ls-50">$26.00</ins></div>

                                    <div class="product-countdown-container flex-wrap">
                                        <label class="mr-2 text-default">Offer Ends In:</label>
                                        <div class="product-countdown countdown-compact" data-until="2022, 12, 31"
                                            data-compact="true">
                                            629 days, 11: 59: 52</div>
                                    </div>

                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#product-tab-reviews" class="rating-reviews">(3 Reviews)</a>
                                    </div>

                                    <div class="product-form product-variation-form product-size-swatch mb-3">
                                        <label class="mb-1">Size:</label>
                                        <div class="flex-wrap d-flex align-items-center product-variations">
                                            <a href="#" class="size">Extra Large</a>
                                            <a href="#" class="size">Large</a>
                                            <a href="#" class="size">Medium</a>
                                            <a href="#" class="size">Small</a>
                                        </div>
                                        <a href="#" class="product-variation-clean">Clean All</a>
                                    </div>

                                    <div class="product-variation-price">
                                        <span></span>
                                    </div>

                                    <div class="product-form pt-4">
                                        <div class="product-qty-form mb-2 mr-2">
                                            <div class="input-group">
                                                <input class="quantity form-control" type="number" min="1"
                                                    max="10000000">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-cart">
                                            <i class="w-icon-cart"></i>
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>

                                    <div class="social-links-wrapper mt-1">
                                        <div class="social-links">
                                            <div class="social-icons social-no-color border-thin">
                                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                            </div>
                                        </div>
                                        <span class="divider d-xs-show"></span>
                                        <div class="product-link-wrapper d-flex">
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                            <a href="#"
                                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product Single -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Best
                            Seller</h4>
                        <div class="owl-carousel owl-theme owl-nav-top row cols-lg-1 cols-md-3" data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 1
                                }
                            }
                        }">
                            <div class="product-widget-wrap">
                                <div class="product product-widget bb-no">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-1.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Kitchen Cooker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$150.60</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-widget bb-no">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-2.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Professional Pixel Camera</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.68</ins><del class="old-price">$230.45</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-widget">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-3.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Sport Women’s Wear</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$220.20</ins><del class="old-price">$300.62</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-widget-wrap">
                                <div class="product product-widget bb-no">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-4.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Latest Speaker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$250.68</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-widget bb-no">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-5.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Men's Black Wrist Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$135.60</ins><del class="old-price">$155.70</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-widget">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-6.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wash Machine</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$215.68</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-widget-wrap">
                                <div class="product product-widget bb-no">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-7.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Security Guard</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$320.00</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-widget bb-no">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-8.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins><del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-widget">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/2-9.jpg" alt="Product"
                                                width="105" height="118" />
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name">
                                            <a href="product-default.html">HD Television</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$450.68</ins><del class="old-price">$500.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Deals Wrapper -->
    </div>
    <!-- End of Container -->
</main>

@endsection


@push('first_scripts')



<!-- Plugin JS File -->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
<script src="{{ asset('vendor/sticky/sticky.min.js')}}"></script>
<script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>

<script src="{{ asset('vendor/floating-parallax/parallax.min.js')}}"></script>


<!-- Main JS -->
<script src="{{ asset('vendor/main.min.js')}}"></script>



<script type="text/javascript" src="{{ asset('/web/js/branches_map.js')}}"></script>

<script>
    $('#map').show();
    $("#map").css("position","fixed !important");
     
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcP3JChqWSCHtsjW4e_Ug8h0htjiIhcHw&libraries=places&callback=initMap"
    async defer></script>


@endpush