@php($setting = \App\Http\Controllers\HomeController::getsetting())
@extends('layouts.home')

@section('title', $setting->title. ' | FAQ' )
@section('description', $setting->description)
@section('keywords',$setting->keywords)
@section('breadcrumbs', 'FAQ')

@section('content')
    <!--Breadcrumbs start-->
    @include('home._breadcrumbs')
    <!--Breadcrumbs end-->
    <!--our gallery section start-->
    <div class="our-blog blog-pages ptb-100 fix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row blog-list">
                @foreach($datalist as $data)
                    <div class="single-blog">
                        <div class="single-blog-top fix" style="box-shadow: 0 1px 3px rgb(0 0 0 / 20%); padding: 18px 30px;">

                            <h6>{{ $data->question }}</h6>
                            <p>{!! $data->answer !!}</p>
                        </div>
                        <div class="blog-bottom-action">
                            <div class="blog-publish">
                                <p><i class="zmdi zmdi-time"></i>{{ $data->created_at }} </p>
                            </div>
                            <div class="blog-action-box">
                                <ul>
                                    <!--<a class="read-more" href="#">Read more <i class="zmdi zmdi-long-arrow-right"></i></a>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--pagintaion-->
        <div class="pagination-box text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination-inner">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-caret-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pagintaion end-->
    </div>
    <!--our gallery section end-->
@endsection
