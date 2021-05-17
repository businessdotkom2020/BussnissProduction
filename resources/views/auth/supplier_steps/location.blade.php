<fieldset id="location_form">
    <h3>@lang('general.localization_info')</h3>
    <div class="form-row">
        <div class="form-group col-md-4 col-xs-12">
            <select required id="country" name="country_id" class="form-control error-va">
                <option selected disabled>@lang('general.country')</option>

                @foreach (\App\Models\Country::get() as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach

            </select>

            @error('country_id')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-4 col-xs-12">
            <select required name="state_id" id="state" class="form-control error-va">
                <option selected disabled>@lang('general.state')</option>
            </select>

            @error('state_id')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-4 col-xs-12">
            <select required name="city_id" id="city" class="form-control error-va">
                <option selected disabled>@lang('general.city')</option>
            </select>

            @error('city_id')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-12 col-xs-12">
            <input required type="text" name="street_nom" placeholder="@lang('general.street_num')"
                class="form-control error-va">
            @error('street_nom')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>

        <div class="form-group col-md-12 col-xs-12">
            <input required type="text" name="zip_code" placeholder="@lang('general.zip_code')"
                class="form-control error-va">
            @error('zip_code')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-12 col-xs-12">
            <input required type="text" name="address" placeholder="@lang('general.address_spec')"
                class="form-control error-va">
            @error('address_spec')
            <div class="alert" style="color:#a94442">{{ $message }}</div>
            @enderror
            <span class="error-msg">هذا الحقل مطلوب.</span>
        </div>
        <div class="form-group col-md-12 col-xs-12">
            <!--<input type="text" placeholder="@lang('general.map_location')" class="form-control">-->
            <!--<a href="#" class="btn btn-review" data-toggle="modal" onclick="initMap()"
            data-target="#review-pop">@lang('general.map_location')</a>-->

        </div>
        <div class="form-group col-md-12 col-xs-12 map-location-block">
            <div class="rate-title">
                <h3>@lang('general.map_location')</h3>
            </div>
            <div class="rate-stars">

                <div class="col-md-12 col-xs-12 m10_b">

                    <div id="pac-container">
                        <input id="pac-input" type="text" placeholder="Enter a location">
                    </div>

                </div>

                <div class="col-md-6 col-xs-12 ">

                    <div class="form-group">
                        <input type="hidden" oninput="initMap()" value="31.3540494" class="form-control input-sm"
                            name="lat" id="lat">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 ">

                    <div class="form-group">
                        <input type="hidden" oninput="initMap()" value="31.6841419" class="form-control input-sm"
                            name="lng" id="lng">
                    </div>
                </div>


            </div>
            <div class="rate-form">


                <div class="pac-card" id="pac-card">
                    <div>
                        <div id="title">
                            Autocomplete search
                        </div>
                        <div id="type-selector" class="pac-controls">
                            <input type="radio" name="type" id="changetype-all" checked="checked">
                            <label for="changetype-all">All</label>

                            <input type="radio" name="type" id="changetype-establishment">
                            <label for="changetype-establishment">Establishments</label>

                            <input type="radio" name="type" id="changetype-address">
                            <label for="changetype-address">Addresses</label>

                            <input type="radio" name="type" id="changetype-geocode">
                            <label for="changetype-geocode">Geocodes</label>
                        </div>
                        <div id="strict-bounds-selector" class="pac-controls">
                            <input type="checkbox" id="use-strict-bounds" value="">
                            <label for="use-strict-bounds">Strict Bounds</label>
                        </div>
                    </div>

                </div>
                <div id="map" style="width:100%;height:330px; "></div>


            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <button type="button" class="action-button previous previous_button">السابق</button>
    <button type="button" id="location_form_button" class="next action-button">التالي</button>
</fieldset>