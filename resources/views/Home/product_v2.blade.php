@extends('layouts.app')


@push('styles')

<style>
    #map {
        position: initial !important;
        height: 100% !important;
        width: 100% !important;
    }
</style>

<script>
    WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = {{ asset('vendor//webfont.js')}};
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
</script>

<link rel="preload" href="{{ asset('vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}" as="font"
    type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="{{ asset('vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font" type="font/woff2"
    crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl-carousel/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/theme_style.css')}}">




@endpush

@section('content')



@endsection


@push('first_scripts')



<!-- Plugin JS File -->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.plugin/jquery.plugin.min.js')}}"></script>
<script src="{{ asset('vendor/sticky/sticky.min.js')}}"></script>
<script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>

<script src="{{ asset('vendor/floating-parallax/parallax.min.js')}}"></script>


<!-- Main JS -->
<script src="{{ asset('vendor/main.min.js')}}"></script>



<script type="text/javascript" src="{{ asset('/web/js/branches_map.js')}}"></script>

<script>
    $('#map').show();
    $("#map").css("position","fixed !important");
     
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcP3JChqWSCHtsjW4e_Ug8h0htjiIhcHw&libraries=places&callback=initMap"
    async defer></script>


@endpush