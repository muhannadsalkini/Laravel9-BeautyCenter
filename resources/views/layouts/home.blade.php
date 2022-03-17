<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Beautyhouse | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>
<body>
@include('home._header')

@section('content')

@show

@include('home._footer')
</div>
</body>
</html>
