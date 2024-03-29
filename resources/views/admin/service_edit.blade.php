@extends('layouts.admin')

@section('title', 'Admin Panel Edit Service')
@section('Services_status', 'active')

@section('vendor_css')
    <!-- BEGIN: Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">


    <!-- END: Vendor CSS -->
@endsection

@section('header_js')
    <!-- summernote text editor -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('page_css')
    <!-- BEGIN: Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/css/core/menu/menu-types/vertical-menu.min.css">

    <!-- END: Page CSS -->
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
                        <h4 class="card-title">Edit: {{ $data->id }} - {{ $data->title }}</h4>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="{{route('admin_service_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label class="form-label">Title</label>
                                <input type="text" name="title"  value="{{ $data->title }}" class="form-control" placeholder="Title">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Keywords</label>
                                <input type="text" name="keywords" value="{{ $data->keywords }}" class="form-control" placeholder="Keywords">
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Description</label>
                                <textarea name="description" class="form-control" id="validationBioBootstrap" rows="2">{{ $data->description }}</textarea>
                            </div>
                            <div class="mb-1">
                                <div class=" col-md-12 mb-sm-0">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" value="{{ $data->image }}" type="file" id="formFile" name="image">
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category_id" required="">
                                    @foreach ($datalist as $rs)
                                        <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif >
                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentTree($rs, $rs->title) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" value="{{ $data->price }}" class="form-control" placeholder="Price">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Tax</label>
                                <input type="number" name="tax" value="{{ $data->tax }}" class="form-control" placeholder="Tax">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option @if ($data->status == "False") selected="selected" @endif> False</option>
                                    <option @if ($data->status == "True") selected="selected" @endif>True</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Details</label>
                                <textarea name="detail" id="summernote">{{ $data->detail }}</textarea>
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

@endsection


@section('page_vendor_js')
    <script src="{{asset('assets')}}/admin/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
@endsection
@section('page_js')

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets')}}/admin/app-assets/js/scripts/forms/form-select2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- END: Page JS-->
@endsection

