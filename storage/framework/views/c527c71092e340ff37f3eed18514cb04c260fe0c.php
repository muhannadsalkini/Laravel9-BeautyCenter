<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2022<a class="ms-25" href="https://www.instagram.com/muhannad.salkini/" target="_blank">Muhannad Salkini</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<?php echo $__env->yieldContent('page_vendor_js'); ?>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset('assets')); ?>/admin/app-assets/js/core/app-menu.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/admin/app-assets/js/core/app.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/admin/app-assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<?php echo $__env->yieldContent('page_js'); ?>
<!-- END: Page JS-->

<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>



<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views\admin\_footer.blade.php ENDPATH**/ ?>