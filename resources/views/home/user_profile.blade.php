@php($setting = App\Http\Controllers\HomeController::getsetting())
@extends('layouts.home')

@section('title', $setting->title. ' | User Profile')
@section('breadcrumbs', 'User Profile')
@section('Profile_status', 'color: #6bc513')

@section('content')
    @include('home._breadcrumbs')

    <div class="shop-page ptb-100">
        <div class="container" >
            <div class="row">
                @include('home.user_sidebar')

                <div class="col-md-10" >
                    @include('profile.show')
                </div>
                <!--shop sidebar end-->
            </div>
        </div>
    </div>



@endsection
