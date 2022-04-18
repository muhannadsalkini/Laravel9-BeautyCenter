@extends('layouts.home')

@section('title', 'About Us | ' .$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)


@section('content')
    @include('home._breadcrumbs')
    {!! $setting->aboutus !!}
@endsection
