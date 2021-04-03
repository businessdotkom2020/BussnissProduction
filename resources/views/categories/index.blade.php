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
                <div class="categories-block-content">
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li>
                                        <a href="#" class="category-toggle">Open Inner</a>
                                        <ul class="inner">
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#" class="category-toggle">Open Inner #2</a>
                                        <ul class="inner">
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li>
                                        <a href="#" class="category-toggle">category name</a>
                                        <ul class="inner">
                                            <li>
                                                <a href="#" class="category-toggle">sub sub category name</a>
                                                <ul class="inner">
                                                    <li><a href="#">sub sub sub category name</a></li>
                                                    <li><a href="#">sub sub sub category name</a></li>
                                                    <li><a href="#">sub sub sub category name</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="#">category name</a></li>

                                    <li><a href="#">category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="categories-block-content">
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li>
                                        <a href="#" class="category-toggle">Open Inner</a>
                                        <ul class="inner">
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#" class="category-toggle">Open Inner #2</a>
                                        <ul class="inner">
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                            <li><a href="#">sub category name</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li>
                                        <a href="#" class="category-toggle">category name</a>
                                        <ul class="inner">
                                            <li>
                                                <a href="#" class="category-toggle">sub sub category name</a>
                                                <ul class="inner">
                                                    <li><a href="#">sub sub sub category name</a></li>
                                                    <li><a href="#">sub sub sub category name</a></li>
                                                    <li><a href="#">sub sub sub category name</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="#">category name</a></li>

                                    <li><a href="#">category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="categories-block-content">
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="categories-block-content">
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="categories-block">
                        <h4>main category name</h4>
                        <ul class="accordion">
                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 1</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 2</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 3</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="category-toggle" href="javascript:void(0);">category name 4</a>
                                <ul class="inner">
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                    <li><a href="#">sub category name</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</main>


@endsection


@push('scripts')




@endpush
