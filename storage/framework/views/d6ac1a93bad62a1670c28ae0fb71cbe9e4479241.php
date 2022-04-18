<?php $__env->startSection('title', $setting->title); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($setting->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>


<?php $__env->startSection('content'); ?>

    <!--slider section start-->
    <?php echo $__env->make('home._slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--slider section end-->

    <!--welcome section start-->
    <div class="welcome-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-img">
                        <img src="<?php echo e(asset('assets')); ?>/images/about/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-desc">
                        <h6>Welcome to beauty house</h6>
                        <h2>About Our Beauty House</h2>
                        <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved venenatis mauris finibus dictum. Vestibulum quis elit eget neque porttitor  no amet dolor. Proin pretium purus a lorem ornare</p>
                        <p class="text-2">sed lobortis pulvinar. Integer laoreet mi id eros porta euismod. Suspendisse potenti. Nulla eros mauris, convallis et sem tempus, viverra hendrerit sapien  Lorem  amet, consectetur adipiscing elit. Donec aliquet dolor libero, </p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--welcome section end-->

    <!--fun fact area-->
    <div class="fun-fact text-center ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-fun-fact float-left">
                        <div class="fun-icon" >
                            <a href="#" style="padding-top: 17px;"><i class="fa fa-trophy" aria-hidden="true"></i></a>
                        </div>
                        <p class="counter">200</p>
                        <h5>win awards</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="single-fun-fact middle-margin-left">
                        <div class="fun-icon">
                            <a href="#"style="padding-top: 17px;"><i class="zmdi zmdi-favorite"></i></a>
                        </div>
                        <p class="counter">150</p>
                        <h5>Happy client</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="single-fun-fact middle-margin">
                        <div class="fun-icon">
                            <a href="#"style="padding-top: 17px;"><i class="zmdi zmdi-male-female"></i></a>
                        </div>
                        <p class="counter">100</p>
                        <h5>trainer</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-fun-fact float-right">
                        <div class="fun-icon">
                            <a href="#"style="padding-top: 17px;"><i class="fa fa-pagelines" aria-hidden="true"></i></a>
                        </div>
                        <p class="counter">300</p>
                        <h5>Treatment</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fun fact area end-->

    <!--Gallery section start-->
    <div class="galllery ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our latest gallery</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-tab-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-tab-menu text-center">
                            <ul role="tablist">
                                <li role="presentation"><a href="#all" aria-controls="all" data-toggle="tab">All</a></li>
                                <li role="presentation"><a aria-controls="massage" href="#massage" data-toggle="tab">Lunch</a></li>
                                <li role="presentation"><a href="#skin" aria-controls="skin" data-toggle="tab">skin care</a></li>
                                <li role="presentation"  class="active"><a href="#hair" aria-controls="hair" data-toggle="tab">hair cut</a></li>
                                <li role="presentation"><a href="#nail" aria-controls="nail" data-toggle="tab">nail care  </a></li>
                                <li role="presentation"><a href="#beauty" aria-controls="beauty" data-toggle="tab"> beauty spa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-tab-content">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="all">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="massage">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <span>  <a href="#"><i class="zmdi zmdi-zoom-in"></i></a></span>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="skin">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="hair">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg" alt="">
                                    <span><a href="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a></span>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="nail">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="beauty">
                        <div class="single-gallery-list owl_pagination">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/1.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/2.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/3.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/4.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg" alt="">
                                    <a href="<?php echo e(asset('assets')); ?>/images/gallery/5.jpg"><i class="zmdi zmdi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Gallery section end-->

    <!--Offer section start-->
    <div class="special-offer">
        <div class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title bg_grey text-center">
                            <h2>you get our special offer</h2>
                            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="offer-apoinment text-center">
                            <a href="#">Make An Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offer section end-->

    <!--Our feature section-->
    <div class="our-feature ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our Features</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-feature text-center">
                        <div class="feature-img">
                            <img src="<?php echo e(asset('assets')); ?>/images/feature/1.png" alt="">
                        </div>
                        <div class="feature-desc">
                            <h3><a href="#">Face Treatment</a></h3>
                            <p>$100</p>
                            <a href="#">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-feature text-center">
                        <div class="feature-img">
                            <img src="<?php echo e(asset('assets')); ?>/images/feature/2.png" alt="">
                        </div>
                        <div class="feature-desc">
                            <h3><a href="#">Body message</a></h3>
                            <p>$300</p>
                            <a href="#">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-feature text-center">
                        <div class="feature-img">
                            <img src="<?php echo e(asset('assets')); ?>/images/feature/3.png" alt="">
                        </div>
                        <div class="feature-desc">
                            <h3><a href="#">Nail Treatment</a></h3>
                            <p>$200</p>
                            <a href="#">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our feature section end-->

    <!--Video section start-->
    <div class="video-section text-center">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-section-inner">
                        <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=UnNHWRenYTA&list=PLIUezwWmVtFX3aoVpOh5ZVn_EtKuX8fXw"><i class="zmdi zmdi-play"></i></a>
                        </div>
                        <h2>how it works</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Video section end-->

    <!--pricing palaning start-->
    <div class="pricing-plan ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our pricing plan</h2>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- basic pack -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-title">
                            <h3>basic pack</h3>
                        </div>
                        <div class="pricing-desc">
                            <h2><span class="currency">$</span>49.99<span class="date">/month</span></h2>
                            <ul>
                                <li>Nail cutting & styling</li>
                                <li>Hot Ayurvedic spa</li>
                                <li>Hot oil massage</li>
                                <li>Body wraps</li>
                            </ul>
                            <div class="book-now">
                                <a href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- silver pack -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-title">
                            <h3>silver pack</h3>
                        </div>
                        <div class="pricing-desc">
                            <h2><span class="currency">$</span>77.99<span class="date">/month</span></h2>
                            <ul>
                                <li>Nail cutting & styling</li>
                                <li>Hot Ayurvedic spa</li>
                                <li>Hot oil massage</li>
                                <li>Body wraps</li>
                            </ul>
                            <div class="book-now">
                                <a href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- premium pack -->
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="pricing-table text-center">
                        <div class="pricing-title">
                            <h3>premium pack</h3>
                        </div>
                        <div class="pricing-desc">
                            <h2><span class="currency">$</span>99.99<span class="date">/month</span></h2>
                            <ul>
                                <li>Nail cutting & styling</li>
                                <li>Hot Ayurvedic spa</li>
                                <li>Hot oil massage</li>
                                <li>Body wraps</li>
                            </ul>
                            <div class="book-now">
                                <a href="#">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--pricing palaning end-->

    <!--Testimonial start-->
    <div class="testimonial">
        <div class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="testimonail-list owl_pagination">
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                            <div class="single-testimonial">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                                <h3>Erin Stinson</h3>
                                <p class="title">Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Testimonial end-->

    <!--our blog start-->
    <div class="our-blog pt-100" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our Blog</h2>
                    </div>
                </div>
                <div class="error-area text-center ptb-100" style="width: 50%">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="error-content ">
                                    <h2 style="font-size: 400%;">Coming Soon!</h2>
                                    <h4>We're coming soon</h4>
                                    <p>We are working very hard on this, <br>
                                        It will bring a lot of new features.<br>
                                        Stay tuned!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--our blog end-->

    <!--Our partener start--><!--
        <div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partner-list">
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/1.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/2.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/3.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/4.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/2.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/1.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/2.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/3.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/4.png" alt=""></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="<?php echo e(asset('assets')); ?>/images/logo/2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!--Our partener end-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/index.blade.php ENDPATH**/ ?>