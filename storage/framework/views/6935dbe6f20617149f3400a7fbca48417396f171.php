<!--Breadcrumbs start-->
<div class="breadcrumbs text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs-title">
                    <h2><?php echo $__env->yieldContent('breadcrumbs'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-menu">
        <ul>
            <li><a href="<?php echo e(route('home')); ?>">HOME <span>//</span></a></li>
            <li><?php echo $__env->yieldContent('breadcrumbs'); ?></li>
        </ul>
    </div>
</div>
<!--Breadcrumbs end-->
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/_breadcrumbs.blade.php ENDPATH**/ ?>