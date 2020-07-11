@extends('layouts/admin')

@section('title')
Pembayaran Pendaftaran
@endsection

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
@if(($data->status == 2) or ($data->status == 4))
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Pembayaran Pendaftaran</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Pembayaran Pendaftaran
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            @if($data->pembayaran_id == null)
                            @include('siswa.pembayaran.metode')
                            @elseif($data->pembayaran->metode == 2)
                            @include('siswa.pembayaran.cash')
                            @elseif('siswa.pembayaran.metode == 1')
                            @include('siswa.pembayaran.cicil')
                            @else
                            Tidak Ada PEmbayaran bos
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--/ content -->
        </div>
    </div>
</div>
@elseif(($data->status == 5) or ($data->status == 6))

@if(($data->pembayaran->metode == 1) && ($data->pembayaran->cicilan->cicilan_ke == 2))
@include('siswa.pembayaran.pembayarancicilankedua')
@elseif(($data->pembayaran->metode == 1) && ($data->pembayaran->status == 2) && ($data->pembayaran->cicilan->cicilan_ke == 3))
@include('siswa.pembayaran.tunggu')
@elseif($data->pembayaran->metode == 2)
@include('siswa.pembayaran.tidaktersedia')
@else
@include('siswa.pembayaran.tidaktersedia')
@endif

@else
@include('siswa.pembayaran.kembali')
@endif
@endsection

@section('script')

<script>
    $('#mymodal').modal('show');
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
                    url: "{{url('/admin/guru/delete')}}" + '/' + id,
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
