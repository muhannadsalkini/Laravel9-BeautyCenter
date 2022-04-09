@extends('layouts.admin')

@section('title', 'service Add')
@section('Services_status', 'active')

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
                        <form class="needs-validation" action="{{route('admin_service_store')}}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Keywords</label>
                                <input type="text" name="keywords" class="form-control" placeholder="Keywords">
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Description</label>
                                <textarea name="description" class="form-control" id="validationBioBootstrap" rows="2"></textarea>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Image</label>
                                <input type="text" name=image" class="form-control" placeholder="Image">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Category ID</label>
                                <select class="form-select" name="category_id" required="">
                                    @foreach ($datalist as $cl)
                                        <option value="{{ $cl->id }}">{{ $cl->id }} - {{ $cl->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" class="form-control" placeholder="Price">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Tax</label>
                                <input type="number" name="tax" value="18" class="form-control" placeholder="Tax">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected="selected" >False</option>
                                    <option >True</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Detail</label>
                                <textarea name="detail" class="form-control" id="validationBioBootstrap" rows="2"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Add Service</button>
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

