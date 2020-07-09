<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Buat Kalender Akademik</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <label>
                        <h5> <b>Semester Ganjil</b> </h5>
                    </label>
                    <fieldset class="form-group">
                        <label for="ganjil1">Dari Tanggal</label>
                        <input type="date" class="form-control" id="ganjil1" name="ganjil1" value="{{old('ganjil1')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="ganjil2">Sampai Tanggal</label>
                        <input type="date" class="form-control" id="ganjil2" name="ganjil2" value="{{old('ganjil2')}}">
                    </fieldset>
                    <hr style="margin-top:20px; margin-bottom:20px;">
                    <label>
                        <h5> <b>Semester Ganjil</b> </h5>
                    </label>
                    <fieldset class="form-group">
                        <label for="genap1">Dari Tanggal</label>
                        <input type="date" class="form-control" id="genap1" name="genap1" value="{{old('genap1')}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="genap2">Sampai Tanggal</label>
                        <input type="date" class="form-control" id="genap2" name="genap2" value="{{old('genap2')}}">
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Buat Kalender</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
