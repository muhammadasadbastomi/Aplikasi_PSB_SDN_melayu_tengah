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
                        <label for="kode_kelas">Kode Kelas</label>
                        <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" placeholder="Masukkan Kode Kelas" value="{{old('kode_kelas')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas Lengkap" value="{{old('kelas')}}">
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
