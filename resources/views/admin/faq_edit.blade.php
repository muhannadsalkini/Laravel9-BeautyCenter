@extends('layouts.admin')

@section('title', 'Admin Panel Edit FAQ')
@section('Faq_status', 'active')

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
                        <h4 class="card-title">Edit: {{ $data->id }}</h4>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label class="form-label">Position</label>
                                <input type="text" name="position" value="{{ $data->position }}" class="@error('position') is-invalid @enderror form-control" placeholder="Position">
                                @error('position')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Question</label>
                                <input type="text" name="question"  value="{{ $data->question }}" class=" @error('question') is-invalid @enderror form-control" placeholder="Question">
                                @error('question')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label">Answer</label>
                                <textarea name="answer" id="answer" class=" @error('answer') is-invalid @enderror" >{{ $data->answer }}</textarea>
                                <script>
                                    $('#answer').summernote({
                                        placeholder: 'Details',
                                        tabsize: 2,
                                        height: 100
                                    });
                                </script>
                                @error('answer')<div class="alert alert-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option @if ($data->status == "False") selected="selected" @endif> False</option>
                                    <option @if ($data->status == "True") selected="selected" @endif>True</option>
                                </select>
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

