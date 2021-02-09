@extends('backend.layout.master')
@section('backend-head')
    @if(app()->getLocale() == 'en')
    <style>
        .tree li.branch{
            color: green!important;
        }
        .tree, .tree ul {

            list-style:none

        }

        .panel-primary > .panel-heading {
            color: #fff;
            background-color: #606ec3;
            border-color: #606ec3;
        }

        .panel-primary {

            border-color: #606ec3;
            margin: 3%;

        }
        .tree ul {

            margin-left:1em;

            position:relative

        }

        .tree ul ul {

            margin-left:.5em

        }

        .tree ul:before {

            content:"";

            display:block;

            width:0;

            position:absolute;

            top:0;

            bottom:0;

            left:0;

            border-left:1px solid

        }

        .tree li {

            margin:0;

            padding:0 1em;

            line-height:2em;

            color:red;

            font-weight:700;

            position:relative

        }

        .tree ul li:before {

            content:"";

            display:block;

            width:10px;

            height:0;

            border-top:1px solid;

            margin-top:-1px;

            position:absolute;

            top:1em;

            left:0

        }

        .tree ul li:last-child:before {

            background:#fff;

            height:auto;

            top:1em;

            bottom:0

        }

        .indicator {

            margin-right:5px;

        }

        .tree li a {

            text-decoration: none;

            color:#369;

        }

        .tree li button, .tree li button:active, .tree li button:focus {

            text-decoration: none;

            color:#369;

            border:none;

            background:transparent;

            margin:0px 0px 0px 0px;

            padding:0px 0px 0px 0px;

            outline: 0;

        }
    </style>
    @else
        <style>
            .tree li.branch{
                color: green!important;
            }
            .tree, .tree ul {

                list-style:none

            }

            .panel-primary > .panel-heading {
                color: #fff;
                background-color: #606ec3;
                border-color: #606ec3;
            }

            .panel-primary {

                border-color: #606ec3;
                margin: 3%;

            }
            .tree ul {

                margin-right:1em;

                position:relative

            }

            .tree ul ul {

                margin-right:.5em

            }

            .tree ul:before {

                content:"";

                display:block;

                width:0;

                position:absolute;

                top:0;

                bottom:0;

                right:0;

                border-right:1px solid

            }

            .tree li {

                margin:0;

                padding:0 1em;

                line-height:2em;

                color:red;

                font-weight:700;

                position:relative

            }

            .tree ul li:before {

                content:"";

                display:block;

                width:10px;

                height:0;

                border-top:1px solid;

                margin-top:-1px;

                position:absolute;

                top:1em;

                right:0

            }

            .tree ul li:last-child:before {

                background:#fff;

                height:auto;

                top:1em;

                bottom:0

            }

            .indicator {

                margin-left:5px;

            }

            .tree li a {

                text-decoration: none;

                color:#369;

            }

            .tree li button, .tree li button:active, .tree li button:focus {

                text-decoration: none;

                color:#369;

                border:none;

                background:transparent;

                margin:0px 0px 0px 0px;

                padding:0px 0px 0px 0px;

                outline: 0;

            }
        </style>
    @endif
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.categories_tree') }}</h4>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <ul style="list-style: disc" id="tree1">
                                @foreach($categories as $category)
                                    <hr>
                                    <li @if(count($category->children) > 0) style="cursor: pointer" @endif>
                                        {{$category->getTranslatedAttribute('name',app()->getLocale())}}
                                        <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-warning float-right mx-3">{{ __('dashboard.products') }} {{ $category->products->count() }}</a>
                                        <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-primary float-right mx-3">{{ __('dashboard.requests') }} {{ $category->requests->count() }}</a>
                                        <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-danger float-right mx-3">{{ __('dashboard.services') }} {{ $category->services->count() }}</a>
                                        <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-success float-right mx-3">{{ __('dashboard.sellers') }}
                                            <?php
                                                $cats = \App\Models\CategoryUser::where('category_id' , $category->id)->get();
                                                $user_ids = [];
                                                foreach ($cats as $cat){
                                                    array_push( $user_ids , $cat->user_id);
                                                }
                                                $users = \App\Models\User::whereIn('id',$user_ids)->get();
                                            ?>
                                            {{ $users->count() }}
                                        </a>
                                        @if(count($category->children))
                                            @include('backend.categories.category',['childs' => $category->children])
                                        @endif
                                    </li>
                                    <a href="{{ route('category_info',$category->id) }}">{{ __('dashboard.visit') }}</a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('backend-footer')
    <script>
        $.fn.extend({
            treed: function (o) {
                var openedClass = 'glyphicon-minus-sign';
                var closedClass = 'glyphicon-plus-sign';
                if (typeof o != 'undefined'){
                    if (typeof o.openedClass != 'undefined'){
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined'){
                        closedClass = o.closedClass;
                    }
                };
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function () {
                    var branch = $(this);
                    branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
                    branch.addClass('branch');
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                tree.find('.branch .indicator').each(function(){
                    $(this).on('click', function () {
                        $(this).closest('li').click();
                    });
                });
                tree.find('.branch>a').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                tree.find('.branch>button').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        $('#tree1').treed();
        $('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});
        $('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});
    </script>
@endsection