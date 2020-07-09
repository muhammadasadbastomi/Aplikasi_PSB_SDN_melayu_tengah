<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Pembayaran;
use App\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    //siswa
    public function index()
    {
        $siswa = Siswa::where('user_id', Auth()->user()->id)->first();
        $data = Pendaftaran::where('siswa_id', $siswa->id)->first();

        return view('siswa.pembayaran.index', compact('data'));
    }

    public function metode(Request $request)
    {
        $siswa = Siswa::where('user_id', Auth()->user()->id)->first();
        $pendaftaran = Pendaftaran::where('siswa_id', $siswa->id)->first();

        if ($request->pembayaran == 2) {
            $data = new Pembayaran;
            $data->metode = $request->pembayaran;
            $data->status = '1';
            $data->save();
        } else {
            $data = new Pembayaran;
            $data->metode = $request->pembayaran;
            $data->status = '1';
            $data->save();
        }

        $data1 = Pendaftaran::find($pendaftaran->id);
        $data1->pembayaran_id = $data->id;
        $data1->update();

        return back()->with('success', 'Metode Pembayaran Telah Dipilih');
    }

    public function cash(Request $request)
    {
        $siswa = Siswa::where('user_id', Auth()->user()->id)->first();
        $pendaftaran = Pendaftaran::where('siswa_id', $siswa->id)->first();

        $data = Pembayaran::findorfail($pendaftaran->pembayaran_id);
        $data->nominal = $request->nominal;
        $data->terbilang = $request->terbilang;
        $data->bukti = $request->bukti_pembayaran;
        $data->status = '2';
        $data->update();

        return back()->with('success', 'Data Berhasil Terkirim');
    }



    //admin konfirmasi
    public function indexadmin()
    {
        $data = Pendaftaran::join('pembayarans', 'pembayarans.id', '=', 'pendaftarans.pembayaran_id')->where('pembayarans.status', 2)->get();

        return view('admin.pembayaran.index', compact('data'));
    }

    public function konfirmasi(Request $request)
    {
        $data = Pembayaran::find($request->id);
        $data->status = '3';
        $data->update();

        return back()->with('success', 'Pembayaran Berhasil Dikonfirmasi');
    }
}
