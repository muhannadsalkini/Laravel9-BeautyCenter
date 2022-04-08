@extends('layouts.home')

@section('title', 'About Us')

@section('keywords','Bakim, Guzellik')


@section('content')
    <!--Breadcrumbs start-->
    <div class="breadcrumbs text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-title">
                        <h2>@yield('title')</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-menu">
            <ul>
                <li><a href="/">HOME <span>//</span></a></li>
                <li>@yield('title')</li>
            </ul>
        </div>
    </div>
    <!--Breadcrumbs end-->
    <!--About us start-->
    <div class="about-us ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-desc">
                        <h2>About Our Beauty House</h2>
                        <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor  no amet dolor. Proin pretium purus a lorem ornare</p>
                        <p class="text-2">sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien  Lorem  amet, consectetur adipiscing elit. Donec aliquet dolor libero, </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-us-img">
                        <img src="{{asset('assets')}}/images/about/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About us end-->
    <!--choose us start-->
    <div class="choose-us ptb-100 grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title bg_grey text-center">
                        <h2>why choose us?</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="choose-us-img">
                        <img src="{{asset('assets')}}/images/about/choose.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="choose-us-list">
                        <div class="single-choose">
                            <div class="choose-head">
                                <div class="choose-icon">
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                                <div class="choose-title">
                                    <h5>Beautiful & sexy Life</h5>
                                </div>
                            </div>
                            <div class="choose-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis . </p>
                            </div>
                        </div>
                        <div class="single-choose">
                            <div class="choose-head">
                                <div class="choose-icon">
                                    <i class="fa fa-pagelines" aria-hidden="true"></i>
                                </div>
                                <div class="choose-title">
                                    <h5>natural atmosphere</h5>
                                </div>
                            </div>
                            <div class="choose-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis . </p>
                            </div>
                        </div>
                        <div class="single-choose">
                            <div class="choose-head">
                                <div class="choose-icon">
                                    <i class="zmdi zmdi-mood"></i>
                                </div>
                                <div class="choose-title">
                                    <h5>xoss environment</h5>
                                </div>
                            </div>
                            <div class="choose-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis . </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--choose us end-->
    <!--our team start-->
    <div class="our-team ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Our lovely team</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/images/about/team/1.png" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="team-desc">
                                <div class="team-desc-tablcell">
                                    <h5>Yuksel Celik</h5>
                                    <h6>SIO & Cofounder</h6>
                                    <p> 🤵‍ SIO & Cofounder <br>of Beauty House </p>
                                    <div class="member-follow">
                                        <p>Follow on:</p>
                                        <div class="member-follow-social">
                                            <a href="https://www.facebook.com/celik.yuksel" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="https://www.youtube.com/channel/UCtdM2qlDnpNr9bTKjVGEWkg" target="_blank"><i class="zmdi zmdi-youtube"></i></a>
                                            <a href="#" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/images/about/team/2.png" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="team-desc">
                                <div class="team-desc-tablcell">
                                    <h5>Muhannad Salkini</h5>
                                    <h6>Developer</h6>
                                    <p>  👌🏻 Dream, It's possible.. <br>👨‍💻 KBÜ/ Computer engineering </p>
                                    <div class="member-follow">
                                        <p>Follow on:</p>
                                        <div class="member-follow-social">
                                            <a href="https://www.facebook.com/muhannadsalkini02" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="https://twitter.com/muhannadsalkini" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="https://www.youtube.com/channel/UCfrWNQfgw6mKTULUl0ok-8A" target="_blank"><i class="zmdi zmdi-youtube"></i></a>
                                            <a href="https://www.instagram.com/muhannad.salkini/" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/images/about/team/3.png" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="team-desc">
                                <div class="team-desc-tablcell">
                                    <h5>jesika noor</h5>
                                    <h6>Specialist</h6>
                                    <p> Lorem ipsum dolor sit amet, cons adipisicing elit, sed do eiusmo te incididunt ut labore. </p>
                                    <div class="member-follow">
                                        <p>Follow on:</p>
                                        <div class="member-follow-social">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm col-xs-12">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/images/about/team/4.png" alt="">
                        </div>
                        <div class="team-hover">
                            <div class="team-desc">
                                <div class="team-desc-tablcell">
                                    <h5>jesika noor</h5>
                                    <h6>Specialist</h6>
                                    <p> Lorem ipsum dolor sit amet, cons adipisicing elit, sed do eiusmo te incididunt ut labore. </p>
                                    <div class="member-follow">
                                        <p>Follow on:</p>
                                        <div class="member-follow-social">
                                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-dribbble"></i></a>
                                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
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
    <!--our team end-->
@endsection
