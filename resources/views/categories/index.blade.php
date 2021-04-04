@extends('layouts.main')
@php
$menu = false ;
@endphp

@push('styles')



@endpush

@section('content')


<div class="overlay-s"></div>
<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('web/images/cover.jpg')}})">
    <div class="container">
        <h3>all categories</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>all categories</li>
        </ul>
    </div>
</div>

<main class="main-content categories-pagee col-xs-12">
    <div class="sign-wrap col-xs-12">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)

                <div class="col-md-3">
                    <div class="categories-block">
                        <h4>{{$category->getTranslatedAttribute('name',\App::getLocale())}}</h4>
                        <ul class="accordion">

                            @foreach ($category->children as $subCategory)

                            <li>
                                <a class="category-toggle"
                                    href="javascript:void(0);">{{$subCategory->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                <ul class="inner">
                                    @foreach ($category->children as $SubSubCategory)

                                    <li><a
                                            href="{{url('category/'.$SubSubCategory->id)}}">{{$SubSubCategory->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                    </li>

                                    @endforeach

                                </ul>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</main>


@endsection


@push('scripts')




@endpush
