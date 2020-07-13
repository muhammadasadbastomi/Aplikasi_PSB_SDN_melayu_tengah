@extends('layouts/admin')

@section('title')
Data Pembayaran
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Data Pembayaran</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Data Pembayaran
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
                    <a class="nav-link active" id="pills-dikonfirmasi-tab" data-toggle="pill" href="#pills-dikonfirmasi"
                        role="tab" aria-controls="pills-dikonfirmasi" aria-selected="true">Konfirmasi</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-ditolak-tab" data-toggle="pill" href="#pills-cicilan" role="tab"
                        aria-controls="pills-cicilan" aria-selected="false">Cicilan</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-cicilan-tab" data-toggle="pill" href="#pills-lunas" role="tab"
                        aria-controls="pills-lunas" aria-selected="false">Lunas</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent" style="margin-top: -45px;">
                <div class="tab-pane fade show active" id="pills-dikonfirmasi" role="tabpanel"
                    aria-labelledby="pills-dikonfirmasi-tab">@include('admin.pembayaran.konfirmasi')</div>
                <div class="tab-pane fade" id="pills-cicilan" role="tabpanel" aria-labelledby="pills-cicilan-tab">
                    @include('admin.pembayaran.cicilan')</div>
                <div class="tab-pane fade" id="pills-lunas" role="tabpanel" aria-labelledby="pills-lunas-tab">
                    @include('admin.pembayaran.lunas')</div>
            </div>
        </div>
    </div>
</div>
@include('admin.pembayaran.cetak')
@endsection

@section('script')

<script>
    $('#modaledit').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
    })
</script>

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
