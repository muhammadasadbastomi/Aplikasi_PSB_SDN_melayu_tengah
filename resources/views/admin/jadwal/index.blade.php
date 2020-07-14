@extends('layouts/admin')

@section('title')
Data Jadwal
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Data Jadwal</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{ route('kelasIndex') }}"> Data Kelas </a>
                                </li>
                                <li class="breadcrumb-item active">Data Jadwal
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
                            <div class="card-header ">
                                <h3 class="float-left">Jadwal Kelas {{$kelas->kelas}}</h3>
                                <button type="button" class="btn btn-primary round mr-1 mb-1 float-right" data-id="{{$kelas->id}}" data-toggle="modal" data-target="#default"><i class="bx bx-plus-circle"></i> Tambah Jadwal</button>
                                <a target="_blank" type="button" href="{{ route('cetakJadwal', ['id' => $kelas->id]) }}" class="btn btn-outline-default text-white float-right"><i class="menu-livicon" data-icon="print-doc"></i>Cetak</a>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="card-content" style="margin-left:1%; margin-bottom:2%;">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>Senin</h5>
                                            <ul style="margin-left:-21px;">
                                                @foreach($senin as $d)
                                                @if($d->mapel->guru_id == 0)
                                                <li>
                                                    {{$d->mapel->mapel}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @else
                                                <li>
                                                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-sm-4">
                                            <h5>Selasa</h5>
                                            <ul style="margin-left:-21px;">
                                                @foreach($selasa as $d)
                                                @if($d->mapel->guru_id == 0)
                                                <li>
                                                    {{$d->mapel->mapel}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @else
                                                <li>
                                                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-sm-4">
                                            <h5>Rabu</h5>
                                            <ul style="margin-left:-21px;">
                                                @foreach($rabu as $d)
                                                @if($d->mapel->guru_id == 0)
                                                <li>
                                                    {{$d->mapel->mapel}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @else
                                                <li>
                                                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-sm-4">
                                            <h5>Kamis</h5>
                                            <ul style="margin-left:-21px;">
                                                @foreach($kamis as $d)
                                                @if($d->mapel->guru_id == 0)
                                                <li>
                                                    {{$d->mapel->mapel}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @else
                                                <li>
                                                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-sm-4">
                                            <h5>Jumat</h5>
                                            <ul style="margin-left:-21px;">
                                                @foreach($jumat as $d)
                                                @if($d->mapel->guru_id == 0)
                                                <li>
                                                    {{$d->mapel->mapel}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @else
                                                <li>
                                                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-sm-4">
                                            <h5>Sabtu</h5>
                                            <ul style="margin-left:-21px;">
                                                @foreach($sabtu as $d)
                                                @if($d->mapel->guru_id == 0)
                                                <li>
                                                    {{$d->mapel->mapel}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
                                                </li>
                                                @else
                                                <li>
                                                    {{$d->mapel->mapel}}, Guru {{$d->mapel->guru->nama}}
                                                    <a style="cursor: pointer;" class="delete badge badge-icon badge-light-danger" data-id="{{$d->uuid}}"><i class="bx bx-trash"></i></a>
                                                    <a style="cursor: pointer;" class="badge badge-icon badge-light-warning" data-toggle="modal" data-target="#modaledit" data-id="{{$d->id}}" data-hari="{{$d->hari}}" data-mapel="{{$d->mapel_id}}"><i class="bx bx-edit"></i></a>
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
                </div>
            </section>
        </div>
    </div>
</div>
@include('admin.jadwal.tambah')
@include('admin.jadwal.edit')
@endsection

@section('script')

<script>
    $('#default').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
    })

    $('#modaledit').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let hari = button.data('hari')
        let mapel = button.data('mapel')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #hari').val(hari)
        modal.find('.modal-body #mapel').val(mapel)
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
                    url: "{{url('/admin/jadwal')}}" + '/' + id,
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
