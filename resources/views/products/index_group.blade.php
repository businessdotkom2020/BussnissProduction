@extends('layouts.main')
@php
$menu = false ;
@endphp

@push('styles')

<style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);



    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: right;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
        direction: initial;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #FFED85;
    }

    /****** Style Star Rating Widget *****/

    .rating-supplier {
        border: none;
        float: right;
    }

    .rating-supplier>input {
        display: none;
    }

    .rating-supplier>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating-supplier>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating-supplier>label {
        color: #ddd;
        float: right;
        direction: initial;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating-supplier>input:checked~label,
    /* show gold star when clicked */
    .rating-supplier:not(:checked)>label:hover,
    /* hover current star */
    .rating-supplier:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    /* hover previous stars in list */

    .rating-supplier>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating-supplier>input:checked~label:hover,
    .rating-supplier>label:hover~input:checked~label,
    /* lighten current selection */
    .rating-supplier>input:checked~label:hover~label {
        color: #FFED85;
    }

    .select2-container--default .select2-selection--single {
        display: none;
    }
</style>

@endpush

@section('content')

<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{ asset('/web/images/cover.jpg')}})">
    <div class="container">
        <h3>{{$category ? $category->getTranslatedAttribute('name',\App::getLocale()) : $keyword}}</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">@lang('general.home')</a>
            </li>
            <li>{{$category ? $category->getTranslatedAttribute('name',\App::getLocale()) : $keyword}}</li>
        </ul>
    </div>
</div>
<main class="main-content col-xs-12">
    <div class="category-wrap col-xs-12">
        <div class="container">
            <div class="cat-sidebar col-md-3 col-xs-12">
                <button type="button" class="op-filter">
                    <i class="fa fa-filter"></i>
                    advanced filter
                </button>
                <div class="widget col-xs-12">
                    <div class="cat-head col-xs-12">
                        <h3>filter by</h3>
                    </div>
                    <form method="GET" action="{{url('search')}}">

                        <div class="form-group">
                            <h4>Search</h4>
                            <input type="text" value="{{request()->keyword}}" name="keyword" class="form-control">
                        </div>

                        <div class="form-group ">
                            <h4>Categories</h4>

                            <select name="category_ids[]" class="form-control select-nosearch" multiple>
                                <!--<option selected disabled>@lang('general.categories')</option>-->
                                @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)
                                <option value="{{$category->id}}">
                                    {{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <h4>Brands</h4>

                            <select name="brand_ids[]" class="form-control select-nosearch" multiple>
                                <!--<option selected disabled>@lang('general.categories')</option>-->
                                @foreach(\App\Models\Brand::get() as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <h4>pricing</h4>
                            <input type="text" class="js-range-slider" name="my_range" value="" />
                        </div>

                        <div class="cat-head col-xs-12">
                            <h3>sort by</h3>
                        </div>

                        <div class="form-group">
                            <h4>Order Condition</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input type="radio" name="product_condition">
                                        <span>new</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="product_condition">
                                        <span>Used</span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <h1>Rating </h1>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"
                                    title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label
                                    class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"
                                    title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label
                                    class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"
                                    title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label
                                    class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"
                                    title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label
                                    class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"
                                    title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half"
                                    for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <h1> Store Rating </h1>
                            <fieldset class="rating-supplier">
                                <input type="radio" id="star10" name="saller_rating" value="5" /><label class="full"
                                    for="star10" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star9half" name="saller_rating" value="4 and a half" /><label
                                    class="half" for="star9half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star9" name="saller_rating" value="4" /><label class="full"
                                    for="star9" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star8half" name="saller_rating" value="3 and a half" /><label
                                    class="half" for="star8half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star8" name="saller_rating" value="3" /><label class="full"
                                    for="star8" title="Meh - 3 stars"></label>
                                <input type="radio" id="star7half" name="saller_rating" value="2 and a half" /><label
                                    class="half" for="star7half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star7" name="saller_rating" value="2" /><label class="full"
                                    for="star7" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star6half" name="saller_rating" value="1 and a half" /><label
                                    class="half" for="star6half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star6" name="saller_rating" value="1" /><label class="full"
                                    for="star6" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="star5half" name="saller_rating" value="half" /><label
                                    class="half" for="star5half" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="has_discount" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Has Discount Only</label>
                        </div>

                        <hr>
                        <!--<div class="form-group">-->
                        <!--    <h4>material</h4>-->
                        <!--    <ul>-->
                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>popularity</span>-->
                        <!--            </label>-->
                        <!--        </li>-->

                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>low to high price</span>-->
                        <!--            </label>-->
                        <!--        </li>-->

                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>high to low price</span>-->
                        <!--            </label>-->
                        <!--        </li>-->

                        <!--        <li>-->
                        <!--            <label>-->
                        <!--                <input type="radio" name="rad">-->
                        <!--                <span>most rated</span>-->
                        <!--            </label>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->

                        <button type="submit" class="btn">@lang('general.filter')</button>

                    </form>

                </div>



            </div>
            <div class="cat-box col-md-9 col-xs-12">


                <div class="tab-content col-xs-12">
                    <div class="tab-pane fade active in" id="product_view">



                        @foreach($products as $product)
                        <div class="col-md-2 col-sm-3 col-xs-6">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{url('product/'.$product->id)}}" class="image">
                                        <img class="pic-1" src="{{url('storage/'.$product->image)}}">
                                        <img class="pic-2" src="{{url('storage/'.(json_decode($product->images))[0])}}">
                                    </a>
                                    @if ($product->sale_price)
                                    <span
                                        class="product-discount-label">{{ number_format((($product->price - $product->sale_price)*100) /$product->price,0) }}%</span>
                                    @endif

                                    <ul class="product-links">
                                        <li><a href="{{url('product/'.$product->id)}}" data-tip="Compare"><i
                                                    class="fa fa-random"></i></a></li>
                                        <li><a href="{{url('product/'.$product->id)}}" data-tip="Add to Wishlist"><i
                                                    class="fa fa-heart"></i></a></li>
                                        {{-- <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li> --}}
                                        {{-- <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li> --}}
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a
                                            href="{{url('product/'.$product->id)}}">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                                    </h3>
                                    <div class="price">
                                        @if ($product->sale_price)
                                        <span>{{$product->price}}</span>
                                        {{$product->sale_price}}
                                        @else
                                        {{$product->price}}

                                        @endif
                                    </div>
                                    <div class="c-data">
                                        <p>
                                            @php
                                            $rating = $product->average_rating ;
                                            @endphp

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
                                    </div>
                                    <a class="btn h-pro-btn" href="#" data-toggle="modal"
                                        data-target="#contact_{{$product->user_id}}"
                                        target="_blank">@lang('general.contact_supplier')</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $products->links('vendor.pagination.default') }}




                    </div>



                </div>
            </div>
        </div>
    </div>

</main>


@endsection

@push('scripts')
<script>
    //see docs on: http://ionden.com/a/plugins/ion.rangeSlider/index.html
        $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 1000,
        to: 500,
        skin: "round"
    });

        $('.op-filter').click(function () {
           $('.cat-sidebar .widget').slideToggle();
        });



     function favtoggle(product_id, user_id){

             var token = '{{ Session::token() }}';



         $.ajax({



            type : 'POST',

            url  : '{!!URL::to('product_favorite')!!}',

            data : { product_id: product_id,_token: token ,user_id:user_id },

            success : function(result){

                console.log(result);

  $(".fav-"+product_id).toggleClass("fav-active");


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



@endpush
