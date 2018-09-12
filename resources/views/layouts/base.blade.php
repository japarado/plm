<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Normalize Style -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <!-- Color Switcher -->
    <link rel="stylesheet" href="{{ asset('css/color-switcher.css') }}" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('extras/animate.css') }}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('extras/owl.theme.css') }}" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="{{ asset('extras/settings.css') }}" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="{{ asset('extras/nivo-lightbox.css') }}" type="text/css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}" type="text/css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/sky.css') }}" media="screen" />

    <!-- jQuery  -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/color-switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/nivo-lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/contact-form-script.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</head>
<body>

<!-- Header area wrapper Starts -->
<header id="header-wrap">
    @include('inc.roof')
    @include('inc.navbar')
</header>
<!-- Header area wrapper End -->

<!-- Start Content Section -->
<div class="content error-bg">
    @yield('content')
</div>
<!-- End Content Section -->

<footer>
    @include('inc.footer')
</footer>
<!-- Footer Section End-->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="fa fa-arrow-up"></i>
</a>
</body>
</html>