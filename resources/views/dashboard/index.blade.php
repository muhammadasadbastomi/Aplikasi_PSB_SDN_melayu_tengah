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
            <!-- Dashboard Start -->
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        @if(($pendaftaran->siswa_id == $data->id) && ($pendaftaran->status == 1))

                        <h1 class="text-danger">Silahkan Tunggu Konfirmasi Admin.</h1>

                        @elseif(($pendaftaran->siswa_id == $data->id) && ($pendaftaran->status == 2))

                        <h4 class="text-success">Pendaftaran Telah Dikonfirmasi, Silahkan Lakukan Pendaftaran Ulang Sebagai Berikut :</h4>
                        <ol>
                            <li>Pendaftaran Ulang dapat dilakukan dengan cara cash atau dicicil</li>
                            <li>Bagi anak yang kurang mampu bisa menyerahkan surat miskin ke pihak sekolah atas rekomendasi RT</li>
                        </ol>

                        <h5><b>Ketentuan Biaya yang harus dibayarkan : <button class="btn btn-sm btn-outline-primary"><i class="fa fa-print"></i> Cetak</button> </b></h5>
                        <ol>
                            <table class="table table-responsive" style="margin-left: -68px;">
                                <thead>
                                    <tr>
                                        <th>Jenis Pengeluaran</th>
                                        <th>Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Uang pangkal gedung</td>
                                        <td>50.000</td>
                                    </tr>
                                    <tr>
                                        <td>Uang Seragam </td>
                                        <td>175.000</td>
                                    </tr>
                                    <tr>
                                        <td>Uang pembayaran bulan 1 (pertama)</td>
                                        <td>85.000</td>
                                    </tr>
                                    <tr>
                                        <td><b>Total</b></td>
                                        <td><b>Rp.310.000</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ol>

                        <h5><a href="{{route('pembayaranIndex')}}">Klik Disini</a> Untuk Melakukan Pembayaran</h5>

                        @elseif(($pendaftaran->siswa_id == $data->id) && ($pendaftaran->status == 3))

                        <h2 class="text-danger">Mohon Maaf Pendaftaran Telah Ditolak.</h2>

                        @else
                        <h4 style="margin-bottom: 15px;">Berikut adalah syarat pendaftaran siswa baru yang harus dipenuhi :</h4>
                        <ol>
                            @if(($data->ayah_id == !null) && ($data->ibu_id == !null) && ($data->alamat == !null) && ($data->agama == !null))
                            <li>
                                <a class="text-success">Mengisi Lengkap Biodata Siswa <i class="fa fa-check"></i></a> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
                            </li>
                            @else
                            <li>
                                Mengisi Lengkap Biodata Siswa <a href="{{route('biodataIndex')}}">Klik Disini</a> untuk mengisi Biodata. <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
                            </li>
                            @endif
                            @if($data->akte == !null)
                            <li>
                                <a class="text-success">Fotocopy Akte kelahiran (Maksimal File 2 Mb)</a> <i class="fa fa-check"></i> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
                            </li>
                            @else
                            <li>
                                Fotocopy Akte kelahiran (Maksimal File 2 Mb) <button class="btn btn-sm btn-default text-primary" data-toggle="modal" data-target="#modalakte">Upload</button>
                            </li>
                            @endif
                            @if($data->kk == !null)
                            <li>
                                <a class="text-success"> Fotocopy Kartu Keluarga (Maksimal File 2 Mb) <i class="fa fa-check"></i> </a> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
                            </li>
                            @else
                            <li>
                                Fotocopy Kartu Keluarga (Maksimal File 2 Mb) <button class="btn btn-sm btn-default text-primary" data-toggle="modal" data-target="#modalkk">Upload</button>
                            </li>
                            @endif
                            @if(Auth::user()->photos == !null)
                            <li>
                                <a class="text-success"> Foto Siswa (Maksimal File 2 Mb) <i class="fa fa-check"></i> </a> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
                            </li>
                            @else
                            <li>
                                Foto Siswa (Maksimal File 2 Mb) <button class="btn btn-sm btn-default text-primary" data-toggle="modal" data-target="#modalphotos">Upload</button>
                            </li>
                            @endif
                        </ol>

                        @if(($data->ayah_id == !null) && ($data->ibu_id == !null) && ($data->alamat == !null) && ($data->agama == !null) && ($data->akte == !null) && ($data->kk == !null) && (Auth::user()->photos == !null))
                        <form action="{{route('dashboardDaftar')}}" method="post">
                            {{ method_field('put') }}
                            @csrf
                            <button style="margin-left: 25px;" type="submit" class="btn btn-danger">Klik Disini Untuk Mendaftar</button>
                        </form>
                        <br>
                        <br>
                        @endif

                        <h6><i><b>*Catatan : Tunggu konfirmasi admin paling lambat dua hari kerja untuk verifikasi file.</b></i></h6>


                        @endif
                        @include('dashboard.akte')
                        @include('dashboard.kk')
                        @include('dashboard.photos')

                    </div>
                </div>
            </div>
            <!-- Dashboard end -->
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
