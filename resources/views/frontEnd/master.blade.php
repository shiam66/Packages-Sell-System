<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/responsive.css')}}">

	<title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{asset('public/frontEnd/assets/images/favicon.png')}}">
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    @include('frontEnd.includes.header')
    <!-- End Header Area -->

    <!-- Sidebar Modal -->
    @include('frontEnd.includes.sidebar')
    <!-- End Sidebar Modal -->

    @yield('mainContent')

    <!-- Start Footer Area -->
    @include('frontEnd.includes.footer')
    <!-- End Footer Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- All Jquery -->
    <script src="{{asset('public/frontEnd/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/fancybox.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/scrollbar.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/horizontal-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/main.js')}}"></script>
</body>
</html>
