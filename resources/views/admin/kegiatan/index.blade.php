@extends('layouts/admin')

@section('title')
Data Kegiatan
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Data Kegiatan</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Data Kegiatan
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
                                    <button type="button" data-toggle="modal" data-target="#modalcetak"
                                        class="btn btn-outline-default text-white float-right"><i class="menu-livicon"
                                            data-icon="print-doc"></i>Cetak</button>
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Kegiatan</th>
                                                    <th class="text-center">Tanggal Kegiatan</th>
                                                    <th class="text-center">Keterangan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$d->kegiatan}}</td>
                                                    <td class="text-center">
                                                        {{Carbon\Carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}}
                                                        s/d
                                                        {{Carbon\Carbon::parse($d->tgl_akhir)->translatedFormat('d F Y')}}
                                                    </td>
                                                    <td class="text-center"> @if($d->keterangan == !null)
                                                        {{$d->keterangan}} @else - @endif</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-info round mr-1 mb-1 text-white"
                                                            data-toggle="modal" data-target="#modaledit"
                                                            data-id="{{$d->id}}" data-kegiatan="{{$d->kegiatan}}"
                                                            data-tgl_mulai="{{$d->tgl_mulai}}"
                                                            data-tgl_akhir="{{$d->tgl_akhir}}"
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
@include('admin.kegiatan.tambah')
@include('admin.kegiatan.edit')
@include('admin.kegiatan.cetak')
@endsection

@section('script')

<script>
    $('#modaledit').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let kegiatan = button.data('kegiatan')
        let tgl_mulai = button.data('tgl_mulai')
        let tgl_akhir = button.data('tgl_akhir')
        let keterangan = button.data('keterangan')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #kegiatan').val(kegiatan);
        modal.find('.modal-body #tgl_mulai').val(tgl_mulai);
        modal.find('.modal-body #tgl_akhir').val(tgl_akhir);
        modal.find('.modal-body #keterangan').val(keterangan);
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
                    url: "{{url('/admin/kegiatan')}}" + '/' + id,
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
