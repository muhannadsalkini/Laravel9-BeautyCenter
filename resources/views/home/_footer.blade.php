@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
    $datalist = \App\Models\Category::limit(6)->get();
@endphp

<!--footer start-->
<div class="footer">
    <div class="footer-top ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-footer contact">
                        <div class="footer-title">
                            <h3>Contact us</h3>
                        </div>
                        <div class="contact-action mb-15">
                            <span><i class="zmdi zmdi-pin"></i></span>
                            @if($setting->address)<p style="padding-top: 15px"> {{ $setting->address }} </p>@endif
                        </div>
                        <div class="contact-action mb-15">
                            <span><i class="zmdi zmdi-email"></i></span>
                            @if($setting->email)<p style="padding-top: 15px"> {{ $setting->email }} </p>@endif
                        </div>
                        <div class="contact-action">
                            <span><i class="zmdi zmdi-phone"></i></span>
                            @if($setting->phone)<p style="padding-top: 15px"> {{ $setting->phone }} </p>@endif
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="single-footer quick-links">
                        <div class="footer-title">
                            <h3>Quick links</h3>
                        </div>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">about</a></li>
                            <li><a href="#">serivces</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="/contact-us">contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer open-hours">
                        <div class="footer-title">
                            <h3>Open hours</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetueiusmodm dost  adipisicing elit, sed do eiusmod is tempincididuntm ut
                            lorem ipsome do or sit amt  labore et dolor </p>
                        <ul>
                            <li>Monday - Friday <span>8.00-5.00</span></li>
                            <li>Saturday <span>12.00-5.00</span></li>
                            <li>Sunday <span class="close">close</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-footer widget">
                        <div class="footer-title">
                            <h3>Categories</h3>
                        </div>
                        <ul>
                            @foreach($datalist as $data)
                            @if($data->image)<li><a href="{{ route('categoryservice',['id'=>$data->id] )}}"><img src="{{ Storage::url($data->image)}}" alt=""></a><p style="height: 5px; font-size: xx-small;">{{$data->title}}</p></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright">
                        <p class="copyright-text">© 2022 {{ $setting->company }} | Mede with ❤️ by  <a href="https://www.instagram.com/muhannad.salkini/" target="_blank">Muhannad SALKINI</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer end-->

</div>


<!-- Placed js at the end of the document so the pages load faster -->


<!-- All js plugins included in this file. -->
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.0.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.nivo.slider.pack.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/ajax-mail.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.js"></script>
<script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('assets')}}/js/waypoints.min.js"></script>
<script src="{{asset('assets')}}/js/plugins.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
