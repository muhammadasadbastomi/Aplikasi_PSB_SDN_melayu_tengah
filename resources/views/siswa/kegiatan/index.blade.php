@extends('layouts/admin')

@section('title')
Data Kegiatan
@endsection

@section('head')
<style>
    .timeline {
        list-style: none;
        padding: 20px 0 20px;
        position: relative;
    }

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline>li {
        margin-bottom: 20px;
        position: relative;
    }

    .timeline>li:before,
    .timeline>li:after {
        content: " ";
        display: table;
    }

    .timeline>li:after {
        clear: both;
    }

    .timeline>li:before,
    .timeline>li:after {
        content: " ";
        display: table;
    }

    .timeline>li:after {
        clear: both;
    }

    .timeline>li>.timeline-panel {
        width: 50%;
        float: left;
        border: 1px solid #d4d4d4;
        border-radius: 2px;
        padding: 20px;
        position: relative;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }

    .timeline>li.timeline-inverted+li:not(.timeline-inverted),
    .timeline>li:not(.timeline-inverted)+li.timeline-inverted {
        margin-top: -60px;
    }

    .timeline>li:not(.timeline-inverted) {
        padding-right: 90px;
    }

    .timeline>li.timeline-inverted {
        padding-left: 90px;
    }

    .timeline>li>.timeline-panel:before {
        position: absolute;
        top: 26px;
        right: -15px;
        display: inline-block;
        border-top: 15px solid transparent;
        border-left: 15px solid #ccc;
        border-right: 0 solid #ccc;
        border-bottom: 15px solid transparent;
        content: " ";
    }

    .timeline>li>.timeline-panel:after {
        position: absolute;
        top: 27px;
        right: -14px;
        display: inline-block;
        border-top: 14px solid transparent;
        border-left: 14px solid #fff;
        border-right: 0 solid #fff;
        border-bottom: 14px solid transparent;
        content: " ";
    }

    .timeline>li>.timeline-badge {
        color: #fff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 1.4em;
        text-align: center;
        position: absolute;
        top: 16px;
        left: 50%;
        margin-left: -25px;
        background-color: #999999;
        z-index: 100;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }

    .timeline>li.timeline-inverted>.timeline-panel {
        float: right;
    }

    .timeline>li.timeline-inverted>.timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
    }

    .timeline>li.timeline-inverted>.timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
    }

    .timeline-badge.primary {
        background-color: #2e6da4 !important;
    }

    .timeline-badge.success {
        background-color: #3f903f !important;
    }

    .timeline-badge.warning {
        background-color: #f0ad4e !important;
    }

    .timeline-badge.danger {
        background-color: #d9534f !important;
    }

    .timeline-badge.info {
        background-color: #5bc0de !important;
    }

    .timeline-title {
        margin-top: 0;
        color: inherit;
    }

    .timeline-body>p,
    .timeline-body>ul {
        margin-bottom: 0;
    }

    .timeline-body>p+p {
        margin-top: 5px;
    }
</style>
@endsection

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <!-- <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h3 class="float-left pr-1 mb-0">Logo Daftar Kegiatan Penerimaan Peserta Didik Baru Pada SDN Melayu Tengah Kabupaten Banjar</h3>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="content-body">
            <div class="container">
                <div class="page-header">
                    <h2 id="timeline">Daftar Kegiatan Penerimaan Peserta Didik Baru <button class="btn btn-outline btn-primary float-right">Cetak</button> </h2>
                </div>
                <ul class="timeline">
                    @foreach($data as $d)
                    @if($d->id % 2 == 0)
                    <li>
                        <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{$d->kegiatan}}</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Jadwal Kegiatan {{Carbon\Carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}} s/d {{Carbon\Carbon::parse($d->tgl_akhir)->translatedFormat('d F Y')}}</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>{{$d->keterangan}}</p>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{$d->kegiatan}}</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Jadwal Kegiatan {{Carbon\Carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}} s/d {{Carbon\Carbon::parse($d->tgl_akhir)->translatedFormat('d F Y')}}</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>{{$d->keterangan}}</p>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- BEGIN: Page Vendor JS-->
<!-- <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script> -->
<!-- END: Page Vendor JS-->
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
