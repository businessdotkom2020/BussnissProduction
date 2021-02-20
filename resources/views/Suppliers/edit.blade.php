@extends('layouts.main')
@php $menu = false ;
@endphp
@push('styles')
<link rel="stylesheet" href="{{ asset('/web/css/custom-save-supplier.css')}}">
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


                {{--************************************* update location  **********************************--}}



                {{--************************************* update Branches  **********************************--}}

                <div class="tab-pane fade  in" id="u_branches">
                    <div class="ito-h col-xs-12 ubranch">
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>@lang('general.name')</h4>
                            <h5>@lang('general.name')</h5>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>@lang('general.email')</h4>
                            <h5>@lang('general.email')</h5>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>@lang('general.mobile')</h4>
                            <h5>@lang('general.mobile')</h5>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>@lang('general.work_from')</h4>
                            <h5>@lang('general.work_from')</h5>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <h4>@lang('general.work_from')</h4>
                            <h5>@lang('general.work_from')</h5>
                        </div>
                        <br>
                        <div class="form-group col-md-6 col-xs-12">
                            <button type="submit" class="btn">@lang('general.update')</button>
                        </div>
                    </div>
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
                            <div class="form-group col-md-6 col-xs-12">
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
