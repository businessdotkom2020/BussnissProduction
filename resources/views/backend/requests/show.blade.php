@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ implode(' ', array_slice(explode(' ', $request->getTranslatedAttribute('name',\App::getLocale())), 0, 5)) }}</h4>
                    <hr>
                    @if(!empty($request->images))
                    <small>{{ __('dashboard.sub_images') }}</small>
                    <div class="images">
                        @foreach(json_decode($request->images) as $img)
                            <a target="_blank" href="{{ url('storage/'.$img)}}">
                                <img style="width: 100px;height: 100px" src="{{ url('storage/'.$img)}}" alt="">
                            </a>
                        @endforeach
                    </div>
                        <hr>
                    @endif
                    <table class="table table-striped table-bordered dt-responsive nowrap">
                        <tr>
                            @if(!empty($request->images))
                            <th>{{ __('dashboard.image') }}</th>
                            <td>
                                @foreach(json_decode($request->images) as $key => $image)
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
                            <td>{{ implode(' ', array_slice(explode(' ', $request->getTranslatedAttribute('name','en')), 0, 5)) }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.category') }}</th>
                            <td>
                                @if(isset($request->category))
                                    {{ $request->category->getTranslatedAttribute('name',\App::getLocale()) }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.supplier') }}</th>
                            <td>
                                <a target="_blank" href="{{ route('sellerss.show' , $request->user->id ) }}">
                                    {{ $request->user->name ?? '' }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __('dashboard.desc') }}</th>
                            <td>{{ $request->description }}</td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('requestss.index') }}" style="width: 100%" class="btn btn-success">{{ __('dashboard.back') }}</a>
                    <a href="{{ route('requestss.edit' , $request->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-primary"><i class="mdi mdi-pencil font-size-18"></i></a>
                    <a href="{{ route('delete_request' , $request->id) }}" style="width: 100%;margin-top: 20px" class="btn btn-danger"><i class="mdi mdi-trash-can font-size-18"></i></a>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
@endsection