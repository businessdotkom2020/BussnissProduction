@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @php
                        $favourites_ids = \App\Models\Favorite::where([['user_id',$user->id]])->get();
                        $comments_ids = \App\Models\Review::where([['user_id',$user->id]])->get();
                    @endphp
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            <th>{{ __('dashboard.name') }}</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.phone') }}</th>
                            <td>{{ $user->mobile }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.country') }}</th>
                            <td>{{ $user->country->getTranslatedAttribute('name',\App::getLocale()) }}</td>
                        </tr>
                    </table>
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#fav" role="tab" aria-selected="true">
                                <span class="d-block d-sm-block"><i class="fas fa-heart"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.fav') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $favourites_ids->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#req" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">
                                     {{ __('dashboard.req') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->requests->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#comm" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="far fa-grin-stars"></i></span>
                                <span class="d-none d-sm-block">
                                     {{ __('dashboard.comm') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $comments_ids->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#follow" role="tab" aria-selected="false">
                                <span class="d-block d-sm-block"><i class="far fa-handshake"></i></span>
                                <span class="d-none d-sm-block">
                                     {{ __('dashboard.following') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->following->count() }}</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="fav" role="tabpanel">
                            <div class="row">
                                <?php
                                    $favourites_ids = \App\Models\Favorite::where([['user_id',$user->id]])->orderBy('id', 'asc')->get();
                                ?>
                                @foreach($favourites_ids as $fav)
                                <div class="col-md-6 col-xl-3">
                                    <div class="card">
                                        @if($fav->favorited_type == 'App\Models\Product')
                                            <?php
                                            $product = \App\Models\Product::find($fav->favorited_id);
                                            ?>
                                                @isset($request->image)
                                                    <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                                @endisset
                                        @elseif($fav->favorited_type == 'App\Models\Request')
                                            <?php
                                            $product = \App\Models\Request::find($fav->favorited_id);
                                            ?>
                                                @isset($request->image)
                                                    <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                                @endisset
                                        @elseif($fav->favorited_type == 'App\Models\Service')
                                            <?php
                                            $product = \App\Models\Service::find($fav->favorited_id);
                                            ?>
                                                @isset($request->image)
                                                    <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                                @endisset
                                        @endif
                                        <div class="card-body">
                                            <h4 class="card-title mt-0">
                                                @if($fav->favorited_type == 'App\Models\Product')
                                                    <?php
                                                    $product = \App\Models\Product::find($fav->favorited_id);
                                                    echo $product->getTranslatedAttribute('name',\App::getLocale());
                                                    ?>
                                                @elseif($fav->favorited_type == 'App\Models\Request')
                                                    <?php
                                                    $product = \App\Models\Request::find($fav->favorited_id);
                                                    echo $product->getTranslatedAttribute('name',\App::getLocale());
                                                    ?>
                                                @elseif($fav->favorited_type == 'App\Models\Service')
                                                    <?php
                                                    $product = \App\Models\Service::find($fav->favorited_id);
                                                    echo $product->name;
                                                    ?>
                                                @endif
                                            </h4>
                                            <small class="text-info">
                                                @if($fav->favorited_type == 'App\Models\Product')
                                                    {{ __('dashboard.product') }}
                                                @elseif($fav->favorited_type == 'App\Models\Request')
                                                    {{ __('dashboard.request') }}
                                                @elseif($fav->favorited_type == 'App\Models\Service')
                                                    {{ __('dashboard.service') }}
                                                @endif
                                            </small>
                                            <p class="card-text">
                                                @if($fav->favorited_type == 'App\Models\Product')
                                                    <?php
                                                    $product = \App\Models\Product::find($fav->favorited_id);
                                                    echo str_limit($product->getTranslatedAttribute('description',\App::getLocale()), 110);
                                                    ?>
                                                @elseif($fav->favorited_type == 'App\Models\Request')
                                                    <?php
                                                    $product = \App\Models\Request::find($fav->favorited_id);
                                                    echo str_limit($product->getTranslatedAttribute('description',\App::getLocale()), 110);
                                                    ?>
                                                @elseif($fav->favorited_type == 'App\Models\Service')
                                                    <?php
                                                    $product = \App\Models\Service::find($fav->favorited_id);
                                                    echo str_limit($product->description, 110);
                                                    ?>
                                                @endif
                                            </p>
                                            @if($fav->favorited_type == 'App\Models\Product')
                                                <?php
                                                $product = \App\Models\Product::find($fav->favorited_id);
                                                ?>
                                                    <a href="{{ route('productss.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            @elseif($fav->favorited_type == 'App\Models\Request')
                                                <?php
                                                $product = \App\Models\Request::find($fav->favorited_id);
                                                ?>
                                                    <a href="{{ route('requestss.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            @elseif($fav->favorited_type == 'App\Models\Service')
                                                <?php
                                                $product = \App\Models\Service::find($fav->favorited_id);
                                                ?>
                                                    <a href="{{ route('servicess.show' , $product->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="comm" role="tabpanel">
                            <div class="row">
                                <?php
                                $comms_ids = \App\Models\Review::where([['user_id',$user->id]])->orderBy('id', 'asc')->get();
                                ?>
                                @foreach($comms_ids as $fav)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            @if($fav->reviewed_id == 'App\Models\Product')
                                                <?php
                                                $product = \App\Models\Product::find($fav->reviewed_id);
                                                ?>
                                                @isset($request->image)
                                                    <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                                @endisset
                                            @elseif($fav->reviewed_type == 'App\Models\Request')
                                                <?php
                                                $product = \App\Models\Request::find($fav->reviewed_id);
                                                ?>
                                                    @isset($request->image)
                                                        <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                                    @endisset
                                            @elseif($fav->reviewed_type == 'App\Models\Service')
                                                <?php
                                                $product = \App\Models\Service::find($fav->reviewed_id);
                                                ?>
                                                    @isset($request->image)
                                                        <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                                    @endisset
                                            @elseif($fav->reviewed_type == 'App\Models\User')
                                                <?php
                                                $product = \App\Models\User::find($fav->reviewed_id);
                                                ?>
                                                    @isset($request->image)
                                                        <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                                    @endisset
                                            @endif
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    @if($fav->reviewed_type == 'App\Models\Product')
                                                        <?php
                                                        $product = \App\Models\Product::find($fav->reviewed_id);
                                                        echo $product->getTranslatedAttribute('name',\App::getLocale());
                                                        ?>
                                                    @elseif($fav->reviewed_type == 'App\Models\Request')
                                                        <?php
                                                        $product = \App\Models\Request::find($fav->reviewed_id);
                                                        echo $product->getTranslatedAttribute('name',\App::getLocale());
                                                        ?>
                                                    @elseif($fav->reviewed_type == 'App\Models\Service')
                                                        <?php
                                                        $product = \App\Models\Service::find($fav->reviewed_id);
                                                        echo $product->getTranslatedAttribute('name',\App::getLocale());
                                                        ?>
                                                    @elseif($fav->reviewed_type == 'App\Models\User')
                                                        <?php
                                                        $product = \App\Models\User::find($fav->reviewed_id);
                                                        echo $product->name;
                                                        ?>
                                                    @endif
                                                </h4>
                                                <small class="text-info">
                                                    @if($fav->reviewed_type == 'App\Models\Product')
                                                        {{ __('dashboard.product') }}
                                                    @elseif($fav->reviewed_type == 'App\Models\Request')
                                                        {{ __('dashboard.request') }}
                                                    @elseif($fav->reviewed_type == 'App\Models\Service')
                                                        {{ __('dashboard.service') }}
                                                    @elseif($fav->reviewed_type == 'App\Models\User')
                                                        {{ __('dashboard.user') }}
                                                    @endif
                                                </small>
                                                <br>
                                                <br>
                                                <a href="{{ route('reviews.show' , $fav->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="req" role="tabpanel">
                            <div class="row">
                                @foreach(\App\Models\Request::where('user_id' , $user->id)->orderBy('id', 'desc')->get() as $request)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            @isset($request->image)
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$request->image)}}" alt="image">
                                            @endisset
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    {{ $request->getTranslatedAttribute('name',\App::getLocale()) }}
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.request') }}
                                                </small>
                                                <br>
                                                <br>
                                                <a href="{{ route('requestss.show' , $request->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="follow" role="tabpanel">
                            <div class="row">
                                @foreach($user->following()->get() as $follower)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card">
                                            @isset($request->image)
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$follower->avatar)}}" alt="image">
                                            @endisset
                                            <div class="card-body">
                                                <h4 class="card-title mt-0">
                                                    {{ $follower->name }}
                                                </h4>
                                                <small class="text-info">
                                                    {{ __('dashboard.user') }}
                                                </small>
                                                <br>
                                                <br>
                                                <a href="{{ route('sellerss.show' , $follower->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('dashboard.visit') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('users.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('users.edit' , $user->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                    <a href="{{ route('delete_user' , $user->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection