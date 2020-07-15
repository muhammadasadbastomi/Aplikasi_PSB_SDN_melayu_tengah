<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <button type="button" data-toggle="modal" data-target="#cetak"
                            class="btn btn-outline-default text-white float-right"><i class="menu-livicon"
                                data-icon="print-doc"></i>Cetak</button>
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">Metode Pembayaran</th>
                                        <th class="text-center">Tanggal Pembayaran</th>
                                        <th class="text-center">Cicilan</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lunas as $d)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">{{$d->siswa->user->name}}</td>
                                        <td class="text-center">@if($d->metode == 2) Pembayaran Cash @else Pembayaran
                                            Cicilan @endif</td>
                                        <td class="text-center">
                                            {{Carbon\Carbon::parse($d->tgl_bayar)->translatedFormat('d F Y')}}</td>
                                        @if($d->cicilan_id == !null)
                                        <td class="text-center">@if($d->cicilan->cicilan_ke == 3) Ke 2
                                            @elseif($d->cicilan_id == !null) Ke {{$d->cicilan->cicilan_ke}} @else -
                                            @endif</td>
                                        @else
                                        <td class="text-center"> - </td>
                                        @endif
                                        <td class="text-center text-success"> Lunas </td>
                                        <td class="text-center">
                                            <a class="btn btn-info round mr-1 mb-1 text-white"
                                                href="{{ route('pembayaranShow',['id' => $d->uuid]) }}"><i
                                                    class="bx bxs-search"></i></a>
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