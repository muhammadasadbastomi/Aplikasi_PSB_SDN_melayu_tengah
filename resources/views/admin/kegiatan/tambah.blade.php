<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Tambah Data</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <fieldset class="form-group">
                        <label for="kegiatan">Kegiatan</label>
                        <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan Kegiatan" value="{{old('kegiatan')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="tgl_mulai">Tanggal Mulai Kegiatan</label>
                        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="{{old('tgl_mulai')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="tgl_akhir">Tanggal Berakhir Kegiatan</label>
                        <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value="{{old('tgl_akhir')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">{{old('keterangan')}}</textarea>
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
