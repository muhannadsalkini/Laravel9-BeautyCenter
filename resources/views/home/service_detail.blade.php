@extends('layouts.home')

@section('title', $setting->title. ' | Service Detail')
@section('description', $setting->description)
@section('keywords',$setting->keywords)


@section('content')

<div class="wrapper white-bg">
    <!-- product details start -->
    <div class="product-details-area  ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="zoomWrapper clearfix">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <img id="zoom1" src="{{ Storage::url($data->image)}}" data-zoom-image="{{ Storage::url($data->image)}}" alt="big-1">
                        </div>
                        <div class="product-thumb">
                            <ul class="details-slider" id="gallery_01">
                                @foreach($images as $image)
                                <li>
                                    <a class="elevatezoom-gallery" href="#" data-image="{{ Storage::url($image->image)}}" data-zoom-image="{{ Storage::url($image->image)}}"><img src="{{ Storage::url($image->image)}}" alt=""></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="product-detail single-product-info">
                        <h3>{{$data->title}}</h3>
                        @php
                            $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                            $countreviews = \App\Http\Controllers\HomeController::countreviews($data->id);
                        @endphp
                        <div class="rating-review">
                            <div class="single-rating-review">
                                <i class=" @if($avgrev<1) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                <i class=" @if($avgrev<2) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                <i class=" @if($avgrev<3) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                <i class=" @if($avgrev<4) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                <i class=" @if($avgrev<5) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                <p>({{ $countreviews }})</p>
                            </div>
                        </div>
                        <h4>$ {{$data->price}}</h4>
                        <h5 class="overview">OVERVIEW:</h5>
                        <p>{{$data->description}}</p>
                        <form action="{{route('user_appointment_add')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$data->price}}" name="price">
                            <input type="hidden" value="{{$data->id}}" name="service_id">
                            <ul class="product-action">
                                <input type="submit" value="Make Appointment">
                            </ul>
                        </form>
                        <div class="share mt-30">
                            <p>share:</p>
                            <ul>
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-facebook pt-10"></i></a></li>
                                <li class="twitter"><a href="#"><i class="zmdi zmdi-twitter pt-10"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="zmdi zmdi-pinterest pt-10"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="zmdi zmdi-google-plus pt-10"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="product-description-tab mt-60">
                            <div class="description-tab-menu">
                                <ul class="clearfix" role="tablist">
                                    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                    <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">information</a></li>
                                    <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews({{ $countreviews }})</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    {!! $data->detail !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="specification">
                                    <p>Veniam quasi voluptatem facere nesciunt laborum, quibusdam amet totam fugit, blanditiis doloribus alias eveniet dolore pariatur dolores aliquid!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex consectetur minima quod officiis magni, aspernatur. Ea consectetur ab in, consequatur alias, quo sit. Optio vitae cupiditate, consectetur veritatis cumque odio magnam voluptates voluptas eligendi, minima tenetur voluptatum dolor autem, doloribus expedita obcaecati.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="review">
                                    <div class="review-wrapper fix">
                                        @foreach($reviews as $rs)
                                            @if($rs->status == 'True')
                                                <div class="sin-review">
                                                    <div class="review-details fix">
                                                        <div class="review-author float-left">
                                                            <h3>{{substr($rs->user->name,0,4) }}****</h3>
                                                            <div class="review-star float-left">
                                                                <i class=" @if($rs->rate<1) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                                                <i class=" @if($rs->rate<2) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                                                <i class=" @if($rs->rate<3) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                                                <i class=" @if($rs->rate<4) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                                                <i class=" @if($rs->rate<5) zmdi zmdi-star-outline @else zmdi zmdi-star @endif"></i>
                                                            </div>
                                                            <span>{{ $rs->created_at }}</span>
                                                        </div>
                                                        <div>
                                                            <h6><strong>{{ $rs->subject }}</strong></h6>
                                                            <p>{{ $rs->review }}</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="review-form-wrapper fix">
                                        <h3>write a review</h3>
                                        @livewire('review', ['id'=>$data->id])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Related products start-->
        <div class="related-products mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h2>Related product</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="related-product-list">
                        @foreach($services as $service)
                        <div class="col-md-3">
                            <div class="single-feature text-center">
                                <div class="feature-img">
                                    <img src="{{ Storage::url($service->image)}}" alt="">
                                </div>
                                <div class="feature-desc">
                                    <h3><a href="#">{{$service->title}}</a></h3>
                                    <p>${{$service->price}}</p>
                                    <a href="{{route('service',['id'=>$service->id])}}">Show Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--Related products end-->
    </div>
    <!-- product details end -->
</div>


    <script>
        date = new Date();
        year = date.getFullYear();
        month = date.getMonth() + 1;
        day = date.getDate();
        document.getElementById("current_date").innerHTML = year + "-" + month + "-" + day;
    </script>
@endsection

