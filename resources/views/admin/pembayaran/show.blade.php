@extends('layouts/admin')

@section('title')
Detail Pembayaran
@endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Detail Pembayaran</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Detail Pembayaran
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('pembayaranIndexadmin') }}" class="btn btn-primary"><i
                                        class="bx bx-arrow-back"></i>Kembali</a>
                            </div>
                            <div class="card-body" class="col-12">
                                <div>
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="row">

                                                <div class="col-sm">
                                                    <h3>Bukti Pembayaran</h3>
                                                    <br>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-bold">Nama Siswa
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->siswa->user->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Metode
                                                                &emsp14;
                                                            </td>
                                                            <td>: @if($data->metode == 1 )
                                                                Cicilan
                                                                @elseif($data->metode == 2 )Cash
                                                                @endif</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tanggal Bayar
                                                                &emsp14;
                                                            </td>

                                                            <td>:
                                                                {{Carbon\Carbon::parse($data->tgl_bayar)->translatedFormat('d F Y')}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Nominal
                                                                &emsp14;
                                                            </td>
                                                            <td>:
                                                                @if($data->cicilan == null)
                                                                @currency($data->nominal)
                                                                @elseif($data->cicilan == !null)
                                                                @currency($data->cicilan->nominal)
                                                                @endif</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Terbilang
                                                                &emsp14;
                                                            </td>
                                                            <td>:
                                                                @if($data->cicilan == null)
                                                                {{ $data->terbilang }}
                                                                @elseif($data->cicilan == !null)
                                                                {{ $data->cicilan->terbilang }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>


                            <div class="card-body col-12">
                                <div class="row">
                                    <div class="col-sm">
                                        <h3 class="text-center">Bukti Pembayaran</h3>
                                        <br>
                                        <div class="text-center">
                                            @if($data->cicilan_id == !null)
                                            <img style="height: 50%; width: 50%;"
                                                src="{{ url('images/biodata/'. $data->cicilan->bukti )}}"
                                                class="image-fluid" alt="responsive-image">


                                            @elseif($data->cicilan_id == null)
                                            <img style="height: 50%; width: 50%;"
                                                src="{{ url('images/biodata/'. $data->bukti )}}" class="image-fluid"
                                                alt="responsive-image">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>

@endsection