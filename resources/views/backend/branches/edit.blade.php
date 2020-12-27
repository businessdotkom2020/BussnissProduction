@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&sensor=false"></script>
    <style>
        #map-canvas {
            width: 100%;
            height: 350px;
        }
        #pac-input {
            z-index: 0 !important;
            position: absolute !important;
            top: 0px !important;
            left: 0 !important;
            width: 100% !important;
            height: 40px !important;
            padding: 0 6px !important;
            border: 2px solid #ce8483 !important;
            border-radius: 3px!important;
        }
    </style>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.edit') @lang('dashboard.branch') " {{ $branch->name }} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('branches.update' , $branch->id) }}" class="needs-validation">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_id">@lang('dashboard.supplier')</label>
                                    <select name="user_id" class="form-control select2" id="user_id" required>
                                        @foreach($users as $user)
                                            <option
                                                    @if($user->id == $branch->user_id) selected @endif
                                                    value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">@lang('dashboard.name')</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="@lang('dashboard.name')" value="{{ $branch->name }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">@lang('dashboard.email')</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="@lang('dashboard.email')" value="{{ $branch->email }}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mobile">@lang('dashboard.mobile')</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="@lang('dashboard.mobile')" value="{{ $branch->mobile }}" required>
                                    @error('mobile')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="hotline">@lang('dashboard.hotline')</label>
                                    <input type="text" name="hotline" class="form-control" id="hotline" placeholder="@lang('dashboard.hotline')" value="{{ $branch->land_line }}" required>
                                    @error('hotline')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">@lang('dashboard.address')</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="@lang('dashboard.address')" value="{{ $branch->address }}" required>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="working_from">@lang('dashboard.work_from')</label>
                                    <input type="time" name="working_from" class="form-control" id="working_from" placeholder="@lang('dashboard.work_from')" value="{{ $branch->work_from }}">
                                    @error('working_from')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="working_to">@lang('dashboard.work_to')</label>
                                    <input type="time" name="working_to" class="form-control" id="working_to" placeholder="@lang('dashboard.work_to')" value="{{ $branch->work_to }}">
                                    @error('working_to')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="delivery_from">@lang('dashboard.work_delivery_from')</label>
                                    <input type="time" name="delivery_from" class="form-control" id="delivery_from" placeholder="@lang('dashboard.work_delivery_from')" value="{{ $branch->delivery_from }}">
                                    @error('delivery_time')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="delivery_to">@lang('dashboard.work_delivery_to')</label>
                                    <input type="time" name="delivery_to" class="form-control" id="delivery_to" placeholder="@lang('dashboard.work_delivery_to')" value="{{ $branch->delivery_to }}">
                                    @error('delivery_to')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="delivery_fee">@lang('dashboard.delivery_fee')</label>
                                    <input type="number" name="delivery_fee" class="form-control" id="delivery_fee" placeholder="@lang('dashboard.delivery_fee')" value="{{ $branch->delivery_fee }}">
                                    @error('delivery_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">@lang('dashboard.location')</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="map-canvas"></div>
                                                    <input id="pac-input"  type="text" placeholder="@lang('dashboard.search')">
                                                    <input type="hidden" id="lat" name="lat" value="{{ $branch->lat }}" required>
                                                    <input type="hidden" id="lng" name="lng" value="{{ $branch->lng }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('lat')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('lang')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">@lang('dashboard.submit')</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
    <script>
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: {{ $branch->lat }},
                lng: {{ $branch->lang }}
            },
            zoom:5
        });
        var marker = new google.maps.Marker({
            position: {
                lat: {{ $branch->lat }},
                lng: {{ $branch->lang }}
            },
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));
        google.maps.event.addListener(searchBox,'places_changed',function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for(i=0; place=places[i];i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location); //set marker position new...
            }
            map.fitBounds(bounds);
            map.setZoom(5);
        });
        google.maps.event.addListener(marker,'position_changed',function(){
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            $('#lat').val(lat);
            $('#lng').val(lng);
        });
    </script>
@endsection
