@extends('layouts.main')
@php $menu = false ;
@endphp
@push('styles')
<link rel="stylesheet" href="{{ asset('/web/css/custom-save-supplier.css')}}">
<link rel="stylesheet" href="{{ asset('/web/css/custom-register-supplier.css')}}">

@endpush
@section('content')

<main class="main-content col-xs-12">
    <div class="supp-prof-about col-xs-12">
        <div class="container">
            <form action="{{route('update_password')}}" method="post" enctype="multipart/form-data"> @csrf
                <div class="ito-h col-xs-12 ubranch">
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.old_password')</h4>
                        <input required type="password" name="old_password" placeholder="@lang('general.old_password')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.password')</h4>
                        <input required type="password" name="password" placeholder="@lang('general.password')"
                            class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>@lang('general.password_confirmation')</h4>
                        <input required type="password" name="password_confirmation"
                            placeholder="@lang('general.password_confirmation')" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12"> </div>
                    <div class="form-group col-md-12 col-xs-12"></div>
                    <br>
                    <div class="form-group col-md-6 col-xs-12 center">
                        <button type="submit" class="btn">@lang('general.save')</button>
                    </div>
                </div>
            </form>
            <div class="form-group col-md-12 col-xs-12">
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.name')</h4>
                    <input type="text" required name="name" placeholder="@lang('general.name')" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.mobile')</h4>
                    <input type="text" required name="mobile" placeholder="@lang('general.mobile')"
                        class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.email')</h4>
                    <input type="text" required name="email" placeholder="@lang('general.email')" class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.mobile')</h4>
                    <input type="text" required name="mobile" placeholder="@lang('general.mobile')"
                        class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.land_line')</h4>
                    <input type="text" required name="land_line" placeholder="@lang('general.land_line')"
                        class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.working_to')</h4>
                    <input type="text" required name="mobile" placeholder="@lang('general.working_to')"
                        class="form-control">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.work_from')</h4>
                    <input type="text" required name="work_from" placeholder="@lang('general.work_from')"
                        class="form-control">
                </div>

                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.delivery_fee')</h4>
                    <input type="text" required name="delivery_fee" placeholder="@lang('general.delivery_fee')"
                        class="form-control">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.address')</h4>
                    <textarea type="text" required name="address" placeholder="@lang('general.address')"
                        class="form-control"></textarea>
                </div>

            </div>

        </div>
    </div>
</main>

@endsection

@push('scripts')

@endpush
