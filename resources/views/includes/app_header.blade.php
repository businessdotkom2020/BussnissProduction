<header class="header">
    @include('includes.app_top_nav')

    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="{{url('/')}}" class="mobile-menu-toggle  w-icon-hamburger">
                </a>
                <a href="{{url('/')}}" class="logo ml-lg-0">
                    <img src="{{ asset('/web/images/logo.png')}}" style="width: 206px; margin-bottom: 10px;" alt="lo\go"
                        width="144" height="45" />
                </a>
                <form method="get" action="#" class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                    <div class="select-box  ">
                        <select id="category" name="category">
                            <option value="">All Categories</option>

                            @foreach (\App\Models\Category::where('is_searchable',1)->get() as $category)
                            <option>{{$category->getTranslatedAttribute('name',current_locale())}}</option>

                            @endforeach


                        </select>
                    </div>
                    <input type="text" class="form-control  " name="search" id="search" placeholder="Search in..."
                        required />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call "></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal  mb-0">
                            <a href="mailto:#" class="text-capitalize ">Live Chat</a> or :</h4>
                        <a href="tel:#" class="phone-number font-weight-bolder  ls-50">0(800)123-456</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Wishlist</span>
                </a>
                <a class="compare label-down link d-xs-show" href="compare.html">
                    <i class="w-icon-compare"></i>
                    <span class="compare-label d-lg-show">Compare</span>
                </a>

            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown has-border {{Route::current()->getName() == 'home' ? "show-dropdown" : ""}}"
                        data-visible="false">
                        <a href="#" class="category-toggle text-dark   text-capitalize" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static"
                            title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>Browse Categories</span>
                        </a>

                        <div class="dropdown-box text-default">
                            <ul class="menu vertical-menu category-menu">
                                @foreach (\App\Models\Category::where('in_sidebar',1)->get() as $category)

                                <li>
                                    <a href="{{url('category/'.$category->id)}}">
                                        <i class="{{$category->icon}}"></i>
                                        {{$category->getTranslatedAttribute('name',current_locale())}}
                                    </a>

                                    @if($category->hasChild == true)

                                    <ul class="megamenu">

                                        @foreach ($category->children as $sub_cat)

                                        <li>
                                            <h4 class="menu-title">
                                                {{$sub_cat->getTranslatedAttribute('name',current_locale())}}</h4>
                                            <hr class="divider">
                                            @if($sub_cat->hasChild == true)

                                            <ul>
                                                @foreach ($sub_cat->children as $sub_sub_cat)

                                                <li>
                                                    <a
                                                        href="{{url('category/'.$sub_sub_cat->id)}}">{{$sub_sub_cat->getTranslatedAttribute('name',current_locale())}}</a>
                                                </li>


                                                @endforeach

                                            </ul>
                                            @endif
                                        </li>

                                        @endforeach

                                    </ul>

                                    @endif
                                </li>
                                @endforeach

                                <li>
                                    <a href="demo8-shop.html" class="font-weight-bold text-uppercase ls-25">
                                        View All Categories<i class="w-icon-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="active">
                                <a href="demo8.html">Home</a>
                            </li>
                            <li>
                                <a href="demo8-shop.html">Shop</a>

                            </li>


                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#" class="d-xl-show">
                        <img src="https://img.icons8.com/ios/50/000000/holding-box.png"
                            style="width: 20px; margin-right: 5px; margin-left: 5px; " /></i>Create Request</a>
                    <a href="#">
                        <img src="https://img.icons8.com/pastel-glyph/64/000000/box--v3.png"
                            style="width: 20px; margin-right: 5px; margin-left: 5px; " /></i>Create Product</a>
                </div>
            </div>
        </div>
    </div>
</header>