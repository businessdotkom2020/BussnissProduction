<fieldset>
    <h3>@lang('general.background_image')</h3>
    <div class="form-row">
        <div class="form-group col-xs-12">

            <div class="prof-img">
                <div class="prof-change-btn">
                    <label>
                        <span> @lang('general.cheange')</span>
                    </label>
                </div>
                <label>
                    <i class="fa fa-camera"></i>
                    <input name="store_background" type="file"
                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">

                    <img src="{{ asset('/web/images/cover.jpg')}}" id="blah" alt="your image">
                </label>
                @error('store_background')
                <div class="alert" style="color:#a94442">{{ $message }}</div>
                @enderror
            </div>
            <div class="prof-img pic">
                <div class="prof-change-btn">
                    <label>
                        <span>@lang('general.cheange_profile_image')</span>
                    </label>
                </div>
                <label>
                    <i class="fa fa-camera"></i>

                    <input name="store_image" type="file"
                        onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                    <img src="{{ url('storage/users/default_company.png')}}" id="blah1" alt="your image">
                </label>
                @error('store_image')
                <div class="alert" style="color:#a94442">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <button type="button" class="next action-button next11">التالي</button>
</fieldset>