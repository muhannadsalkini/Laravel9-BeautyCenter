@extends('layouts.home')

@section('title', $setting->title. ' | Home')
@section('description')
    {{ $setting->description }}
@endsection
@section('keywords',$setting->keywords)


@section('content')

    <!--slider section start-->
    @include('home._slider')
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
                        <a href="{{route('about-us')}}">Read more</a>
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
                        <div class="fun-icon" >
                            <a href="#" style="padding-top: 17px;"><i class="fa fa-trophy" aria-hidden="true"></i></a>
                        </div>
                        <p class="counter">200</p>
                        <h5>win awards</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="single-fun-fact middle-margin-left">
                        <div class="fun-icon">
                            <a href="#"style="padding-top: 17px;"><i class="zmdi zmdi-favorite"></i></a>
                        </div>
                        <p class="counter">150</p>
                        <h5>Happy client</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="single-fun-fact middle-margin">
                        <div class="fun-icon">
                            <a href="#"style="padding-top: 17px;"><i class="zmdi zmdi-male-female"></i></a>
                        </div>
                        <p class="counter">100</p>
                        <h5>trainer</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-fun-fact float-right">
                        <div class="fun-icon">
                            <a href="#"style="padding-top: 17px;"><i class="fa fa-pagelines" aria-hidden="true"></i></a>
                        </div>
                        <p class="counter">300</p>
                        <h5>Treatment</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fun fact area end-->

    <!--
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
    -->

    <!--Offer section start-->
    @guest
    <div class="special-offer">
        <div class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title bg_grey text-center">
                            <h2>Get our special service</h2>
                            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="offer-apoinment text-center">
                            <a style="font-size: medium" href="{{ route('login') }}" > Login</a><a style="font-size: medium; margin-left: 10px;" href="{{ route('register') }}" >Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endguest
    <!--Offer section end-->

    <!--Our feature section-->
    <div class="our-feature ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Deals Of The Day</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($daily as $rs)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-feature text-center">
                        <div class="feature-img">
                            <img src="{{ Storage::url($rs->image)}}" alt="">
                        </div>
                        <div class="feature-desc">
                            <h3><a href="{{route('service',['id'=>$rs->id])}}">{{ $rs->title }}</a></h3>
                            <p>${{$rs->price}}</p>
                            <a href="{{route('service',['id'=>$rs->id])}}">Show Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
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


    <!--Testimonial start-->
    <div class="testimonial">
        <div class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="testimonail-list owl_pagination">
                            @foreach($faqlist as $faq)
                            <div class="single-testimonial">
                                <h6>{{ $faq->question }}</h6>
                                <p>{!! $faq->answer !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Testimonial end-->

    <!--our blog start-->
    <div class="our-blog pt-100" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Our Blog</h2>
                    </div>
                </div>
                <div class="error-area text-center ptb-100" style="width: 50%">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="error-content ">
                                    <h2 style="font-size: 400%;">Coming Soon!</h2>
                                    <h4>We're coming soon</h4>
                                    <p>We are working very hard on this, <br>
                                        It will bring a lot of new features.<br>
                                        Stay tuned!</p>
                                </div>
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

