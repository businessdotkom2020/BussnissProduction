@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ implode(' ', array_slice(explode(' ', $product->getTranslatedAttribute('name',\App::getLocale())), 0, 5)) }}</h4>
                    <hr>
                    @if(!empty($product->images))
                    <small>{{ __('dashboard.sub_images') }}</small>
                    <div class="images">
                        @foreach(json_decode($product->images) as $img)
                            <a target="_blank" href="{{ url('storage/'.$img)}}">
                                <img style="width: 100px;height: 100px" src="{{ url('storage/'.$img)}}" alt="">
                            </a>
                        @endforeach
                    </div>
                        <hr>
                    @endif
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            @if(!empty($product->image))
                            <th>{{ __('dashboard.image') }}</th>
                            <td>
                                @if(isset($product->image))
                                    <a target="_blank" href="{{url('storage/'.$product->image)}}">
                                        <img style="width: 100px;height:100px;border-radius: 10px" src="{{url('storage/'.$product->image)}}" alt="">
                                    </a>
                                @else
                                    <img style="width: 100%;border-radius: 10px" src="{{ asset('backend/assets/images/empty.jpg') }}"/>
                                @endif
                            </td>
                             @endif
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.name_arabic') }}</th>
                            <td>{{ implode(' ', array_slice(explode(' ', $product->getTranslatedAttribute('name','ar')), 0, 5)) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.name_english') }}</th>
                            <td>{{ implode(' ', array_slice(explode(' ', $product->getTranslatedAttribute('name','en')), 0, 5)) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.category') }}</th>
                            @isset($product->category)
                            <td>{{ $product->category->getTranslatedAttribute('name',\App::getLocale()) }}</td>
                            @endisset
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.supplier') }}</th>
                            <td>
                                <a target="_blank" href="{{ route('sellerss.show' , $product->owner->id ) }}">
                                    {{ $product->owner->name ?? '' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.price') }}</th>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.dis_price') }}</th>
                            <td>{{ $product->sale_price }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.tag') }}</th>
                            <td>
                                @isset($product->tag)
                                    <a target="_blank" href="{{ route('tags.edit' , $product->tag->id) }}">
                                        {{ $product->tag->getTranslatedAttribute('name',\App::getLocale()) ?? '' }}
                                    </a>
                                @endisset
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.zone') }}</th>
                            <td>

                                @isset($product->zone)
                                    <a target="_blank" href="{{ route('zones.edit' , $product->zone->id) }}">
                                        {{ $product->zone->getTranslatedAttribute('name',\App::getLocale()) ?? '' }}
                                    </a>
                                @endisset
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.brand') }}</th>
                            <td>
                                @isset($product->brand)
                                    <a target="_blank" href="{{ route('brands.edit' , $product->brand->id) }}">
                                        {{ $product->brand->getTranslatedAttribute('name',\App::getLocale()) ?? '' }}
                                    </a>
                                @endisset
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.pro_condition') }}</th>
                            <td>{{ $product->product_condition }}</td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('productss.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('productss.edit' , $product->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                    <a href="{{ route('delete_product' , $product->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection