<?php $__env->startSection('title', 'User Profile'); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="shop-page ptb-100">
        <div class="container">
            <div class="row">
                <!--shop sidebar start-->
                <div class="col-md-3">
                    <div class="shop sidebar">
                        <aside class="widget categories grey-bg mb-30">
                            <div class="widget-title">
                                <h3>User Panel</h3>
                            </div>
                            <div class="widget-categories">
                                <!--Accordion item 1-->
                                <h6 class="open" data-collapse-summary="" aria-expanded="true"><a href="#"><a href="#">User Panel</a></a></h6>
                                <ul aria-hidden="false" style="display: block;">
                                    <li><a href="<?php echo e(route('myprofile')); ?>">Profile</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Shopcart</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
                                </ul>
                                <!--Accordion item 1 end-->
                                <!--Accordion item 2 start
                                <h6 data-collapse-summary="" aria-expanded="false" class=""><a href="#"><a href="#">Nail treatment</a></a></h6>
                                <ul aria-hidden="true" style="display: none;">
                                    <li><a href="#">Nail tratment 1</a></li>
                                    <li><a href="#">Nail tratment 2</a></li>
                                </ul>
                                Accordion item 2 end-->
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php echo $__env->make('profile.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!--shop sidebar end-->
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/user_profile.blade.php ENDPATH**/ ?>