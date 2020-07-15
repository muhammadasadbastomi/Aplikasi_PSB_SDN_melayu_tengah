@extends('layouts/admin')

@section('title')
Biodata Siswa
@endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Biodata Siswa</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Biodata Siswa
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('siswaIndex') }}" class="btn btn-primary"><i class="bx bx-arrow-back"></i>Kembali</a>
                            </div>
                            <div class="card-body" class="col-12">
                                <div>
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="row">

                                                <div class="col-sm">
                                                    <h3>Biodata {{ $data->user->name }}</h3>
                                                    <br>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-bold">Jenis Kelamin
                                                                &emsp14;
                                                            </td>
                                                            <td>: @if($data->jenis_kelamin == 1 )
                                                                Laki - Laki
                                                                @elseif($data->jenis_kelamin == 2 )Perempuan
                                                                @endif</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Alamat
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->alamat }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Agama
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->agama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tempat Lahir
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->tempat_lahir }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tanggal Lahir
                                                                &emsp14;&emsp14;&emsp14;
                                                            </td>
                                                            <td>: {{ $data->tgl_lahir }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Anak Ke
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->anak_ke }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Jumlah Saudara
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->jumlah_saudara }}</td>
                                                        </tr>
                                                    </table>
                                                    <br>
                                                </div>
                                                <div class="col-sm">
                                                    <h3>Biodata Ayah</h3>
                                                    <br>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-bold">Nama
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ayah->nama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Alamat
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ayah->alamat }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">No Telepon
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ayah->telp }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Agama
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ayah->agama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tempat Lahir
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ayah->tempat_lahir }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tanggal Lahir
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>:
                                                                {{ $data->ayah->tgl_lahir }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Pendidikan
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->ayah->pendidikan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Pekerjaan
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->ayah->pekerjaan }}</td>
                                                        </tr>
                                                    </table>


                                                </div>
                                                <div class="col-sm">
                                                    <h3>Biodata Ibu</h3>
                                                    <br>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-bold">Nama
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ibu->nama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Alamat
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ibu->alamat }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">No Telepon
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ibu->telp }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Agama
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ibu->agama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tempat Lahir
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->ibu->tempat_lahir }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tanggal Lahir
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>:
                                                                {{ $data->ibu->tgl_lahir }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Pendidikan
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->ibu->pendidikan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Pekerjaan
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->ibu->pekerjaan }}</td>
                                                        </tr>
                                                    </table>


                                                </div>
                                                <div class="col-sm">
                                                    <h3>Biodata Wali</h3>
                                                    <br>
                                                    @if($data->wali_id == null)
                                                    <h4>Tidak Ada Wali</h4>
                                                    @elseif($data->wali_id == !null)
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-bold">Nama
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->wali->nama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Jenis Kelamin
                                                                &emsp14;
                                                            </td>
                                                            <td>: @if($data->wali->jenis_kelamin == 1 )
                                                                Laki - Laki
                                                                @elseif($data->wali->jenis_kelamin == 2 )Perempuan
                                                                @endif</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Alamat
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->wali->alamat }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">No Telepon
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->wali->telp }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Agama
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->wali->agama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tempat Lahir
                                                                &emsp14;
                                                            </td>
                                                            <td>: {{ $data->wali->tempat_lahir }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tanggal Lahir
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->wali->tgl_lahir }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Pendidikan
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->wali->pendidikan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Pekerjaan
                                                                &emsp14;&emsp14;&emsp14;

                                                            </td>
                                                            <td>: {{ $data->wali->pekerjaan }}</td>
                                                        </tr>
                                                    </table>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body col-12">
                                <div class="row">
                                    <div class="col-sm">
                                        <h3>Bukti Pembayaran</h3>
                                        <br>
                                        @if($data->pembayaran_id == null)
                                        <h2 class="text-center">Belum Ada Pembayaran</h2>
                                        @elseif($data->pembayaran->cicilan_id == !null)
                                        <img style="height: 50%; width: 50%;" src="{{ url('images/biodata/'. $data->pembayaran->cicilan->bukti )}}" class="image-fluid" alt="responsive-image">
                                        @elseif($data->pembayaran->bukti == !null)
                                        <img style="height: 50%; width: 50%;" src="{{ url('images/biodata/'. $data->pembayaran->bukti )}}" class="image-fluid" alt="responsive-image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>

@endsection

{{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <form method="post" enctype="multipart/form-data">
        {{ method_field('patch') }}
@csrf
<h3>Biodata Wali</h3>
<small>Note : Tidak Perlu Diisi, Jika Tidak Ada Wali
    Siswa.</small>
<br>
<br>
<input type="hidden" id="id" name="id" value="{{ Auth()->user()->id }}">
<div class="form-group">
    <label for="nama_wali">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Masukkan Nama Lengkap..." value="@if($data->wali_id == !null){{ $data->wali->nama }}@endif">
</div>
<div class="form-group">
    <label for="jk_wali">Jenis Kelamin</label>
    <select class="form-control" id="jk_wali" name="jk_wali">
        <option value="1" @if(($data->wali_id == !null) &&
            ($data->wali->jenis_kelamin == 1)) selected @endif
            >Laki
            - Laki</option>
        <option value="2" @if(($data->wali_id == !null) &&
            ($data->wali->jenis_kelamin == 2)) selected @endif
            >Perempuan</option>
    </select>
</div>
<div class="form-group">
    <label for="alamat_wali">Alamat</label>
    <textarea class="form-control" id="alamat_wali" name="alamat_wali" placeholder="Masukkan Alamat...">@if($data->wali_id == !null){{$data->wali->alamat }}@endif</textarea>
</div>
<div class="form-group">
    <label for="telp_wali">Nomor Telepon</label>
    <input type="text" class="form-control" id="telp_wali" name="telp_wali" placeholder="Masukkan Nomor Telepon..." value="@if($data->wali_id == !null){{ $data->wali->telp }}@endif">
</div>
<div class="form-group">
    <label for="agama_wali">Agama</label>
    <input type="text" class="form-control" id="agama_wali" name="agama_wali" placeholder="Masukkan Agama..." value="@if($data->wali_id == !null){{ $data->wali->agama }}@endif">
</div>
<div class="form-group">
    <label for="tempat_lahir_wali">Tempat Lahir</label>
    <textarea class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali" placeholder="Masukkan Tempat Lahir...">@if($data->wali_id == !null){{ $data->wali->tempat_lahir }}@endif</textarea>
</div>
<div class="form-group">
    <label for="tgl_lahir_wali">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl_lahir_wali" name="tgl_lahir_wali" value="@if($data->wali_id == !null){{$data->wali->tgl_lahir}}@endif">
</div>
<div class="form-group">
    <label for="pendidikan_wali">Pendidik Terakhir</label>
    <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" placeholder="Masukkan Pendidik Terakhir..." value="@if($data->wali_id == !null){{ $data->wali->pendidikan }}@endif">
</div>
<div class="form-group">
    <label for="pekerjaan_wali">Pekerjaan</label>
    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan..." value="@if($data->wali_id == !null){{ $data->wali->pekerjaan }}@endif">
</div>
<div class="form-group">
    <label for="foto_wali">Foto</label>
    <input type="file" name="foto_wali" id="foto_wali" class="form-control" value="@if($data->wali_id == !null){{ $data->wali->foto }}@endif">
</div>
<div class="modal-footer">
    <button type="reset" class="btn btn-light-secondary">Reset</button>
    <button type="submit" class="btn btn-primary ml-1">Update</button>
</div>
</form>
</div>
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <form method="post" enctype="multipart/form-data">
        {{ method_field('put') }}
        @csrf
        <input type="hidden" id="id" name="id" value="{{ Auth()->user()->id }}">
        <h3>Biodata Ayah</h3>
        <br>
        <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Lengkap..." value="@if($data->ayah_id == !null){{ $data->ayah->nama }}@endif">
        </div>
        <div class="form-group">
            <label for="alamat_ayah">Alamat</label>
            <textarea class="form-control" id="alamat_ayah" name="alamat_ayah" placeholder="Masukkan Alamat...">@if($data->ayah_id == !null){{$data->ayah->alamat }}@endif</textarea>
        </div>
        <div class="form-group">
            <label for="telp_ayah">Nomor Telepon</label>
            <input type="text" class="form-control" id="telp_ayah" name="telp_ayah" placeholder="Masukkan Nomor Telepon..." value="@if($data->ayah_id == !null){{ $data->ayah->telp }}@endif">
        </div>
        <div class="form-group">
            <label for="agama_ayah">Agama</label>
            <input type="text" class="form-control" id="agama_ayah" name="agama_ayah" placeholder="Masukkan Agama..." value="@if($data->ayah_id == !null){{ $data->ayah->agama }}@endif">
        </div>
        <div class="form-group">
            <label for="tempat_lahir_ayah">Tempat Lahir</label>
            <textarea class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir...">@if($data->ayah_id == !null){{ $data->ayah->tempat_lahir }}@endif</textarea>
        </div>
        <div class="form-group">
            <label for="tgl_lahir_ayah">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah" value="@if($data->ayah_id == !null){{$data->ayah->tgl_lahir}}@endif">
        </div>
        <div class="form-group">
            <label for="pendidikan_ayah">Pendidik Terakhir</label>
            <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" placeholder="Masukkan Pendidik Terakhir..." value="@if($data->ayah_id == !null){{ $data->ayah->pendidikan }}@endif">
        </div>
        <div class="form-group">
            <label for="pekerjaan_ayah">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan..." value="@if($data->ayah_id == !null){{ $data->ayah->pekerjaan }}@endif">
        </div>
        <div class="form-group">
            <label for="foto_ayah">Foto</label>
            <input type="file" name="foto_ayah" id="foto_ayah" class="form-control" value="@if($data->ayah_id == !null){{ $data->ayah->foto }}@endif">
        </div>
        <br>
        <hr style="border: 2px solid; border-radius: 3px;">
        <br>
        <h3>Biodata Ibu</h3>
        <br>
        <div class="form-group">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Lengkap..." value="@if($data->ibu_id == !null){{ $data->ibu->nama }}@endif">
        </div>
        <div class="form-group">
            <label for="alamat_ibu">Alamat</label>
            <textarea class="form-control" id="alamat_ibu" name="alamat_ibu" placeholder="Masukkan Alamat...">@if($data->ibu_id == !null){{$data->ibu->alamat }}@endif</textarea>
        </div>
        <div class="form-group">
            <label for="telp_ibu">Nomor Telepon</label>
            <input type="text" class="form-control" id="telp_ibu" name="telp_ibu" placeholder="Masukkan Nomor Telepon..." value="@if($data->ibu_id == !null){{ $data->ibu->telp }}@endif">
        </div>
        <div class="form-group">
            <label for="agama_ibu">Agama</label>
            <input type="text" class="form-control" id="agama_ibu" name="agama_ibu" placeholder="Masukkan Agama..." value="@if($data->ibu_id == !null){{ $data->ibu->agama }}@endif">
        </div>
        <div class="form-group">
            <label for="tempat_lahir_ibu">Tempat Lahir</label>
            <textarea class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir...">@if($data->ibu_id == !null){{ $data->ibu->tempat_lahir }}@endif</textarea>
        </div>
        <div class="form-group">
            <label for="tgl_lahir_ibu">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu" value="@if($data->ibu_id == !null){{$data->ibu->tgl_lahir}}@endif">
        </div>
        <div class="form-group">
            <label for="pendidikan_ibu">Pendidik Terakhir</label>
            <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" placeholder="Masukkan Pendidik Terakhir..." value="@if($data->ibu_id == !null){{ $data->ibu->pendidikan }}@endif">
        </div>
        <div class="form-group">
            <label for="pekerjaan_ibu">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan..." value="@if($data->ibu_id == !null){{ $data->ibu->pekerjaan }}@endif">
        </div>
        <div class="form-group">
            <label for="foto_ibu">Foto</label>
            <input type="file" name="foto_ibu" id="foto_ibu" class="form-control" value="@if($data->ibu_id == !null){{ $data->ibu->foto }}@endif">
        </div>

        <div class="modal-footer">
            <button type="reset" class="btn btn-light-secondary">Reset</button>
            <button type="submit" class="btn btn-primary ml-1">Update</button>
        </div>
    </form>
</div> --}}
