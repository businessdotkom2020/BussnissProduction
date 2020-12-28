@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css"
          rel="stylesheet"/>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.add') @lang('dashboard.job')</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('jobss.store') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('dashboard.select') @lang('dashboard.supplier')</label>
                                    <select name="user_id" class="form-control select2" required>
                                        <option value="" selected disabled hidden>--- @lang('dashboard.select') @lang('dashboard.supplier') ---</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">@lang('dashboard.title')</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="@lang('dashboard.job') @lang('dashboard.title')" value="{{ old('title') }}" required>
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">@lang('dashboard.desc')</label>
                                    <textarea rows="10" type="text" name="description"
                                              class="form-control summernote"
                                              id="description" placeholder="@lang('dashboard.desc')"
                                              required>{{ old('description') }}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="year_experience">@lang('dashboard.experience')</label>
                                    <input type="text" name="year_experience" class="form-control" id="year_experience"
                                           placeholder="@lang('dashboard.experience')" value="{{ old('year_experience') }}" required>
                                    @error('year_experience')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="career_level">@lang('dashboard.career_level')</label>
                                    <input type="text" name="career_level" class="form-control" id="career_level"
                                           placeholder="@lang('dashboard.career_level')" value="{{ old('career_level') }}" required>
                                    @error('career_level')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="open_positions">@lang('dashboard.open_positions')</label>
                                    <input type="number" name="open_positions" class="form-control" id="open_positions"
                                           placeholder="@lang('dashboard.open_positions')" value="{{ old('open_positions') }}" required>
                                    @error('open_positions')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="job_address">@lang('dashboard.job_address')</label>
                                    <textarea rows="10" type="text" name="job_address"
                                              class="form-control summernote"
                                              id="job_address" placeholder="@lang('dashboard.job_address')"
                                              required>{{ old('job_address') }}</textarea>
                                    @error('job_address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="date_announced">@lang('dashboard.date_announced')</label>
                                    <input type="date" name="date_announced" class="form-control" id="date_announced"
                                           placeholder="@lang('dashboard.date_announced')" value="{{ old('date_announced') }}" required>
                                    @error('date_announced')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="salary">@lang('dashboard.salary')</label>
                                    <input type="number" min="0" name="salary" class="form-control" id="salary"
                                           placeholder="@lang('dashboard.salary')" value="{{ old('salary') }}" required>
                                    @error('salary')
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
    <script src="{{ asset('backend') }}/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-element.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
    <script src="{{ asset('backend') }}/image_uploader.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
@endsection
