<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $messages = [
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kalender' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        if ($request->tgl_mulai > $request->tgl_akhir) {
            return back()->with('warning', 'Data Tanggal Harus Benar');
        }

        $data = new Kalender;
        $data->kegiatan = $request->kalender;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->save();

        return back()->with('success', 'Data Berhasil Ditambah.');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'kegiatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        if ($request->tgl_mulai > $request->tgl_akhir) {
            return back()->with('warning', 'Data Tanggal Harus Benar');
        }

        $data = Kalender::find($request->id);
        $data->kegiatan = $request->kegiatan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function destroy($id)
    {
        $data = Kalender::where('uuid', $id)->first();
        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }


    //siswa kalender
    public function show()
    {
        $data = Kalender::orderBy('tgl_mulai', 'ASC')->get();

        return view('siswa.kalender.index', compact('data'));
    }
}
