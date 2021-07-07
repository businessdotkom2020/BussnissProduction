@extends('layouts.main')

@php
$menu = false ;
@endphp

@section('content')


<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
    <div class="container">
        <h3>{{$product->getTranslatedAttribute('name',\App::getLocale())}}</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>
                <a
                    href="{{url('category/'.$product->category_id)}}">{{$product->category->getTranslatedAttribute('name',\App::getLocale())}}</a>
            </li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="product-wrap col-xs-12">
        <div class="container">
            <div class="product-top col-xs-12">
                <div class="single-prod-cat col-md-3 col-xs-12">
                    <div class="single-prod-ul categories-block">
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="#">اكسسوارات سيارات</a>
                                <ul class="inner">
                                    <li><a href="#">اكسسوارات سيارات<span>(12)</span></a></li>
                                    <li><a href="#">قطع غيار سيارات<span>(12)</span></a></li>
                                    <li><a href="#">صيانة و ديكور سيارات<span>(12)</span></a>
                                    </li>
                                    <li><a href="#">معدات أمان<span>(12)</span></a></li>
                                    <li><a href="#">كماليات موتوسيكلات<span>(12)</span></a></li>
                                    <li><a href="#">قطع غيار أخري<span>(12)</span></a></li>
                                    <li><a href="#">الرياض<span>(12)</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="category-toggle22" href="#">قطع غيار سيارات <span>(12)</span></a>
                            </li>
                            <li>
                                <a class="category-toggle22" href="#">قطع غيار سيارات <span>(12)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-prod-ad">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/02/shop-sidebar-ad-banner.jpg"
                            alt="img">
                    </div>
                </div>
                <div class="prod-img col-md-4 col-xs-12">
                    <div class="all">
                        <div class="ribbon">
                            <span>@lang('general.new')</span>
                        </div>
                        <div class="offer-badge">
                            <span>{{number_format((($product->sale_price/$product->price) * 100) ,2) }} %</span>
                        </div>
                        <div class="slider">
                            <div class="owl-carousel owl-theme one">
                                @foreach(json_decode($product->images) as $img)
                                <div class="item-box">
                                    <a href="{{ url('storage/'.$img)}}" data-fancybox="images" data-caption="">
                                        <img src="{{ url('storage/'.$img)}}" alt="">
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="slider-two">
                            <div class="owl-carousel owl-theme two">
                                @foreach(json_decode($product->images) as $img)

                                <div class="item {{$loop->first ? 'active' : '' }}">

                                    <a href="{{ url('storage/'.$img)}}" data-fancybox="images" data-caption="">
                                        <img src="{{ url('storage/'.$img)}}" alt="">
                                    </a>
                                </div>
                                @endforeach


                            </div>
                            <div class="left-t nonl-t">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="right-t">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prod-data col-md-5 col-xs-12">
                    <div class="name">
                        <h3>{{$product->getTranslatedAttribute('name',\App::getLocale())}}</h3>
                        <div class="prod-extra">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" id="fav-{{$product->id}}"
                                        class="fav-{{$product->id}} fav-pro {{$product->isFavorited() ? 'fav-active' : null  }}"
                                        onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="op-social">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                </li>
                            </ul>




                        </div>
                    </div>
                    <div class="social shares">
                        <a href="#"
                            onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;"
                            class="fb">
                            <i class="fa fa-facebook"></i>
                            share with facebook
                        </a>
                        <a href="#"
                            onclick="window.open('https://twitter.com/intent/tweet?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;"
                            class="tw">
                            <i class="fa fa-twitter"></i>
                            share with twitter
                        </a>
                        <a href="#"
                            onclick="window.open('https://www.linkedin.com/shareArticle?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;"
                            class="linkedin">
                            <i class="fa fa-linkedin"></i>
                            share with linkedin
                        </a>
                    </div>
                    <div class="categories">
                        <a
                            href="{{url('category/'.$product->category_id)}}">{{$product->category->getTranslatedAttribute('name',\App::getLocale())}}</a>,


                    </div>
                    <div class="rating">
                        <span>
                            @php $rating = $product->average_rating ; @endphp
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
                        </span>
                    </div>
                    <div class="author">
                        <div class="au-img"
                            style="background-image: url({{ url('storage/'.$product->owner->avatar) }})"></div>
                        <div class="au-data">
                            <a href="{{url('supplier/'.$product->id)}}">{{$product->owner->name}}</a>
                        </div>
                    </div>
                    <div class="desc">
                        <p>{{$product->getTranslatedAttribute('description',\App::getLocale())}}</p>
                    </div>
                    <div class="pro-wishlist-compare">
                        <ul class="list-inline">
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Wishlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-exchange"></i>
                                    <span>Compare</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="pro-ul-dis">
                        <ul>
                            <li>Wireless</li>
                            <li>Motion Sensing</li>
                            <li>Compatible with Several Consoles/Games</li>
                            <li>Enough Action Buttons</li>
                            <li>Ergonomic</li>
                        </ul>
                    </div>
                    <div class="price">
                        @if($product->sale_price)
                        <span>{{$product->sale_price}} l.e</span>
                        @endif
                        <span class="{{$product->sale_price ? 'old' : ''}}">{{$product->price}} l.e</span>
                    </div>
                    <div class="controls">
                        <a class="btn" href="{{url('supplier/'.$product->user_id)}}"
                            target="_blank">@lang('general.contact_supplier')</a>
                        @if(Auth::check())
                        <a href="#" class="btn btn-review" data-toggle="modal"
                            data-target="#review-pop">@lang('general.add_review')</a>
                        @endif
                    </div>
                </div>


            </div>

            <div class="product-middle-con col-xs-12">
                <div class="product-middle-side col-md-3 col-xs-12">
                    <div class="g-head">
                        <h3>Latest Products</h3>
                    </div>
                    <div class="product-middle-sideb">
                        <ul class="product_list_widget">
                            <li>
                                <a href="#">
                                    <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                                        alt="img">
                                </a>
                                <div class="product_list-info product-grid">
                                    <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                    <div class="price">
                                        <span>1700</span>
                                        1400
                                    </div>
                                    <div class="c-data">
                                        <p>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                                        alt="img">
                                </a>
                                <div class="product_list-info product-grid">
                                    <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                    <div class="price">
                                        <span>1700</span>
                                        1400
                                    </div>
                                    <div class="c-data">
                                        <p>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                                        alt="img">
                                </a>
                                <div class="product_list-info product-grid">
                                    <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                    <div class="price">
                                        <span>1700</span>
                                        1400
                                    </div>
                                    <div class="c-data">
                                        <p>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                                        alt="img">
                                </a>
                                <div class="product_list-info product-grid">
                                    <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                    <div class="price">
                                        <span>1700</span>
                                        1400
                                    </div>
                                    <div class="c-data">
                                        <p>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                                        alt="img">
                                </a>
                                <div class="product_list-info product-grid">
                                    <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                    <div class="price">
                                        <span>1700</span>
                                        1400
                                    </div>
                                    <div class="c-data">
                                        <p>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                                        alt="img">
                                </a>
                                <div class="product_list-info product-grid">
                                    <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                    <div class="price">
                                        <span>1700</span>
                                        1400
                                    </div>
                                    <div class="c-data">
                                        <p>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="product-middle col-md-9 col-xs-12">
                    {{-- <div class="product-middle-tabs-con">
                        <ul class="nav-tabs text-center">

                            <li class="active">
                                <a href="#" data-toggle="tab"
                                    data-target="#option_values">@lang('general.specifications')</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="option_values">


                                <div class="product-price-p table-responsive">
                                    <table class="table table-bordered">

                                        <thead>
                                            <tr>
                                                <th>العنوان</th>
                                                <th>القيمة</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($product->options as $option)
                                            <tr>

                                                <td>{{  $option->attribute ? $option->attribute->getTranslatedAttribute('name',\App::getLocale()) : null }}
                    </td>
                    <td>{{ $option->value ? $option->value->getTranslatedAttribute('value',\App::getLocale()) : null }}
                    </td>


                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div> --}}
    <div class="product-middle col-xs-12">
        <ul class="nav-tabs">
            <li class="active">
                <a href="#" data-toggle="tab" data-target="#t0">Description</a>
            </li>
            <li class="">
                <a href="#" data-toggle="tab" data-target="#t1">Specification</a>
            </li>
            <li class="">
                <a href="#" data-toggle="tab" data-target="#t2">@lang('general.pricing_plans')</a>
            </li>

            <li>
                <a href="#" data-toggle="tab" data-target="#t3">@lang('general.reviews')</a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="t0">
                <div class="pro-description">
                    <p>
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/overview_hero_title_2x-1024x346.png"
                            alt="">
                    </p>
                    <p>
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/overview_hero_2x-e1459776153284-1024x430.jpg"
                            alt="">
                    </p>
                    <p>
                        A groundbreaking Retina display. Powerful dual-core and quad-core Intel
                        processors. Fast flash storage. High-performance graphics. Great built-in apps.
                        And now in the 13-inch model, a revolutionary new Force Touch trackpad and even
                        longer battery life.1 Whatever you can imagine, MacBook Pro with Retina display
                        gives you the power to create.
                    </p>
                    <p>
                        The design of MacBook Pro packs a lot of power into not a lot of space. Because
                        we believe that high performance shouldn’t come at the expense of portability.
                        And despite being so compact, the new 13-inch and 15-inch MacBook Pro with
                        Retina display models now deliver up to 10 hours and nine hours of battery life,
                        respectively — an hour more than the previous models.
                    </p>
                    <p>
                        <img src="https://demo.madrasthemes.com/demo-2/wp-content/uploads/sites/7/2016/03/hero_large_2x.jpg"
                            alt="">
                    </p>
                    <p>
                        With Multi-Touch in OS X, you can use realistic gestures like swiping or
                        pinching to switch between apps, navigate your content and get the most out of
                        your desktop space.


                    </p>
                    <p>
                        The new Force Touch trackpad takes all the capabilities of Multi-Touch and adds
                        force sensors that detect subtle differences in the amount of downward pressure
                        you apply. This lets you have a deeper connection to your content, bringing more
                        functionality to your fingertip. It also introduces haptic feedback to MacBook
                        Pro — allowing you to not just see what’s happening on the screen, but to feel
                        it.


                    </p>
                </div>
            </div>

            <div class="tab-pane fade" id="t1">

                <div class="product-specification table-responsive">
                    <h3>Technical Specifications</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Brand</td>
                                <td>Apple</td>
                            </tr>
                            <tr>
                                <td>Item Height</td>
                                <td>18 Millimeters</td>
                            </tr>
                            <tr>
                                <td>Item Width</td>
                                <td>31.4 Centimeters</td>
                            </tr>
                            <tr>
                                <td>Screen Size</td>
                                <td>13 Inches</td>
                            </tr>
                            <tr class="size-weight">
                                <td>Item Weight</td>
                                <td>1.6 Kg</td>
                            </tr>
                            <tr class="size-weight">
                                <td>Product Dimensions</td>
                                <td>21.9 x 31.4 x 1.8 cm</td>
                            </tr>
                            <tr class="item-model-number">
                                <td>Item model number</td>
                                <td>MF841HN/A</td>
                            </tr>
                            <tr>
                                <td>Processor Brand</td>
                                <td>Intel</td>
                            </tr>
                            <tr>
                                <td>Processor Type</td>
                                <td>Core i5</td>
                            </tr>
                            <tr>
                                <td>Processor Speed</td>
                                <td>2.9 GHz</td>
                            </tr>
                            <tr>
                                <td>RAM Size</td>
                                <td>8 GB</td>
                            </tr>
                            <tr>
                                <td>Hard Drive Size</td>
                                <td>512 GB</td>
                            </tr>
                            <tr>
                                <td>Hard Disk Technology</td>
                                <td>Solid State Drive</td>
                            </tr>
                            <tr>
                                <td>Graphics Coprocessor</td>
                                <td>Intel Integrated Graphics</td>
                            </tr>
                            <tr>
                                <td>Graphics Card Description</td>
                                <td>Integrated Graphics Card</td>
                            </tr>
                            <tr>
                                <td>Hardware Platform</td>
                                <td>Mac</td>
                            </tr>
                            <tr>
                                <td>Operating System</td>
                                <td>Mac OS</td>
                            </tr>
                            <tr>
                                <td>Average Battery Life (in hours)</td>
                                <td>9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="t2">

                <div class="product-price-p table-responsive">
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>من</th>
                                <th>الي</th>
                                <th>السعر</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($product->prices as $price)
                            <tr>

                                <td>@lang('general.from') {{$price->quantity_from}} @lang('general.to')
                                </td>
                                <td>{{$price->quantity_to}}</td>
                                <td> <span>{{$price->price}} l.e</span></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="t3">
                <div class=" review-tab row">
                    <div class="col-md-5 col-xs-12">
                        <div class="total-rev">
                            <h3>Based on 0 reviews</h3>
                            <h2>0.0 <span>overall</span></h2>
                            <div class="progress-con">
                                <div class="progres-info1">
                                    <h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progres-info2">
                                    <h4>100%</h4>
                                </div>
                            </div>
                            <div class="progress-con">
                                <div class="progres-info1">
                                    <h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progres-info2">
                                    <h4>60%</h4>
                                </div>
                            </div>
                            <div class="progress-con">
                                <div class="progres-info1">
                                    <h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progres-info2">
                                    <h4>30%</h4>
                                </div>
                            </div>
                            <div class="progress-con">
                                <div class="progres-info1">
                                    <h4>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progres-info2">
                                    <h4>10%</h4>
                                </div>
                            </div>
                            <div class="progress-con">
                                <div class="progres-info1">
                                    <h4>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progres-info2">
                                    <h4>0%</h4>
                                </div>
                            </div>





                        </div>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="req-form login-ppage">
                            <h3>Be the first to review “Game Console Controller + USB 3.0 Cable”</h3>
                            <form action="" method="">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-xs-12">Your Rating</label>
                                    <div class="rate-stars col-md-9 col-xs-12">
                                        <div class="stars">
                                            <input value="1" class="star star-5" id="star-5" type="radio" required
                                                name="rating" />
                                            <label class="star star-5" for="star-5"></label>
                                            <input value="2" class="star star-4" id="star-4" type="radio"
                                                name="rating" />
                                            <label class="star star-4" for="star-4"></label>
                                            <input value="3" class="star star-3" id="star-3" type="radio"
                                                name="rating" />
                                            <label class="star star-3" for="star-3"></label>
                                            <input value="4" class="star star-2" id="star-2" type="radio"
                                                name="rating" />
                                            <label class="star star-2" for="star-2"></label>
                                            <input value="5" class="star star-1" id="star-1" type="radio"
                                                name="rating" />
                                            <label class="star star-1" for="star-1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-xs-12">Your Review</label>
                                    <div class="rate-stars col-md-9 col-xs-12">
                                        <textarea class="form-control" name="comment" placeholder="Add Review" id=''>
                                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-xs-12">Name</label>
                                    <div class="rate-stars col-md-9 col-xs-12">
                                        <input class="form-control" type="text" name="" placeholder="Name" id=''>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-xs-12">Email</label>
                                    <div class="rate-stars col-md-9 col-xs-12">
                                        <input class="form-control" type="mail" name="" placeholder="Email" id=''>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="check-data col-md-12 col-xs-12">
                                        Save my name, email, and website in this browser for the next
                                        time I comment.
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark-d"></span>
                                    </label>

                                </div>
                                <button type="submit" class="btn" id="req-f-btn">Add Review</button>
                        </div>
                        </form>
                    </div>
                    <div class="review-comment col-md-12 col-xs-12">

                        <div class="no-review-comment">
                            <p>There are no reviews yet.</p>
                        </div>

                        <div class="review-comment-block product-grid">
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <div class="description">
                                <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros
                                    tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis.
                                    Donec luctus condimentum ante et euismod.</p>
                                <h5>
                                    Peter Wargner
                                    <span>– </span>
                                    <span>April 5, 2016</span>
                                </h5>
                            </div>

                        </div>
                        <div class="review-comment-block product-grid">
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <div class="description">
                                <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros
                                    tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis.
                                    Donec luctus condimentum ante et euismod.</p>
                                <h5>
                                    Peter Wargner
                                    <span>– </span>
                                    <span>April 5, 2016</span>
                                </h5>
                            </div>

                        </div>
                        <div class="review-comment-block product-grid">
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <div class="description">
                                <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros
                                    tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis.
                                    Donec luctus condimentum ante et euismod.</p>
                                <h5>
                                    Peter Wargner
                                    <span>– </span>
                                    <span>April 5, 2016</span>
                                </h5>
                            </div>

                        </div>
                        <div class="review-comment-block product-grid">
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <div class="description">
                                <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros
                                    tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis.
                                    Donec luctus condimentum ante et euismod.</p>
                                <h5>
                                    Peter Wargner
                                    <span>– </span>
                                    <span>April 5, 2016</span>
                                </h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            <!--
                                @foreach($product->reviews as $review)

                                <div class="rev-item col-md-7 col-xs-12">

                                    <div class="r-img">
                                        <img src="{{url('storage/'.$review->owner->avatar)}}" alt="">

                                    </div>
                                    @auth
                                    @if(\Auth::user()->id == $review->user_id)
                                    <a href="{{url('review/'.$review->id.'/delete')}}" style="    float: inline-end;"><i
                                            class="fa fa-trash" aria-hidden="true"></i></a>
                                    @endif
                                    @endauth
                                    <div class="r-data">

                                        <div>
                                            <a href="{{url('supplier/'.$review->user_id)}}">{{$review->owner->name}}</a>
                                        </div>


                                        <div class="cardo">
                                            <div class="c-inner" style="text-align: right;">
                                                <div class="c-data">
                                                    <p>
                                                        @php $rating = $review->stars ; @endphp
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
                                                </div>
                                            </div>
                                        </div>

                                        <p>{{$review->comment}}</p>
                                    </div>
                                </div>

                                @endforeach
                                -->

        </div>
    </div>
    </div>
    </div>





    @if(count($related_products))

    <div class="related-s col-xs-12">

        <div class="g-head col-xs-12">
            <h3>@lang('general.related_store') <span class="f-r">@lang('general.products')</span></h3>
            <!--<a href="#" class="more">@lang('general.view_all')</a>-->
        </div>
        <div class="g-body col-xs-12">
            <div class="rel-slider owl-theme owl-carousel">


                @foreach($related__store_products as $product)

                <div class="">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{url('product/'.$product->id)}}" class="image">
                                <img class="pic-1" src="{{url('storage/'.$product->image)}}">
                                <img class="pic-2" src="{{url('storage/'.(json_decode($product->images))[0])}}">
                            </a>
                            @if ($product->sale_price)
                            <span
                                class="product-discount-label">{{ number_format((($product->price - $product->sale_price)*100) /$product->price,0) }}%</span>
                            @endif

                            <ul class="product-links">
                                <li><a href="{{url('product/'.$product->id)}}" data-tip="Compare"><i
                                            class="fa fa-random"></i></a></li>
                                <li><a href="{{url('product/'.$product->id)}}" data-tip="Add to Wishlist"><i
                                            class="fa fa-heart"></i></a></li>
                                {{-- <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li> --}}
                                {{-- <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li> --}}
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a
                                    href="{{url('product/'.$product->id)}}">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                            </h3>
                            <div class="price">
                                @if ($product->sale_price)
                                <span>{{$product->price}}</span>
                                {{$product->sale_price}}
                                @else
                                {{$product->price}}

                                @endif
                            </div>
                            <div class="c-data">
                                <p>
                                    @php
                                    $rating = $product->average_rating ;
                                    @endphp

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
                            </div>
                            <a class="btn h-pro-btn" href="#" data-toggle="modal"
                                data-target="#contact_{{$product->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>


    </div>
    @endif

    @if(count($related_products))

    <div class="related-s col-xs-12">

        <div class="g-head col-xs-12">
            <h3>@lang('general.related') <span class="f-r">@lang('general.products')</span></h3>
            <!--<a href="#" class="more">@lang('general.view_all')</a>-->
        </div>
        <div class="g-body col-xs-12">
            <div class="rel-slider owl-theme owl-carousel">


                @foreach($related_products as $product)

                <div class="">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{url('product/'.$product->id)}}" class="image">
                                <img class="pic-1" src="{{url('storage/'.$product->image)}}">
                                <img class="pic-2" src="{{url('storage/'.(json_decode($product->images))[0])}}">
                            </a>
                            @if ($product->sale_price)
                            <span
                                class="product-discount-label">{{ number_format((($product->price - $product->sale_price)*100) /$product->price,0) }}%</span>
                            @endif

                            <ul class="product-links">
                                <li><a href="{{url('product/'.$product->id)}}" data-tip="Compare"><i
                                            class="fa fa-random"></i></a></li>
                                <li><a href="{{url('product/'.$product->id)}}" data-tip="Add to Wishlist"><i
                                            class="fa fa-heart"></i></a></li>
                                {{-- <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li> --}}
                                {{-- <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li> --}}
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a
                                    href="{{url('product/'.$product->id)}}">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                            </h3>
                            <div class="price">
                                @if ($product->sale_price)
                                <span>{{$product->price}}</span>
                                {{$product->sale_price}}
                                @else
                                {{$product->price}}

                                @endif
                            </div>
                            <div class="c-data">
                                <p>
                                    @php
                                    $rating = $product->average_rating ;
                                    @endphp

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
                            </div>
                            <a class="btn h-pro-btn" href="#" data-toggle="modal"
                                data-target="#contact_{{$product->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
        </div>


    </div>
    @endif





    <div class="related-s single-brands col-xs-12">
        <div class="single-brand-s owl-theme owl-carousel">
            <div class="item">
                <div class="single-brand-img">
                    <a href="#"><img src="https://electro.madrasthemes.com/wp-content/uploads/2021/03/themeforest1.png"
                            alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="single-brand-img">
                    <a href="#"><img src="https://electro.madrasthemes.com/wp-content/uploads/2021/03/themeforest1.png"
                            alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="single-brand-img">
                    <a href="#"><img src="https://electro.madrasthemes.com/wp-content/uploads/2021/03/themeforest1.png"
                            alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="single-brand-img">
                    <a href="#"><img src="https://electro.madrasthemes.com/wp-content/uploads/2021/03/themeforest1.png"
                            alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="single-brand-img">
                    <a href="#"><img src="https://electro.madrasthemes.com/wp-content/uploads/2021/03/themeforest1.png"
                            alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="single-brand-img">
                    <a href="#"><img src="https://electro.madrasthemes.com/wp-content/uploads/2021/03/themeforest1.png"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>



    <div class="single-related-blocks col-xs-12">
        <div class="related-block col-md-3 col-xs-12">
            <div class="g-head">
                <h3>Featured Products</h3>
            </div>
            <ul class="product_list_widget">
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
        <div class="related-block col-md-3 col-xs-12">
            <div class="g-head">
                <h3>Top Selling Products</h3>
            </div>
            <ul class="product_list_widget">
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
        <div class="related-block col-md-3 col-xs-12">
            <div class="g-head">
                <h3>On-sale Products</h3>
            </div>
            <ul class="product_list_widget">
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/GoldPhone-300x300.png"
                            alt="img">
                    </a>
                    <div class="product_list-info product-grid">
                        <h3 class="title"><a href="#">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                        <div class="price">
                            <span>1700</span>
                            1400
                        </div>
                        <div class="c-data">
                            <p>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
        <div class="related-block col-md-3 col-xs-12">
            <div class="single-prod-ad">
                <img src="https://electro.madrasthemes.com/wp-content/uploads/2019/04/footer-widget-img-01.jpg"
                    alt="img">
            </div>
        </div>
    </div>





    </div>
    </div>
</main>


<div class="toTop">
    <i class="fa fa-chevron-up"></i>
</div>
</div>

<div class="modal fade" id="review-pop">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="rate-title">
                    <h3>@lang('general.add_review')</h3>
                </div>

                <div class="rate-form">
                    <form action="{{route('add_product_review',['type' => 'product','id' => $product_id])}}"
                        method="POST">
                        @csrf

                        <div class="rate-stars">
                            <div class="stars">

                                <input value="1" class="star star-5" id="star-5" type="radio" required name="stars" />
                                <label class="star star-5" for="star-5"></label>
                                <input value="2" class="star star-4" id="star-4" type="radio" name="stars" />
                                <label class="star star-4" for="star-4"></label>
                                <input value="3" class="star star-3" id="star-3" type="radio" name="stars" />
                                <label class="star star-3" for="star-3"></label>
                                <input value="4" class="star star-2" id="star-2" type="radio" name="stars" />
                                <label class="star star-2" for="star-2"></label>
                                <input value="5" class="star star-1" id="star-1" type="radio" name="stars" />
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

<script>
    function favtoggle(product_id, user_id) {

        var token = '{{ Session::token() }}';



        $.ajax({



            type: 'POST',

            url: '{!!URL::to('
            product_favorite ')!!}',

            data: {
                product_id: product_id,
                _token: token,
                user_id: user_id
            },

            success: function (result) {

                console.log(result);

                $(".fav-" + product_id).toggleClass("fav-active");


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

</script>


@endpush