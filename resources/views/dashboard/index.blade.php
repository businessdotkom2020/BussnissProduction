@extends('layouts.main')
@php
$menu = false ;
@endphp



@section('content')



        <div class="jumpo col-xs-12" style="background-image: url({{asset('/web/images/cover.jpg')}})">
            <div class="container">
                <h3>dashboard</h3>
                <ul>
                    <li>
                        <a href="{{url('home')}}">home</a>
                    </li>
                    <li><a href="{{url('home')}}">dashboard</a></li>
                </ul>
            </div>
        </div>
        <main class="main-content col-xs-12">
            <div class="dashb col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="block col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <a href="{{url('dashboard/products')}}">
                                    <img src="{{asset('/web/images/dashboard/product.svg')}}" alt="">
                                    <h3>products</h3>
                                </a>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <a href="{{url('dashboard/requests')}}">
                                    <img src="{{asset('/web/images/dashboard/order.svg')}}" alt="">
                                    <h3>requests</h3>
                                </a>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <a href="{{url('dashboard/services')}}">
                                    <img src="{{asset('/web/images/dashboard/system.svg')}}" alt="">
                                    <h3>services</h3>
                                </a>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <a href="{{url('dashboard/jobs')}}">
                                    <img src="{{asset('/web/images/dashboard/ipad.svg')}}" alt="">
                                    <h3>jobs</h3>
                                </a>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <a href="{{url('dashboard/following')}}">
                                    <img src="{{asset('/web/images/dashboard/chat-group.svg')}}" alt="">
                                    <h3>following</h3>
                                </a>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <a href="{{url('dashboard/favourites')}}">
                                    <img src="{{asset('/web/images/dashboard/star.svg')}}" alt="">
                                    <h3>favourites</h3>
                                </a>
                            </div>
                        </div>
                        <div class="block col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <a href="{{url('dashboard/clients')}}">
                                    <img src="{{asset('/web/images/dashboard/customer-satisfaction.svg')}}" alt="">
                                    <h3>clients</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection


