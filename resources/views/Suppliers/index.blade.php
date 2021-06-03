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

<script>
    window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
    if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
    images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
    if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)
</script>
<script data-no-minify="1" async src="{{ asset('/web/js/lazyload.min.js')}}"></script>


<script src="{{ asset('/web/js/custom_supplier.js')}}"></script>

@endpush