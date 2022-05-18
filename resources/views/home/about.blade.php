@extends('layouts.home')

@section('title', $setting->title. ' | About Us' )
@section('description', $setting->description)
@section('keywords',$setting->keywords)
@section('breadcrumbs', 'About Us')


@section('content')
    @include('home._breadcrumbs')
    <div class="about-us ptb-100">
        <div class="container">
            <div class="row">
                {!! $setting->aboutus !!}
            </div>
        </div>
    </div>
@endsection
