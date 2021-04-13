@extends('layouts.main')

@php $menu = false ; @endphp
@section('title', trans('general.login'))

@section('content')



<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
    <div class="container">
        <h3>@lang('general.login')</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>@lang('general.login')</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="sign-wrap col-xs-12">
        <div class="container">
            <form action="{{route('do_login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="email" required placeholder="@lang('general.email')" class="form-control">

                    @error('email')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror


                </div>
                <div class="form-group">
                    <input type="password" name="password" required placeholder="@lang('general.password')"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox">
                        @error('password')
                        <div class="alert" style="color:#a94442">{{ $message }}</div>
                        @enderror

                        <span>@lang('general.remember_me')</span>
                    </label>
                    <a href="{{url('forget/password')}}">@lang('general.forget_password')</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">@lang('general.login')</button>
                    <p>@lang('general.register_text') <a href="{{url('register')}}">@lang('general.here') </a>
                        @lang('general.or') <a
                            href="{{url('register/supplier')}}">@lang('general.register_as_supplier')</a></p>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection
