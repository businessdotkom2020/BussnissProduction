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
                <a href="#language"><img src="https://portotheme.com/html/wolmart/assets/images/flags/eng.png"
                        alt="ENG Flag" width="14" height="8" class="dropdown-image"> ENG</a>
                <div class="dropdown-box">
                    <a href="#ENG">
                        <img src="https://portotheme.com/html/wolmart/assets/images/flags/eng.png" alt="ENG Flag"
                            width="14" height="8" class="dropdown-image">
                        ENG
                    </a>
                    <a href="#FRA">
                        <img src="https://portotheme.com/html/wolmart/assets/images/flags/fra.png" alt="FRA Flag"
                            width="14" height="8" class="dropdown-image">
                        FRA
                    </a>
                </div>
            </div>
            <!-- End of Dropdown Menu -->
            <span class="divider d-lg-show"></span>
            <a href="blog.html" class="d-lg-show">Blog</a>
            <a href="contact-us.html" class="d-lg-show">Contact Us</a>
            <a href="my-account.html" class="d-lg-show">My Account</a>

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