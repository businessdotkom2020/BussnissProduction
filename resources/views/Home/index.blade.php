@extends('layouts.app')


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
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/theme_style.css')}}">




@endpush

@section('content')




<main class="main">
    <div class="container-fluid">

        <div class="container pb-2">
            <div class="intro-wrapper mt-4">
                @include('Home.main_slider')

            </div>


            <div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1 icon-box-wrapper appear-animate br-sm mt-6 mb-10 appear-animate"
                data-owl-options="{
            'nav': false,
            'dots': false,
            'loop': true,
            'autoplay': true,
            'autoplayTimeout': 4000,
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
                <div class="icon-box icon-box-side text-dark">
                    <span class="icon-box-icon icon-shipping">
                        <i class="w-icon-truck"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Free Shipping & Returns</h4>
                        <p class="text-default">For all orders over $99</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side text-dark">
                    <span class="icon-box-icon icon-payment">
                        <i class="w-icon-bag"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Secure Payment</h4>
                        <p class="text-default">We ensure secure payment</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side text-dark icon-box-money">
                    <span class="icon-box-icon icon-money">
                        <i class="w-icon-money"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Money Back Guarantee</h4>
                        <p class="text-default">Any back within 30 days</p>
                    </div>
                </div>
                <div class="icon-box icon-box-side text-dark icon-box-chat">
                    <span class="icon-box-icon icon-chat">
                        <i class="w-icon-chat"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title">Customer Support</h4>
                        <p class="text-default">Call or email us 24/7</p>
                    </div>
                </div>
            </div>
            <!-- End of Icon Box Wrapper -->
            <div class="row category-wrapper cols-lg-3 cols-sm-2 appear-animate mb-8 fadeIn appear-animation-visible"
                style="animation-duration: 1.2s; ">
                <div class="category-wrap mb-4">


                    <div class="category category-group-image br-sm">
                        <div class="category-content">
                            <h4 class="category-name"><a href="#">Clothings</a>
                            </h4>
                            <ul class="category-list">
                                <li><a href="#">Knitwears</a></li>
                                <li><a href="#">Jumpers</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Dress &amp; Skirts</a></li>
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <figure class="category-media">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo4/categories/1-1.jpg"
                                    alt="Category" width="190" height="215">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End of Category Wrap -->
                <div class="category-wrap mb-4">
                    <div class="category category-group-image br-sm">
                        <div class="category-content">
                            <h4 class="category-name"><a href="#">Office
                                    Electronics</a></h4>
                            <ul class="category-list">
                                <li><a href="#">Printers</a></li>
                                <li><a href="#">Store &amp; Business</a></li>
                                <li><a href="#">Scanners</a></li>
                                <li><a href="#">Projectors</a></li>
                                <li><a href="#">Phones</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <figure class="category-media">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo4/categories/1-2.jpg"
                                    alt="Category" width="190" height="215">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End of Category Wrap -->
                <div class="category-wrap mb-4">
                    <div class="category category-group-image br-sm">
                        <div class="category-content">
                            <h4 class="category-name"><a href="#">Home &amp; Kitchen</a>
                            </h4>
                            <ul class="category-list">
                                <li><a href="#">Furnitures &amp; Decor</a></li>
                                <li><a href="#">Cookwares</a></li>
                                <li><a href="#">Utensil &amp; Gadgets</a></li>
                                <li><a href="#">Garden Tools</a></li>
                                <li><a href="#">Livingroom</a></li>
                                <li><a href="#">Bedroom</a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <figure class="category-media">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo4/categories/1-3.jpg"
                                    alt="Category" width="190" height="215">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End of Category Wrap -->
                <div class="category-wrap mb-4">
                    <div class="category category-group-image br-sm">
                        <div class="category-content">
                            <h4 class="category-name"><a href="#">Television</a>
                            </h4>
                            <ul class="category-list">
                                <li><a href="#">Smart TV</a></li>
                                <li><a href="#">4K Ultra HD TVs</a></li>
                                <li><a href="#">LED TVs</a></li>
                                <li><a href="#">OLED TVs</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <figure class="category-media">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo4/categories/1-4.jpg"
                                    alt="Category" width="190" height="215">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End of Category Wrap -->
                <div class="category-wrap mb-4">
                    <div class="category category-group-image br-sm">
                        <div class="category-content">
                            <h4 class="category-name"><a href="#">Healthy &amp; Beauty</a>
                            </h4>
                            <ul class="category-list">
                                <li><a href="#">Makeup</a></li>
                                <li><a href="#">Skin Care</a></li>
                                <li><a href="#">Hair Care</a></li>
                                <li><a href="#">Tools &amp; Equipments</a></li>
                                <li><a href="#">Perfumes</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <figure class="category-media">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo4/categories/1-5.jpg"
                                    alt="Category" width="190" height="214">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End of Category Wrap -->
                <div class="category-wrap mb-4">
                    <div class="category category-group-image br-sm">
                        <div class="category-content">
                            <h4 class="category-name"><a href="#">Jewelry &amp; Watch</a>
                            </h4>
                            <ul class="category-list">
                                <li><a href="#">Pendant</a></li>
                                <li><a href="#">Necklace</a></li>
                                <li><a href="#">Watch</a></li>
                                <li><a href="#">Bracelets</a></li>
                                <li><a href="#">Smart Watches</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <figure class="category-media">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo4/categories/1-6.jpg"
                                    alt="Category" width="190" height="214">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End of Category Wrap -->
            </div>

            <div class="owl-carousel owl-theme category-banner-3cols row cols-lg-3 cols-sm-2 cols-1 pt-2 pb-10"
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
                '992': {
                    'items': 3
                }
            }
        }">
                <div class="banner banner-fixed category-banner br-sm">
                    <figure>
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/category/1-1.jpg"
                            alt="Category Banner" width="447" height="230" style="background-color: #cfd1cf;" />
                    </figure>
                    <div class="banner-content y-50">
                        <h3 class="banner-title text-capitalize ls-25 mb-0">For Men's</h3>
                        <div class="banner-price-info text-uppercase text-default ls-25 font-weight-bold">Starting
                            at <span class="text-secondary">$29.00</span></div>
                        <hr class="banner-divider bg-dark">
                        <a href="#" class="btn btn-dark btn-link btn-outline btn-icon-right btn-slide-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of Category Banner -->
                <div class="banner banner-fixed category-banner br-sm">
                    <figure>
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/category/1-2.jpg"
                            alt="Category Banner" width="447" height="230" style="background-color: #333" />
                    </figure>
                    <div class="banner-content text-center x-50 y-50 w-100 pl-2 pr-2">
                        <h5 class="banner-subtitle text-primary text-capitalize ls-25 font-weight-bold">Get 30% Off
                            Your Entire Order!</h5>
                        <h3 class="banner-title text-white text-uppercase ls-25">Black Friday Sale</h3>
                        <p>Use code <strong class="text-uppercase text-white">Blkfri40</strong> at checkout.</p>
                        <a href="#"
                            class="btn btn-primary btn-outline btn-rounded btn-icon-right text-white btn-slide-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of Category Banner -->
                <div class="banner banner-fixed category-banner br-sm">
                    <figure>
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/category/1-3.jpg"
                            alt="Category Banner" width="447" height="230" style="background-color: #e0dddd;" />
                    </figure>
                    <div class="banner-content y-50">
                        <h3 class="banner-title text-capitalize ls-25 mb-0">For Women's</h3>
                        <div class="banner-price-info text-uppercase text-default ls-25 font-weight-bold">From Only
                            <span class="text-secondary">$29.00</span></div>
                        <hr class="banner-divider bg-dark">
                        <a href="#" class="btn btn-dark btn-link btn-outline btn-icon-right btn-slide-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of Category Banner -->
            </div>
            <!-- End of Owl Carousel -->

            <!-- End of Carousel -->

            <div class="notification-wrapper bg-dark br-sm mb-10 appear-animate justify-content-center fadeIn appear-animation-visible"
                style="animation-duration: 1.2s;">
                <i class="w-icon-mobile"></i>
                <p>Download our new app today! Don't Miss our mobile-only offers and shop with Android Play.</p>
                <a href="#"
                    class="btn btn-white btn-outline btn-rounded btn-sm btn-icon-right font-weight-normal text-capitalize">
                    Download<i class="w-icon-long-arrow-down"></i></a>
            </div>
        </div>
        <!-- End of Container -->

        <div class="main-content">
            <div class="title-link-wrapper mb-3">
                <h2 class="title mb-0 pt-2 pb-2">latest products</h2>
                <a href="#" class="mb-0">More Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="product-wrapper row cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/1.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">3D Television</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(3 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/2-1.jpg"
                                    alt="Product" width="300" height="338" />
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/2-2.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-countdown-container">
                                <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                    data-format="DHMS" data-compact="false" data-labels-short="Days, Hours, Mins, Secs">
                                    00:00:00:00</div>
                            </div>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Alarm Clock With Lamp</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(10 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/3.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Apple Laptop</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(5 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/4.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Attachable Charge Alarm</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(7 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/5.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Fashion</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Best Travel Bag</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/6.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Sports</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Black Stunt Motor</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(12 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/7-1.jpg"
                                    alt="Product" width="300" height="338" />
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/7-2.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Fashion</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Blue Sky Trunk</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(9 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/8.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Beauty</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Bodycare Smooth Powder</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/9.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Bright Green IPhone</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/10.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Fashion</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Cavin Fashion Suede Handbag</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(4 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/11-1.jpg"
                                    alt="Product" width="300" height="338" />
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/11-2.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Charming Design Watch</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(10 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/12.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Fashion</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Classic Simple Backpack</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(9 reviews)</a>
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
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/13.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Watches</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Smart Watch</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(9 reviews)</a>
                            </div>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    $90.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/19-1.jpg"
                                    alt="Product" width="300" height="338" />
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/shop/19-2.jpg"
                                    alt="Product" width="300" height="338" />
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="#">Accessories</a>
                            </div>
                            <h3 class="product-name">
                                <a href="#">Handmade Ring</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">(1 reviews)</a>
                            </div>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    $5.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-10 pt-2">
            <div class="row cols-md-2 category-banner-2cols mb-5">
                <div class="banner banner-fixed mb-4">
                    <figure class="br-sm">
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/category/2-1.jpg"
                            alt="Category Banner" width="680" height="220" style="background-color: #384744;" />
                    </figure>
                    <div class="banner-content y-50">
                        <h5 class="banner-subtitle text-uppercase text-white font-weight-bold">Natural Process</h5>
                        <h3 class="banner-title text-capitalize text-white">Cosmetic Makeup<br>Professional</h3>
                        <a href="#" class="btn btn-white btn-link btn-slide-right btn-icon-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="banner banner-fixed mb-4">
                    <figure class="br-sm">
                        <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/category/2-2.jpg"
                            alt="Category Banner" width="680" height="220" style="background-color: #e7e7e7;" />
                    </figure>
                    <div class="banner-content y-50">
                        <h5 class="banner-subtitle text-uppercase font-weight-bold">Trending Now</h5>
                        <h3 class="banner-title text-capitalize">Women’s Lifestyle<br>Collection</h3>
                        <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End of Banner -->
            </div>
            <!-- End of Category Banner 2Cols -->

            <div class="title-link-wrapper mb-3">
                <h2 class="title mb-0 pt-2 pb-2">Apparels &amp; Clothings</h2>
                <a href="#" class="mb-0">More Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row grid banner-product-wrapper mb-6">
                <div class="grid-item col-xl-5col3 col-lg-3 col-sm-8 col-12">
                    <div class="banner banner-fixed br-sm">
                        <figure>
                            <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/banner/1.jpg"
                                alt="Banner" width="820" height="364" style="background-color: #EBEBEB;" />
                        </figure>
                        <div class="banner-content y-50">
                            <h5 class="banner-subtitle text-capitalize font-weight-normal">Special Offers</h5>
                            <h3 class="banner-title text-uppercase">Fashion Sale</h3>
                            <div class="banner-price-info text-dark lh-1 ls-25">Up to <strong
                                    class="text-secondary text-uppercase">40% Off</strong></div>
                            <hr class="banner-divider bg-dark">
                            <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">
                                Start Shopping<i class="w-icon-long-arrow-right mb-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-1.jpg"
                                    alt="Product" width="260" height="291" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Comfortable Blanket</a></h4>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    <ins class="new-price">$30.00 - $36.00</ins>
                                </div>
                                <div class="product-action">
                                    <a href="#"
                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                        To Cart</a>
                                </div>
                            </div>
                            <div class="sold-by">
                                Sold By: <a href="#">Vendor 1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-2.jpg"
                                    alt="Product" width="260" height="291" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Men's T-Shirt</a></h4>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    <ins class="new-price">$25.00 - $26.00</ins>
                                </div>
                                <div class="product-action">
                                    <a href="#"
                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                        To Cart</a>
                                </div>
                            </div>
                            <div class="sold-by">
                                Sold By: <a href="#">Vendor 4</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-3.jpg"
                                    alt="Product" width="260" height="291" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">White Schoolbag</a></h4>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    <ins class="new-price">$56.48</ins>
                                </div>
                                <div class="product-action">
                                    <a href="#"
                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                        To Cart</a>
                                </div>
                            </div>
                            <div class="sold-by">
                                Sold By: <a href="#">Vendor 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-4.jpg"
                                    alt="Product" width="260" height="291" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Chain Handle Umbrella</a></h4>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    <ins class="new-price">$28.98</ins><del class="old-price">$32.62</del>
                                </div>
                                <div class="product-action">
                                    <a href="#"
                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                        To Cart</a>
                                </div>
                            </div>
                            <div class="sold-by">
                                Sold By: <a href="#">Vendor 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-5.jpg"
                                    alt="Product" width="260" height="291" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Men's Suede Belt</a></h4>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    <ins class="new-price">$73.71</ins><del class="old-price">$78.04</del>
                                </div>
                                <div class="product-action">
                                    <a href="#"
                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                        To Cart</a>
                                </div>
                            </div>
                            <div class="sold-by">
                                Sold By: <a href="#">Vendor 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-6.jpg"
                                    alt="Product" width="260" height="291" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Men's Travel Bag</a></h4>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    <ins class="new-price">$23.99</ins><del class="old-price">$25.68</del>
                                </div>
                                <div class="product-action">
                                    <a href="#"
                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                        To Cart</a>
                                </div>
                            </div>
                            <div class="sold-by">
                                Sold By: <a href="#">Vendor 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-7.jpg"
                                    alt="Product" width="260" height="291" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                    title="Add to Compare"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Grey Calotte</a></h4>
                            <div class="product-pa-wrapper">
                                <div class="product-price">
                                    <ins class="new-price">$173.84</ins>
                                </div>
                                <div class="product-action">
                                    <a href="#"
                                        class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add
                                        To Cart</a>
                                </div>
                            </div>
                            <div class="sold-by">
                                Sold By: <a href="#">Vendor 5</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Banner Product Wrapper -->
            <div class="title-link-wrapper mb-3">
                <h2 class="title mb-0 pt-2 pb-2">Top Rated Services</h2>
                <a href="#" class="mb-0">More Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row grid banner-product-wrapper mb-6">
                <div class="grid-item col-xl-5col3 col-lg-3 col-sm-8 col-12">
                    <div class="banner banner-fixed br-sm">
                        <a href="#">

                            <figure>
                                <img src="https://www.palmermoving.com/data/images/palmer_moving_services_Atlas_Van_Op_With_Couple_opt.jpg"
                                    alt="Banner" width="820" height="364"
                                    style="background-color: #EBEBEB;max-height: 350px;" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.aircargonews.net/wp-content/uploads/2019/05/DHL-EHANG.jpg"
                                    alt="Product" width="260" height="291" style="min-height: 280px;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>

                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Comfortable Blanket</a></h4>

                            <div class="sold-by">
                                Provided from : <a href="#">Vendor 1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://i0.wp.com/agslogistics.org/wp-content/uploads/2019/07/Custom-Clearance.jpg?fit=900%2C600&ssl=1"
                                    alt="Product" width="260" height="291" style="min-height: 280px;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>

                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Men's T-Shirt</a></h4>

                            <div class="sold-by">
                                Provided from : <a href="#">Vendor 4</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://cdn.mosoah.com/wp-content/uploads/2019/07/30124813/%D9%85%D9%83%D8%A7%D8%AA%D8%A8-%D8%A7%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A7%D8%AA-%D9%87%D9%86%D8%AF%D8%B3%D9%8A%D8%A9-%D9%81%D9%8A-%D8%A7%D9%84%D8%B4%D8%A7%D8%B1%D9%82%D8%A9.jpg"
                                    alt="Product" width="260" height="291" style="min-height: 280px;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>

                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">White Schoolbag</a></h4>

                            <div class="sold-by">
                                Provided from : <a href="#">Vendor 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://www.traveldailynews.com/assets/thumbnails/09/092058bdb76d7a7607730c0351c8129c.jpg"
                                    alt="Product" width="260" height="291" style="min-height: 280px;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>

                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Chain Handle Umbrella</a></h4>

                            <div class="sold-by">
                                Provided from : <a href="#">Vendor 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://us.123rf.com/450wm/wavebreakmediamicro/wavebreakmediamicro1502/wavebreakmediamicro150202274/36349715-mechanic-using-tablet-to-fix-car-at-the-repair-garage.jpg?ver=6"
                                    alt="Product" width="260" height="291" style="min-height: 280px;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>


                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Men's Suede Belt</a></h4>

                            <div class="sold-by">
                                Provided from : <a href="#">Vendor 2</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://businesspartnermagazine.com/wp-content/uploads/2020/11/How-often-are-electricians-injured-on-the-job_.jpg"
                                    alt="Product" width="260" height="291" style="min-height: 280px;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>

                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Grey Calotte</a></h4>

                            <div class="sold-by">
                                Provided from : <a href="#">Vendor 5</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6">
                    <div class="product product-simple text-center">
                        <figure class="product-media">
                            <a href="#">
                                <img src="https://scx2.b-cdn.net/gfx/news/hires/2020/doctor.jpg" alt="Product"
                                    width="260" height="291" style="min-height: 280px;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                    title="Add to wishlist"></a>

                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                    View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="#">Men's Travel Bag</a></h4>

                            <div class="sold-by">
                                Provided from : <a href="#">Vendor 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Banner Product Wrapper -->




            <div class="banner banner-shoes br-sm mb-9" style="background-image: url(assets/images/demos/demo8/banner/3.jpg);
            background-color: #36332C;">
                <div class="banner-content d-block d-lg-flex align-items-center">
                    <div class="content-left mr-auto mb-6 mb-lg-0 align-items-center">
                        <div class="banner-price-info text-secondary text-uppercase font-weight-bolder ls-25">
                            40<sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-10">Off</sub>
                        </div>
                        <hr class="banner-divider">
                        <h3 class="banner-title font-weight-normal text-white mb-0 ls-25">
                            Summer Season's Sale<br><strong>For Men's Sneakers</strong>
                        </h3>
                    </div>
                    <a href="#" class="content-right btn btn-white btn-outline btn-rounded btn-icon-right">
                        Discover Now<i class="w-icon-long-arrow-right"></i>
                    </a>
                </div>
                <figure class="image-shoes skrollable">
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/banner/shoes.png"
                        alt="Shoes" data-bottom-top="transform: translateY(2vh);"
                        data-top-bottom="transform: translateY(-2vh);">
                </figure>
            </div>
            <!-- End of Banner Shoes -->

            <div class="title-link-wrapper mb-3">
                <h2 class="title mb-0 pt-2 pb-2">Top Rated Suppliers</h2>
                <a href="#" class="mb-0">More Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row cols-lg-4 cols-md-2 cols-sm-2 cols-1 mt-4">
                <div class="store-wrap mb-4">
                    <div class="store store-grid">
                        <div class="store-header">
                            <figure class="store-banner">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/1.jpg"
                                    alt="Vendor" width="400" height="194" style="background-color: #40475E">
                            </figure>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <h4 class="store-title">
                                <a href="#">Vendor 1</a>
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
                                    <a href="tel:1234567890"><i class="w-icon-phone"></i>1234567890</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Store Content -->
                        <div class="store-footer">
                            <figure class="seller-brand">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/1.jpg"
                                    alt="Brand" width="80" height="80">
                            </figure>
                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                Visit Store<i class="w-icon-long-arrow-right"></i></a>
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
                                    alt="Vendor" width="400" height="194" style="background-color: #6C6C6C">
                            </figure>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <h4 class="store-title">
                                <a href="#">Vendor 2</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <div class="store-address">
                                London, United Kingdom (UK)
                            </div>
                            <ul class="seller-info-list list-style-none">
                                <li class="store-phone">
                                    <a href="tel:123456789"><i class="w-icon-phone"></i>123456789</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Store Content -->
                        <div class="store-footer">
                            <figure class="seller-brand">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/2.jpg"
                                    alt="Brand" width="80" height="80">
                            </figure>
                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                Store<i class="w-icon-long-arrow-right"></i></a>
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
                                    alt="Vendor" width="400" height="194" style="background-color: #A891BF">
                            </figure>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <h4 class="store-title">
                                <a href="#">Vendor 3</a>
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
                                    <a href="tel:1234567890"><i class="w-icon-phone"></i>1234567890</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Store Content -->
                        <div class="store-footer">
                            <figure class="seller-brand">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/3.jpg"
                                    alt="Brand" width="80" height="80">
                            </figure>
                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                Store<i class="w-icon-long-arrow-right"></i></a>
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
                                    alt="Vendor" width="400" height="194" style="background-color: #28292D">
                            </figure>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <h4 class="store-title">
                                <a href="#">Vendor 4</a>
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
                                    <a href="tel:123456789"><i class="w-icon-phone"></i>123456789</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Store Content -->
                        <div class="store-footer">
                            <figure class="seller-brand">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/4.jpg"
                                    alt="Brand" width="80" height="80">
                            </figure>
                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                Store<i class="w-icon-long-arrow-right"></i></a>
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
                                    alt="Vendor" width="400" height="194" style="background-color: #7E7D7B">
                            </figure>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <h4 class="store-title">
                                <a href="#">Vendor 5</a>
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
                                    <a href="tel:1234567890"><i class="w-icon-phone"></i>1234567890</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Store Content -->
                        <div class="store-footer">
                            <figure class="seller-brand">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/5.jpg"
                                    alt="Brand" width="80" height="80">
                            </figure>
                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                Store<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End of Store Footer -->
                    </div>
                    <!-- End of Store -->
                </div>
                <div class="store-wrap mb-4">
                    <div class="store store-grid">
                        <div class="store-header">
                            <figure class="store-banner">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/dokan/6.jpg"
                                    alt="Vendor" width="400" height="194" style="background-color: #5B5B62">
                            </figure>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <h4 class="store-title">
                                <a href="#">Vendor 6</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top">5.00</span>
                                </div>
                            </div>
                            <div class="store-address">
                                Germany
                            </div>
                            <ul class="seller-info-list list-style-none">
                                <li class="store-phone">
                                    <a href="tel:123456789"><i class="w-icon-phone"></i>123456789</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Store Content -->
                        <div class="store-footer">
                            <figure class="seller-brand">
                                <img src="https://portotheme.com/html/wolmart/assets/images/vendor/brand/6.jpg"
                                    alt="Brand" width="80" height="80">
                            </figure>
                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">Visit
                                Store<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End of Store Footer -->
                    </div>
                    <!-- End of Store -->
                </div>
            </div>


            <h2 class="title text-left mb-5 appear-animate">Our Clients</h2>
            <div class="owl-carousel owl-theme row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2 brands-wrapper br-sm mb-9 appear-animate"
                data-owl-options="{
            'nav': false,
            'dots': false,
            'autoplay': true,
            'autoplayTimeout': 4000,
            'loop': true,
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
                    'items': 6
                },
                '1200': {
                    'items': 8
                }
            }
        }">
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/1.png" alt="Brand"
                        width="310" height="180" />
                </figure>
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/2.png" alt="Brand"
                        width="310" height="180" />
                </figure>
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/3.png" alt="Brand"
                        width="310" height="180" />
                </figure>
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/4.png" alt="Brand"
                        width="310" height="180" />
                </figure>
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/5.png" alt="Brand"
                        width="310" height="180" />
                </figure>
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/6.png" alt="Brand"
                        width="310" height="180" />
                </figure>
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/7.png" alt="Brand"
                        width="310" height="180" />
                </figure>
                <figure>
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/brand/8.png" alt="Brand"
                        width="310" height="180" />
                </figure>
            </div>
            <!-- End of Brands Wrapper -->

            <div class="title-link-wrapper mb-4 appear-animate">
                <h2 class="title mb-0 ls-normal appear-animate pb-1">Recently Viewed</h2>
                <a href="#" class="font-weight-bold ls-25">
                    More Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="owl-carousel owl-theme owl-shadow-carousel appear-animate row cols-xl-8 cols-lg-6 cols-md-4 cols-2 mb-10 pb-2"
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
                        'dots': false
                    }
                }
            }">
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/5-1.jpg"
                                    alt="Category image" width="213" height="238" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Charge &amp; Alarm Machine</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/5-5.jpg"
                                    alt="Category image" width="213" height="238" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Headkerchief</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/5-3.jpg"
                                    alt="Category image" width="213" height="238" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Gold Watch</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/3-6.jpg"
                                    alt="Category image" width="260" height="291" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Men's Travel Bag</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/2-2.jpg"
                                    alt="Category image" width="138" height="155" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Top Rating Helmet</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/4-7.jpg"
                                    alt="Category image" width="260" height="291" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Organic Wine</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/5-4.jpg"
                                    alt="Category image" width="213" height="238" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Mini Wireless Earphone</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="product-defa#">
                                <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo8/product/4-3.jpg"
                                    alt="Category image" width="260" height="291" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            <a href="#">Excellent Liverte</a>
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
            </div>
            <!-- End of Reviewed Producs -->
        </div>
        <!-- End of Container -->
    </div>

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