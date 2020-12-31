@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.edit') @lang('dashboard.att') "{{$attribute->getTranslatedAttribute('name',\App::getLocale())}}"</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('attributes.update' , $attribute->id) }}" class="needs-validation" novalidate>
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">@lang('dashboard.value_arabic')</label>
                                    <input type="text" name="name_ar" class="form-control" id="validationCustom01" placeholder="@lang('dashboard.value_arabic')" value="{{$attribute->getTranslatedAttribute('name','ar')}}" required>
                                    @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom02">@lang('dashboard.value_english')</label>
                                    <input type="text" name="name_en" class="form-control" id="validationCustom02" placeholder="@lang('dashboard.value_english')" value="{{ $attribute->name }}" required>
                                    @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <label class="control-label">@lang('dashboard.select') @lang('dashboard.categories')</label>
                                    <select name="category_ids[]" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="@lang('dashboard.select') ...">
                                        @foreach($categories as $category)
                                            <option
                                                    @foreach($select_categories as $select_category)
                                                        @if($select_category->id == $category->id)
                                                            selected
                                                        @endif
                                                    @endforeach
                                                    value="{{ $category->id }}">{{ $category->name }} / {{$category->getTranslatedAttribute('name','ar')}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_ids')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
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
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
@endsection
