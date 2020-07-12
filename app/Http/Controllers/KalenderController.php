<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Kalender;
use App\Kalender_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KalenderController extends Controller
{
    //admin kalender
    public function index()
    {
        $data = Kalender::latest()->get();

        return view('admin.kalender.index', compact('data'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => 'Tahun Ajaran Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        if (Kalender::first() == null) {
            $data = new Kalender;
            $data->tahun = $request->tahun;
            $data->status = '1';
            $data->keterangan = $request->keterangan;
            $data->save();
        } else {
            $data = new Kalender;
            $data->tahun = $request->tahun;
            $data->keterangan = $request->keterangan;
            $data->status = '0';
            $data->save();
        }

        return back()->with('success', 'Data Berhasil Ditambah.');
    }

    public function active($id)
    {
        $inactive = Kalender::where('status', 1)->first();
        $inactive->status = '0';
        $inactive->update();

        $data = Kalender::where('uuid', $id)->first();
        $data->status = '1';
        $data->update();
    }

    public function edit(Request $request)
    {
        $messages = [
            'required' => 'Tahun Ajaran Harus Diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return back()->with('warning', $validator->errors()->all()[0])->withInput();
        }

        $data = Kalender::find($request->id);
        $data->tahun = $request->tahun;
        $data->keterangan = $request->keterangan;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Kalender::where('uuid', $id)->first();
        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }

    //admin kalender detail
    public function show($id)
    {
        $kalender = Kalender::where('uuid', $id)->first();
        $data = Kalender_detail::orderBy('tgl_mulai', 'ASC')->where('kalender_id', $kalender->id)->get();

        return view('admin.kalender.detail.index', compact('data', 'kalender'));
    }

    public function store(Request $request, $id)
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

        $kalender = Kalender::where('uuid', $id)->first();

        $data = new Kalender_detail;
        $data->kalender_id = $kalender->id;
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

        $data = Kalender_detail::find($request->id);
        $data->kegiatan = $request->kegiatan;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_akhir = $request->tgl_akhir;
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function destroy($id)
    {
        $data = Kalender_detail::where('uuid', $id)->first();
        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }

    //siswa kalender
    public function tampil()
    {
        $kalender = Kalender::where('status', 1)->first();
        $data = Kalender_detail::orderBy('tgl_mulai', 'ASC')->where('kalender_id', $kalender->id)->get();

        return view('siswa.kalender.index', compact('data', 'kalender'));
    }
}
