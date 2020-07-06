<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
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
}
