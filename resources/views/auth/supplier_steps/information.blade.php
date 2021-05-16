<fieldset>
    <h3>@lang('general.main_information')</h3>
    <div class="form-row">
        <div class="form-group col-md-6 col-xs-12">
            <h4 style="font-size:15px">@lang('general.supplier_name')</h4>

            <input type="text" id="supplier_name" required name="supplier_name"
                placeholder="@lang('general.supplier_name')" class="form-control">
            @error('supplier_name')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg supplier_name_err"></span>
        </div>



        <div class="form-group col-md-6 col-xs-12">
            <h4 style="font-size:15px">@lang('general.email')</h4>

            <input type="email" id="email" required name="email" placeholder="@lang('general.email')"
                class="form-control">
            @error('email')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg email_err"></span>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h4 style="font-size:15px">@lang('general.mobile')</h4>

            <input type="text" id="mobile" required name="mobile" placeholder="@lang('general.mobile')"
                class="form-control">
            @error('mobile')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg mobile_err"></span>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h4 style="font-size:15px">@lang('general.hot_line')</h4>

            <input type="text" id="hot_number" required name="hot_number" placeholder="@lang('general.hot_line')"
                class="form-control">
            @error('hot_line')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg hot_number_err"></span>
        </div>

        <div class="form-group col-md-12 col-xs-12">
            <h4 style="font-size:15px">@lang('general.categories')</h4>

            <select id="category_ids" required name="category_ids[]" class="form-control select-nosearch"
                placeholde="@lang('general.categories')" multiple>\
                @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)
                <option value="{{$category->id}}">
                    {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                </option>
                @endforeach
            </select>
            <span class="error-msg ml450 category_ids_err"></span>
            @error('category_ids')
            <div class="alert category_ids_err" style="color:#a94442">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h4 style="font-size:15px">@lang('general.password')</h4>

            <input type="password" id="password" required name="password" placeholder="@lang('general.password')"
                class="form-control">
            @error('password')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg password_err"></span>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <h4 style="font-size:15px">@lang('general.password_confirmation')</h4>

            <input type="password" id="password_confirmation" required name="password_confirmation"
                placeholder="@lang('general.password_confirmation')" class="form-control">
            @error('password_confirmation')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg password_confirmation_err"></span>
        </div>
    </div>
    <div class="clearfix"></div>
    <button type="button" class="next action-button next11">التالي</button>

</fieldset>