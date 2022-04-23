<!--slider section start-->
<div class="slider-container">
    <div class="home-slider-list">
        @foreach($slider as $rs)
        <div class="single-slider">
            <div class="slider-img">
                <img  style="width: 50%; display: block; margin-left: auto; margin-right: auto;" src="{{ Storage::url($rs->image)}}" alt="">
            </div>
            <div class="slider-text-tablecell">
                <div class="middle-text">
                    <div class="title-1 wow rotateInDownRight" data-wow-duration="0.9s" data-wow-delay="0s">
                        <h1>{{$rs->title}}</h1>
                    </div>
                    <div class="desc wow slideInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                        <p>{{$rs->description}}</p>
                    </div>
                    <div class="explore-now wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                        <a href="{{route('service',['id'=>$rs->id])}}">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!--slider section end-->
