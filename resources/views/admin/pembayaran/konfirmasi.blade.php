<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <!-- <button type="button" class="btn btn-primary round mr-1 mb-1" data-toggle="modal" data-target="#default"><i class="bx bx-plus-circle"></i></button> -->
                        <div class="table-responsive">
                            <table class="table zero-configuration nowrap">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">Metode Pembayaran</th>
                                        <th class="text-center">Tanggal Pembayaran</th>
                                        <th class="text-center">Cicilan</th>
                                        <th class="text-center">Nominal</th>
                                        <th class="text-center">Detail</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
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
                                        @if($d->cicilan_id == !null)
                                        <td class="text-center">Rp.
                                            {{number_format($d->siswa->pembayaran->cicilan->nominal, 0, ',', '.')}},-
                                        </td>
                                        @else
                                        <td class="text-center">Rp.
                                            {{number_format($d->siswa->pembayaran->nominal, 0, ',', '.')}},-</td>
                                        @endif
                                        <td class="text-center">
                                            <a class="btn btn-info round mr-1 mb-1 text-white"
                                                href="{{ route('pembayaranShow',['id' => $d->uuid]) }}"><i
                                                    class="bx bxs-search"></i></a>
                                        </td>
                                        <td class="text-center">
                                            @if($d->cicilan_id == !null)
                                            <form method="post">
                                                {{ method_field('patch') }}
                                                @csrf
                                                <input type="hidden" id="id" name="id" value="{{$d->id}}">
                                                <input type="hidden" id="cicilanke" name="cicilanke"
                                                    value="{{$d->cicilan->cicilan_ke}}">
                                                <button class="btn btn-success round mr-1 mb-1 text-white"> Konfirmasi
                                                </button>
                                            </form>
                                            @else
                                            <form method="post">
                                                {{ method_field('put') }}
                                                @csrf
                                                <input type="hidden" id="id" name="id" value="{{$d->id}}">
                                                <button class="btn btn-success round mr-1 mb-1 text-white"> Konfirmasi
                                                </button>
                                            </form>
                                            @endif
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