<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <style type="text/css">body {overflow-y: hidden;}.site-header,.site-header.navbar-lateral {opacity: 0;-webkit-transition: opacity .6s .9s;transition: opacity .6s .9s;}.page-wrap {opacity: 0;-webkit-transition: opacity .7s .9s;transition: opacity .7s .9s;}.site-header.loading-done,.site-header.navbar-lateral.loading-done,.page-wrap.loading-done {opacity: 1;}.loading-screen.loading-done {opacity: 0;visibility: hidden;}.spinner-wrap { position: absolute; left: 50%; top: 50%; height: 130px; width: 130px; margin-top: -65px; margin-left: -65px;}.cssload-loader{width:50px;height:50px;position:absolute;left:50%;top:50%;transform:translate3d(-50%,-50%,0);-o-transform:translate3d(-50%,-50%,0);-ms-transform:translate3d(-50%,-50%,0);-webkit-transform:translate3d(-50%,-50%,0);-moz-transform:translate3d(-50%,-50%,0);perspective:1200;-o-perspective:1200;-ms-perspective:1200;-webkit-perspective:1200;-moz-perspective:1200}.cssload-flipper{position:relative;display:block;height:inherit;width:inherit;animation:cssload-flip 1.38s infinite ease-in-out;-o-animation:cssload-flip 1.38s infinite ease-in-out;-ms-animation:cssload-flip 1.38s infinite ease-in-out;-webkit-animation:cssload-flip 1.38s infinite ease-in-out;-moz-animation:cssload-flip 1.38s infinite ease-in-out;transform-style:preserve-3d;-o-transform-style:preserve-3d;-ms-transform-style:preserve-3d;-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d}.cssload-back,.cssload-front{position:absolute;top:0;left:0;display:block;background-color:#164573;height:100%;width:100%;backface-visibility:hidden}.cssload-back{background-color:#2e7dc7;z-index:800;transform:rotateY(-180deg);-o-transform:rotateY(-180deg);-ms-transform:rotateY(-180deg);-webkit-transform:rotateY(-180deg);-moz-transform:rotateY(-180deg)}@keyframes cssload-flip{0%{transform:perspective(117px) rotateX(0) rotateY(0)}50%{transform:perspective(117px) rotateX(-180.1deg) rotateY(0)}100%{transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-o-keyframes cssload-flip{0%{-o-transform:perspective(117px) rotateX(0) rotateY(0)}50%{-o-transform:perspective(117px) rotateX(-180.1deg) rotateY(0)}100%{-o-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-ms-keyframes cssload-flip{0%{-ms-transform:perspective(117px) rotateX(0) rotateY(0)}50%{-ms-transform:perspective(117px) rotateX(-180.1deg) rotateY(0)}100%{-ms-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-webkit-keyframes cssload-flip{0%{-webkit-transform:perspective(117px) rotateX(0) rotateY(0)}50%{-webkit-transform:perspective(117px) rotateX(-180.1deg) rotateY(0)}100%{-webkit-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-moz-keyframes cssload-flip{0%{-moz-transform:perspective(117px) rotateX(0) rotateY(0)}50%{-moz-transform:perspective(117px) rotateX(-180.1deg) rotateY(0)}100%{-moz-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}</style>
        <style type="text/css">
            img.wp-smiley,img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>

    <!-- Styles -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js"></script>
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    @yield('before_content')

</head>
<body>
    <div class="loading-screen">
        <div class="cssload-loader">
            <div class="cssload-flipper">
                <div class="cssload-front"></div>
                <div class="cssload-back"></div>
            </div>
        </div>
    </div>
    @include('layouts.navbar')
    @include('layouts.header')
        <main class="page-wrap">
            <!-- main content here -->
            @yield('content')
            @include('layouts.footer')
        </main>

    <a href="#" class="scroll-to-top-btn">
            <i class="material-icons keyboard_arrow_up"></i>
    </a>
    <div class="site-backdrop"></div>
    <!-- Scripts -->
    <!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--banner form script-->
                                    <script type='text/javascript'>//<![CDATA[ 
                                    $(window).load(function(){
                                     $( "#slider-range" ).slider({
                                                range: true,
                                                min: 0,
                                                max: 9000,
                                                values: [ 1000, 7000 ],
                                                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                                                }
                                     });
                                    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                                    });//]]>  

                                    </script>
                                    <script type="text/javascript" src="js/jquery-ui.js"></script>
<!--//banner form script-->
                        <script src="js/responsiveslides.min.js"></script>
            <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                            auto: true,
                            pager:true,
                            nav:false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });
                    
                        });
            </script>
<!--Rersponsive tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!-- //Rersponsive tabs -->
<!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
                    <script type="text/javascript">
                    $(window).load(function(){
                      $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                          $('body').removeClass('loading');
                        }
                      });
                    });
                  </script>

<!-- //flexSlider -->
<!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
<!-- start-smooth-scrolling -->
<!-- password-script -->  
<script type="text/javascript">
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }
        function validatePassword(){
            var pass2=document.getElementById("password2").value;
            var pass1=document.getElementById("password1").value;
            if(pass1!=pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');  
                //empty string means no validation error
        }

</script>
<!-- //password-script -->

<!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
<!-- //stats -->
    @yield('post_content')

</body>
</html>
