<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>BusinessDotKom @yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Amir Nageh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Files -->

    <link rel="stylesheet" href="{{ asset('/web/css/style.css')}}">

    @if (\App::getLocale() == 'ar')

    <link rel="stylesheet" href="{{ asset('/web/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/web/css/style-ar.css')}}">

    @endif
    <link rel="stylesheet" href="{{ asset('/web/css/style-res.css')}}">
    <link rel="stylesheet" href="{{ asset('/web/css/custom-general.css')}}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/web/images/faveicon.png')}}">




    @stack('styles')




</head>

<body>
    @include('sweetalert::alert')

    <div id="loading">
        <div class="loading">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </div>



    <div class="wrapper col-xs-12">




        @include('includes.sidebar')

        @yield('content')



        @include('includes.footer')



    </div>
    <!-- Javascript Files -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('/web/js/jquery-2.2.2.min.js')}}"></script>
    <script src="{{ asset('/web/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/web/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('/web/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('/web/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/web/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('/web/js/aos.js')}}"></script>
    <script src="{{ asset('/web/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('/web/js/script.js')}}"></script>
    @stack('scripts')

</body>

</html>