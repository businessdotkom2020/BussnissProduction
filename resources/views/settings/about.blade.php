@extends('layouts.main')
@php
$menu = false ;
@endphp

@section('content')

<div class="overlay-s"></div>
        <div class="jumpo col-xs-12" style="background-image: url({{ asset('web/images/cover.jpg')}})">
            <div class="container">
                <h3>about us</h3>
                <ul>
                    <li>
                        <a href="{{url('/')}}">@lang('general.home')</a>
                    </li>
                    <li>@lang('general.about')</li>
                </ul>
            </div>
        </div>
        <main class="main-content col-xs-12">
            <div class="about-wrap col-xs-12">
                <div class="container">
                    <div class="ab-img col-md-6 col-xs-12">
                        <img src="{{ asset('web/images/splash_logo.png')}}" alt="">
                    </div>
                    <div class="ab-data col-md-6 col-xs-12">
                        <h3>@lang('general.about')</h3>
                        <p>
                                                        @php
                                $lang = (request('lang')) ? request('lang') : \App::getLocale();
                            @endphp
                            {{\App\Models\AppSetting::first()->getTranslatedAttribute('about_us',$lang)}}
                            </p>
                    </div>
                </div>
            </div>
        </main>

@endsection


@push('scripts')



@endpush