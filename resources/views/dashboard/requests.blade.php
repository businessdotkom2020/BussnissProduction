@extends('layouts.main')
@php
$menu = false ;
@endphp

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


        <div class="form-group col-md-12 col-xs-12" style="text-align: center;margin-top: 15px;">
            <button onclick="window.location='{{ url('request/new') }}'" type="submit" class="btn">Add Request <i
                    class="fa fa-plus"></i></button>
        </div>

        @foreach(\App\Models\Request::where('user_id',\Auth::id())->get() as $request)
        <div class="block b-product col-md-3 col-sm-6 col-xs-12">
            <div class="inner">
                <div class="i-img">
                    <a href="javascript:void(0)" class="fav-pro">
                        <i class="fa fa-heart"></i>
                    </a>

                    <a href="{{url('request/'.$request->id.'/delete')}}" style="left: auto;right: 10px;"
                        class="fav-pro">
                        <i class="fa fa-trash"></i>
                    </a>

                    <a href="{{url('request/'.$request->id)}}" class="img-hold">
                        @if(isset(json_decode($request->images)[0]))
                        <img src="{{ url('storage/'.json_decode($request->images)[0])}}" alt="">
                        @endif

                        @if(isset(json_decode($request->images)[1]))
                        <img src="{{ url('storage/'.json_decode($request->images)[1])}}" class="sec-img" alt="">
                        @endif

                    </a>
                </div>
                <div class="i-data">
                    <a href="{{url('request/'.$request->id)}}"
                        class="title">{{$request->getTranslatedAttribute('name',\App::getLocale())}}</a>
                    <p>{{str_limit($request->getTranslatedAttribute('description',\App::getLocale()), 110)}}</p>
                    <p>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                        <i class="fa fa-star active"></i>
                    </p>


                </div>
            </div>
        </div>
        @endforeach


    </div>

</main>

@endsection
