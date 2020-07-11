<!--Basic Modal -->
<div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Ubah Jadwal</h3>
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
                        <label for="hari">Pilih Hari</label>
                        <select class="form-control" id="hari" name="hari">
                            <option value="1" @if (old('hari')=='1' ) {{ 'selected' }} @endif>Senin</option>
                            <option value="2" @if (old('hari')=='2' ) {{ 'selected' }} @endif>Selasa</option>
                            <option value="3" @if (old('hari')=='3' ) {{ 'selected' }} @endif>Rabu</option>
                            <option value="4" @if (old('hari')=='4' ) {{ 'selected' }} @endif>Kamis</option>
                            <option value="5" @if (old('hari')=='5' ) {{ 'selected' }} @endif>Jumat</option>
                            <option value="6" @if (old('hari')=='6' ) {{ 'selected' }} @endif>Sabtu</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="mapel">Pilih Mata Pelajaran</label>
                        <select class="form-control" id="mapel" name="mapel">
                            @foreach($mapel as $d)
                            <option value="{{$d->id}}" @if (old('mapel')==$d->id ) {{ 'selected' }} @endif>{{$d->mapel}}</option>
                            @endforeach
                        </select>
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
