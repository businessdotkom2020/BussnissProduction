<div class="header-top">
    <div class="container">
        <div class="header-left">
            <p class="welcome-msg">{{__('general.top_header_welcome')}}</p>
        </div>
        <div class="header-right">
            <div class="dropdown">
                <a href="#currency">{{current_currency()}}</a>
                <div class="dropdown-box">
                    @foreach (currency()->getCurrencies() as $currency)
                    <a href="{{route('currency',['code' => $currency['code']])}}">{{$currency['name']}}</a>
                    @endforeach
                </div>
            </div>
            <!-- End of DropDown Menu -->

            <div class="dropdown">
                <a href="#locale">{{current_locale()}}</a>

                <div class="dropdown-box">

                    <a href="{{url('locale/en')}}">

                        English
                    </a>
                    <a href="{{url('locale/ar')}}">

                        عربي
                    </a>


                </div>
            </div>
            <!-- End of Dropdown Menu -->
            <span class="divider d-lg-show"></span>
            <a href="blog.html" class="d-lg-show">Blog</a>
            <a href="contact-us.html" class="d-lg-show">Contact Us</a>

            @if (Auth::check())
            <a href="my-account.html" class="d-lg-show">My Account</a>
            @endif
            <a href="{{url('register/supplier')}}" class="d-lg-show login sign-in"><i
                    class="w-icon-account"></i>{{__('general.login')}}</a>
            <span class="delimiter d-lg-show">/</span>
            <a href="{{url('login')}}" class="ml-0 d-lg-show login register">{{__('general.register')}}</a>
            <a href="{{url('register')}}" class="d-lg-show login sign-in"><i
                    class="w-icon-store"></i>{{__('general.login')}}
            </a>
            <span class="delimiter d-lg-show">/</span>
            <a href="{{url('register/supplier')}}"
                class="ml-0 d-lg-show login register">{{__('general.register_supplier')}}</a>
        </div>
    </div>
</div>