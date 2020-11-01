@extends('layouts.main')
@php
$menu = false ;
@endphp



@section('content')
 <div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url(https://businessdotkom.com/web/images/cover.jpg)">
            <div class="container">
                <h3>Jobs</h3>
                <ul>
                    <li>
                        <a href="https://businessdotkom.com">الرئيسية</a>
                    </li>
                    <li>Jobs</li>
                </ul>
            </div>
        </div>
        
  
        
                <main class="main-content col-xs-12">

                <div class="container">
         
         
                      <div class="form-group col-md-12 col-xs-12" style="text-align: center;margin-top: 15px;">
                            <button  onclick="window.location='{{ url('job/new') }}'"  type="submit" class="btn">Add Job <i class="fa fa-plus"></i></button>
                        </div>
        
                       @foreach(\App\Models\Job::where('user_id',\Auth::id())->get() as $job)
                            <div class="block b-product col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                <a href="javascript:void(0)" class="fav-pro">
                                    <i class="fa fa-heart"></i>
                                </a>
                                
                                <a href="{{url('job/'.$job->id.'/delete')}}" style="left: auto;right: 10px;" class="fav-pro">
                                    <i class="fa fa-trash"></i>
                                </a>
                                
                                <a href="{{url('job/'.$job->id)}}" class="img-hold">
                                    <img src="https://i.imgur.com/Pro8rOd.jpg" alt="">
                                    <img src="https://i.imgur.com/Pro8rOd.jpg" class="sec-img" alt="">
   




                                </a>
                            </div>
                            <div class="i-data">
                                <a href="{{url('job/'.$job->id)}}" class="title">{{$job->title}}</a>
                                <p>{{$job->description}}</p>


                 
                            </div>
                        </div>
                    </div>
                           @endforeach
                    

            </div>

        </main>

@endsection


