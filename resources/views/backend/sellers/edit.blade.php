@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <style>
        .fa-instagram {
            color: transparent;
            background: -webkit-radial-gradient(30% 107%, circle, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -o-radial-gradient(30% 107%, circle, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background-clip: text;
            -webkit-background-clip: text;
        }
    </style>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.edit') }} {{ __('dashboard.supplier') }} " {{ $user->name }} "</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('sellerss.update' , $user->id) }}" class="needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="store_image">{{ __('dashboard.image') }} ( {{ __('dashboard.optional') }} )</label>
                                <div class="custom-file">
                                    <input type="file" name="store_image" class="custom-file-input" id="store_image" onchange="readURL(this);">
                                    <label class="custom-file-label" for="store_image">{{ __('dashboard.select') }} {{ __('dashboard.image') }}</label>
                                    @error('store_image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    @if(!empty($user->avatar))
                                        <img id="blah" class="mt-3" src="{{ url('storage/' . $user->avatar) }}"/>
                                    @else
                                        <img id="blah" class="blah_create mt-3" src=""/>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="store_background">{{ __('dashboard.background') }} ( {{ __('dashboard.optional') }} )</label>
                                <div class="custom-file">
                                    <input type="file" name="store_background" class="custom-file-input" id="store_background" onchange="readURL2(this);">
                                    <label class="custom-file-label" for="store_background">{{ __('dashboard.select') }} {{ __('dashboard.image') }}</label>
                                    @error('store_background')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    @if(!empty($user->store_background))
                                        <img id="blah2" class="mt-3" src="{{ url('storage/' . $user->store_background) }}"/>
                                    @else
                                        <img id="blah2" class="blah_create mt-3" src=""/>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">{{ __('dashboard.name') }}</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('dashboard.name') }}" value="{{ $user->name }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">{{ __('dashboard.email') }}</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('dashboard.email') }}" value="{{ $user->email }}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">{{ __('dashboard.password') }} ( {{ __('dashboard.in_case_of') }} )</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="{{ __('dashboard.password') }} ( {{ __('dashboard.in_case_of') }} )">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mobile">{{ __('dashboard.phone') }}</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="{{ __('dashboard.phone') }}" value="{{ $user->mobile }}" required>
                                    @error('mobile')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="hotline">{{ __('dashboard.hotline') }}</label>
                                    <input type="text" name="hotline" class="form-control" id="hotline" placeholder="{{ __('dashboard.hotline') }}" value="{{ $user->hot_number }}" required>
                                    @error('hotline')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="street_no">{{ __('dashboard.street_no') }}</label>
                                    <input type="text" name="street_no" class="form-control" id="street_no" placeholder="{{ __('dashboard.street_no') }}" value="{{ $user->street_nom }}" required>
                                    @error('street_no')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="zip_code">{{ __('dashboard.zip_code') }}</label>
                                    <input type="text" name="zip_code" class="form-control" id="zip_code" placeholder="{{ __('dashboard.zip_code') }}" value="{{ $user->zip_code }}" required>
                                    @error('zip_code')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">{{ __('dashboard.address') }}</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="{{ __('dashboard.address') }}" value="{{ $user->address }}" required>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="category_ids">{{ __('dashboard.categories') }}</label>
                                    <select name="category_ids[]" class="select2 form-control select2-multiple" multiple="multiple" id="category_ids" required>
                                        @foreach($categories as $category)
                                            <option
                                                    @foreach($select_categories as $select_category)
                                                            @if($category->id == $select_category->id) selected @endif
                                                    @endforeach
                                                    value="{{ $category->id }}">{{ $category->name }} / {{$category->getTranslatedAttribute('name',\App::getLocale('ar'))}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_ids')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="country_id">{{ __('dashboard.country') }}</label>
                                    <select name="country_id" class="form-control select2" id="country_id" required>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state_id">{{ __('dashboard.state') }}</label>
                                    <select name="state_id" class="form-control select2" id="state_id" required>
                                        @foreach($states as $state)
                                            <option
                                                    @if($state->id == $user->state_id) selected @endif
                                                    value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('state_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city_id">{{ __('dashboard.city') }}</label>
                                    <select name="city_id" class="form-control select2" id="city_id" required>
                                        @foreach($cities as $city)
                                            <option
                                                    @if($city->id == $user->city_id) selected @endif
                                                    value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('city_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{ __('dashboard.optional_fileds') }}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="working_from">{{ __('dashboard.work_from') }}</label>
                                    <input type="time" name="working_from" class="form-control" id="working_from" placeholder="{{ __('dashboard.work_from') }}" value="{{ $user->working_from }}">
                                    @error('working_from')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="working_to">{{ __('dashboard.work_to') }}</label>
                                    <input type="time" name="working_to" class="form-control" id="working_to" placeholder="{{ __('dashboard.work_to') }}" value="{{ $user->working_to }}">
                                    @error('working_to')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="delivery_time">{{ __('dashboard.delivery_time') }}</label>
                                    <input type="time" name="delivery_time" class="form-control" id="delivery_time" placeholder="Delivery Time" value="{{ $user->delivery_time }}">
                                    @error('delivery_time')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="delivery_fee">{{ __('dashboard.delivery_fee') }}</label>
                                    <input type="number" name="delivery_fee" class="form-control" id="delivery_fee" placeholder="{{ __('dashboard.delivery_fee') }}" value="{{ $user->delivery_fee }}">
                                    @error('delivery_fee')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="year_founded">{{ __('dashboard.founded_year') }}</label>
                                    <input type="date" name="year_founded" class="form-control" id="year_founded" placeholder="{{ __('dashboard.founded_year') }}" value="{{ $user->year_founded }}">
                                    @error('year_founded')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">
                                        <i class="fab fa-facebook-square text-primary fa-2x"></i>
                                    </label>
                                    <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Facebook" value="{{ $user->facebook_url }}">
                                    @error('facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">
                                        <i style="color: rgb(10 102 194);" class="fab fa-linkedin fa-2x"></i>
                                    </label>
                                    <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Linkedin" value="{{ $user->linkedin_url }}">
                                    @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </label>
                                    <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Instagram" value="{{ $user->instagram_url }}">
                                    @error('instagram')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube">
                                        <i class="fab fa-youtube-square text-danger fa-2x"></i>
                                    </label>
                                    <input type="text" name="youtube" class="form-control" id="youtube" placeholder="Youtube" value="{{ $user->youtube_url }}">
                                    @error('youtube')
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
    <!-- end row -->
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
@endsection
