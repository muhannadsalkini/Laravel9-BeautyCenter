@extends('layouts.contact')

@section('title', 'Contact Us')

@section('keywords','Bakim, Guzellik')


@section('content')
    <!--Breadcrumbs start-->
    <div class="breadcrumbs text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-title">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-menu">
            <ul>
                <li><a href="/">hOME <span>//</span></a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
    <!--Breadcrumbs end-->
    <div id="contact-map" class="map-area">
        <div id="googleMap" style="width:100%;height:500px;"></div>
    </div>
    <!--Contact start-->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="contact-list fix">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-contact">
                            <div class="contact-icon">
                                <a href="#"><i class="zmdi zmdi-phone"></i></a>
                            </div>
                            <div class="contact-desc">
                                <p>+012 345 678 102<br>+012 345 678 102</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-contact text-center">
                            <div class="contact-icon">
                                <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                            </div>
                            <div class="contact-desc">
                                <p>urname@email.com<br>urwebsitenaem.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-contact float-right">
                            <div class="contact-icon">
                                <a href="#"><i class="zmdi zmdi-pin"></i></a>
                            </div>
                            <div class="contact-desc">
                                <p> ur address goes here,<br>street,Crossroad123.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact end-->
    <!--Contact form start-->
    <div class="contact-form ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Get in touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <p class="form-messege"></p>
                        <form id="contact-form" action="http://preview.hasthemes.com/beautyhouse-preivew/beautyhouse/mail.php" method="post">
                            <input name="name" type="text" placeholder="Name">
                            <input name="email" type="text" placeholder="Email">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form-img text-center">
                        <img src="{{asset('assets')}}/images/common/contact.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact form end-->
@endsection
