@extends('layouts/admin')

@section('title')
Data Kalender Akademik
@endsection

@section('head')
<style>
    .logo {
        margin-top: 15px;
        float: left;
        margin-right: -1205px;
        width: 25%;
        text-align: right;
    }

    .judul {
        text-align: center;
    }

    .sizeimg {
        width: 75px;
    }

    .headtext {
        margin-top: 1%;
        float: right;
        margin-left: -50px;
        width: 81%;
        padding-right: 10%;
    }

    .header {
        margin-bottom: 0px;
        text-align: center;
        height: 150px;
        padding: 0px;
    }
</style>
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
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Kalender Akademik</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Kalender Akademik
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <button class="btn btn-outline-default text-white float-right"> <i class="menu-livicon" data-icon="print-doc"></i> Print </button>
                                <div class="card-body card-dashboard">

                                    <div class="header">
                                        <div class="logo">
                                            <img class="sizeimg" src="{{url('images/logobanjar.png')}}">
                                        </div>
                                        <div class="headtext">
                                            <h2 style="margin:0px;"> <b> SDN MELAYU TENGAH </b> </h2>
                                            <h2 style="margin:0px;"> KABUPATEN BANJAR </h2>
                                            <p style="margin:0px;">Jl. Melayu Ulu, Desa Melayu, Martapura Timur, Kab. Banjar, Kalimantan Selatan 70617
                                            </p>
                                        </div>
                                    </div>

                                    <hr>
                                    <h3 style="text-align:center;text-transform: uppercase;">Daftar Kegiatan Penerimaan Peserta Didik Baru</h3>


                                    <br>
                                    <div class="container">
                                        <ul class="timeline">
                                            @foreach($data as $d)
                                            @if($d->id % 2 == 0)
                                            <li>
                                                <div class="timeline-badge info"><i class="bx bxs-calendar text-white"></i></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">{{$d->kegiatan}}</h4>
                                                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Jadwal Kegiatan {{Carbon\Carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}} s/d {{Carbon\Carbon::parse($d->tgl_akhir)->translatedFormat('d F Y')}}.</small></p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>{{$d->keterangan}}.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @else
                                            <li class="timeline-inverted">
                                                <div class="timeline-badge warning"><i class="bx bxs-calendar text-white"></i></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4 class="timeline-title">{{$d->kegiatan}}</h4>
                                                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>Jadwal Kegiatan {{Carbon\Carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}} s/d {{Carbon\Carbon::parse($d->tgl_akhir)->translatedFormat('d F Y')}}.</small></p>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p>{{$d->keterangan}}.</p>
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
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->

        </div>
    </div>
</div>
@endsection

@section('script')

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<!-- END: Page Vendor JS-->

@endsection
