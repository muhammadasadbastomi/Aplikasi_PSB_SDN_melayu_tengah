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


        {{-- siswa --}}
        <div class="content-body">
            @if(Auth::user()->role == 2)
            <!-- Dashboard SISWA -->
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    @if($data->status == 1)

                                    <h1 class="text-danger">Silahkan Tunggu Konfirmasi Admin.</h1>

                                    <h6><i><b>*Catatan : Tunggu konfirmasi admin paling lambat dua hari kerja untuk
                                                verifikasi file.</b></i></h6>

                                    @elseif($data->status == null)

                                    @include('dashboard.syaratpendaftar')

                                    @elseif($data->status == 2)

                                    @include('dashboard.pendaftaranulang')

                                    @elseif($data->status == 3)

                                    <h2 class="text-danger">Mohon Maaf Pendaftaran Telah Ditolak.</h2>

                                    @elseif(($data->status == 5) or ($data->status == 6))

                                    @include('dashboard.jadwal')

                                    @else
                                    <h4>Pembayaran Telah Dikonfirmasi, Silahkan Tunggu dan Lihat <a
                                            href="{{route('kegiatanShow')}}">Daftar Kegiatan </a> Untuk Informasi
                                        Pembagian Kelas.</h4>
                                    @endif

                                    @include('dashboard.akte')
                                    @include('dashboard.kk')
                                    @include('dashboard.photos')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard SISWA end -->

            <!-- Dashboard ADMIN start -->
            @elseif(Auth::user()->role ==1)
            <div class="content-body">
                <div class="row">
                    <div class="col-sm-3 col-12 dashboard-users-success">
                        <div class="card text-center">
                            <div class="card-content">
                                <div class="card-body py-1">
                                    <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                        <i class="bx bx-briefcase-alt font-medium-5"></i>
                                    </div>
                                    <div class="text-muted line-ellipsis">Total Siswa</div>
                                    <h3 class="mb-0">1.2k</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-12 dashboard-users-success">
                        <div class="card text-center">
                            <div class="card-content">
                                <div class="card-body py-1">
                                    <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                        <i class="bx bx-briefcase-alt font-medium-5"></i>
                                    </div>
                                    <div class="text-muted line-ellipsis">Siswa dalam pendaftaran</div>
                                    <h3 class="mb-0">1.2k</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-12 dashboard-users-success">
                        <div class="card text-center">
                            <div class="card-content">
                                <div class="card-body py-1">
                                    <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                        <i class="bx bx-briefcase-alt font-medium-5"></i>
                                    </div>
                                    <div class="text-muted line-ellipsis">Total Siswa Diterima</div>
                                    <h3 class="mb-0">1.2k</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-12 dashboard-users-success">
                        <div class="card text-center">
                            <div class="card-content">
                                <div class="card-body py-1">
                                    <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                        <i class="bx bx-briefcase-alt font-medium-5"></i>
                                    </div>
                                    <div class="text-muted line-ellipsis">Total Siswa Ditolak</div>
                                    <h3 class="mb-0">1.2k</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
