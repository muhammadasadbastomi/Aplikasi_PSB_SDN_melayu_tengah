<!--Basic Modal -->
<div class="modal fade text-left" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="myModalLabel1"> <b> Pilih Metode Pembayaran </b> </h2>
            </div>
            <div class="modal-body">
                <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-warning swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                    <div class="swal2-header">
                        <ul class="swal2-progress-steps" style="display: none;"></ul>
                        <div class="swal2-icon swal2-error" style="display: none;"></div>
                        <div class="swal2-icon swal2-question" style="display: none;"></div>
                        <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                            <div class="swal2-icon-content">!</div>
                        </div>
                        <div class="swal2-icon swal2-info" style="display: none;"></div>
                        <div class="swal2-icon swal2-success" style="display: none;"></div><img class="swal2-image" style="display: none;">
                        <h2 class="swal2-title" id="swal2-title" style="display: flex;">Pilih Metode Pembayaran</h2><button class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
                    </div>
                    <div class="swal2-content">
                        <!-- <div id="swal2-content" class="swal2-html-container" style="display: block;">You won't be able to revert this!</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"> -->
                        <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select>
                        <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea>
                        <div class="swal2-validation-message" id="swal2-validation-message"></div>
                    </div>
                    <div class="swal2-actions">
                        <form method="post">
                            @csrf
                            <input type="hidden" id="pembayaran" name="pembayaran" value="1">
                            <button type="submit" class="swal2-confirm swal2-styled btn-info" aria-label="" style="display: inline-block; background-color: rgb(48, 133, 214); border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">Pembayaran Cicilan</button>
                        </form>
                        <form method="post">
                            @csrf
                            <input type="hidden" id="pembayaran" name="pembayaran" value="2">
                            <button type="submit" class="swal2-confirm swal2-styled btn-success">Pembayaran Cash</button>
                        </form>
                    </div>
                    <a href="{{route('dashboard')}}" style="width: 95%; margin-left:10px;" class="swal2-cancel swal2-styled btn-danger text-center" aria-label="" style="display: inline-block;">Kembali</a>
                    <div class="swal2-footer" style="display: none;">
                    </div>
                </div>
                <div class="swal2-timer-progress-bar-container">
                    <div class="swal2-timer-progress-bar" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end modal-->
