@php($setting = App\Http\Controllers\HomeController::getsetting())
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset('assets')}}/images/apple-touch-icon.png" type="{{asset('assets')}}/images/x-icon" rel="shortcut icon">

    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/core.css">
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

    <!-- customizer style css -->
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    @yield('css')
    @yield('header_js')
</head>
<body>
<div class="wrapper white-bg">
<!--header section start-->
@include('home._header')
<!--header section end-->

<!-- content section start -->
@yield('content')
<!-- content section end -->

<!--footer start-->
@include('home._footer')
<!--footer end-->
</div>

@yield('footer_js')
</body>
</html>
