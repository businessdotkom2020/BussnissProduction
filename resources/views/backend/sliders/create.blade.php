@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.add') }} {{ __('dashboard.sli') }}</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('sliders.store') }}" class="needs-validation" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="type" class="control-label">{{ __('dashboard.where_appear') }}</label>
                                    <select name="type" class="form-control select2" id="type" required>
                                        <option hidden selected disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.where_appear') }}...!</option>
                                        <option value="web">{{ __('dashboard.web_slider') }}</option>
                                        <option value="app">{{ __('dashboard.app_slider') }}</option>
                                    </select>
                                    @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="image">{{ __('dashboard.image') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" onchange="readURL(this);" required>
                                    <label class="custom-file-label" for="customFile">{{ __('dashboard.select') }} {{ __('dashboard.image') }}</label>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <img id="blah" class="mt-3 blah_create" src=""/>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="type" class="control-label">{{ __('dashboard.silider_kind') }}</label>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="customRadio1" name="kind" class="custom-control-input" value="1" onclick="formChoice(1)">
                                    <label class="custom-control-label" for="customRadio1">{{ __('dashboard.for') }} {{ __('dashboard.category') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="customRadio2" name="kind" class="custom-control-input" value="2" onclick="formChoice(2)">
                                    <label class="custom-control-label" for="customRadio2">{{ __('dashboard.for') }} {{ __('dashboard.product') }}</label>
                                </div>
                            </div>
                            @error('kind')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="field1" class="form-group">
                                    <label for="category_id" class="control-label">{{ __('dashboard.category') }}</label>
                                    <select name="category_id" class="form-control select2" id="category_id">
                                        <option hidden selected disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.category') }}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{$category->getTranslatedAttribute('name', app()->getLocale())}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div id="field2" class="form-group">
                                    <label for="product_id" class="control-label">{{ __('dashboard.product') }}</label>
                                    <select name="product_id" class="form-control select2" id="product_id">
                                        <option hidden selected disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.product') }}</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{$product->getTranslatedAttribute('name',app()->getLocale())}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">{{ __('dashboard.submit') }}</button>
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
    <script>
        function formChoice(x)
        {
            if(x==1) {
                $('#field1').fadeIn('slow');
                $('#field2').hide();
            } else {
                $('#field2').fadeIn('slow');
                $('#field1').hide();
            }
        }
    </script>
@endsection
