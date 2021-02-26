<footer class="main-footer col-xs-12">
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <div class="f-top col-xs-12">
        <div class="container">
            <div class="f-item col-md-3 col-xs-12">
                <img src="{{ asset('/web/images/splash_logo.png')}}" alt="">
            </div>
            <div class="f-item col-md-3 col-xs-12">
                <h4>@lang('general.fast_links')</h4>
                <ul>
                    <li>
                        <a href="{{url('/')}}">{{__('general.home')}}</a>
                    </li>
                    <li>
                        <a href="{{url('/about')}}">{{__('general.about')}}</a>
                    </li>
                    <li>
                        <a href="{{url('/services')}}">{{__('general.services')}}</a>
                    </li>


                    <li>
                        <a href="{{url('/privacy')}}">{{__('general.privacy')}}</a>
                    </li>
                    <li>
                        <a href="{{url('/terms')}}">{{__('general.terms')}}</a>
                    </li>
                </ul>
            </div>
            <div class="f-item col-md-3 col-xs-12">
                <h4>{{__('general.my_profile')}}</h4>
                <ul>
                    <li>
                        <a href="{{url('/')}}">{{__('general.account')}}</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">{{__('general.favourites')}}</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">{{__('general.notifications')}}</a>
                    </li>
                </ul>
            </div>
            <div class="f-item col-md-3 col-xs-12">
                <h4>social</h4>
                <div class="social-f">
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
                </div>
                <div class="f-form">
                    <h4>@lang('general.newsletter')</h4>
                    <p>@lang('general.newsletter_benefits')</p>
                    <form action="#" method="get">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="your email">
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
    <div class="f-bottom col-xs-12">
        <div class="container">
            <p>@lang('general.copy_right')</p>
        </div>
    </div>
</footer>
<div class="toTop">
    <i class="fa fa-chevron-up"></i>
</div>
