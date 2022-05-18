<?php $__env->startSection('title', 'Admin Panel Services'); ?>
<?php $__env->startSection('User_status', 'active'); ?>

<?php $__env->startSection('vendor_css'); ?>
    <!-- BEGIN: Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">


    <!-- END: Vendor CSS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_js'); ?>
    <!-- summernote text editor -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_css'); ?>
    <!-- BEGIN: Page CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css">

    <!-- END: Page CSS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="app-content content kanban-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit User</h4>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="<?php echo e(route('admin_user_update',['id'=>$data->id])); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-1">
                                <label class="form-label">Name</label>
                                <input type="text" name="name"  value="<?php echo e($data->name); ?>" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">E-mail</label>
                                <input type="text" name="email" value="<?php echo e($data->email); ?>" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" value="<?php echo e($data->phone); ?>" class="form-control" placeholder="Phone">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="<?php echo e($data->address); ?>" class="form-control" placeholder=Address">
                            </div>
                            <div class="mb-1">
                                <div class=" col-md-12 mb-sm-0">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                    <?php if($data->profile_photo_path): ?>
                                        <img src="<?php echo e(Storage::url($data->profile_photo_path)); ?>" style="border-radius: 0.357rem;" height="104" width="104" alt="User avatar">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_vendor_js'); ?>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_js'); ?>

    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/js/scripts/forms/form-select2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- END: Page JS-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/admin/user_edit.blade.php ENDPATH**/ ?>