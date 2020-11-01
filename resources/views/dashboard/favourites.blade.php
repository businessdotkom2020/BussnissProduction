@extends('layouts.main')
@php
$menu = false ;
@endphp



@section('content')
  <div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
            <div class="container">
                <h3>favourites</h3>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>favourites</li>
                </ul>
            </div>
        </div>
        
        @php
                     $products_ids = \App\Models\Favorite::where([['user_id',\Auth::id()],['favorited_type','App\Models\Product']])->get()->pluck('favorited_id');
                     $requests_ids = \App\Models\Favorite::where([['user_id',\Auth::id()],['favorited_type','App\Models\Request']])->get()->pluck('favorited_id');
              
              

        @endphp
        <main class="main-content col-xs-12">
            <div class="fav-wrap col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12">
                        <ul class="nav-tabs">
                            <li class="active">
                                <a href="#" data-toggle="tab" data-target="#t1">products</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tab" data-target="#t2">requests</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content col-xs-12">
                        <div class="col-xs-12 tab-pane fade active in" id="t1">
                            
                         
                         @foreach(\App\Models\Product::whereIn('id',$products_ids)->get() as $product)
                            <div class="block b-product col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                <a href="javascript:void(0)" class="fav-pro active">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="{{url('product/'.$product->id)}}" class="img-hold">

                                    <img src="{{ url('storage/'.$product->image)}}" alt="">
                                @if(isset(json_decode($product->images)[0]))
                                    <img src="{{ url('storage/'.json_decode($product->images)[0])}}" class="sec-img" alt="">
                                @endif

                                </a>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                <p>{{str_limit($product->getTranslatedAttribute('description',\App::getLocale()), 110)}}</p>
                                
                                @if($product->sale_price)
                                <span>{{$product->sale_price}} l.e</span>
                                @endif
          

                                <span class="{{$product->sale_price ? 'old' : ''}}">{{$product->sale_price}} l.e</span>

                                <a class="btn" href="#" data-toggle="modal" data-target="#contact_pop">contact supplier</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                            
                       
                       
                       
                        </div>
                        <div class="reqs-wrap col-xs-12 tab-pane fade" id="t2">

@foreach(\App\Models\Request::whereIn('id',$requests_ids)->get() as $request)
                            <div class="block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner col-xs-12">
                                <div class="i-top col-xs-12">
                                    <span class="type-badge">{{$request->category->getTranslatedAttribute('name',\App::getLocale())}}</span>
                                    <div class="i-slider owl-carousel owl-theme">
                                      
                                     @foreach(json_decode($request->images) as $img)

                                        <div class="item">
                                            <img src="{{ url('storage/'.$img)}}" alt="">
                                        </div>
                               
                               
                                    @endforeach
                                    </div>
                                </div>
                                <div class="i-middle col-xs-12">
                                    <div class="author">
                                        <img src="{{url('storage/'.$request->user->avatar)}}" alt="">
                                        <a href="{{url('request/'.$request->id)}}">{{$request->user->name}}</a>
                                    </div>
                                    <div class="time">
                                        <span>03:30 AM</span>
                                    </div>
                                </div>
                                <div class="i-footer col-xs-12">
                                    <div class="title">
                                        <a href="{{url('request/'.$request->id)}}">{{$request->name}}</a>
                                    </div>
                                    <div class="extra">
                                        <div class="prod-extra">
                                            <a href="#" data-tool="tooltip" title="add to favourite" data-placement="top" class="fav-pro active">
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
                                        <a href="{{url('supplier/'.$request->user->id)}}" class="btn" data-target="#contact-pop" data-toggle="modal">contact user</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                         
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection


