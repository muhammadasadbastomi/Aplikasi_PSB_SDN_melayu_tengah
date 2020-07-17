<!--Basic Modal -->
<div class="modal fade text-left" id="modalcetak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Cetak Kalender Akademik</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="get" action="{{ route('cetakKalender') }}" target="_blank">
                    @csrf
                    <fieldset class="form-group">
                        <label for="start">Pilih Tahun Akademik</label>
                        <select name="kalender" class="form-control" id="basicSelect">
                            @foreach ($data as $d)
                            <option value="{{$d->id}}">{{ $d->tahun }}</option>
                            @endforeach
                        </select>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Cetak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
