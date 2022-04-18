@extends('layouts.admin')

@section('title', 'Category Edit')
@section('Setting_status', 'active')

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
                        <h4 class="card-title">{{ $data->title }} - Settings</h4>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" name="id"  value="{{ $data->id }}" class="form-control" placeholder="Title">


                            <!-- Accordion with margin start -->
                            <section id="accordion-with-margin">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="accordion accordion-margin" id="accordionMargin">

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingMarginOne">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginOne" aria-expanded="true" aria-controls="accordionMarginOne">
                                                            General
                                                        </button>
                                                    </h2>
                                                    <div id="accordionMarginOne" class="accordion-collapse collapse" aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
                                                        <div class="accordion-body">
                                                            <div class="mb-1">
                                                                <label class="form-label">Title</label>
                                                                <input type="text" name="title"  value="{{ $data->title }}" class=" @error('title') is-invalid @enderror form-control" placeholder="Title">
                                                                @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Keywords</label>
                                                                <input type="text" name="keywords" value="{{ $data->keywords }}" class=" @error('keywords') is-invalid @enderror form-control" placeholder="Keywords">
                                                                @error('keywords')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="d-block form-label">Description</label>
                                                                <textarea name="description" class=" @error('description') is-invalid @enderror form-control" id="validationBioBootstrap" rows="2">{{ $data->description }}</textarea>
                                                                @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Company</label>
                                                                <input type="text" name="company" value="{{ $data->company }}" class=" @error('company') is-invalid @enderror form-control" placeholder="Company">
                                                                @error('company')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Address</label>
                                                                <input type="text" name="address" value="{{ $data->address }}" class=" @error('address') is-invalid @enderror form-control" placeholder="Address">
                                                                @error('address')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Phone</label>
                                                                <input type="number" name="phone" value="{{ $data->phone }}" class=" @error('phone') is-invalid @enderror form-control" placeholder="Phone">
                                                                @error('phone')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Fax</label>
                                                                <input type="text" name="fax" value="{{ $data->fax }}" class=" @error('fax') is-invalid @enderror form-control" placeholder="Fax">
                                                                @error('fax')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">E-mail</label>
                                                                <input type="text" name="email" value="{{ $data->email }}" class=" @error('email') is-invalid @enderror form-control" placeholder="E-mail">
                                                                @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Status</label>
                                                                <select name="status" class="form-select">
                                                                    <option @if ($data->status == "False") selected="selected" @endif> False</option>
                                                                    <option @if ($data->status == "True") selected="selected" @endif>True</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- auto email server -->
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingMarginThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginThree" aria-expanded="false" aria-controls="accordionMarginThree">
                                                            SMTP Server
                                                        </button>
                                                    </h2>
                                                    <div id="accordionMarginThree" class="accordion-collapse collapse" aria-labelledby="headingMarginThree" data-bs-parent="#accordionMargin">
                                                        <div class="accordion-body">
                                                            <div class="mb-1">
                                                                <label class="form-label">SMTP Server</label>
                                                                <input type="text" name="smtpserver" value="{{ $data->smtpserver }}" class="form-control" placeholder="SMTP Server">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">SMTP E-mail</label>
                                                                <input type="text" name="smtpemail" value="{{ $data->smtpemail }}" class="form-control" placeholder="SMTP E-mail">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">SMTP Passwod</label>
                                                                <input type="text" name="smtppassword" value="{{ $data->smtppassword }}" class="form-control" placeholder="SMTP Passwod">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">SMTP Post</label>
                                                                <input type="text" name="smtpport" value="{{ $data->smtpport }}" class="form-control" placeholder="SMTP Post">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Social Media -->
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingMarginFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginFour" aria-expanded="false" aria-controls="accordionMarginFour">
                                                            Social Media
                                                        </button>
                                                    </h2>
                                                    <div id="accordionMarginFour" class="accordion-collapse collapse" aria-labelledby="headingMarginFour" data-bs-parent="#accordionMargin">
                                                        <div class="accordion-body">
                                                            <div class="mb-1">
                                                                <label class="form-label">Facebook</label>
                                                                <input type="text" name="facebook" value="{{ $data->facebook }}" class="form-control" placeholder="Facebook">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Instagram</label>
                                                                <input type="text" name="instagram" value="{{ $data->instagram }}" class="form-control" placeholder="Instagram">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Twitter</label>
                                                                <input type="text" name="twitter" value="{{ $data->twitter }}" class="form-control" placeholder="Twitter">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label class="form-label">Youtube</label>
                                                                <input type="text" name="youtube" value="{{ $data->youtube }}" class="form-control" placeholder="Youtube">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- about -->
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingMarginFive">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginFive" aria-expanded="false" aria-controls="accordionMarginFive">
                                                            About Us
                                                        </button>
                                                    </h2>
                                                    <div id="accordionMarginFive" class="accordion-collapse collapse" aria-labelledby="headingMarginFive" data-bs-parent="#accordionMargin">
                                                        <div class="accordion-body">
                                                            <div class="mb-1">
                                                                <label class="d-block form-label">About Us</label>
                                                                <textarea name="aboutus" id="aboutus">{{ $data->aboutus }}</textarea>
                                                                <script>
                                                                    $('#aboutus').summernote({
                                                                        placeholder: 'About Us',
                                                                        tabsize: 2,
                                                                        height: 100
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- contact -->
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingMarginsix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionMarginsix" aria-expanded="false" aria-controls="accordionMarginsix">
                                                            Contact Us
                                                        </button>
                                                    </h2>
                                                    <div id="accordionMarginsix" class="accordion-collapse collapse" aria-labelledby="headingMarginsix" data-bs-parent="#accordionMargin">
                                                        <div class="accordion-body">
                                                            <div class="mb-1">
                                                                <label class="d-block form-label">Contact</label>
                                                                <textarea name="contact" id="contact">{{ $data->contact }}</textarea>
                                                                <script>
                                                                    $('#contact').summernote({
                                                                        placeholder: 'Contact',
                                                                        tabsize: 2,
                                                                        height: 100
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Accordion with margin end -->

                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Save</button>
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

