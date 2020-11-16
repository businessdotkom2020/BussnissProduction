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
                    <h4 class="card-title">Add New Product</h4>
                    <p class="card-title-desc"></p>
                    <form method="post" action="{{ route('productss.store') }}" class="needs-validation" novalidate
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Select Supplier</label>
                                    <select name="user_id" class="form-control select2">
                                        <option hidden selected disabled value="">Select Supplier</option>
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
                                    <label for="validationCustom01">Name in Arabic</label>
                                    <input type="text" name="name_ar" class="form-control" id="validationCustom01"
                                           placeholder="Name in Arabic" value="{{ old('name_ar') }}" required>
                                    @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom02">Name in English</label>
                                    <input type="text" name="name_en" class="form-control" id="validationCustom02"
                                           placeholder="Name in English" value="{{ old('name_en') }}" required>
                                    @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input min="0" step="0.1" type="number" name="price" class="form-control" id="price"
                                           placeholder="Price" value="{{ old('price') }}" required>
                                    @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discount_price">Sale Price ( Optional ) </label>
                                    <input min="0" step="0.1" type="number" name="sale_price" class="form-control"
                                           id="discount_price" placeholder="Sale Price ( Optional )"
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
                                    <label for="body_ar">Descreption in Arabic</label>
                                    <textarea rows="10" type="text" name="description_ar"
                                              class="form-control summernote"
                                              id="body_ar" placeholder="Descreption in Arabic"
                                              required>{{ old('description_ar') }}</textarea>
                                    @error('description_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="body_en">Descreption in English</label>
                                    <textarea rows="10" type="text" name="description_en"
                                              class="form-control summernote"
                                              id="body_en" placeholder="Descreption in English"
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
                                    <label class="control-label">Select Category</label>
                                    <select name="category_id" class="form-control select2" id="category_id">
                                        <option hidden selected disabled value="">Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                / {{$category->getTranslatedAttribute('name','ar')}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Select Subcategory</label>
                                    <select name="subcategory_id" class="form-control select2" id="subcategory_id">
                                        <option>Select category first</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Select Second Subcategory</label>
                                    <select name="subsubcategory_id" class="form-control select2"
                                            id="subsubcategory_id">
                                        <option>Select category first</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Select Tag</label>
                                    <select name="material_id" class="form-control select2">
                                        <option hidden selected disabled value="">Select</option>
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
                                    <label class="control-label">Select Brand</label>
                                    <select name="brand_id" class="form-control select2">
                                        <option hidden selected disabled value="">Select</option>
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
                                    <label class="control-label">Main price list</label>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="price">price</label>
                                                <input type="text" class="form-control" name="prices[0][price]"
                                                       placeholder="price">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="quantity_from">quantity from</label>
                                                <input type="number" class="form-control" min='0'
                                                       name="prices[0][quantity_from]" placeholder="quantity from">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="quantity_to">quantity to</label>
                                                <input type="number" class="form-control" min='0'
                                                       name="prices[0][quantity_to]" placeholder="quantity to">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="more-price"></div>
                                    <div class="form-group">
                                        <a id="addPrice" class="btn btn-primary text-white">Add more</a>
                                        <a id="removePrice" class="btn btn-warning text-white">Remove last</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Product attributes</label>
                                    <div class="form-group">
                                        <div id="parent">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <select id="optselect1" onchange="selectoption(1,this)"
                                                            name="options[0][attribute_id]" class="form-control">
                                                        <option selected disabled>Select Attribute</option>
                                                        @foreach(\App\Models\Attribute::get() as $category)
                                                            <option value="{{$category->id}}">{{ $category->name }} / {{$category->getTranslatedAttribute('name','ar')}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <select id="valueselect1" required name="options[0][values_id]"
                                                            class="form-control">
                                                        <option selected disabled>Select Attribute First</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                            <a type="submit" onclick="addChild();" class="btn btn-primary text-white">Add
                                                More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 col-md-12 images mb-3">
                                <label for="image">Product Main image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image" onchange="readURL(this);">
                                    <label class="custom-file-label" for="image">Choose Image</label>
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
                                    <label class="control-label">Sub Images
                                        <small>( max 6 images )</small>
                                    </label>
                                    <span class="btn btn-success fileinput-button">
                                <span>Select Images</span>
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
                                    Product Condition
                                </label>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="radio" name="product_condition" class="custom-control-input" id="customCheck2"
                                           checked="" value="new">
                                    <label class="custom-control-label" for="customCheck2">new</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="radio" name="product_condition" class="custom-control-input" id="customCheck3"
                                           checked="" value="used">
                                    <label class="custom-control-label" for="customCheck3">Used</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Submit</button>
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
                        $("#valueselect" + select_id).append('<option disabled >Select Values</option>');
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
                              <option selected disabled>Select</option>
                  @foreach(\App\Models\Attribute::get() as $category)
                <option value="{{$category->id}}">{{$category->getTranslatedAttribute('name',\App::getLocale())}}</option>
                  @endforeach
                </select>
             </div>
                         <div class="form-group col-md-6 col-xs-12">
                <select id="valueselect` + childNumber + `"  name="options[` + childNumberprice + `][values_id]" class=" optselect form-control select-nosearch">
                  <option selected disabled>Select Attribute First</option>
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
                        "<label for='price'>price</label><input type='text' class='form-control' name='prices[" + x + "][price]' placeholder='price'/>" +
                        "</div>" +
                        "<div class='col-md-4'>" +
                        "<label for='quantity_from'>quantity from</label><input min='0' type='number' name='prices[" + x + "][quantity_from]' class='form-control' placeholder='quantity from'/>" +
                        "</div>" +
                        "<div class='col-md-4'>" +
                        "<label for='quantity_to'>quantity to</label><input min='0' type='number' name='prices[" + x + "][quantity_to]' class='form-control' placeholder='quantity to'/>" +
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
