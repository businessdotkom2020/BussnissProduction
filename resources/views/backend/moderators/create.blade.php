@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endsection    
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.add') @lang('dashboard.moderator')</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('moderators.store') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">@lang('dashboard.name')</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="@lang('dashboard.name')" value="{{ old('name') }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">@lang('dashboard.email')</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="@lang('dashboard.email')" value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">@lang('dashboard.phone')</label>
                                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="@lang('dashboard.phone')" required>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">@lang('dashboard.password')</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="@lang('dashboard.password')" required>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-3">
                                <label class="mb-1" for="email">@lang('dashboard.confirm_password')</label>
                                <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="@lang('dashboard.confirm_password')" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-3">
                                <label>
                                    @lang('dashboard.roles')
                                </label>
                                <div class="form-group" data-select2-id="126">
                                    <select style="width: 100%" name="roles[]" class="select2 form-control select2-hidden-accessible" multiple="" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        @foreach($roles as $role)
                                            <option value="{{ $role }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" name="status" class="custom-control-input" value="1" id="customCheck2" checked>
                                    <label class="custom-control-label" for="customCheck2">@lang('dashboard.active')</label>
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
    <script src="{{ asset('backend') }}/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-element.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
    <script src="{{ asset('backend') }}/image_uploader.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
@endsection
