@extends('layouts.main')

@php
$menu = false ;
@endphp


@push('styles')


<script>
    WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
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

<div class="page-wrapper">


    <!-- Start of Main -->
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="demo1.html">Home</a></li>
                    <li><a href="#">Vendor</a></li>
                    <li><a href="#">WCFM</a></li>
                    <li>Store</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Pgae Contetn -->
        <div class="page-content mb-8">
            <div class="container">
                <div class="store store-wcfm-banner">
                    <figure class="store-media">
                        <img src="assets/images/vendor/wcfm/1.jpg" alt="Vendor" width="1240" height="460"
                            style="background-color: #40475e;" />
                    </figure>
                    <div class="store-content">
                        <div class="store-content-left mr-auto">
                            <div class="personal-info">
                                <figure class="seller-brand">
                                    <img src="assets/images/vendor/brand/2-100x100.png" alt="Brand" width="100"
                                        height="100" />
                                </figure>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="address-info">
                                <h4 class="store-title">Vendor 1</h4>
                                <ul class="seller-info-list list-style-none">
                                    <li class="store-address">
                                        <i class="w-icon-map-marker"></i>
                                        Street1, Street2, Great Area, California, United States (US), 92090El
                                        Carjon,
                                    </li>
                                    <li class="store-phone">
                                        <a href="tel:123456789">
                                            <i class="w-icon-phone"></i>
                                            0(800)123-456
                                        </a>
                                    </li>
                                    <li class="store-email">
                                        <a href="email:#">
                                            <i class="far fa-envelope"></i>
                                            wc@vendor.com
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="store-content-right">
                            <div class="btn btn-white btn-rounded btn-icon-left btn-inquiry"><i
                                    class="far fa-question-circle"></i>Inquiry</div>
                            <div class="social-icons social-icons-colored border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Store WCMP Banner -->

                <div class="row gutter-lg">
                    <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed">
                        <!-- Start of Sidebar Overlay -->
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                        <a href="#" class="sidebar-toggle"><i class="w-icon-angle-right"></i></a>
                        <div class="sidebar-content">
                            <div class="sticky-sidebar">
                                <div class="widget widget-collapsible widget-categories">
                                    <h3 class="widget-title"><span>All Categories</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                        <li>
                                            <a href="#">Clothing</a>
                                            <ul>
                                                <li><a href="#">Men's</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Healthy &amp; Beauty</a></li>
                                        <li><a href="#">Home &amp; Kitchen</a></li>
                                        <li>
                                            <a href="#">Jewelry &amp; Watch</a>
                                            <ul>
                                                <li><a href="#">Smart Watch</a></li>
                                                <li><a href="#">Watch</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Office Electronics</a>
                                            <ul>
                                                <li><a href="#">Accessories</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-coupons">
                                    <h3 class="widget-title"><span>Store Coupons</span></h3>
                                    <div class="widget-body">
                                        <div class="coupon">
                                            First Shopping Coupon
                                            <div class="coupon-tip">
                                                <div class="coupon-info-title">FREE Shipping Coupon</div>
                                                <div class="coupon-info-date">April 30, 2021</div>
                                                <div>Test coupon for vendor page</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-time">
                                    <h3 class="widget-title"><span><i class="far fa-clock"></i>Store Time</span>
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
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span><i class="w-icon-truck"></i>Shipping Rules</span>
                                    </h3>
                                    <div class="widget-body">
                                        <p class="mb-0">Delivery Time: 1-2 business days</p>
                                    </div>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-location">
                                    <h3 class="widget-title"><span>Store Location</span></h3>
                                    <div class="widget-body">
                                        <div class="google-map" id="googlemaps"></div>
                                    </div>
                                </div>
                                <!-- End of Widget -->
                                <div class="widget widget-collapsible widget-products">
                                    <h3 class="widget-title"><span>Best Selling</span></h3>
                                    <div class="widget-body">
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/1.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">3D Television</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$220.00</div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/2-1.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Alarm Clock With Lamp</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$30.00</ins><del
                                                        class="old-price">$60.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/shop/3.jpg" alt="Product" width="100"
                                                        height="106" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="product-default.html">Apple Laptop</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">$1,000.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Widget -->
                            </div>
                        </div>
                    </aside>
                    <!-- End of Sidebar -->

                    <div class="main-content">
                        <div class="tab tab-nav-underline tab-nav-boxed tab-vendor-wcfm">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#tab-1" class="nav-link active">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-2" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-3" class="nav-link">Policies</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-4" class="nav-link">Reviews(1)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                        <div class="toolbox-left">
                                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                                <label>Sort By :</label>
                                                <select name="orderby" class="form-control">
                                                    <option value="default" selected="selected">Default sorting
                                                    </option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by latest</option>
                                                    <option value="price-low">Sort by pric: low to high</option>
                                                    <option value="price-high">Sort by price: high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="toolbox-right">
                                            <div class="toolbox-item toolbox-show select-box">
                                                <select name="count" class="form-control">
                                                    <option value="9">Show 9</option>
                                                    <option value="12" selected="selected">Show 12</option>
                                                    <option value="24">Show 24</option>
                                                    <option value="36">Show 36</option>
                                                </select>
                                            </div>
                                            <div class="toolbox-item toolbox-layout">
                                                <a href="vendor-wcfm-store-product-grid.html"
                                                    class="icon-mode-grid btn-layout active">
                                                    <i class="w-icon-grid"></i>
                                                </a>
                                                <a href="vendor-wcfm-store-product-list.html"
                                                    class="icon-mode-list btn-layout">
                                                    <i class="w-icon-list"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </nav>
                                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/1.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">3D
                                                            Television</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(3
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$220.00 - $230.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/2-1.jpg" alt="Product" width="300"
                                                            height="338" />
                                                        <img src="assets/images/shop/2-2.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Alarm
                                                            Clock With Lamp</a></h4>
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
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/3.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Apple
                                                            Laptop</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(5
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$1,000.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/4.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Attachable
                                                            Charge Alarm</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(7
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$15.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/5.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Best
                                                            Travel Bag</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(4
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$83.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/6.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Black
                                                            Stunt Motor</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(12
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$374.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/7-1.jpg" alt="Product" width="300"
                                                            height="338" />
                                                        <img src="assets/images/shop/7-2.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Blue Sky
                                                            Trunk</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(9
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$85.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/8.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Bodycare
                                                            Smooth Powder</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(4
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$25.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/9.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Bright
                                                            Green IPhone</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(4
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$950.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/10.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Cavin
                                                            Fashion Suede Handbag</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(4
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$163.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/11-1.jpg" alt="Product" width="300"
                                                            height="338" />
                                                        <img src="assets/images/shop/11-2.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Charming
                                                            Design Watch</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(10
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$30.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/12.jpg" alt="Product" width="300"
                                                            height="338" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Add to wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Add to Compare"></a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview"
                                                            title="Quick View">Quick
                                                            View</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a href="product-default.html">Classic
                                                            Simple Backpack</a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product-default.html" class="rating-reviews">(9
                                                            reviews)</a>
                                                    </div>
                                                    <div class="product-pa-wrapper">
                                                        <div class="product-price">$85.00</div>
                                                        <div class="product-action">
                                                            <a href="#"
                                                                class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                                                To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <p class="mb-4"><strong>L</strong>orem ipsum dolor sit amet, consectetur
                                        adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Venenatis tellus in metus vulputate eu scelerisque felis. Vel
                                        pretium lectus quam id leo in vitae turpis massa. Nunc id cursus
                                        metus aliquam. Libero id faucibus nisl tincidunt eget. Aliquam
                                        id diam maecenas ultricies mi eget mauris.</p>
                                    <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt tellus in metus vulputate eu scelerisque
                                        felis. Vel pretium lectus quam id leo. id faucibus nisl tincidunt eget.
                                        Aliquam id diam maecenas ultricies mi eget mauris. ut labore et dolore magna
                                        aliqua. Venenatis.</p>
                                </div>
                                <div class="tab-pane" id="tab-3">
                                    <div class="policies-area">
                                        <h3 class="title">Shipping Policy</h3>
                                        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur
                                            purus
                                            ut. Tellus rutrum tellus pelle.</p>
                                    </div>
                                    <div class="policies-area">
                                        <h3 class="title">Refund Policy</h3>
                                        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur
                                            purus ut. Tellus rutrum tellus pelle.</p>
                                    </div>
                                    <div class="policies-area">
                                        <h3 class="title text-left">Cancellation / Return / Exchange Policy</h3>
                                        <p><strong>L</strong>orem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt arcu cursus. Sagittis id consectetur
                                            purus ut. Tellus rutrum tellus pelle.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-4">
                                    <div class="review-area">
                                        <h3 class="title font-weight-bold mb-5">Write A Review</h3>
                                        <input name="review" type="text" class="form-control" placeholder="your review">
                                        <button class="btn btn-rounded">Add Your Review</button>
                                    </div>
                                    <!-- End of Reveiw Area -->
                                    <div class="review-area">
                                        <h3 class="title font-weight-bold mb-5">Reviews</h3>
                                        <div class="reviewers d-flex align-items-center flex-wrap mb-7">
                                            <div class="reviewers-picture d-flex mr-2">
                                                <figure>
                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"
                                                        width="113" height="112" />
                                                </figure>
                                                <figure>
                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"
                                                        width="113" height="112" />
                                                </figure>
                                                <figure>
                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"
                                                        width="113" height="112" />
                                                </figure>
                                            </div>
                                            <div class="reviewer-name">
                                                <a href="#" class="font-weight-bold mr-1">John Doe</a>has reviewed
                                                this store
                                            </div>
                                        </div>
                                        <!-- End of Reviewers -->
                                        <div class="review-ratings">
                                            <div class="review-ratings-left mr-auto">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Feature</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Varity</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Flexibility</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Delivery</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Support</label>
                                                </div>
                                            </div>
                                            <!-- End of Review Ratings Left -->
                                            <div class="review-ratings-right">
                                                <div class="average-rating">5.0<sub>/5</sub></div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full mr-0">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Review Ratings Right -->
                                        </div>
                                        <!-- End of Review Ratings -->
                                        <div class="user-wrap">
                                            <div class="user-photo">
                                                <figure>
                                                    <img src="assets/images/vendor/wcfm/avatar.png" alt="Avatar"
                                                        width="113" height="112" />
                                                </figure>
                                                <div class="rated text-center">
                                                    <label>Rated</label>
                                                    <span class="score">5.0</span>
                                                </div>
                                            </div>
                                            <!-- End of User Photo -->
                                            <div class="user-info">
                                                <h4 class="user-name">John Doe</h4>
                                                <div class="user-date mb-7">
                                                    <span>1 Reviews</span>
                                                    <span>April 1, 2021 12:12 Pm</span>
                                                </div>
                                                <p>Diam in arcu cursus euismod quis. Eget sit amet tellusvitae
                                                    sapien pellentesque habitant morbi tristique senectus et.
                                                    Cras adipiscing enim ermentum et sollicitudin ac orci phasellus.
                                                </p>
                                            </div>
                                            <!-- End of User Info -->
                                            <div class="review-ratings">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Feature</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Varity</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Flexibility</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Delivery</label>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                    </div>
                                                    <label>5.0 Support</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of User Wrap -->
                                    </div>
                                    <!-- End of Reveiw Area -->
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

    <!-- Start of Footer -->
    <footer class="footer appear-animate" data-animation-options="{
        'name': 'fadeIn'
    }">
        <div class="footer-newsletter bg-primary pt-6 pb-6">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="icon-box icon-box-side text-white">
                            <div class="icon-box-icon d-inline-flex">
                                <i class="w-icon-envelop3"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title text-white text-uppercase mb-0">Subscribe To Our
                                    Newsletter</h4>
                                <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                        <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                            <input type="email" class="form-control mr-2 bg-white" name="email" id="email"
                                placeholder="Your E-mail Address" />
                            <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i
                                    class="w-icon-long-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget widget-about">
                            <a href="demo1.html" class="logo-footer">
                                <img src="assets/images/logo_footer.png" alt="logo-footer" width="144" height="45" />
                            </a>
                            <div class="widget-body">
                                <p class="widget-about-title">Got Question? Call us 24/7</p>
                                <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                    & coupons ster now toon.
                                </p>

                                <div class="social-icons social-icons-colored">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h3 class="widget-title">Company</h3>
                            <ul class="widget-body">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Team Member</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="#">Affilate</a></li>
                                <li><a href="#">Order History</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4>
                            <ul class="widget-body">
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="login.html">Sign In</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="wishlist.html">My Wishlist</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4>
                            <ul class="widget-body">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Product Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Term and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="widget widget-category">
                    <div class="category-box">
                        <h6 class="category-name">Consumer Electric:</h6>
                        <a href="#">TV Television</a>
                        <a href="#">Air Condition</a>
                        <a href="#">Refrigerator</a>
                        <a href="#">Washing Machine</a>
                        <a href="#">Audio Speaker</a>
                        <a href="#">Security Camera</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Clothing & Apparel:</h6>
                        <a href="#">Men's T-shirt</a>
                        <a href="#">Dresses</a>
                        <a href="#">Men's Sneacker</a>
                        <a href="#">Leather Backpack</a>
                        <a href="#">Watches</a>
                        <a href="#">Jeans</a>
                        <a href="#">Sunglasses</a>
                        <a href="#">Boots</a>
                        <a href="#">Rayban</a>
                        <a href="#">Accessories</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Home, Garden & Kitchen:</h6>
                        <a href="#">Sofa</a>
                        <a href="#">Chair</a>
                        <a href="#">Bed Room</a>
                        <a href="#">Living Room</a>
                        <a href="#">Cookware</a>
                        <a href="#">Utensil</a>
                        <a href="#">Blender</a>
                        <a href="#">Garden Equipments</a>
                        <a href="#">Decor</a>
                        <a href="#">Library</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Health & Beauty:</h6>
                        <a href="#">Skin Care</a>
                        <a href="#">Body Shower</a>
                        <a href="#">Makeup</a>
                        <a href="#">Hair Care</a>
                        <a href="#">Lipstick</a>
                        <a href="#">Perfume</a>
                        <a href="#">View all</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Jewelry & Watches:</h6>
                        <a href="#">Necklace</a>
                        <a href="#">Pendant</a>
                        <a href="#">Diamond Ring</a>
                        <a href="#">Silver Earing</a>
                        <a href="#">Leather Watcher</a>
                        <a href="#">Rolex</a>
                        <a href="#">Gucci</a>
                        <a href="#">Australian Opal</a>
                        <a href="#">Ammolite</a>
                        <a href="#">Sun Pyrite</a>
                    </div>
                    <div class="category-box">
                        <h6 class="category-name">Computer & Technologies:</h6>
                        <a href="#">Laptop</a>
                        <a href="#">iMac</a>
                        <a href="#">Smartphone</a>
                        <a href="#">Tablet</a>
                        <a href="#">Apple</a>
                        <a href="#">Asus</a>
                        <a href="#">Drone</a>
                        <a href="#">Wireless Speaker</a>
                        <a href="#">Game Controller</a>
                        <a href="#">View all</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-left">
                    <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>

{{-- <main class="main-content col-xs-12">
    <div class="supp-prof col-xs-12">
        <div class="supp-cover col-xs-12"
            style="background-image: url({{ $supplier->store_background ? url('storage/'.$supplier->store_background) :  asset('/web/images/cover.jpg') }})">
</div>
<div class="supp-bottom col-xs-12">
    <div class="supp-data">
        <div class="supp-img">
            <img src="{{$supplier->store_image ? url('storage/'.$supplier->store_image) : asset('/web/images/marks/1.png')}}"
                alt="">
        </div>
        <div class="supp-l">
            <h3>{{$supplier->name}}</h3>
            <p>
                <span class="rating">
                    @for ($i = 0 ; $i < $supplier->average_rating; $i++)
                        <i class="fa fa-star active"></i>
                        @endfor
                        @for ($i = 0 ; $i < (5 - $supplier->average_rating ); $i++)
                            <i class="fa fa-star"></i>
                            @endfor



                </span>
                <span>followers: {{$supplier->followers_count}}</span>
            </p>
        </div>
    </div>
    <div class="supp-btns">
        <a href="{{url('supplier/'.$supplier->id.'/info')}}" class="btn btn-gray">
            <i class="fa fa-exclamation-triangle"></i>
            about
        </a>
        <a href="#" data-toggle="modal" data-target="#contact-pop" class="btn">@lang('general.contact_supplier')</a>
        @if(Auth::check())
        <a href="#" class="btn btn-review" data-toggle="modal" data-target="#review-pop">@lang('general.add_review')</a>
        @endif




        @if(Auth::check())


        @if(\Auth::user()->canFollow($supplier) &&\Auth::user()->id != $supplier->id)
        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})"
            class="btn ">
            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
            <span style="">
                Follow

            </span>

        </a>

        @elseif(!\Auth::user()->canFollow($supplier) && \Auth::user()->id != $supplier->id)

        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})"
            class="btn following">
            <i id="followicon_{{$supplier->id}}" class="fa fa-check"></i>
            <span style="">
                following

            </span>

        </a>

        @else

        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})"
            class="btn ">
            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
            <span style="">
                Follow

            </span>

        </a>
        @endif



        @elseif(!Auth::check() )

        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})"
            class="btn ">
            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
            <span style="">
                Follow

            </span>

        </a>
        @endif

    </div>
</div>
</div>

<div class="service-wrap col-xs-12">
    <div class="container">
        <ul class="nav-tabs col-xs-12">
            <li class="active">
                <a href="#" data-toggle="tab" data-target="#t1" aria-expanded="true">Products</a>
            </li>
            <li class="">
                <a href="#" data-toggle="tab" data-target="#t2" aria-expanded="false">Services</a>
            </li>
            <li>
                <a href="#" data-toggle="tab" data-target="#t3">Requests</a>
            </li>
            <li>
                <a href="#" data-toggle="tab" data-target="#t4">Clients</a>
            </li>
            <li>
                <a href="#" data-toggle="tab" data-target="#t5">Reviews</a>
            </li>
        </ul>
        <div class="tab-content col-xs-12">
            <div class="col-xs-12 tab-pane fade active in" id="t1">
                <ul class="nav-tabs col-xs-12">
                    <li class="active">
                        <a href="active" data-toggle="tab" data-target="#t11" aria-expanded="false">All</a>
                    </li>


                    @foreach($supplier_products_categories as $category)
                    <li>
                        <a href="" data-toggle="tab" data-target="#cat{{$category->id}}"
                            aria-expanded="false">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</a>
                    </li>
                    @endforeach


                </ul>
                <div class="tab-content col-xs-12">
                    <div class="col-xs-12 tab-pane fade active in" id="t11">

                        @foreach($all_products as $product)
                        <div class="block b-product col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="i-img">
                                    <a href="javascript:void(0)" class="fav-pro">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="" class="img-hold">

                                        @if(isset(json_decode($product->images)[0]))
                                        <img src="{{ url('storage/'.json_decode($product->images)[0])}}" alt="">
                                        @endif
                                        @if(isset(json_decode($product->images)[1]))
                                        <img src="{{ url('storage/'.json_decode($product->images)[1])}}" alt=""
                                            class="sec-img">
                                        @endif

                                    </a>
                                </div>
                                <div class="i-data">
                                    <a href="#"
                                        class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                    <p>{{$product->getTranslatedAttribute('description',\App::getLocale())}}</p>
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </p>
                                    @if($product->sale_price)
                                    <span>{{$product->sale_price}} l.e</span>
                                    @endif


                                    <span class="{{$product->sale_price ? 'old' : ''}}">{{$product->sale_price}}
                                        l.e</span>

                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    @foreach($supplier_products_categories as $category)
                    @php

                    $sub_categories_ids =
                    \App\Models\Category::where('parent_id',$category->id)->get()->pluck('id');
                    $sub_sub_categories_ids =
                    \App\Models\Category::whereIn('parent_id',$sub_categories_ids)->get()->pluck('id');

                    @endphp

                    <div class="col-xs-12 tab-pane fade" id="cat{{$category->id}}">

                        @foreach(\App\Models\Product::whereIn('category_id',$sub_sub_categories_ids)->get() as
                        $product)

                        <div class="block b-product col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="i-img">
                                    <a href="javascript:void(0)" class="fav-pro">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="" class="img-hold">

                                        @if(isset(json_decode($product->images)[0]))
                                        <img src="{{ url('storage/'.json_decode($product->images)[0])}}" alt="">
                                        @endif
                                        @if(isset(json_decode($product->images)[1]))
                                        <img src="{{ url('storage/'.json_decode($product->images)[1])}}" alt=""
                                            class="sec-img">
                                        @endif

                                    </a>
                                </div>
                                <div class="i-data">
                                    <a href="#"
                                        class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                    <p>{{$product->getTranslatedAttribute('description',\App::getLocale())}}</p>
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </p>
                                    <span>250 l.e</span><span class="old">500 l.e</span>

                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    @endforeach



                </div>
            </div>

            <div class="col-xs-12 tab-pane fade" id="t2">





                <ul class="nav-tabs col-xs-12">
                    <li class="active">
                        <a href="#" data-toggle="tab" data-target="#t111" aria-expanded="false">All</a>
                    </li>
                    @foreach($supplier_services_categories as $category)
                    <li class="">
                        <a href="#" data-toggle="tab" data-target="#service_cat_{{$category->id}}"
                            aria-expanded="false">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</a>
                    </li>
                    @endforeach

                </ul>
                <div class="tab-content col-xs-12">
                    <div class="col-xs-12 tab-pane fade active in" id="t111">


                        @foreach($all_services as $service)
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    @if(isset(json_decode($service->images)[0]))
                                    <img src="{{ url('storage/'.json_decode($service->images)[0])}}" alt="">
                                    @endif

                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">{{$service->name}}</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        @endforeach

                    </div>


                    @foreach($supplier_services_categories as $category)

                    <div class="col-xs-12 tab-pane fade" id="service_cat_{{$category->id}}">


                        @foreach(\App\Models\Service::where([['user_id',$supplier->id],['category_id',$category->id]])->get()
                        as $service)
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    @if(isset(json_decode($service->images)[0]))
                                    <img src="{{ url('storage/'.json_decode($service->images)[0])}}" alt="">
                                    @endif

                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">{{$service->name}}</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    @endforeach




                </div>
            </div>
            <div class="col-xs-12 tab-pane fade" id="t3">
                <ul class="nav-tabs col-xs-12">
                    <li class="active">
                        <a href="#" data-toggle="tab" data-target="#t1111">All</a>
                    </li>
                    @foreach($supplier_requests_categories as $category)
                    <li>
                        <a href="#" data-toggle="tab"
                            data-target="#req{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</a>
                    </li>
                    @endforeach

                </ul>
                <div class="tab-content col-xs-12">
                    <div class="col-xs-12 tab-pane fade active in" id="t1111">



                        <div class="reqs-wrap col-xs-12">
                            <div class="container">


                                <div class="g-body col-xs-12">

                                    @foreach(\App\Models\Request::where('user_id',$supplier->id)->get() as $request)
                                    <div class="block col-md-6 col-xs-12">
                                        <div class="inner col-xs-12">
                                            <div class="i-top col-xs-12">
                                                <span class="type-badge">
                                                    {{$request->category->getTranslatedAttribute('name',\App::getLocale())}}
                                                </span>
                                                <div class="i-slider owl-carousel owl-theme">



                                                    @foreach(json_decode($request->images) as $image)
                                                    <div class="item">
                                                        <img src="{{url('storage/'.$image)}}" alt="">
                                                    </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                            <div class="i-middle col-xs-12">
                                                <div class="author">
                                                    <img src="images/user.jpg" alt="">
                                                    <a href="#">{{$request->name}}</a>
                                                </div>
                                                <div class="time">
                                                    <span>03:30 AM</span>
                                                </div>
                                            </div>
                                            <div class="i-footer col-xs-12">
                                                <div class="title">
                                                    <a href="#">{{$request->description}}</a>
                                                </div>
                                                <div class="extra">
                                                    <div class="prod-extra">
                                                        <a href="#" data-tool="tooltip" title="add to favourite"
                                                            data-placement="top">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="op-social"
                                                            data-tool="tooltip" title="share" data-placement="top">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </div>
                                                    <div class="social shares">
                                                        <a href="#" class="fb">
                                                            <i class="fa fa-facebook"></i>
                                                            share with facebook
                                                        </a>
                                                        <a href="#" class="tw">
                                                            <i class="fa fa-twitter"></i>
                                                            share with twitter
                                                        </a>
                                                        <a href="#" class="linkedin">
                                                            <i class="fa fa-linkedin"></i>
                                                            share with linkedin
                                                        </a>
                                                    </div>
                                                    <a href="#" class="btn" data-target="#contact-pop"
                                                        data-toggle="modal">contact user</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach






                                </div>


                            </div>
                        </div>


                    </div>

                    @foreach($supplier_requests_categories as $category)
                    <div class="col-xs-12 tab-pane fade" id="req{{$category->id}}">

                        <div class="reqs-wrap col-xs-12">
                            <div class="container">


                                <div class="g-body col-xs-12">

                                    @foreach(\App\Models\Request::where([['user_id',$supplier->id],['category_id',$category->id]])->get()
                                    as $request)
                                    <div class="block col-md-6 col-xs-12">
                                        <div class="inner col-xs-12">
                                            <div class="i-top col-xs-12">
                                                <span class="type-badge">
                                                    {{$request->category->getTranslatedAttribute('name',\App::getLocale())}}
                                                </span>
                                                <div class="i-slider owl-carousel owl-theme">



                                                    @foreach(json_decode($request->images) as $image)
                                                    <div class="item">
                                                        <img src="{{url('storage/'.$image)}}" alt="">
                                                    </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                            <div class="i-middle col-xs-12">
                                                <div class="author">
                                                    <img src="images/user.jpg" alt="">
                                                    <a href="#">{{$request->name}}</a>
                                                </div>
                                                <div class="time">
                                                    <span>03:30 AM</span>
                                                </div>
                                            </div>
                                            <div class="i-footer col-xs-12">
                                                <div class="title">
                                                    <a href="#">{{$request->description}}</a>
                                                </div>
                                                <div class="extra">
                                                    <div class="prod-extra">
                                                        <a href="#" data-tool="tooltip" title="add to favourite"
                                                            data-placement="top">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="op-social"
                                                            data-tool="tooltip" title="share" data-placement="top">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </div>
                                                    <div class="social shares">
                                                        <a href="#" class="fb">
                                                            <i class="fa fa-facebook"></i>
                                                            share with facebook
                                                        </a>
                                                        <a href="#" class="tw">
                                                            <i class="fa fa-twitter"></i>
                                                            share with twitter
                                                        </a>
                                                        <a href="#" class="linkedin">
                                                            <i class="fa fa-linkedin"></i>
                                                            share with linkedin
                                                        </a>
                                                    </div>
                                                    <a href="#" class="btn" data-target="#contact-pop"
                                                        data-toggle="modal">contact user</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>


                            </div>
                        </div>
                    </div>
                    @endforeach





                    <div class="col-xs-12 tab-pane fade" id="t3333">
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">
                                    <img src="images/cover.jpg" alt="">
                                </a>
                            </div>
                            <div class="s-data">
                                <a href="#" class="title">company name</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact
                                    supplier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 tab-pane fade" id="t4">
                @foreach(\App\Models\Client::where('user_id',\Auth::id())->get() as $service)
                <div class="s-block col-md-3 col-sm-6 col-xs-12">
                    <div class="s-img">
                        <a href="#">

                            <img style="object-fit: contain;" src="{{ url('storage/'.$service->image)}}" alt="">


                        </a>
                    </div>
                    <div class="s-data" style="text-align: center;">
                        <a href="#" class="title">{{$service->name}}</a>


                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-xs-12 tab-pane fade" id="t5">
                @foreach($supplier->reviews as $comment)
                @if($comment->owner)
                <div class="rev-item col-md-7 col-xs-12">
                    <div class="r-img">
                        <img src="http://businessdotkom.com/storage/users/default.png" alt="">
                    </div>
                    <div class="r-data">
                        <a href="#">{{$comment->owner->name}}</a>
                        <p>{{$comment->comment}}</p>
                    </div>
                </div>
                @endif
                @endforeach


            </div>

        </div>
    </div>
</div>




</main> --}}

{{-- <div class="modal fade" id="contact-pop">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
            <div class="modal-body">

                <div class="supp-card">
                    <h3>@lang('general.contact_supplier')</h3>
                    <div class="c-img">
                        <img src="{{$supplier->store_image ? url('storage/'.$supplier->store_image) : asset('/web/images/marks/1.png')}}"
alt="">
</div>
<h4>{{$supplier->name}}</h4>
<p>
    <i class="fa fa-star active"></i>
    <i class="fa fa-star active"></i>
    <i class="fa fa-star active"></i>
    <i class="fa fa-star active"></i>
    <i class="fa fa-star active"></i>
</p>
<div class="c-info">
    <a href="tel:{{$supplier->mobile}}" class="btn">
        <i class="fa fa-phone"></i>
        {{$supplier->mobile}}
    </a>
    <a href="mailto:{{$supplier->email}}" class="btn">
        <i class="fa fa-envelope"></i>
        {{$supplier->email}}
    </a>
</div>
<div class="c-social">
    <!--<span>social:</span>-->
    <a href="{{$supplier->facebook_url}}">
        <i class="fa fa-facebook"></i>
    </a>
    <a href=" https://api.whatsapp.com/send?phone={{$supplier->whatsapp_mobile}}">
        <i class="fa fa-whatsapp"></i>
    </a>
    <a href="{{$supplier->linkedin_url}}">
        <i class="fa fa-linkedin"></i>
    </a>
    <a href="{{$supplier->instagram_url}}">
        <i class="fa fa-instagram"></i>
    </a>
    <a href="{{$supplier->youtube_url}}">
        <i class="fa fa-youtube-play"></i>
    </a>
</div>
</div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal --> --}}



<div class="modal fade" id="review-pop">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="rate-title">
                    <h3>@lang('general.add_review')</h3>
                </div>

                <div class="rate-form">
                    <form action="{{route('add_product_review',['type' => 'supplier','id' => $supplier->id])}}"
                        method="POST">
                        @csrf


                        <div class="rate-stars">
                            <div class="stars">

                                <input class="star star-5" id="star-5" type="radio" value="1" name="stars" />
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" id="star-4" type="radio" value="2" name="stars" />
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" id="star-3" type="radio" value="3" name="stars" />
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" id="star-2" type="radio" value="4" name="stars" />
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" id="star-1" type="radio" value="5" name="stars" />
                                <label class="star star-1" for="star-1"></label>

                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="comment" required
                                placeholder="@lang('general.add_your_review')"></textarea>
                            <button type="submit" class="btn">@lang('general.add_review')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection


@push('scripts')
{{-- <script src="{{ asset('/web/js/rangeSlider.min.js')}}"></script>

<script>
    //see docs on: http://ionden.com/a/plugins/ion.rangeSlider/index.html
        $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 1000,
        to: 500,
        skin: "round"
    });

        $('.op-filter').click(function () {
           $('.cat-sidebar .widget').slideToggle();
        });



             function followtoggle(follower_id){

             var token = '{{ Session::token() }}';



         $.ajax({



            type : 'POST',

            url  : '{!!URL::to('user_follow')!!}',

            data : { follower_id: follower_id,_token: token },

            success : function(result){

                console.log(result);

  $("#followtoggle_"+follower_id).toggleClass("following");
  $("#followicon_"+follower_id).toggleClass(result.icon);
  $("#followicon_"+follower_id).addClass(result.icon).removeClass(result.old_icon)

$("#followtoggle_"+follower_id+ " span").text(result.but_status);


                const Toast = Swal.mixin({

  toast: true,

  position: 'top-end',

  showConfirmButton: false,

  timer: 6000,

  timerProgressBar: true,

  onOpen: (toast) => {

    toast.addEventListener('mouseenter', Swal.stopTimer)

    toast.addEventListener('mouseleave', Swal.resumeTimer)

  }

})



Toast.fire({

  icon: 'success',

  title: result.message

})

            }

        });

    }


</script> --}}



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

<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script>
    // Map Markers
         var mapMarkers = [{
             address: "New York, NY 10017",
             html: "<strong>New York Office<\/strong><br>New York, NY 10017",
             popup: true
         }];
 
         // Map Initial Location
         var initLatitude = 40.75198;
         var initLongitude = -73.96978;
 
         // Map Extended Settings
         var mapSettings = {
             controls: {
                 draggable: !window.Wolmart.isMobile,
                 panControl: true,
                 zoomControl: true,
                 mapTypeControl: true,
                 scaleControl: true,
                 streetViewControl: true,
                 overviewMapControl: true
             },
             scrollwheel: false,
             markers: mapMarkers,
             latitude: initLatitude,
             longitude: initLongitude,
             zoom: 11
         };
 
         var map = $('#googlemaps').gMap(mapSettings);
 
         // Map text-center At
         var mapCenterAt = function (options, e) {
             e.preventDefault();
             $('#googlemaps').gMap("centerAt", options);
         }
 
</script>


@endpush