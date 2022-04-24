<?php ($setting = \App\Http\Controllers\HomeController::getsetting()); ?>


<?php $__env->startSection('title', $setting->title. ' | FAQ' ); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>
<?php $__env->startSection('breadcrumbs', 'FAQ'); ?>

<?php $__env->startSection('content'); ?>
    <!--Breadcrumbs start-->
    <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Breadcrumbs end-->
    <!--our gallery section start-->
    <div class="our-blog blog-pages ptb-100 fix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row blog-list">
                <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-top fix" style="box-shadow: 0 1px 3px rgb(0 0 0 / 20%); padding: 18px 30px;">

                            <h6><?php echo e($data->question); ?></h6>
                            <p><?php echo $data->answer; ?></p>
                        </div>
                        <div class="blog-bottom-action">
                            <div class="blog-publish">
                                <p><i class="zmdi zmdi-time"></i><?php echo e($data->created_at); ?> </p>
                            </div>
                            <div class="blog-action-box">
                                <ul>
                                    <!--<a class="read-more" href="#">Read more <i class="zmdi zmdi-long-arrow-right"></i></a>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!--pagintaion-->
        <div class="pagination-box text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination-inner">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-caret-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active">3</li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pagintaion end-->
    </div>
    <!--our gallery section end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/faq.blade.php ENDPATH**/ ?>