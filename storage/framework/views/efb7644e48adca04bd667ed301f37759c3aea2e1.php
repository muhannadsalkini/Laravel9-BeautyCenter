<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('keywords','Bakim, Guzellik'); ?>

<?php $__env->startSection('content'); ?>
    <!--Breadcrumbs start-->
    <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Breadcrumbs end-->
    <!-- map -->
    <div id="contact-map" class="map-area">
        <div id="googleMap" style="width:100%;height:500px;"></div>
    </div>
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12003.838962044536!2d32.655428727337785!3d41.2226
    47808034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354b21e5b6ab3%3A0xbb104da20a5891d2!2zMTAwLiBZxLFsLCA
    3ODA1MCBLYXJhYsO8ayBNZXJrZXovS2FyYWLDvGs!5e0!3m2!1sen!2str!4v1647651420433!5m2!1sen!2str"
            style="border:0;width:100%;height:500px";allowfullscreen="" loading="lazy"></iframe>-->
    <!-- map end -->
    <!--Contact start-->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="contact-list fix">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-contact">
                            <div class="contact-icon">
                                <a href="#" style="padding-top: 11px;"><i class="zmdi zmdi-phone" ></i></a>
                            </div>
                            <div class="contact-desc">
                                <?php if($setting->phone): ?><p style="padding-top: 15px"> <?php echo e($setting->phone); ?> </p><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-contact text-center">
                            <div class="contact-icon">
                                <a href="#" style="padding-top: 11px;"><i class="zmdi zmdi-dribbble"></i></a>
                            </div>
                            <div class="contact-desc">
                                <?php if($setting->email): ?><p style="padding-top: 15px"> <?php echo e($setting->email); ?> </p><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-contact float-right">
                            <div class="contact-icon">
                                <a href="#" style="padding-top: 11px;"><i class="zmdi zmdi-pin"></i></a>
                            </div>
                            <div class="contact-desc">
                                <?php if($setting->address): ?><p style="padding-top: 15px"> <?php echo e($setting->address); ?> </p><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact end-->
    <!--Contact form start-->
    <div class="contact-form ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Get in touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <p class="form-messege"></p>
                        <form id="contact-form" action="http://preview.hasthemes.com/beautyhouse-preivew/beautyhouse/mail.php" method="post">
                            <input name="name" type="text" placeholder="Name">
                            <input name="email" type="text" placeholder="Email">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form-img text-center">
                        <img src="<?php echo e(asset('assets')); ?>/images/common/contact.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact form end-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_js'); ?>
<!-- Map js code here -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="<?php echo e(asset('assets')); ?>/js/map.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/contact.blade.php ENDPATH**/ ?>