@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.edit') @lang('dashboard.brand') " {{ $brand->name }} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('brands.update' , $brand->id) }}" class="needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom01">@lang('dashboard.name')</label>
                                    <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="@lang('dashboard.name')" value="{{ $brand->name }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 col-md-12 images mb-3">
                                <label for="image">{{ __('dashboard.main_image') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image" onchange="readURL(this);">
                                    <label class="custom-file-label" for="image">{{ __('dashboard.select') }} {{ __('dashboard.main_image') }}</label>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    @if(!empty($product->image))
                                        <img id="blah" class="mt-3" src="{{ url('storage/' . $brand->image) }}"/>
                                    @else
                                        <img id="blah" class="blah_create mt-3" src=""/>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">@lang('dashboard.submit')</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-element.init.js"></script>
@endsection
