@extends('layouts.main')
@php
$menu = false ;
@endphp

@section('content')
 



<!--end::Form-->
@endsection
@push('scripts')



<script src="{{ asset('/web/js/amir-upload-files.js')}}"></script>
<script src="{{ asset('/web/js/select2.full.min.js')}}"></script>



<script>
    var childNumber = {{count($product->options)}};
 var childNumberprice = {{count(\App\Models\ProductPrice::where('product_id',$product->id)->get())}};

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
              $("#valueselect"+select_id).append('<option disabled >Select Values</option>');
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
            <div class="form-group col-md-6 col-xs-12">

                              <select id="optselect`+childNumber+`"  onchange="selectoption(`+childNumber+`,this)"  name="options[`+childNumber+`][attribute_id]" class=" optselect form-control">
                  @foreach(\App\Models\Attribute::get() as $category)
                  <option value="{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                  @endforeach
               </select>

            </div>

                        <div class="form-group col-md-6 col-xs-12">
               <select id="valueselect`+childNumber+`"  name="options[`+childNumber+`][values_id]" class=" optselect form-control select-nosearch" multiple>
                  <!--<option selected disabled>@lang('general.categories')</option>-->


               </select>
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

             <div class="form-group col-md-6 col-xs-12">
               <h4>@lang('general.price')</h4>
               <input name="prices[`+childNumberprice+`][price]" type="text" class="form-control">
            </div>
            <div class="form-group col-md-3 col-xs-12">
               <h4>@lang('general.sale_price')</h4>
               <input name="prices[`+childNumberprice+`][quantity_from]" type="text" class="form-control">
            </div>
            <div class="form-group col-md-3 col-xs-12">
               <h4>@lang('general.sale_price')</h4>
               <input name="prices[`+childNumberprice+`][quantity_to]" type="text" class="form-control">
            </div>

            `;
  parent.insertAdjacentHTML('beforeend', newChild);
  childNumberprice++;


      $('select').niceSelect();
}






</script>



<script>
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
              $("#subcategory").append('<option>Select State</option>');
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
              $("#subsubcategory").append('<option>Select City</option>');
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
@endpush
