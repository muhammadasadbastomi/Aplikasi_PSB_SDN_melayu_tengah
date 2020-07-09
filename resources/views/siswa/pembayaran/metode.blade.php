<!--Basic Modal -->
<div class="modal fade text-left" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="myModalLabel1"> <b> Pilih Metode Pembayaran </b> </h2>
            </div>
            <div class="modal-body">
                <div class="col-md-6 float-left">
                    <form method="post">
                        @csrf
                        <input type="hidden" id="pembayaran" name="pembayaran" value="1">
                        <button type="submit" class="btn btn-info ml-1">Pembayaran Cicil</button>
                    </form>
                </div>
                <div class="col-md-6 float-right">
                    <form method="post">
                        @csrf
                        <input type="hidden" id="pembayaran" name="pembayaran" value="2">
                        <button type="submit" class="btn btn-warning ml-1">Pembayaran Cash</button>
                    </form>
                </div>
                <br>
                <br>
                <hr>
                <a href="{{route('dashboard')}}" style="width: 100%;" class="btn btn-danger">Kembali</a>
                <br>
            </div>
        </div>
    </div>
</div>
<!--end modal-->
