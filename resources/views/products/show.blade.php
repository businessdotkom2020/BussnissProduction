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
            <li>{{Str::limit($product->getTranslatedAttribute('name',\App::getLocale()),35)}}</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="product-wrap col-xs-12">
        <div class="container">
            <div class="product-top col-xs-12">
                <div class="prod-img col-md-5 col-xs-12">
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
                                    <img src="{{ url('storage/'.$img)}}" alt="">
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
                <div class="prod-data col-md-7 col-xs-12">
                    <div class="name">
                        <h3>{{$product->getTranslatedAttribute('name',\App::getLocale())}}</h3>
                        <div class="prod-extra">

                            <a href="javascript:void(0)" id="fav-{{$product->id}}"
                                class="fav-{{$product->id}} fav-pro {{$product->isFavorited() ? 'fav-active' : null  }}"
                                onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                <i class="fa fa-heart"></i>
                            </a>

                            <a href="javascript:void(0)" class="op-social">
                                <i class="fa fa-share-alt"></i>
                            </a>
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
                    <div class="price">
                        @if($product->sale_price)
                        <span>{{$product->sale_price}} l.e</span>
                        @endif

                        <br>
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
            <div class="col-xs-6">
                <table class="table">


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
            <div class="product-middle col-xs-12">
                <ul class="nav-tabs">
                    <li class="active">
                        <a href="#" data-toggle="tab" data-target="#t1">@lang('general.pricing_plans')</a>
                    </li>

                    <li>
                        <a href="#" data-toggle="tab" data-target="#t2">@lang('general.reviews')</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="t1">
                        <ul>
                            @foreach($product->prices as $price)
                            <li>
                                @lang('general.from') {{$price->quantity_from}} @lang('general.to')
                                {{$price->quantity_to}}
                                <span>{{$price->price}} l.e</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="t2">

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

                        <div class="col-md-2 col-sm-3 col-xs-6">
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

                        <div class="col-md-2 col-sm-3 col-xs-6">
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
    function favtoggle(product_id, user_id){

             var token = '{{ Session::token() }}';



         $.ajax({



            type : 'POST',

            url  : '{!!URL::to('product_favorite')!!}',

            data : { product_id: product_id,_token: token ,user_id:user_id },

            success : function(result){

                console.log(result);

  $(".fav-"+product_id).toggleClass("fav-active");


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
