@extends('layouts.main')

@php
$menu = false ;
@endphp


@push('styles')
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/Linearicons/Linearicons/Font/demo-files/demo.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/owl-carousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/owl-carousel/assets/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/slick/slick/slick.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/nouislider/nouislider.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">



<link rel="stylesheet" href="{{ asset('/web/css/supplier_page.css')}}">

@endpush

@section('content')

<main class="main-content col-xs-12">

    <div class="ps-page--single">

        <div class="ps-vendor-store">
            <div class="container">
                <div class="ps-section__container">
                    <div class="ps-section__left">
                        <div class="ps-block--vendor">
                            <div class="ps-block__thumbnail"><img
                                    src="http://nouthemes.net/html/martfury/img/vendor/vendor-store.jpg" alt=""></div>
                            <div class="ps-block__container">
                                <div class="ps-block__header">
                                    <h4> {{ $supplier->name }} </h4>
                                    <p>
                                        @php $rating = $supplier->average_rating ; @endphp
                                        @foreach(range(1,5) as $i)
                                        @if($rating >0)
                                        @if($rating > 0.5)
                                        <i class="fa fa-star active"></i>
                                        @elseif($rating < 0.5 && $rating> 0)
                                            <i class="fas fa-star-half"></i>
                                            @endif
                                            @else
                                            <i class="fa fa-star"></i>
                                            @endif
                                            @php $rating--; @endphp

                                            @endforeach
                                    </p>
                                    <p><strong>85% Positive</strong> (562 rating)</p>
                                </div><span class="ps-block__divider"></span>
                                <div class="ps-block__content">
                                    <p><strong>Digiworld US</strong>, New York’s no.1 online retailer was established in
                                        May 2012 with the aim and vision to become the one-stop shop for retail in New
                                        York with implementation of best practices both online</p><span
                                        class="ps-block__divider"></span>
                                    <p><strong>Address</strong> 325 Orchard Str, New York, NY 10002</p>
                                    <figure>
                                        <figcaption>Foloow us on social</figcaption>
                                        <ul class="ps-list--social-color">
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="feed" href="#"><i class="fa fa-feed"></i></a></li>
                                        </ul>
                                    </figure>
                                </div>
                                <div class="ps-block__footer">
                                    <p>Call us directly<strong>(+053) 77-637-3300</strong></p>
                                    <p>or Or if you have any question</p><a class="ps-btn ps-btn--fullwidth"
                                        href="#">Contact Seller</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__right">
                        <div class="ps-block--vendor-filter">
                            <div class="ps-block__left">
                                <ul>
                                    <li class="active"><a href="#">Products</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">About</a></li>
                                </ul>
                            </div>
                            <div class="ps-block__right">
                                <form class="ps-form--search" action="http://nouthemes.net/html/martfury/index.html"
                                    method="get">
                                    <input class="form-control" type="text" placeholder="Search in this shop">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="ps-vendor-best-seller">
                            <div class="ps-section__header">
                                <h3>Best Seller items</h3>
                                <div class="ps-section__nav"><a class="ps-carousel__prev" href="#vendor-bestseller"><i
                                            class="icon-chevron-left"></i></a><a class="ps-carousel__next"
                                        href="#vendor-bestseller"><i class="icon-chevron-right"></i></a></div>
                            </div>
                            <div class="ps-section__content">
                                <div class="owl-slider" id="vendor-bestseller" data-owl-auto="true" data-owl-loop="true"
                                    data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false"
                                    data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="3"
                                    data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/1.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#product-quickview"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#"></a>
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Apple iPhone X 256GB T-Mobile –
                                                    Black</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title"
                                                    href="product-default.html">Apple iPhone X 256GB T-Mobile –
                                                    Black</a>
                                                <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/2.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#product-quickview"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global
                                                Office</a>
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Apple iPhone 7 Plus 128 GB – Red
                                                    Color</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title"
                                                    href="product-default.html">Apple iPhone 7 Plus 128 GB – Red
                                                    Color</a>
                                                <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/3.jpg" alt=""></a>
                                            <div class="ps-product__badge">21%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#product-quickview"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global
                                                Office</a>
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Apple MacBook Air Retina 13.3-Inch
                                                    Laptop</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$1020.99 <del>$1120.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title"
                                                    href="product-default.html">Apple MacBook Air Retina 13.3-Inch
                                                    Laptop</a>
                                                <p class="ps-product__price sale">$1020.99 <del>$1120.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/4.jpg" alt=""></a>
                                            <div class="ps-product__badge">18%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#product-quickview"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global
                                                Office</a>
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gear VR Virtual Reality
                                                    Headset</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$64.99 <del>$80.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gear VR Virtual Reality
                                                    Headset</a>
                                                <p class="ps-product__price sale">$64.99 <del>$80.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/5.jpg" alt=""></a>
                                            <div class="ps-product__badge">18%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#product-quickview"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global
                                                Office</a>
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Bose Bluetooth &amp; Wireless Speaker
                                                    2.0 – Blue</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title"
                                                    href="product-default.html">Bose Bluetooth &amp; Wireless Speaker
                                                    2.0 – Blue</a>
                                                <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/6.jpg" alt=""></a>
                                            <div class="ps-product__badge">17%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#product-quickview"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global
                                                Office</a>
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver
                                                    Version</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver
                                                    Version</a>
                                                <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/7.jpg" alt=""></a>
                                            <div class="ps-product__badge">17%</div>
                                            <ul class="ps-product__actions">
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#product-quickview"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global
                                                Office</a>
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver
                                                    Version</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver
                                                    Version</a>
                                                <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-shopping ps-tab-root">
                            <div class="ps-shopping__header">
                                <p><strong> 36</strong> Products found</p>
                                <div class="ps-shopping__actions">
                                    <select class="ps-select" data-placeholder="Sort Items">
                                        <option>Sort by latest</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                    <div class="ps-shopping__view">
                                        <p>View</p>
                                        <ul class="ps-tab-list">
                                            <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                            <li><a href="#tab-2"><i class="icon-list4"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                            src="img/products/technology/1.jpg" alt=""></a>
                                                    <div class="ps-product__badge">11%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View"
                                                                data-toggle="modal" data-target="#product-quickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor"
                                                        href="#"></a>
                                                    <div class="ps-product__content"><a class="ps-product__title"
                                                            href="product-default.html">Apple iPhone X 256GB T-Mobile –
                                                            Black</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$1389.99 <del>$1893.00</del>
                                                        </p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title"
                                                            href="product-default.html">Apple iPhone X 256GB T-Mobile –
                                                            Black</a>
                                                        <p class="ps-product__price sale">$1389.99 <del>$1893.00</del>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                            src="img/products/technology/2.jpg" alt=""></a>
                                                    <div class="ps-product__badge">11%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View"
                                                                data-toggle="modal" data-target="#product-quickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor"
                                                        href="#">Global Office</a>
                                                    <div class="ps-product__content"><a class="ps-product__title"
                                                            href="product-default.html">Apple iPhone 7 Plus 128 GB – Red
                                                            Color</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title"
                                                            href="product-default.html">Apple iPhone 7 Plus 128 GB – Red
                                                            Color</a>
                                                        <p class="ps-product__price sale">$820.99 <del>$893.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                            src="img/products/technology/3.jpg" alt=""></a>
                                                    <div class="ps-product__badge">21%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View"
                                                                data-toggle="modal" data-target="#product-quickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor"
                                                        href="#">Global Office</a>
                                                    <div class="ps-product__content"><a class="ps-product__title"
                                                            href="product-default.html">Apple MacBook Air Retina
                                                            13.3-Inch Laptop</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$1020.99 <del>$1120.00</del>
                                                        </p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title"
                                                            href="product-default.html">Apple MacBook Air Retina
                                                            13.3-Inch Laptop</a>
                                                        <p class="ps-product__price sale">$1020.99 <del>$1120.00</del>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                            src="img/products/technology/4.jpg" alt=""></a>
                                                    <div class="ps-product__badge">18%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View"
                                                                data-toggle="modal" data-target="#product-quickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor"
                                                        href="#">Global Office</a>
                                                    <div class="ps-product__content"><a class="ps-product__title"
                                                            href="product-default.html">Samsung Gear VR Virtual Reality
                                                            Headset</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$64.99 <del>$80.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title"
                                                            href="product-default.html">Samsung Gear VR Virtual Reality
                                                            Headset</a>
                                                        <p class="ps-product__price sale">$64.99 <del>$80.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                            src="img/products/technology/5.jpg" alt=""></a>
                                                    <div class="ps-product__badge">18%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View"
                                                                data-toggle="modal" data-target="#product-quickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor"
                                                        href="#">Global Office</a>
                                                    <div class="ps-product__content"><a class="ps-product__title"
                                                            href="product-default.html">Bose Bluetooth &amp; Wireless
                                                            Speaker 2.0 – Blue</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title"
                                                            href="product-default.html">Bose Bluetooth &amp; Wireless
                                                            Speaker 2.0 – Blue</a>
                                                        <p class="ps-product__price sale">$42.99 <del>$52.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                            src="img/products/technology/6.jpg" alt=""></a>
                                                    <div class="ps-product__badge">17%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View"
                                                                data-toggle="modal" data-target="#product-quickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor"
                                                        href="#">Global Office</a>
                                                    <div class="ps-product__content"><a class="ps-product__title"
                                                            href="product-default.html">Samsung Gallaxy A8 8GB Ram –
                                                            Sliver Version</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title"
                                                            href="product-default.html">Samsung Gallaxy A8 8GB Ram –
                                                            Sliver Version</a>
                                                        <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                            src="img/products/technology/7.jpg" alt=""></a>
                                                    <div class="ps-product__badge">17%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View"
                                                                data-toggle="modal" data-target="#product-quickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Add to Whishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor"
                                                        href="#">Global Office</a>
                                                    <div class="ps-product__content"><a class="ps-product__title"
                                                            href="product-default.html">Samsung Gallaxy A8 8GB Ram –
                                                            Sliver Version</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title"
                                                            href="product-default.html">Samsung Gallaxy A8 8GB Ram –
                                                            Sliver Version</a>
                                                        <p class="ps-product__price sale">$542.99 <del>$592.00</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-pagination">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-2">
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/1.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Apple iPhone X 256GB T-Mobile –
                                                    Black</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#"></a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$1389.99 <del>$1893.00</del></p><a
                                                    class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/2.jpg" alt=""></a>
                                            <div class="ps-product__badge">11%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Apple iPhone 7 Plus 128 GB – Red
                                                    Color</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$820.99 <del>$893.00</del></p><a
                                                    class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/3.jpg" alt=""></a>
                                            <div class="ps-product__badge">21%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Apple MacBook Air Retina 13.3-Inch
                                                    Laptop</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$1020.99 <del>$1120.00</del></p><a
                                                    class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/4.jpg" alt=""></a>
                                            <div class="ps-product__badge">18%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gear VR Virtual Reality
                                                    Headset</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$64.99 <del>$80.00</del></p><a
                                                    class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/5.jpg" alt=""></a>
                                            <div class="ps-product__badge">18%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Bose Bluetooth &amp; Wireless Speaker
                                                    2.0 – Blue</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$42.99 <del>$52.00</del></p><a
                                                    class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/6.jpg" alt=""></a>
                                            <div class="ps-product__badge">17%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver
                                                    Version</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$542.99 <del>$592.00</del></p><a
                                                    class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img
                                                    src="img/products/technology/7.jpg" alt=""></a>
                                            <div class="ps-product__badge">17%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title"
                                                    href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver
                                                    Version</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$542.99 <del>$592.00</del></p><a
                                                    class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-pagination">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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





<script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('plugins/masonry.pkgd.min.js')}}"></script>
<script src="{{ asset('plugins/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('plugins/jquery.matchHeight-min.js')}}"></script>
<script src="{{ asset('plugins/slick/slick/slick.min.js')}}"></script>

<script src="{{ asset('plugins/slick-animation.min.js')}}"></script>
<script src="{{ asset('plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
<script src="{{ asset('plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
<script src="{{ asset('plugins/gmap3.min.js')}}"></script>
<!-- custom scripts-->
<script src="{{ asset('plugins/supplier.js')}}"></script>
@endpush