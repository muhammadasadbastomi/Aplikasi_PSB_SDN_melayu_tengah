<!--Basic Modal -->
<div class="modal fade text-left" id="cetak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Cetak Pembagian Kelas</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('cetakKelas') }}" target="_blank">
                    @csrf
                    <fieldset class="form-group">
                        <label for="filter">Masukkan Kelas</label>
                        <input type="text" class="form-control" name="filter" required>
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

<!--Siswa periode -->
<div class="modal fade text-left" id="cetaksiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Cetak Siswa Berdasarkan Tanggal Daftar Siswa</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="get" action="{{ route('cetakSiswa') }}" target="_blank">
                    {{ method_field('put') }}
                    @csrf
                    <fieldset class="form-group">
                        <label for="start">Masukkan Tanggal Awal</label>
                        <input type="date" class="form-control" name="start" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="start">Masukkan Tanggal Akhir</label>
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


<!--Siswa ditolak periode -->
<div class="modal fade text-left" id="cetaksiswaditolak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Cetak Siswa Ditolak Berdasarkan Tanggal Daftar Siswa</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="get" action="{{ route('cetakSiswaditolak') }}" target="_blank">
                    {{ method_field('put') }}
                    @csrf
                    <fieldset class="form-group">
                        <label for="start">Masukkan Tanggal Awal</label>
                        <input type="date" class="form-control" name="start" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="start">Masukkan Tanggal Akhir</label>
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
