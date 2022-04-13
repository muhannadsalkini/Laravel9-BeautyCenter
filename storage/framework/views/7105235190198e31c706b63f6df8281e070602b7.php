<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Beautyhouse | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link href="<?php echo e(asset('assets')); ?>/images/apple-touch-icon.png" type="<?php echo e(asset('assets')); ?>/images/x-icon" rel="shortcut icon">

    <!-- All css files are included here. -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/core.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/responsive.css">

    <!-- customizer style css -->
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="<?php echo e(asset('assets')); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('headerjs'); ?>
</head>
<body>
<div class="wrapper white-bg">
    <!--header section start-->
<?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--header section end-->

    <!-- content section start -->
<?php $__env->startSection('content'); ?>

<?php echo $__env->yieldSection(); ?>
<!-- content section end -->

    <!--footer start-->
<?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--footer end-->
</div>
<?php echo $__env->yieldContent('footerjs'); ?>
</body>
</html>
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/errors/minimal.blade.php ENDPATH**/ ?>