<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Duplex Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstarp-css -->
    <link href="{{asset('/front')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstarp-css -->
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/front')}}/css/style.css" type="text/css" media="all" />
    <!--// css -->
    <script src="{{asset('/front')}}/js/jquery.min.js"></script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!-- dropdown -->
    <script src="{{asset('/front')}}/js/jquery.easydropdown.js"></script>
    <link href="{{asset('/front')}}/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{asset('/front')}}/js/scripts.js" type="text/javascript"></script>
    <!--js-->
    <!--/js-->
    <script src="{{asset('/front')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('/front')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('/front')}}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- slider -->
    <script src="{{asset('/front')}}/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
            });
        });
    </script>
    <!-- slider -->
</head>
<body>
<div id="home" class="header">
   @include('front.includes.header')
    <!-- //header -->
    <!-- bg-banner -->
    <div class="container">
        <div class="bg-banner">
            <div class="banner-bottom-bg">
                <div class="banner-bg">

                    <!-- banner -->
                    <div class="banner">
                        <div class="banner-grids">

                            @include('front.includes.menue')
                            {{--slide content--}}
                            @include('front.includes.slide-content')
                            {{--slide content--}}

                            {{--recent content--}}
                            @include('front.includes.top-recent-content')
                            {{--recent content--}}



                            <div class="banner-middle">
                                <!-- banner-bottom-grids -->
                                <div class="banner-bottom-grids">

                                    <!-- main-content-left -->
                                    @yield('body')
                                    <!-- main-content-left -->


                                    <!-- right -recent-tab -->
                                    @include('front.includes.right-recent-tab')
                                    <!-- right -recent-tab -->

                                    <div class="clearfix"> </div>

                                </div>
                                <!-- //banner-bottom-grids -->
                            </div>
                        </div>
                    </div>
                    <!-- //banner -->

                </div>
            </div>
        </div>

        <!-- //-bottom- menu  -->
        @include('front.includes.bottom-menue')
        <!-- //-bottom- menu  -->


        <!-- // footer-->
        @include('front.includes.footer')
        <!-- // footer-->

    </div>
</body>
</html>