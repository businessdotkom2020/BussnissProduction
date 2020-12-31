@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.edit') }} {{ __('dashboard.user') }} " {{ $user->name }} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('users.update' , $user->id) }}" class="needs-validation" novalidate>
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">{{ __('dashboard.name') }}</label>
                                    <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="{{ __('dashboard.name') }}" value="{{ $user->name }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom02">{{ __('dashboard.email') }}</label>
                                    <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="{{ __('dashboard.email') }}" value="{{ $user->email }}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom03">{{ __('dashboard.password') }} ( {{ __('dashboard.in_case_of') }} )</label>
                                    <input type="password" name="password" class="form-control" id="validationCustom03" placeholder="{{ __('dashboard.password') }} ( {{ __('dashboard.in_case_of') }} )">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom04">{{ __('dashboard.phone') }}</label>
                                    <input type="text" name="mobile" class="form-control" id="validationCustom04" placeholder="{{ __('dashboard.phone') }}" value="{{ $user->mobile }}" required>
                                    @error('mobile')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom03">{{ __('dashboard.country') }}</label>
                                    <select name="country_id" class="form-control" id="validationCustom03" required>
                                        @foreach($countries as $country)
                                            <option
                                                    @if($country->id == $user->country_id) selected @endif
                                                    value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
    <script src="{{ asset('backend') }}/mine.js"></script>
@endsection
