@extends('layouts/admin')

@section('title')
Data Kalender Akademik
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Kalender Akademik</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
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
                                    <button type="button" class="btn btn-primary round mr-1 mb-1 float-left"
                                        data-toggle="modal" data-target="#modaltambah"> <i
                                            class="bx bx-plus-circle"></i></button>
                                    <button type="button" data-toggle="modal" data-target="#modalcetak"
                                        class="btn btn-outline-default text-white float-right"><i class="menu-livicon"
                                            data-icon="print-doc"></i>Cetak</button>
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Tahun Ajaran</th>
                                                    <th class="text-center">Keterangan</th>
                                                    <th class="text-center">Detail Kalender Akademik</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$d->tahun}}</td>
                                                    <td class="text-center">@if($d->keterangan == !null)
                                                        {{$d->keterangan}} @else - @endif</td>
                                                    <td class="text-center">
                                                        @if($d->status == 1)
                                                        <button class="btn btn-info round mr-1 mb-1 text-white"> Tampil
                                                        </button>
                                                        @else
                                                        <button type="submit"
                                                            class="active btn btn-secondary round mr-1 mb-1 text-white"
                                                            data-id="{{$d->uuid}}" data-tahun="{{$d->tahun}}"> Tidak
                                                            Tampil </button>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-primary round mr-1 mb-1 text-white"
                                                            href="{{route('kalenderdetailShow', ['id' => $d->uuid])}}">
                                                            Lihat Detail <i class="bx bx-search"></i></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-warning round mr-1 mb-1 text-white"
                                                            data-toggle="modal" data-target="#modaledit"
                                                            data-id="{{$d->id}}" data-tahun="{{$d->tahun}}"
                                                            data-keterangan="{{$d->keterangan}}"><i
                                                                class="bx bxs-edit"></i></a>
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
@include('admin.kalender.tambah')
@include('admin.kalender.edit')
@include('admin.kalender.cetak')
@endsection

@section('script')

<script>
    $('#modaledit').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let tahun = button.data('tahun')
        let keterangan = button.data('keterangan')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #tahun').val(tahun)
        modal.find('.modal-body #keterangan').val(keterangan)
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
                    url: "{{url('/admin/kalender')}}" + '/' + id,
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

<script>
    $(document).on('click', '.active', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var tahun = $(this).data('tahun');
        swal.fire({
            title: "Tampilkan Tahun Ajaran " + tahun + " ?",
            icon: "warning",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            showCancelButton: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "{{url('/admin/kalender')}}" + '/' + id,
                    type: "POST",
                    data: {
                        '_method': 'PATCH',
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Tahun Ajaran ' + tahun + ' Berhasil Ditampilkan',
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
                    'Data Batal Ditampilkan',
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