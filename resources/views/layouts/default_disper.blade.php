<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plafond an Exterior Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="Plafond Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/timeline.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/team.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js"></script>
        <!-- font-awesome-icons -->
        <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    </head>
    <body> 
        <!-- banner -->
        <div id="home" class="w3ls-banner" style="margin-bottom:  0;"> 
            <!-- header -->
            @include('layouts.navbar_disper')
            @yield('content')
            <!-- footer -->
            @include('layouts.footer_disper')
            <!-- //footer -->
            @yield('post_content')
    </body>
</html>