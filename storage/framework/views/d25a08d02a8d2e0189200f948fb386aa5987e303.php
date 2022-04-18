<!--slider section start-->
<div class="slider-container">
    <div class="home-slider-list">
        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single-slider">
            <div class="slider-img">
                <img  style="width: 50%; display: block; margin-left: auto; margin-right: auto;" src="<?php echo e(Storage::url($rs->image)); ?>" alt="">
            </div>
            <div class="slider-text-tablecell">
                <div class="middle-text">
                    <div class="title-1 wow rotateInDownRight" data-wow-duration="0.9s" data-wow-delay="0s">
                        <h1><?php echo e($rs->title); ?></h1>
                    </div>
                    <div class="desc wow slideInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                        <p><?php echo e($rs->description); ?></p>
                    </div>
                    <div class="explore-now wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                        <a href="#">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!--slider section end-->
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/_slider.blade.php ENDPATH**/ ?>