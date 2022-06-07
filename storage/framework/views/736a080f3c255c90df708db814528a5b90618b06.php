<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Beautyhouse |Admin Panel Edit Review</title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets')); ?>/admin/app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets')); ?>/images/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS -->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/themes/semi-dark-layout.min.css">


    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: Page CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <!-- END: Page CSS -->

</head>
<body>
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Message Detail</h4>
            </div>
            <div class="card-body">
                <?php echo $__env->make('home.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form class="needs-validation" action="<?php echo e(route('admin_appointment_update',['id'=>$data->id])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <table class="table sortable" id="categoryTable" >
                        <tr>
                            <th>Id</th> <td><?php echo e($data->id); ?></td>
                        </tr>
                        <tr>
                            <th>User</th> <td><?php echo e($data->user->name); ?></td>
                        </tr>
                        <tr>
                            <th>Service</th> <td> <?php if($data->service_id): ?> <a href="<?php echo e(route('service', ['id'=>$data->service_id])); ?>" target="_blank"><?php echo e($data->service->title); ?></a> <?php else: ?> NO SERVICE! <?php endif; ?></td>
                        </tr>
                        <tr>
                            <th>Price</th> <td>$<?php echo e($data->price); ?></td>
                        </tr>
                        <tr>
                            <th>Name</th> <td><?php echo e($data->name); ?></td>
                        </tr>
                        <tr>
                            <th>Phone</th> <td><?php echo e($data->phone); ?></td>
                        </tr>
                        <tr>
                            <th>Email</th> <td><?php echo e($data->email); ?></td>
                        </tr>
                        <tr>
                            <th>Appointment Date</th> <td><?php echo e($data->date); ?> / <?php echo e($data->time); ?></td>
                        </tr>
                        <tr>
                            <th>Created Date</th> <td><?php echo e($data->created_at); ?></td>
                        </tr>
                        <tr>
                            <th>Update Date</th> <td><?php echo e($data->updated_at); ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <select name="status" class="form-select">
                                    <option selected><?php echo e($data->status); ?></option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                <button type="submit" class="btn btn-primary waves-effect waves-float waves-light" style="margin-top: 0.5rem;">Update Status</button>
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>
</div>
    <!-- END: Content-->

</body>

<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/admin/appointment_edit.blade.php ENDPATH**/ ?>