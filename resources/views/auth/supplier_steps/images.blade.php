<fieldset id="Images_form">
    <h3>@lang('general.background_image')</h3>
    <div class="form-row">
        <div class="form-group col-xs-12">

            <div class="prof-img background-image-cover">
                <div class="prof-change-btn">
                    <label>
                        <span> @lang('general.cheange')</span>
                    </label>
                </div>
                <label>
                    <i class="fa fa-camera"></i>
                    <input name="store_background" type="file"
                        onchange="document.getElementById('store_background').src = window.URL.createObjectURL(this.files[0])">

                    <img src="{{ asset('/web/images/cover.jpg')}}" id="store_background" alt="your image">
                </label>


            </div>
            <span class="error-msg store_background_err"></span>

            <div class="prof-img pic">
                <div class="prof-change-btn">
                    <label>
                        <span>@lang('general.cheange_profile_image')</span>
                    </label>
                </div>
                <label>
                    <i class="fa fa-camera"></i>

                    <input name="store_image" type="file"
                        onchange="document.getElementById('store_image').src = window.URL.createObjectURL(this.files[0])">
                    <img src="{{ url('storage/users/default_company.png')}}" id="store_image" alt="your image">
                </label>

            </div>
            <span class="error-msg store_image_err"></span>
        </div>
    </div>
    <div class="clearfix"></div>
    <button type="button" class="action-button previous previous_button">رجوع</button>
    <button type="submit" class="action-button">@lang('general.register')</button>
</fieldset>