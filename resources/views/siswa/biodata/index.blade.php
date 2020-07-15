@extends('layouts/admin')

@section('title')
Isi Biodata
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
                                <li class="breadcrumb-item active">Isi Biodata
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Biodata Siswa</a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Wali</a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Orangtua</a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <form method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <h3>Biodata Siswa</h3>
                                                    <br>
                                                    <input type="hidden" id="id" name="id" value="{{ Auth()->user()->id }}">
                                                    <div class="form-group">
                                                        <label for="name">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Lengkap..." value="{{ Auth()->user()->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                            <option value="1" @if($data->jenis_kelamin == 1 ) selected @endif >Laki - Laki</option>
                                                            <option value="2" @if($data->jenis_kelamin == 2 ) selected @endif >Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat...">{{ $data->alamat }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="agama">Agama</label>
                                                        <select class="form-control" id="agama" name="agama">
                                                            <option value="1" @if($data->agama == 1 ) selected @endif @if(($data->agama == !null) && ($data->agama == 1)) selected @endif >Islam</option>
                                                            <option value="2" @if($data->agama == 2 ) selected @endif @if(($data->agama == !null) && ($data->agama == 2)) selected @endif >Kristen Protestan</option>
                                                            <option value="3" @if($data->agama == 3 ) selected @endif @if(($data->agama == !null) && ($data->agama == 3)) selected @endif >Katolik</option>
                                                            <option value="4" @if($data->agama == 4 ) selected @endif @if(($data->agama == !null) && ($data->agama == 4)) selected @endif >Hindu</option>
                                                            <option value="5" @if($data->agama == 5 ) selected @endif @if(($data->agama == !null) && ($data->agama == 5)) selected @endif >Buddha</option>
                                                            <option value="6" @if($data->agama == 6 ) selected @endif @if(($data->agama == !null) && ($data->agama == 6)) selected @endif >Kong Hu Cu</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tmp_lahir">Tempat Lahir</label>
                                                        <textarea class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir...">{{ $data->tempat_lahir }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="anak_ke">Anak Ke</label>
                                                        <input type="text" class="form-control" id="anak_ke" name="anak_ke" placeholder="Masukkan Anak Ke..." value="{{ $data->anak_ke }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jmlh_saudara">Jumlah Saudara</label>
                                                        <input type="text" class="form-control" id="jmlh_saudara" name="jmlh_saudara" placeholder="Masukkan Jumlah Saudara..." value="{{ $data->jumlah_saudara }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="photos">Foto Siswa</label>
                                                        <input type="file" class="form-control" id="photos" name="photos" value="{{ Auth()->user()->photos }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="akte">Foto Copy Akte Kelahiran</label>
                                                        <input type="file" name="akte" id="akte" class="form-control" value="{{ $data->akte }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kartu_keluarga">Foto Copy Kartu Keluarga</label>
                                                        <input type="file" class="form-control" id="kartu_keluarga" name="kartu_keluarga" value="{{ $data->kk }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-light-secondary">Reset</button>
                                                        <button type="submit" class="btn btn-primary ml-1">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <form method="post" enctype="multipart/form-data">
                                                    {{ method_field('patch') }}
                                                    @csrf
                                                    <h3>Biodata Wali</h3>
                                                    <small>Note : Tidak Perlu Diisi, Jika Tidak Ada Wali Siswa.</small>
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
                                                            <option value="1" @if(($data->wali_id == !null) && ($data->wali->jenis_kelamin == 1)) selected @endif >Laki - Laki</option>
                                                            <option value="2" @if(($data->wali_id == !null) && ($data->wali->jenis_kelamin == 2)) selected @endif >Perempuan</option>
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
                                                        <select class="form-control" id="agama_wali" name="agama_wali">
                                                            <option value="1" @if(($data->wali->agama == !null) && ($data->wali->agama == 1)) selected @endif >Islam</option>
                                                            <option value="2" @if(($data->wali->agama == !null) && ($data->wali->agama == 2)) selected @endif >Kristen Protestan</option>
                                                            <option value="3" @if(($data->wali->agama == !null) && ($data->wali->agama == 3)) selected @endif >Katolik</option>
                                                            <option value="4" @if(($data->wali->agama == !null) && ($data->wali->agama == 4)) selected @endif >Hindu</option>
                                                            <option value="5" @if(($data->wali->agama == !null) && ($data->wali->agama == 5)) selected @endif >Buddha</option>
                                                            <option value="6" @if(($data->wali->agama == !null) && ($data->wali->agama == 6)) selected @endif >Kong Hu Cu</option>
                                                        </select>
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
                                                        <select class="form-control" id="agama_ayah" name="agama_ayah">
                                                            <option value="1" @if(($data->ayah_id == !null) && ($data->ayah->agama == 1)) selected @endif >Islam</option>
                                                            <option value="2" @if(($data->ayah_id == !null) && ($data->ayah->agama == 2)) selected @endif >Kristen Protestan</option>
                                                            <option value="3" @if(($data->ayah_id == !null) && ($data->ayah->agama == 3)) selected @endif >Katolik</option>
                                                            <option value="4" @if(($data->ayah_id == !null) && ($data->ayah->agama == 4)) selected @endif >Hindu</option>
                                                            <option value="5" @if(($data->ayah_id == !null) && ($data->ayah->agama == 5)) selected @endif >Buddha</option>
                                                            <option value="6" @if(($data->ayah_id == !null) && ($data->ayah->agama == 6)) selected @endif >Kong Hu Cu</option>
                                                        </select>
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
                                                        <select class="form-control" id="agama_ibu" name="agama_ibu">
                                                            <option value="1" @if(($data->ibu_id == !null) && ($data->ibu->agama == 1)) selected @endif >Islam</option>
                                                            <option value="2" @if(($data->ibu_id == !null) && ($data->ibu->agama == 2)) selected @endif >Kristen Protestan</option>
                                                            <option value="3" @if(($data->ibu_id == !null) && ($data->ibu->agama == 3)) selected @endif >Katolik</option>
                                                            <option value="4" @if(($data->ibu_id == !null) && ($data->ibu->agama == 4)) selected @endif >Hindu</option>
                                                            <option value="5" @if(($data->ibu_id == !null) && ($data->ibu->agama == 5)) selected @endif >Buddha</option>
                                                            <option value="6" @if(($data->ibu_id == !null) && ($data->ibu->agama == 6)) selected @endif >Kong Hu Cu</option>
                                                        </select>
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
                                            </div>
                                        </div>
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

@endsection
