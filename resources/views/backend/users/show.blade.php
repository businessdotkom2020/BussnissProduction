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
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#fav" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fas fa-heart"></i></span>
                                <span class="d-none d-sm-block">
                                   {{ __('dashboard.fav') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $favourites_ids->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#req" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">
                                     {{ __('dashboard.req') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $user->requests->count() }}</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#comm" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">
                                     {{ __('dashboard.comm') }}
                                    <span class="badge badge-pill badge-danger float-right">{{ $comments_ids->count() }}</span>
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
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                        @elseif($fav->favorited_type == 'App\Models\Request')
                                            <?php
                                            $product = \App\Models\Request::find($fav->favorited_id);
                                            ?>
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                        @elseif($fav->favorited_type == 'App\Models\Service')
                                            <?php
                                            $product = \App\Models\Service::find($fav->favorited_id);
                                            ?>
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
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
                                                    echo $product->getTranslatedAttribute('name',\App::getLocale());
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
                                                    echo str_limit($product->getTranslatedAttribute('description',\App::getLocale()), 110);
                                                    ?>
                                                @endif
                                            </p>
                                            @if($fav->favorited_type == 'App\Models\Product')
                                                <?php
                                                $product = \App\Models\Product::find($fav->favorited_id);
                                                ?>
                                                    <a href="#" class="btn btn-primary waves-effect waves-light">Visit Product</a>
                                            @elseif($fav->favorited_type == 'App\Models\Request')
                                                <?php
                                                $product = \App\Models\Request::find($fav->favorited_id);
                                                ?>
                                                    <a href="#" class="btn btn-primary waves-effect waves-light">Visit Request</a>
                                            @elseif($fav->favorited_type == 'App\Models\Service')
                                                <?php
                                                $product = \App\Models\Service::find($fav->favorited_id);
                                                ?>
                                                    <a href="#" class="btn btn-primary waves-effect waves-light">Visit Service</a>
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
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                            @elseif($fav->reviewed_type == 'App\Models\Request')
                                                <?php
                                                $product = \App\Models\Request::find($fav->reviewed_id);
                                                ?>
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                            @elseif($fav->reviewed_type == 'App\Models\Service')
                                                <?php
                                                $product = \App\Models\Service::find($fav->reviewed_id);
                                                ?>
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
                                            @elseif($fav->reviewed_type == 'App\Models\User')
                                                <?php
                                                $product = \App\Models\User::find($fav->reviewed_id);
                                                ?>
                                                <img class="card-img-top img-fluid" src="{{ url('storage/'.$product->image)}}" alt="image">
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
                                                <a href="#" class="btn btn-primary waves-effect waves-light">Visit Review</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="req" role="tabpanel">
                            <p class="mb-0">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                single-origin coffee squid. Exercitation +1 labore velit, blog
                                sartorial PBR leggings next level wes anderson artisan four loko
                                farm-to-table craft beer twee. Qui photo booth letterpress,
                                commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                aesthetic magna 8-bit.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection