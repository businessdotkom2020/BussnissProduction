
@extends('layouts.main')

@php
    $menu = false ;
@endphp

@section('content')

<div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url({{ asset('web/images/cover.jpg')}})">
            <div class="container">
                <h3>services</h3>
                <ul>
                    <li>
                        <a href="{{url('/')}}">@lang('general.home')</a>
                    </li>
                    <li>
                        <a href="#">services</a>
                    </li>
                    
                    <li>single service</li>
                </ul>
            </div>
        </div>
<main class="main-content col-xs-12">
            <div class="supp-prof col-xs-12">
                <div class="supp-cover col-xs-12" style="background-image: url({{ $supplier->store_background ? url('storage/'.$supplier->store_background) :  asset('/web/images/cover.jpg') }})"></div>
                <div class="supp-bottom col-xs-12">
                    <div class="supp-data">
                    <div class="supp-img">
                        <img src="{{$supplier->store_image ? url('storage/'.$supplier->store_image) : asset('/web/images/marks/1.png')}}" alt="">
                    </div>
                    <div class="supp-l">
                        <h3>{{$supplier->name}}</h3>
                        <p>
                            <span class="rating">
                                @for ($i = 0 ; $i < $supplier->average_rating; $i++)
                                    <i class="fa fa-star active"></i>
                                @endfor
                                                             @for ($i = 0 ; $i < (5 -  $supplier->average_rating  ); $i++)
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
                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})" class="btn ">
                        <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                    <span  style="" >
                        Follow

                        </span>

                    </a>

                    @elseif(!\Auth::user()->canFollow($supplier) && \Auth::user()->id != $supplier->id)

         <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})" class="btn following">
                        <i id="followicon_{{$supplier->id}}" class="fa fa-check"></i>
                        <span style=""  >
                        following

                        </span >

                    </a>

                  @else

                       <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})" class="btn ">
                        <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                    <span  style="" >
                        Follow

                        </span>

                    </a>
                    @endif



    @elseif(!Auth::check() )

                     <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})" class="btn ">
                        <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                    <span  style="" >
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
                            <a href="" data-toggle="tab" data-target="#cat{{$category->id}}" aria-expanded="false">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</a>
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
                                    <img src="{{ url('storage/'.json_decode($product->images)[1])}}" alt="" class="sec-img">
                                @endif

                                </a>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
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


                                <span class="{{$product->sale_price ? 'old' : ''}}">{{$product->sale_price}} l.e</span>

                            </div>
                        </div>
                    </div>
                           @endforeach


                                </div>
                                @foreach($supplier_products_categories as $category)
@php

$sub_categories_ids = \App\Models\Category::where('parent_id',$category->id)->get()->pluck('id');
$sub_sub_categories_ids = \App\Models\Category::whereIn('parent_id',$sub_categories_ids)->get()->pluck('id');

@endphp

                                <div class="col-xs-12 tab-pane fade" id="cat{{$category->id}}">

                             @foreach(\App\Models\Product::whereIn('category_id',$sub_sub_categories_ids)->get() as $product)

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
                                    <img src="{{ url('storage/'.json_decode($product->images)[1])}}" alt="" class="sec-img">
                                @endif

                                </a>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
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
                            <a href="#" data-toggle="tab" data-target="#service_cat_{{$category->id}}" aria-expanded="false">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
                            </div>
                        </div>
                        @endforeach

                                </div>


                    @foreach($supplier_services_categories as $category)

                                            <div class="col-xs-12 tab-pane fade" id="service_cat_{{$category->id}}">


                               @foreach(\App\Models\Service::where([['user_id',$supplier->id],['category_id',$category->id]])->get() as $service)
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                            <a href="#" data-toggle="tab" data-target="#req{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</a>
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
                                    <span class="type-badge"> {{$request->category->getTranslatedAttribute('name',\App::getLocale())}}  </span>
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
                                            <a href="#" data-tool="tooltip" title="add to favourite" data-placement="top">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="op-social" data-tool="tooltip" title="share" data-placement="top">
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
                                        <a href="#" class="btn" data-target="#contact-pop" data-toggle="modal">contact user</a>

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

                        @foreach(\App\Models\Request::where([['user_id',$supplier->id],['category_id',$category->id]])->get() as $request)
                        <div class="block col-md-6 col-xs-12">
                            <div class="inner col-xs-12">
                                <div class="i-top col-xs-12">
                                    <span class="type-badge"> {{$request->category->getTranslatedAttribute('name',\App::getLocale())}}  </span>
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
                                            <a href="#" data-tool="tooltip" title="add to favourite" data-placement="top">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="op-social" data-tool="tooltip" title="share" data-placement="top">
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
                                        <a href="#" class="btn" data-target="#contact-pop" data-toggle="modal">contact user</a>

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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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
                                <a href="#" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
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




        </main>

    <div class="modal fade" id="contact-pop">
  <div class="modal-dialog">
    <div class="modal-content">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-close"></i>
          </button>
      <div class="modal-body">

          <div class="supp-card">
              <h3>@lang('general.contact_supplier')</h3>
            <div class="c-img">
                <img src="{{$supplier->store_image ? url('storage/'.$supplier->store_image) : asset('/web/images/marks/1.png')}}" alt="">
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
</div><!-- /.modal -->



<div class="modal fade" id="review-pop">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
          <div class="rate-title">
                                <h3>@lang('general.add_review')</h3>
                            </div>

                            <div class="rate-form">
                                <form action="{{route('add_product_review',['type' => 'supplier','id' => $supplier->id])}}" method="POST">
                                        @csrf


              <div class="rate-stars">
                                <div class="stars">

  <input class="star star-5" id="star-5" type="radio" value="1"   name="stars"/>
  <label class="star star-5" for="star-5"></label>
  <input class="star star-4" id="star-4" type="radio" value="2" name="stars"/>
  <label class="star star-4" for="star-4"></label>
  <input class="star star-3" id="star-3" type="radio" value="3" name="stars"/>
  <label class="star star-3" for="star-3"></label>
  <input class="star star-2" id="star-2" type="radio" value="4" name="stars"/>
  <label class="star star-2" for="star-2"></label>
  <input class="star star-1" id="star-1" type="radio" value="5" name="stars"/>
  <label class="star star-1" for="star-1"></label>

</div>
                            </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" required placeholder="@lang('general.add_your_review')"></textarea>
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
    <script src="{{ asset('/web/js/rangeSlider.min.js')}}"></script>

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


</script>

@endpush
