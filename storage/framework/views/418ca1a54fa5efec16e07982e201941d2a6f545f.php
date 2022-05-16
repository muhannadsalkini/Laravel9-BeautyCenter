<?php ($setting = \App\Http\Controllers\HomeController::getsetting()); ?>


<?php $__env->startSection('title', $setting->title. ' | Appointment'); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>
<?php $__env->startSection('breadcrumbs', 'Appointment'); ?>


<?php $__env->startSection('content'); ?>
    <!--Breadcrumbs start-->
    <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Breadcrumbs end-->
    <!-- checkout start -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel-body">
                            <div class="inner-step clearfix">
                                <form action="<?php echo e(route('user_appointment_store')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" value="<?php echo e($price); ?>" name="price">
                                    <input type="hidden" value="<?php echo e($service_id); ?>" name="service_id">
                                    <input class="first_name" type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" placeholder="Name & Surname">
                                    <input class="email_address" type="text" name="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="E-mail Address">
                                    <input class="phone_number" type="text" name="phone" value="<?php echo e(Auth::user()->phone); ?>" placeholder="Phone number">
                                    <div class="categories-size mt-20">
                                        <p class="size">Day:</p>
                                        <input style="width: 75%; position: absolute; right: 0;" type="date" id="date" name="date"
                                               value="<?php echo date("Y-m-d"); ?>"
                                               min="<?php echo date("Y-m-d"); ?>"
                                               max="<?php
                                               $d=strtotime("+1 Months");
                                               echo date("Y-m-d", $d); ?>">
                                    </div>

                                    <div class="shop-buttons mt-20">
                                        <p>Hour:</p>
                                        <input style="width: 75%; position: absolute; right: 0;" type="time" id="time" name="time"
                                               min="09:00" max="16:30" required>
                                    </div>
                                    <ul class="product-action">
                                        <input type="submit" value="Make Appointment">
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-12 col-xs-12">

                </div>
            </div>
        </div>
    </div>
    <!-- checkout end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/checkout.blade.php ENDPATH**/ ?>