@extends('layouts.main')
@php
$menu = false ;
@endphp



@section('content')
 <div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url(https://businessdotkom.com/web/images/cover.jpg)">
            <div class="container">
                <h3>Service</h3>
                <ul>
                    <li>
                        <a href="https://businessdotkom.com">الرئيسية</a>
                    </li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
        
  
        
                <main class="main-content col-xs-12">

                <div class="container">
         
         
                      <div class="form-group col-md-12 col-xs-12" style="text-align: center;margin-top: 15px;">
                            <button  onclick="window.location='{{ url('service/new') }}'"  type="submit" class="btn">Add Service <i class="fa fa-plus"></i></button>
                        </div>
        
                       @foreach(\App\Models\Service::where('user_id',\Auth::id())->get() as $service)
                            <div class="block b-product col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                <a href="javascript:void(0)" class="fav-pro">
                                    <i class="fa fa-heart"></i>
                                </a>
                                
                                <a href="{{url('service/'.$service->id.'/delete')}}" style="left: auto;right: 10px;" class="fav-pro">
                                    <i class="fa fa-trash"></i>
                                </a>
                                
                                <a href="{{url('service/'.$service->id)}}" class="img-hold">
                @if(isset(json_decode($service->images)[0]))
                                    <img src="{{ url('storage/'.json_decode($service->images)[0])}}" alt="">
                @endif

                                @if(isset(json_decode($service->images)[1]))
                                    <img src="{{ url('storage/'.json_decode($service->images)[1])}}" class="sec-img" alt="">
                                @endif

                                </a>
                            </div>
                            <div class="i-data">
                                <a href="{{url('service/'.$service->id)}}" class="title">{{$service->name}}</a>
                                <p>{{str_limit($service->description, 110)}}</p>
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


