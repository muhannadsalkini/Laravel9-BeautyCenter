
@extends('layouts.admin')

@section('title', 'Admin Panel Add Service')
@section('Services_status', 'active')

@section('vendor_css')
    <!-- BEGIN: Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/app-assets/vendors/css/vendors.min.css">
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
                        <h4 class="card-title">Add New Record</h4>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="{{route('admin_service_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="Title">
                                @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Keywords</label>
                                <input type="text" name="keywords" class="@error('keywords') is-invalid @enderror form-control" placeholder="Keywords">
                                @error('keywords')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Description</label>
                                <textarea name="description" class="@error('description') is-invalid @enderror form-control" id="validationBioBootstrap" rows="2"></textarea>
                                @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <div class=" col-md-12 mb-sm-0">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input type="file" id="formFile" name="image" class="@error('image') is-invalid @enderror form-control">
                                    @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-select">
                                    @foreach ($datalist as $cl)
                                        <option value="{{ $cl->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentTree($cl, $cl->title) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" class="@error('price') is-invalid @enderror form-control" placeholder="Price">
                                @error('price')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Tax</label>
                                <input type="number" name="tax" value="18" class="@error('tax') is-invalid @enderror form-control" placeholder="Tax">
                                @error('tax')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected="selected" >False</option>
                                    <option >True</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Details</label>
                                <textarea name="detail" id="summernote" class="@error('detail') is-invalid @enderror"></textarea>
                                <script>
                                    $('#summernote').summernote({
                                        placeholder: 'Details',
                                        tabsize: 2,
                                        height: 100
                                    });
                                </script>
                                @error('detail')<div class="alert alert-danger">{{ $message }}</div>@enderror
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

