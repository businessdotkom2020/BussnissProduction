@extends('layouts.main')
@php
$menu = false ;
@endphp
@section('content')

  <div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url({{ asset('web/images/cover.jpg')}})">
            <div class="container">
                <h3>services</h3>
                <ul>
                    <li>
                        <a href="{{url('/')}}">@lang('general.home')</a>
                    </li>
                    <li>services</li>
                </ul>
            </div>
        </div>
        <main class="main-content col-xs-12">
            <div class="service-wrap col-xs-12">
                <div class="container">
                    <ul class="nav-tabs col-xs-12">

                        <li class="active">
                            <a href="active" data-toggle="tab" data-target="#t11" aria-expanded="false">All</a>
                        </li>
                    
                    
                      @foreach(\App\Models\Category::has('services')->get() as $category)
                        <li >
                            <a href="#" data-toggle="tab" data-target="#t{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</a>
                        </li>
                      @endforeach    
                      
                    </ul>
                    <div class="tab-content col-xs-12">
                        
                        <div class="col-xs-12 tab-pane fade active in" id="t11">
                               
                            <div class="tab-content col-xs-12">
     
     
                            
                    
                    @foreach(\App\Models\Service::get() as $service)
                        <div class="s-block col-md-3 col-sm-6 col-xs-12">
                            <div class="s-img">
                                <a href="{{url('service/'.$service->id)}}">
                                @if(isset(json_decode($service->images)[0]))
                                <img src="{{ url('storage/'.json_decode($service->images)[0])}}" alt="">
                                @endif

                                </a>
                            </div>
                            <div class="s-data">
                                <a href="{{url('service/'.$service->id)}}" class="title">{{$service->name}}</a>
                                <p>



                                     
                                     
                                                @php $rating = $service->average_rating ; @endphp
                                                @foreach(range(1,5) as $i)
                                                        @if($rating >0)
                                                            @if($rating > 0.5)
                                                                        <i class="fa fa-star active"></i>
                                                            @elseif($rating < 0.5 && $rating > 0)
                                                                <i class="fas fa-star-half"></i>
                                                            @endif
                                                        @else
                                                            <i class="fa fa-star"></i>
                                                        @endif
                                                        @php $rating--; @endphp
                                    
                                                @endforeach
                                     
                                     


                                </p>
                                
                                @php
                                    $user = \App\Models\User::find($service->user_id);
                                @endphp

                                <a href="{{url('supplier/'.$service->user_id)}}" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
                               
                            </div>
                        </div>
                        @endforeach

                        </div>
                    </div>
                    
                    
                    @foreach(\App\Models\Category::has('services')->get() as $category)
                
                
                        <div class="col-xs-12 tab-pane" id="t{{$category->id}}">
                               
                            <div class="tab-content col-xs-12">
     
     
                            
                    
                    @foreach(\App\Models\Service::where('category_id',$category->id)->get() as $service)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="s-block">
                            <div class="s-img">
                                <a href="{{url('supplier/'.$service->user_id)}}">
                                @if(isset(json_decode($service->images)[0]))
                                <img src="{{ url('storage/'.json_decode($service->images)[0])}}" alt="">
                                @endif

                                </a>
                            </div>
                            <div class="s-data">
                                <a href="{{url('supplier/'.$service->user_id)}}" class="title">{{$service->name}}</a>
                                <p>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </p>
                                
                                @php
                                    $user = \App\Models\User::find($service->user_id);
                                @endphp

                                <a href="{{url('supplier/'.$service->user_id)}}" class="btn" data-toggle="modal" data-target="contact_pop">contact supplier</a>
                               
                            </div>
                            </div>
                        </div>
                        @endforeach

                              
                              
                       
                       
                        </div>
                    </div>
        @endforeach  

     
            </div>
            </div>
        </main>

@endsection


@push('scripts')



@endpush