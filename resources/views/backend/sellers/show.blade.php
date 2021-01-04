@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
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
                    </table>
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
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection