@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('content')

    <!--Breadcrumbs start-->
    <div class="breadcrumbs text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="breadcrumbs-title">
                        <h2>404</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-menu">
            <ul>
                <li><a href="/">hOME <span>//</span></a></li>
                <li>404</li>
            </ul>
        </div>
    </div>
    <!--Breadcrumbs end-->

    <div class="error-area text-center ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-content ">
                        <h2>404</h2>
                        <h3>Page not found!</h3>
                        <h4>Oops! Looks like something going rong</h4>
                        <p>We can’t seem to find the page you’re looking for <br>
                            make sure that you have typed the currect URL</p>
                        <a class="go-home" href="/">Go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
