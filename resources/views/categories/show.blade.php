


@extends('layouts.main')
@php
$menu = false ;
@endphp

@push('styles')

<style>
    
   @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);



/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: right;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
 direction: initial;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
/****** Style Star Rating Widget *****/

.rating-supplier { 
  border: none;
  float: right;
}

.rating-supplier > input { display: none; } 
.rating-supplier > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating-supplier > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating-supplier > label { 
  color: #ddd; 
 float: right; 
 direction: initial;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating-supplier > input:checked ~ label, /* show gold star when clicked */
.rating-supplier:not(:checked) > label:hover, /* hover current star */
.rating-supplier:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating-supplier > input:checked + label:hover, /* hover current star when changing rating */
.rating-supplier > input:checked ~ label:hover,
.rating-supplier > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating-supplier > input:checked ~ label:hover ~ label { color: #FFED85;  } 

.select2-container--default .select2-selection--single{
    display: none;
}
</style>

@endpush

@section('content')


          <div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
            <div class="container">
                <h3>{{$category ? $category->getTranslatedAttribute('name',\App::getLocale()) : $keyword}}</h3>
                <ul>
                    <li>
                        <a href="{{url('/')}}">@lang('general.home')</a>
                    </li>
                    <li>{{$category ? $category->getTranslatedAttribute('name',\App::getLocale()) : $keyword}}</li>
                </ul>
            </div>
        </div>
        <main class="main-content col-xs-12">
            <div class="category-wrap col-xs-12">
                <div class="container">
                    <div class="cat-sidebar col-md-3 col-xs-12">
                        <button type="button" class="op-filter">
                            <i class="fa fa-filter"></i>
                            advanced filter
                        </button>
                        <div class="widget col-xs-12">
                            <div class="cat-head col-xs-12">
                            <h3>@lang('general.filter_options')</h3>
                        </div>
                        <form method="GET"  action="{{url('search')}}">
                            
                        <div class="form-group">
                            <h4>@lang('general.search')</h4>
                            <input type="text" value="{{request()->keyword}}" name="keyword"  class="form-control">
                        </div>

                        <div class="form-group ">
                        <h4>@lang('general.categories')</h4>

                            <select  name="category_ids[]" class="form-control select-nosearch" multiple>
                                <!--<option selected disabled>@lang('general.categories')</option>-->
                                @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)
                                <option value="{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                        <h4>@lang('general.brands')</h4>

                            <select  name="brand_ids[]" class="form-control select-nosearch" multiple>
                                <!--<option selected disabled>@lang('general.categories')</option>-->
                                @foreach(\App\Models\Brand::get() as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                      
                        <div class="form-group">
                            <h4>@lang('general.prices')</h4>
                                <input type="text" class="js-range-slider" name="my_range" value="" />
                        </div>
                            
                        <div class="cat-head col-xs-12">
                            <h3>@lang('general.sort_by')</h3>
                        </div>

                        <div class="form-group">
                            <h4>@lang('general.condition')</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input type="radio" name="product_condition">
                                        <span>@lang('general.new')</span>
                                    </label>
                                    </li>
                                <li>
                                    <label>
                                        <input type="radio" name="product_condition">
                                        <span>@lang('general.used')</span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <h1>@lang('general.rating') </h1>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>
                            
                        <div class="form-group">
                            <h1> @lang('general.supplier_rating') </h1>
                            <fieldset class="rating-supplier">
                                <input type="radio" id="star10" name="saller_rating" value="5" /><label class = "full" for="star10" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star9half" name="saller_rating" value="4 and a half" /><label class="half" for="star9half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star9" name="saller_rating" value="4" /><label class = "full" for="star9" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star8half" name="saller_rating" value="3 and a half" /><label class="half" for="star8half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star8" name="saller_rating" value="3" /><label class = "full" for="star8" title="Meh - 3 stars"></label>
                                <input type="radio" id="star7half" name="saller_rating" value="2 and a half" /><label class="half" for="star7half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star7" name="saller_rating" value="2" /><label class = "full" for="star7" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star6half" name="saller_rating" value="1 and a half" /><label class="half" for="star6half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star6" name="saller_rating" value="1" /><label class = "full" for="star6" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="star5half" name="saller_rating" value="half" /><label class="half" for="star5half" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>
                            
                         <div class="form-check">
                            <input type="checkbox" name="has_discount" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">@lang('general.only_with_discount')</label>
                         </div>
                            
                            <hr>
                        <!--<div class="form-group">-->
                        <!--    <h4>material</h4>-->
                        <!--    <ul>-->
                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>popularity</span>-->
                        <!--            </label>-->
                        <!--        </li>-->

                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>low to high price</span>-->
                        <!--            </label>-->
                        <!--        </li>-->
                                
                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>high to low price</span>-->
                        <!--            </label>-->
                        <!--        </li>-->

                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>most rated</span>-->
                        <!--            </label>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                            
                        <button  type="submit" class="btn">@lang('general.filter')</button>

                </form>    
                            
                        </div>
                        

                        
                    </div>
                    <div class="cat-box col-md-9 col-xs-12">
                        <div class="box-filter col-xs-12">
                            <h4>@lang('general.view_options') :</h4>
                            <ul class="nav-tabs">
                                <li class="active">
                                    <a href="#" data-toggle="tab" data-target="#product_view">@lang('general.products')</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="tab" data-target="#suppliers_view">@lang('general.suppliers')</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content col-xs-12">
                            <div class="tab-pane fade active in" id="product_view">
                                
                   
                 
                @foreach($products as $product)
                    <div class="block b-product col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                @if($product->product_condition == "new")
                                <div class="ribbon">
                                    <span>new</span>
                                </div>
                                @endif
                                <div class="offer-badge">
                                    <span>{{number_format((($product->sale_price/$product->price) * 100) ,2) }} %</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-pro">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="{{url('product/'.$product->id)}}" class="img-hold">

                                    <img src="{{ $product->image ? url('storage/'.$product->image) : "https://i.imgur.com/mFI2maG.jpg" }}" alt="">

                                      @if($product->images)
                                    <img src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : "https://i.imgur.com/mFI2maG.jpg" }}" alt="" class="sec-img">
                                @endif
                                </a>
                            </div>
                            <div class="i-data">
                                <a href="{{url('product/'.$product->id)}}" class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                 <span>{{$product->price}} $</span>
                                <a class="btn" href="{{url('supplier/'.$product->user_id)}}" data-toggle="modal" data-target="#contact_pop">contact supplier</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                                <div class="pagination-i col-xs-12">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="suppliers_view">
                          
                        @foreach($suppliers as $supplier)
                                
                                <div class="sup-v col-xs-12">
                                    <div class="cardo col-xs-12">
                            <div class="c-inner col-md-6 col-xs-12">
                                <div class="c-img">
                                    <a href="#">
                                        <img src="images/marks/1.png" alt="">
                                    </a>
                                </div>
                                <div class="c-data">
                                    <a href="#" class="btn">
                                        <i class="fa fa-check"></i>
                                        follow
                                    </a>
                                    <h3>
                                        <a href="#" class="title">addidas</a>
                                    </h3>
                                    <p>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </p>
                                </div>
                            </div>
                                        <a href="#" class="btn btn-border">view all supplier products</a>
                        </div>
                                    <div class="block b-product col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                <div class="ribbon">
                                    <span>new</span>
                                </div>
                                <div class="offer-badge">
                                    <span>50%</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-pro">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="img-hold">
                                    <img src="images/stocks/1.png" alt="">
                                    <img src="images/stocks/11.png" alt="" class="sec-img">
                                </a>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">men t-shirt</a>
                                <p>men shirts</p>
                                <span>250 l.e</span>
                                <a class="btn" href="#" data-toggle="modal" data-target="#contact_pop">contact supplier</a>
                            </div>
                        </div>
                    </div>
                                    <div class="block b-product col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                <div class="ribbon">
                                    <span>new</span>
                                </div>
                                <div class="offer-badge">
                                    <span>50%</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-pro">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="img-hold">
                                    <img src="images/stocks/2.png" alt="">
                                    <img src="images/stocks/22.png" alt="" class="sec-img">
                                </a>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">men t-shirt</a>
                                <p>men shirts</p>
                                <span>250 l.e</span>
                                <a class="btn" href="#" data-toggle="modal" data-target="#contact_pop">contact supplier</a>
                            </div>
                        </div>
                    </div>
                                    <div class="block b-product col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="i-img">
                                <div class="ribbon">
                                    <span>new</span>
                                </div>
                                <div class="offer-badge">
                                    <span>50%</span>
                                </div>
                                <a href="javascript:void(0)" class="fav-pro">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="img-hold">
                                    <img src="images/stocks/3.png" alt="">
                                    <img src="images/stocks/33.png" alt="" class="sec-img">
                                </a>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">men t-shirt</a>
                                <p>men shirts</p>
                                <span>250 l.e</span>
                                <a class="btn" href="#" data-toggle="modal" data-target="#contact_pop">contact supplier</a>
                            </div>
                        </div>
                    </div>
                                </div>

@endforeach

                                
                                <div class="pagination-i col-xs-12">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li> 
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
  

@endsection


@push('scripts')


    <script src="{{ asset('/web/js/select2.full.min.js')}}"></script>


    <script>
        
        //see docs on: http://ionden.com/a/plugins/ion.rangeSlider/index.html
        $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 100000,
        to: 500,
        skin: "round"
    });
        
        $('.op-filter').click(function () {
           $('.cat-sidebar .widget').slideToggle(); 
        });
    </script>




<script>



   $('#category').change(function(){

   var cid = $(this).val();
   if(cid){
   $.ajax({
     type:"get",
     url:" /getSub/"+cid, 
     success:function(res)
     {       
          if(res)
          {
              $("#subcategory").empty();
              $("#subsubcategory").empty();
              $("#subcategory").append('<option>Select State</option>');
              $.each(res,function(key,value){
                  $("#subcategory").append('<option value="'+key+'">'+value+'</option>');
              });


                      $('#subcategory').niceSelect('update');
   
          }
     }
   
   });
   }
   });
   $('#subcategory').change(function(){
   var sid = $(this).val();
   if(sid){
   $.ajax({
     type:"get",
     url:"/getSubSub/"+sid, 
     success:function(res)
     {       
          if(res)
          {
              $("#subsubcategory").empty();
              $("#subsubcategory").append('<option>Select City</option>');
              $.each(res,function(key,value){
                  $("#subsubcategory").append('<option value="'+key+'">'+value+'</option>');
              });


                                          $('#subsubcategory').niceSelect('update');
   
          }
          
     }
   
   });
   }
   }); 
</script>

@endpush