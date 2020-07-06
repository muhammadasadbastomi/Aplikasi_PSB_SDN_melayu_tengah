<!--Basic Modal -->
<div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                    {{ method_field('put') }}
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <fieldset class="form-group">
                        <label for="kode_mapel">Kode Mapel</label>
                        <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" placeholder="Masukkan Kode Mapel" value="{{old('kode_mapel')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="mapel">Nama Mapel</label>
                        <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukkan Nama Mapel" value="{{old('mapel')}}">
                    </fieldset>
                    <label for="guru">Guru Pengajar</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="guru" name="guru">
                            @foreach($guru as $d)
                            <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                            <option value="0">Tidak Ada Guru Mengajar</option>
                        </select>
                    </fieldset>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
