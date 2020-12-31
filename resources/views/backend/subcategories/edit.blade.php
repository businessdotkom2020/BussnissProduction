@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.edit') }} {{ __('dashboard.subcategory') }} " {{$category->getTranslatedAttribute('name',app()->getLocale())}} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('subcategories.update' , $category->id) }}"
                          class="needs-validation" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">{{ __('dashboard.name_arabic') }}</label>
                                    <input type="text" name="name_ar" class="form-control" id="validationCustom01"
                                           placeholder="{{ __('dashboard.name_arabic') }}" value="{{$category->getTranslatedAttribute('name','ar')}}" required>
                                    @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom02">{{ __('dashboard.name_english') }}</label>
                                    <input type="text" name="name_en" class="form-control" id="validationCustom02"
                                           placeholder="{{ __('dashboard.name_english') }}" value="{{ $category->name_en }}" required>
                                    @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom02">{{ __('dashboard.parent_cat') }}</label>
                                    <select name="parent_id" class="form-control" required>
                                        @foreach($parents as $parent)
                                            <option
                                                    @if($parent->id == $category->parent_id) selected @endif
                                            value="{{ $parent->id }}">{{$parent->getTranslatedAttribute('name','ar')}} / {{ $parent->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ __('dashboard.image') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" onchange="readURL(this);" >
                                    <label class="custom-file-label" for="customFile">{{ __('dashboard.select') }} {{ __('dashboard.image') }}</label>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    @if(!empty($category->image))
                                        <img id="blah" class="mt-3" src="{{ asset('storage/' . $category->image) }}"/>
                                    @else
                                        <img id="blah" class="mt-3" src="{{ asset('backend/assets/images/empty.jpg') }}"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">{{ __('dashboard.submit') }}/button>
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
