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
                <h4 class="mb-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">Business</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                                    <p class="text-truncate font-size-14 mb-2">Admins</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Suppliers</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Suppliers Clients</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Suppliers Branches</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Normal Users</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Products</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Requests</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Jobs</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Services</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Tags</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Brands</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Slider Web Images</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Slider App Images</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Counties</p>
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
                                    <p class="text-truncate font-size-14 mb-2">States</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Cities</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Industrial Zones</p>
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
                                    <p class="text-truncate font-size-14 mb-2">Attributes</p>
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
    <!-- end row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Last Suppliers</h4>
                    <div>
                        <div class="text-center">
                            <p class="mb-2">Total Suppliers</p>
                            <h4>{{ count(\App\Models\User::whereNotNull('state_id')->get()) }}</h4>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-centered table-nowrap">
                                <tbody>
                                <tr style="background: rgba(3,3,3,0.1)">
                                    <td>
                                        Image
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0">Name</h5>
                                    </td>
                                    <td><div id="spak-chart3">Followers</div></td>
                                    <td>
                                        <p class="text-muted mb-0">Join Date</p>
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
                                        <h5 class="font-size-14 mb-0">{{ $supplier->name }}</h5>
                                    </td>
                                    <td><div id="spak-chart3">
                                            {{ $supplier->followers->count() }}
                                        </div></td>
                                    <td>
                                        <p class="text-muted mb-0">{{ $supplier->created_at->toDateString() }}</p>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('sellerss.index') }}" class="btn btn-primary btn-sm">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Last Normal Users</h4>
                    <div>
                        <div class="text-center">
                            <p class="mb-2">Total Normal User</p>
                            <h4>{{ count(\App\Models\User::whereNull('state_id')->get()) }}</h4>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-centered table-nowrap">
                                <tbody>
                                <tr style="background: rgba(3,3,3,0.1)">
                                    <td>
                                        Image
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-0">Name</h5>
                                    </td>
                                    <td><div id="spak-chart3"></div></td>
                                    <td>
                                        <p class="text-muted mb-0">Join Date</p>
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
                                            <h5 class="font-size-14 mb-0">{{ $user->name }}</h5>
                                        </td>
                                        <td><div id="spak-chart3"></div></td>
                                        <td>
                                            <p class="text-muted mb-0">{{ $user->created_at->toDateString() }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@section('backend-footer')

@endsection