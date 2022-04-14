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
                                <p><i class="zmdi zmdi-phone"></i>0123456789</p>
                            </div>
                            <div class="mail-address">
                                <p><i class="zmdi zmdi-email"></i>demo@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/muhannadsalkini02" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="https://twitter.com/muhannadsalkini" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCfrWNQfgw6mKTULUl0ok-8A" target="_blank"><i class="zmdi zmdi-youtube"></i></a>
                            <!--<a href="#" target="_blank"><i class="zmdi zmdi-pinterest"></i></a>-->
                            <a href="https://www.instagram.com/muhannad.salkini/" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
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
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <div class="menu">
                                <nav>
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
                        <div class="col-md-2 col-sm-6 col-xs-3">
                            <div class="header-action-box">
                                <div class="mini-cart" >
                                    <div class="cart-icon">
                                        <a href="/cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                                        <span>2</span>
                                    </div>
                                    <!-- Mini Cart -->
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
                                        <div class="mini-cart-product fix">
                                            <a href="#" class="image"><img src="{{asset('assets')}}/images/cart/mini-1.jpg" alt="" /></a>
                                            <div class="content fix">
                                                <a href="#" class="title">wooden furniture</a>
                                                <p>Color: Black</p>
                                                <p>Size: SL</p>
                                                <button class="remove"><i class="zmdi zmdi-close"></i></button>
                                            </div>
                                        </div>
                                        <div class="mini-cart-product fix">
                                            <a href="#" class="image"><img src="images/cart/mini-1.jpg" alt="" /></a>
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
                                    <!--mini cart end-->
                                </div>
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
