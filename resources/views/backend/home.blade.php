@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            @include('common.done')
            @include('common.errors')
        </div>
    </div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">{{ __('dashboard.dashboard') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        @if(app()->getLocale() =='en')
                        <li class="breadcrumb-item"><a href="/">{{ __('dashboard.business_com') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('dashboard.dashboard') }}</li>
                        @else
                            <li class="breadcrumb-item active">{{ __('dashboard.dashboard') }}</li>
                            <li class="breadcrumb-item"><a href="/">{{ __('dashboard.business_com') }}</a></li>
                        @endif
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.moderators') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Moderator::all()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-user-2-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.sellers') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\User::whereNotNull('state_id')->get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-store-2-line font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.clients') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Client::all()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-user-6-line font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.brans') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Branch::all()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-git-branch-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.n_users') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\User::whereNull('state_id')->get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-user-3-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.products') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Product::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-shopping-cart-2-line font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.requests') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Request::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-order-play-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.jobs') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Request::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="fas fa-user-md font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.services') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Service::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-service-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.tag') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Tag::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-hashtag font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.brands') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Brand::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="fab fa-centos font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.web_slider') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Slider::where('type' , 'web')->get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="fas fa-images font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.app_slider') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Slider::where('type' , 'app')->get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="far fa-images font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.countries') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Country::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-earth-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.states') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\State::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-building-2-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.cities') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\City::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-earthquake-line font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.zones') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\IndustrialZones::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-building-3-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">{{ __('dashboard.attributes') }}</p>
                                    <h4 class="mb-0">{{ count(\App\Models\Attribute::get()) }}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-star-half-s-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    {{----}}
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.top_products') }}</h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pro_fav" role="tab" aria-controls="home" aria-selected="true">{{ __('dashboard.fav') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pro_comm" role="tab" aria-controls="profile" aria-selected="false">{{ __('dashboard.comm') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pro_fav" role="tabpanel" aria-labelledby="pro_fav-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.fav') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\Product::withCount('favorites')->orderBy('favorites_count','desc')->paginate(5) as $product)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @if(isset($product->image))
                                                                <img height="20" src="{{ url('storage/' . $product->image) }}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">
                                                        <a href="{{ route('productss.show' , $product->id) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $product->getTranslatedAttribute('name',\App::getLocale())), 0, 5)) }}
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $product->favorites->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro_comm" role="tabpanel" aria-labelledby="pro_comm-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.comm') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\Product::withCount('reviews')->orderBy('reviews_count','desc')->paginate(5) as $product)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @if(isset($product->image))
                                                                <img height="20" src="{{ url('storage/' . $product->image) }}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">
                                                        <a href="{{ route('productss.show' , $product->id) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $product->getTranslatedAttribute('name',\App::getLocale())), 0, 5)) }}
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $product->reviews->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('productss.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.top_requests') }}</h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#req_fav" role="tab" aria-controls="home" aria-selected="true">{{ __('dashboard.fav') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#req_comm" role="tab" aria-controls="profile" aria-selected="false">{{ __('dashboard.comm') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="req_fav" role="tabpanel" aria-labelledby="pro_fav-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.fav') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\Request::withCount('favorites')->orderBy('favorites_count','desc')->paginate(5) as $product)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @foreach(json_decode($product->images) as $key => $image)
                                                                @if($key == 0)
                                                                    <img height="20" src="{{ url('storage/' . $image) }}"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">
                                                        <a href="{{ route('requestss.show' , $product->id) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $product->getTranslatedAttribute('name','en')), 0, 5)) }}
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $product->favorites->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="req_comm" role="tabpanel" aria-labelledby="pro_comm-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.comm') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\Request::withCount('reviews')->orderBy('reviews_count','desc')->paginate(5) as $product)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @foreach(json_decode($product->images) as $key => $image)
                                                                @if($key == 0)
                                                                    <img height="20" src="{{ url('storage/' . $image) }}"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">
                                                        <a href="{{ route('requestss.show' , $product->id) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $product->getTranslatedAttribute('name','en')), 0, 5)) }}
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $product->reviews->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('requestss.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.top_services') }}</h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#ser_fav" role="tab" aria-controls="home" aria-selected="true">{{ __('dashboard.fav') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ser_comm" role="tab" aria-controls="profile" aria-selected="false">{{ __('dashboard.comm') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="ser_fav" role="tabpanel" aria-labelledby="pro_fav-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.fav') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\Service::withCount('favorites')->orderBy('favorites_count','desc')->paginate(5) as $product)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @foreach(json_decode($product->images) as $key => $image)
                                                                @if($key == 0)
                                                                    <img height="20" src="{{ url('storage/' . $image) }}"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">
                                                        <a href="{{ route('servicess.show' , $product->id) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $product->name), 0, 5)) }}
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $product->favorites->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ser_comm" role="tabpanel" aria-labelledby="pro_comm-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.comm') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\Service::withCount('reviews')->orderBy('reviews_count','desc')->paginate(5) as $product)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @foreach(json_decode($product->images) as $key => $image)
                                                                @if($key == 0)
                                                                    <img height="20" src="{{ url('storage/' . $image) }}"/>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">
                                                        <a href="{{ route('servicess.show' , $product->id) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $product->name), 0, 5)) }}
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $product->reviews->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('requestss.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.top_suppliers') }}</h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#sup_comm" role="tab" aria-controls="profile" aria-selected="false">{{ __('dashboard.comm') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="sup_fav" role="tabpanel" aria-labelledby="pro_fav-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.all_rating') }}</div></td>
                                            <td><div id="spak-chart3">{{ __('dashboard.comm') }}</div></td>
                                        </tr>
                                        <?php
                                        $suppliers = \App\Models\User::with('reviews')
                                            ->get()
                                            ->sortByDesc(function($bk, $key) {
                                                if($bk->getAverageRatingAttribute()) {
                                                    return $bk->getAverageRatingAttribute();
                                                }
                                                return null;
                                            });
                                        ?>
                                        @foreach($suppliers->slice(0,5) as $supplier)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @if(isset($supplier->avatar))
                                                                <img height="20" src="{{ url('storage/' . $supplier->avatar) }}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">
                                                        <a href="{{ route('sellerss.show' , $supplier->id) }}">
                                                            {{ implode(' ', array_slice(explode(' ', $supplier->name), 0, 5)) }}
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <div id="spak-chart3">
                                                        @for ($i = 0; $i < $supplier->getAverageRatingAttribute(); $i++)
                                                            <i class="fas fa-star text-warning"></i>
                                                        @endfor
                                                        <small style="font-size: 8px">( {{ $supplier->getAverageRatingAttribute() }} )</small>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="spak-chart3">
                                                        {{ $supplier->reviews->count() }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('sellerss.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <!-- end row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.most_active_suppliers') }}</h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{ __('dashboard.products') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{ __('dashboard.requests') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.products') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\User::whereNotNull('state_id')->withCount('products')->orderBy('products_count','desc')->paginate(5) as $supplier)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @if(isset($supplier->avatar))
                                                                <img height="20" src="{{ url('storage/' . $supplier->avatar) }}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">{{ $supplier->name }}
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $supplier->products->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.requests') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\User::whereNotNull('state_id')->withCount('requests')->orderBy('requests_count','desc')->paginate(5) as $supplier)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @if(isset($supplier->avatar))
                                                                <img height="20" src="{{ url('storage/' . $supplier->avatar) }}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">{{ $supplier->name }}
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $supplier->requests->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('sellerss.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.most_active_users') }}</h4>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-centered table-nowrap">
                                <tbody>
                                <tr style="background: rgba(3,3,3,0.1)">
                                    <td>
                                        {{ __('dashboard.image') }}
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                    </td>
                                    <td><div id="spak-chart3">{{ __('dashboard.requests') }}</div></td>
                                </tr>
                                @foreach(\App\Models\User::whereNotNull('state_id')->withCount('requests')->orderBy('requests_count','desc')->paginate(6) as $user)
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-light">
                                                    @if(isset($user->avatar))
                                                        <img height="20" src="{{ url('storage/' . $user->avatar) }}"/>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-0">{{ $user->name }}
                                            </h5>
                                        </td>
                                        <td>
                                            <div id="spak-chart3">
                                                {{ $user->requests->count() }}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    {{--         --}}
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.most_active_suppliers') }}</h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home0" role="tab" aria-controls="home" aria-selected="true">{{ __('dashboard.products') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile0" role="tab" aria-controls="profile" aria-selected="false">{{ __('dashboard.requests') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.products') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\User::whereNotNull('state_id')->withCount('products')->orderBy('products_count','desc')->paginate(5) as $supplier)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @if(isset($supplier->avatar))
                                                                <img height="20" src="{{ url('storage/' . $supplier->avatar) }}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">{{ $supplier->name }}
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $supplier->products->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="table-responsive mt-4">
                                    <table class="table table-hover mb-0 table-centered table-nowrap">
                                        <tbody>
                                        <tr style="background: rgba(3,3,3,0.1)">
                                            <td>
                                                {{ __('dashboard.image') }}
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                            </td>
                                            <td><div id="spak-chart3">{{ __('dashboard.requests') }}</div></td>
                                        </tr>
                                        @foreach(\App\Models\User::whereNotNull('state_id')->withCount('requests')->orderBy('requests_count','desc')->paginate(5) as $supplier)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light">
                                                            @if(isset($supplier->avatar))
                                                                <img height="20" src="{{ url('storage/' . $supplier->avatar) }}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-0">{{ $supplier->name }}
                                                    </h5>
                                                </td>
                                                <td><div id="spak-chart3">
                                                        {{ $supplier->requests->count() }}
                                                    </div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('sellerss.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="text-center">
                            <h4 class="mb-2">{{ __('dashboard.most_active_users') }}</h4>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-centered table-nowrap">
                                <tbody>
                                <tr style="background: rgba(3,3,3,0.1)">
                                    <td>
                                        {{ __('dashboard.image') }}
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                    </td>
                                    <td><div id="spak-chart3">{{ __('dashboard.requests') }}</div></td>
                                </tr>
                                @foreach(\App\Models\User::whereNotNull('state_id')->withCount('requests')->orderBy('requests_count','desc')->paginate(6) as $user)
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-light">
                                                    @if(isset($user->avatar))
                                                        <img height="20" src="{{ url('storage/' . $user->avatar) }}"/>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-0">{{ $user->name }}
                                            </h5>
                                        </td>
                                        <td>
                                            <div id="spak-chart3">
                                                {{ $user->requests->count() }}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    {{--         --}}
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ __('dashboard.last') }} {{ __('dashboard.sellers') }}</h4>
                    <div>
                        <div class="text-center">
                            <p class="mb-2">{{ __('dashboard.total') }} {{ __('dashboard.sellers') }}</p>
                            <h4>{{ count(\App\Models\User::whereNotNull('state_id')->get()) }}</h4>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-centered table-nowrap">
                                <tbody>
                                <tr style="background: rgba(3,3,3,0.1)">
                                    <td>
                                        {{ __('dashboard.image') }}
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                    </td>
                                    <td><div id="spak-chart3">{{ __('dashboard.followers') }}</div></td>
                                    <td>
                                        <p class="text-muted mb-0">{{ __('dashboard.city') }}</p>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0">{{ __('dashboard.join_date') }}</p>
                                    </td>

                                </tr>
                                @foreach(\App\Models\User::whereNotNull('state_id')->orderBy('id' , 'desc')->paginate(5) as $supplier)
                                <tr>
                                    <td>
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-light">
                                                @if(isset($supplier->avatar))
                                                    <img height="20" src="{{ url('storage/' . $supplier->avatar) }}"/>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0">{{ $supplier->name }}
                                        </h5>
                                    </td>
                                    <td><div id="spak-chart3">
                                            {{ $supplier->followers->count() }}
                                        </div></td>

                                    <td><div id="spak-chart3">{{ $supplier->city->getTranslatedAttribute('name',\App::getLocale()) ?? '' }}</div></td>

                                    <td>
                                        @if(!empty($supplier->created_at))
                                            <p class="text-muted mb-0">{{ $supplier->created_at ?? '' }}</p>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('sellerss.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ __('dashboard.last') }} {{ __('dashboard.n_users') }}</h4>
                    <div>
                        <div class="text-center">
                            <p class="mb-2">{{ __('dashboard.total') }} {{ __('dashboard.n_users') }}</p>
                            <h4>{{ count(\App\Models\User::whereNull('state_id')->get()) }}</h4>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-centered table-nowrap">
                                <tbody>
                                <tr style="background: rgba(3,3,3,0.1)">
                                    <td>
                                        {{ __('dashboard.image') }}
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0">{{ __('dashboard.name') }}</h5>
                                    </td>
                                    <td><div id="spak-chart3">{{ __('dashboard.country') }}</div></td>
                                    <td>
                                        <p class="text-muted mb-0">{{ __('dashboard.join_date') }}</p>
                                    </td>
                                </tr>
                                @foreach(\App\Models\User::whereNull('state_id')->orderBy('id' , 'desc')->paginate(5) as $user)
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-light">
                                                    @if(isset($user->avatar))
                                                        <img height="20" src="{{ url('storage/' . $user->avatar) }}"/>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-0">{{ $user->name }}
                                            </h5>
                                        </td>
                                        <td>
                                            <div id="spak-chart3">
                                                {{ $user->country->getTranslatedAttribute('name',\App::getLocale()) ?? '' }}
                                            </div>
                                        </td>
                                        <td>
                                            @if(!empty($user->created_at))
                                                <p class="text-muted mb-0">{{ $user->created_at ?? '' }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">{{ __('dashboard.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--         --}}
    <!-- end row -->

@endsection
@section('backend-footer')

@endsection