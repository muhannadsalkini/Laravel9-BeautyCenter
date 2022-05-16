<!--shop sidebar start-->
<div class="col-md-2">
    <div class="shop sidebar">
        <aside class="widget categories grey-bg mb-30">
            <div class="widget-title">
                <h3>User Panel</h3>
            </div>
            <div class="widget-categories">
                <!--Accordion item 1-->
                <h6 class="open" data-collapse-summary="" aria-expanded="true"><a href="#"><a href="#">User Panel</a></a></h6>
                <ul aria-hidden="false" style="display: block;">
                    <li><a style="<?php echo $__env->yieldContent('Profile_status'); ?>" href="<?php echo e(route('myprofile')); ?>">Profile</a></li>
                    <li><a style="<?php echo $__env->yieldContent('Wishlist_status'); ?>" href="<?php echo e(route('wishlist')); ?>">Wishlist</a></li>
                    <li><a style="<?php echo $__env->yieldContent('Appointments_status'); ?>" href="<?php echo e(route('user_appointment')); ?>">Appointments</a></li>
                    <li><a style="<?php echo $__env->yieldContent('Reviews_status'); ?>" href="<?php echo e(route('myreviews')); ?>">Reviews</a></li>
                    <li><a <?php echo $__env->yieldContent('Messages_status'); ?> href="#">Messages</a></li>
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
<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/home/user_sidebar.blade.php ENDPATH**/ ?>