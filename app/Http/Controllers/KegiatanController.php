<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = Kegiatan::orderBy('tgl_mulai', 'ASC')->get();

        return view('admin.kegiatan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kegiatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        if ($request->tgl_mulai > $request->tgl_akhir) {
            return back()->with('warning', 'Data Tanggal Harus Benar');
        }

        $data = new Kegiatan;
        $data->kegiatan = $request->kegiatan;
        $data->keterangan = $request->keterangan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->save();

        return back()->with('success', 'Data Kegiatan Berhasil Ditambah');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => ':attribute Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kegiatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        if ($request->tgl_mulai > $request->tgl_akhir) {
            return back()->with('warning', 'Data Tanggal Harus Benar');
        }

        $data = Kegiatan::find($request->id);
        $data->kegiatan = $request->kegiatan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->keterangan = $request->keterangan;
        $data->update();

        return back()->with('success', 'Data Kegiatan Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = Kegiatan::where('uuid', $id)->first();

        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus.');
    }

    //siswa lihat kegiatan

    public function show()
    {
        $data = Kegiatan::orderBy('tgl_mulai', 'ASC')->get();

        return view('siswa.kegiatan.index', compact('data'));
    }
}
