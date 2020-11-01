@extends('layouts.main')
@php
$menu = false ;
@endphp



@section('content')
 <div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url({{asset('/web/images/cover.jpg')}})">
            <div class="container">
                <h3>following</h3>
                <ul>
                    <li>
                        <a href="{{url('/')}}">home</a>
                    </li>
                    <li>following</li>
                </ul>
            </div>
        </div>
        <main class="main-content col-xs-12">
            <div class="following-wrap col-xs-12">
                <div class="container">
             
             
                        
                        @foreach(\Auth::user()->following()->get() as $follower)
                        
                    <div class="cardo col-md-3 col-sm-6 col-xs-12">
                            <div class="c-inner">
                                <div class="c-img">
                                    <a href="{{url('supplier/'.$follower->id)}}">
                                        <img src="{{url('storage/'.$follower->avatar)}}" alt="">
                                    </a>
                                </div>
                                <div class="c-data">
                                    <a href="#" class="btn following">
                                        <i class="fa fa-check"></i>
                                        following
                                    </a>
                                    <h3>
                                        <a href="{{url('supplier/'.$follower->id)}}" class="title">{{$follower->name}}</a>
                                    </h3>
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                   @endforeach
                   
                    
                    
                   
                   
                </div>
            </div>
        </main>

@endsection


