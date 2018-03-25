<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Avilon Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{ asset('css/timeline.css')}}" rel="stylesheet">
  <link href="{{ asset('css/countdown.css')}}" rel="stylesheet">
  <link href="{{ asset('css/media-queries.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
  <!--==========================
    Header
  ============================-->
  <!-- JavaScript Libraries -->
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('js/easing.min.js')}}"></script>
  <script src="{{ asset('js/wow.min.js')}}"></script>
  <script src="{{ asset('js/hoverIntent.js')}}"></script>
  <script src="{{ asset('js/superfish.min.js')}}"></script>
  <script src="{{ asset('js/magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('js/jquery.backstretch.min.js')}}"></script>
  <script src="{{ asset('js/countdown.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('js/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js')}}"></script>

</body>
</html>
