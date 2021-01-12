<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend') }}/assets/images/logo-sm-light.png" alt=""
                                         height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt=""
                                         style="width: 95%;height: 10%;border-radius: 5px;opacity:1">
                                </span>
                </a>

                <a href="/" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend') }}/assets/images/logo-sm-light.png" alt=""
                                         height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('backend') }}/assets/images/logo-light.png" alt=""
                                         style="width: 95%;height: 10%;border-radius: 5px;opacity: 1">
                                </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>
        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>
            {{--<div class="dropdown d-inline-block">--}}
            {{--<button type="button" class="btn header-item noti-icon waves-effect"--}}
            {{--id="page-header-notifications-dropdown"--}}
            {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--<i class="ri-notification-3-line"></i>--}}
            {{--<span class="noti-dot"></span>--}}
            {{--</button>--}}
            {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"--}}
            {{--aria-labelledby="page-header-notifications-dropdown">--}}
            {{--<div class="p-3">--}}
            {{--<div class="row align-items-center">--}}
            {{--<div class="col">--}}
            {{--<h6 class="m-0"> Notifications </h6>--}}
            {{--</div>--}}
            {{--<div class="col-auto">--}}
            {{--<a href="#!" class="small"> View All</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div data-simplebar style="max-height: 230px;">--}}
            {{--<a href="#" class="text-reset notification-item">--}}
            {{--<div class="media">--}}
            {{--<div class="avatar-xs mr-3">--}}
            {{--<span class="avatar-title bg-primary rounded-circle font-size-16">--}}
            {{--<i class="ri-shopping-cart-line"></i>--}}
            {{--</span>--}}
            {{--</div>--}}
            {{--<div class="media-body">--}}
            {{--<h6 class="mt-0 mb-1">Your order is placed</h6>--}}
            {{--<div class="font-size-12 text-muted">--}}
            {{--<p class="mb-1">If several languages coalesce the grammar</p>--}}
            {{--<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--<a href="#" class="text-reset notification-item">--}}
            {{--<div class="media">--}}
            {{--<img src="{{ asset('backend') }}/assets/images/users/avatar-3.jpg"--}}
            {{--class="mr-3 rounded-circle avatar-xs" alt="user-pic">--}}
            {{--<div class="media-body">--}}
            {{--<h6 class="mt-0 mb-1">James Lemire</h6>--}}
            {{--<div class="font-size-12 text-muted">--}}
            {{--<p class="mb-1">It will seem like simplified English.</p>--}}
            {{--<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--<a href="#" class="text-reset notification-item">--}}
            {{--<div class="media">--}}
            {{--<div class="avatar-xs mr-3">--}}
            {{--<span class="avatar-title bg-success rounded-circle font-size-16">--}}
            {{--<i class="ri-checkbox-circle-line"></i>--}}
            {{--</span>--}}
            {{--</div>--}}
            {{--<div class="media-body">--}}
            {{--<h6 class="mt-0 mb-1">Your item is shipped</h6>--}}
            {{--<div class="font-size-12 text-muted">--}}
            {{--<p class="mb-1">If several languages coalesce the grammar</p>--}}
            {{--<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</a>--}}

            {{--<a href="#" class="text-reset notification-item">--}}
            {{--<div class="media">--}}
            {{--<img src="{{ asset('backend') }}/assets/images/users/avatar-4.jpg"--}}
            {{--class="mr-3 rounded-circle avatar-xs" alt="user-pic">--}}
            {{--<div class="media-body">--}}
            {{--<h6 class="mt-0 mb-1">Salena Layfield</h6>--}}
            {{--<div class="font-size-12 text-muted">--}}
            {{--<p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>--}}
            {{--<p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="p-2 border-top">--}}
            {{--<a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">--}}
            {{--<i class="mdi mdi-arrow-right-circle mr-1"></i> View More..--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button class="btn header-item noti-icon waves-effect">
                    <a href="{{ url('admin') }}">
                        <i style="color:{{ Request::is('admin')? 'black': '' }}" class="fas fa-tachometer-alt"></i>
                    </a>
                </button>
            </div>

            @if(\App::getLocale() == 'ar')
                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button class="btn header-item noti-icon waves-effect">
                        <a href="{{url('locale/en')}}">
                            EN
                        </a>
                    </button>
                </div>
            @elseif(\App::getLocale() == 'en')
                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button class="btn header-item noti-icon waves-effect">
                        <a href="{{url('locale/ar')}}">
                            عربي
                        </a>
                    </button>
                </div>
            @endif


            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button class="btn header-item noti-icon waves-effect">
                    <a href="{{ route('settings_page') }}">
                        <i style="color:{{ Request::is('admin/settings')? 'black': '' }}" class="fas fa-cogs"></i>
                    </a>
                </button>
            </div>
            <div class="dropdown d-none d-lg-inline-block ml-1">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn header-item noti-icon waves-effect">
                        <i class="ri-logout-circle-r-line"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>