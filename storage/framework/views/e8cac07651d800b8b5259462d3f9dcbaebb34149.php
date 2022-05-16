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
    <title>Beautyhouse | Admin Panel Show Service</title>
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
<!-- tale start -->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">

            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header border-bottom p-1">
                    <div class="head-label">
                        <h4 class="mb-0">Service: <?php echo e($data->title); ?> review</h4>
                    </div>
                </div>
                <table class="table sortable" id="categoryTable" >
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr class="item">
                        <td><?php echo e($data->id); ?></td>
                        <td><?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentTree($data->category, $data->category->title)); ?></td>
                        <td><?php echo e($data->title); ?></td>
                        <td><?php echo e($data->price); ?></td>
                        <td>
                            <div class="avatar-group">
                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0">
                                    <?php if($data->image): ?>
                                        <img src="<?php echo e(Storage::url($data->image)); ?>"  height="26" width="26">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php
                            $status = $data->status;
                            if ($status == "True") {
                                $temp = "badge rounded-pill badge-light-primary me-1";
                            } else {
                                $temp ="badge rounded-pill badge-light-warning me-1";
                            }
                            ?>
                            <span class="<?php echo e($temp); ?>"><?php echo e($data->status); ?></span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"href="<?php echo e(route('admin_image_add', ['service_id' => $data->id])); ?>" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                        <i data-feather='image'></i>
                                        <span style="padding-left: 7px;">Gallery</span>
                                    </a>
                                    <a class="dropdown-item"href="<?php echo e(route('admin_service_edit', ['id' => $data->id])); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                        <span>Edit</span>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('admin_service_delete', ['id' => $data->id])); ?>" onclick="return confirm('Delete! Are you sure?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>

                                        </svg>
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between mx-0 row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a>
                                </li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--/ table end -->
</body>


<?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/admin/service_show.blade.php ENDPATH**/ ?>