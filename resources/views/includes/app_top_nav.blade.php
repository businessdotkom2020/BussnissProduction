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

            @unless (Auth::check())
            <a href="my-account.html" class="d-lg-show">My Account</a>
            @endunless

            <a href="assets/ajax/login.html" class="d-lg-show login sign-in"><i class="w-icon-account"></i>Sign
                In</a>
            <span class="delimiter d-lg-show">/</span>
            <a href="assets/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>
            <a href="assets/ajax/login.html" class="d-lg-show login sign-in"><i class="w-icon-store"></i>Sign
                In</a>
            <span class="delimiter d-lg-show">/</span>
            <a href="assets/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>
        </div>
    </div>
</div>