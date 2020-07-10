@extends('layouts/admin')

@section('title') Dashboard @endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h3 class="float-left pr-1 mb-0">Selamat Datang, {{Auth()->user()->name}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @if(Auth::user()->role == 2)
            <!-- Dashboard SISWA -->
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        @if($data->status == 1)

                        <h1 class="text-danger">Silahkan Tunggu Konfirmasi Admin.</h1>

                        <h6><i><b>*Catatan : Tunggu konfirmasi admin paling lambat dua hari kerja untuk verifikasi file.</b></i></h6>

                        @elseif($data->status == null)

                        @include('dashboard.syaratpendaftar')

                        @elseif($data->status == 2)

                        @include('dashboard.pendaftaranulang')

                        @elseif($data->status == 3)

                        <h2 class="text-danger">Mohon Maaf Pendaftaran Telah Ditolak.</h2>

                        @else

                        <h1 class="text-dark">Berhasil.</h1>

                        @endif

                        @include('dashboard.akte')
                        @include('dashboard.kk')
                        @include('dashboard.photos')

                    </div>
                </div>
            </div>
            <!-- Dashboard SISWA end -->
            @else
            <div class="content-body">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
