<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <button type="button" data-toggle="modal" data-target="#cetaklulus"
                        class="btn btn-outline-default text-white float-right"><i class="menu-livicon"
                            data-icon="print-doc"></i>Cetak</button>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lulus as $d)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$d->user->name}}</td>
                                        <td class="text-center">{{$d->user->email}}</td>
                                        <td class="text-center">@if($d->status == 1) <a class="text-primary">Belum
                                                dikonfirmasi</a> @elseif($d->status == 2) <a class="text-success">Sudah
                                                dikonfirmasi</a> @elseif($d->status == 3) <a
                                                class="text-danger">Pendaftaran ditolak</a> @else <a
                                                class="text-info">Telah Lulus</a> @endif</td>
                                        <td class="text-center">
                                            <a href="{{ route('siswaShow',['id' => $d->uuid]) }}"
                                                class="btn btn-info round mr-1 mb-1 text-white">
                                                <i class="bx bx-search"></i>
                                                Lihat</a>
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
