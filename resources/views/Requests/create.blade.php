@extends('layouts.main')
@php
$menu = false ;
@endphp

@section('content')


<main class="main-content col-xs-12">
    <div class="add-req-wrap col-xs-12">
        <div class="container">
            <form action="{{route('RequestSave')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.request_name')</h4>
                    <input name="name" type="text" class="form-control">
                    @error('name')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.categories')</h4>
                    <select name="category_id" class="form-control">

                        @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)

                        <option value="{{$category->id}}">
                            {{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>


                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.description')</h4>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.request_images')</h4>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <button type="submit" class="btn">@lang('general.add_rquest')</button>
                </div>
            </form>
        </div>
    </div>
</main>


@endsection

@push('scripts')
<script src="{{ asset('/web/js/amir-upload-files.js')}}"></script>


@endpush
