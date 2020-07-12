<!--Basic Modal -->
<div class="modal fade text-left" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Tambah Tanggal Kalender Akademik</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <fieldset class="form-group">
                        <label for="kalender">Kegiatan Kalender</label>
                        <input type="text" class="form-control" id="kalender" name="kalender" placeholder="Masukkan Kegiatan Kalender Akademik" value="{{old('kalender')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="tgl_mulai">Dari Tanggal</label>
                        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="{{old('tgl_mulai')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="tgl_akhir">Sampai Tanggal</label>
                        <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value="{{old('tgl_akhir')}}">
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
