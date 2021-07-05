@extends('layouts.app')

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

<div class="page-wrapper">
    <!-- Start of Header -->
    <header class="header header-border">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <p class="welcome-msg">Welcome to Wolmart Store message or remove it!</p>
                </div>
                <div class="header-right">
                    <div class="dropdown">
                        <a href="#currency">USD</a>
                        <div class="dropdown-box">
                            <a href="#USD">USD</a>
                            <a href="#EUR">EUR</a>
                        </div>
                    </div>
                    <!-- End of DropDown Menu -->

                    <div class="dropdown">
                        <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                class="dropdown-image"> ENG</a>
                        <div class="dropdown-box">
                            <a href="#ENG">
                                <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                    class="dropdown-image">
                                ENG
                            </a>
                            <a href="#FRA">
                                <img src="assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                    class="dropdown-image">
                                FRA
                            </a>
                        </div>
                    </div>
                    <!-- End of Dropdown Menu -->
                    <span class="divider d-lg-show"></span>
                    <a href="blog.html" class="d-lg-show">Blog</a>
                    <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                    <a href="my-account.html" class="d-lg-show">My Account</a>

                    <a href="assets/ajax/login.html" class="d-lg-show login sign-in"><i class="w-icon-account"></i>Sign
                        In</a>
                    <span class="delimiter d-lg-show">/</span>
                    <a href="assets/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>
                    <a href="assets/ajax/login.html" class="d-lg-show login sign-in"><i class="w-icon-store"></i>Sign
                        In</a>
                    <span class="delimiter d-lg-show">/</span>
                    <a href="assets/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>


                </div>
            </div>
        </div>
        <!-- End of Header Top -->

        <div class="header-middle">
            <div class="container">
                <div class="header-left mr-md-4">
                    <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                    </a>
                    <a href="demo1.html" class="logo ml-lg-0">
                        <img src="{{ asset('/web/images/logo.png')}}" alt="logo" width="240" height="45">
                    </a>
                    <form method="get" action="#"
                        class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                        <div class="select-box">
                            <select id="category" name="category">
                                <option value="">All Categories</option>
                                <option value="4">Fashion</option>
                                <option value="5">Furniture</option>
                                <option value="6">Shoes</option>
                                <option value="7">Sports</option>
                                <option value="8">Games</option>
                                <option value="9">Computers</option>
                                <option value="10">Electronics</option>
                                <option value="11">Kitchen</option>
                                <option value="12">Clothing</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" name="search" id="search" placeholder="Search in..."
                            required="">
                        <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header-right ml-4">
                    <div class="header-call d-xs-show d-lg-flex align-items-center">
                        <a href="tel:#" class="w-icon-call"></a>
                        <div class="call-info d-lg-show">
                            <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                            <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                        </div>
                    </div>
                    <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                        <i class="w-icon-heart"></i>
                        <span class="wishlist-label d-lg-show">Wishlist</span>
                    </a>
                    <a class="compare label-down link d-xs-show" href="compare.html">
                        <i class="w-icon-compare"></i>
                        <span class="compare-label d-lg-show">Compare</span>
                    </a>
                    <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                        <div class="cart-overlay"></div>
                        <a href="#" class="cart-toggle label-down link">
                            <i class="w-icon-cart">
                                <span class="cart-count">2</span>
                            </i>
                            <span class="cart-label">Cart</span>
                        </a>
                        <div class="dropdown-box">
                            <div class="cart-header">
                                <span>Shopping Cart</span>
                                <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                            <div class="products">
                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="product-default.html" class="product-name">Beige knitted
                                            elas<br>tic
                                            runner shoes</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$25.68</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                                width="94">
                                        </a>
                                    </figure>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="product product-cart">
                                    <div class="product-detail">
                                        <a href="product-default.html" class="product-name">Blue utility
                                            pina<br>fore
                                            denim dress</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$32.99</span>
                                        </div>
                                    </div>
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                                height="94">
                                        </a>
                                    </figure>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="cart-total">
                                <label>Subtotal:</label>
                                <span class="price">$58.67</span>
                            </div>

                            <div class="cart-action">
                                <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                            </div>
                        </div>
                        <!-- End of Dropdown Box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Middle -->

        <div class="sticky-content-wrapper" style="">
            <div class="header-bottom sticky-content fix-top sticky-header" style="">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <li class="has-submenu">
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-tshirt2"></i>Fashion
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Women</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Jewlery &amp;
                                                                Watches</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Men</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Jewlery &amp;
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="banner-fixed menu-banner menu-banner2">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                                width="235" height="347">
                                                        </figure>
                                                        <div class="banner-content">
                                                            <div class="banner-price-info mb-1 ls-normal">Get up to
                                                                <strong
                                                                    class="text-primary text-uppercase">20%Off</strong>
                                                            </div>
                                                            <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                            <a href="shop-banner-sidebar.html"
                                                                class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-home"></i>Home &amp; Garden
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Bedroom</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Beds, Frames &amp;
                                                                Bases</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Kid's Beds &amp;
                                                                Headboards</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Living Room</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Futons &amp; Sofa
                                                                Beds</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Cabinets &amp;
                                                                Chests</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Office</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Breakroom
                                                                Tables</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Kitchen &amp; Dining</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                                Cabinets</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Dining Room
                                                                Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner3">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                                width="235" height="461">
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-white mb-1">
                                                                Restroom</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-white ls-normal">
                                                                Furniture Sale</h3>
                                                            <div
                                                                class="banner-price-info text-white font-weight-normal ls-25">
                                                                Up to <span
                                                                    class="text-secondary text-uppercase font-weight-bold">25%
                                                                    Off</span></div>
                                                            <a href="shop-banner-sidebar.html"
                                                                class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-electronics"></i>Electronics
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Laptops &amp; Computers</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Desktop
                                                                Computers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                                Storage</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Computer
                                                                Accessories</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Home Audio
                                                                Speakers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                                Devices</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Digital Cameras</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Sports &amp; Action
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                                Cards</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Cell Phones</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Phone &amp; Cellphone
                                                                Cases</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Cellphone
                                                                Chargers</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner4">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                                width="235" height="433">
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                                Week</h4>
                                                            <h3 class="banner-title text-white">Save On Smart EarPhone
                                                            </h3>
                                                            <div
                                                                class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                                20% Off</div>
                                                            <a href="shop-banner-sidebar.html"
                                                                class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-furniture"></i>Furniture
                                            </a>
                                            <ul class="megamenu type2">
                                                <li class="row">
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Furniture</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Sofas &amp;
                                                                    Couches</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Lighting</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Bathroom
                                                                    Lighting</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Home Accessories</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Decorative
                                                                    Accessories</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Candals &amp;
                                                                    Holders</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Garden &amp; Outdoors</h4>
                                                        <hr class="divider">
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.html">Garden
                                                                    Furniture</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.html">Pressure
                                                                    Washers</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">All Garden
                                                                    Tools</a></li>
                                                            <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #D2D2D2;">
                                                            </figure>
                                                            <div class="banner-content text-right y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                    New Arrivals</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                    Amazing Sofa</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal">
                                                                    Starting at <strong>$125.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #9F9888;">
                                                            </figure>
                                                            <div class="banner-content y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                    Best Seller</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                    Chair &amp; Lamp</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal text-white">
                                                                    From <strong>$165.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-heartbeat"></i>Healthy &amp; Beauty
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-gift"></i>Gift Ideas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-gamepad"></i>Toy &amp; Games
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-ice-cream"></i>Cooking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-ios"></i>Smart Phones
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-camera"></i>Cameras &amp; Photo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.html">
                                                <i class="w-icon-ruby"></i>Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-banner-sidebar.html"
                                                class="font-weight-bold text-primary text-uppercase ls-25">
                                                View All Categories<i class="w-icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li class="active">
                                        <a href="demo1.html">Home</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="shop-banner-sidebar.html">Shop</a>

                                        <!-- Start of Megamenu -->
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Shop Pages</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Shop Layouts</h4>
                                                <ul>
                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.html">List Mode</a></li>
                                                    <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-variable.html">Variable Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                                    <li><a href="product-accordion.html">Data In Accordion</a></li>
                                                    <li><a href="product-section.html">Data In Sections</a></li>
                                                    <li><a href="product-swatch.html">Image Swatch</a></li>
                                                    <li><a href="product-extended.html">Extended Info</a>
                                                    </li>
                                                    <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                                    <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                                class="tip tip-new">New</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-default.html">Default<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                                    <li><a href="product-grid.html">Grid Images</a></li>
                                                    <li><a href="product-masonry.html">Masonry</a></li>
                                                    <li><a href="product-gallery.html">Gallery</a></li>
                                                    <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                                    <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li class="has-submenu">
                                        <a href="vendor-dokan-store.html">Vendor</a>
                                        <ul class="submenu">
                                            <li class="has-submenu">
                                                <a href="vendor-dokan-store-list.html">Store Listing</a>
                                                <ul class="submenu">
                                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="vendor-dokan-store.html">Vendor Store</a>
                                                <ul class="submenu">
                                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Classic</a></li>
                                            <li><a href="blog-listing.html">Listing</a></li>
                                            <li class="has-submenu">
                                                <a href="blog-grid-3cols.html">Grid</a>
                                                <ul class="submenu">
                                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="blog-masonry-3cols.html">Masonry</a>
                                                <ul class="submenu">
                                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="blog-mask-grid.html">Mask</a>
                                                <ul class="submenu">
                                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="post-single.html">Single Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="about-us.html">Pages</a>
                                        <ul class="submenu">

                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="elements.html">Elements</a>
                                        <ul class="submenu">
                                            <li><a href="element-accordions.html">Accordions</a></li>
                                            <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                            <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                            <li><a href="element-buttons.html">Buttons</a></li>
                                            <li><a href="element-cta.html">Call to Action</a></li>
                                            <li><a href="element-icons.html">Icons</a></li>
                                            <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                            <li><a href="element-instagrams.html">Instagrams</a></li>
                                            <li><a href="element-categories.html">Product Category</a></li>
                                            <li><a href="element-products.html">Products</a></li>
                                            <li><a href="element-tabs.html">Tabs</a></li>
                                            <li><a href="element-testimonials.html">Testimonials</a></li>
                                            <li><a href="element-titles.html">Titles</a></li>
                                            <li><a href="element-typography.html">Typography</a></li>

                                            <li><a href="element-vendors.html">Vendors</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                            <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->


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
                                        <h3 class="widget-title"><span>All Categories</span><span
                                                class="toggle-btn"></span></h3>
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
                                        <h3 class="widget-title"><span>Contact Vendor</span><span
                                                class="toggle-btn"></span></h3>
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
                                            <li><label>Sunday</label></li>
                                            <li><label>Monday</label></li>
                                            <li><label>Tuesday</label></li>
                                            <li><label>Wednesday</label></li>
                                            <li><label>Thursday</label></li>
                                            <li><label>Friday</label></li>
                                            <li><label>Saturday</label></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-products">
                                        <h3 class="widget-title"><span>Best Selling</span><span
                                                class="toggle-btn"></span></h3>
                                        <div class="widget-body">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/1.jpg" alt="Product" width="100"
                                                            height="106">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">3D Television</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
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
                                                            height="106">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Alarm Clock With Lamp</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
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
                                                            height="106">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="product-default.html">Apple Laptop</a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">$1,000.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget -->
                                    <div class="widget widget-collapsible widget-products">
                                        <h3 class="widget-title"><span>Top Rated</span><span class="toggle-btn"></span>
                                        </h3>
                                        <div class="widget-body">
                                            <div class="product product-widget">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/shop/12.jpg" alt="Product" width="100"
                                                            height="106">
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
                                                        <img src="assets/images/shop/13.jpg" alt="Product" width="100"
                                                            height="106">
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
                                                        <img src="assets/images/shop/20.jpg" alt="Product" width="100"
                                                            height="106">
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
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/1.jpg"
                                    alt="Vendor" width="930" height="446" style="background-color: #414960;">
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

                        <h2 class="title vendor-product-title mb-4"><a href="#">Products</a></h2>

                        <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/shop/1.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
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
                                            <img src="assets/images/shop/2-1.jpg" alt="Product" width="300"
                                                height="338">
                                            <img src="assets/images/shop/2-2.jpg" alt="Product" width="300"
                                                height="338">
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
                                                            class="countdown-period">Secs</span></span></span></div>
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
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$30.00</ins><del class="old-price">$60.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/shop/3.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
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
                                            <img src="assets/images/shop/4.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(7 reviews)</a>
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
                                            <img src="assets/images/shop/5.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
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
                                            <img src="assets/images/shop/6.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(12 reviews)</a>
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
                                            <img src="assets/images/shop/7-1.jpg" alt="Product" width="300"
                                                height="338">
                                            <img src="assets/images/shop/7-2.jpg" alt="Product" width="300"
                                                height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
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
                                            <img src="assets/images/shop/8.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
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
                                            <img src="assets/images/shop/9.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
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
                                            <img src="assets/images/shop/10.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
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
                                            <img src="assets/images/shop/11-1.jpg" alt="Product" width="300"
                                                height="338">
                                            <img src="assets/images/shop/11-2.jpg" alt="Product" width="300"
                                                height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
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
                                            <img src="assets/images/shop/12.jpg" alt="Product" width="300" height="338">
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
                                            <a href="product-default.html" class="rating-reviews">(9 reviews)</a>
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
                    <!-- End of Main Content -->
                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->

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


@push('first_scripts')
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