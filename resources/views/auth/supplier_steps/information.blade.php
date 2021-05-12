<fieldset>
    <h3>@lang('general.main_information')</h3>
    <div class="form-row">
        <div class="form-group col-md-6 col-xs-12">
            <input type="text" required name="supplier_name" placeholder="@lang('general.supplier_name')"
                class="form-control error-va">
            @error('supplier_name')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>



        <div class="form-group col-md-6 col-xs-12">
            <input type="email" required name="email" placeholder="@lang('general.email')"
                class="form-control error-va">
            @error('email')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <input type="text" required name="mobile" placeholder="@lang('general.mobile')"
                class="form-control error-va">
            @error('mobile')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <input type="text" required name="hot_number" placeholder="@lang('general.hot_line')"
                class="form-control error-va">
            @error('hot_line')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>

        <div class="form-group col-md-12 col-xs-12">
            <h4 style="font-size:15px">@lang('general.categories')</h4>

            <select required name="category_ids[]" class="form-control select-nosearch error-va"
                placeholde="@lang('general.categories')" multiple>
                <!-- <option selected disabled>@lang('general.categories')</option> -->
                @foreach(\App\Models\Category::whereNull('parent_id')->get() as $category)
                <option value="{{$category->id}}">
                    {{$category->getTranslatedAttribute('name',\App::getLocale())}}
                </option>
                @endforeach
            </select>
            <span class="error-msg">هذا الحقل مطلوب.</span>
            @error('category_ids')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <input type="password" required name="password" placeholder="@lang('general.password')"
                class="form-control error-va">
            @error('password')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-6 col-xs-12">
            <input type="password" required name="password_confirmation"
                placeholder="@lang('general.password_confirmation')" class="form-control error-va">
            @error('password_confirmation')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
    </div>
    <div class="clearfix"></div>
    <button type="button" class="action-button previous previous_button">السابق</button>
    <button type="button" class="next action-button">التالي</button>
</fieldset>