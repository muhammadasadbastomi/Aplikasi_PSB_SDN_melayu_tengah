<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Kelas_detail;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PembagianController extends Controller
{
    public function index($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $data = Kelas_detail::where('kelas_id', $id)->get();

        $siswa = Siswa::where('status', 4)->orwhere('status', 6)->get();

        return view('admin.kelas.pembagian', compact('data', 'kelas', 'siswa'));
    }

    public function store(Request $request)
    {
        $messages = [
            'unique' => 'Siswa Sudah Ada.',
        ];
        $validator = Validator::make($request->all(), [
            'siswa_id' => 'unique:kelas_details',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        // dd($request->siswa);
        foreach ($request->siswa_id as $d) {
            $data = new Kelas_detail;
            $data->kelas_id = $request->id;
            $data->siswa_id = $d;
            $data->save();
        }

        foreach ($request->siswa_id as $d) {
            $siswa = Siswa::findOrFail($d);
            $siswa->status = '5';
            $siswa->update();
        }

        return back()->with('success', 'Siswa Berhasil Ditambah');
    }

    public function destroy($id, $siswa)
    {
        $siswa = Siswa::find($siswa);
        $siswa->status = '6';
        $siswa->update();

        $data = Kelas_detail::where('uuid', $id)->first();

        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
