@extends('layouts.main')
@php
$menu = false ;
@endphp



@section('content')
 <div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url(https://businessdotkom.com/web/images/cover.jpg)">
            <div class="container">
                <h3>Client</h3>
                <ul>
                    <li>
                        <a href="https://businessdotkom.com">الرئيسية</a>
                    </li>
                    <li>Client</li>
                </ul>
            </div>
        </div>
        
  
        
                <main class="main-content col-xs-12">

                <div class="container">
         
         
                      <div class="form-group col-md-12 col-xs-12" style="text-align: center;margin-top: 15px;">
                            <button  onclick="window.location='{{ url('client/new') }}'"  type="submit" class="btn">Add Client <i class="fa fa-plus"></i></button>
                        </div>
                                                        @foreach(\App\Models\Client::where('user_id',\Auth::id())->get() as $service)
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="#">

                                <img style="object-fit: contain;" src="{{ url('storage/'.$service->image)}}" alt="">


                                </a>
                            </div>
                            <div class="s-data" style="text-align: center;">
                                <a href="#" class="title">{{$service->name}}</a>
                              
                              
                            </div>
                        </div>
                        @endforeach
                    
                    

            </div>

        </main>

@endsection


