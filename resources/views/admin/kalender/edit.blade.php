<!--Basic Modal -->
<div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Ubah Tanggal Kalender Akademik</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    {{ method_field('put') }}
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <fieldset class="form-group">
                        <label for="kegiatan">Kegiatan Kalender</label>
                        <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan Kegiatan Kalender Akademik" value="{{old('kegiatan')}}">
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
                        <button type="submit" class="btn btn-primary ml-1">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
