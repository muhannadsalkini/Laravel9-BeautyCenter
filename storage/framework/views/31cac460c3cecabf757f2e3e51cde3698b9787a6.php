<?php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist();
?>

<li class="mega-parent"><a href="#">Categories</a>
    <ul class="mgea-menu">

        <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="mega-sub"><a href="<?php echo e(route('categoryservice',['id'=>$rs->id] )); ?>"><?php echo e($rs->title); ?></a>
            <?php if(count($rs->children)): ?>
                <?php echo $__env->make('home.categorytree',['children' =>$rs->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</li>

<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/_category.blade.php ENDPATH**/ ?>