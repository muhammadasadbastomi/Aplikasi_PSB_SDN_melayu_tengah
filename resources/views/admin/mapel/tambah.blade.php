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
                        <label for="kode_mapel">Kode Mapel</label>
                        <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" placeholder="Masukkan Kode Mapel" value="{{old('kode_mapel')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="mapel">Nama Mapel</label>
                        <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukkan Nama Mapel" value="{{old('mapel')}}">
                    </fieldset>
                    <label for="mapel">Guru Pengajar</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="guru" name="guru">
                            <option value="0" selected>Pilih Guru</option>
                            @foreach($guru as $d)
                            <option value="{{$d->id}}" @if (old('guru')==$d->id ) {{ 'selected' }} @endif>{{$d->nama}}</option>
                            @endforeach
                        </select>
                        <small>Note: Pilih Guru Jika ingin Memasukkan Guru Pengajar</small>
                    </fieldset>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
