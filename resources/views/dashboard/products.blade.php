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
        <div class="slide-item">
            <div class="block b-product">
                <div class="inner">
                    <div class="i-img">
                        <a href="javascript:void(0)" id="fav-req-{{$product->id}}" title="add to favourite"
                            data-placement="top"
                            class="fav-req-{{$product->id}} {{$product->isFavorited() ? 'fav-active' : null  }} fav-pro "
                            onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="{{url('product/'.$product->id)}}" class="img-hold">
                            <img
                                src="{{ json_decode($product->images ) ? url('storage/'.(json_decode($product->images))[0]) : url('storage/products/default.jpg') }}">
                            <img src="{{  isset((json_decode($product->images))[1]) ? url('storage/'.(json_decode($product->images))[1]) : url('storage/products/default.jpg') }}"
                                class="sec-img">
                        </a>
                    </div>
                    <div class="i-data">
                        <a href="{{url('product/'.$product->id)}}"
                            class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>
                        <div class="cardo" style="flex-grow: 1;padding:0px">
                            <div class="c-inner" style="text-align: right;">
                                <div class="c-data">
                                    <p>
                                        @php $rating = $product->average_rating ; @endphp
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
                            </div>
                        </div>

                        <!-- <p>{{ Str::limit($product->getTranslatedAttribute('description',\App::getLocale()),50 )}}</p> -->
                        <div class="block-price">
                            <span
                                class="new-price">{{$product->sale_price ? $product->sale_price : $product->price}}$</span>
                            <!-- Price before offer -->
                            <span class="old-price">120$</span>
                            @if($product->sale_price)
                            <span
                                class="offer-p">{{number_format( (($product->sale_price/$product->price) * 100) ,2 ) }}
                                % تخفيض</span>
                            @endif
                        </div>
                        <a class="btn" href="#" data-toggle="modal" data-target="#contact_{{$product->user_id}}"
                            target="_blank">@lang('general.contact_supplier')</a>
                    </div>
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
