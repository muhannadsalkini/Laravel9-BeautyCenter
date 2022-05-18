<?php
    $setting = \App\Http\Controllers\HomeController::getsetting();
    $datalist = \App\Models\Category::limit(6)->get();
?>

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
                            <?php if($setting->address): ?><p style="padding-top: 15px"> <?php echo e($setting->address); ?> </p><?php endif; ?>
                        </div>
                        <div class="contact-action mb-15">
                            <span><i class="zmdi zmdi-email"></i></span>
                            <?php if($setting->email): ?><p style="padding-top: 15px"> <?php echo e($setting->email); ?> </p><?php endif; ?>
                        </div>
                        <div class="contact-action">
                            <span><i class="zmdi zmdi-phone"></i></span>
                            <?php if($setting->phone): ?><p style="padding-top: 15px"> <?php echo e($setting->phone); ?> </p><?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="single-footer quick-links">
                        <div class="footer-title">
                            <h3>Quick links</h3>
                        </div>
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('about-us')); ?>">about</a></li>
                            <li><a href="#">serivces</a></li>
                            <li><a href="<?php echo e(route('faq')); ?>">FAQ</a></li>
                            <li><a href="<?php echo e(route('contact-us')); ?>">contact us</a></li>
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
                            <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($data->image): ?><li><a href="<?php echo e(route('categoryservice',['id'=>$data->id] )); ?>"><img src="<?php echo e(Storage::url($data->image)); ?>" alt=""></a><p style="height: 5px; font-size: xx-small;"><?php echo e($data->title); ?></p></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <p class="copyright-text">© 2022 <?php echo e($setting->company); ?> | Mede with ❤️ by  <a href="https://www.instagram.com/muhannad.salkini/" target="_blank">Muhannad SALKINI</a> </p>
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
<script src="<?php echo e(asset('assets')); ?>/js/vendor/jquery-1.12.0.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/jquery.nivo.slider.pack.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/ajax-mail.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/jquery.magnific-popup.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/waypoints.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/plugins.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/main.js"></script>
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/_footer.blade.php ENDPATH**/ ?>