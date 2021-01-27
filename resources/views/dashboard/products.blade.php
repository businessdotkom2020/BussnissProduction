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
        <div class="block b-product col-md-3 col-sm-6 col-xs-12">
            <div class="inner">
                <div class="i-img">
                    <a href="javascript:void(0)" id="fav-{{$product->id}}"
                        class="fav-{{$product->id}} fav-pro {{$product->isFavorited() ? 'fav-active' : null  }}"
                        onclick="favtoggle({{$product->id }},{{Auth::user() ? Auth::user()->id : null}})">
                        <i class="fa fa-heart"></i>
                    </a>

                    <a href="{{url('product/'.$product->id.'/edit')}}" style="left: auto;right: 10px;" class="fav-pro">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{url('product/'.$product->id.'/delete')}}"
                        style="left: auto;right: 10px;margin-top: 50px;" class="fav-pro">
                        <i class="fa fa-trash"></i>
                    </a>

                    <a href="{{url('product/'.$product->id)}}" class="img-hold">

                        <img src="{{ url('storage/'.$product->image)}}" alt="">
                        @if(isset(json_decode($product->images)[0]))
                        <img src="{{ url('storage/'.json_decode($product->images)[0])}}" class="sec-img" alt="">
                        @endif

                    </a>
                </div>
                <div class="i-data">
                    <a href="{{url('product/'.$product->id)}}"
                        class="title">{{$product->getTranslatedAttribute('name',\App::getLocale())}}</a>

                    <span>{{$product->sale_price  ? $product->sale_price : $product->price  }} l.e</span>

                    @if($product->sale_price)
                    <span class="{{$product->sale_price ? 'old' : ''}}">{{$product->price}} l.e</span>
                    @endif

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
