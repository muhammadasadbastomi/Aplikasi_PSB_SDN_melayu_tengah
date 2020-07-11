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
                    <label for="kode_kelas">Kode Kelas</label>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" placeholder="Masukkan Kode Kelas" value="{{old('kode_kelas')}}">
                    </div>
                    <label for="kelas">Nama Kelas</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="kelas">Kelas</span>
                        </div>
                        <input type="text" class="form-control" name="kelas" id="kelas" aria-describedby="kelas" placeholder="Masukkan Nama Kelas" value="{{old('kelas')}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
