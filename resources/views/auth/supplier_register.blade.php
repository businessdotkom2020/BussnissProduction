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

                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Step 1</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Step 2</p>
                        </div>
                  
                    </div>
                </div>
                <div class=" setup-content" id="step-1">
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
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                <div class=" setup-content" id="step-2">
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
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
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

$(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
            $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-default');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');
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
