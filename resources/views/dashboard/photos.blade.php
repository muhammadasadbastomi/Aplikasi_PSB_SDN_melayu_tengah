<!--Basic Modal -->
<div class="modal fade text-left" id="modalphotos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Upload Foto Siswa</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{auth::user()->id}}">
                    <fieldset class="form-group">
                        <label for="photos">Foto Siswa</label>
                        <input type="file" class="form-control" id="photos" name="photos">
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
