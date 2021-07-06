<header class="header header-border">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Welcome to Wolmart Store message or remove it!</p>
            </div>
            <div class="header-right">
                <div class="dropdown">
                    <a href="#currency">USD</a>
                    <div class="dropdown-box">
                        <a href="#USD">USD</a>
                        <a href="#EUR">EUR</a>
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
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                </a>
                <a href="{{url('/')}}" class="logo ml-lg-0">
                    <img src="{{ asset('/web/images/logo.png')}}" alt="logo" width="240" height="45">
                </a>
                <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                    <div class="select-box">
                        <select id="category" name="category">
                            <option value="">All Categories</option>
                            <option value="4">Fashion</option>
                            <option value="5">Furniture</option>
                            <option value="6">Shoes</option>
                            <option value="7">Sports</option>
                            <option value="8">Games</option>
                            <option value="9">Computers</option>
                            <option value="10">Electronics</option>
                            <option value="11">Kitchen</option>
                            <option value="12">Clothing</option>
                        </select>
                    </div>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search in..."
                        required="">
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                        <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                    <i class="w-icon-heart">
                    </i>
                    <span class="wishlist-label d-lg-show">Wishlist</span>
                </a>
                <a class="compare label-down link d-xs-show" href="compare.html">
                    <i class="w-icon-compare"></i>
                    <span class="compare-label d-lg-show">Compare</span>
                </a>


                <!-- End of Dropdown Box -->
            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="sticky-content-wrapper" style="">
        <div class="header-bottom sticky-content fix-top sticky-header" style="">
            <div class="container">
                <div class="inner-wrap">
                    <div class="header-left">
                        <div class="dropdown category-dropdown has-border" data-visible="true">
                            <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" data-display="static"
                                title="Browse Categories">
                                <i class="w-icon-category"></i>
                                <span>Browse Categories</span>
                            </a>

                            <div class="dropdown-box">
                                <ul class="menu vertical-menu category-menu">
                                    <li class="has-submenu">
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-tshirt2"></i>Fashion
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Women</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Jewlery &amp;
                                                            Watches</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Sale</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Men</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Jewlery &amp;
                                                            Watches</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="banner-fixed menu-banner menu-banner2">
                                                    <figure>
                                                        <img src="assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                            width="235" height="347">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <div class="banner-price-info mb-1 ls-normal">Get up to
                                                            <strong class="text-primary text-uppercase">20%Off</strong>
                                                        </div>
                                                        <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                        <a href="shop-banner-sidebar.html"
                                                            class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-home"></i>Home &amp; Garden
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Bedroom</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Beds, Frames &amp;
                                                            Bases</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Kid's Beds &amp;
                                                            Headboards</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                                </ul>

                                                <h4 class="menu-title mt-1">Living Room</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Futons &amp; Sofa
                                                            Beds</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Cabinets &amp;
                                                            Chests</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Office</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Breakroom
                                                            Tables</a></li>
                                                </ul>

                                                <h4 class="menu-title mt-1">Kitchen &amp; Dining</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                            Cabinets</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Dining Room
                                                            Tables</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="menu-banner banner-fixed menu-banner3">
                                                    <figure>
                                                        <img src="assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                            width="235" height="461">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4 class="banner-subtitle font-weight-normal text-white mb-1">
                                                            Restroom</h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-white ls-normal">
                                                            Furniture Sale</h3>
                                                        <div
                                                            class="banner-price-info text-white font-weight-normal ls-25">
                                                            Up to <span
                                                                class="text-secondary text-uppercase font-weight-bold">25%
                                                                Off</span></div>
                                                        <a href="shop-banner-sidebar.html"
                                                            class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-electronics"></i>Electronics
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Laptops &amp; Computers</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Desktop
                                                            Computers</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                            Storage</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Computer
                                                            Accessories</a></li>
                                                </ul>

                                                <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Home Audio
                                                            Speakers</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                            Devices</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Digital Cameras</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                            Cameras</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Sports &amp; Action
                                                            Cameras</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                            Cards</a></li>
                                                </ul>

                                                <h4 class="menu-title mt-1">Cell Phones</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Phone &amp; Cellphone
                                                            Cases</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Cellphone
                                                            Chargers</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="menu-banner banner-fixed menu-banner4">
                                                    <figure>
                                                        <img src="assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                            width="235" height="433">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                            Week</h4>
                                                        <h3 class="banner-title text-white">Save On Smart EarPhone
                                                        </h3>
                                                        <div
                                                            class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                            20% Off</div>
                                                        <a href="shop-banner-sidebar.html"
                                                            class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-furniture"></i>Furniture
                                        </a>
                                        <ul class="megamenu type2">
                                            <li class="row">
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Furniture</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Sofas &amp;
                                                                Couches</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Lighting</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Bathroom
                                                                Lighting</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Home Accessories</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Decorative
                                                                Accessories</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Candals &amp;
                                                                Holders</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Garden &amp; Outdoors</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.html">Garden
                                                                Furniture</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.html">Pressure
                                                                Washers</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">All Garden
                                                                Tools</a></li>
                                                        <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                                width="410" height="123"
                                                                style="background-color: #D2D2D2;">
                                                        </figure>
                                                        <div class="banner-content text-right y-50">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                New Arrivals</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                Amazing Sofa</h3>
                                                            <div class="banner-price-info font-weight-normal ls-normal">
                                                                Starting at <strong>$125.00</strong></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                                width="410" height="123"
                                                                style="background-color: #9F9888;">
                                                        </figure>
                                                        <div class="banner-content y-50">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                Best Seller</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                Chair &amp; Lamp</h3>
                                                            <div
                                                                class="banner-price-info font-weight-normal ls-normal text-white">
                                                                From <strong>$165.00</strong></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-heartbeat"></i>Healthy &amp; Beauty
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-gift"></i>Gift Ideas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-gamepad"></i>Toy &amp; Games
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-ice-cream"></i>Cooking
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-ios"></i>Smart Phones
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-camera"></i>Cameras &amp; Photo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-fullwidth-banner.html">
                                            <i class="w-icon-ruby"></i>Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-banner-sidebar.html"
                                            class="font-weight-bold text-primary text-uppercase ls-25">
                                            View All Categories<i class="w-icon-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <nav class="main-nav">
                            <ul class="menu active-underline">
                                <li class="active">
                                    <a href="demo1.html">Home</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="shop-banner-sidebar.html">Shop</a>

                                    <!-- Start of Megamenu -->
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Shop Pages</h4>
                                            <ul>
                                                <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                                <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                            class="tip tip-hot">Hot</span></a></li>
                                                <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                            class="tip tip-new">New</span></a></li>
                                                <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a>
                                                </li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Shop Layouts</h4>
                                            <ul>
                                                <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                <li><a href="shop-list.html">List Mode</a></li>
                                                <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Product Pages</h4>
                                            <ul>
                                                <li><a href="product-variable.html">Variable Product</a></li>
                                                <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                                <li><a href="product-accordion.html">Data In Accordion</a></li>
                                                <li><a href="product-section.html">Data In Sections</a></li>
                                                <li><a href="product-swatch.html">Image Swatch</a></li>
                                                <li><a href="product-extended.html">Extended Info</a>
                                                </li>
                                                <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                                <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                            class="tip tip-new">New</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Product Layouts</h4>
                                            <ul>
                                                <li><a href="product-default.html">Default<span
                                                            class="tip tip-hot">Hot</span></a></li>
                                                <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                                <li><a href="product-grid.html">Grid Images</a></li>
                                                <li><a href="product-masonry.html">Masonry</a></li>
                                                <li><a href="product-gallery.html">Gallery</a></li>
                                                <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                                <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                                <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End of Megamenu -->
                                </li>
                                <li class="has-submenu">
                                    <a href="vendor-dokan-store.html">Vendor</a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="vendor-dokan-store-list.html">Store Listing</a>
                                            <ul class="submenu">
                                                <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="vendor-dokan-store.html">Vendor Store</a>
                                            <ul class="submenu">
                                                <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                                </li>
                                                <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                                </li>
                                                <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li class="has-submenu">
                                            <a href="blog-grid-3cols.html">Grid</a>
                                            <ul class="submenu">
                                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="blog-masonry-3cols.html">Masonry</a>
                                            <ul class="submenu">
                                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="blog-mask-grid.html">Mask</a>
                                            <ul class="submenu">
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="post-single.html">Single Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="about-us.html">Pages</a>
                                    <ul class="submenu">

                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="elements.html">Elements</a>
                                    <ul class="submenu">
                                        <li><a href="element-accordions.html">Accordions</a></li>
                                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="element-buttons.html">Buttons</a></li>
                                        <li><a href="element-cta.html">Call to Action</a></li>
                                        <li><a href="element-icons.html">Icons</a></li>
                                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                        <li><a href="element-instagrams.html">Instagrams</a></li>
                                        <li><a href="element-categories.html">Product Category</a></li>
                                        <li><a href="element-products.html">Products</a></li>
                                        <li><a href="element-tabs.html">Tabs</a></li>
                                        <li><a href="element-testimonials.html">Testimonials</a></li>
                                        <li><a href="element-titles.html">Titles</a></li>
                                        <li><a href="element-typography.html">Typography</a></li>

                                        <li><a href="element-vendors.html">Vendors</a></li>
                                    </ul>
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
    </div>
</header>
<!-- End of Header -->
