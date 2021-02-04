@extends('layouts.main')
@php
$menu = false ;
@endphp
@section('title', trans('general.new_user'))

@section('content')

<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
    <div class="container">
        <h3>@lang('general.new_user')</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>@lang('general.new_user')</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="sign-wrap col-xs-12">
        <div class="container">
            <form action="{{route('do.user.register')}}" method="Post" enctype="multipart/form-data">
                @csrf
                
                <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>المعلومات الرئيسية</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>معلومات البلد</i></a>
                                </li>
                            </ul>
                        </div>
        
                        <form role="form" action="index.html" class="login-box">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    step 1
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">الخطوة التالية</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    step 2
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

                <div class="col-lg-4"></div>
                <div class="ito-h col-lg-4 col-xs-12">
                    <h4>@lang('general.profile_picture')</h4>
                    <div class="form-group col-xs-12">
                        <div class="prof-img pic">
                            <label>
                                <i class="fa fa-camera"></i>
                                <span>@lang('general.cheange')</span>
                                <input type="file" name="image" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                {{-- <img src="{{ asset('/web/images/default-avatar.png')}}" id="blah1" alt="your image"> --}}
                                <img src="https://invplatform.com/images/faces/male/default.png" id="blah1" alt="your image">
                            </label>
                            @error('image')
                            <div class="alert" style="color:#a94442">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>

                <div class="form-group">
                    <input type="text" name="name" required placeholder="@lang('general.full_name')" class="form-control">
                    @error('name')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="mobile" name="mobile" required placeholder="@lang('general.mobile')" class="form-control">
                    @error('mobile')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" required placeholder="@lang('general.email')" class="form-control">
                    @error('email')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-lg-12 col-xs-12">
                    <select class="form-control" name="country_id" required>
                        <option disabled>@lang('general.country')</option>
                        @foreach (\App\Models\Country::get() as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach

                    </select>

                    @error('country_id')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <input type="password" name="password" required placeholder="@lang('general.password')" class="form-control">

                    @error('password')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" required placeholder=" @lang('general.password_confirmation')" class="form-control">

                    @error('password_confirmation')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror

                </div>
                <div class="form-group">
                    <button type="submit" class="btn">@lang('general.register')</button>
                    <p>@lang('general.login_text')<a href="{{url('login')}}">@lang('general.login')</a></p>
                </div>
            </form>
        </div>
    </div>
</main>



@endsection
