@extends('layouts.main')
@php
$menu = false ;
@endphp
@push('styles')
<link rel="stylesheet" href="{{ asset('/web/css/products_custom.css')}}">
<link rel="stylesheet" href="{{ asset('/web/css/custom-register-supplier.css')}}">

@endpush
@section('content')
<main class="main-content col-xs-12">
    <div class="add-req-wrap col-xs-12">
        <div class="container">
            <form action="{{route('ProductSave')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

                <h3 class="update-header">@lang('general.product_main_details')</h3>
                <br>



                @include('auth.supplier_steps.information')

                @include('auth.supplier_steps.location')

                @include('auth.supplier_steps.images')


                {{-- ******************************* Start Name  ************************************** --}}

                <div class="form-group col-md-6 col-xs-12">
                    <h4> @lang('general.product_name_en') </h4>
                    <input name="name" required type="text" class="form-control">
                    @error('name_en')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.product_name_ar')</h4>
                    <input name="name_ar" required type="text" class="form-control">
                    @error('name_ar')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ******************************* Start Main Category  ************************************** --}}

                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.main_categories')</h4>
                    <select id="category" name="category_ids" class="form-control">
                        @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)
                        <option value="{{$category->id}}">
                            {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                        </option>
                        @endforeach
                    </select>
                    @error('category_ids')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ******************************* Start Sub Category  ************************************** --}}

                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.sub_categories')</h4>
                    <select id="subcategory" required name="sub_category_id" class="form-control">
                        <option selected disabled>@lang('general.sub_categories')</option>
                    </select>
                    @error('sub_categories')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ******************************* Start Sub Sub Category  ************************************** --}}


                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.sub_sub_categories')</h4>
                    <select id="subsubcategory" required name="category_id" class="form-control">
                        <option selected disabled>@lang('general.sub_sub_categories')</option>
                    </select>
                    @error('category_id')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ******************************* Start Brand  ************************************** --}}

                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.brand')</h4>
                    <select id="brand" required name="brand_id" id="city" class="form-control">
                        <option selected disabled>@lang('general.brand')</option>
                        @foreach(\App\Models\Brand::get() as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                    @error('brand_id')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>


                {{-- ******************************* Start Tag  ************************************** --}}

                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.tag')</h4>
                    <select id="tag" required name="tag_id" id="city" class="form-control">
                        <option selected disabled>@lang('general.tag')</option>
                        @foreach(\App\Models\Tag::get() as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error('tag_id')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ******************************* Start Product Condition  ************************************** --}}

                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.product_condition') </h4>
                    <ul>
                        <li>
                            <label for="r1d">
                                <input type="radio" id="r1d" value="1" name="product_condition">
                                <span>@lang('general.new') </span> </label> </li>
                        <li>
                            <label for="r2d">
                                <input type="radio" id="r2d" value="0" name="product_condition">
                                <span>@lang('general.used') </span> </label> </li>
                    </ul>
                    @error('product_condition') <div class="alert" style="color:#a94442">{{ $message }}
                    </div>
                    @enderror
                </div>


                {{-- ************************* Start Description  ************************************** --}}


                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.description_en') </h4>
                    <textarea name="description_en" class="form-control"></textarea>
                    @error('description_en')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.description_ar') </h4>
                    <textarea name="description" class="form-control"></textarea>
                    @error('description_ar')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-12 col-xs-12">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>



                {{-- ************************* Start Image  ************************************** --}}

                <h3 class="update-header">@lang('general.product_Images')</h3>
                <br>
                <br>
                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.product_main_image') </h4>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="image" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                    </div>
                    @error('image')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>


                {{-- ************************* Start Images  ************************************** --}}


                <div class="form-group col-md-12 col-xs-12">
                    <h4>@lang('general.product_addional_image') </h4>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    <div class="s-item col-md-4 col-sm-6 col-xs-12">
                        <div class="file-upload-wrapper">
                            <input type="file" name="images[]" id="input-file-max-fs" class="file-upload"
                                data-max-file-size="5M" />
                        </div>
                    </div>
                    @error('images')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ************************* End Images  ************************************** --}}


                {{-- ************************* Start Prices ************************************** --}}

                <div class="form-group col-md-12 col-xs-12">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>
                <h3 class="update-header">@lang('general.product_price')</h3>
                <br>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.price')</h4>
                    <input name="price" type="text" class="form-control">
                    @error('price')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <h4>@lang('general.sale_price') <small> @lang('general.optional') </small></h4>
                    <input name="sale_price" type="text" class="form-control">
                    @error('sale_price')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>

                {{-- ************************* End Prices ************************************** --}}


                {{-- ************************* Start Price List ******************************* --}}


                <h3 class="update-header">@lang('general.product_price_list') <small> @lang('general.optional') </small>
                </h3>

                <br>
                <div id="prices">
                    <div class="form-group col-md-5 col-xs-12">
                        <h4>@lang('general.price')</h4>
                        <input name="prices[0][price]" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-3 col-xs-12">
                        <h4>@lang('general.quantity_from')</h4>
                        <input name="prices[0][quantity_from]" type="number" class="form-control">
                    </div>

                    <div class="form-group col-md-3 col-xs-12">
                        <h4>@lang('general.quantity_to')</h4>
                        <input name="prices[0][quantity_to]" type="number" class="form-control">
                    </div>
                    <div class="form-group col-md-1 col-xs-12">

                    </div>
                    @error('product_price_list')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div style="text-align: center;" class="form-group col-md-12 col-xs-12">
                    <button type="button" onclick="addPrice();" class="btn">@lang('general.add_price_list')</button>
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>
                {{-- ************************* End Price List ******************************* --}}


                {{-- ************************* Start product attributes   ******************************* --}}

                <div class="form-group col-md-12 col-xs-12">
                    <h3 class="update-header">@lang('general.product_attributes')</h3>
                </div>
                <br>
                <div id="parent">
                    <div class="form-group col-md-6 col-xs-12">
                        <select id="optselect1" onchange="selectoption(1,this)" name="options[0][attribute_id]"
                            class="form-control">
                            <option selected disabled>@lang('general.choose_attribute')</option>

                            @foreach(\App\Models\Attribute::get() as $attribute)
                            <option value="{{$attribute->id}}">
                                {{$attribute->getTranslatedAttribute('name',\App::getLocale())}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-5 col-xs-12">
                        <select id="valueselect1" required name="options[0][values_id]" class="form-control">
                            <option selected disabled>@lang('general.choose_attribute_value')</option>
                        </select>
                    </div>


                    @error('options')
                    <div class="alert" style="color:#a94442">{{ $message }}</div>
                    @enderror
                </div>
                <div style="text-align: center;" class="form-group col-md-12 col-xs-12">
                    <button type="button" onclick="addChild();"
                        class="btn">@lang('general.add_product_attributes')</button>
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>
                <div class="form-group col-md-12 col-xs-12">
                </div>

                {{-- ************************* End product attributes   ******************************* --}}

                <div style="text-align: center;" class="form-group col-md-12 col-xs-12">
                    <button type="submit" class="btn"> @lang('general.add_product')</button>
                </div>
            </form>
        </div>
    </div>
</main>
<!--end::Form-->
@endsection
@push('scripts')
<script src="{{ asset('/web/js/amir-upload-files.js')}}"></script>
<script src="{{ asset('/web/js/select2.full.min.js')}}"></script>
<script>
    var childNumber = 2;
   var childNumberprice = 2;

   function selectoption(select_id,selectObject) {
   console.log(select_id);
   console.log(selectObject.value);



   $.ajax({
    type:"get",
    url:" /getValues/"+selectObject.value,
    success:function(res)
    {
         if(res)
         {

             $("#valueselect"+select_id).empty();
             $("#valueselect"+select_id).append("<option selected disabled>@lang('general.choose_attribute')</option>");
             $.each(res,function(key,value){
                 $("#valueselect"+select_id).append('<option value="'+key+'">'+value+'</option>');
             });
            $('#valueselect'+select_id).niceSelect('update');

         }
    }

   });



   }
   function addChild() {
   var parent = document.getElementById('parent');
   //   var newChild = '<p>Child ' + childNumber + '</p>';
   var newChild = `
           <div  id="attribute_attribute_`+childNumber+`" class="form-group col-md-6 col-xs-12">

                             <select id="optselect`+childNumber+`"  onchange="selectoption(`+childNumber+`,this)"  name="options[`+childNumberprice+`][attribute_id]" class=" optselect form-control">
                                <option selected disabled>@lang('general.choose_attribute')</option>

                 @foreach(\App\Models\Attribute::get() as $category)
                 <option value="{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                 @endforeach
              </select>

           </div>

                       <div  id="attribute_value_`+childNumber+`"  class="form-group col-md-5 col-xs-12">
              <select id="valueselect`+childNumber+`"  name="options[`+childNumberprice+`][values_id]" class=" optselect form-control select-nosearch" multiple>
                 <!--<option selected disabled>@lang('general.categories')</option>-->
                 <option selected disabled>@lang('general.choose_attribute')</option>


              </select>
           </div>

           <div id="attribute_delete_`+childNumber+`" class="form-group col-md-1 col-xs-12">
                        <button type="button" onclick="deleteAttribute(`+childNumber+`);"
                            style="padding: 10px; background: #d9534f!important; border: none; margin-top: 10px;"><i
                                style=" color: white;" class=" fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </div>
           `;
   parent.insertAdjacentHTML('beforeend', newChild);
   childNumber++;


     $('select').niceSelect();
   }


   function addPrice() {
   var parent = document.getElementById('prices');
   //   var newChild = '<p>Child ' + childNumber + '</p>';
   var newChild = `

            <div id="list_price_`+childNumberprice+`" class="form-group col-md-5 col-xs-12">
              <h4>@lang('general.price')</h4>
              <input name="prices[`+childNumberprice+`][price]" type="text" class="form-control">
           </div>
           <div id="list_quantity_from_`+childNumberprice+`" class="form-group col-md-3 col-xs-12">
              <h4>@lang('general.sale_price')</h4>
              <input name="prices[`+childNumberprice+`][quantity_from]" type="number" class="form-control">
           </div>
           <div id="list_quantity_to_`+childNumberprice+`" class="form-group col-md-3 col-xs-12">
              <h4>@lang('general.sale_price')</h4>
              <input name="prices[`+childNumberprice+`][quantity_to]" type="number" class="form-control">
           </div>

           <div id="list_delete_`+childNumberprice+`" class="form-group col-md-1 col-xs-12">
                        <button type="button"  onclick="deletePrice(`+childNumberprice+`);"
                            style="padding: 10px; background: #d9534f!important; border: none; margin-top: 35px;"><i
                                style=" color: white;" class=" fa fa-trash" aria-hidden="true"></i>
            </button>
        </div>

           `;
   parent.insertAdjacentHTML('beforeend', newChild);
   childNumberprice++;


     $('select').niceSelect();
   }

   function deletePrice(number) {

    var list_price = document.getElementById("list_price_"+number);
    list_price.remove();

    var list_quantity_to = document.getElementById("list_quantity_to_"+number);
    list_quantity_to.remove();

    var list_quantity_from = document.getElementById("list_quantity_from_"+number);
    list_quantity_from.remove();

    var list_delete = document.getElementById("list_delete_"+number);
    list_delete.remove();

   }


   function deleteAttribute(number) {



    var attribute_attribute = document.getElementById("attribute_attribute_"+number);
    attribute_attribute.remove();

    var attribute_value = document.getElementById("attribute_value_"+number);
    attribute_value.remove();

    var attribute_delete = document.getElementById("attribute_delete_"+number);
    attribute_delete.remove();

   }






</script>
<script>
    <script src="{{ asset('/web/js/script.js')}}">
</script>

$('#category').change(function(){

var cid = $(this).val();
if(cid){
$.ajax({
type:"get",
url:" /getSub/"+cid,
success:function(res)
{
if(res)
{
$("#subcategory").empty();
$("#subsubcategory").empty();
$("#subcategory").append("<option>@lang('general.sub_categories')</option>");
$.each(res,function(key,value){
$("#subcategory").append('<option value="'+key+'">'+value+'</option>');
});
$('#subcategory').niceSelect('update');

}
}

});
}
});
$('#subcategory').change(function(){
var sid = $(this).val();
if(sid){
$.ajax({
type:"get",
url:"/getSubSub/"+sid,
success:function(res)
{
if(res)
{
$("#subsubcategory").empty();
$("#subsubcategory").append("<option>@lang('general.sub_sub_categories')</option>");
$.each(res,function(key,value){
$("#subsubcategory").append('<option value="'+key+'">'+value+'</option>');
});
$('#subsubcategory').niceSelect('update');

}
}

});
}
});
</script>

<!-- mayada -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


<script src="{{ asset('/web/js/script.js')}}"></script>
@endpush