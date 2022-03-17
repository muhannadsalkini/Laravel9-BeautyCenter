@extends('layouts.home')

@section('title', 'Home')

@section('keywords','Bakim, Guzellik')


@section('content')

    <!--slider section start-->
    <div class="slider-container">
        <!-- Slider Image -->
        <div id="mainSlider" class="nivoSlider slider-image">
            <img src="{{asset('assets')}}/images/slider/1.jpg" alt="" title="#htmlcaption1"/>
            <img src="{{asset('assets')}}/images/slider/2.jpg" alt="" title="#htmlcaption2"/>
            <img src="{{asset('assets')}}/images/slider/3.jpg" alt="" title="#htmlcaption3"/>
        </div>
        <!-- Slider Caption 1 -->
        <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
            <div class="slider-text-table">
                <div class="slider-text-tablecell">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slide1-text">
                                    <div class="middle-text">
                                        <div class="title-1 wow rotateInDownRight" data-wow-duration="0.9s" data-wow-delay="0s">
                                            <h1>welcome our beauty house</h1>
                                        </div>
                                        <div class="desc wow slideInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel volutpat felis, eu condimentum<br> massa.lorem ipsum dolor sit amet,consectetur adipicing elit.</p>
                                        </div>
                                        <div class="explore-now wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                            <a href="#">Explore now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption slider-caption-1">
            <div class="slider-text-table">
                <div class="slider-text-tablecell">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slide1-text">
                                    <div class="middle-text">
                                        <div class="title-1 wow rotateInDownRight" data-wow-duration="0.9s" data-wow-delay="0s">
                                            <h1>welcome our beauty house</h1>
                                        </div>
                                        <div class="desc wow slideInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel volutpat felis, eu condimentum<br> massa.lorem ipsum dolor sit amet,consectetur adipicing elit.</p>
                                        </div>
                                        <div class="explore-now wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                            <a href="#">Explore now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="htmlcaption3" class="nivo-html-caption slider-caption-1">
            <div class="slider-text-table">
                <div class="slider-text-tablecell">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slide1-text">
                                    <div class="middle-text">
                                        <div class="title-1 wow rotateInDownRight" data-wow-duration="0.9s" data-wow-delay="0s">
                                            <h1>welcome our beauty house</h1>
                                        </div>
                                        <div class="desc wow slideInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel volutpat felis, eu condimentum<br> massa.lorem ipsum dolor sit amet,consectetur adipicing elit.</p>
                                        </div>
                                        <div class="explore-now wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                            <a href="#">Explore now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider section end-->

    <!--welcome section start-->
    <div class="welcome-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-img">
                        <img src="{{asset('assets')}}/images/about/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-desc">
                        <h6>Welcome to beauty house</h6>
                        <h2>About Our Beauty House</h2>
                        <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor  no amet dolor. Proin pretium purus a lorem ornare</p>
                        <p class="text-2">sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien  Lorem  amet, consectetur adipiscing elit. Donec aliquet dolor libero, </p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--welcome section end-->

    <!--fun fact area-->
    <div class="fun-fact text-center ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-fun-fact float-left">
                        <div class="fun-icon">
                            <a href="#"><i class="fa fa-trophy" aria-hidden="true"></i></a>
                        </div>
                        <p class="counter">200</p>
                        <h5>win awards</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="single-fun-fact middle-margin-left">
                        <div class="fun-icon">
                            <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                        </div>
                        <p class="counter">150</p>
                        <h5>Happy client</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="single-fun-fact middle-margin">
                        <div class="fun-icon">
                            <a href="#"><i class="zmdi zmdi-male-female"></i></a>
                        </div>
                        <p class="counter">100</p>
                        <h5>trainer</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-fun-fact float-right">
                        <div class="fun-icon">
                            <a href="#"><i class="fa fa-pagelines" aria-hidden="true"></i></a>
                        </div>
                        <p class="counter">300</p>
                        <h5>Treatment</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fun fact area end-->

    <!--Gallery section start-->
    <div class="galllery ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our latest gallery</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-tab-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-tab-menu text-center">
                            <ul role="tablist">
                                <li role="presentation"><a href="#all" aria-controls="all" data-toggle="tab">All</a></li>
                                <li role="presentation"><a aria-controls="massage" href="#massage" data-toggle="tab">Lunch</a></li>
                                <li role="presentation"><a href="#skin" aria-controls="skin" data-toggle="tab">skin care</a></li>
                                <li role="presentation"  class="active"><a href="#hair" aria-controls="hair" data-toggle="tab">hair cut</a></li>
                                <li role="presentation"><a href="#nail" aria-controls="nail" data-toggle="tab">nail care  </a></li>
                                <li role="presentation"><a href="#beauty" aria-controls="beauty" data-toggle="tab"> beauty spa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-tab-content">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="all">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/1.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/2.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="massage">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/1.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/2.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <span>  <a href="#"><i class="zmdi zmdi-zoom-in"></i></a></span>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="skin">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/1.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/2.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="hair">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/1.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/2.jpg" alt="">
                                    <span><a href="{{asset('assets')}}/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a></span>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="nail">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/1.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/2.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="beauty">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/1.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/2.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/3.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/4.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('assets')}}/images/gallery/5.jpg" alt="">
                                    <a href="{{asset('assets')}}/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Gallery section end-->

    <!--Offer section start-->
    <div class="special-offer">
        <div class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title bg_grey text-center">
                            <h2>you get our special offer</h2>
                            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="offer-apoinment text-center">
                            <a href="#">Make An Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offer section end-->

    <!--Our feature section-->
    <div class="our-feature ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our Features</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
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
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-feature text-center">
                        <div class="feature-img">
                            <img src="{{asset('assets')}}/images/feature/3.png" alt="">
                        </div>
                        <div class="feature-desc">
                            <h3><a href="#">Nail Treatment</a></h3>
                            <p>$200</p>
                            <a href="#">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our feature section end-->

    <!--Video section start-->
    <div class="video-section text-center">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-section-inner">
                        <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=UnNHWRenYTA&list=PLIUezwWmVtFX3aoVpOh5ZVn_EtKuX8fXw"><i class="zmdi zmdi-play"></i></a>
                        </div>
                        <h2>how it works</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Video section end-->

    <!--pricing palaning start-->
    <div class="pricing-plan ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our pricing plan</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- basic pack -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-title">
                            <h3>basic pack</h3>
                        </div>
                        <div class="pricing-desc">
                            <h2><span class="currency">$</span>49.99<span class="date">/month</span></h2>
                            <ul>
                                <li>Nail cutting & styling</li>
                                <li>Hot Ayurvedic spa</li>
                                <li>Hot oil massage</li>
                                <li>Body wraps</li>
                            </ul>
                            <div class="book-now">
                                <a href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- silver pack -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-title">
                            <h3>silver pack</h3>
                        </div>
                        <div class="pricing-desc">
                            <h2><span class="currency">$</span>77.99<span class="date">/month</span></h2>
                            <ul>
                                <li>Nail cutting & styling</li>
                                <li>Hot Ayurvedic spa</li>
                                <li>Hot oil massage</li>
                                <li>Body wraps</li>
                            </ul>
                            <div class="book-now">
                                <a href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- premium pack -->
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-title">
                            <h3>premium pack</h3>
                        </div>
                        <div class="pricing-desc">
                            <h2><span class="currency">$</span>99.99<span class="date">/month</span></h2>
                            <ul>
                                <li>Nail cutting & styling</li>
                                <li>Hot Ayurvedic spa</li>
                                <li>Hot oil massage</li>
                                <li>Body wraps</li>
                            </ul>
                            <div class="book-now">
                                <a href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--pricing palaning end-->

    <!--Testimonial start-->
    <div class="testimonial">
        <div class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="testimonail-list owl_pagination">
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Testimonial end-->

    <!--our blog start-->
    <div class="our-blog pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our Blog</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-top fix">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="{{asset('assets')}}/images/blog/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="#">Lorem Ipsum is simply dummy</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur eiusmodm adipisicing elit, sed do eiusmod tempor incididuntm ut labore et dolore magna aliqua. </p>
                                <a class="read-more" href="#">Read more <i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-bottom-action">
                            <div class="blog-publish">
                                <p><i class="zmdi zmdi-time"></i>Jun 25, 2017 </p>
                            </div>
                            <div class="blog-action-box">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>(550)</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comments"></i>(200)</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-share"></i>(100)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-top fix">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="{{asset('assets')}}/images/blog/2.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="#">Lorem Ipsum is simply dummy</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur eiusmodm adipisicing elit, sed do eiusmod tempor incididuntm ut labore et dolore magna aliqua. </p>
                                <a class="read-more" href="#">Read more <i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-bottom-action">
                            <div class="blog-publish">
                                <p><i class="zmdi zmdi-time"></i>Jun 25, 2017 </p>
                            </div>
                            <div class="blog-action-box">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>(550)</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comments"></i>(200)</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-share"></i>(100)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--our blog end-->

    <!--Our partener start--><!--
        <div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partner-list">
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/1.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/2.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/3.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/4.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/2.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/1.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/2.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/3.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/4.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="{{asset('assets')}}/images/logo/2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!--Our partener end-->

@endsection

