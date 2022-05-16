<?php ($setting = App\Http\Controllers\HomeController::getsetting()); ?>


<?php $__env->startSection('title', $setting->title. ' | User Profile'); ?>
<?php $__env->startSection('breadcrumbs', 'User Profile'); ?>
<?php $__env->startSection('Profile_status', 'color: #6bc513'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="shop-page ptb-100">
        <div class="container" >
            <div class="row">
                <?php echo $__env->make('home.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="col-md-10" >
                    <?php echo $__env->make('profile.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!--shop sidebar end-->
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/user_profile.blade.php ENDPATH**/ ?>