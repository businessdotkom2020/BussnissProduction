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



<!-- Start of Main -->
<main class="main">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb bb-no">
                <li><a href="demo1.html">Home</a></li>
                <li><a href="#">Vendor</a></li>
                <li><a href="#">Dokan</a></li>
                <li>Store</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of Pgae Contetn -->
    <div class="page-content mb-8">
        <div class="container">
            <div class="row gutter-lg">
                <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                    <!-- Start of Sidebar Overlay -->
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                    <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                    <div class="sidebar-content">
                        <div class="pin-wrapper" style="height: 2121.76px;">
                            <div class="sticky-sidebar"
                                style="border-bottom: 0px none rgb(102, 102, 102); width: 280px;">
                                <div class="widget widget-collapsible widget-categories">
                                    <h3 class="widget-title"><span>All Categories</span><span class="toggle-btn"></span>
                                    </h3>
                                    <ul class="widget-body filter-items search-ul">
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Computers</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Games</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Sports</a></li>
                                    </ul>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-contact">
                                    <h3 class="widget-title"><span>Contact Vendor</span><span class="toggle-btn"></span>
                                    </h3>
                                    <div class="widget-body">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your Name">
                                        <input type="text" class="form-control" name="email" id="email_1"
                                            placeholder="you@example.com">
                                        <textarea name="message" maxlength="1000" cols="25" rows="6"
                                            placeholder="Type your messsage..." class="form-control"
                                            required="required"></textarea>
                                        <a href="#" class="btn btn-dark btn-rounded">Send Message</a>
                                    </div>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-time">
                                    <h3 class="widget-title"><span>Store Time</span><span class="toggle-btn"></span>
                                    </h3>
                                    <ul class="widget-body">
                                        <li>
                                            <span>Monday:</span>9:00 - 10:00 pm
                                        </li>
                                        <li>
                                            <span>Tuesday:</span>9:00 - 10:00 pm
                                        </li>
                                        <li>
                                            <span>Wednesday:</span>9:00 - 10:00 pm
                                        </li>
                                        <li>
                                            <span>Thursday:</span>9:00 - 2:00 pm
                                        </li>
                                        <li>
                                            <span>Friday:</span>9:00 - 10:00 pm
                                        </li>
                                        <li>
                                            <span>Saturday:</span>9:00 - 10:00 pm
                                        </li>
                                        <li>
                                            <span>Sunday:</span>9:00 - 10:00 pm
                                        </li>
                                    </ul>
                                </div>

                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-products">
                                    <h3 class="widget-title"><span>Top Rated</span><span class="toggle-btn"></span>
                                    </h3>
                                    <div class="widget-body">
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/12.jpg"
                                                        alt="Product" width="100" height="106">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Classic Simple Backpack</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$85.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/13.jpg"
                                                        alt="Product" width="100" height="106">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Smart Watch</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$90.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/20.jpg"
                                                        alt="Product" width="100" height="106">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Pencil Case</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$54.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Widget -->
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- End of Sidebar -->

                <div class="main-content">
                    <div class="store store-banner mb-4">
                        <figure class="store-media">
                            <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/1.jpg" alt="Vendor"
                                width="930" height="446" style="background-color: #414960;">
                        </figure>
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/1.jpg"
                                    alt="Brand" width="80" height="80">
                            </figure>
                            <h4 class="store-title">Vendor 1</h4>
                            <ul class="seller-info-list list-style-none mb-6">
                                <li class="store-address">
                                    <i class="w-icon-map-marker"></i>
                                    Steven Street, El Carjon
                                    California, United States (US)
                                </li>
                                <li class="store-phone">
                                    <a href="tel:1234567890">
                                        <i class="w-icon-phone"></i>
                                        1234567890
                                    </a>
                                </li>
                                <li class="store-rating">
                                    <i class="w-icon-star-full"></i>
                                    4.33 rating from 3 reviews
                                </li>
                                <li class="store-open">
                                    <i class="w-icon-cart"></i>
                                    Store Open
                                </li>
                            </ul>
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-google w-icon-google"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Store Banner -->

                    <div class="tab tab-nav-boxed tab-nav-underline">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab2-1">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2-2">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2-3">Requests</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2-4">Branches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2-5">About</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab2-1">

                                <div class="product-wrapper row cols-md-4 cols-sm-2 cols-2">
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/1.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">3D Television</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $220.00 - $230.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/2-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/2-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-countdown-container">
                                                    <div class="product-countdown countdown-compact is-countdown"
                                                        data-until="2021, 9, 9" data-format="DHMS" data-compact="false"
                                                        data-labels-short="Days, Hours, Mins, Secs"><span
                                                            class="countdown-row countdown-show4"><span
                                                                class="countdown-section"><span
                                                                    class="countdown-amount">65</span><span
                                                                    class="countdown-period">Days</span></span><span
                                                                class="countdown-section"><span
                                                                    class="countdown-amount">06</span><span
                                                                    class="countdown-period">Hours</span></span><span
                                                                class="countdown-section"><span
                                                                    class="countdown-amount">12</span><span
                                                                    class="countdown-period">Mins</span></span><span
                                                                class="countdown-section"><span
                                                                    class="countdown-amount">52</span><span
                                                                    class="countdown-period">Secs</span></span></span>
                                                    </div>
                                                </div>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Alarm Clock With Lamp</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(10
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        <ins class="new-price">$30.00</ins><del
                                                            class="old-price">$60.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/3.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Apple Laptop</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(5
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $1,000.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/13.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Attachable Charge Alarm</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(7
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $15.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/5.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Best Travel Bag</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $83.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/6.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Black Stunt Motor</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(12
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $374.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/7-1.jpg"
                                                        alt="Product" width="300" height="338">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/7-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Blue Sky Trunk</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $85.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/8.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Bodycare Smooth Powder</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $25.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/9.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Bright Green IPhone</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $950.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/10.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Cavin Fashion Suede Handbag</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $163.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/11-1.jpg"
                                                        alt="Product" width="300" height="338">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/11-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Charming Design Watch</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(10
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $30.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/12.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Classic Simple Backpack</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        $85.00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane" id="tab2-2">
                                <div class="product-wrapper row cols-sm-3 cols-sm-2 cols-2">
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/1.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">3D Television</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/3.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Apple Laptop</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(5
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/13.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Attachable Charge Alarm</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(7
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/5.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Best Travel Bag</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/6.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Black Stunt Motor</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(12
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/7-1.jpg"
                                                        alt="Product" width="300" height="338">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/7-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Blue Sky Trunk</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/8.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Bodycare Smooth Powder</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/9.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Bright Green IPhone</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/10.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Cavin Fashion Suede Handbag</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/11-1.jpg"
                                                        alt="Product" width="300" height="338">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/11-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Charming Design Watch</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(10
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/12.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Classic Simple Backpack</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab2-3">
                                <div class="product-wrapper row cols-sm-5 cols-sm-2 cols-2">
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/1.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">3D Television</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/3.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Apple Laptop</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(5
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/13.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Attachable Charge Alarm</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(7
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/5.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Best Travel Bag</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/6.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Black Stunt Motor</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(12
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/7-1.jpg"
                                                        alt="Product" width="300" height="338">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/7-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Blue Sky Trunk</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/shop/8.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Bodycare Smooth Powder</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/9.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Bright Green IPhone</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/10.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Cavin Fashion Suede Handbag</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(4
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/11-1.jpg"
                                                        alt="Product" width="300" height="338">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/11-2.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Charming Design Watch</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(10
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src=https://portotheme.com/html/wolmart/assets/images/shop/12.jpg"
                                                        alt="Product" width="300" height="338">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Classic Simple Backpack</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane" id="tab2-4">
                                <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                                    style="background-image: url(assets/images/shop/banner1.jpg); background-color: #FFC74E;    padding: 17.4em 8.7em 10.6em;">
                                    <div id="map" style="position: initial;overflow: inherit;"></div>

                                </div>

                                <div class="row cols-lg-2 cols-md-2 cols-sm-2 cols-1 mt-4">

                                    <div class="store-wrap mb-4">
                                        <div class="store store-grid">
                                            <div class="store-header">
                                                <figure class="store-banner">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/1.jpg"
                                                        alt="Vendor" width="400" height="194"
                                                        style="background-color: #40475E">
                                                </figure>
                                            </div>
                                            <!-- End of Store Header -->
                                            <div class="store-content">
                                                <h4 class="store-title">
                                                    <a href="vendor-dokan-store.html">Vendor 1</a>
                                                    <label class="featured-label">Featured</label>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="store-address">
                                                    Steven Street, El Carjon
                                                    California, United States (US)
                                                </div>
                                                <ul class="seller-info-list list-style-none">
                                                    <li class="store-phone">
                                                        <a href="tel:1234567890"><i
                                                                class="w-icon-phone"></i>1234567890</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Store Content -->
                                            <div class="store-footer">
                                                <figure class="seller-brand">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/1.jpg"
                                                        alt="Brand" width="80" height="80">
                                                </figure>
                                                <a href="vendor-dokan-store.html"
                                                    class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                                    Visit Branch<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                            <!-- End of Store Footer -->
                                        </div>
                                        <!-- End of Store -->
                                    </div>
                                    <div class="store-wrap mb-4">
                                        <div class="store store-grid">
                                            <div class="store-header">
                                                <figure class="store-banner">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/2.jpg"
                                                        alt="Vendor" width="400" height="194"
                                                        style="background-color: #6C6C6C">
                                                </figure>
                                            </div>
                                            <!-- End of Store Header -->
                                            <div class="store-content">
                                                <h4 class="store-title">
                                                    <a href="vendor-dokan-store.html">Vendor 2</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top">5.00</span>
                                                    </div>
                                                </div>
                                                <div class="store-address">
                                                    London, United Kingdom (UK)
                                                </div>
                                                <ul class="seller-info-list list-style-none">
                                                    <li class="store-phone">
                                                        <a href="tel:123456789"><i
                                                                class="w-icon-phone"></i>123456789</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Store Content -->
                                            <div class="store-footer">
                                                <figure class="seller-brand">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/2.jpg"
                                                        alt="Brand" width="80" height="80">
                                                </figure>
                                                <a href="vendor-dokan-store.html"
                                                    class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                                    Branch<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                            <!-- End of Store Footer -->
                                        </div>
                                        <!-- End of Store -->
                                    </div>
                                    <div class="store-wrap mb-4">
                                        <div class="store store-grid">
                                            <div class="store-header">
                                                <figure class="store-banner">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/3.jpg"
                                                        alt="Vendor" width="400" height="194"
                                                        style="background-color: #A891BF">
                                                </figure>
                                            </div>
                                            <!-- End of Store Header -->
                                            <div class="store-content">
                                                <h4 class="store-title">
                                                    <a href="vendor-dokan-store.html">Vendor 3</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="store-address">
                                                    Rio de Janeiro, Brazil
                                                </div>
                                                <ul class="seller-info-list list-style-none">
                                                    <li class="store-phone">
                                                        <a href="tel:1234567890"><i
                                                                class="w-icon-phone"></i>1234567890</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Store Content -->
                                            <div class="store-footer">
                                                <figure class="seller-brand">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/3.jpg"
                                                        alt="Brand" width="80" height="80">
                                                </figure>
                                                <a href="vendor-dokan-store.html"
                                                    class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                                    Branch<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                            <!-- End of Store Footer -->
                                        </div>
                                        <!-- End of Store -->
                                    </div>
                                    <div class="store-wrap mb-4">
                                        <div class="store store-grid">
                                            <div class="store-header">
                                                <figure class="store-banner">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/4.jpg"
                                                        alt="Vendor" width="400" height="194"
                                                        style="background-color: #28292D">
                                                </figure>
                                            </div>
                                            <!-- End of Store Header -->
                                            <div class="store-content">
                                                <h4 class="store-title">
                                                    <a href="vendor-dokan-store.html">Vendor 4</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="store-address">
                                                    Ontario, Canada
                                                </div>
                                                <ul class="seller-info-list list-style-none">
                                                    <li class="store-phone">
                                                        <a href="tel:123456789"><i
                                                                class="w-icon-phone"></i>123456789</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Store Content -->
                                            <div class="store-footer">
                                                <figure class="seller-brand">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/4.jpg"
                                                        alt="Brand" width="80" height="80">
                                                </figure>
                                                <a href="vendor-dokan-store.html"
                                                    class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                                    Branch<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                            <!-- End of Store Footer -->
                                        </div>
                                        <!-- End of Store -->
                                    </div>
                                    <div class="store-wrap mb-4">
                                        <div class="store store-grid">
                                            <div class="store-header">
                                                <figure class="store-banner">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/5.jpg"
                                                        alt="Vendor" width="400" height="194"
                                                        style="background-color: #7E7D7B">
                                                </figure>
                                            </div>
                                            <!-- End of Store Header -->
                                            <div class="store-content">
                                                <h4 class="store-title">
                                                    <a href="vendor-dokan-store.html">Vendor 5</a>
                                                    <label class="featured-label">Featured</label>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="store-address">
                                                    Australia
                                                </div>
                                                <ul class="seller-info-list list-style-none">
                                                    <li class="store-phone">
                                                        <a href="tel:1234567890"><i
                                                                class="w-icon-phone"></i>1234567890</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Store Content -->
                                            <div class="store-footer">
                                                <figure class="seller-brand">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/5.jpg"
                                                        alt="Brand" width="80" height="80">
                                                </figure>
                                                <a href="vendor-dokan-store.html"
                                                    class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                                    Branch<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                            <!-- End of Store Footer -->
                                        </div>
                                        <!-- End of Store -->
                                    </div>
                                    <div class="store-wrap mb-4">
                                        <div class="store store-grid">
                                            <div class="store-header">
                                                <figure class="store-banner">
                                                    {{-- <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/6.jpg"
                                                            alt="Vendor" width="400" height="194"
                                                            style="background-color: #5B5B62"> --}}

                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109079.28871609831!2d31.798747272019444!3d31.311268392527154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9dc33c907c06b%3A0xa98a32626bb2919c!2z2YHYp9ix2LPZg9mI2LHYjCDYr9mF2YrYp9i3!5e0!3m2!1sar!2seg!4v1625514870066!5m2!1sar!2seg"
                                                        width="450" height="194" style="border:0;" allowfullscreen=""
                                                        loading="lazy"></iframe>
                                                </figure>
                                            </div>

                                            <!-- End of Store Content -->
                                            <div class="store-footer">
                                                <figure class="seller-brand">
                                                    <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/6.jpg"
                                                        alt="Brand" width="80" height="80">
                                                </figure>
                                                <a href="vendor-dokan-store.html"
                                                    class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                                    Branch<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                            <!-- End of Store Footer -->
                                        </div>
                                        <!-- End of Store -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- End of Main Content -->
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->



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