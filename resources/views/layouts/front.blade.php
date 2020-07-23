
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
</head>
<body>
<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/front/images/logo/loder.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
@include('front.includes.header')
<main>

    @yield('content')

</main>

@include('front.includes.footer')
<!-- JS here -->

<script src="{{asset('assets/front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('assets/front/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('assets/front/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/animated.headline.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('assets/front/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('assets/front/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('assets/front/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/front/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/front/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('assets/front/js/contact.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('assets/front/js/plugins.js')}}"></script>
<script src="{{asset('assets/front/js/main.js')}}"></script>
@yield('scripts')
</body>
</html>
