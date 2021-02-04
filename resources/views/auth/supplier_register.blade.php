@extends('layouts.main')
@php
$menu = false ;
@endphp
@section('title', trans('general.supplier_new_account'))


@push('styles')
<!-- <link rel="stylesheet" href="{{ asset('/web/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('/web/css/custom-register.css')}}"> -->
<link rel="stylesheet" href="{{ asset('/web/css/custom-register-supplier.css')}}">
<!-- <link rel="stylesheet" href="{{ asset('/web/css/custom-register.css')}}">   -->

@endpush



@section('content')

<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
    <div class="container">
        <h3>@lang('general.supplier_new_account')</h3>
        </h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>@lang('general.supplier_new_account')</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="sign-wrap sup-wrap col-xs-12">
        <div class="container">
            <form action="{{route('do.supplier.register')}}" method="post">
                @csrf

                <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                                </li>
                            </ul>
                        </div>
        
                        <form role="form" action="index.html" class="login-box">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="text-center">Step 1</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First and Last Name *</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number  *</label> 
                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address *</label> 
                                                <input class="form-control" type="email" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password *</label> 
                                                <input class="form-control" type="password" name="name" placeholder=""> 
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 class="text-center">Step 2</h4>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address 1 *</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City / Town *</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country *</label> 
                                            <select name="country" class="form-control" id="country">
                                                <option value="NG" selected="selected">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration No.</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                   </div>
                                    
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h4 class="text-center">Step 3</h4>
                                     <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Account Name *</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Demo</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Inout</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Information</label> 
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">Select file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number *</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Input Number</label> 
                                            <input class="form-control" type="text" name="name" placeholder=""> 
                                        </div>
                                    </div>
                                       </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <h4 class="text-center">Step 4</h4>
                                    <div class="all-info-container">
                                        <div class="list-content">
                                            <a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Collapse 1 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listone">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>First and Last Name *</label> 
                                                                <input class="form-control" type="text"  name="name" placeholder="" disabled="disabled"> 
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone Number *</label> 
                                                                <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Collapse 2 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listtwo">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Address 1 *</label> 
                                                                <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>City / Town *</label> 
                                                                <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Country *</label> 
                                                                <select name="country2" class="form-control" id="country2" disabled="disabled">
                                                                    <option value="NG" selected="selected">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Legal Form</label> 
                                                                <select name="legalform2" class="form-control" id="legalform2" disabled="disabled">
                                                                    <option value="" selected="selected">-Select an Answer-</option>
                                                                    <option value="AG">Limited liability company</option>
                                                                    <option value="GmbH">Public Company</option>
                                                                    <option value="GbR">No minimum capital, unlimited liability of partners, non-busines</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Business Registration No.</label> 
                                                                <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Registered</label> 
                                                                <select name="vat2" class="form-control" id="vat2" disabled="disabled">
                                                                    <option value="" selected="selected">-Select an Answer-</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Seller</label> 
                                                                <input class="form-control" type="text" name="name" placeholder="" disabled="disabled"> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Company Name *</label> 
                                                                <input class="form-control" type="password" name="name" placeholder="" disabled="disabled"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Collapse 3 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listthree">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Name *</label> 
                                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Number *</label> 
                                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Finish</button></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

                <div class="ito-h col-xs-12">
                    <h4>@lang('general.background_image')</h4>
                    <div class="form-group col-xs-12">

                        <div class="prof-img">
                            <label>
                                <i class="fa fa-camera"></i>
                                <span> @lang('general.cheange')</span>
                                <input name="store_background" type="file"
                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <img src="{{ asset('/web/images/cover.jpg')}}" id="blah" alt="your image">
                            </label>
                            @error('store_background')
                            <div class="alert" style="color:#a94442">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="prof-img pic">
                            <label>
                                <i class="fa fa-camera"></i>
                                <span>@lang('general.cheange_profile_image')</span>
                                <input name="store_image" type="file"
                                    onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                <img src="{{ url('storage/users/default_company.png')}}" id="blah1" alt="your image">
                            </label>
                            @error('store_image')
                            <div class="alert" style="color:#a94442">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <br>
                <div class="ito-h col-xs-12">

                    <h4 style="text-align: center;">@lang('general.main_information')</h4>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4 style="font-size:15px">@lang('general.supplier_name')</h4>
                        <input type="text" required name="supplier_name" placeholder="@lang('general.supplier_name')"
                            class="form-control">
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <h4 style="font-size:15px">@lang('general.categories')</h4>

                        <select required name="category_ids[]" class="form-control select-nosearch"
                            placeholde="@lang('general.categories')" multiple>
                            <!-- <option selected disabled>@lang('general.categories')</option> -->
                            @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)
                            <option value="{{$category->id}}">
                                {{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                            @endforeach
                        </select>

                        @error('category_ids')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <input type="email" required name="email" placeholder="@lang('general.email')"
                            class="form-control">
                        @error('email')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <input type="text" required name="mobile" placeholder="@lang('general.mobile')"
                            class="form-control">
                        @error('mobile')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        <input type="text" required name="hot_number" placeholder="@lang('general.hot_line')"
                            class="form-control">
                        @error('hot_line')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <input type="password" required name="password" placeholder="@lang('general.password')"
                            class="form-control">
                        @error('password')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <input type="password" required name="password_confirmation"
                            placeholder="@lang('general.password_confirmation')" class="form-control">
                        @error('password_confirmation')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="ito-h col-xs-12">
                    <h4>@lang('general.localization_info')</h4>
                    </h4>
                    <div class="form-group col-md-4 col-xs-12">
                        <select required id="country" name="country_id" class="form-control">
                            <option selected disabled>@lang('general.country')</option>

                            @foreach (\App\Models\Country::get() as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach

                        </select>

                        @error('country_id')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group col-md-4 col-xs-12">
                        <select required name="state_id" id="state" class="form-control">
                            <option selected disabled>@lang('general.state')</option>
                        </select>

                        @error('state_id')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group col-md-4 col-xs-12">
                        <select required name="city_id" id="city" class="form-control">
                            <option selected disabled>@lang('general.city')</option>
                        </select>

                        @error('city_id')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        <input required type="text" name="street_nom" placeholder="@lang('general.street_num')"
                            class="form-control">
                        @error('street_nom')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <input required type="text" name="zip_code" placeholder="@lang('general.zip_code')"
                            class="form-control">
                        @error('zip_code')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <!--<input type="text" placeholder="@lang('general.map_location')" class="form-control">-->
                        <a href="#" class="btn btn-review" data-toggle="modal" onclick="initMap()"
                            data-target="#review-pop">@lang('general.map_location')</a>

                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <input required type="text" name="address" placeholder="@lang('general.address_spec')"
                            class="form-control">
                        @error('address_spec')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group col-md-12 col-xs-12">

                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        <button type="submit" class="btn">@lang('general.register')</button>
                    </div>

                </div>


                <div class="modal fade" id="review-pop">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-body">
                                <div class="rate-title">
                                    <h3>@lang('general.map_location')</h3>
                                </div>
                                <div class="rate-stars">

                                    <div class="col-md-8 col-xs-12 m10_b">

                                        <div id="pac-container">
                                            <input id="pac-input" type="text" placeholder="Enter a location">
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-xs-12 m10_b">

                                        <button id="current_location" onclick="getLocation()">
                                            @lang('general.current_location')<i class="fa fa-location-arrow"
                                                aria-hidden="true"></i></button>
                                    </div>

                                    <div class="col-md-6 col-xs-12 ">

                                        <div class="form-group">
                                            <label for="">Lat</label>
                                            <input type="text" oninput="initMap()" value="31.3540494"
                                                class="form-control input-sm" name="lat" id="lat">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 ">

                                        <div class="form-group">
                                            <label for="">Lng</label>
                                            <input type="text" oninput="initMap()" value="31.6841419"
                                                class="form-control input-sm" name="lng" id="lng">
                                        </div>
                                    </div>


                                </div>
                                <div class="rate-form">


                                    <div class="pac-card" id="pac-card">
                                        <div>
                                            <div id="title">
                                                Autocomplete search
                                            </div>
                                            <div id="type-selector" class="pac-controls">
                                                <input type="radio" name="type" id="changetype-all" checked="checked">
                                                <label for="changetype-all">All</label>

                                                <input type="radio" name="type" id="changetype-establishment">
                                                <label for="changetype-establishment">Establishments</label>

                                                <input type="radio" name="type" id="changetype-address">
                                                <label for="changetype-address">Addresses</label>

                                                <input type="radio" name="type" id="changetype-geocode">
                                                <label for="changetype-geocode">Geocodes</label>
                                            </div>
                                            <div id="strict-bounds-selector" class="pac-controls">
                                                <input type="checkbox" id="use-strict-bounds" value="">
                                                <label for="use-strict-bounds">Strict Bounds</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="map" style="width:100%;height:400px; "></div>
                                    <div id="infowindow-content">
                                        <img src="" width="16" height="16" id="place-icon">
                                        <span id="place-name" class="title"></span><br>
                                        <span id="place-address"></span>
                                    </div>

                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->




            </form>
        </div>
    </div>
</main>



@endsection


@push('scripts')
@parent

<script src="{{ asset('/web/js/select2.full.min.js')}}"></script>
<script src="{{ asset('/web/js/mapInput.js')}}"></script>



<script
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMap"
    async defer></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>-->

    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script>

    // ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});






    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }


    $('#country').change(function() {
        console.log('asa');
        var cid = $(this).val();
        if (cid) {
            $.ajax({
                type: "get",
                url: " /getStates/" + cid,
                success: function(res) {
                    if (res) {
                        $("#state").empty();
                        $("#city").empty();
                        $("#state").append('<option>Select State</option>');
                        $.each(res, function(key, value) {
                            $("#state").append('<option value="' + key + '">' + value + '</option>');
                        });
                        $('#state').niceSelect('update');

                    }
                }

            });
        }
    });
    $('#state').change(function() {
        var sid = $(this).val();
        if (sid) {
            $.ajax({
                type: "get",
                url: "/getCities/" + sid,
                success: function(res) {
                    if (res) {
                        $("#city").empty();
                        $("#city").append('<option>Select City</option>');
                        $.each(res, function(key, value) {
                            $("#city").append('<option value="' + key + '">' + value + '</option>');
                        });
                        $('#city').niceSelect('update');

                    }
                }

            });
        }
    });
</script>
@endpush
