@extends('layouts.admin')

@section('title', 'Category Add')
@section('Categories_status', 'active')

@section('vendor_css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS-->
@endsection

@section('page_css')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <!-- END: Page CSS-->
@endsection

@section('content')

    <div class="app-content content kanban-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Record</h4>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" novalidate="" action="{{route('admin_category_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label class="form-label">Parent ID</label>
                                <select class="form-select" name="parent_id" required="">
                                    <option value="0" selected="selected">0 - Main Category</option>
                                    @foreach ($datalist as $rs)
                                        <option value="{{ $rs->id }}">{{ $rs->id }} - {{ $rs->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Keywords</label>
                                <input type="text" name="Keywords" class="form-control" placeholder="Keywords">
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Description</label>
                                <textarea name="description" class="form-control" id="validationBioBootstrap" rows="2"></textarea>
                            </div>
                            <div class=" col-md-12 mb-sm-0">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected="selected" >False</option>
                                    <option >True</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Add Category</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection

@section('page_js')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets')}}/admin/app-assets/js/scripts/tables/table-datatables-basic.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- END: Page JS-->
@endsection
