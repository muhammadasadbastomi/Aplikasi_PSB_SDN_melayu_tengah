<!--Basic Modal -->
<div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Edit Data</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    {{ method_field('put') }}
                    @csrf
                    <fieldset class="form-group">
                        <label for="nip">NIP</label>
                        <input type="hidden" id="id" name="id">
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" value="{{old('nip')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{old('nama')}}">
                    </fieldset>
                    <label>Jenis Kelamin</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="jk" name="jenis_kelamin">
                            <option value="1" @if (old('jenis_kelamin')=='1' ) {{ 'selected' }} @endif>Laki-Laki</option>
                            <option value="2" @if (old('jenis_kelamin')=='2' ) {{ 'selected' }} @endif>Perempuan</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control" id="agama" name="agama">
                            <option value="1" @if (old('agama')=='1' ) {{'selected'}} @endif>Islam</option>
                            <option value="2" @if (old('agama')=='2' ) {{'selected'}} @endif>Kristen Protestan</option>
                            <option value="3" @if (old('agama')=='3' ) {{'selected'}} @endif>Katolik</option>
                            <option value="4" @if (old('agama')=='4' ) {{'selected'}} @endif>Hindu</option>
                            <option value="5" @if (old('agama')=='5' ) {{'selected'}} @endif>Buddha</option>
                            <option value="6" @if (old('agama')=='6' ) {{'selected'}} @endif>Kong Hu Cu</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan Telepon" value="{{old('telp')}}">
                    </fieldset>
                    <h6 class="form-group">Alamat</h6>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Textarea">{{old('alamat')}}</textarea>
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
