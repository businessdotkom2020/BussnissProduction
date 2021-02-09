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
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            <th>{{ __('dashboard.image') }}</th>
                            <td>
                                @if(isset($user->avatar))
                                    <img style="width: 100px;height:100px;border-radius: 10px" src="{{ url('storage/' . $user->avatar) }}"/>
                                @else
                                    no image ....
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.image') }}   {{ __('dashboard.seller') }}</th>
                            <td>
                                @if(isset($user->store_image))
                                    <img style="width: 100px;height:100px;border-radius: 10px" src="{{ url('storage/' . $user->store_image) }}"/>
                                @else
                                    no image ....
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.image') }} {{ __('dashboard.seller') }}</th>
                            <td>
                                @if(isset($user->store_background))
                                    <img style="width: 100px;height:100px;border-radius: 10px" src="{{ url('storage/' . $user->store_background) }}"/>
                                @else
                                    no image ....
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th>{{ __('dashboard.name') }}</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.email') }}</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.phone') }}</th>
                            <td>{{ $user->mobile }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.address') }}</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.wa') }}</th>
                            <td>{{ $user->whatsapp }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.country') }}</th>
                            <td>{{ $user->country->getTranslatedAttribute('name',\App::getLocale()) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.state') }}</th>
                            <td>{{ $user->state->getTranslatedAttribute('name',\App::getLocale()) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.city') }}</th>
                            <td>{{ $user->city->getTranslatedAttribute('name',\App::getLocale()) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.categories') }}</th>
                            <td>
                                @foreach($select_categories as $cat)
                                    <span style="border: 1px solid black;padding: 5px;border-radius: 5px;margin: 0 5px">
                                        {{ $cat->getTranslatedAttribute('name',\App::getLocale()) }}
                                    </span>
                                @endforeach
                            </td>
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
                                                <input type="hidden" id="lat" name="lat" value="{{ $user->lat }}" readonly>
                                                <input type="hidden" id="lng" name="lng" value="{{ $user->lang }}" readonly>
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
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#products" role="tab" aria-selected="true">
                                <span class="d-block d-sm-block"><i class="fas fa-cart-arrow-down"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.products') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->products->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#services" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-taxi"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.services') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->services->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#requests" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-praying-hands"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.requests') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->requests->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#clients" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-mug-hot"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.clients') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->clients->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#jobs" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-briefcase"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.jobs') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->jobs->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#branches" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-code-branch"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.brans') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->branches->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#followers" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="far fa-handshake"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.followers') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->followers->count() }}</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="products" role="tabpanel">
                            <div class="row">
                                @foreach($user->products as $product)
                                <div class="col-md-6 col-xl-3">
                                    <div class="card">
                                        @isset($product->image)
                                            <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                        @endisset
                                        <div class="card-body">
                                            <h4 class="card-title mt-0">
                                                <?php
                                                    echo $product->getTranslatedAttribute('name',\App::getLocale());
                                                ?>
                                            </h4>
                                            <small class="text-info">
                                                {{ __('dashboard.product') }}
                                            </small>
                                            <p class="card-text">
                                                <?php
                                                    echo str_limit($product->getTranslatedAttribute('description',\App::getLocale()), 110);
                                                ?>
                                            </p>
                                            <a href="{{ route('productss.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="services" role="tabpanel">
                            <div class="row">
                                @foreach($user->services as $product)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            @foreach(json_decode($product->images) as $key => $image)
                                                @if($key == 0)
                                                    <img class="card-img-top img-fluid" src="{{ url('storage/'.$image)}}" alt="image">
                                                @endif
                                            @endforeach
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    <?php
                                                        echo $product->name;
                                                    ?>
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.service') }}
                                                </small>
                                                <p class="card-text">
                                                    <?php
                                                    echo str_limit($product->description, 110);
                                                    ?>
                                                </p>
                                                <a href="{{ route('servicess.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="requests" role="tabpanel">
                            <div class="row">
                                @foreach($user->requests as $product)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            @foreach(json_decode($product->images) as $key => $image)
                                                @if($key == 0)
                                                    <img class="card-img-top img-fluid" src="{{ url('storage/'.$image)}}" alt="image">
                                                @endif
                                            @endforeach
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    <?php
                                                    echo $product->getTranslatedAttribute('name',\App::getLocale());
                                                    ?>
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.request') }}
                                                </small>
                                                <p class="card-text">
                                                    <?php
                                                    echo str_limit($product->getTranslatedAttribute('description',\App::getLocale()), 110);
                                                    ?>
                                                </p>
                                                <a href="{{ route('requestss.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="clients" role="tabpanel">
                            <div class="row">
                                @foreach($user->clients as $product)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            @isset($product->image)
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                            @endisset
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    <?php
                                                    echo $product->name;
                                                    ?>
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.client') }}
                                                </small>
                                                <p class="card-text">
                                                    <?php
                                                    echo str_limit($product->description, 110);
                                                    ?>
                                                </p>
                                                <a href="{{ route('clients.edit' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="jobs" role="tabpanel">
                            <div class="row">
                                @foreach($user->jobs as $product)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    <?php
                                                    echo $product->title;
                                                    ?>
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.job') }}
                                                </small>
                                                <p class="card-text">
                                                    <?php
                                                    echo str_limit($product->description, 110);
                                                    ?>
                                                </p>
                                                <a href="{{ route('jobss.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="branches" role="tabpanel">
                            <div class="row">
                                @foreach($user->branches as $product)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    <?php
                                                        echo $product->name;
                                                    ?>
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.branch') }}
                                                </small>
                                                <br>
                                                <br>
                                                <a href="{{ route('branches.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="followers" role="tabpanel">
                            <div class="row">
                                @foreach($user->followers as $product)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            @isset($product->avatar)
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->avatar)}}" alt="image">
                                            @endisset
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    <?php
                                                    echo $product->name;
                                                    ?>
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.user') }}
                                                </small>
                                                <br>
                                                <br>
                                                <a href="{{ route('users.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <a href="{{ route('sellerss.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('sellerss.edit' , $user->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                    <a href="{{ route('delete_seller' , $user->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
    <script>
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: {{ $user->lat }},
                lng: {{ $user->lang }}
            },
            zoom:5
        });
        var marker = new google.maps.Marker({
            position: {
                lat: {{ $user->lat }},
                lng: {{ $user->lang }}
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