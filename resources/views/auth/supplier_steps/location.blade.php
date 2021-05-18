<fieldset id="location_form">
    <h3>@lang('general.localization_info')</h3>
    <div class="form-row">

        {{--  Country Input  --}}
        <div class="form-group col-md-4 col-xs-12">
            <select required id="country_id" name="country_id" class="form-control error-va">
                <option selected disabled>@lang('general.country')</option>
                @foreach (\App\Models\Country::get() as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>

            <span class="error-msg  state_id_err"></span>

        </div>

        {{--  State Input  --}}

        <div class="form-group col-md-4 col-xs-12">
            <select required name="state_id" id="state_id" class="form-control error-va">
                <option selected disabled>@lang('general.state')</option>
            </select>

            <span class="error-msg  city_id_err"></span>

        </div>

        {{--  City Input  --}}

        <div class="form-group col-md-4 col-xs-12">
            <select required name="city_id" id="city_id" class="form-control error-va">
                <option selected disabled>@lang('general.city')</option>
            </select>

            <span class="error-msg  country_id_err"></span>

        </div>

        {{--  street_nom Input  --}}

        <div class="form-group col-md-6 col-xs-12">
            <input id="street_nom" required type="text" name="street_nom" placeholder="@lang('general.street_num')"
                class="form-control error-va">

            <span class="error-msg  street_nom_err"></span>

        </div>

        {{--  Zip Code Input  --}}


        <div class="form-group col-md-6 col-xs-12">
            <input id="zip_code" required type="text" name="zip_code" placeholder="@lang('general.zip_code')"
                class="form-control error-va">

            <span class="error-msg  zip_code_err"></span>

        </div>

        {{--  Address Spec Input  --}}

        <div class="form-group col-md-12 col-xs-12">
            <textarea id="address" required type="text" name="address" placeholder="@lang('general.address_spec')"
                class="form-control error-va"></textarea>

            <span class="error-msg  address_err"></span>

        </div>

        {{--  Map Input  --}}

        <div class="form-group col-md-12 col-xs-12 map-location-block">
            <div class="rate-title">
                <h3>@lang('general.map_location')</h3>
            </div>
            <div class="rate-stars">

                <div class="col-md-12 col-xs-12 m10_b">

                    <div id="pac-container">
                        <input id="pac-input" type="text" placeholder="@lang('general.enter_location')">
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
                <div id="map" style="width:100%;height:330px; "></div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <button type="button" class="action-button previous previous_button">السابق</button>
    <button type="button" onclick="ValidateStepTwo()" class="next action-button">التالي</button>
</fieldset>