@extends('layouts.main')
@php
$menu = false ;
@endphp

@push('styles')
<link rel="stylesheet" href="{{ asset('/web/css/custom-supplier.css')}}">

@endpush
@section('content')

<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('web/images/cover.jpg')}})">
    <div class="container">
        <h3>Suppliers</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>Suppliers</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="reqs-wrap col-xs-12 fffback">
        <div class="container">



            <div class="suppliers-archive col-xs-12">
                <div class="container">

                    <div class="row">
                        <div id="primary" class="content-area col-md-12">
                            <main id="main" class="site-main">
                                <article id="post-475" class="post-475 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div id="dokan-store-listing-filter-wrap">
                                            <div class="left">
                                                <p class="item store-count">
                                                    Total store showing: {{count($suppliers)}}
                                                </p>
                                            </div>
                                            <div class="right">
                                                <div class="item">
                                                    <div class="dokan-icons">
                                                        <div class="dokan-icon-div"></div>
                                                        <div class="dokan-icon-div"></div>
                                                        <div class="dokan-icon-div"></div>
                                                    </div>
                                                    <button
                                                        class="dokan-store-list-filter-button dokan-btn dokan-btn-theme">
                                                        Filter </button>
                                                </div>
                                                <form name="stores_sorting" class="sort-by item" method="get">
                                                    <label>Sort by:</label>
                                                    <select name="stores_orderby" id="stores_orderby"
                                                        aria-label="Sort by">
                                                        <option value="most_recent">Most Recent</option>
                                                        <option value="total_orders">Most Popular</option>
                                                    </select>
                                                </form>
                                                <div class="toggle-view item">
                                                    <span class="dashicons dashicons-screenoptions"
                                                        data-view="grid-view"></span>
                                                    <span class="dashicons dashicons-menu-alt"
                                                        data-view="list-view"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <form role="store-list-filter" name="dokan_store_lists_filter_form"
                                            id="dokan-store-listing-filter-form-wrap" style="display: none">
                                            <div class="store-search grid-item">
                                                <input type="search" class="store-search-input"
                                                    name="dokan_seller_search" placeholder="Search Vendors">
                                            </div>
                                            <div class="apply-filter">
                                                <button id="cancel-filter-btn"
                                                    class="dokan-btn dokan-btn-theme">Cancel</button>
                                                <button id="apply-filter-btn" class="dokan-btn dokan-btn-theme"
                                                    type="submit">Apply</button>
                                            </div>
                                        </form>
                                        <div id="dokan-seller-listing-wrap" class="grid-view">
                                            <div class="seller-listing-content">
                                                <ul class="dokan-seller-wrap">
                                                    <li class="dokan-single-seller woocommerce coloum-3 ">
                                                        <div class="store-wrapper">
                                                            <div class="store-header">
                                                                <div class="store-banner">
                                                                    <a href="logancee3.html">
                                                                        <img src="https://demo2.drfuri.com/martfury/wp-content/uploads/sites/29/2019/12/cropped-setup4.jpg"
                                                                            class="lazyloaded" data-ll-status="loaded">
                                                                        <noscript><img
                                                                                src="images/12-cropped-setup4.jpg"></noscript>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="store-content ">
                                                                <div class="store-data-container">
                                                                    <div class="featured-favourite">
                                                                    </div>
                                                                    <div class="store-data">
                                                                        <h2><a href="logancee3.html">Global Office</a>
                                                                        </h2>
                                                                        <div class="dokan-seller-rating"
                                                                            title="Rated 3.64 out of 5">
                                                                            <i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-half"></i><i
                                                                                class="dashicons dashicons-star-empty"></i>
                                                                            <p class="rating">
                                                                                3.64 out of 5
                                                                            </p>
                                                                        </div>
                                                                        <p class="store-address"><span class="street_1">
                                                                                325 Orchard
                                                                                Str,</span><br><span class="country">
                                                                                South Korea
                                                                            </span></p>
                                                                        <p class="store-phone">
                                                                            <i class="fa fa-phone"
                                                                                aria-hidden="true"></i> (+053)
                                                                            77-637-3300
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="store-footer">
                                                                <div class="seller-avatar">
                                                                    <img alt=""
                                                                        class="avatar avatar-150 photo avatar-default lazyloaded"
                                                                        height="150"
                                                                        src="https://demo2.drfuri.com/martfury/wp-content/uploads/sites/29/2017/12/vendor-150x150.jpg"
                                                                        width="150" data-ll-status="loaded">
                                                                    <noscript><img alt=""
                                                                            class="avatar avatar-150 photo avatar-default"
                                                                            height="150"
                                                                            src="images/12-vendor-150x150.jpg"
                                                                            width="150"></noscript>
                                                                </div>
                                                                <a href="logancee3.html" title="Visit Store">
                                                                    <span
                                                                        class="dashicons dashicons-arrow-right-alt2 dokan-btn-theme dokan-btn-round"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                                                        <div class="store-wrapper">
                                                            <div class="store-header">
                                                                <div class="store-banner">
                                                                    <a href="xhome.html">
                                                                        <img src="https://demo2.drfuri.com/martfury/wp-content/plugins/dokan-lite/assets/images/default-store-banner.png"
                                                                            class="lazyloaded" data-ll-status="loaded">
                                                                        <noscript><img
                                                                                src="images/images-default-store-banner.png"></noscript>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="store-content default-store-banner">
                                                                <div class="store-data-container">
                                                                    <div class="featured-favourite">
                                                                    </div>
                                                                    <div class="store-data">
                                                                        <h2><a href="xhome.html">Young Shop</a></h2>
                                                                        <div class="dokan-seller-rating"
                                                                            title="Rated 4.20 out of 5">
                                                                            <i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-half"></i>
                                                                            <p class="rating">
                                                                                4.20 out of 5
                                                                            </p>
                                                                        </div>
                                                                        <p class="store-address"><span class="street_1">
                                                                                335
                                                                                Orchard,</span><br><span
                                                                                class="country"> Singapore
                                                                            </span></p>
                                                                        <p class="store-phone">
                                                                            <i class="fa fa-phone"
                                                                                aria-hidden="true"></i> (+033)
                                                                            77-637-3300
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="store-footer">
                                                                <div class="seller-avatar">
                                                                    <img alt=""
                                                                        src="https://secure.gravatar.com/avatar/b830bf3d1dbd469d3d18bc42b1191268?s=150&amp;d=mm&amp;r=g"
                                                                        class="avatar avatar-150 photo lazyloaded"
                                                                        height="150" width="150"
                                                                        srcset="https://secure.gravatar.com/avatar/b830bf3d1dbd469d3d18bc42b1191268?s=300&amp;d=mm&amp;r=g 2x"
                                                                        data-ll-status="loaded">
                                                                    <noscript><img alt=""
                                                                            src="images/avatar-b830bf3d1dbd469d3d18bc42b1191268"
                                                                            srcset="https://secure.gravatar.com/avatar/b830bf3d1dbd469d3d18bc42b1191268?s=300&amp;d=mm&amp;r=g 2x"
                                                                            class="avatar avatar-150 photo" height="150"
                                                                            width="150"></noscript>
                                                                </div>
                                                                <a href="xhome.html" title="Visit Store">
                                                                    <span
                                                                        class="dashicons dashicons-arrow-right-alt2 dokan-btn-theme dokan-btn-round"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                                                        <div class="store-wrapper">
                                                            <div class="store-header">
                                                                <div class="store-banner">
                                                                    <a href="iclever.html">
                                                                        <img src="https://demo2.drfuri.com/martfury/wp-content/plugins/dokan-lite/assets/images/default-store-banner.png"
                                                                            class="lazyloaded" data-ll-status="loaded">
                                                                        <noscript><img
                                                                                src="images/images-default-store-banner.png"></noscript>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="store-content default-store-banner">
                                                                <div class="store-data-container">
                                                                    <div class="featured-favourite">
                                                                    </div>
                                                                    <div class="store-data">
                                                                        <h2><a href="iclever.html">Robert’s Store</a>
                                                                        </h2>
                                                                        <div class="dokan-seller-rating"
                                                                            title="Rated 4.19 out of 5">
                                                                            <i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-filled"></i><i
                                                                                class="dashicons dashicons-star-half"></i>
                                                                            <p class="rating">
                                                                                4.19 out of 5
                                                                            </p>
                                                                        </div>
                                                                        <p class="store-address"><span class="street_1">
                                                                                325
                                                                                Orchard,</span><br><span class="state">
                                                                                Buenos
                                                                                Aires,</span><span class="country">
                                                                                Argentina
                                                                            </span></p>
                                                                        <p class="store-phone">
                                                                            <i class="fa fa-phone"
                                                                                aria-hidden="true"></i> (+093)
                                                                            77-637-3300
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="store-footer">
                                                                <div class="seller-avatar">
                                                                    <img alt=""
                                                                        src="https://secure.gravatar.com/avatar/ac22ace04a3d44b91a3784261b37c0ab?s=150&amp;d=mm&amp;r=g"
                                                                        class="avatar avatar-150 photo lazyloaded"
                                                                        height="150" width="150"
                                                                        srcset="https://secure.gravatar.com/avatar/ac22ace04a3d44b91a3784261b37c0ab?s=300&amp;d=mm&amp;r=g 2x"
                                                                        data-ll-status="loaded">
                                                                    <noscript><img alt=""
                                                                            src="images/avatar-ac22ace04a3d44b91a3784261b37c0ab"
                                                                            srcset="https://secure.gravatar.com/avatar/ac22ace04a3d44b91a3784261b37c0ab?s=300&amp;d=mm&amp;r=g 2x"
                                                                            class="avatar avatar-150 photo" height="150"
                                                                            width="150"></noscript>
                                                                </div>
                                                                <a href="iclever.html" title="Visit Store">
                                                                    <span
                                                                        class="dashicons dashicons-arrow-right-alt2 dokan-btn-theme dokan-btn-round"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <div class="dokan-clearfix"></div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </main>
                        </div>
                    </div>

                    <div class="g-body col-xs-12">
                        @foreach($suppliers as $supplier)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="h-supplier-box cardo text-center">
                                <span>
                                    <a href="{{url('supplier/'.$supplier->id)}}">
                                        <img src="{{ url('storage/'.$supplier->avatar)}}" alt="">
                                    </a>
                                </span>
                                <div class="c-inner">
                                    <!-- <div class="c-img">
                                <a href="{{url('supplier/'.$supplier->id)}}">
                                    <img src="{{ url('storage/'.$supplier->avatar)}}" alt="">
                                </a>
                            </div> -->
                                    <div class="c-data">
                                        <h3>
                                            <a href="{{url('supplier/'.$supplier->id)}}"
                                                class="title">{{$supplier->name}}</a>
                                        </h3>
                                        <p>




                                            @php $rating = $supplier->average_rating ; @endphp
                                            @foreach(range(1,5) as $i)
                                            @if($rating >0)
                                            @if($rating > 0.5)
                                            <i class="fa fa-star active"></i>
                                            @elseif($rating < 0.5 && $rating> 0)
                                                <i class="fas fa-star-half"></i>


                                                @endif
                                                @else
                                                <i class="fa fa-star"></i>

                                                @endif
                                                @php $rating--; @endphp

                                                @endforeach

                                        </p>
                                        @if(Auth::check())


                                        @if(\Auth::user()->canFollow($supplier) &&\Auth::user()->id != $supplier->id)
                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn c-inner-btn">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                            <span style="">
                                                Follow

                                            </span>

                                        </a>

                                        @elseif(!\Auth::user()->canFollow($supplier) && \Auth::user()->id !=
                                        $supplier->id)




                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn following">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-check"></i>
                                            <span style="">
                                                following

                                            </span>

                                        </a>

                                        @else

                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn ">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                            <span style="">
                                                Follow

                                            </span>

                                        </a>
                                        @endif



                                        @elseif(!Auth::check() )

                                        <a href="javascript:void(0)" id="followtoggle_{{$supplier->id}}"
                                            onclick="followtoggle({{$supplier->id }})" class="btn ">
                                            <i id="followicon_{{$supplier->id}}" class="fa fa-plus"></i>
                                            <span style="">
                                                Follow

                                            </span>

                                        </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach






                    </div>
                </div>
            </div>




            <!-- pagination Here-->
            {{ $suppliers->links('vendor.pagination.default') }}



        </div>
    </div>
</main>



@endsection


@push('scripts')


<script>
    function followtoggle(follower_id) {

        var token = '{{ Session::token() }}';



        $.ajax({



            type: 'POST',

            url: '{!!URL::to('
            user_follow ')!!}',

            data: {
                follower_id: follower_id,
                _token: token
            },

            success: function (result) {

                console.log(result);

                $("#followtoggle_" + follower_id).toggleClass("following");
                $("#followicon_" + follower_id).toggleClass(result.icon);
                $("#followicon_" + follower_id).addClass(result.icon).removeClass(result.old_icon)

                $("#followtoggle_" + follower_id + " span").text(result.but_status);


                const Toast = Swal.mixin({

                    toast: true,

                    position: 'top-end',

                    showConfirmButton: false,

                    timer: 6000,

                    timerProgressBar: true,

                    onOpen: (toast) => {

                        toast.addEventListener('mouseenter', Swal.stopTimer)

                        toast.addEventListener('mouseleave', Swal.resumeTimer)

                    }

                })



                Toast.fire({

                    icon: 'success',

                    title: result.message

                })

            }

        });
 
    }

</script>


<script type="text/javascript">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/martfury\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/martfury\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_4f5593c2853456fb050237736ada2e34","fragment_name":"wc_fragments_4f5593c2853456fb050237736ada2e34","request_timeout":"5000"};
    /* ]]> */
    </script>
    <script type="text/javascript">
    "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
    </script>
    <script type="text/javascript">
    (function() {
    "use strict";var e=function(){function n(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(e,t,r){return t&&n(e.prototype,t),r&&n(e,r),e}}();function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function r(e,t){n(this,r),this.attrName="data-rocketlazyloadscript",this.browser=t,this.options=this.browser.options,this.triggerEvents=e,this.userEventListener=this.triggerListener.bind(this)}return e(r,[{key:"init",value:function(){this._addEventListener(this)}},{key:"reset",value:function(){this._removeEventListener(this)}},{key:"_addEventListener",value:function(t){this.triggerEvents.forEach(function(e){return window.addEventListener(e,t.userEventListener,t.options)})}},{key:"_removeEventListener",value:function(t){this.triggerEvents.forEach(function(e){return window.removeEventListener(e,t.userEventListener,t.options)})}},{key:"_loadScriptSrc",value:function(){var r=this,e=document.querySelectorAll("script["+this.attrName+"]");0!==e.length&&Array.prototype.slice.call(e).forEach(function(e){var t=e.getAttribute(r.attrName);e.setAttribute("src",t),e.removeAttribute(r.attrName)}),this.reset()}},{key:"triggerListener",value:function(){this._loadScriptSrc(),this._removeEventListener(this)}}],[{key:"run",value:function(){RocketBrowserCompatibilityChecker&&new r(["keydown","mouseover","touchmove","touchstart"],new RocketBrowserCompatibilityChecker({passive:!0})).init()}}]),r}();t.run();
    }());
    </script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax":{"url":"\/martfury\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
    </script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/martfury\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
    /* ]]> */
    </script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var martfuryData = {"direction":"false","ajax_url":"https:\/\/demo2.drfuri.com\/martfury\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/martfury\/?wc-ajax=%%endpoint%%","nonce":"bc2e829604","days":"days","hours":"hours","minutes":"minutes","seconds":"seconds","add_to_cart_ajax":"1","search_content_type":"product","nl_days":"1","nl_seconds":"0","ajax_search":"1","quantity_ajax":"","product_gallery":"1","added_to_cart_notice":{"added_to_cart_text":"has been added to your cart.","added_to_cart_texts":"have been added to your cart.","cart_view_text":"View Cart","cart_view_link":"https:\/\/demo2.drfuri.com\/martfury\/cart\/","cart_notice_auto_hide":3000},"added_to_wishlist_notice":{"added_to_wishlist_text":"has been added to your wishlist.","added_to_wishlist_texts":"have been added to your wishlist.","wishlist_view_text":"View Wishlist","wishlist_view_link":"https:\/\/demo2.drfuri.com\/martfury\/wishlist\/","wishlist_notice_auto_hide":3000}};
    /* ]]> */
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7_-dqBdPznv5nSNhB9pYhB4zj1e9ZV7s&amp;ver=3.0.15"></script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var DokanValidateMsg = {"required":"This field is required","remote":"Please fix this field.","email":"Please enter a valid email address.","url":"Please enter a valid URL.","date":"Please enter a valid date.","dateISO":"Please enter a valid date (ISO).","number":"Please enter a valid number.","digits":"Please enter only digits.","creditcard":"Please enter a valid credit card number.","equalTo":"Please enter the same value again.","maxlength_msg":"Please enter no more than {0} characters.","minlength_msg":"Please enter at least {0} characters.","rangelength_msg":"Please enter a value between {0} and {1} characters long.","range_msg":"Please enter a value between {0} and {1}.","max_msg":"Please enter a value less than or equal to {0}.","min_msg":"Please enter a value greater than or equal to {0}."};
    /* ]]> */
    </script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var dokan = {"ajaxurl":"https:\/\/demo2.drfuri.com\/martfury\/wp-admin\/admin-ajax.php","nonce":"fe4c589ad7","ajax_loader":"https:\/\/demo2.drfuri.com\/martfury\/wp-content\/plugins\/dokan-lite\/assets\/images\/ajax-loader.gif","seller":{"available":"Available","notAvailable":"Not Available"},"delete_confirm":"Are you sure?","wrong_message":"Something went wrong. Please try again.","vendor_percentage":"90","commission_type":"percentage","rounding_precision":"6","mon_decimal_point":".","product_types":["simple"],"i18n_choose_featured_img":"Upload featured image","i18n_choose_file":"Choose a file","i18n_choose_gallery":"Add Images to Product Gallery","i18n_choose_featured_img_btn_text":"Set featured image","i18n_choose_file_btn_text":"Insert file URL","i18n_choose_gallery_btn_text":"Add to gallery","duplicates_attribute_messg":"Sorry, this attribute option already exists, Try a different one.","variation_unset_warning":"Warning! This product will not have any variations if this option is not checked.","new_attribute_prompt":"Enter a name for the new attribute term:","remove_attribute":"Remove this attribute?","dokan_placeholder_img_src":"https:\/\/demo2.drfuri.com\/martfury\/wp-content\/uploads\/sites\/29\/woocommerce-placeholder.png","add_variation_nonce":"94474365b3","link_variation_nonce":"cd3dad022b","delete_variations_nonce":"d1fe55e11b","load_variations_nonce":"3a137cff67","save_variations_nonce":"726e54abd8","bulk_edit_variations_nonce":"7cb700ccbd","i18n_link_all_variations":"Are you sure you want to link all variations? This will create a new variation for each and every possible combination of variation attributes (max 50 per run).","i18n_enter_a_value":"Enter a value","i18n_enter_menu_order":"Variation menu order (determines position in the list of variations)","i18n_enter_a_value_fixed_or_percent":"Enter a value (fixed or %)","i18n_delete_all_variations":"Are you sure you want to delete all variations? This cannot be undone.","i18n_last_warning":"Last warning, are you sure?","i18n_choose_image":"Choose an image","i18n_set_image":"Set variation image","i18n_variation_added":"variation added","i18n_variations_added":"variations added","i18n_no_variations_added":"No variations added","i18n_remove_variation":"Are you sure you want to remove this variation?","i18n_scheduled_sale_start":"Sale start date (YYYY-MM-DD format or leave blank)","i18n_scheduled_sale_end":"Sale end date (YYYY-MM-DD format or leave blank)","i18n_edited_variations":"Save changes before changing page?","i18n_variation_count_single":"%qty% variation","i18n_variation_count_plural":"%qty% variations","i18n_no_result_found":"No Result Found","i18n_sales_price_error":"Please insert value less than the regular price!","i18n_decimal_error":"Please enter with one decimal point (.) without thousand separators.","i18n_mon_decimal_error":"Please enter with one monetary decimal point (.) without thousand separators and currency symbols.","i18n_country_iso_error":"Please enter in country code with two capital letters.","i18n_sale_less_than_regular_error":"Please enter in a value less than the regular price.","i18n_delete_product_notice":"This product has produced sales and may be linked to existing orders. Are you sure you want to delete it?","i18n_remove_personal_data_notice":"This action cannot be reversed. Are you sure you wish to erase personal data from the selected orders?","decimal_point":".","variations_per_page":"10","store_banner_dimension":{"width":625,"height":300,"flex-width":true,"flex-height":true},"selectAndCrop":"Select and Crop","chooseImage":"Choose Image","product_title_required":"Product title is required","product_category_required":"Product category is required","search_products_nonce":"afadd8ac34","search_products_tags_nonce":"bd51275898","search_customer_nonce":"8d27176ddb","i18n_matches_1":"One result is available, press enter to select it.","i18n_matches_n":"%qty% results are available, use up and down arrow keys to navigate.","i18n_no_matches":"No matches found","i18n_ajax_error":"Loading failed","i18n_input_too_short_1":"Please enter 1 or more characters","i18n_input_too_short_n":"Please enter %qty% or more characters","i18n_input_too_long_1":"Please delete 1 character","i18n_input_too_long_n":"Please delete %qty% characters","i18n_selection_too_long_1":"You can only select 1 item","i18n_selection_too_long_n":"You can only select %qty% items","i18n_load_more":"Loading more results\u2026","i18n_searching":"Searching\u2026","i18n_date_format":"M dS Y","rest":{"root":"https:\/\/demo2.drfuri.com\/martfury\/wp-json\/","nonce":"97b79d5a4a","version":"dokan\/v1"},"api":null,"libs":[],"routeComponents":{"default":null},"routes":[],"urls":{"assetsUrl":"https:\/\/demo2.drfuri.com\/martfury\/wp-content\/plugins\/dokan-lite\/assets"}};
    /* ]]> */
    </script>
<script>
    window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
    if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
    images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
    if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)
</script>
<script data-no-minify="1" async src="{{ asset('/web/js/lazyload.min.js')}}"></script>


<script src="{{ asset('/web/js/custom_supplier.js')}}"></script>

@endpush