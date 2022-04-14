<?php $__env->startSection('title', 'Category Edit'); ?>
<?php $__env->startSection('Services_status', 'active'); ?>

<?php $__env->startSection('vendor_css'); ?>
    <!-- BEGIN: Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/vendors.min.css">
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
                        <h4 class="card-title">Edit: <?php echo e($data->id); ?> - <?php echo e($data->title); ?></h4>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="<?php echo e(route('admin_service_update',['id'=>$data->id])); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-1">
                                <label class="form-label">Title</label>
                                <input type="text" name="title"  value="<?php echo e($data->title); ?>" class="form-control" placeholder="Title">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Keywords</label>
                                <input type="text" name="keywords" value="<?php echo e($data->keywords); ?>" class="form-control" placeholder="Keywords">
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Description</label>
                                <textarea name="description" class="form-control" id="validationBioBootstrap" rows="2"><?php echo e($data->description); ?></textarea>
                            </div>
                            <div class="mb-1">
                                <div class=" col-md-12 mb-sm-0">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" value="<?php echo e($data->image); ?>" type="file" id="formFile" name="image">
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category_id" required="">
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rs->id); ?>" <?php if($rs->id == $data->category_id): ?> selected="selected" <?php endif; ?> >
                                            <?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentTree($rs, $rs->title)); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" value="<?php echo e($data->price); ?>" class="form-control" placeholder="Price">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Tax</label>
                                <input type="number" name="tax" value="<?php echo e($data->tax); ?>" class="form-control" placeholder="Tax">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option <?php if($data->status == "False"): ?> selected="selected" <?php endif; ?>> False</option>
                                    <option <?php if($data->status == "True"): ?> selected="selected" <?php endif; ?>>True</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Details</label>
                                <textarea name="detail" id="summernote"><?php echo e($data->detail); ?></textarea>
                                <script>
                                    $('#summernote').summernote({
                                        placeholder: 'Details',
                                        tabsize: 2,
                                        height: 100
                                    });
                                </script>
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

<?php $__env->startSection('page_js'); ?>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/js/scripts/tables/table-datatables-basic.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- END: Page JS-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/admin/service_edit.blade.php ENDPATH**/ ?>