@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ implode(' ', array_slice(explode(' ', $service->name), 0, 5)) }}</h4>
                    <hr>
                    @if(!empty($service->images))
                    <small>{{ __('dashboard.sub_images') }}</small>
                    <div class="images">
                        @foreach(json_decode($service->images) as $img)
                            <a target="_blank" href="{{ url('storage/'.$img)}}">
                                <img style="width: 100px;height: 100px" src="{{ url('storage/'.$img)}}" alt="">
                            </a>
                        @endforeach
                    </div>
                        <hr>
                    @endif
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            @if(!empty($service->images))
                            <th>{{ __('dashboard.image') }}</th>
                            <td>
                                @foreach(json_decode($service->images) as $key => $image)
                                    @if($key == 0)
                                        <a target="_blank" href="{{url('storage/'.$image)}}">
                                            <img style="width: 100px;height:100px;border-radius: 10px" src="{{url('storage/'.$image)}}" alt="">
                                        </a>
                                    @endif
                                @endforeach
                            </td>
                             @endif
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.name') }}</th>
                            <td>{{ implode(' ', array_slice(explode(' ', $service->name), 0, 5)) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.category') }}</th>
                            <td>
                                @if(isset($service->category))
                                    {{ $service->category->getTranslatedAttribute('name',\App::getLocale()) }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.supplier') }}</th>
                            <td>
                                <a target="_blank" href="{{ route('sellerss.show' , $service->owner->id ) }}">
                                    {{ $product->owner->name ?? '' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.desc') }}</th>
                            <td>{{ $service->description }}</td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('servicess.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('servicess.edit' , $service->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                    <a href="{{ route('delete_service' , $service->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection