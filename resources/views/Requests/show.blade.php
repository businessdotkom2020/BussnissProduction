@extends('layouts.main')
@php
$menu = false ;
@endphp
@section('content')


<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
    <div class="container">
        <h3>request page name</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>
                <a href="#">requests</a>
            </li>
            <li>request name</li>
        </ul>
    </div>
</div>


<main class="main-content col-xs-12">
    <div class="reqs-wrap reqs-single col-xs-12">
        <div class="container">


            <div class="g-body col-xs-12">
                <div class="block col-xs-12  col-md-8">
                    <div class="inner col-xs-12">
                        <div class="i-top col-xs-12">
                            <span
                                class="type-badge">{{$req->category->getTranslatedAttribute('name',\App::getLocale())}}</span>
                            <div class="i-slider owl-carousel owl-theme">

                                @foreach(json_decode($req->images) as $img)

                                <div class="item">
                                    <img src="{{ url('storage/'.$img)}}" alt="">
                                </div>


                                @endforeach

                            </div>
                        </div>
                        <div class="i-middle col-xs-12">
                            <div class="author">
                                <img src="{{url('storage/'.$req->user->avatar)}}" alt="">
                                <span>اسم التاجر يكتب هنا</span>
                            </div>
                            <div class="req-nname">
                                <a href="#">{{$req->name}}</a>
                            </div>
                            <div class="cardo">
                                <div class="c-inner" style="text-align: right;">
                                    <div class="c-data">
                                        <p>
                                            @php $rating = $req->average_rating ; @endphp
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
                                <a class="btn" href="{{url('supplier/'.$req->user_id)}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>


                            <div class="time">
                                <span>{{$req->created_at ? $req->created_at : null}}</span>
                            </div>
                        </div>
                        <div class="i-footer col-xs-12">
                            <div class="title">
                                <a href="{{$req->created_at ? $req->created_at : null}}">{{$req->description}}</a>
                            </div>
                            <div class="extra">
                                <div class="prod-extra">
                                    <a href="javascript:void(0)" id="fav-{{$req->id}}" title="add to favourite"
                                        data-placement="top"
                                        class="fav-{{$req->id}} {{$req->isFavorited() ? 'fav-active' : null  }}"
                                        onclick="favtoggle({{$req->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="op-social" data-tool="tooltip" title="share"
                                        data-placement="top">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
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
                                <a class="btn" href="{{url('supplier/'.$req->user_id)}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>




                    <div class="req-form col-md-12 col-xs-12">
                        <form action="{{route('add_product_review',['type' => 'request','id' => $req->id])}}"
                            method="POST">
                            @csrf

                            <div class="form-group">

                                <div class="rate-stars" style="text-align: right;">
                                    <div class="stars">

                                        <input value="1" class="star star-5" id="star-5" type="radio" required
                                            name="stars" />
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
                                    <p>
                                        برجاء اضافه تقييم قبل التعليق
                                    </p>
                                </div>

                                <textarea class="form-control" name="comment"
                                    placeholder="@lang('general.add_review')"></textarea>
                                <button type="submit" class="btn" id="req-f-btn">@lang('general.add_review')</button>
                            </div>
                        </form>
                    </div>





                </div>

                <div class="req-comments col-xs-12 col-md-4">
                    <div class="req-head col-xs-12">
                        <h3>comments</h3>
                    </div>
                    <div class="req-body col-xs-12">

                        @foreach($req->reviews as $review)
                        <div class="rev-item col-md-12 col-xs-12">

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
        </div>
    </div>
</main>



@endsection

@push('scripts')
<script> 
    $("#req-f-btn").click(function (e) {
        if ($('.stars input[value="Yes"]:checked')){
            e.preventDefault();
            e.stopPropagation();
            alert(' برجاء اضافه تقييم قبل التعليق');

        }//end if
    });
</script>

@endpush