@extends('layouts.home')

@section('title', $setting->title. ' | About Us' )
@section('description', $setting->description)
@section('keywords',$setting->keywords)
@section('breadcrumbs', 'About Us')


@section('content')
    @include('home._breadcrumbs')
    {!! $setting->aboutus !!}
@endsection
