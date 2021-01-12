@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('dashboard.edit_settings')</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('settings_form') }}" class="needs-validation" novalidate>
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="face">Facebook</label>
                                    <input type="text" name="face" class="form-control" id="face" placeholder="Facebook" value="{{ $option->facebook }}" required>
                                    @error('face')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="LinkedIn" value="{{ $option->linked_in }}" required>
                                    @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube">YouTube</label>
                                    <input type="text" name="youtube" class="form-control" id="youtube" placeholder="YouTube" value="{{ $option->youtube }}" required>
                                    @error('youtube')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="insta">Instagram</label>
                                    <input type="text" name="insta" class="form-control" id="insta" placeholder="instagram" value="{{ $option->instagram }}" required>
                                    @error('insta')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="whats">Whatsapp</label>
                                    <input type="text" name="whats" class="form-control" id="whats" placeholder="whatsapp" value="{{ $option->whatsapp }}" required>
                                    @error('whats')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_ar">@lang('dashboard.about_us_ar')</label>
                                    <textarea rows="10" type="text" name="about_ar" class="form-control" id="about_ar" placeholder="@lang('dashboard.about_us_ar')" required>{{$option->getTranslatedAttribute('about_us','ar')}}</textarea>
                                    @error('about_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_en">@lang('dashboard.about_us_en')</label>
                                    <textarea rows="10" type="text" name="about_en" class="form-control" id="about_en" placeholder="@lang('dashboard.about_us_en')" required>{{$option->about_us}}</textarea>
                                    @error('about_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="terms_ar">@lang('dashboard.terms_ar')</label>
                                    <textarea rows="10" type="text" name="terms_ar" class="form-control" id="terms_ar" placeholder="@lang('dashboard.terms_ar')" required>{{$option->getTranslatedAttribute('terms_conditions','ar')}}</textarea>
                                    @error('terms_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="terms_en">@lang('dashboard.terms_en')</label>
                                    <textarea rows="10" type="text" name="terms_en" class="form-control" id="terms_en" placeholder="@lang('dashboard.terms_en')" required>{{$option->terms_conditions}}</textarea>

                                    @error('terms_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="privacy_ar">@lang('dashboard.privacy_ar')</label>
                                    <textarea rows="10" type="text" name="privacy_ar" class="form-control" id="privacy_ar" placeholder="@lang('dashboard.privacy_ar')" required>{{$option->getTranslatedAttribute('privacy_policy','ar')}}</textarea>
                                    @error('privacy_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="privacy_en">@lang('dashboard.privacy_en')</label>
                                    <textarea rows="10" type="text" name="privacy_en" class="form-control" id="privacy_en" placeholder="@lang('dashboard.privacy_en')" required>{{$option->privacy_policy}}</textarea>
                                    @error('privacy_en')
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
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-element.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
@endsection
