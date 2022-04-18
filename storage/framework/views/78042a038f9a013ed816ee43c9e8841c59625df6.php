<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul class="mega-sub-item">
        <?php if(count($subcategory->children)): ?>
            <li class="mega-sub"><a href=""><?php echo e($subcategory->title); ?></a>
                <ul class="mega-sub-item">
                    <?php echo $__env->make('home.categorytree',['children' =>$subcategory->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            </li>
        <?php else: ?>
            <li><a href="<?php echo e(route('categoryservice',['id'=>$subcategory->id] )); ?>"><?php echo e($subcategory->title); ?></a></li>
        <?php endif; ?>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/categorytree.blade.php ENDPATH**/ ?>