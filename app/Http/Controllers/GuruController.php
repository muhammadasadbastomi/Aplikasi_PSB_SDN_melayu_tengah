<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function index()
    {
        $data = Guru::latest()->get();

        return view('admin.guru.index', compact('data'));
    }

    public function store(Request $request)
    {
        $messages = [
            'unique' => 'NIP sudah terdaftar.',
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'nip' => 'unique:gurus|required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Guru;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->telp = $request->telp;
        $data->alamat = $request->alamat;
        $data->save();

        return back()->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request)
    {
        $messages = [
            // 'unique' => 'NIP sudah terdaftar.',
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            // 'nip' => 'unique:gurus|required',
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Guru::find($request->id);
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->telp = $request->telp;
        $data->alamat = $request->alamat;
        $data->update();

        return back()->with('success', 'Data berhasil dibuah');
    }

    public function destroy($id)
    {
        $data = Guru::where('uuid', $id)->first();
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
