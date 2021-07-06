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
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/theme_style.css')}}"> --}}




@endpush

@section('content')



<main class="main">
    <div class="container pb-2">
        <div class="intro-wrapper mt-4">
            @include('Home.main_slider')

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

        <div class="title-link-wrapper mb-3 appear-animate fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <h2 class="title title-deals mb-1">Deals Of The Day</h2>
            <div class="product-countdown-container font-size-sm text-dark align-items-center">
                <label>Offer Ends in: </label>
                <div class="product-countdown countdown-compact ml-1 font-weight-bold is-countdown" data-until="+10d"
                    data-relative="true" data-compact="true"><span class="countdown-row countdown-amount">9 days, 22 :
                        16 : 26</span></div>
            </div>
            <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">More Products<i
                    class="w-icon-long-arrow-right"></i></a>
        </div>
        <!-- End of .title-link-wrapper -->

        <div class="owl-carousel owl-theme product-deals-wrapper appear-animate mb-7 owl-loaded owl-drag fadeIn appear-animation-visible"
            data-owl-options="{
            'nav': false,
            'dots': true,
            'items': 5,
            'autoplay': false,
            'margin': 20,
            'responsive': {
                '0': {
                    'items': 2,
                    'nav': false
                },
                '576': {
                    'items': 3
                },
                '768': {
                    'items': 4
                },
                '992': {
                    'items': 5
                }
            }
        }" style="animation-duration: 1.2s;">





            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1380px;">
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-1-1.jpg"
                                            alt="Product" width="300" height="338">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-1-2.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women's Comforter</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$45.62 - $58.28</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-2.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                        <label class="product-label label-discount">-35%</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">White Valise</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$40.00</ins><span class="old-price">$49.89</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-3-1.jpg"
                                            alt="Product" width="300" height="338">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-3-2.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist added w-icon-heart-full"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Brown Leather Shoes</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(6 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$36.26 - $59.75</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-4.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist added w-icon-heart-full"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Portable Flashlight</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$10.00</ins><del class="old-price">$11.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-5.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">USB Charger</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$17.00</ins><del class="old-price">$20.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                        class="w-icon-angle-left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="w-icon-angle-right"></i></button></div>
            <div class="owl-dots disabled"><button role="presentation" class="owl-dot active"><span></span></button>
            </div>
        </div>
        <!-- End of Product Deals Warpper -->

        <div class="row category-wrapper electronics-cosmetics appear-animate mb-7 fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-sm">
                    <figure>
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/categories/1-1.jpg"
                            alt="Category Banner" width="640" height="200" style="background-color: #25282D;">
                    </figure>
                    <div class="banner-content y-50">
                        <h3 class="banner-title text-white ls-25 mb-0">Electronics</h3>
                        <div class="banner-price-info text-white font-weight-bold text-uppercase mb-1">Starting
                            At
                            <strong class="text-secondary">$125.00</strong>
                        </div>
                        <hr class="banner-divider bg-white">
                        <a href="shop-banner-sidebar.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-sm">
                    <figure>
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/categories/1-2.jpg"
                            alt="Category Banner" width="640" height="200" style="background-color: #eeedec;">
                    </figure>
                    <div class="banner-content y-50">
                        <h3 class="banner-title ls-25 text-capitalize mb-0">Cosmetics Sets</h3>
                        <div class="banner-price-info font-weight-bold text-uppercase mb-1">Sale Up To
                            <strong class="text-secondary">30% Off</strong>
                        </div>
                        <hr class="banner-divider bg-dark">
                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-link btn-underline btn-icon-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Category Wrapper -->

        <h2 class="title mb-5 appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">Top
            Weekly Vendors</h2>
        <div class="owl-carousel owl-theme vendor-wrapper mb-4 appear-animate owl-loaded owl-drag fadeIn appear-animation-visible"
            data-owl-options="{
            'nav': false,
            'dots': true,
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
                '1200': {
                    'items': 4
                }
            }
        }" style="animation-duration: 1.2s;">

            <!-- End of Vendor Widget -->

            <!-- End of Vendor Widget -->

            <!-- End of Vendor Widget -->

            <!-- End of Vendor Widget -->
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1380px;">
                    <div class="owl-item active" style="width: 325px; margin-right: 20px;">
                        <div class="vendor-widget vendor-widget-1">
                            <div class="vendor-products grid-type">
                                <div class="vendor-product lg-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-1.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-2.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-3.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/vendor-logo/1.jpg"
                                            alt="Vendor Logo" width="70" height="70">
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">Vendor 1</a>
                                    </h4>
                                    <span class="vendor-product-count">(27 Products)</span>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 325px; margin-right: 20px;">
                        <div class="vendor-widget vendor-widget-1">
                            <div class="vendor-products grid-type">
                                <div class="vendor-product lg-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-4.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-5.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-6.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/vendor-logo/2.jpg"
                                            alt="Vendor Logo" width="70" height="70">
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">Vendor 2</a>
                                    </h4>
                                    <span class="vendor-product-count">(20 Products)</span>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 325px; margin-right: 20px;">
                        <div class="vendor-widget vendor-widget-1">
                            <div class="vendor-products grid-type">
                                <div class="vendor-product lg-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-7.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-8.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-9.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/vendor-logo/3.jpg"
                                            alt="Vendor Logo" width="70" height="70">
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">Vendor 3</a>
                                    </h4>
                                    <span class="vendor-product-count">(16 Products)</span>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 325px; margin-right: 20px;">
                        <div class="vendor-widget vendor-widget-1">
                            <div class="vendor-products grid-type">
                                <div class="vendor-product lg-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-10.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-11.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                                <div class="vendor-product sm-item">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/2-12.jpg"
                                                alt="Vendor Product" width="300" height="338">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="vendor-details">
                                <figure class="vendor-logo">
                                    <a href="vendor-dokan-store.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/vendor-logo/4.jpg"
                                            alt="Vendor Logo" width="70" height="70">
                                    </a>
                                </figure>
                                <div class="vendor-personal">
                                    <h4 class="vendor-name">
                                        <a href="vendor-dokan-store.html">Vendor 4</a>
                                    </h4>
                                    <span class="vendor-product-count">(23 Products)</span>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                        class="w-icon-angle-left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="w-icon-angle-right"></i></button></div>
            <div class="owl-dots disabled"><button role="presentation" class="owl-dot active"><span></span></button>
            </div>
        </div>
        <!-- End of Vendor Wrapper -->
        <div class="tab tab-with-title tab-nav-boxed appear-animate fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <h2 class="title">Consumer Electronics</h2>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="#tab-1">New Arrivals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-2">Best Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#tab-3">Most Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-4">View All</a>
                </li>
            </ul>
        </div>
        <!-- End of Tab Title-->
        <div class="tab-content appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">
            <div class="tab-pane" id="tab-1">
                <div class="row grid-type products">
                    <div class="product-wrap lg-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">-15%</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Magenetic Charge Box</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$79.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                                <div class="product-label-group">
                                    <label class="product-label label-new">New</label>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Gold Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$164.47</ins><del class="old-price">$183.47</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Drone Wireless</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$89.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music
                                        Player</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$24.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Charge &amp; Alarm
                                        Machine</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$39.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Mini Wireless
                                        Earphone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(9 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$3.66</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Hight Quality Screen
                                        Tablet</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$173.84</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2">
                <div class="row grid-type products">
                    <div class="product-wrap lg-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Gold Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$164.47</ins><del class="old-price">$183.47</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Charge &amp; Alarm
                                        Machine</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$39.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Magenetic Charge Box</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$79.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music
                                        Player</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$24.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Hight Quality Screen
                                        Tablet</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$173.84</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Mini Wireless
                                        Earphone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(9 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$3.66</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Drone Wireless</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$89.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane active in" id="tab-3">
                <div class="row grid-type products">
                    <div class="product-wrap lg-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Charge &amp; Alarm
                                        Machine</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$39.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music
                                        Player</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$24.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Magenetic Charge Box</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$79.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Drone Wireless</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$89.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Hight Quality Screen
                                        Tablet</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$173.84</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Mini Wireless
                                        Earphone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(9 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$3.66</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Gold Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$164.47</ins><del class="old-price">$183.47</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-4">
                <div class="row grid-type products">
                    <div class="product-wrap lg-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-3-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Drone Wireless</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$89.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Gold Watch</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$164.47</ins><del class="old-price">$183.47</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Mini Wireless
                                        Earphone</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(9 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$3.66</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Charge &amp; Alarm
                                        Machine</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$39.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-4-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Multi-colorful Music
                                        Player</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(6 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$24.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Hight Quality Screen
                                        Tablet</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$173.84</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap sm-item">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-1.jpg"
                                        alt="Product" width="300" height="338">
                                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-1-2.jpg"
                                        alt="Product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quickview"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                        title="Add to Compare"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name"><a href="product-default.html">Magenetic Charge Box</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">$79.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab Content -->

        <div class="sale-banner banner br-sm appear-animate fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <div class="banner-content">
                <h4 class="content-left banner-subtitle text-uppercase mb-8 mb-md-0 mr-0 mr-md-4 text-secondary ls-25">
                    <span class="text-dark font-weight-bold lh-1 ls-normal">Up
                        <br>To</span>70% Sale!</h4>
                <div class="content-right">
                    <h3 class="banner-title text-uppercase font-weight-normal mb-4 mb-md-0 ls-25 text-white">
                        <span>Pay Only For
                            <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                            Pay Only For
                            <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                            Pay Only For
                            <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                        </span>
                    </h3>
                    <a href="#" class="btn btn-white btn-rounded">Shop Now
                        <i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Sale Banner -->

        <div class="banner-product-wrapper appear-animate row mb-8 fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <div class="col-xl-5col col-md-4 mb-4">
                <div class="categories h-100">
                    <h2 class="title text-left">Clothes &amp; Fashion Apparel</h2>
                    <ul class="list-style-none mb-4">
                        <li><a href="shop-banner-sidebar.html">Accessories</a></li>
                        <li><a href="shop-banner-sidebar.html">Bodyclothes</a></li>
                        <li><a href="shop-banner-sidebar.html">Dress &amp; Skirts</a></li>
                        <li><a href="shop-banner-sidebar.html">Jeans</a></li>
                        <li><a href="shop-banner-sidebar.html">Jumpers</a></li>
                        <li><a href="shop-banner-sidebar.html">Knitwears</a></li>
                        <li><a href="shop-banner-sidebar.html">Lounge &amp; Underwear</a></li>
                        <li><a href="shop-banner-sidebar.html">Shoes</a></li>
                        <li><a href="shop-banner-sidebar.html">T-shirts</a></li>
                    </ul>
                    <a href="shop-boxed-banner.html"
                        class="btn btn-dark btn-link btn-underline btn-icon-right font-weight-bolder text-capitalize ls-50">
                        Browse All<i class="w-icon-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xl-5col4 col-md-8 mb-4">
                <div class="banner br-sm mb-4" style="background-image: url(assets/images/demos/demo2/banners/1.jpg);
                    background-color: #EEF0EF;">
                    <div class="banner-content d-block d-lg-flex align-items-center">
                        <div class="content-left mr-auto">
                            <h5 class="banner-subtitle font-weight-normal text-capitalize texyt-dark ls-25 mb-0">
                                Flash Sale <strong class="text-uppercase text-secondary">50% Off</strong>
                            </h5>
                            <h3 class="banner-title text-capitalize ls-25">Fashion Figure Skate Sale</h3>
                            <p class="text-dark">Only until the end of this week.</p>
                        </div>
                        <a href="shop-banner-sidebar.html" class="content-left btn btn-dark btn btn-outline 
                            btn-rounded btn-icon-right mt-4 mt-lg-0">Shop Now<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="owl-carousel owl-theme owl-loaded owl-drag" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 2
                        },
                        '992': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                }">




                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1104px;">
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-1-1.jpg"
                                                    alt="Product" width="300" height="338">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-1-2.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">White Schoolbag</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$56.48</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-2-1.jpg"
                                                    alt="Product" width="300" height="338">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-2-2.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Women's
                                                    Comforter</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$35.99</ins><del class="old-price">$37.89</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-3.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Blue Traingin
                                                    Shoes</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(6 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$58.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-4.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Beyond OTP Shirt</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$26.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                                class="w-icon-angle-left"></i></button><button type="button" role="presentation"
                            class="owl-next"><i class="w-icon-angle-right"></i></button></div>
                    <div class="owl-dots disabled"><button role="presentation"
                            class="owl-dot active"><span></span></button></div>
                </div>
                <!-- End fo Carousel -->
            </div>
        </div>
        <!-- End of Banner Product Wrapper -->

        <div class="row category-wrapper sports-fashion mb-8 appear-animate fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-sm">
                    <figure>
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/categories/2-1.jpg"
                            alt="Category Banner" width="640" height="200" style="background-color: #EAEAEA;">
                    </figure>
                    <div class="banner-content y-50 text-right">
                        <h5 class="banner-subtitle text-uppercase font-weight-bold">New Arrivals</h5>
                        <h3 class="banner-title text-capitalize ls-25">Sport Outfits</h3>
                        <hr class="banner-divider bg-dark ml-auto mb-3">
                        <div class="banner-price-info text-dark">
                            From <span class="text-secondary font-weight-bolder ls-25">$150.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-sm">
                    <figure>
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/categories/2-2.jpg"
                            alt="Category Banner" width="640" height="200" style="background-color: #181411;">
                    </figure>
                    <div class="banner-content y-50">
                        <h5 class="banner-subtitle text-uppercase font-weight-normal text-white">SmartWatches
                        </h5>
                        <h3 class="banner-title text-white ls-25">Sale up to 20% Off</h3>
                        <hr class="banner-divider bg-white">
                        <div class="banner-price-info text-white">
                            Starting at <span class="text-secondary font-weight-bolder ls-25">$270.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Category Wrapper -->

        <div class="banner-product-wrapper appear-animate row mb-8 fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <div class="col-xl-5col col-md-4 mb-4">
                <div class="categories h-100">
                    <h2 class="title text-left">Computers &amp; Technologies</h2>
                    <ul class="list-style-none mb-4">
                        <li><a href="shop-banner-sidebar.html">Desktop PC</a></li>
                        <li><a href="shop-banner-sidebar.html">Headphones</a></li>
                        <li><a href="shop-banner-sidebar.html">Laptops</a></li>
                        <li><a href="shop-banner-sidebar.html">Monitors</a></li>
                        <li><a href="shop-banner-sidebar.html">Smartphones</a></li>
                        <li><a href="shop-banner-sidebar.html">Speakers</a></li>
                        <li><a href="shop-banner-sidebar.html">Storage &amp; Memory</a></li>
                        <li><a href="shop-banner-sidebar.html">Tablets</a></li>
                        <li><a href="shop-banner-sidebar.html">Watches</a></li>
                    </ul>
                    <a href="shop-boxed-banner.html"
                        class="btn btn-dark btn-link btn-underline btn-icon-right font-weight-bolder text-capitalize ls-50">
                        Browse All<i class="w-icon-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xl-5col4 col-md-8 mb-4">
                <div class="banner br-sm mb-4 pt-9" style="background-image: url(assets/images/demos/demo2/banners/2.jpg);
                    background-color: #E0E1E5;">
                    <div class="banner-content">
                        <h5 class="banner-subtitle font-weight-normal text-capitalize texyt-dark ls-25 mb-0">
                            From Onlin Store
                        </h5>
                        <h3 class="banner-title text-capitalize ls-25 mb-4">
                            Xbox One's <span class="text-primary">Limited</span> Edition
                        </h3>
                        <a href="shop-boxed-banner.html" class="btn btn-dark btn-link btn-underline btn-icon-right">
                            View Detail<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="owl-carousel owl-theme owl-loaded owl-drag" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 2
                        },
                        '992': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                }">




                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1104px;">
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/5-1-1.jpg"
                                                    alt="Product" width="300" height="338">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/5-1-2.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Bluetooth Music
                                                    Recorder</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$28.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/5-2.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Magenetic Charge
                                                    Box</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 80%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$79.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/5-3-1.jpg"
                                                    alt="Product" width="300" height="338">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/5-3-2.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">New</label>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Soft Sound
                                                    Marker</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(5 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$27.00</ins><del class="old-price">$35.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/5-4.jpg"
                                                    alt="Product" width="300" height="338">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Men's Black
                                                    Watch</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(9 Reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$50.00</ins><del class="old-price">$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                                class="w-icon-angle-left"></i></button><button type="button" role="presentation"
                            class="owl-next"><i class="w-icon-angle-right"></i></button></div>
                    <div class="owl-dots disabled"><button role="presentation"
                            class="owl-dot active"><span></span></button></div>
                </div>
                <!-- End fo Carousel -->
            </div>
        </div>
        <!-- End of Banner Product Wrapper -->

        <div class="banner br-sm banner-electronics appear-animate fadeIn appear-animation-visible"
            style="background-image: url(&quot;assets/images/demos/demo2/banners/3.jpg&quot;); background-color: rgb(51, 51, 51); animation-duration: 1.2s;">
            <div class="banner-content mr-10 pr-1">
                <div class="banner-price-info text-white font-weight-normal ls-25">
                    Save Big on <span class="font-weight-bolder text-secondary text-uppercase">50% Off</span>
                </div>
                <h3 class="banner-title text-white mb-0 ls-25">Cameras and Leans Sale</h3>
            </div>
            <a href="shop-banner-sidebar.html" class="btn btn-white btn-rounded btn-icon-right mt-1">Shop Now<i
                    class="w-icon-long-arrow-right"></i></a>
        </div>
        <!-- End of Banner -->

        <div class="title-link-wrapper mb-2 appear-animate fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <h2 class="title">Top Rated Products</h2>
            <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">More Products<i
                    class="w-icon-long-arrow-right"></i></a>
        </div>

        <div class="owl-carousel owl-theme top-products mb-6 appear-animate owl-loaded owl-drag fadeIn appear-animation-visible"
            data-owl-options="{
            'nav': false,
            'dots': true,
            'margin': 20,
            'responsive': {
                '0': {
                    'items': 2
                },
                '576': {
                    'items': 3
                },
                '768': {
                    'items': 4
                },
                '992': {
                    'items': 5
                }
            }
        }" style="animation-duration: 1.2s;">





            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1380px;">
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-1-1.jpg"
                                            alt="Product" width="300" height="338">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-1-2.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-discount">-15%</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-countdown-container">
                                        <div class="product-countdown countdown-compact is-countdown"
                                            data-until="2021, 9, 9" data-format="DHMS" data-compact="false"
                                            data-labels-short="Days, Hours, Mins, Secs"><span
                                                class="countdown-row countdown-show4"><span
                                                    class="countdown-section"><span
                                                        class="countdown-amount">64</span><span
                                                        class="countdown-period">Days</span></span><span
                                                    class="countdown-section"><span
                                                        class="countdown-amount">09</span><span
                                                        class="countdown-period">Hours</span></span><span
                                                    class="countdown-section"><span
                                                        class="countdown-amount">51</span><span
                                                        class="countdown-period">Mins</span></span><span
                                                    class="countdown-section"><span
                                                        class="countdown-amount">41</span><span
                                                        class="countdown-period">Secs</span></span></span></div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">White Schoolbag</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$56.48</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-1-1.jpg"
                                            alt="Product" width="300" height="338">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-1-2.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Women's Comforter</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top">5.00</span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$45.62 - $58.28</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-1.jpg"
                                            alt="Product" width="300" height="338">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-2.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Gold Watch</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(3 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$164.47</ins><del class="old-price">$183.47</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/1-4.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Portable Flashlight</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$10.00</ins><del class="old-price">$11.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 256px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/6-1.jpg"
                                            alt="Product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                            title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                            title="Quickview"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                            title="Add to Compare"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Fashionable Original
                                            Coat</a>
                                    </h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(8 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$54.00 - $59.88</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                        class="w-icon-angle-left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="w-icon-angle-right"></i></button></div>
            <div class="owl-dots disabled"><button role="presentation" class="owl-dot active"><span></span></button>
            </div>
        </div>
        <!-- End of Owl Carousel -->

        <h2 class="title text-left text-capitalize mb-5 appear-animate fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">Your Recent Views</h2>
        <div class="owl-carousel owl-theme appear-animate viewed-products mb-7 owl-loaded owl-drag fadeIn appear-animation-visible"
            data-owl-options="{
            'nav': false,
            'dots': true,
            'margin': 20,
            'responsive': {
                '0': {
                    'items': 2
                },
                '576': {
                    'items': 3
                },
                '768': {
                    'items': 5
                },
                '992': {
                    'items': 6
                },
                '1200': {
                    'items': 8,
                    'dots': true
                }
            }
        }" style="animation-duration: 1.2s;">

            <!-- End of Product Wrap -->

            <!-- End of Product Wrap -->

            <!-- End of Product Wrap -->

            <!-- End of Product Wrap -->

            <!-- End of Product Wrap -->

            <!-- End of Product Wrap -->

            <!-- End of Product Wrap -->

            <!-- End of Product Wrap -->
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1380px;">
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-5-1.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Charge &amp; Alarm Machine</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-2-1.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Women's Comforter</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-2-1.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Gold Watch</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-6-1.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Mini Wireless Earphone</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-1-1.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">White Schoolbag</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/3-7-1.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">High Quality Screen Tablet</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-4.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Beyond OTP Shirt</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 152.5px; margin-right: 20px;">
                        <div class="product-wrap">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo2/products/4-3.jpg"
                                            alt="Category image" width="300" height="338"
                                            style="background-color: #fff">
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Blue Training Shoes</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                        class="w-icon-angle-left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="w-icon-angle-right"></i></button></div>
            <div class="owl-dots disabled"><button role="presentation" class="owl-dot active"><span></span></button>
            </div>
        </div>
        <!-- End of Owl Carousel -->



    </div>
    <!-- End of Container -->
</main>


<!-- Start of Quick View -->
<div class="product product-single product-popup">
    <div class="row gutter-lg">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="product-gallery product-gallery-sticky mb-0">
                <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                    <figure class="product-image">
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/1-440x494.jpg"
                            data-zoom-image="https://www.portotheme.com/html/wolmart/assets/images/products/popup/1-800x900.jpg"
                            alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                    <figure class="product-image">
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/2-440x494.jpg"
                            data-zoom-image="https://www.portotheme.com/html/wolmart/assets/images/products/popup/2-800x900.jpg"
                            alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                    <figure class="product-image">
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/3-440x494.jpg"
                            data-zoom-image="https://www.portotheme.com/html/wolmart/assets/images/products/popup/3-800x900.jpg"
                            alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                    <figure class="product-image">
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/4-440x494.jpg"
                            data-zoom-image="https://www.portotheme.com/html/wolmart/assets/images/products/popup/4-800x900.jpg"
                            alt="Water Boil Black Utensil" width="800" height="900">
                    </figure>
                </div>
                <div class="product-thumbs-wrap">
                    <div class="product-thumbs">
                        <div class="product-thumb active">
                            <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/1-103x116.jpg"
                                alt="Product Thumb" width="103" height="116">
                        </div>
                        <div class="product-thumb">
                            <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/2-103x116.jpg"
                                alt="Product Thumb" width="103" height="116">
                        </div>
                        <div class="product-thumb">
                            <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/3-103x116.jpg"
                                alt="Product Thumb" width="103" height="116">
                        </div>
                        <div class="product-thumb">
                            <img src="https://www.portotheme.com/html/wolmart/assets/images/products/popup/4-103x116.jpg"
                                alt="Product Thumb" width="103" height="116">
                        </div>
                    </div>
                    <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                    <button class="thumb-down disabled"><i class="w-icon-angle-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 overflow-hidden p-relative">
            <div class="product-details scrollable pl-0">
                <h2 class="product-title">Electronics Black Wrist Watch</h2>
                <div class="product-bm-wrapper">
                    <figure class="brand">
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/products/brand/brand-1.jpg"
                            alt="Brand" width="102" height="48" />
                    </figure>
                    <div class="product-meta">
                        <div class="product-categories">
                            Category:
                            <span class="product-category"><a href="#">Electronics</a></span>
                        </div>
                        <div class="product-sku">
                            SKU: <span>MS46891340</span>
                        </div>
                    </div>
                </div>

                <hr class="product-divider">

                <div class="product-price">$40.00</div>

                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings" style="width: 80%;"></span>
                        <span class="tooltiptext tooltip-top"></span>
                    </div>
                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                </div>

                <div class="product-short-desc">
                    <ul class="list-type-check list-style-none">
                        <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                        <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                        <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                    </ul>
                </div>

                <hr class="product-divider">

                <div class="product-form product-variation-form product-color-swatch">
                    <label>Color:</label>
                    <div class="d-flex align-items-center product-variations">
                        <a href="#" class="color" style="background-color: #ffcc01"></a>
                        <a href="#" class="color" style="background-color: #ca6d00;"></a>
                        <a href="#" class="color" style="background-color: #1c93cb;"></a>
                        <a href="#" class="color" style="background-color: #ccc;"></a>
                        <a href="#" class="color" style="background-color: #333;"></a>
                    </div>
                </div>
                <div class="product-form product-variation-form product-size-swatch">
                    <label class="mb-1">Size:</label>
                    <div class="flex-wrap d-flex align-items-center product-variations">
                        <a href="#" class="size">Small</a>
                        <a href="#" class="size">Medium</a>
                        <a href="#" class="size">Large</a>
                        <a href="#" class="size">Extra Large</a>
                    </div>
                    <a href="#" class="product-variation-clean">Clean All</a>
                </div>

                <div class="product-variation-price">
                    <span></span>
                </div>

                <div class="product-form">
                    <div class="product-qty-form">
                        <div class="input-group">
                            <input class="quantity form-control" type="number" min="1" max="10000000">
                            <button class="quantity-plus w-icon-plus"></button>
                            <button class="quantity-minus w-icon-minus"></button>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-cart">
                        <i class="w-icon-cart"></i>
                        <span>Add to Cart</span>
                    </button>
                </div>

                <div class="social-links-wrapper">
                    <div class="social-links">
                        <div class="social-icons social-no-color border-thin">
                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                            <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                            <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                        </div>
                    </div>
                    <span class="divider d-xs-show"></span>
                    <div class="product-link-wrapper d-flex">
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                        <a href="#" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Quick view -->

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