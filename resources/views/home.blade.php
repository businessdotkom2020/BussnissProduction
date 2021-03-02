@extends('layouts.main')

@php
$menu = true ;
@endphp

@section('content')


<main class="main-content col-xs-12">
    <div class="col-md-9 col-md-offset-3 col-sm-12 col-xs-12 h-slider-conn">
        <div class="h-slider owl-carousel owl-theme">
            <div class="item">
                <div class="slider-inner">
                    <div class="slider-item" style="background-image: url(https://i.imgur.com/wWctE6h.png)">
                        <!--
                                    <div class="details-item">
                                        <h1>badil spare parts</h1>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                        </p>
                                        <a href="#" class="btn">shop now</a>
                                    </div>

                                    <div class="img-item">
                                        <div class="img" style="background-image: url(https://i.imgur.com/mFI2maG.jpg)"></div>
                                    </div>
                                </div>
                                -->
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-inner">
                    <div class="slider-item" style="background-image: url(https://i.imgur.com/zp9QK3C.jpg)"></div>
                </div>
            </div>
            <div class="item">
                <div class="slider-inner">
                    <div class="slider-item" style="background-image: url(https://i.imgur.com/Undx7w5.jpg)"></div>
                </div>
            </div>


        </div>
    </div>


    <!--
                <div class="col-md-2 col-xs-12 padding">
                    <div class="colum-right">
                        <div class="title-side">
                            <h3>new deals just arrived</h3>
                        </div>
                        <div class="priducts-side">
                            @foreach ($latest_products as $product)
                            <div class="block-product">
                                <div class="img-block">
                                    <a href="{{url('product/'.$product->id)}}" class="img-hold">

                                        <img src="https://i.ibb.co/2cbfP9p/20961-20965-20969iphone12promaxblueproductimage1000x1000png.png" border="0">

                                    </a>
                                </div>
                                <div class="details-block">
                                    <a href="#" class="name">name product</a>
                                    <span>81$</span>
                                    <a href="#" class="btn">shop now</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="see-more">
                            <a href="#">see more</a>
                        </div>
                    </div>-->
    <!-- <div class="h-slider owl-carousel owl-theme">

            @foreach (App\Models\Slider::whereType('web')->get() as $slider)
            <div class="item">
                <div class="i-img col-md-6 col-xs-12">
                    <img src="{{ asset('/web/images/stocks/3.png')}}" alt="">
                </div>
                <div class="i-data col-md-6 col-xs-12">

                </div>
            </div>
            @endforeach

        </div>
    </div>
    -->

    <!--
    <div class="cats col-xs-12">
        <div class="container">
            <ul>
                @foreach (\App\Models\Category::whereNull('parent_id')->limit(10)->get() as $category)
                <li>
                    <a href="{{url('category/'.$category->id)}}">
                        <img src="{{url('storage/'.$category->image)}}" alt="">
                        {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
-->

    <div class="new-section col-xs-12">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="h-features col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="features-all">
                        <!-- Start Block -->
                        <div class="features-block">
                            <div class="icon-block">
                                <img src="https://i.imgur.com/RTTk0lR.png">
                            </div>
                            <div class="details-block">
                                <h4>Secure Payment</h4>
                                <span>100% secure payment</span>
                            </div>
                        </div>
                        <!-- Start Block -->
                        <div class="features-block">
                            <div class="icon-block">
                                <img src="https://i.imgur.com/CiuevtK.png">
                            </div>
                            <div class="details-block">
                                <h4>24/7 Support</h4>
                                <span>Dedicated support </span>
                            </div>
                        </div>
                        <!-- Start Block -->
                        <div class="features-block">
                            <div class="icon-block">
                                <img src="https://i.imgur.com/qpcO6RN.png">
                            </div>
                            <div class="details-block">
                                <h4>90 Days Return</h4>
                                <span>If goods have problems</span>
                            </div>
                        </div>
                        <!-- Start Block -->
                        <div class="features-block">
                            <div class="icon-block">
                                <img src="https://i.imgur.com/EkPv6sc.png">
                            </div>
                            <div class="details-block">
                                <h4>Free Delivery </h4>
                                <span>For all oders over $99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-categories col-xs-12">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="g-head">
                        <h3>TOP <span>CATEGORIES</span>OF THE MONTH </h3>
                        <a href="#" class="more">@lang('general.view_all')</a>
                    </div>
                </div>

                @foreach (\App\Models\Category::limit(8)->get() as $category)

                <div class="col-md-3 col-sm-4 col-sx-12">
                    <div class="row categories-blocks">
                        <div class="col-md-5 col-sm-5 col-xs-6">
                            <div class="category-img">
                                <a href="{{url('category/'.$category->id)}}">
                                    <img src="{{url('storage/'.$category->image)}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-6">
                            <div class="category-links">
                                <h4><a href="{{url('category/'.$category->id)}}">
                                        {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                                    </a>
                                </h4>
                                <ul class="list-inline">
                                    @foreach (\App\Models\Category::where('parent_id',$category->id)->limit(4)->get() as
                                    $sub_category)
                                    <li>
                                        <a
                                            href="{{url('category/'.$sub_category->id)}}">{{$sub_category->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                <a href="#" class="cat-more">
                                    {{__('general.others')}}
                                    <i class="fa fa-angle-right hvr-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>


    <!--
    <div class="n-products col-xs-12 col-md-12 col-lg-8">
        <div class="container">
            <div class="g-head col-xs-12">
                <h3>@lang('general.newly') <span class="f-r"> @lang('general.arrival')</span></h3>
                <a href="{{url('products/latest')}}" class="more">@lang('general.view_all')</a>
            </div>
            <div class="g-body col-xs-12">
                <div class="slick-wrapper">
                    <div id="slick1">
                    @foreach ($latest_products as $product)
                        <div class="slide-item">
                            <div class="flex-container-row">
                                <div class="block b-product">
                                    <div class="inner">
                                        <div class="i-img">
                                            @if($product->product_condition == 'new')
                                            <div class="ribbon">
                                                <span>@lang('general.new')</span>
                                            </div>
                                            @endif

                                            <div class="prod-extra" style="position: inherit">

                                                <a href="javascript:void(0)" id="fav-{{$product->id}}" title="add to favourite" data-placement="top" class="fav-{{$product->id}} {{$product->isFavorited() ? 'fav-active' : null  }} fav-pro " onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>



                                            <a href="{{url('product/'.$product->id)}}" class="img-hold">
                                                <img src="{{url('storage/'.$product->image)}}" alt="">
                                                <img src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : "https://i.imgur.com/mFI2maG.jpg" }}" class="sec-img">

                                            </a>
                                        </div>
                                        <div class="i-data">

                                            <a href="{{url('product/'.$product->id)}}" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>



                                          <p>{{ Str::limit($product->getTranslatedAttribute('description',\App::getLocale()),50 )}}</p>

                                            <div class="cardo" style="flex-grow: 1;padding:0px">
                                                <div class="c-inner" style="text-align: right;">
                                                    <div class="c-data">
                                                        <p>
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

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="block-price">
                                            <span class="new-price">{{$product->sale_price ? $product->sale_price : $product->price}}$</span>

                                            <span class="old-price">120$</span>
                                            @if($product->sale_price)
                                            <span class="offer-p">{{number_format( (($product->sale_price/$product->price) * 100) ,2 ) }} % تخفيض</span>
                                            @endif
                                            </div>
                                            <a class="btn" href="#" data-toggle="modal" data-target="#contact_{{$product->user_id}}" target="_blank">@lang('general.contact_supplier')</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
-->


    <div class="n-products new-product-blocks col-xs-12">
        <div class="container-fluid">
            <div class="g-head col-xs-12">
                <h3>new <span>arrival</span></h3>
                <a href="#" class="more">view all</a>
            </div>
            <div class="g-body col-xs-12">
                @foreach ($latest_products as $product)

                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{url('product/'.$product->id)}}" class="image">
                                <img class="pic-1" src="{{url('storage/'.$product->image)}}">
                                <img class="pic-2" src="{{url('storage/'.(json_decode($product->images))[0])}}">
                            </a>
                            @if ($product->sale_price)
                            <span
                                class="product-discount-label">{{number_format((($product->sale_price/$product->price) * 100) ,0)  .'%'}}</span>
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
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
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



    <div class="home-banner-ad home-banner-ad1 col-xs-12">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="h-banner-ad">
                        <a href="#">
                            <img src="https://i.imgur.com/GZyFqdI.jpg" alt="img" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="h-banner-ad">
                        <a href="#">
                            <img src="https://i.imgur.com/zp9QK3C.jpg" alt="img" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="h-banner-ad">
                        <a href="#">
                            <img src="https://i.imgur.com/Undx7w5.jpg" alt="img" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--

    <div class="n-left latest-requests new-product-blocks col-xs-12">
        <div class="g-head col-xs-12">
            <h3>@lang('general.latest_requests') </h3>
            <a href="{{url('requests')}}" class="more">@lang('general.view_all')</a>
        </div>
        <div class="g-body col-xs-12">
            <div id="suggestion-slider">
                @foreach ($latest_requests as $product)

                <div class="slide-item">
                    <div class="block b-product">
                        <div class="inner">
                            <div class="i-img">
                                <a href="javascript:void(0)" id="fav-req-{{$product->id}}" title="add to favourite"
                                    data-placement="top"
                                    class="fav-req-{{$product->id}} {{$product->isFavorited() ? 'fav-active' : null  }} fav-pro "
                                    onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="{{url('product/'.$product->id)}}" class="img-hold">
                                    <img
                                        src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : url('storage/products/default.jpg') }}">
                                    <img src="{{  isset((json_decode($product->images))[1]) ? url('storage/'.(json_decode($product->images))[1]) : url('storage/products/default.jpg') }}"
                                        class="sec-img">
                                </a>
                            </div>
                            <div class="i-data">
                                <a href="{{url('product/'.$product->id)}}"
                                    class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                <div class="cardo" style="flex-grow: 1;padding:0px">
                                    <div class="c-inner" style="text-align: right;">
                                        <div class="c-data">
                                            <p>
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
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>{{ Str::limit($product->getTranslatedAttribute('description',\App::getLocale()),50 )}}</p>
                                <div class="block-price">
                                    <span
                                        class="new-price">{{$product->sale_price ? $product->sale_price : $product->price}}$</span>

                                    <span class="old-price">120$</span>
                                    @if($product->sale_price)
                                    <span
                                        class="offer-p">{{number_format( (($product->sale_price/$product->price) * 100) ,2 ) }}
                                        % تخفيض</span>
                                    @endif
                                </div>
                                <a class="btn" href="#" data-toggle="modal" data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
-->

    <div class="latest-requests new-product-blocks col-xs-12">
        <div class="container-fluid">
            <div class="g-head col-xs-12">
                <h3>Latest <span>Requests</span></h3>
                <a href="{{url('requests')}}" class="more">@lang('general.view_all')</a>
            </div>
            <!--
            <div class="g-body col-xs-12">
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                            <div class="price">$70.99</div>
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <a class="btn h-request-btn" href="#" data-toggle="modal"
                                data-target="#contact_{{$product->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                            </a>
                            <span class="product-discount-label">-33%</span>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Men's T-Shirt</a></h3>
                            <div class="price"><span>$85.33</span> $57.22</div>
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <a class="btn h-request-btn" href="#" data-toggle="modal"
                                data-target="#contact_{{$product->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                            </a>
                            <span class="product-new-label">New</span>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Women's Top</a></h3>
                            <div class="price">$60.99</div>
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <a class="btn h-request-btn" href="#" data-toggle="modal"
                                data-target="#contact_{{$product->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                            </a>
                            <span class="product-new-label">New</span>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Women's Top</a></h3>
                            <div class="price">$60.99</div>
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <a class="btn h-request-btn" href="#" data-toggle="modal"
                                data-target="#contact_{{$product->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                            </a>
                            <span class="product-new-label">New</span>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Women's Top</a></h3>
                            <div class="price">$60.99</div>
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                                <a class="btn h-request-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="images/img-1.jpg">
                                <img class="pic-2" src="images/img-2.jpg">
                            </a>
                            <span class="product-new-label">New</span>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Women's Top</a></h3>
                            <div class="price">$60.99</div>
                            <div class="c-data">
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                </p>
                            </div>
                            <a class="btn h-request-btn" href="#" data-toggle="modal"
                                data-target="#contact_{{$product->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>



            </div>
-->
            <div class="g-body col-xs-12">


                <div class="latest-requests-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="request-grid">
                            <div class="request-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>

                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View" data-toggle="modal"
                                            data-target="#contact_{{$product->user_id}}" target="_blank"><i
                                                class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <div class="request-content">
                                <h3 class="title"><a href="#">Men's Shirt</a></h3>
                                <div class="request-de">
                                    <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}" target="_blank">تواصل مع المعلن
                                    </a>
                                    <ul class="rating list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                        <li><i class="fa fa-star disable"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>







    <div class="suppliers h-suppliers col-xs-12">
        <div class="container-fluid">
            <div class="g-head col-xs-12">
                <h3>@lang('general.suppliers')</h3>
                <a href="{{url('suppliers')}}" class="more">@lang('general.view_all')</a>
            </div>

            <!--
            <div class="g-body col-xs-12">
                <div id="supplier_slider">
                    @foreach($home_suppliers as $supplier)
                    <div class="slide-item">
                        <div class="cardo">
                            <div class="c-inner">
                                <div class="c-img">
                                    <a href="{{url('supplier/'.$supplier->id)}}">
                                        <img src="{{ url('storage/'.$supplier->avatar)}}" alt="">
                                    </a>
                                </div>
                                <div class="c-data">

                                    <h3>
                                        <a href="{{url('supplier/'.$supplier->id)}}"
                                            class="title">{{$supplier->name}}</a>
                                    </h3>
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
                                    @if(!Auth::check() || \Auth::user()->canFollow($supplier) &&
                                    \Auth::user()->id !=
                                    $supplier->id)
                                    <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                        onclick="followtoggle({{$supplier->id }})" class="btn ">
                                        <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                        <span style="color:white">
                                            Follow
                                        </span>
                                    </a>
                                    @elseif(Auth::check() && !\Auth::user()->canFollow($supplier) &&
                                    \Auth::user()->id
                                    != $supplier->id)
                                    <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                        onclick="followtoggle({{$supplier->id }})" class="btn following">
                                        <i id="followicon_{{$supplier->id}}" class="fa fa-check"></i>
                                        <span style="color:white">
                                            following
                                        </span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
-->





            <div class="g-body col-xs-12">


                @foreach($home_suppliers as $supplier)
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <div class="h-supplier-box cardo text-center">
                        <span>
                            <a href="{{url('supplier/'.$supplier->id)}}">
                                <img src="{{ url('storage/'.$supplier->avatar)}}" alt="">
                            </a>
                        </span>

                        <div class="c-inner">
                            <div class="c-data">
                                <h3>
                                    <a href="{{url('supplier/'.$supplier->id)}}" class="title">{{$supplier->name}}</a>
                                </h3>
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
                                @if(!Auth::check() || \Auth::user()->canFollow($supplier) &&
                                \Auth::user()->id !=
                                $supplier->id)
                                <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                    onclick="followtoggle({{$supplier->id }})" class="btn ">
                                    <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                    <span>
                                        Follow
                                    </span>
                                </a>
                                @elseif(Auth::check() && !\Auth::user()->canFollow($supplier) &&
                                \Auth::user()->id
                                != $supplier->id)
                                <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                    onclick="followtoggle({{$supplier->id }})" class="btn following">
                                    <i id="followicon_{{$supplier->id}}" class="fa fa-check"></i>
                                    <span>
                                        following
                                    </span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>



        </div>
    </div>




    <!--

    <div class="h-offers col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12">
                <h3>@lang('general.common') <span class="f-r"> @lang('general.most')</span></h3>
                <a href="{{url('products/most-common')}}" class="more">@lang('general.view_all')</a>
            </div>
            <div class="g-body col-xs-12">

                <div id="h-offers">
                    @foreach ($common_products as $product)
                    <div class="block b-product">
                        <div class="inner">
                            <div class="i-img">
                                @if($product->product_condition == 'new')
                                <div class="ribbon">
                                    <span>@lang('general.new')</span>
                                </div>
                                @endif
                                <div class="prod-extra" style="position: inherit">
                                    <a href="javascript:void(0)" id="fav-{{$product->id}}" title="add to favourite"
                                        data-placement="top"
                                        class="fav-{{$product->id}} {{$product->isFavorited() ? 'fav-active' : null  }} fav-pro "
                                        onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <a href="{{url('product/'.$product->id)}}" class="img-hold">
                                    <img src="{{url('storage/'.$product->image)}}" alt="">
                                    <img src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : "https://i.imgur.com/mFI2maG.jpg" }}"
                                        class="sec-img">

                                </a>
                            </div>
                            <div class="i-data">
                                <a href="{{url('product/'.$product->id)}}"
                                    class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                <p>{{ Str::limit($product->getTranslatedAttribute('description',\App::getLocale()),50 )}}
                                </p>

                                <div class="cardo" style="flex-grow: 1;padding:0px">
                                    <div class="c-inner" style="text-align: right;">
                                        <div class="c-data">
                                            <p>
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

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-price">
                                    <span
                                        class="new-price">{{$product->sale_price ? $product->sale_price : $product->price}}$</span>

                                    <span class="old-price">120$</span>
                                    @if($product->sale_price)
                                    <span
                                        class="offer-p">{{number_format( (($product->sale_price/$product->price) * 100) ,2 ) }}
                                        % تخفيض</span>
                                    @endif
                                </div>
                                <a class="btn" href="#" data-toggle="modal" data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    -->



    <div class="h-offers new-product-blocks col-xs-12">
        <div class="container-fluid">
            <div class="g-head col-xs-12">
                <h3>الأكثر <span>شيوعا </span></h3>
                <a href="{{url('products/most-common')}}" class="more">@lang('general.view_all')</a>
            </div>
            <div class="g-body col-xs-12">


                <div class="h-offers-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="https://i.imgur.com/gY5s6z0.jpg">
                                    <img class="pic-2" src="https://i.imgur.com/CEQeTSE.jpg">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                                <div class="price">$70.99</div>
                                <div class="c-data">
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                                <a class="btn h-offers-btn" href="#" data-toggle="modal"
                                    data-target="#contact_{{$product->user_id}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                </div>






            </div>

        </div>
    </div>




    <div class="home-banner-ad home-banner-ad2 col-xs-12">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="h-banner-ad">
                        <a href="#">
                            <img src="https://i.imgur.com/abwMo0G.jpg" alt="img" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="h-banner-ad">
                        <a href="#">
                            <img src="https://i.imgur.com/ikmVzdY.jpg" alt="img" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="services home-services col-xs-12">
        <div class="container-fluid">
            <div class="g-head col-xs-12">
                <h3>@lang('general.services')</h3>
                <a href="{{url('services')}}" class="more">@lang('general.view_all')</a>
            </div>
            <div class="g-body col-xs-12">
                @foreach ($home_services as $service)
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="s-block">
                        <div class="s-img">
                            <a href="{{url('service/'.$service->id)}}">
                                <img src="{{ url('storage/'.json_decode($product->images)[0])}}" alt="">
                            </a>
                        </div>
                        <div class="s-data">
                            <a href="#" class="title">{{$service->name}}</a>
                            <p>
                                @php $rating = $service->average_rating ; @endphp
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
                            <a class="btn" href="#" data-toggle="modal" data-target="#contact_{{$service->user_id}}"
                                target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
</main>


@foreach($owners as $owner)

<div class="modal fade" id="contact_{{$owner->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
            <div class="modal-body">

                <div class="supp-card">
                    <h3>@lang('general.contact_supplier')</h3>
                    <div class="c-img">
                        <img src="{{$owner->store_image ? url('storage/'.$owner->avatar) : asset('/web/images/marks/1.png')}}"
                            alt="">
                    </div>
                    <h4>{{$owner->name}}</h4>
                    <p>
                        @php $rating = $owner->average_rating ; @endphp
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
                    <div class="c-info">
                        <a href="tel:{{$owner->mobile}}" class="btn">
                            <i class="fa fa-phone"></i>
                            {{$owner->mobile}}
                        </a>
                        <a href="mailto:{{$owner->email}}" class="btn">
                            <i class="fa fa-envelope"></i>
                            {{$owner->email}}
                        </a>
                    </div>
                    <div class="c-social">
                        <!--<span>social:</span>-->
                        @if($owner->facebook_url)
                        <a href="{{$owner->facebook_url}}">
                            <i class="fa fa-facebook"></i>
                        </a>

                        @endif

                        @if($owner->whatsapp_mobile)

                        <a href=" https://api.whatsapp.com/send?phone={{$owner->whatsapp_mobile}}">
                            <i class="fa fa-whatsapp"></i>
                        </a>

                        @endif

                        @if($owner->linkedin_url)

                        <a href="{{$owner->linkedin_url}}">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        @endif

                        @if($owner->instagram_url)

                        <a href="{{$owner->instagram_url}}">
                            <i class="fa fa-instagram"></i>
                        </a>

                        @endif

                        @if($owner->youtube_url)

                        <a href="{{$owner->youtube_url}}">
                            <i class="fa fa-youtube-play"></i>
                        </a>

                        @endif

                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endforeach




@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>

<script>
    $(".top-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true
    });

    $('#slick1').slick({
        rows: 2,
        dots: false,
        arrows: true,
        rtl: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }
        ]
    });


    $('#suggestion-slider').slick({
        rows: 2,
        dots: false,
        arrows: true,
        rtl: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }
        ]
    });


    $('#supplier_slider').slick({
        rows: 2,
        dots: false,
        arrows: true,
        rtl: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }
        ]
    });


    $('#h-offers').slick({
        rows: 1,
        dots: false,
        arrows: true,
        rtl: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }
        ]
    });


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


                if (result.class) {
                    $(".fav-" + product_id).toggleClass(result.class);
                }


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




    function followtoggle(follower_id) {

var token = '{{ Session::token() }}';



$.ajax({



    type: 'POST',

    url: '{!!URL::to('user_follow')!!}',

    data: {
        follower_id: follower_id,
        _token: token
    },

    success: function(result) {

        if (result.class) {
            $("#followtoggle_" + follower_id).toggleClass(result.class);
            $("#followicon_" + follower_id).toggleClass(result.icon);
            $("#followicon_" + follower_id).addClass(result.icon).removeClass(result.old_icon)
            $("#followtoggle_" + follower_id + " span").text(result.but_status);

        }



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
