@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.add') }} {{ __('dashboard.role') }}</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('roles.store') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12 mb-3">
                                <label class="mb-1" for="name">{{ __('dashboard.role_group_name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('dashboard.role_group_name') }}" value="{{ old('name') }}" required>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <label>{{ __('dashboard.permissions') }}</label>
                                <div class="clearfix"></div>
                                <br>
                                <div class="form-group" data-select2-id="126">
                                    <div class="row">
                                        @foreach($permissions  as $permission)
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" name="permission[]" class="custom-control-input" value="{{ $permission->id }}" id="customCheck{{ $permission->id }}">
                                                    <label class="custom-control-label" for="customCheck{{ $permission->id }}">{{ $permission['name_'.app()->getLocale()] }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="{{ asset('backend') }}/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-element.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
    <script src="{{ asset('backend') }}/image_uploader.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
@endsection
