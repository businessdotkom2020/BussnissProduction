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
    <div class="sign-wrap sup-wrap suppliers-register-f col-xs-12">
        <div class="container">

            <!-- Multi step form -->
            <section class="multi_step_form">
                <form id="msform">
                    <!-- Tittle -->
                    <div class="tittle">
                        <h2>@lang('general.supplier_new_account')</h2>
                        <p>@lang('general.register_text')</p>
                    </div>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">@lang('general.register_procces_1')</li>
                        <li>@lang('general.register_procces_2')</li>
                        <li>@lang('general.register_procces_3')</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h3>@lang('general.background_image')</h3>
                        <div class="form-row">
                            <div class="form-group col-xs-12">

                                <div class="prof-img">
                                    <div class="prof-change-btn">
                                        <label>
                                            <span> @lang('general.cheange')</span>
                                        </label>
                                    </div>
                                    <label>
                                        <i class="fa fa-camera"></i>
                                        <input name="store_background" type="file"
                                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                                        <img src="{{ asset('/web/images/cover.jpg')}}" id="blah" alt="your image">
                                    </label>
                                    @error('store_background')
                                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="prof-img pic">
                                    <div class="prof-change-btn">
                                        <label>
                                            <span>@lang('general.cheange_profile_image')</span>
                                        </label>
                                    </div>
                                    <label>
                                        <i class="fa fa-camera"></i>

                                        <input name="store_image" type="file"
                                            onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="{{ url('storage/users/default_company.png')}}" id="blah1"
                                            alt="your image">
                                    </label>
                                    @error('store_image')
                                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <button type="button" class="next action-button next11">التالي</button>
                    </fieldset>
                    <fieldset>
                        <h3>@lang('general.main_information')</h3>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-xs-12">
                                <h4 style="font-size:15px">@lang('general.supplier_name')</h4>
                                <input type="text" required name="supplier_name"
                                    placeholder="@lang('general.supplier_name')" class="form-control">
                            </div>

                            <div class="form-group col-md-6 col-xs-12">
                                <h4 style="font-size:15px">@lang('general.categories')</h4>

                                <select required name="category_ids[]" class="form-control select-nosearch"
                                    placeholde="@lang('general.categories')" multiple>
                                    <!-- <option selected disabled>@lang('general.categories')</option> -->
                                    @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                                    </option>
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
                        <div class="clearfix"></div>
                        <button type="button" class="action-button previous previous_button">السابق</button>
                        <button type="button" class="next action-button">التالي</button>
                    </fieldset>
                    <fieldset>
                        <h3>@lang('general.localization_info')</h3>
                        <div class="form-row">
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

                            <div class="form-group col-md-12 col-xs-12">
                                <input required type="text" name="zip_code" placeholder="@lang('general.zip_code')"
                                    class="form-control">
                                @error('zip_code')
                                <div class="alert" style="color:#a94442">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input required type="text" name="address" placeholder="@lang('general.address_spec')"
                                    class="form-control">
                                @error('address_spec')
                                <div class="alert" style="color:#a94442">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <!--<input type="text" placeholder="@lang('general.map_location')" class="form-control">-->
                                <!--<a href="#" class="btn btn-review" data-toggle="modal" onclick="initMap()"
                                data-target="#review-pop">@lang('general.map_location')</a>-->

                            </div>
                            <div class="form-group col-md-12 col-xs-12 map-location-block">
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

                                        <button id="current_location" type="button" onclick="getLocation()">
                                            @lang('general.current_location')<i class="fa fa-location-arrow"
                                                aria-hidden="true"></i></button>
                                    </div>

                                    <div class="col-md-6 col-xs-12 ">

                                        <div class="form-group">
                                            <input type="hidden" oninput="initMap()" value="31.3540494"
                                                class="form-control input-sm" name="lat" id="lat">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 ">

                                        <div class="form-group">
                                            <input type="hidden" oninput="initMap()" value="31.6841419"
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
                                    <div id="map" style="width:100%;height:330px; "></div>


                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <button type="button" class="action-button previous previous_button">رجوع</button>
                        <button type="submit" class="action-button">@lang('general.register')</button>
                    </fieldset>
                </form>
            </section>
            <!-- End Multi step form -->


        </div>
    </div>
</main>



@endsection


@push('scripts')

<script src="{{ asset('/web/js/select2.full.min.js')}}"></script>
<script>
    var current_location = {{ trans('general.current_location') }};
</script>
<script src="{{ asset('/web/js/mapInput.js')}}"></script>



<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcP3JChqWSCHtsjW4e_Ug8h0htjiIhcHw&libraries=places&callback=initMap"
    async defer></script>

<!-- mayada -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script>
    $('#country').change(function() {
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
                        $("#state").append('<option value="' + key + '">' + value +
                            '</option>');
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
                        $("#city").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    $('#city').niceSelect('update');

                }
            }

        });
    }
});
</script>
@endpush