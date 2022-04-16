@php
$setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper white-bg">
    <!--header section start-->
    <!--header section start-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <div class="header-left">
                            <div class="call-center">
                                @if($setting->phone != null)<p><i class="zmdi zmdi-phone"></i>{{$setting->phone}}</p>@endif
                            </div>
                            <div class="mail-address">
                                @if($setting->email)<p><i class="zmdi zmdi-email"></i>{{$setting->email}}</p>@endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            @if($setting->facebook != null)<a href="{{ $setting->facebook }}" target="_blank"><i class="zmdi zmdi-facebook"></i></a>@endif
                            @if($setting->instagram)<a href="{{ $setting->instagram }}" target="_blank"><i class="zmdi zmdi-instagram"></i></a>@endif
                            @if($setting->twitter)<a href="{{ $setting->twitter }}" target="_blank"><i class="zmdi zmdi-twitter"></i></a>@endif
                            @if($setting->youtube)<a href="{{ $setting->youtube }}" target="_blank"><i class="zmdi zmdi-youtube"></i></a>@endif
                            <!--<a href="#" target="_blank"><i class="zmdi zmdi-pinterest"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="mgea-full-width">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-9">
                            <div class="logo">
                                <a href="/"><img src="{{asset('assets')}}/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-8 hidden-sm hidden-xs" style="width: 55%;">
                            <div class="menu" >
                                <nav>
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="about-us">about</a></li>
                                        <!--<li class="mega-parent item-2"><a href="/shop">serivces</a>
                                            <ul class="mgea-menu">
                                                <li class="mega-sub"><a href="/shop">SHOP</a>
                                                    <ul class="mega-sub-item">
                                                        <li><a href="/shop">our products</a></li>
                                                        <li><a href="/shop">top sales</a></li>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                        <li><a href="product-details.html">product Details</a></li>
                                                        <li><a href="/cart">cart</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-sub"><a href="#">reservations</a>
                                                    <ul class="mega-sub-item">
                                                        <li><a href="/checkout">lunch</a></li>
                                                        <li><a href="gallery-2.html">skin care</a></li>
                                                        <li><a href="gallery.html">hair cut</a></li>
                                                        <li><a href="elements-feature.html">nail care</a></li>
                                                        <li><a href="elements-fun-fact.html">beauty spa</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-sub"><a href="#">Column Three</a>
                                                    <div class="mega-img">
                                                        <img src="{{asset('assets')}}/images/product/mega.jpg" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>-->
                                        <!-- Categories -->
                                        @include('home._category')
                                        <!-- BLOG -->
                                        <li><a href="/blog">blog</a></li>
                                        <!-- CONTACT US -->
                                        <li><a href="/contact-us">contact</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-3">
                            <div class="header-action-box" style="width: 330px;">

                                @auth
                                <div class="mini-cart" >
                                    <div class="cart-icon">
                                        <a href=""><i class="zmdi zmdi-account"></i><i style="font-size: small; padding-left: 8px; ">{{ \Illuminate\Support\Facades\Auth::user()->name }}</i></a>
                                    </div>
                                    <div class="mini-cart-box left" style=" width:120px;">
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="{{ route('myprofile') }}" class="title"><i class="zmdi zmdi-account" style="padding-right: 5px"></i> Account</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="#" class="title">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" style="padding-right: 5px" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                    </svg> Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href="#" class="title"><i class="zmdi zmdi-settings" style="padding-right: 5px"></i> Settings</a>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <div class="content fix">
                                                <a href=" {{ route('logout') }}" class="title">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" style="padding-right: 5px" width="16"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" >
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                        <polyline points="16 17 21 12 16 7"></polyline>
                                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                                    </svg> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endauth
                                @guest
                                    <div class="mini-cart" >
                                        <div  class="cart-icon">
                                            <a style="font-size: medium" href="/login" > Login</a><a style="font-size: medium" href="/register" >/ Register</a>
                                        </div>
                                    </div>
                                @endguest

                                <!-- Mini Cart -->
                                <div class="mini-cart" >
                                    <div class="cart-icon">
                                        <a href="/cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <span>2</span>
                                    </div>
                                    <div class="mini-cart-box right">
                                        <div class="mini-cart-product fix">
                                            <a href="#" class="image"><img src="{{asset('assets')}}/images/cart/mini-1.jpg" alt="" /></a>
                                            <div class="content fix">
                                                <a href="#" class="title">wooden furniture</a>
                                                <p>Color: Black</p>
                                                <p>Size: SL</p>
                                                <button class="remove"><i class="zmdi zmdi-close"></i></button>
                                            </div>
                                        </div>
                                        <div class="mini-cart-checkout text-center">
                                            <a href="/checkout">checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!--mini cart end-->

                                <div class="search">
                                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                                </div>
                            </div>
                            <div class="search-box">
                                <div class="search-form">
                                    <form action="#" id="search-form">
                                        <input type="search" name="search" placeholder="Search here...">
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile menu start -->
            <div class="mobile-menu-area hidden-lg hidden-md">
                <div class="container">
                    <div class="col-md-12">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="about-us">about</a></li>
                                <li class="mega-parent item-2"><a href="/shop">serivces</a>
                                    <ul class="mgea-menu">
                                        <li class="mega-sub"><a href="/shop">SHOP</a>
                                            <ul class="mega-sub-item">
                                                <li><a href="/shop">our products</a></li>
                                                <li><a href="/shop">top sales</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="product-details.html">product Details</a></li>
                                                <li><a href="/cart">cart</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-sub"><a href="#">reservations</a>
                                            <ul class="mega-sub-item">
                                                <li><a href="/checkout">lunch</a></li>
                                                <li><a href="gallery-2.html">skin care</a></li>
                                                <li><a href="gallery.html">hair cut</a></li>
                                                <li><a href="elements-feature.html">nail care</a></li>
                                                <li><a href="elements-fun-fact.html">beauty spa</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-sub"><a href="#">Column Three</a>
                                            <div class="mega-img">
                                                <img src="{{asset('assets')}}/images/product/mega.jpg" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            <!-- Categories -->
                            @include('home._category')
                            <!-- BLOG -->
                            <li><a href="/blog">blog</a></li>
                            <!-- CONTACT US -->
                            <li><a href="/contact-us">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile menu end -->
        </div>
    </div>
    <!--header section end-->
    <!--header section end-->
</div>
