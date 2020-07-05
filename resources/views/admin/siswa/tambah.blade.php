<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Basic Modal</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <fieldset class="form-group">
                        <label for="basicInput">Basic Input</label>
                        <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                    </fieldset>
                    <h6>Basic Select</h6>
                    <fieldset class="form-group">
                        <select class="form-control" id="basicSelect">
                            <option>IT</option>
                            <option>Blade Runner</option>
                            <option>Thor Ragnarok</option>
                        </select>
                    </fieldset>
                    <h6 class="form-group">Alamat</h6>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                    </fieldset>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1" data-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
