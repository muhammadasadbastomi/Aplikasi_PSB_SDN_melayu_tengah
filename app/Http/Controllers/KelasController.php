<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Kelas;
use App\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::latest()->get();
        $mapel = Mapel::latest()->get();

        return view('admin.kelas.index', compact('data', 'mapel'));
    }

    public function store(Request $request)
    {
        $messages = [
            'unique' => ':attribute sudah terdaftar.',
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kode_kelas' => 'unique:kelas|required',
            'kelas' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Kelas;
        $data->kode_kelas = $request->kode_kelas;
        $data->kelas = 'Kelas ' . $request->kelas . '';
        $data->save();

        return back()->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request)
    {
        $messages = [
            'unique' => ':attribute sudah terdaftar.',
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kode_kelas' => 'required',
            'kelas' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Kelas::find($request->id);
        $data->kode_kelas = $request->kode_kelas;
        $data->kelas = $request->kelas;
        $data->update();

        return back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Kelas::where('uuid', $id)->first();
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
