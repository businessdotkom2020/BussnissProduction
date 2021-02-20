{{--************************************* update user Map   **********************************--}}

<div class="modal fade" id="review-pop">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="rate-title">
                    <h3>@lang('general.map_location')</h3>
                </div>
                <div class="rate-stars">
                    <div class="col-md-8 col-xs-12">
                        <div id="pac-container">
                            <input id="pac-input" type="text" placeholder="Enter a location"> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <button id="current_location" onclick="getLocation()"> Current Location <i
                                class="fa fa-location-arrow" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Lat</label>
                            <input type="text" oninput="initMap()" value="31.3540494" class="form-control input-sm"
                                name="lat" id="lat"> </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Lng</label>
                            <input type="text" oninput="initMap()" value="31.6841419" class="form-control input-sm"
                                name="lng" id="lng"> </div>
                    </div>
                </div>
                <div class="rate-form">
                    <div class="pac-card" id="pac-card">
                        <div>
                            <div id="title"> Autocomplete search </div>
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
                    <div id="map" style="width:100%;height:400px; "></div>
                    <div id="infowindow-content"> <img src="" width="16" height="16" id="place-icon"> <span
                            id="place-name" class="title"></span>
                        <br> <span id="place-address"></span> </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- End /.modal-dialog -->
