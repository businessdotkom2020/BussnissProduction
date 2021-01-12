@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.edit') @lang('dashboard.client') " {{ $client->name }} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('clients.update' , $client->id) }}"
                          class="needs-validation" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom01">@lang('dashboard.name')</label>
                                    <input type="text" name="name" class="form-control" id="validationCustom01"
                                           placeholder="@lang('dashboard.name')" value="{{ $client->name }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom02">@lang('dashboard.supplier')</label>
                                    <select name="user_id" class="form-control" required>
                                        @foreach($suppliers as $supplier)
                                            <option
                                                    @if($supplier->id == $client->user_id) selected @endif
                                            value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>@lang('dashboard.image')</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" onchange="readURL(this);" >
                                    <label class="custom-file-label" for="customFile">@lang('dashboard.select') @lang('dashboard.image')</label>
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
