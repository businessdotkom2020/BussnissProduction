@extends('layouts.main')
@php
$menu = false ;
@endphp



@section('content')
<div class="overlay-s"></div>
<div class="jumpo col-xs-12" style="background-image: url({{url('/web/images/cover.jpg')}} )">
    <div class="container">
        <h3>@lang('general.products')</h3>
        <ul>
            <li>
                <a href="{{url('/')}}">الرئيسية</a>
            </li>
            <li>@lang('general.products')</li>
        </ul>
    </div>
</div>



<main class="main-content col-xs-12">

    <div class="container">


        <div class="form-group col-md-12 col-xs-12" style="text-align: center;margin-top: 15px;">
            <button onclick="window.location='{{ url('products/new') }}'" type="submit" class="btn">Add Product <i
                    class="fa fa-plus"></i></button>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

        @foreach(\App\Models\Product::where('user_id',\Auth::id())->get() as $product)

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
                            <a class="btn h-pro-btn" href="{{url('product/'.$product->id.'/edit')}}" target="_blank">@lang('general.edit')</a>
                            <a class="btn h-pro-btn" href="{{url('product/'.$product->id.'/delete')}}" >@lang('general.delete')</a>
                        </div>
                    </div>
                </div>
        @endforeach


    </div>

</main>

@endsection
@push('scripts')

<script>
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
