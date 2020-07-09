<h4 style="margin-bottom: 15px;">Berikut adalah syarat pendaftaran siswa baru yang harus dipenuhi :</h4>
<ol>
    @if(($data->ayah_id == !null) && ($data->ibu_id == !null) && ($data->alamat == !null) && ($data->agama == !null))
    <li>
        <a class="text-success">Mengisi Lengkap Biodata Siswa <i class="fa fa-check"></i></a> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
    </li>
    @else
    <li>
        Mengisi Lengkap Biodata Siswa <a href="{{route('biodataIndex')}}">Klik Disini</a> untuk mengisi Biodata. <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
    </li>
    @endif
    @if($data->akte == !null)
    <li>
        <a class="text-success">Fotocopy Akte kelahiran (Maksimal File 2 Mb)</a> <i class="fa fa-check"></i> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
    </li>
    @else
    <li>
        Fotocopy Akte kelahiran (Maksimal File 2 Mb) <button class="btn btn-sm btn-default text-primary" data-toggle="modal" data-target="#modalakte">Upload</button>
    </li>
    @endif
    @if($data->kk == !null)
    <li>
        <a class="text-success"> Fotocopy Kartu Keluarga (Maksimal File 2 Mb) <i class="fa fa-check"></i> </a> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
    </li>
    @else
    <li>
        Fotocopy Kartu Keluarga (Maksimal File 2 Mb) <button class="btn btn-sm btn-default text-primary" data-toggle="modal" data-target="#modalkk">Upload</button>
    </li>
    @endif
    @if(Auth::user()->photos == !null)
    <li>
        <a class="text-success"> Foto Siswa (Maksimal File 2 Mb) <i class="fa fa-check"></i> </a> <button class="btn btn-sm btn-default text-transparent"> &emsp; </button>
    </li>
    @else
    <li>
        Foto Siswa (Maksimal File 2 Mb) <button class="btn btn-sm btn-default text-primary" data-toggle="modal" data-target="#modalphotos">Upload</button>
    </li>
    @endif
</ol>

@if(($data->ayah_id == !null) && ($data->ibu_id == !null) && ($data->alamat == !null) && ($data->agama == !null) && ($data->akte == !null) && ($data->kk == !null) && (Auth::user()->photos == !null))
<form action="{{route('dashboardDaftar')}}" method="post">
    {{ method_field('put') }}
    @csrf
    <button style="margin-left: 25px;" type="submit" class="btn btn-danger">Klik Disini Untuk Mendaftar</button>
</form>
<br>
<br>
@endif

<h6><i><b>*Catatan : Tunggu konfirmasi admin paling lambat dua hari kerja untuk verifikasi file.</b></i></h6>
