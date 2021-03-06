@extends('layouts.main')
@php
$menu = false ;
@endphp

@section('content')

<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('web/images/cover.jpg')}})">
    <div class="container">
        <h3>Suppliers</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>Suppliers</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="reqs-wrap col-xs-12">
        <div class="container">



            <div class="suppliers col-xs-12">
                <div class="container">


                    <div class="g-body col-xs-12">
                        @foreach($suppliers as $supplier)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="h-supplier-box cardo text-center">
                                <span>
                                    <a href="{{url('supplier/'.$supplier->id)}}">
                                        <img src="{{ url('storage/'.$supplier->avatar)}}" alt="">
                                    </a>
                                </span>
                                <div class="c-inner">
                                    <!-- <div class="c-img">
                                <a href="{{url('supplier/'.$supplier->id)}}">
                                    <img src="{{ url('storage/'.$supplier->avatar)}}" alt="">
                                </a>
                            </div> -->
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
                                        @if(Auth::check())


                                        @if(\Auth::user()->canFollow($supplier) &&\Auth::user()->id != $supplier->id)
                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn c-inner-btn">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                            <span style="">
                                                Follow

                                            </span>

                                        </a>

                                        @elseif(!\Auth::user()->canFollow($supplier) && \Auth::user()->id !=
                                        $supplier->id)




                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn following">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-check"></i>
                                            <span style="">
                                                following

                                            </span>

                                        </a>

                                        @else

                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn ">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                            <span style="">
                                                Follow

                                            </span>

                                        </a>
                                        @endif



                                        @elseif(!Auth::check() )

                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn ">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                            <span style="">
                                                Follow

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




            <!-- pagination Here-->
            {{ $suppliers->links('vendor.pagination.default') }}



        </div>
    </div>
</main>



@endsection


@push('scripts')


<script>
    function followtoggle(follower_id) {

        var token = '{{ Session::token() }}';



        $.ajax({



            type: 'POST',

            url: '{!!URL::to('
            user_follow ')!!}',

            data: {
                follower_id: follower_id,
                _token: token
            },

            success: function (result) {

                console.log(result);

                $("#followtoggle_" + follower_id).toggleClass("following");
                $("#followicon_" + follower_id).toggleClass(result.icon);
                $("#followicon_" + follower_id).addClass(result.icon).removeClass(result.old_icon)

                $("#followtoggle_" + follower_id + " span").text(result.but_status);


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
