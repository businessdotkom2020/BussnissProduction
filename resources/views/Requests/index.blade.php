@extends('layouts.main')
@php
$menu = false ;
@endphp

@section('content')

<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('web/images/cover.jpg')}})">
    <div class="container">
        <h3>Requests</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>Requests</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="reqs-wrap col-xs-12">
        <div class="container">

            <!--
            <div class="g-body col-xs-12">
                @foreach($requests as $request)

                <div class="block col-md-4 col-xs-12">
                    <div class="inner col-xs-12">
                        <div class="i-top col-xs-12">
                            <span
                                class="type-badge">{{$request->category ? $request->category->getTranslatedAttribute('name',\App::getLocale()) : null}}</span>
                            <div class="i-slider owl-carousel owl-theme">
                                @foreach(json_decode($request->images) as $img)

                                <div class="item">
                                    <img src="{{ url('storage/'.$img)}}" alt="">
                                </div>


                                @endforeach
                            </div>
                        </div>
                        <div class="i-middle col-xs-12">
                            <div class="inline" style="display:flex">
                                <div class="author" style="flex-grow: 1;">
                                    <a href="{{url('request/'.$request->id)}}">{{$request->name}}</a>
                                </div>
                                <div class="author" style="flex-grow: 1; text-align: end;">
                                    <img style="width: 30px;height: 30px;"
                                        src="{{ url('storage/'.$request->user->avatar) }}" alt="">
                                    <a href="{{url('request/'.$request->id)}}">{{$request->user->name}}</a>
                                </div>
                            </div>
                            <div class="inline" style="display:flex">

                                <div class="time" style="flex-grow: 1;">
                                    <span>{{$request->created_at }}</span>
                                </div>
                                <div class="cardo" style="flex-grow: 1;">
                                    <div class="c-inner" style="text-align: right;">
                                        <div class="c-data">
                                            <p>
                                                @php $rating = $request->average_rating ; @endphp
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

                            </div>
                        </div>
                        <div class="i-footer col-xs-12">
                            <div class="title">


                                <a href="{{url('request/'.$request->id)}}">{{ Str::limit($request->description,50)}}</a>
                            </div>
                            <div class="extra">
                                <div class="prod-extra">
                                    <a href="javascript:void(0)" id="fav-{{$request->id}}" title="add to favourite"
                                        data-placement="top"
                                        class="fav-{{$request->id}} {{$request->isFavorited() ? 'fav-active' : null  }}"
                                        onclick="favtoggle({{$request->id }},{{Auth::user() ? Auth::user()->id : null}})">
                                        <i class="fa fa-heart"></i>
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
                                <a class="btn" href="{{url('supplier/'.$request->user_id)}}"
                                    target="_blank">@lang('general.contact_supplier')</a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach






            </div>
-->

            <!-- pagination Here
            {{ $requests->links('vendor.pagination.default') }}-->





            <div class="g-body col-xs-12">

                @foreach($requests as $request)

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="request-grid">
                        <div class="request-image">
                            <a href="{{url('request/'.$request->id)}}" class="image">

                                @foreach (json_decode($request->images) as $image)
                                <img class="pic-{{$loop->iteratio}}" src="{{url('storage/'.$image)}}">
                                @endforeach

                                @if ($loop->iteration == 2 )
                                @break

                                @endif

                            </a>

                            <ul class="social">
                                <li><a href="{{url('request/'.$request->id)}}" data-tip="Quick View" data-toggle="modal"
                                        data-target="#contact_{{$request->user_id}}" target="_blank"><i
                                            class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="request-content">
                            <h3 class="title"><a href="{{url('request/'.$request->id)}}">{{$request->name}}</a></h3>
                            <div class="request-de">
                                <a class="add-to-cart" href="#" data-tip="add-to-cart" data-toggle="modal"
                                    data-target="#contact_{{$request->user_id}}" target="_blank">
                                    @lang('general.contact_supplier')
                                </a>
                                <ul class="rating list-inline">
                                    @php $rating = $request->average_rating ; @endphp
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
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                @endforeach






                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="i-pagination text-center">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="current">
                                1
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>




            @foreach($requests as $request)

            <div class="modal fade" id="contact_{{$request->user->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <div class="modal-body">

                            <div class="supp-card">
                                <h3>@lang('general.contact_supplier')</h3>
                                <div class="c-img">
                                    <img src="{{$request->user->store_image ? url('storage/'.$request->user->avatar) : asset('/web/images/marks/1.png')}}"
                                        alt="">
                                </div>
                                <h4>{{$request->user->name}}</h4>
                                <p>
                                    @php $rating = $request->user->average_rating ; @endphp
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
                                    <a href="tel:{{$request->user->mobile}}" class="btn">
                                        <i class="fa fa-phone"></i>
                                        {{$request->user->mobile}}
                                    </a>
                                    <a href="mailto:{{$request->user->email}}" class="btn">
                                        <i class="fa fa-envelope"></i>
                                        {{$request->user->email}}
                                    </a>
                                </div>
                                <div class="c-social">
                                    <!--<span>social:</span>-->
                                    @if($request->user->facebook_url)
                                    <a href="{{$request->user->facebook_url}}">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    @endif

                                    @if($request->user->whatsapp_mobile)

                                    <a href=" https://api.whatsapp.com/send?phone={{$request->user->whatsapp_mobile}}">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>

                                    @endif

                                    @if($request->user->linkedin_url)

                                    <a href="{{$request->user->linkedin_url}}">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    @endif

                                    @if($request->user->instagram_url)

                                    <a href="{{$request->user->instagram_url}}">
                                        <i class="fa fa-instagram"></i>
                                    </a>

                                    @endif

                                    @if($request->user->youtube_url)

                                    <a href="{{$request->user->youtube_url}}">
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




        </div>
    </div>
</main>



@endsection


@push('scripts')


<script>
    function favtoggle(request_id, user_id){

             var token = '{{ Session::token() }}';



         $.ajax({



            type : 'POST',

            url  : '{!!URL::to('request_favorite')!!}',

            data : { request_id: request_id,_token: token ,user_id:user_id },

            success : function(result){

            console.log(result);

            $(".fav-"+request_id).toggleClass(result.class);
                console.log(result.class);

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