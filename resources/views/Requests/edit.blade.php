@extends('layouts.main')
@php
$menu = false ;
@endphp

@section('content')

<main class="main-content col-xs-12">
    <div class="add-req-wrap col-xs-12">
        <div class="container">
            <form action="{{route('RequestUpdate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.request_name')</h4>
                    <input name="name" value="{{$request->name}}" type="text" class="form-control">
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
                    @error('category_id')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.description')</h4>
                    <textarea name="description" class="form-control"></textarea>
                    @error('description')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.request_images')</h4>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>

                    <div class="prof-img s-item col-md-4 col-sm-6 col-xs-12">
                        <div style="height: 200px; margin-top: 2px;">
                            <label>
                                <i class="fa fa-camera"></i>
                                <input type="file"
                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <img src="https://i.pinimg.com/originals/e8/9a/6b/e89a6b2894928d34e0a8a48d9d9e3f47.jpg"
                                    id="blah" alt="your image">
                            </label>
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
                    @error('images')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
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
