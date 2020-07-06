<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MapelController extends Controller
{
    public function index()
    {
        $guru = Guru::latest()->get();
        $data = Mapel::latest()->get();

        return view('admin.mapel.index', compact('data', 'guru'));
    }

    public function store(Request $request)
    {
        $messages = [
            'unique' => ':attribute sudah terdaftar.',
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kode_mapel' => 'unique:mapels|required',
            'mapel' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Mapel;
        $data->kode_mapel = $request->kode_mapel;
        $data->mapel = $request->mapel;
        $data->guru_id = $request->guru;
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
            'kode_mapel' => 'required',
            'mapel' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Mapel::find($request->id);
        $data->kode_mapel = $request->kode_mapel;
        $data->mapel = $request->mapel;
        $data->update();

        return back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Mapel::where('uuid', $id)->first();
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
