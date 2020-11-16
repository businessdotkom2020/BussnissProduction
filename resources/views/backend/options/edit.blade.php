@extends('backend.layout.master')
@section('backend-head')
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit App Settings</h4>
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
                                    <label for="whats">Whatsapp number</label>
                                    <input type="text" name="whats" class="form-control" id="whats" placeholder="whatsapp number" value="{{ $option->whatsapp }}" required>
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
                                    <label for="about_ar">About Us In Arabic</label>
                                    <textarea rows="10" type="text" name="about_ar" class="form-control" id="about_ar" placeholder="About Us In Arabic" required>{{$option->getTranslatedAttribute('about_us','ar')}}</textarea>
                                    @error('about_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_en">About Us In English</label>
                                    <textarea rows="10" type="text" name="about_en" class="form-control" id="about_en" placeholder="About Us In English" required>{{$option->about_us}}</textarea>
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
                                    <label for="terms_ar">Terms Conditions In Arabic</label>
                                    <textarea rows="10" type="text" name="terms_ar" class="form-control" id="terms_ar" placeholder="Terms Conditions In Arabic" required>{{$option->getTranslatedAttribute('terms_conditions','ar')}}</textarea>
                                    @error('terms_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="terms_en">Terms Conditions In English</label>
                                    <textarea rows="10" type="text" name="terms_en" class="form-control" id="terms_en" placeholder="About Us In English" required>{{$option->terms_conditions}}</textarea>

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
                                    <label for="privacy_ar">Privacy Policy In Arabic</label>
                                    <textarea rows="10" type="text" name="privacy_ar" class="form-control" id="privacy_ar" placeholder="Privacy Policy In Arabic" required>{{$option->getTranslatedAttribute('privacy_policy','ar')}}</textarea>
                                    @error('privacy_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="privacy_en">Privacy Policy In English</label>
                                    <textarea rows="10" type="text" name="privacy_en" class="form-control" id="privacy_en" placeholder="Privacy Policy In English" required>{{$option->privacy_policy}}</textarea>
                                    @error('privacy_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Submit</button>
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
