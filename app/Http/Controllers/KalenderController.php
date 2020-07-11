<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Kalender;
use App\Kalender_detail_ganjil;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    //admin kalender
    public function index()
    {
        $data = Kalender::orderBy('tgl_mulai', 'ASC')->get();

        return view('admin.kalender.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Kalender;
        $data->kegiatan = $request->kalender;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->save();

        return back()->with('success', 'Data Berhasil Ditambah.');
    }

    public function update(Request $request)
    {
        $data = Kalender::find($request->id);
        $data->kegiatan = $request->kegiatan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }


    //siswa kalender
    public function show()
    {
        $data = Kalender::orderBy('tgl_mulai', 'ASC')->get();

        return view('siswa.kalender.index', compact('data'));
    }
}
