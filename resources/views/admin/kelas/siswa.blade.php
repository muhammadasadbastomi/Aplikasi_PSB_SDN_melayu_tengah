<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg    modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel1">Tambah Siswa Pada Kelas {{$kelas->kelas}}</h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{$kelas->id}}">
                    <table class="table zero-configuration">
                        <thead>
                            <tr>
                                <th><input class="check_all" type="checkbox" onchange="checkAll(this)"></th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Orangtua</th>
                                <th class="text-center">Wali</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $d)
                            <tr>
                                <td><input type="checkbox" name="siswa_id[]" value="{{$d->id}}" class="case"></td>
                                <td class="text-center">{{$d->user->name}}</td>
                                <td class="text-center">{{$d->ayah->nama}} & {{$d->ibu->nama}}</td>
                                <td class="text-center">@if($d->wali_id == null) - @else {{$d->wali->nama}} @endif</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
