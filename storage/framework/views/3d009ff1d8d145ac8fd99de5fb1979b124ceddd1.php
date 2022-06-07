<?php $__env->startSection('title', $setting->title. ' | About Us' ); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>
<?php $__env->startSection('breadcrumbs', 'About Us'); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="about-us ptb-100">
        <div class="container">
            <div class="row">
                <?php echo $setting->aboutus; ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/about.blade.php ENDPATH**/ ?>