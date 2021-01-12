@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.edit') @lang('dashboard.role') " {{ $role->name }} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('roles.update' , $role->id) }}" class="needs-validation" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12 col-12 mb-3">
                                <label class="mb-1" for="name">{{ __('dashboard.role_group_name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('dashboard.role_group_name') }}" value="{{ $role->name }}" required>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-12 mb-3">
                                <hr>
                            </div>
                            <div class="col-md-12 col-12 mb-3">
                                <label>{{ __('dashboard.permissions') }}</label>
                                <br>
                                <div class="form-group" data-select2-id="126">
                                    <div class="row">
                                        @foreach($permission  as $value)
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input
                                                            @foreach($rolePermissions as $roleper)
                                                            @if($roleper == $value->id) checked @endif
                                                            @endforeach
                                                    type="checkbox" name="permission[]" class="custom-control-input" value="{{ $value->id }}" id="customCheck{{ $value->id }}">
                                                    <label class="custom-control-label" for="customCheck{{ $value->id }}">{{ $value['name_'.app()->getLocale()] }}</label>
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
