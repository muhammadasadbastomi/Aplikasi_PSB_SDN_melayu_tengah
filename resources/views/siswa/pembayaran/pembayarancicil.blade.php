<div class="card-body card-dashboard">
    <div class="table-responsive">
        <h2>Cicilan Maksimal 2 Kali Pembayaran</h2>
        <h5> <b> Pembayaran Pertama yang harus Dibayarkan Adalah : Rp. 155.000,- </b> </h5>
        <br>
        <form method="POST" enctype="multipart/form-data">
            {{ method_field('patch') }}
            @csrf
            <input type="hidden" name="cicilan" id="cicilan" value="1">
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
