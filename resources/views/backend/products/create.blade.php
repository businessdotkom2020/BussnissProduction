@extends('backend.layout.master')
@section('backend-head')
    <link href="{{ asset('backend') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css"
          rel="stylesheet"/>
@endsection
@section('backend-main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('dashboard.add') }} {{ __('dashboard.product') }}</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('productss.store') }}" class="needs-validation" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.select') }} {{ __('dashboard.supplier') }}</label>
                                    <select name="user_id" class="form-control select2">
                                        <option hidden selected disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.supplier') }}</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">{{ __('dashboard.name_arabic') }}</label>
                                    <input type="text" name="name_ar" class="form-control" id="validationCustom01"
                                           placeholder="{{ __('dashboard.name_arabic') }}" value="{{ old('name_ar') }}" required>
                                    @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom02">{{ __('dashboard.name_english') }}</label>
                                    <input type="text" name="name_en" class="form-control" id="validationCustom02"
                                           placeholder="{{ __('dashboard.name_english') }}" value="{{ old('name_en') }}" required>
                                    @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">{{ __('dashboard.price') }}</label>
                                    <input min="0" step="0.1" type="number" name="price" class="form-control" id="price"
                                           placeholder="{{ __('dashboard.price') }}" value="{{ old('price') }}" required>
                                    @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discount_price">{{ __('dashboard.dis_price') }} ( {{ __('dashboard.optional') }} ) </label>
                                    <input min="0" step="0.1" type="number" name="sale_price" class="form-control"
                                           id="discount_price" placeholder="{{ __('dashboard.dis_price') }} ( {{ __('dashboard.optional') }} )"
                                           value="{{ old('sale_price') }}">
                                    @error('sale_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="body_ar">{{ __('dashboard.desc') }} {{ __('dashboard.in_ar') }}</label>
                                    <textarea rows="10" type="text" name="description_ar"
                                              class="form-control summernote"
                                              id="body_ar" placeholder="{{ __('dashboard.desc') }} {{ __('dashboard.in_ar') }}"
                                              required>{{ old('description_ar') }}</textarea>
                                    @error('description_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="body_en">{{ __('dashboard.desc') }} {{ __('dashboard.in_en') }}</label>
                                    <textarea rows="10" type="text" name="description_en"
                                              class="form-control summernote"
                                              id="body_en" placeholder="{{ __('dashboard.desc') }} {{ __('dashboard.in_en') }}"
                                              required>{{ old('description_en') }}</textarea>
                                    @error('description_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.select') }} {{ __('dashboard.category') }}</label>
                                    <select name="category_id" class="form-control select2" id="category_id">
                                        <option hidden selected disabled value="">{{ __('dashboard.select') }}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                / {{$category->getTranslatedAttribute('name','ar')}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.select') }} {{ __('dashboard.subcategory') }}</label>
                                    <select name="subcategory_id" class="form-control select2" id="subcategory_id">
                                        <option>{{ __('dashboard.chose_category') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.select') }} {{ __('dashboard.subsubcategory') }}</label>
                                    <select name="subsubcategory_id" class="form-control select2"
                                            id="subsubcategory_id">
                                        <option>{{ __('dashboard.chose_category') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.select') }} {{ __('dashboard.ta') }}</label>
                                    <select name="material_id" class="form-control select2">
                                        <option hidden selected disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.ta') }}</option>
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}
                                                / {{$tag->getTranslatedAttribute('name','ar')}}</option>
                                        @endforeach
                                    </select>
                                    @error('material_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.select') }} {{ __('dashboard.brand') }}</label>
                                    <select name="brand_id" class="form-control select2">
                                        <option hidden selected disabled value="">{{ __('dashboard.select') }} {{ __('dashboard.brand') }}</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.main_price_list') }}</label>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="price">{{ __('dashboard.price') }}</label>
                                                <input type="text" class="form-control" name="prices[0][price]"
                                                       placeholder="{{ __('dashboard.price') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="quantity_from">{{ __('dashboard.quantity') }} {{ __('dashboard.from') }}</label>
                                                <input type="number" class="form-control" min='0'
                                                       name="prices[0][quantity_from]" placeholder="{{ __('dashboard.quantity') }} {{ __('dashboard.from') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="quantity_to">{{ __('dashboard.quantity') }} {{ __('dashboard.to') }}</label>
                                                <input type="number" class="form-control" min='0'
                                                       name="prices[0][quantity_to]" placeholder="{{ __('dashboard.quantity') }} {{ __('dashboard.to') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="more-price"></div>
                                    <div class="form-group">
                                        <a id="addPrice" class="btn btn-primary text-white">{{ __('dashboard.add_more') }}</a>
                                        <a id="removePrice" class="btn btn-warning text-white">{{ __('dashboard.remove_last') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.attributes') }} </label>
                                    <div class="form-group">
                                        <div id="parent">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <select id="optselect1" onchange="selectoption(1,this)"
                                                            name="options[0][attribute_id]" class="form-control">
                                                        <option selected disabled>{{ __('dashboard.select') }} {{ __('dashboard.attributes') }}</option>
                                                        @foreach(\App\Models\Attribute::get() as $category)
                                                            <option value="{{$category->id}}">{{ $category->name }} / {{$category->getTranslatedAttribute('name','ar')}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <select id="valueselect1" required name="options[0][values_id]"
                                                            class="form-control">
                                                        <option selected disabled>{{ __('dashboard.select_attribute_first') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                            <a type="submit" onclick="addChild();" class="btn btn-primary text-white">{{ __('dashboard.add_more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 col-md-12 images mb-3">
                                <label for="image">{{ __('dashboard.main_image') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image" onchange="readURL(this);">
                                    <label class="custom-file-label" for="image">{{ __('dashboard.select') }} {{ __('dashboard.main_image') }}</label>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <img id="blah" class="blah_create mt-3" src=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 images mt-3">
                                <div class="form-group">
                                    <label class="control-label">{{ __('dashboard.sub_images') }}
                                        <small>( max 6 images )</small>
                                    </label>
                                    <span class="btn btn-success fileinput-button">
                                <span>{{ __('dashboard.select') }} {{ __('dashboard.images') }}</span>
                                <input type="file" name="images[]" id="files" multiple
                                       accept="image/jpeg, image/png, image/gif,"><br/>
                                </span>
                                    <br>
                                    <output class="mt-3" id="Filelist"></output>
                                    @error('images')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    {{ __('dashboard.pro_condition') }}
                                </label>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="radio" name="product_condition" class="custom-control-input" id="customCheck2"
                                           checked="" value="new">
                                    <label class="custom-control-label" for="customCheck2">{{ __('dashboard.new') }}</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="radio" name="product_condition" class="custom-control-input" id="customCheck3"
                                           checked="" value="used">
                                    <label class="custom-control-label" for="customCheck3">{{ __('dashboard.used') }} </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">{{ __('dashboard.submit') }} </button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('backend-footer')
    <script src="{{ asset('backend') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-element.init.js"></script>
    <script src="{{ asset('backend') }}/mine.js"></script>
    <script src="{{ asset('backend') }}/image_uploader.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/form-advanced.init.js"></script>
    <script>
        var childNumber = 2;
        var childNumberprice = 2;
        function selectoption(select_id, selectObject) {
            console.log(select_id);
            console.log(selectObject.value);
            $.ajax({
                type: "get",
                url: " /getValues/" + selectObject.value,
                success: function (res) {
                    if (res) {
                        $("#valueselect" + select_id).empty();
                        $("#valueselect" + select_id).append('<option disabled >{{ __("dashboard.select") }} {{ __("dashboard.values") }}</option>');
                        $.each(res, function (key, value) {
                            $("#valueselect" + select_id).append('<option value="' + key + '">' + value + '</option>');
                        });
                        $('#valueselect' + select_id).niceSelect('update');
                    }
                }
            });
        }
        function addChild() {
            var parent = document.getElementById('parent');
            var newChild = `
            <div class="row">
            <div class="form-group col-md-6 col-xs-12">
                              <select id="optselect` + childNumber + `"  onchange="selectoption(` + childNumber + `,this)"  name="options[` + childNumberprice + `][attribute_id]" class=" optselect form-control">
                              <option selected disabled>{{ __('dashboard.select') }} {{ __('dashboard.attributes') }}</option>
                  @foreach(\App\Models\Attribute::get() as $category)
                <option value="{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                  @endforeach
                </select>
             </div>
                         <div class="form-group col-md-6 col-xs-12">
                <select id="valueselect` + childNumber + `"  name="options[` + childNumberprice + `][values_id]" class=" optselect form-control select-nosearch">
                  <option selected disabled>{{ __('dashboard.select_attribute_first') }}</option>
               </select>
            </div>
            </div>
            `;
            parent.insertAdjacentHTML('beforeend', newChild);
            childNumber++;
            $('select').niceSelect();
        }
    </script>
    <script>
        $(document).ready(function () {
            var max_fields = 20;
            var x = 0;
            $("#addPrice").on("click", function () {
                if (x == max_fields) {
                    alert('Max Fields Number');
                }
                if (x < max_fields) {
                    x++;
                    $("#more-price").append("" +
                        "<div class='form-group'>" +
                        "<div class='row'>" +
                        "<div class='col-md-4'>" +
                        "<label for='price'>{{ __('dashboard.price') }}</label><input type='text' class='form-control' name='prices[" + x + "][price]' placeholder='{{ __('dashboard.price') }}'/>" +
                        "</div>" +
                        "<div class='col-md-4'>" +
                        "<label for='quantity_from'>{{ __('dashboard.quantity') }} {{ __('dashboard.from') }}</label><input min='0' type='number' name='prices[" + x + "][quantity_from]' class='form-control' placeholder='{{ __('dashboard.quantity') }} {{ __('dashboard.from') }}'/>" +
                        "</div>" +
                        "<div class='col-md-4'>" +
                        "<label for='quantity_to'>{{ __('dashboard.quantity') }} {{ __('dashboard.to') }}</label><input min='0' type='number' name='prices[" + x + "][quantity_to]' class='form-control' placeholder='{{ __('dashboard.quantity') }} {{ __('dashboard.to') }}'/>" +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        "");
                }
            });
            $("#removePrice").on("click", function () {
                $("#more-price").children().last().remove();
            });
        });
    </script>
@endsection
