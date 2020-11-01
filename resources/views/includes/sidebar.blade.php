

<header class="main-head col-xs-12">
    <div class="top-head col-xs-12">
        <div class="container">
            <div class="left-un">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">{{__('general.language')}}</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('locale/ar')}}">عربي</a>
                            </li>
                            <li>
                                <a href="{{url('locale/en')}}">English</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="wel-msg">
                    <p>{{__('general.top_header_welcome')}}</p>
                </div>
            </div>
            <div class="right-un">
                <div class="h-links">
                    {{-- <a href="#" data-toggle="modal" data-target="letter_pop">
                        <i class="fa fa-envelope-o"></i>
                        newsletter
                    </a> --}}
                </div>
                <div class="social">
                <a href="{{\App\Models\AppSetting::first()->facebook}}">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="{{\App\Models\AppSetting::first()->twitter}}">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="{{\App\Models\AppSetting::first()->linked_in}}">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="{{\App\Models\AppSetting::first()->instagram}}">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="{{\App\Models\AppSetting::first()->whatsapp}}">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    <a href="mailto:info@businessdotkomcom">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="mid-head col-xs-12">
        <div class="container">
            <div class="logo">
            <a href="{{url('/')}}">
                    <img src="{{ asset('/web/images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="search-g">
                <form action="{{url('search')}}" method="get">
                    <div class="form-group">
                        <input type="search" name="keyword" class="form-control" placeholder="{{__('general.search_products')}}">
                        <select class="form-control">
                            <option selected disabled>{{__('general.select_category')}}</option>
                            @foreach (\App\Models\Category::whereNull('parent_id')->get() as $category)
                            <option>{{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                            @endforeach


                        </select>
                        <button type="submit" class="btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="u-controls">
                @if(!Auth::check())
            <a class="mg-0" href="{{url('login')}}">{{__('general.login')}}</a>/
            <a href="{{url('register')}}">{{__('general.register')}}</a>/
            <a href="{{url('register/supplier')}}">{{__('general.register_supplier')}}</a>
@else
                {{-- <a href="javascript:void(0)" class="op-notif">
                    <i class="fa fa-bell"></i>
                    <b class="badgo">5</b>
                </a> --}}

<div style="display: flex;">

                <a href="javascript:void(0)" class="op-user" >
                    <i class="fa fa-user-o"></i>
                    {{Auth::user()->name}}
                </a>

                @if(Auth::user()->type= "supplier")
                {{-- <div style="background-image: url({{asset('/web/images/bbd.svg')}});padding: 5px;color: white;border-radius: 5px;margin-top: -7px;
margin-right: 10px;"> --}}

                {{-- <a style="color:white" href="#" class="op-user" >
                   Dashboard
                   <img style="max-width: 35px;" src="{{asset('/web/images/dashboard.svg')}}">
                </a> --}}
                {{-- </div> --}}
</div>
@endif

              @endif

            </div>
        </div>
    </div>
    <div class="bottom-head col-xs-12">
        <div class="container">
            <div class="categories">
                <ul>
                <li class="menu-item-has-children {{$menu ? 'active' :  ''}}">
                        <a href="javascript:void(0)">
                            <i class="fa fa-bars"></i>

                            @lang('general.browse_categories')
                        </a>
                        <ul class="sub-menu">
                            @foreach (\App\Models\Category::whereNull('parent_id')->limit(10)->get() as $category)

                        <li class="{{$category->hasChild ? "has-mega-sub" : ""}}">
                                <a href="{{url('category/'.$category->id)}}">
                                    <img src="{{url('storage/'.$category->image)}}" alt="">
                                    {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                                </a>
@if($category->hasChild == true)

                                <ul class="mega-sub" >
                                    @foreach ($category->children as $sub_cat)
                                        <li>

                                        <div class="s-item col-md-3 col-xs-12">
                                            <h4>
                                                <a href="{{url('category/'.$sub_cat->id)}}">
                                                    {{$sub_cat->getTranslatedAttribute('name',\App::getLocale())}}
                                                </a>
                                            </h4>
                                            @if($sub_cat->hasChild == true)

                                            <ul>
                                                @foreach ($sub_cat->children as $sub_sub_cat)

                                                <li>
                                                    <a href="{{url('category/'.$sub_sub_cat->id)}}">
                                                        {{$sub_sub_cat->getTranslatedAttribute('name',\App::getLocale())}}
                                                    </a>
                                                </li>


                                                @endforeach

                                            </ul>
                                            @endif

                                        </div>
                                        @endforeach
                                    </li>


                                </ul>
                            </li>
                                @endif


                            @endforeach



                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="main-nav">
                <li>
                    <a href="{{url('/')}}">{{__('general.home')}}</a>
                </li>
                <li>
                    <a href="{{url('about')}}">{{__('general.about')}}</a>
                </li>
                <li>
                    <a href="{{url('services')}}">{{__('general.services')}}</a>
                </li>
                <li>
                    <a href="{{url('requests')}}">
                        {{__('general.requests')}}
                        <!--<i class="badge-n">{{__('general.new_notf')}} 10</i>-->
                    </a>
                </li>
                <li>
                    <a href="{{url('privacy')}}">{{__('general.privacy')}}</a>
                </li>
                <li>
                    <a href="#">{{__('general.contact_us')}}</a>
                </li>
            </ul>
            <div class="reqs">
                <a href="{{url('request/new')}}">
                    <i class="fa fa-plus"></i>
                    {{__('general.add_rquest')}}
                </a>
            </div>
        </div>
    </div>
</header>



<div class="sticky-sidebar main-sidebar">
    <div class="st-head">
        <ul class="nav-tabs">
            <li class="active">
                <a href="#" data-toggle="tab" data-target="#menu-panel">@lang('general.menu')</a>
            </li>
            <li>
                <a href="#" data-toggle="tab" data-target="#cats-panel">@lang('general.categories')</a>
            </li>
        </ul>
    </div>
    <div class="st-body">
        <div class="tab-content">
            <div class="tab-pane fade active in" id="menu-panel">
                <ul>
                    <li>
                    <a href="{{url('/')}}">{{__('general.home')}}</a>
                </li>
                <li>
                    <a href="{{url('about')}}">{{__('general.about')}}</a>
                </li>
                <li>
                    <a href="{{url('services')}}">{{__('general.services')}}</a>
                </li>
                <li>
                    <a href="#">
                        {{__('general.requests')}}
                        <i class="badge-n"> {{__('general.new_notf')}} 10</i>
                    </a>
                </li>
                <li>
                    <a href="{{url('privacy')}}">@lang('general.privacy')</a>
                </li>
                <li>
                    <a href="#">@lang('general.contact_us')</a></a>
                </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="cats-panel">
                <ul>
                    @foreach (\App\Models\Category::whereNull('parent_id')->limit(10)->get() as $category)


                            <li class="{{ $category->hasChild ? "menu-item-has-children" : ""}}">
                                <a href="javascript:void(0)">
                                    <img src="{{url('storage/'.$category->image)}}" alt="">
                                    {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                                </a>
                                @if($category->hasChild == true)

                                <ul class="sub-menu">
                                    @foreach ($category->children as $sub_cat)

                                    <li>
                                        <div class="s-item">
                                            <h4>
                                                 <a href="#">
                                                {{$sub_cat->getTranslatedAttribute('name',\App::getLocale())}}
                                                 </a>

                                            </h4>
                                            @if($sub_cat->hasChild == true)

                                            <ul>
                                                @foreach ($sub_cat->children as $sub_sub_cat)

                                                <li>
                                                    <a href="#">
                                                    {{$sub_sub_cat->getTranslatedAttribute('name',\App::getLocale())}}
                                                    </a>
                                                </li>
                                                @endforeach


                                            </ul>
                                            @endif

                                        </div>


                                    </li>
                                    @endforeach

                                </ul>
@endif
                            </li>
                            @endforeach


                        </ul>
            </div>
        </div>
    </div>
</div>

<div class="sticky-sidebar notifications">
    <div class="st-head">
        <h3>notifications</h3>
    </div>
    <div class="st-body">
        <ul class="notif-list">
            <li class="new-not">
                <a href="#">
                    <img src="{{ asset('/web/images/marks/nike.png')}}" alt="">
                    <div class="data">
                        <h4>supplier name</h4>
                        <p>Competently whiteboard granular content and turnkey applications. Holisticly build global e-markets rather than enterprise ideas. Distinctively iterate scalable vortals before open-source collaboration and idea-sharing. Distinctively.</p>
                    </div>
                </a>
            </li>





        </ul>
    </div>
    <div class="st-footer">
        <a href="#" class="btn">all notifications</a>
    </div>
</div>
                @if(Auth::check())

<div class="sticky-sidebar user-area">
    <div class="st-body">
        <div class="user-top">
            <div class="user-cover" style="background-image: url({{ asset('/web/images/cover.jpg')}})"></div>
            <div class="user-pic">
                <img src="{{ asset('/web/images/marks/1.png')}}" alt="">
            </div>
                            <h3>{{Auth::user()->name}}</h3>

        </div>
        <div class="user-inner">
            <ul>
                <li>
                    <a href="{{url('/profile/update')}}">@lang('general.my_profile')</a>
                </li>
                <li>
                    @if ( Auth::user()->type == 'supplier')
                <li>
                    <a href="{{url('/dashboard')}}">@lang('general.dashboard')</a>
                </li>
                @endif
                <li>
                    <a href="{{url('about')}}">@lang('general.about')</a>
                </li>


                <li>
                    <a href="{{route('logout')}}">@lang('general.logout')</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endif
<div class="sticky-sidebar search-area">
    <div class="st-head">
        <h3>search</h3>
    </div>
    <div class="st-body">
        <form action="#" method="get">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="@lang('general.searherech')">
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option selected disabled>@lang('general.select_category')</option>
                    @foreach (\App\Models\Category::whereNull('parent_id')->get() as $category)
                        <option>{{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">
                    <i class="fa fa-search"></i>
                    @lang('general.search')
                </button>
            </div>
        </form>
    </div>
</div>
<div class="mob-header">
    <div class="container">
        <div class="logo">
        <a href="#">
            <img src="{{ asset('/web/images/logo.png')}}" alt="">
        </a>
    </div>
    <div class="mob-btns">
        <button type="button" class="op-search">
            <i class="fa fa-search"></i>
        </button>
        <button type="button" class="op-menu">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    </div>
</div>
<div class="sticky-menu">
    <a href="#">
        <i class="fa fa-home"></i>
        <span>@lang('general.home')</span>
    </a>
    <a href="javascript:void(0)" class="op-notif">
        <i class="fa fa-bell"></i>
        <span>@lang('general.notifications')</span>
        <b class="badgo">5</b>
    </a>
    <a href="#">
        <i class="fa fa-plus"></i>
        <span>@lang('general.add_request')</span>
    </a>
    <a href="#">
        <i class="fa fa-download"></i>
        <span>@lang('general.requests')</span>
        <b class="badgo">5</b>
    </a>
    <a href="javascript:void(0)" class="op-user">
        <i class="fa fa-user-o"></i>
        <span>@lang('general.my_profile')</span>
    </a>
</div>
<div class="overlay-s"></div>


