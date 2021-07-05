    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    var map;

    function initMap() {


        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                // lat: parseFloat(document.getElementById("lat").value),
                // lng: parseFloat(document.getElementById("lng").value)
                lat: 31.3540494,
                lng: 31.6841419
            },
            zoom: 13
        });


        var clickmarker = new google.maps.Marker({
            draggable: true
        });

        google.maps.event.addListener(map, 'click', function (event) {

            clickmarker.setPosition(event.latLng);
            clickmarker.setMap(map);
            clickmarker.setAnimation(google.maps.Animation.DROP);
            var lat = clickmarker.getPosition().lat();
            var lng = clickmarker.getPosition().lng();
            jQuery("#lat").val(lat);
            jQuery("#lng").val(lng)


        });
 
  
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }


    var x = document.getElementById("map");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {

        console.log(position);
        // map.setCenter(position);

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: parseFloat(position.coords.latitude),
                lng: parseFloat(position.coords.longitude)
            },
            zoom: 13
        });
        $('#lat').val(position.coords.latitude);
        $('#lng').val(position.coords.longitude);
    }
