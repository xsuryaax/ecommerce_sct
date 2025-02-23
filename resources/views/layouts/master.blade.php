<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PT. SURYA CITRA TECHNOLOGY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.4/ionicons.min.css">

<link rel="stylesheet" href="{{ asset('resources/template_user/css/open-iconic-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('resources/template_user/css/animate.css') }}">

<link rel="stylesheet" href="{{ asset('resources/template_user/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('resources/template_user/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('resources/template_user/css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ asset('resources/template_user/css/aos.css') }}">

<link rel="stylesheet" href="{{ asset('resources/template_user/css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{ asset('resources/template_user/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('resources/template_user/css/jquery.timepicker.css') }}">

<link rel="stylesheet" href="{{ asset('resources/template_user/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('resources/template_user/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('resources/template_user/css/style.css') }}">

  </head>
    
<body>
    <div id="app">
        <div class="shadow-header"></div>

        @include('layouts.nav_user')

        @yield('content')

        @include('layouts.footer')



    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{ asset('resources/template_user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/popper.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/aos.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('resources/template_user/js/google-map.js') }}"></script>
    <script src="{{ asset('resources/template_user/js/main.js') }}"></script>
    
    
  </body>
</html>