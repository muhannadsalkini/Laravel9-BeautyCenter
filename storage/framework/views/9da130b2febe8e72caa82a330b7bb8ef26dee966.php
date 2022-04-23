<div>
    

    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist" placeholder="Search service...">
    <?php if(!empty($query)): ?>
        <datalist id="mylist"><!-- when an option is selected -->
            <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($rs->title); ?>"><?php echo e($rs->category->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </datalist>
    <?php endif; ?>
</div>
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/livewire/search.blade.php ENDPATH**/ ?>