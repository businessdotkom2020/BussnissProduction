@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.edit') }} {{ __('dashboard.sli') }}</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('sliders.update' , $slider->id) }}" class="needs-validation" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="type" class="control-label">{{ __('dashboard.where_appear') }}</label>
                                    <select name="type" class="form-control select2" id="type" required>
                                        <option @if($slider->type == 'web') selected @endif value="web">{{ __('dashboard.web_slider') }}</option>
                                        <option @if($slider->type == 'app') selected @endif value="app">{{ __('dashboard.app_slider') }}</option>
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
                                    <input type="file" name="image" class="custom-file-input" id="customFile" onchange="readURL(this);">
                                    <label class="custom-file-label" for="customFile">{{ __('dashboard.select') }} {{ __('dashboard.app_slider') }}</label>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    @if(!empty($slider->images))
                                        <img id="blah" class="mt-3" src="{{ url('storage/' . $slider->images) }}"/>
                                    @else
                                        <img id="blah" class="blah_create mt-3" src=""/>
                                    @endif
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
                                    <input type="radio" id="customRadio1" name="kind" class="custom-control-input" @if(!empty($slider->category_id)) checked @endif value="1" onclick="formChoice(1)">
                                    <label class="custom-control-label" for="customRadio1">{{ __('dashboard.for') }} {{ __('dashboard.category') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="customRadio2" name="kind" class="custom-control-input" @if(!empty($slider->product_id)) checked @endif value="2" onclick="formChoice(2)">
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
                                        <option hidden @if(empty($slider->category_id)) selected @endif disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.category') }}</option>
                                        @foreach($categories as $category)
                                            <option
                                                    @if($slider->category_id == $category->id) selected @endif
                                                    value="{{ $category->id }}">{{ $category->name }} / {{$category->getTranslatedAttribute('name','ar')}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div id="field2" class="form-group">
                                    <label for="product_id" class="control-label">{{ __('dashboard.product') }}</label>
                                    <select name="product_id" class="form-control select2" id="product_id">
                                        <option hidden @if(empty($slider->product_id)) selected @endif disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.product') }}</option>
                                        @foreach($products as $product)
                                            <option
                                                    @if($slider->product_id == $product->id) selected @endif
                                                    value="{{ $product->id }}">{{ $product->name }} / {{$product->getTranslatedAttribute('name','ar')}}</option>
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
        var radiosSmoking = document.getElementsByName('kind');
        if (!(radiosSmoking[1].checked)) {
            $('#field1').show();
        }else {
            $('#field2').show();
        }

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
