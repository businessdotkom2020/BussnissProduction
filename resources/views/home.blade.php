@extends('layouts.main')

@php
    $menu = true ;
@endphp

@section('content')


    <main class="main-content col-xs-12">
        <div class="hero-s col-xs-12">
            <div class="h-slider owl-carousel owl-theme">

            @foreach (App\Models\Slider::whereType('web')->get() as $slider)
                <div class="item">
                    <div class="i-img col-md-6 col-xs-12">
                        <img src="{{ asset('/web/images/stocks/3.png')}}" alt="">
                    </div>
                    <div class="i-data col-md-6 col-xs-12">
                        <h3>{{$slider->product->getTranslatedAttribute('name',\App::getLocale())}} </h3>
                        <p>{{$slider->product->getTranslatedAttribute('description',\App::getLocale())}}</p>
                    <span>{{$slider->product->sale_price ? $slider->product->sale_price : $slider->product->price}}$</span>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
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
        <div class="n-products col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12">
                <h3>@lang('general.newly') <span class="f-r"> @lang('general.arrival')</span></h3>
                <a href="{{url('products/latest')}}" class="more">@lang('general.view_all')</a>
            </div>
            <div class="g-body col-xs-12">

@foreach (\App\Models\Product::limit(12)->latest()->get() as $product)
                <div class="block b-product col-md-2 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="i-img">
                            @if($product->product_condition == 'new')
                                <div class="ribbon">
                                    <span>@lang('general.new')</span>
                                </div>
                            @endif
                            <div class="offer-badge">
                                    <span>{{number_format((($product->sale_price/$product->price) * 100) ,2) }} %</span>
                            </div>

                            <div   class="prod-extra" style="position: inherit">

                                <a href="javascript:void(0)" id="fav-{{$product->id}}" title="add to favourite" data-placement="top" class="fav-{{$product->id}} {{$product->isFavorited() ? 'fav-active' : null  }} fav-pro "  onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                    <i class="fa fa-heart"></i>
                            </a>
                    </div>



                            <a href="{{url('product/'.$product->id)}}" class="img-hold">
                                <img src="{{url('storage/'.$product->image)}}" alt="">
                                <img src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : "https://i.imgur.com/mFI2maG.jpg" }}" class="sec-img">

                            </a>
                        </div>
                        <div class="i-data">

                            <a  href="{{url('product/'.$product->id)}}" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>



                    <!-- <p>{{ Str::limit($product->getTranslatedAttribute('description',\App::getLocale()),50 )}}</p> -->

                <div class="cardo" style="flex-grow: 1;padding:0px">
                    <div class="c-inner" style="text-align: right;">
                        <div class="c-data">
                            <p style="text-align: center;">
                                @php $rating = $product->average_rating ; @endphp
                                @foreach(range(1,5) as $i)
                                        @if($rating >0)
                                            @if($rating > 0.5)
                                                        <i class="fa fa-star active"></i>
                                            @elseif($rating < 0.5 && $rating > 0)
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

                <span>{{$product->sale_price ? $product->sale_price : $product->price}}$</span>


                            <a class="btn" href="{{url('supplier/'.$product->user_id)}}"  target="_blank">@lang('general.contact_supplier')</a>
                        </div>

                    </div>
                </div>
                @endforeach





            </div>
            </div>
        </div>
        <div class="h-offers col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12">
                <h3>@lang('general.common') <span class="f-r"> @lang('general.most')</span></h3>
                <a href="{{url('products/most-common')}}" class="more">@lang('general.view_all')</a>
            </div>
            <div class="g-body col-xs-12">

                @foreach (\App\Models\Product::limit(12)->orderBy('name','asc')->get() as $product)
                <div class="block b-product col-md-2 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="i-img">
                            @if($product->product_condition == 'new')
                                <div class="ribbon">
                                    <span>@lang('general.new')</span>
                                </div>
                            @endif
                            <div class="offer-badge">
                                    <span>{{number_format((($product->sale_price/$product->price) * 100) ,2) }} %</span>
                            </div>

                            <div   class="prod-extra" style="position: inherit">

                                <a href="javascript:void(0)" id="fav-{{$product->id}}" title="add to favourite" data-placement="top" class="fav-{{$product->id}} {{$product->isFavorited() ? 'fav-active' : null  }} fav-pro "  onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                    <i class="fa fa-heart"></i>
                            </a>
                    </div>



                            <a href="{{url('product/'.$product->id)}}" class="img-hold">
                                <img src="{{url('storage/'.$product->image)}}" alt="">
                                <img src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : "https://i.imgur.com/mFI2maG.jpg" }}" class="sec-img">

                            </a>
                        </div>
                        <div class="i-data">

                           <a  href="{{url('product/'.$product->id)}}" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>

                    <!-- <p>{{ Str::limit($product->getTranslatedAttribute('description',\App::getLocale()),50 )}}</p> -->

                <div class="cardo" style="flex-grow: 1;padding:0px">
                    <div class="c-inner" style="text-align: right;">
                        <div class="c-data">
                            <p style="text-align: center;">
                                @php $rating = $product->average_rating ; @endphp
                                @foreach(range(1,5) as $i)
                                        @if($rating >0)
                                            @if($rating > 0.5)
                                                        <i class="fa fa-star active"></i>
                                            @elseif($rating < 0.5 && $rating > 0)
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

                <span>{{$product->sale_price ? $product->sale_price : $product->price}}$</span>


                            <a class="btn" href="{{url('supplier/'.$product->user_id)}}"  target="_blank">@lang('general.contact_supplier')</a>
                        </div>

                    </div>
                </div>
@endforeach

            </div>
            </div>
        </div>
        <div class="suggestion col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12">
                <h3>@lang('general.latest_requests')  </h3>
                <a href="{{url('requests')}}" class="more">@lang('general.view_all')</a>
            </div>
            <div class="g-body col-xs-12">

                @foreach (\App\Models\Request::limit(4)->orderBy('name','desc')->get() as $product)

                <div class="block b-product col-md-2 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="i-img">
                            <a href="javascript:void(0)" id="fav-req-{{$product->id}}" title="add to favourite" data-placement="top" class="fav-req-{{$product->id}} {{$product->isFavorited() ? 'fav-active' : null  }} fav-pro "  onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="{{url('product/'.$product->id)}}" class="img-hold">
                                <img src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : url('storage/products/default.jpg') }}">
                                <img src="{{  isset((json_decode($product->images))[1]) ? url('storage/'.(json_decode($product->images))[1]) : url('storage/products/default.jpg') }}" class="sec-img">


                            </a>
                        </div>
                        <div class="i-data">
                            <a href="{{url('product/'.$product->id)}}" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                            <p>{{ Str::limit($product->getTranslatedAttribute('description',\App::getLocale()),50 )}}</p>

                            <a class="btn" href="{{url('supplier/'.$product->user_id)}}"  target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
            </div>
        </div>
        <div class="suppliers col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12">
                    <h3>@lang('general.suppliers')</h3>
                    <a href="{{url('suppliers')}}" class="more">@lang('general.view_all')</a>
                </div>
                <div class="g-body col-xs-12">
@foreach(\App\Models\User::where('type','supplier')->get() as $supplier)
                    <div class="cardo col-md-2 col-sm-6 col-xs-12">
                        <div class="c-inner">
                            <div class="c-img">
                                <a href="{{url('supplier/'.$supplier->id)}}">
                                    <img src="{{ url('storage/'.$supplier->avatar)}}" alt="">
                                </a>
                            </div>
                            <div class="c-data">
            @if(!Auth::check() ||  \Auth::user()->canFollow($supplier) && \Auth::user()->id != $supplier->id)
                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})" class="btn ">
                        <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                        <span  style="color:white" >
                        Follow
                        </span>
                    </a>

            @elseif(Auth::check() && !\Auth::user()->canFollow($supplier) && \Auth::user()->id != $supplier->id)
                       <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}" onclick="followtoggle({{$supplier->id }})" class="btn following">
                        <i id="followicon_{{$supplier->id}}" class="fa fa-check"></i>
                        <span style="color:white"  >
                          following
                        </span >
                    </a>


                    @endif



                    <h3>
                    <a href="{{url('supplier/'.$supplier->id)}}" class="title">{{$supplier->name}}</a>
                </h3>

                <p>
@php $rating = $supplier->average_rating ; @endphp
                @foreach(range(1,5) as $i)
                        @if($rating >0)
                            @if($rating > 0.5)
                                        <i class="fa fa-star active"></i>
                            @elseif($rating < 0.5 && $rating > 0)
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
@endforeach






                </div>
            </div>
        </div>

        <div class="services col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12">
                    <h3>@lang('general.services')</h3>
                <a href="{{url('services')}}" class="more">@lang('general.view_all')</a>
                </div>
                <div class="g-body col-xs-12">


                @foreach (\App\Models\Service::limit(4)->get() as $service)

                    <div class="s-block col-md-2 col-sm-6 col-xs-12">
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
                                                            @elseif($rating < 0.5 && $rating > 0)
                                                                <i class="fas fa-star-half"></i>
                                                            @endif
                                                        @else
                                                            <i class="fa fa-star"></i>
                                                        @endif
                                                        @php $rating--; @endphp

                                                @endforeach
                            </p>
                            <a class="btn" href="{{url('supplier/'.$product->user_id)}}" target="_blank">@lang('general.contact_supplier')</a>
                        </div>
                    </div>

                @endforeach



                </div>
            </div>
        </div>
    </main>


@endsection

@push('scripts')

<script>

     function favtoggle(product_id, user_id){

             var token = '{{ Session::token() }}';

         $.ajax({

            type : 'POST',

            url  : '{!!URL::to('product_favorite')!!}',

            data : { product_id: product_id,_token: token ,user_id:user_id },

            success : function(result){


                if(result.class){
                    $(".fav-"+product_id).toggleClass(result.class);
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



             function followtoggle(follower_id){

             var token = '{{ Session::token() }}';



         $.ajax({



            type : 'POST',

            url  : '{!!URL::to('user_follow')!!}',

            data : { follower_id: follower_id,_token: token },

            success : function(result){

            if(result.class){
            $("#followtoggle_"+follower_id).toggleClass(result.class);
            $("#followicon_"+follower_id).toggleClass(result.icon);
            $("#followicon_"+follower_id).addClass(result.icon).removeClass(result.old_icon)
            $("#followtoggle_"+follower_id+ " span").text(result.but_status);

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
