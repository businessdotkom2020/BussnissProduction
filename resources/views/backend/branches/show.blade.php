@extends('backend.layout.master')
@section('backend-head')
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ implode(' ', array_slice(explode(' ', $branch->name), 0, 5)) }}</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            <th>{{ __('dashboard.name') }}</th>
                            <td>{{ implode(' ', array_slice(explode(' ', $branch->name), 0, 5)) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.supplier') }}</th>
                            <td>
                                <a target="_blank" href="{{ route('sellerss.show' , $branch->user->id ) }}">
                                    {{ $branch->user->name ?? '' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.email') }}</th>
                            <td>{{ $branch->email }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.mobile') }}</th>
                            <td>{{ $branch->mobile }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.hotline') }}</th>
                            <td>{{ $branch->land_line }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.address') }}</th>
                            <td>{{ $branch->address }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.work_from') }}</th>
                            <td>{{ $branch->work_from }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.work_to') }}</th>
                            <td>{{ $branch->work_to }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.work_delivery_from') }}</th>
                            <td>{{ $branch->delivery_from }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.work_delivery_to') }}</th>
                            <td>{{ $branch->delivery_to }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.delivery_fee') }}</th>
                            <td>{{ $branch->delivery_fee }}</td>
                        </tr>
                    </table>
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
                                                <input type="hidden" id="lat" name="lat" value="{{ $branch->lat }}" readonly>
                                                <input type="hidden" id="lng" name="lng" value="{{ $branch->lng }}" readonly>
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
                    <br>
                    <a href="{{ route('branches.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
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
            draggable: false
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
    </script>
@endsection