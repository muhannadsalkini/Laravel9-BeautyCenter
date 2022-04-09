@extends('layouts.home')

@section('title', 'Shop')

@section('keywords','Bakim, Guzellik')


@section('content')
    <!--Breadcrumbs start-->
    @include('home._breadcrumbs')
    <!--Breadcrumbs end-->
    <!--shop page start-->
    <div class="shop-page ptb-100">
        <div class="container">
            <div class="row">
                <!--shop sidebar start-->
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="shop sidebar">
                        <aside class="widget categories grey-bg mb-30">
                            <div class="widget-title">
                                <h3>categories</h3>
                            </div>
                            <div class="widget-categories">
                                <!--Accordion item 1-->
                                <h6>Face treatment</h6>
                                <ul>
                                    <li><a href="#">Face wash</a></li>
                                    <li><a href="#">Cream</a></li>
                                </ul>
                                <!--Accordion item 1 end-->

                                <!--Accordion item 2 start-->
                                <h6>Nail treatment</h6>
                                <ul>
                                    <li><a href="#">Nail tratment 1</a></li>
                                    <li><a href="#">Nail tratment 2</a></li>
                                </ul>
                                <!--Accordion item 2 end-->

                                <!--Accordion item 3 start-->
                                <h6>Hair treatment</h6>
                                <ul>
                                    <li><a href="#">Hair cut</a></li>
                                    <li><a href="#">Hair shampo</a></li>
                                </ul>
                                <!--Accordion item 3 end-->

                                <!--Accordion item 4 start-->
                                <h6 class="open">Body treatment</h6>
                                <ul>
                                    <li><a href="#">Oil message</a></li>
                                    <li><a href="#">Stone message</a></li>
                                </ul>
                                <!--Accordion item 4 end-->

                            </div>
                        </aside>
                        <aside class="widget filter grey-bg mb-30">
                            <div class="widget-title">
                                <h3>filter by price</h3>
                            </div>
                            <div class="widget-filter">
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="slider-values">
                                            <label>Range</label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget video mb-30">
                            <div class="widget-video">
                                <img src="{{asset('assets')}}/images/blog/widget-video.jpg" alt="">
                                <div class="widget-video-icon">
                                    <a href="https://www.youtube.com/watch?v=E6ZgAyx8kWU">
                                        <i class="zmdi zmdi-play"></i>
                                    </a>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget flicker grey-bg mb-30 hidden-sm fix">
                            <div class="widget-title">
                                <h3>Flicker Widget</h3>
                            </div>
                            <div class="widget-filcker fix">
                                <ul>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="widget offer mb-30 hidden-sm">
                            <div class="widget-offer-discount">
                                <div class="widget-img">
                                    <img src="{{asset('assets')}}/images/blog/wiget-discount.jpg" alt="">
                                    <div class="widget-discount-text">
                                        <h1>50%</h1>
                                        <h2>off</h2>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget tag mb-30 grey-bg">
                            <div class="widget-title">
                                <h3>popular tag</h3>
                            </div>
                            <div class="widget-tag">
                                <ul>
                                    <li><a href="#">Message</a></li>
                                    <li><a href="#">Life</a></li>
                                    <li><a href="#">spa</a></li>
                                    <li><a href="#">skin care</a></li>
                                    <li><a href="#">nail care</a></li>
                                    <li><a href="#">Body care</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="widget newsletter grey-bg">
                            <div class="widget-title">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="widget-newsletter">
                                <p>Lorem ipsum dolor sit amet, love dost   consectetur adipisicing elit, </p>
                                <form action="#">
                                    <input type="text" placeholder="Enter Your email">
                                    <button type="submit">Send</button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shop-item-filter">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="shop-tab clearfix">
                                        <!-- Nav tabs -->
                                        <ul role="tablist">
                                            <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="#grid"><i class="zmdi zmdi-apps"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list" class="list-view" href="#list"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-3  hidden-xs">
                                    <div class="show text-center">
                                        <p>show: 16 items</p>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-6  col-xs-12">
                                    <div class="filter-by">
                                        <div class="filter-title">
                                            <p>Sort by: </p>
                                        </div>
                                        <div class="filter-form">
                                            <form action="#">
                                                <select>
                                                    <option selected="selected" value="">Newest items</option>
                                                    <option value="trending">Trending items</option>
                                                    <option value="sales">Best sellers</option>
                                                    <option value="rating">Best rated</option>
                                                    <option value="price-asc">Price: low to high</option>
                                                    <option value="price-desc">Price: high to low</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/1.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Face Treatment</a></h3>
                                            <p>$100</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/2.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Body message</a></h3>
                                            <p>$300</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/3.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Face Treatment</a></h3>
                                            <p>$100</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/4.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Body message</a></h3>
                                            <p>$300</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/5.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Face Treatment</a></h3>
                                            <p>$100</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/7.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Body message</a></h3>
                                            <p>$300</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/8.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Face Treatment</a></h3>
                                            <p>$100</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/9.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Body message</a></h3>
                                            <p>$300</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 hidden-sm col-xs-12">
                                    <div class="single-feature text-center">
                                        <div class="feature-img">
                                            <img src="{{asset('assets')}}/images/feature/10.png" alt="">
                                        </div>
                                        <div class="feature-desc">
                                            <h3><a href="#">Nail Treatment</a></h3>
                                            <p>$200</p>
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--pagintaion-->
                            <div class="pagination-box text-center">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pagination-inner">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-caret-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li class="active">3</li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--pagintaion end-->

                        </div>
                        <div id="list" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="shop-product-list col-md-12">
                                    <div class="single-product">
                                        <div class="single-product-img">
                                            <a href="#"><img src="{{asset('assets')}}/images/feature/6.png" alt=""></a>
                                        </div>
                                        <div class="single-product-info">
                                            <h3><a href="#">Arctic Spa Body Lotion</a></h3>
                                            <h4>$ 125.00</h4>
                                            <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                            <div class="singe-product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <ul class="product-action">
                                                <li><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                <li><a href="#" class="add-to-cart">Book now</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="single-product">
                                        <div class="single-product-img">
                                            <a href="#"><img src="{{asset('assets')}}/images/feature/7.png" alt=""></a>
                                        </div>
                                        <div class="single-product-info">
                                            <h3><a href="#">Arctic Spa Body Lotion</a></h3>
                                            <h4>$ 125.00</h4>
                                            <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                            <div class="singe-product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <ul class="product-action">
                                                <li><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                <li><a href="#" class="add-to-cart">Book now</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="single-product">
                                        <div class="single-product-img">
                                            <a href="#"><img src="{{asset('assets')}}/images/feature/8.png" alt=""></a>
                                        </div>
                                        <div class="single-product-info">
                                            <h3><a href="#">Arctic Spa Body Lotion</a></h3>
                                            <h4>$ 125.00</h4>
                                            <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                            <div class="singe-product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <ul class="product-action">
                                                <li><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                <li><a href="#" class="add-to-cart">Book now</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="single-product">
                                        <div class="single-product-img">
                                            <a href="#"><img src="{{asset('assets')}}/images/feature/9.png" alt=""></a>
                                        </div>
                                        <div class="single-product-info">
                                            <h3><a href="#">Arctic Spa Body Lotion</a></h3>
                                            <h4>$ 125.00</h4>
                                            <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                            <div class="singe-product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <ul class="product-action">
                                                <li><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                <li><a href="#" class="add-to-cart">Book now</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="single-product">
                                        <div class="single-product-img">
                                            <a href="#"><img src="{{asset('assets')}}/images/feature/10.png" alt=""></a>
                                        </div>
                                        <div class="single-product-info">
                                            <h3><a href="#">Arctic Spa Body Lotion</a></h3>
                                            <h4>$ 125.00</h4>
                                            <h5>AVAILABILITY: <span>IN STOCK</span></h5>
                                            <div class="singe-product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <ul class="product-action">
                                                <li><a href="#"><i class="zmdi zmdi-refresh"></i></a></li>
                                                <li><a href="#" class="add-to-cart">Book now</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--pagintaion-->
                            <div class="pagination-box text-center">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pagination-inner">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-caret-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li class="active">3</li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--pagintaion end-->
                        </div>
                    </div>
                </div>
                <!--shop sidebar end-->
            </div>
        </div>
    </div>
    <!--shop page end-->
@endsection
