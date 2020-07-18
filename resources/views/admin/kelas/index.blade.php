@extends('layouts/admin')

@section('title')
Data Kelas
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Data Kelas</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Data Kelas
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
                                    <button type="button" class="btn btn-primary round mr-1 mb-1" data-toggle="modal"
                                        data-target="#default"><i class="bx bx-plus-circle"></i></button>
                                    <div class="btn-group mb-1 float-right">
                                        <div class="dropdown dropleft dropdown-color-icon">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButtonEmoji" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Cetak
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonEmoji">
                                                <a type="button" class="dropdown-item" data-toggle="modal"
                                                    data-target="#cetak">Cetak
                                                    Pembagian Kelas</a>
                                                <a target="_blank" class="dropdown-item"
                                                    href="{{ route('cetakSiswaAll') }}">Cetak Siswa
                                                    Keseluruhan </a>
                                                <a type="button" class="dropdown-item" data-toggle="modal"
                                                    data-target="#cetaksiswa">Cetak Siswa Periode</a>
                                                <a target="_blank" class="dropdown-item"
                                                    href="{{ route('cetakSiswaditolakall') }}">Cetak Siswa
                                                    Ditolak Keseluruhan </a>
                                                <a type="button" class="dropdown-item" data-toggle="modal"
                                                    data-target="#cetaksiswaditolak">Cetak Siswa Ditolak Periode</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kode Kelas</th>
                                                    <th class="text-center">Nama Kelas</th>
                                                    <th class="text-center">Lihat Jadwal</th>
                                                    <th class="text-center">Lihat Siswa</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$d->kode_kelas}}</td>
                                                    <td class="text-center">{{$d->kelas}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('jadwalIndex',['id' => $d->id , 'uuid' => $d->uuid])}}"
                                                            class="btn btn-primary round mr-1 mb-1 text-white"><i
                                                                class="bx bxs-search"></i></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{route('pembagianIndex',['id' => $d->id , 'uuid' => $d->uuid])}}"
                                                            class="btn btn-primary round mr-1 mb-1 text-white"><i
                                                                class="bx bxs-search"></i></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-info round mr-1 mb-1 text-white"
                                                            data-toggle="modal" data-target="#modaledit"
                                                            data-id="{{$d->id}}" data-kode_kelas="{{$d->kode_kelas}}"
                                                            data-kelas="{{$d->kelas}}"><i class="bx bxs-edit"></i></a>
                                                        <a class="delete btn btn-danger round mr-1 mb-1 text-white"
                                                            data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    </td>
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
@include('admin.kelas.tambah')
@include('admin.kelas.edit')
@include('admin.kelas.cetak')
@endsection

@section('script')

<script>
    $('#modaledit').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let kode_kelas = button.data('kode_kelas')
        let kelas = button.data('kelas')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #kode_kelas').val(kode_kelas);
        modal.find('.modal-body #kelas').val(kelas);
    })

    $('#modaljadwal').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
    })
</script>

<script>
    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal.fire({
            title: "Apakah anda yakin?",
            icon: "warning",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            showCancelButton: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "{{url('/admin/kelas')}}" + '/' + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Berhasil Dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            document.location.reload(true);
                        }, 1000);
                    },
                })
            } else if (result.dismiss === swal.DismissReason.cancel) {
                Swal.fire(
                    'Dibatalkan',
                    'data batal dihapus',
                    'error'
                )
            }
        })
    });
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
