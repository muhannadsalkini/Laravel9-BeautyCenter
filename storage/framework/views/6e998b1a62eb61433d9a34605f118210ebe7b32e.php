<?php $__env->startSection('title', $setting->title); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($setting->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>


<?php $__env->startSection('content'); ?>






<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/_blank.blade.php ENDPATH**/ ?>