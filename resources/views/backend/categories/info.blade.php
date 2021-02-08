@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $category->name }}</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            <th>{{ __('dashboard.name') }}</th>
                            <td>{{$category->getTranslatedAttribute('name',app()->getLocale())}}</td>
                        </tr>
                    </table>
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#products" role="tab" aria-selected="true">
                                <span class="d-block d-sm-block"><i class="fas fa-cart-arrow-down"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.products') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $category->products->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#services" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-taxi"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.services') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $category->services->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#requests" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-praying-hands"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.requests') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $category->requests->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#sellers" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="fas fa-praying-hands"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.sellers') }}
                                    <span class="badge badge-pill badge-danger float-right">
                                         <?php
                                        $cats = \App\Models\CategoryUser::where('category_id' , $category->id)->get();
                                        $user_ids = [];
                                        foreach ($cats as $cat){
                                            array_push( $user_ids , $cat->user_id);
                                        }
                                        $users = \App\Models\User::whereIn('id',$user_ids)->get();
                                        ?>
                                        {{ $users->count() }}
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="products" role="tabpanel">
                            <div class="row">
                                @foreach($category->products as $product)
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
                                @foreach($category->services as $product)
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
                                @foreach($category->requests as $product)
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
                        <div class="tab-pane" id="sellers" role="tabpanel">
                            <div class="row">
                                @foreach($users as $user)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="{{ url('storage/' . $user->avatar) }}" alt="image">
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    {{ $user->name }}
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.seller') }}
                                                </small>
                                                <br>
                                                <a href="{{ route('sellerss.show' , $user->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection