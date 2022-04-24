@php($setting = App\Http\Controllers\HomeController::getsetting())
@extends('layouts.home')

@section('title', $setting->title. ' | User Profile')
@section('breadcrumbs', 'User Reviews')

@section('content')
    @include('home._breadcrumbs')

    <div class="shop-page ptb-100">
        <div class="container" >
            <div class="row">
                <!--shop sidebar start-->
                <div class="col-md-2">
                    <div class="shop sidebar">
                        <aside class="widget categories grey-bg mb-30">
                            <div class="widget-title">
                                <h3>User Panel</h3>
                            </div>
                            <div class="widget-categories">
                                <!--Accordion item 1-->
                                <h6 class="open" data-collapse-summary="" aria-expanded="true"><a href="#"><a href="#">User Panel</a></a></h6>
                                <ul aria-hidden="false" style="display: block;">
                                    <li><a href="{{ route('myprofile') }}">Profile</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a style="color: #6bc513" href="{{ route('myreviews') }}">Reviews</a></li>
                                    <li><a href="#">Shopcart</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                                <!--Accordion item 1 end-->
                                <!--Accordion item 2 start
                                <h6 data-collapse-summary="" aria-expanded="false" class=""><a href="#"><a href="#">Nail treatment</a></a></h6>
                                <ul aria-hidden="true" style="display: none;">
                                    <li><a href="#">Nail tratment 1</a></li>
                                    <li><a href="#">Nail tratment 2</a></li>
                                </ul>
                                Accordion item 2 end-->
                            </div>
                        </aside>
                    </div>
                </div>

                <div class="col-md-10" >
                    <div class="table-responsive">
                        @include('home.flash-message')
                        <table class="table table-bordered  table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Service</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <th>{{ $rs->id }}</th>
                                    <td> @if($rs->service_id) <a href="{{ route('service', ['id'=>$rs->service_id]) }}" target="_blank">{{ $rs->service->title }}</a> @else NO SERVICE! @endif</td>
                                    <td>{{ $rs->subject }}</td>
                                    <td>{{ $rs->review }}</td>
                                    <td>{{ $rs->rate }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>{{ $rs->created_at }}</td>
                                    <td><a href="{{route('destroyreview', ['id'=>$rs->id])}}" onclick="return confirm('Delete! are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
