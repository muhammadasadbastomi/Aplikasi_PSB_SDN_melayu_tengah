<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Kelas;
use App\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    public function index($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $senin = Jadwal::where('kelas_id', $id)->where('hari', 1)->get();
        $selasa = Jadwal::where('kelas_id', $id)->where('hari', 2)->get();
        $rabu = Jadwal::where('kelas_id', $id)->where('hari', 3)->get();
        $kamis = Jadwal::where('kelas_id', $id)->where('hari', 4)->get();
        $jumat = Jadwal::where('kelas_id', $id)->where('hari', 5)->get();
        $sabtu = Jadwal::where('kelas_id', $id)->where('hari', 6)->get();
        $mapel = Mapel::latest()->get();

        return view('admin.jadwal.index', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'kelas', 'mapel'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Mata Pelajaran harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'mapel' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = new Jadwal;
        $data->kelas_id = $request->id;
        $data->hari = $request->hari;
        $data->mapel_id = $request->mapel;
        $data->save();

        return back()->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => 'Mata Pelajaran harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'mapel' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Jadwal::find($request->id);
        $data->hari = $request->hari;
        $data->mapel_id = $request->mapel;
        $data->update();

        return back()->with('success', 'Data berhasil disimpan');
    }

    public function destroy($id)
    {
        $data = Jadwal::where('uuid', $id)->first();
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
