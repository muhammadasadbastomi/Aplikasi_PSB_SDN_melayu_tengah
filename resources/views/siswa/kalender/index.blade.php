@extends('layouts/admin')

@section('title')
Data Kalender Akademik
@endsection

@section('head')
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
                                <div class="card-body card-dashboard">
                                    <div class="page-header">
                                        <h3 id="timeline">Kalender Akademik SDN Melayu Tengah Kabupaten Banjar <button class="btn btn-outline-default text-white float-right"> <i class="menu-livicon" data-icon="print-doc"></i> Print </button> </h3>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr class="table-active">
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kegiatan Kalender Akademik</th>
                                                    <th class="text-center">Tanggal Mulai</th>
                                                    <th class="text-center">Tanggal Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                @if($d->id % 4 == 0)
                                                <tr class="table-primary">
                                                    @else
                                                <tr class="table-info">
                                                    @endif
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$d->kegiatan}}</td>
                                                    <td class="text-center">{{Carbon\Carbon::parse($d->tgl_mulai)->Format('d F Y')}}</td>
                                                    <td class="text-center">{{Carbon\Carbon::parse($d->tgl_akhir)->Format('d F Y')}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
