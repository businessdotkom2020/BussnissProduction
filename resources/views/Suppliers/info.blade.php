
@extends('layouts.main')

@php
    $menu = false ;
@endphp

@section('content')


<main class="main-content col-xs-12">
            <div class="supp-prof col-xs-12">
                <div class="supp-cover col-xs-12" style="background-image: url({{ $supplier->store_background ? url('storage/'.$supplier->store_background) :  asset('/web/images/cover.jpg') }})"></div>
                <div class="supp-bottom col-xs-12">
                    <div class="supp-data">
                    <div class="supp-img">
                        <img src="{{$supplier->store_image ? url('storage/'.$supplier->store_image) : asset('/web/images/marks/1.png')}}" alt="">
                    </div>
                    <div class="supp-l">
                        <h3>{{$supplier->name}}</h3>
                        <p>
                            <span class="rating">
                                @for ($i = 0 ; $i < $supplier->average_rating; $i++)
                                    <i class="fa fa-star active"></i>
                                @endfor
                                                             @for ($i = 0 ; $i < (5 -  $supplier->average_rating  ); $i++)
                                    <i class="fa fa-star"></i>
                                @endfor   
                                

                                
                            </span>
                            <span>followers: {{$supplier->followers_count}}</span>
                        </p>
                    </div>
                </div>
                    <div class="supp-btns">
                    <a href="{{url('supplier/'.$supplier->id.'/info')}}" class="btn btn-gray">
                        <i class="fa fa-exclamation-triangle"></i>
                        about
                    </a>
                    <a href="#" data-toggle="modal" data-target="#contact-pop" class="btn">@lang('general.contact_supplier')</a>
                    @if(Auth::check())
                        <a href="#" class="btn btn-review" data-toggle="modal" data-target="#review-pop">@lang('general.add_review')</a>
                    @endif
                    
                    
                    @if($supplier->is_followed)
                    <a href="javascript:void(0)" id="followtoggle" onclick="followtoggle({{$supplier->id }})" class="btn following">
                        <i class="fa fa-check"></i>
                        following
                        
                    </a>
                    @else
                                        <a href="javascript:void(0)" id="followtoggle" onclick="followtoggle({{$supplier->id }})" class="btn following">
                        <i class="fa fa-check"></i>
                        follow
                        
                    </a>
                    
                    @endif
                </div>
                </div>
            </div>
            
          
             <div class="supp-prof-about col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12">
                        <h3>about</h3>
                    </div>
                    <ul class="nav-tabs col-md-3 col-xs-12">
                        <li class="active">
                            <a href="#" data-toggle="tab" data-target="#t1">main information</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#t2">place information</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#t3">other branches</a>
                        </li>
                    </ul>
                    <div class="tab-content col-md-9 col-xs-12">
                        <div class="tab-pane fade active in" id="t1">
                            <div class="pr-item col-xs-12">
                                <h3>categories</h3>
                                <ul>
                                    @foreach($supplier->categories as $category)
                                        <li> {{$category->getTranslatedAttribute('name',\App::getLocale())}} </li></li>
                                    @endforeach
                                  
                                </ul>
                            </div>
                            <div class="pr-item col-md-6 col-xs-12">
                                <h3>working times</h3>
                                <p>
                                    <span>from</span>{{$supplier->working_from}}  <span>to</span> {{$supplier->working_to}} 
                                </p>
                            </div>
                            <div class="pr-item col-md-6 col-xs-12">
                                <h3>delivery time & fee</h3>
                                <p>
                                    <span>time:</span>{{$supplier->delivery_time}} 
                                </p>
                                <p>
                                    <span>fee:</span>{{$supplier->delivery_fee}}L.E
                                </p>
                            </div>
                            <div class="pr-item col-xs-12">
                                <h3>description</h3>
                                <p> {{$supplier->description}}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t2">
                            <div class="pr-item col-md-3 col-sm-6 col-xs-12">
                                <h3>country</h3>
                                <p>{{$supplier->country ? $supplier->country->name : 'egypt' }}</p>
                            </div>
                            <div class="pr-item col-md-3 col-sm-6 col-xs-12">
                                <h3>city</h3>
                                <p>{{$supplier->city ? $supplier->city->name : 'egypt' }}</p>
                            </div>
                            <div class="pr-item col-md-3 col-sm-6 col-xs-12">
                                <h3>state</h3>
                                <p>{{$supplier->state ? $supplier->state->name : 'egypt' }}</p>
                            </div>
                            <div class="pr-item col-md-3 col-sm-6 col-xs-12">
                                <h3>street.no</h3>
                                <p>{{$supplier->street_nom}}</p>
                            </div>
                            <div class="pr-item col-md-3 col-sm-6 col-xs-12">
                                <h3>zip code</h3>
                                <p>{{$supplier->zip_code}}</p>
                            </div>
                            <div class="pr-item col-md-3 col-sm-6 col-xs-12">
                                <h3>address</h3>
                                <p>{{$supplier->address}}</p>
                            </div>
                            <div class="pr-item col-md-6 col-sm-6 col-xs-12">
                                <h3>location on map</h3>
                                <div class="map-i">
                                    <iframe src="https://maps.google.com/maps?q={{$supplier->lat}}, {{$supplier->lang}}&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe>

                                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14948656.71013136!2d54.110489326947274!3d23.833728990767888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2seg!4v1577313318620!5m2!1sar!2seg"></iframe>-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t3">
                            
                            @foreach($supplier->branchs as $branch)
                            <div class="branch-o col-xs-12">
                                <h4>{{$branch->name}}
                                    <a href="#" data-target="#contact-pop" data-toggle="modal" class="btn">contact supplier</a>
                                </h4>
                                <div class="pr-item col-xs-12">
                                <h3>working times</h3>
                                <p>
                                    <span>from</span>{{$branch->work_from}}<span>to</span>{{$branch->work_to}}
                                </p>
                            </div>
                            <div class="pr-item col-md-6 col-xs-12">
                                <h3>delivery time & fee</h3>
                                <p>
                                    <span>time:</span>1 hour
                                </p>
                                <p>
                                    <span>fee:</span>{{$branch->delivery_fee}}L.E
                                </p>
                                <p>
                                    <span>from</span>{{$branch->delivery_from}}<span>to</span>{{$branch->delivery_to}}
                                </p>
                            </div>
                                <div class="pr-item col-md-6 col-xs-12">
                                <h3>address</h3>
                                <p>{{$branch->address}}</p>
                            </div>
                            <div class="pr-item col-xs-12">
                                <h3>location on map</h3>
                                <div class="map-i">
                                    <iframe src="https://maps.google.com/maps?q={{$branch->lat}}, {{$branch->lang}}&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe>
                                </div>
                            </div>
                            </div>
                            
                            @endforeach
                          
                          
                        </div>
                    </div>
                </div>
            </div>   
          
          
       
        </main>

    <div class="modal fade" id="contact-pop">
  <div class="modal-dialog">
    <div class="modal-content">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-close"></i>
          </button>
      <div class="modal-body">
          
          <div class="supp-card">
              <h3>@lang('general.contact_supplier')</h3>
            <div class="c-img">
                <img src="{{$supplier->store_image ? url('storage/'.$supplier->store_image) : asset('/web/images/marks/1.png')}}" alt="">
              </div>
              <h4>{{$supplier->name}}</h4>
              <p>
                <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
              </p>
              <div class="c-info">
                <a href="tel:{{$supplier->mobile}}" class="btn">
                    <i class="fa fa-phone"></i>
                    {{$supplier->mobile}}
                  </a>
                  <a href="mailto:{{$supplier->email}}" class="btn">
                    <i class="fa fa-envelope"></i>
                    {{$supplier->email}}
                  </a>
              </div>
              <div class="c-social">
                <!--<span>social:</span>-->
                  <a href="{{$supplier->facebook_url}}">
                    <i class="fa fa-facebook"></i>
                    </a>
                  <a href=" https://api.whatsapp.com/send?phone={{$supplier->whatsapp_mobile}}">
                    <i class="fa fa-whatsapp"></i>
                    </a>
                  <a href="{{$supplier->linkedin_url}}">
                    <i class="fa fa-linkedin"></i>
                    </a>
                  <a href="{{$supplier->instagram_url}}">
                    <i class="fa fa-instagram"></i>
                    </a>
                  <a href="{{$supplier->youtube_url}}">
                    <i class="fa fa-youtube-play"></i>
                    </a>
              </div>
          </div>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    


<div class="modal fade" id="review-pop">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
          <div class="rate-title">
                                <h3>@lang('general.add_review')</h3>
                            </div>
                            <div class="rate-stars">
                                <div class="stars">
<form action="">
  <input class="star star-5" id="star-5" type="radio"  required name="star"/>
  <label class="star star-5" for="star-5"></label>
  <input class="star star-4" id="star-4" type="radio" name="star"/>
  <label class="star star-4" for="star-4"></label>
  <input class="star star-3" id="star-3" type="radio" name="star"/>
  <label class="star star-3" for="star-3"></label>
  <input class="star star-2" id="star-2" type="radio" name="star"/>
  <label class="star star-2" for="star-2"></label>
  <input class="star star-1" id="star-1" type="radio" name="star"/>
  <label class="star star-1" for="star-1"></label>
</form>
</div>
                            </div>
                            <div class="rate-form">
                                <form action="{{route('add_product_review',['type' => 'supplier','id' => $supplier->id])}}" method="POST">
                                        @csrf
 <input type="hidden"  name="stars" value="5">

                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" required placeholder="@lang('general.add_your_review')"></textarea>
                                        <button type="submit" class="btn">@lang('general.add_review')</button>
                                    </div>
                                </form>
                            </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection


@push('scripts')
    <script src="{{ asset('/web/js/rangeSlider.min.js')}}"></script>

<script>
    
            //see docs on: http://ionden.com/a/plugins/ion.rangeSlider/index.html
        $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 1000,
        to: 500,
        skin: "round"
    });
        
        $('.op-filter').click(function () {
           $('.cat-sidebar .widget').slideToggle(); 
        });
        
        
        
             function followtoggle(follower_id){

             var token = '{{ Session::token() }}';


        
         $.ajax({



            type : 'POST',

            url  : '{!!URL::to('user_follow')!!}',

            data : { follower_id: follower_id,_token: token },

            success : function(result){

                console.log(result);

  $("#followtoggle").toggleClass("following");
$("#followtoggle").text(result.but_status);


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