@extends('layouts.main')
@php
$menu = false ;
@endphp
@section('title', trans('general.requests'))

@section('content')


<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{url('web/images/cover.jpg')}})">
    <div class="container">
        <h3>@lang('general.requests')</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>@lang('general.requests')</li>
        </ul>
    </div>
</div>



<main class="main-content col-xs-12">

    <div class="container">


        <div class="form-group col-md-12 col-xs-12" style="text-align: center;margin-top: 15px;margin-bottom: 15px;">
            <button onclick="window.location='{{ url('request/new') }}'" type="submit" class="btn">Add Request <i class="fa fa-plus"></i></button>
        </div>
        <div class="g-body col-xs-12">


            <div class="latest- -slider ">

                @foreach(\App\Models\Request::where('user_id',\Auth::id())->get() as $request)
                <div class="col-md-3">
                    <div class="request-grid">
                        <div class="request-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="{{ url('storage/'.(json_decode($request->images))[0])}}">
                                <img class="pic-2" src="{{ url('storage/'.(json_decode($request->images))[0])}}">
                            </a>

                            <ul class="social">
                                <li><a href="#" data-tip="Quick View" data-toggle="modal" data-target="#contact_{{$request->user_id}}" target="_blank"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="request-content">
                            <h3 class="title"><a href="{{url('request/'.$request->id)}}">
                                    {{$request->getTranslatedAttribute('name',\App::getLocale())}}</a>
                            </h3>
                            <div class="request-de">
                                <a class="add-to-cart" href="{{url('request/'.$request->id)}}" data-tip="add-to-cart" data-toggle="modal" data-target="#contact_{{$request->user_id}}" target="_blank">
                                    @lang('general.contact_supplier')

                                </a>
                                <ul class="rating list-inline">

                                    @php $rating = $request->average_rating ; @endphp
                                    @foreach(range(1,5) as $i)
                                    @if($rating >0)
                                    @if($rating > 0.5)
                                    <i class="fa fa-star"></i>
                                    @elseif($rating < 0.5 && $rating> 0)
                                        <i class="fas fa-star-half"></i>
                                        @endif
                                        @else
                                        <i class="fa fa-star disable"></i>
                                        @endif
                                        @php $rating--; @endphp

                                        @endforeach



                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>

</main>

@endsection