@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.edit') }} {{ __('dashboard.zone') }} " {{$zone->getTranslatedAttribute('name',app()->getLocale())}} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('zones.update' , $zone->id) }}" class="needs-validation"
                          novalidate enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">{{ __('dashboard.name_arabic') }}</label>
                                    <input type="text" name="name_ar" class="form-control" id="validationCustom01"
                                           placeholder="{{ __('dashboard.name_arabic') }}" value="{{$zone->getTranslatedAttribute('name','ar')}}" required>
                                    @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom02">{{ __('dashboard.name_english') }}</label>
                                    <input type="text" name="name_en" class="form-control" id="validationCustom02"
                                           placeholder="{{ __('dashboard.name_english') }}" value="{{ $zone->name }}" required>
                                    @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom03">{{ __('dashboard.country') }}</label>
                                    <select class="form-control select2" id="validationCustom03"
                                            required>
                                        @foreach($countries as $country)
                                            <option
                                                    @if($country->id == $zone->state->country_id) selected @endif
                                            value="{{ $country->id }}">{{$country->getTranslatedAttribute('name','ar')}}
                                                / {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="state_id">{{ __('dashboard.state') }}</label>
                                    <select name="state_id" class="form-control select2" id="state_id" required>
                                        @foreach($states as $state)
                                            <option
                                                    @if($state->id == $zone->state_id) selected @endif
                                            value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('state_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 col-md-12 images mb-3">
                                <label for="image">{{ __('dashboard.image') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image" onchange="readURL(this);">
                                    <label class="custom-file-label" for="image">{{ __('dashboard.select') }} {{ __('dashboard.image') }}</label>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    @if(!empty($zone->image))
                                        <img id="blah" class="mt-3" src="{{ url('storage/' . $zone->image) }}"/>
                                    @else
                                        <img id="blah" class="blah_create mt-3" src=""/>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
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
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
@endsection
