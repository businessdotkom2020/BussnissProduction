@extends('layouts.main')
@php $menu = false ;
@endphp
@push('styles')
<link rel="stylesheet" href="{{ asset('/web/css/custom-save-supplier.css')}}">
<link rel="stylesheet" href="{{ asset('/web/css/custom-register-supplier.css')}}">

@endpush
@section('content')

<main class="main-content col-xs-12">
    <div class="add-req-wrap col-xs-12">
        <div class="container">
            <div class="form-group col-md-12 col-xs-12 center">

                <h3>@lang('general.add_branch')</h3>
                @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
            </div>
            <form action="{{route('store_branch')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 col-xs-12">
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.name')</h4>
                        <input type="text" required name="name" placeholder="@lang('general.name')"
                            class="form-control">
                        @error('name')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.mobile')</h4>
                        <input type="text" required name="mobile" placeholder="@lang('general.mobile')"
                            class="form-control">
                        @error('mobile')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.email')</h4>
                        <input type="text" required name="email" placeholder="@lang('general.email')"
                            class="form-control">
                        @error('email')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.land_line')</h4>
                        <input type="text" required name="land_line" placeholder="@lang('general.land_line')"
                            class="form-control">
                        @error('land_line')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.delivery_fee')</h4>
                        <input type="text" required name="delivery_fee" placeholder="@lang('general.delivery_fee')"
                            class="form-control">
                        @error('delivery_fee')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.delivery_from')</h4>
                        <input type="text" required name="delivery_from" placeholder="@lang('general.delivery_from')"
                            class="form-control">
                        @error('delivery_from')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.delivery_to')</h4>
                        <input type="text" required name="delivery_to" placeholder="@lang('general.delivery_to')"
                            class="form-control">
                        @error('delivery_to')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.work_from')</h4>
                        <input type="text" required name="work_from" placeholder="@lang('general.work_from')"
                            class="form-control">
                        @error('work_from')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.work_to')</h4>
                        <input type="text" required name="work_to" placeholder="@lang('general.work_to')"
                            class="form-control">
                        @error('work_to')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col-md-12 col-xs-12">
                        <h4>@lang('general.address')</h4>
                        <textarea type="text" required name="address" placeholder="@lang('general.address')"
                            class="form-control"></textarea>
                        @error('address')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 col-xs-12">
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

                        </div>
                    </div>

                    <div class="form-group col-md-12 col-xs-12 center">
                        <button type="submit" class="btn">@lang('general.save')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

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
