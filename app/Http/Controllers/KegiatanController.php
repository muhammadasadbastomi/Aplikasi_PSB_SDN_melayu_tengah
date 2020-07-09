<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = Kegiatan::latest()->get();

        return view('admin.kegiatan.index', compact('data'));
    }

    public function store(Request $request)
    {
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
        $data = Kegiatan::find($request->id);
        $data->kegiatan = $request->kegiatan;
        $data->keterangan = $request->keterangan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->update();

        return back()->with('success', 'Data Kegiatan Berhasil Diubah');
    }

    //siswa lihat kegiatan

    public function show()
    {
        $data = Kegiatan::orderBy('tgl_mulai', 'asc')->get();

        return view('siswa.kegiatan.index', compact('data'));
    }
}
