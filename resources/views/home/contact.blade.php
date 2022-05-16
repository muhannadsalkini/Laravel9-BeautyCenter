@extends('layouts.home')

@section('title', $setting->title. ' | Contact Us' )
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('breadcrumbs', 'Contact Us')

@section('content')
    @include('home._breadcrumbs')
    {!! $setting->contact !!}
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
                        <form action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <div class="mb-1">
                                <input name="name" type="text" class="@error('name') is-invalid @enderror" placeholder="Name & Surname">
                                @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1" style="padding-top: 1rem">
                                <input name="phone" type="text" class="@error('phone') is-invalid @enderror" placeholder="Phone Number">
                                @error('phone')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1" style="padding-top: 1rem">
                                <input name="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Email">
                                @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1" style="padding-top: 1rem">
                                <select name="subject" class="@error('subject') is-invalid @enderror">
                                    <option>Subject</option>
                                    <option value="Service">Service</option>
                                    <option value="Product">Product</option>
                                    <option value="Product">Payment</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('subject')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1" style="padding-top: 1rem">
                                <textarea name="message" type="text" class="@error('message') is-invalid @enderror" placeholder="Message" rows="4"></textarea>
                                @error('message')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <button type="submit" style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    box-sizing: border-box;
    font: inherit;
    margin: 0;
    overflow: visible;
    -webkit-appearance: button;
    cursor: pointer;
    line-height: inherit;
    outline: medium none;
    background: #6bc513 none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    font-family: Lato ,sans-serif;
                            font-size: 16px;
                            font-weight: 500;
                            height: 45px;
                            margin-top: 40px;
                            text-transform: uppercase;
                            transition-duration: 0.3s;
                            width: 100%;">Add Category</button>
                            @include('home.flash-message')
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

@section('footer_js')
<!-- Map js code here -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="{{asset('assets')}}/js/map.js"></script>
@endsection
