<?php

namespace App\Http\Controllers;

use App\Ayah;
use App\Ibu;
use App\Pendaftaran;
use App\Siswa;
use App\User;
use App\Wali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    //Route Admin Pendaftaran
    public function index()
    {
        $data = Pendaftaran::latest()->get();

        return view('admin.siswa.index', compact('data'));
    }

    public function show($id)
    {
        $data = Pendaftaran::where('uuid', $id)->first();

        return view('admin.siswa.show', compact('data'));
    }

    public function konfirmasi($id)
    {
        $data = Pendaftaran::where('uuid', $id)->first();

        $data->status = 2;
        $data->update();

        return back()->with('success', 'Data Berhasil dikonfirmasi');
    }

    public function tolak($id)
    {
        $data = Pendaftaran::where('uuid', $id)->first();

        $data->status = 3;
        $data->update();

        return back()->with('success', 'Data Berhasil ditolak');
    }

    //Route Siswa Biodata
    public function biodata()
    {
        $user = User::find(Auth::user()->id);
        $data = Siswa::where('user_id', $user->id)->first();

        return view('siswa.biodata.index', compact('data'));
    }

    public function update(Request $request)
    {
        $siswa = Siswa::where('user_id', $request->id)->first();

        $messages = [
            'required' => 'Nama harus diisi.',
            'mimes' => 'Photo harus berupa JPG, PNG, GIF',
            'image' => 'Photo harus berupa Image!',
            'file' => 'Photo harus berupa File!',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'akte' => 'file|image|mimes:jpeg,png,gif',
            'kk' => 'file|image|mimes:jpeg,png,gif',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $user = User::findorfail($request->id);
        $user->name = $request->name;
        $user->update();

        $data = Siswa::findorfail($siswa->id);
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->tempat_lahir = $request->tmp_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->anak_ke = $request->anak_ke;
        $data->jumlah_saudara = $request->jmlh_saudara;
        if ($request->akte) {
            $request->file('akte')->move('images/biodata/', $request->file('akte')->getClientOriginalName());
            $data->akte = $request->file('akte')->getClientOriginalName();
        } elseif (!$request->akte) {
            $data->akte = $data->akte;
        }
        if ($request->kartu_keluarga) {
            $request->file('kartu_keluarga')->move('images/biodata/', $request->file('kartu_keluarga')->getClientOriginalName());
            $data->kk = $request->file('kartu_keluarga')->getClientOriginalName();
        } elseif (!$request->kartu_keluarga) {
            $data->kk = $data->kk;
        }
        $data->update();

        return back()->with('success', 'Data Berhasil Diupdate');
    }

    public function wali(Request $request)
    {
        $siswa = Siswa::where('user_id', $request->id)->first();

        $messages = [
            'required' => '::attribute harus diisi.',
            'mimes' => 'Photo harus berupa JPG, PNG, GIF',
            'foto' => 'Photo harus berupa Image!',
            'file' => 'Photo harus berupa File!',
        ];
        $validator = Validator::make($request->all(), [
            'nama_wali' => 'required',
            'foto_wali' => 'file|image|mimes:jpeg,png,gif',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        if ($siswa->wali_id == null) {
            $wali = new Wali;
            $wali->nama = $request->nama_wali;
            $wali->jenis_kelamin = $request->jk_wali;
            $wali->alamat = $request->alamat_wali;
            $wali->telp = $request->telp_wali;
            $wali->agama = $request->agama_wali;
            $wali->tempat_lahir = $request->tempat_lahir_wali;
            $wali->tgl_lahir = $request->tgl_lahir_wali;
            $wali->pendidikan = $request->pendidikan_wali;
            $wali->pekerjaan = $request->pekerjaan_wali;
            if ($request->foto_wali) {
                $request->file('foto_wali')->move('images/biodata/', $request->file('foto_wali')->getClientOriginalName());
                $wali->foto = $request->file('foto_wali')->getClientOriginalName();
            } elseif (!$request->foto_wali) {
                $wali->foto = $wali->foto;
            }
            $wali->save();

            $update_siswa = Siswa::findorfail($siswa->id);
            $update_siswa->wali_id = $wali->id;
            $update_siswa->update();
        } else {
            $data = Wali::findorfail($siswa->wali_id);
            $data->nama = $request->nama_wali;
            $data->jenis_kelamin = $request->jk_wali;
            $data->alamat = $request->alamat_wali;
            $data->telp = $request->telp_wali;
            $data->agama = $request->agama_wali;
            $data->tempat_lahir = $request->tempat_lahir_wali;
            $data->tgl_lahir = $request->tgl_lahir_wali;
            $data->pendidikan = $request->pendidikan_wali;
            $data->pekerjaan = $request->pekerjaan_wali;
            if ($request->foto_wali) {
                $request->file('foto_wali')->move('images/biodata/', $request->file('foto_wali')->getClientOriginalName());
                $data->foto = $request->file('foto_wali')->getClientOriginalName();
            } elseif (!$request->foto_wali) {
                $data->foto = $data->foto;
            }
            $data->update();
        }

        return back()->with('success', 'Data Berhasil Diupdate');
    }

    public function orangtua(Request $request)
    {
        $siswa = Siswa::where('user_id', $request->id)->first();

        $messages = [
            'required' => '::attribute harus diisi.',
            'mimes' => 'Photo harus berupa JPG, PNG, GIF',
            'foto' => 'Photo harus berupa Image!',
            'file' => 'Photo harus berupa File!',
        ];
        $validator = Validator::make($request->all(), [
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'foto_ayah' => 'file|image|mimes:jpeg,png,gif',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        if ($siswa->ayah_id == null && $siswa->ibu_id == null) {
            $ayah = new Ayah;
            $ayah->nama = $request->nama_ayah;
            $ayah->alamat = $request->alamat_ayah;
            $ayah->telp = $request->telp_ayah;
            $ayah->agama = $request->agama_ayah;
            $ayah->tempat_lahir = $request->tempat_lahir_ayah;
            $ayah->tgl_lahir = $request->tgl_lahir_ayah;
            $ayah->pendidikan = $request->pendidikan_ayah;
            $ayah->pekerjaan = $request->pekerjaan_ayah;
            if ($request->foto_ayah) {
                $request->file('foto_ayah')->move('images/biodata/', $request->file('foto_ayah')->getClientOriginalName());
                $ayah->foto = $request->file('foto_ayah')->getClientOriginalName();
            } elseif (!$request->foto_ayah) {
                $ayah->foto = $ayah->foto;
            }
            $ayah->save();

            $ibu = new Ibu;
            $ibu->nama = $request->nama_ibu;
            $ibu->alamat = $request->alamat_ibu;
            $ibu->telp = $request->telp_ibu;
            $ibu->agama = $request->agama_ibu;
            $ibu->tempat_lahir = $request->tempat_lahir_ibu;
            $ibu->tgl_lahir = $request->tgl_lahir_ibu;
            $ibu->pendidikan = $request->pendidikan_ibu;
            $ibu->pekerjaan = $request->pekerjaan_ibu;
            if ($request->foto_ibu) {
                $request->file('foto_ibu')->move('images/biodata/', $request->file('foto_ibu')->getClientOriginalName());
                $ibu->foto = $request->file('foto_ibu')->getClientOriginalName();
            } elseif (!$request->foto_ibu) {
                $ibu->foto = $ibu->foto;
            }
            $ibu->save();

            $update_siswa = Siswa::findorfail($siswa->id);
            $update_siswa->ayah_id = $ayah->id;
            $update_siswa->ibu_id = $ibu->id;
            $update_siswa->update();
        } else {
            $data1 = Ayah::findorfail($siswa->ayah_id);
            $data1->nama = $request->nama_ayah;
            $data1->alamat = $request->alamat_ayah;
            $data1->telp = $request->telp_ayah;
            $data1->agama = $request->agama_ayah;
            $data1->tempat_lahir = $request->tempat_lahir_ayah;
            $data1->tgl_lahir = $request->tgl_lahir_ayah;
            $data1->pendidikan = $request->pendidikan_ayah;
            $data1->pekerjaan = $request->pekerjaan_ayah;
            if ($request->foto_ayah) {
                $request->file('foto_ayah')->move('images/biodata/', $request->file('foto_ayah')->getClientOriginalName());
                $data1->foto = $request->file('foto_ayah')->getClientOriginalName();
            } elseif (!$request->foto_ayah) {
                $data1->foto = $data1->foto;
            }
            $data1->update();

            $data2 = Ibu::findorfail($siswa->ibu_id);
            $data2->nama = $request->nama_ibu;
            $data2->alamat = $request->alamat_ibu;
            $data2->telp = $request->telp_ibu;
            $data2->agama = $request->agama_ibu;
            $data2->tempat_lahir = $request->tempat_lahir_ibu;
            $data2->tgl_lahir = $request->tgl_lahir_ibu;
            $data2->pendidikan = $request->pendidikan_ibu;
            $data2->pekerjaan = $request->pekerjaan_ibu;
            if ($request->foto_ibu) {
                $request->file('foto_ibu')->move('images/biodata/', $request->file('foto_ibu')->getClientOriginalName());
                $data2->foto = $request->file('foto_ibu')->getClientOriginalName();
            } elseif (!$request->foto_ibu) {
                $data2->foto = $data2->foto;
            }
            $data2->update();
        }

        return back()->with('success', 'Data Berhasil Diupdate');
    }
}
