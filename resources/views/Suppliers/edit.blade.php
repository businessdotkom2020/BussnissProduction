@extends('layouts.main')
@php $menu = false ;
@endphp
@push('styles')
<link rel="stylesheet" href="{{ asset('/web/css/custom-save-supplier.css')}}">
<link rel="stylesheet" href="{{ asset('/web/css/custom-register-supplier.css')}}">

@endpush
@section('content')

<main class="main-content col-xs-12">
    <div class="supp-prof-about col-xs-12">
        <div class="container">

            {{--************************************* Header  **********************************--}}
            <div class="g-head col-xs-12">
                <h3>profile</h3>
            </div>


            {{--************************************* update Options List  **********************************--}}

            <ul class="nav-tabs col-md-3 col-xs-12">
                <li class="active"> <a href="#" data-toggle="tab"
                        data-target="#u_profile">@lang('general.u_profile')</a> </li>
                <li> <a href="#" data-toggle="tab" data-target="#u_location">@lang('general.u_location')</a> </li>
                <li> <a href="#" data-toggle="tab" data-target="#u_branches">@lang('general.u_branches')</a> </li>
                <li> <a href="#" data-toggle="tab" data-target="#u_password">@lang('general.u_password')</a> </li>
            </ul>


            <div class="tab-content col-md-9 col-xs-12">

                {{--************************************* update Profile  **********************************--}}

                <div class="tab-pane fade active in " id="u_profile">
                    <form action="{{route('update_supplier')}}" method="post" enctype="multipart/form-data"> @csrf
                        <div class="ito-h col-xs-12 ubranch">
                            <div class="form-group col-md-12 col-xs-12">
                                <div class="s-item col-md-6 col-sm-6 col-xs-12">
                                    <div class="prof-img">
                                        <label> <i class="fa fa-camera"></i>
                                            <input name="image" type="file"
                                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                            <img src="{{url('storage/'.$supplier->store_background)}}" id="blah"
                                                alt="your image"> </label>
                                    </div>
                                </div>
                                <div class="s-item col-md-6 col-sm-6 col-xs-12">
                                    <div class="prof-img">
                                        <label> <i class="fa fa-camera"></i>
                                            <input name="image" type="file"
                                                onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                            <img src="{{url('storage/'.$supplier->avatar)}}" id="blah1"
                                                alt="your image"> </label>
                                    </div>
                                </div>
                            </div> {{--
							<h4>@lang('general.main_information')</h4> --}}
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" required name="supplier_name" value="{{$supplier->name}}"
                                    placeholder="@lang('general.supplier_name')" class="form-control"> </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <select style="width:100%" required name="category_ids[]"
                                    class="form-control select-nosearch" multiple>
                                    <!--<option selected disabled>@lang('general.categories')</option>-->@foreach(\App\Models\Category::whereNull('parent_id')->get()
                                    as $category)
                                    <option
                                        {{in_array($category->id,$supplier->categories->pluck('id')->toArray()) ? 'selected' : '' }}
                                        value="{{$category->id}}">
                                        {{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                                    @endforeach </select>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="email" required name="email" value="{{$supplier->email}}"
                                    placeholder="@lang('general.email')" class="form-control"> </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" required name="mobile" value="{{$supplier->mobile}}"
                                    placeholder="@lang('general.mobile')" class="form-control"> </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="text" required name="hot_number" value="{{$supplier->hot_number}}"
                                    placeholder="@lang('general.hot_line')" class="form-control"> </div>
                            <br>
                            <div class="form-group col-md-6 col-xs-12">
                                <button type="submit" class="btn">@lang('general.save')</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{--************************************* update location  **********************************--}}

                <div class="tab-pane fade  in " id="u_location">
                    <form action="{{route('update_supplier')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="ito-h col-xs-12 ubranch">
                            <h4>@lang('general.localization_info')</h4>
                            <div class="form-group col-md-4 col-xs-12">
                                <select style="width:100%" required id="country" name="country_id" class="form-control">
                                    @foreach (\App\Models\Country::get() as $country)
                                    <option {{ $supplier->country_id == $country->id ? 'selected' : ''}}
                                        value="{{$country->id}}">{{$country->name}}</option> @endforeach </select>
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <select style="width:100%" required name="state_id" id="state" class="form-control">
                                    <option selected disabled>@lang('general.state')</option>
                                    @foreach(\App\Models\State::get() as $state)
                                    <option {{ $supplier->state_id == $state->id ? 'selected' : ''}}
                                        value="{{$state->id}}">{{$state->name}}</option> @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <select style="width:100%" required name="city_id" id="city" class="form-control">
                                    <option selected disabled>@lang('general.city')</option>
                                    @foreach(\App\Models\City::get() as $city)
                                    <option {{ $supplier->city_id == $city->id ? 'selected' : ''}}
                                        value="{{$city->id}}">{{$city->name}}</option> @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <h4>@lang('general.street_num')</h4>
                                <input required type="text" name="street_nom" placeholder="@lang('general.street_num')"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.zip_code')</h4>
                                <input required type="text" name="zip_code" placeholder="@lang('general.zip_code')"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.address_spec')</h4>
                                <input required type="text" name="address" placeholder="@lang('general.address_spec')"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.working_from')</h4>
                                <input required type="text" name="working_from"
                                    placeholder="@lang('general.working_from')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.working_to')</h4>
                                <input required type="text" name="working_to" placeholder="@lang('general.working_to')"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.delivery_time')</h4>
                                <input required type="text" name="delivery_time"
                                    placeholder="@lang('general.delivery_time')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.delivery_fee')</h4>
                                <input required type="text" name="delivery_fee"
                                    placeholder="@lang('general.delivery_fee')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.year_founded')</h4>
                                <input required type="text" name="year_founded"
                                    placeholder="@lang('general.year_founded')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.instagram_url')</h4>
                                <input required type="text" name="instagram_url"
                                    placeholder="@lang('general.instagram_url')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.facebook_url')</h4>
                                <input required type="text" name="facebook_url"
                                    placeholder="@lang('general.facebook_url')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.linkedin_url')</h4>
                                <input required type="text" name="linkedin_url"
                                    placeholder="@lang('general.linkedin_url')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.youtube_url')</h4>
                                <input required type="text" name="youtube_url"
                                    placeholder="@lang('general.youtube_url')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12"> </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <!--<input type="text" placeholder="@lang('general.map_location')" class="form-control">--><a
                                    href="#" class="btn btn-review" data-toggle="modal" onclick="initMap()"
                                    data-target="#review-pop">@lang('general.map_location')</a> </div>
                            <div class="form-group col-md-12 col-xs-12"> </div>
                            <br>
                            <div class="form-group col-md-6 col-xs-12 center">
                                <button type="submit" class="btn">@lang('general.save')</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{--************************************* update Branches  **********************************--}}

                <div class="tab-pane fade  in" id="u_branches">


                    <div class="form-group col-md-12 col-xs-12 center">
                        <!--<input type="text" placeholder="@lang('general.map_location')" class="form-control">--><a
                            href="{{route('create_branch')}}" class="btn btn-review" target="_blank"
                            onclick="initMap()">@lang('general.add_branch')</a>
                    </div>
                    @foreach ($supplier->branchs as $branch)


                    <div class="ito-h col-xs-12 ubranch">
                        <div class="pr-item form-group col-md-12 col-xs-12">
                            <h3 style="text-align: center">{{$branch->name}}</h3>
                        </div>

                        <div class="form-group col-md-9 col-xs-12">
                            <iframe width="300" height="570" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0" &zoom=18 &maptype=satellite
                                src="https://maps.google.com/maps?q={{$branch->lat}},{{$branch->lang}}&hl=en&z=14&amp;output=embed">
                            </iframe>
                        </div>

                        <div class="pr-item form-group col-md-3 col-xs-12">
                            <h3>@lang('general.email')</h3>
                            <h5>{{$branch->email}}</h5>
                        </div>
                        <div class="pr-item form-group col-md-3 col-xs-12">
                            <h3>@lang('general.mobile')</h3>
                            <h5>{{$branch->mobile}}</h5>
                        </div>



                        <br>
                        <div class="form-group col-md-12 col-xs-12 center">
                            <a href="{{route('edit_branch',['branch_id' => $branch->id])}}" target="_blank"
                                class="btn">@lang('general.update')</a>
                        </div>
                    </div>

                    @endforeach


                </div>

                {{--************************************* update Password  **********************************--}}

                <div class="tab-pane fade  in" id="u_password">
                    <form action="{{route('update_password')}}" method="post" enctype="multipart/form-data"> @csrf
                        <div class="ito-h col-xs-12 ubranch">
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.old_password')</h4>
                                <input required type="password" name="old_password"
                                    placeholder="@lang('general.old_password')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.password')</h4>
                                <input required type="password" name="password" placeholder="@lang('general.password')"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>@lang('general.password_confirmation')</h4>
                                <input required type="password" name="password_confirmation"
                                    placeholder="@lang('general.password_confirmation')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12"> </div>
                            <div class="form-group col-md-12 col-xs-12"></div>
                            <br>
                            <div class="form-group col-md-6 col-xs-12 center">
                                <button type="submit" class="btn">@lang('general.save')</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{--************************************* End update Password   **********************************--}}

            </div>
        </div>
    </div>

</main>

{{--************************************* Add Branch  **********************************--}}

<div class="modal fade" id="add_branch">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">

                <div class="form-group col-md-12 col-xs-12">
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.name')</h4>
                        <input type="text" required name="name" placeholder="@lang('general.name')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.mobile')</h4>
                        <input type="text" required name="mobile" placeholder="@lang('general.mobile')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.email')</h4>
                        <input type="text" required name="email" placeholder="@lang('general.email')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.mobile')</h4>
                        <input type="text" required name="mobile" placeholder="@lang('general.mobile')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.land_line')</h4>
                        <input type="text" required name="land_line" placeholder="@lang('general.land_line')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.working_to')</h4>
                        <input type="text" required name="mobile" placeholder="@lang('general.working_to')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.work_from')</h4>
                        <input type="text" required name="work_from" placeholder="@lang('general.work_from')"
                            class="form-control">
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.delivery_fee')</h4>
                        <input type="text" required name="delivery_fee" placeholder="@lang('general.delivery_fee')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        <h4>@lang('general.address')</h4>
                        <textarea type="text" required name="address" placeholder="@lang('general.address')"
                            class="form-control"></textarea>
                    </div>

                </div>

                <div class="rate-title">
                    <h3>@lang('general.map_location')</h3>
                </div>
                <div class="rate-stars">
                    <div class="col-md-8 col-xs-12">
                        <div id="pac-container">
                            <input id="pac-input" type="text" placeholder="Enter a location"> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <button id="current_location" onclick="getLocation()"> Current Location <i
                                class="fa fa-location-arrow" aria-hidden="true"></i></button>
                    </div>

                </div>
                <div class="rate-form">
                    <div class="pac-card" id="pac-card">
                        <div>
                            <div id="title"> Autocomplete search </div>
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
                    <div id="infowindow-content"> <img src="" width="16" height="16" id="place-icon"> <span
                            id="place-name" class="title"></span>
                        <br> <span id="place-address"></span> </div>
                    <div class="form-group col-md-12 col-xs-12 center">
                        <button type="submit" class="btn">@lang('general.save')</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- End /.modal-dialog -->


{{--************************************* update user Map   **********************************--}}

<div class="modal fade" id="review-pop">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="rate-title">
                    <h3>@lang('general.map_location')</h3>
                </div>
                <div class="rate-stars">
                    <div class="col-md-8 col-xs-12">
                        <div id="pac-container">
                            <input id="pac-input" type="text" placeholder="Enter a location"> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <button id="current_location" onclick="getLocation()"> Current Location <i
                                class="fa fa-location-arrow" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Lat</label>
                            <input type="text" oninput="initMap()" value="31.3540494" class="form-control input-sm"
                                name="lat" id="lat"> </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Lng</label>
                            <input type="text" oninput="initMap()" value="31.6841419" class="form-control input-sm"
                                name="lng" id="lng"> </div>
                    </div>
                </div>
                <div class="rate-form">
                    <div class="pac-card" id="pac-card">
                        <div>
                            <div id="title"> Autocomplete search </div>
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
                    <div id="infowindow-content"> <img src="" width="16" height="16" id="place-icon"> <span
                            id="place-name" class="title"></span>
                        <br> <span id="place-address"></span> </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- End /.modal-dialog -->


<!-- /.modal -->
@endsection

@push('scripts')
<script src="{{ asset('/web/js/select2.full.min.js')}}"></script>
<script src="{{ asset('/web/js/mapInput.js')}}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMap"
    async defer></script>
<script>
    var x = document.getElementById("demo");

function getLocation() {
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
}
$('#country').change(function() {
	var cid = $(this).val();
	if(cid) {
		$.ajax({
			type: "get",
			url: " /getStates/" + cid,
			success: function(res) {
				if(res) {
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
	if(sid) {
		$.ajax({
			type: "get",
			url: "/getCities/" + sid,
			success: function(res) {
				if(res) {
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
</script> @endpush
