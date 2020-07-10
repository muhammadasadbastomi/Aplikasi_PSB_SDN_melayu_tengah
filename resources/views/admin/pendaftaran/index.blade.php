@extends('layouts/admin')

@section('title')
Data Pendaftaran Calon Siswa
@endsection

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Data Pendaftaran Calon Siswa</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Data Pendaftaran Calon Siswa
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-pendaftaran-tab" data-toggle="pill" href="#pills-pendaftaran" role="tab" aria-controls="pills-pendaftaran" aria-selected="true">Pendaftaran</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-dikonfirmasi-tab" data-toggle="pill" href="#pills-dikonfirmasi" role="tab" aria-controls="pills-dikonfirmasi" aria-selected="false">Dikonfirmasi</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-ditolak-tab" data-toggle="pill" href="#pills-ditolak" role="tab" aria-controls="pills-ditolak" aria-selected="false">Ditolak</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-lulus-tab" data-toggle="pill" href="#pills-lulus" role="tab" aria-controls="pills-lulus" aria-selected="false">Dinyatakan Lulus</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent" style="margin-top: -45px;">
                <div class="tab-pane fade show active" id="pills-pendaftaran" role="tabpanel" aria-labelledby="pills-pendaftaran-tab">@include('admin.pendaftaran.pendaftaran')</div>
                <div class="tab-pane fade" id="pills-dikonfirmasi" role="tabpanel" aria-labelledby="pills-dikonfirmasi-tab">@include('admin.pendaftaran.dikonfirmasi')</div>
                <div class="tab-pane fade" id="pills-ditolak" role="tabpanel" aria-labelledby="pills-ditolak-tab">@include('admin.pendaftaran.ditolak')</div>
                <div class="tab-pane fade" id="pills-lulus" role="tabpanel" aria-labelledby="pills-lulus-tab">@include('admin.pendaftaran.lulus')</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
<!-- END: Page JS-->
@endsection
