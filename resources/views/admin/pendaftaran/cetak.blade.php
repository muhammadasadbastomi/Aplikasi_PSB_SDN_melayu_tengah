<!--Basic Modal Cetak Pendaftar -->
<div class="modal fade text-left" id="cetakpendaftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Cetak Laporan Pendaftar</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('cetakPendaftar') }}" target="_blank">
                    @csrf
                    <fieldset class="form-group">
                        <label for="start">Dari Tanggal</label>
                        <input type="date" class="form-control" name="start" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="end">Sampai Tanggal</label>
                        <input type="date" class="form-control" name="end" required>
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

<!--Basic Modal Cetak dinyatakan Lulus -->
<div class="modal fade text-left" id="cetaklulus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Cetak Laporan Pendaftar Yang Lulus</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('cetakLulus') }}" target="_blank">
                    @csrf
                    <fieldset class="form-group">
                        <label for="start">Dari Tanggal</label>
                        <input type="date" class="form-control" name="start" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="end">Sampai Tanggal</label>
                        <input type="date" class="form-control" name="end" required>
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
