@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $brand->name }}</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            @if(!empty($brand->image))
                                <th>{{ __('dashboard.image') }}</th>
                                <td>
                                    @if(isset($brand->image))
                                        <a target="_blank" href="{{url('storage/'.$brand->image)}}">
                                            <img style="width: 100px;height:100px;border-radius: 10px" src="{{url('storage/'.$brand->image)}}" alt="">
                                        </a>
                                    @else
                                        <img style="width: 100%;border-radius: 10px" src="{{ asset('backend/assets/images/empty.jpg') }}"/>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.name') }}</th>
                            <td>{{ $brand->name }}</td>
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
                                    <span class="badge badge-pill badge-danger float-right">{{ $brand->products->count() }}</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="products" role="tabpanel">
                            <div class="row">
                                @foreach($brand->products as $product)
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
                    </div>
                    <a href="{{ route('brands.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('brands.edit' , $brand->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                    <a href="{{ route('delete_brand' , $brand->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection