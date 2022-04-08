<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Beautyhouse | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('assets')}}/admin/app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/images/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Page CSS-->
    @yield('vendor_css')
    <!-- END: Page CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    @yield('page_css')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/assets/css/style.css">
    <!-- END: Custom CSS-->
    @yield('header_js')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
<!--header section-->
@include('admin._header')

<!--menu section-->
@include('admin._mainmenu')

<!--content section-->
@yield('content')

<!--footer section-->
@include('admin._footer')

@yield('footer_js')
</body>
</html>
