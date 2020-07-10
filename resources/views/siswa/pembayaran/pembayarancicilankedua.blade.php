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
                            @if(($data->pembayaran->status == 3) && ($data->pembayaran->cicilan->cicilan_ke == 2))
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <h2>Cicilan Maksimal 2 Kali Pembayaran</h2>
                                    <h5> <b> Pembayaran Kedua yang harus Dibayarkan Adalah : Rp. 155.000,- </b> </h5>
                                    <h5> <b> Batas Waktu Pembayaran {{Carbon\Carbon::parse($expired)->translatedFormat('d F Y')}} </b> </h5>
                                    <br>
                                    <form method="POST" enctype="multipart/form-data">
                                        {{ method_field('patch') }}
                                        @csrf
                                        <input type="hidden" id="cicilan" name="cicilan" value="3">
                                        <fieldset class="form-group">
                                            <label for="name">Nama Siswa</label>
                                            <input type="text" id="name" class="form-control" readonly value="{{ Auth::user()->name }}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="nominal">Nominal</label>
                                            <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukkan Nominal Harga Bayar" value="{{old('nominal')}}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="terbilang">Terbilang</label>
                                            <input type="text" class="form-control" id="terbilang" name="terbilang" placeholder="Masukkan Terbilang Harga Bayar" value="{{old('terbilang')}}">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="bukti">Bukti Pembayara</label>
                                            <input type="file" class="form-control" id="bukti" name="bukti" value="{{old('bukti')}}">
                                        </fieldset>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-light-secondary">Reset</button>
                                            <button type="submit" class="btn btn-primary ml-1">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @elseif(($data->pembayaran->status == 2) && ($data->pembayaran->cicilan->cicilan_ke == 2))
                            <h2>Silahkan Tunggu Konfirmasi Admin</h2>
                            @else
                            @include('siswa.pembayaran.tidaktersedia')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--/ content -->
        </div>
    </div>
</div>
