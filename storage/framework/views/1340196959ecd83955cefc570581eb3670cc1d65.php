<?php $__env->startSection('title', 'Admin Panel Services'); ?>
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

<?php $__env->startSection('page_css'); ?>
    <!-- BEGIN: Page CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <!-- END: Page CSS -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Content -->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <!-- tale start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">

                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="card-header border-bottom p-1">
                                    <div class="head-label">
                                        <h4 class="mb-0">Services</h4>
                                    </div>
                                    <div class="dt-action-buttons text-end">
                                        <div class="dt-buttons d-inline-flex">
                                            <button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share font-small-4 me-50">
                                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                                        <polyline points="16 6 12 2 8 6"></polyline>
                                                        <line x1="12" y1="2" x2="12" y2="15"></line>
                                                    </svg>
                                                    Export
                                                </span>
                                            </button>
                                            <button onclick="window.location.href='<?php echo e(route('admin_service_add')); ?>'" type="button" class="btn btn-primary waves-effect waves-float waves-light">+ Add New Record</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mx-0 row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="DataTables_Table_0_length">
                                            <label> Show
                                                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                                    <option value="7">7</option>
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="75">75</option>
                                                    <option value="100">100</option>
                                                </select> entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            <label>Search:
                                                <input type="text" id='categoryInput' onkeyup='search()' placeholder="Search by title.." class="form-control" aria-controls="DataTables_Table_0">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <table class="table sortable" id="categoryTable" >
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Days</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="item">
                                            <td><?php echo e($rs->id); ?></td>
                                            <td><?php if($rs->category): ?><?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentTree($rs->category, $rs->category->title)); ?>

                                                <?php else: ?> NO CATEGORY! <?php endif; ?></td>
                                            <td><?php echo e($rs->title); ?></td>
                                            <td><?php echo e($rs->price); ?></td>
                                            <td><?php echo e($rs->price); ?></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0">
                                                        <?php if($rs->image): ?>
                                                            <img src="<?php echo e(Storage::url($rs->image)); ?>"  height="26" width="26">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <?php
                                                $status = $rs->status;
                                                if ($status == "True") {
                                                    $temp = "badge rounded-pill badge-light-primary me-1";
                                                }
                                                else {
                                                    $temp ="badge rounded-pill badge-light-warning me-1";
                                                }
                                                ?>
                                                <span class="<?php echo e($temp); ?>"><?php echo e($rs->status); ?></span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"href="<?php echo e(route('admin_service_show', ['id' => $rs->id])); ?>" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                            <i data-feather='eye'></i>
                                                            <span style="padding-left: 7px;">Show</span>
                                                        </a>
                                                        <a class="dropdown-item"href="<?php echo e(route('admin_image_add', ['service_id' => $rs->id])); ?>" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                            <i data-feather='image'></i>
                                                            <span style="padding-left: 7px;">Gallery</span>
                                                        </a>
                                                        <a class="dropdown-item"href="<?php echo e(route('admin_service_edit', ['id' => $rs->id])); ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50">
                                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                            </svg>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="<?php echo e(route('admin_service_delete', ['id' => $rs->id])); ?>" onclick="return confirm('Delete! Are you sure?');">
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <?php echo $__env->make('home.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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


        </div>
    </div>
    <!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_vendor_js'); ?>
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_js'); ?>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('assets')); ?>/admin/app-assets/js/scripts/tables/table-datatables-basic.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <script>
        function search() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("categoryInput");
            filter = input.value.toUpperCase();  // Remove toUpperCase() to perform a case-sensitive search.
            table = document.getElementById("categoryTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];  // Change tr[i].getElementsByTagName('td')"[0]" to "[number of row you want]" to set the row
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <!-- END: Page JS-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script>
        $(window).on('load',  function(){
            if (feather) {
                feather.replace({ width: 14, height: 14 });
            }
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Php\Laravel9-BeautyCenter\resources\views/admin/service.blade.php ENDPATH**/ ?>