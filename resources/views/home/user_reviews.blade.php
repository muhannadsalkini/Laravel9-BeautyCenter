@php($setting = App\Http\Controllers\HomeController::getsetting())
@extends('layouts.home')

@section('title', $setting->title. ' | User Profile')
@section('breadcrumbs', 'User Reviews')
@section('Reviews_status', 'color: #6bc513')

@section('content')
    @include('home._breadcrumbs')

    <div class="shop-page ptb-100">
        <div class="container" >
            <div class="row">
                @include('home.user_sidebar')

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
                                    <td>
                                        @if ($rs->status == 'True')
                                            <i style="color: #6bc513">Published</i>
                                        @elseif($rs->status == 'False')
                                            <i style="color: #FF9F43">Rejected</i>
                                        @else
                                            <i style="color: #00CFE8">Under Review</i>
                                        @endif
                                    </td>
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
