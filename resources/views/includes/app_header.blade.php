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
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link ">
                        <i class="w-icon-cart">
                            <span class="cart-count">2</span>
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>

                    <!-- End of Dropdown Box -->
                </div>
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
                                @foreach (\App\Models\Category::whereNull('parent_id')->get() as $category)

                                <li>
                                    <a href="{{url('category/'.$category->id)}}">
                                        <i class="w-icon-tshirt2"></i>
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
                            <li>
                                <a href="vendor-dokan-store.html">Vendor</a>
                                <ul>
                                    <li>
                                        <a href="vendor-dokan-store-list.html">Store Listing</a>
                                        <ul>
                                            <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                            <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                            <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                            <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.html">Vendor Store</a>
                                        <ul>
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
                            <li>
                                <a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="blog-grid-3cols.html">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-masonry-3cols.html">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-mask-grid.html">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="post-single.html">Single Post</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html">Pages</a>
                                <ul>

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
                            <li>
                                <a href="elements.html">Elements</a>
                                <ul>
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
</header>