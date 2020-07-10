<?php

namespace App\Http\Controllers;

use App\Cicilan;
use App\Siswa;
use App\Pembayaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class PembayaranController extends Controller
{
    //siswa
    public function index()
    {
        $data = Siswa::where('user_id',  Auth()->user()->id)->first();

        if ($data->pembayaran_id == !null) {
            $current = Carbon::parse($data->pembayaran->tgl_bayar);

            $expired = $current->addDays(30);
        } else {
        }

        return view('siswa.pembayaran.index', compact('data', 'expired'));
    }

    public function metode(Request $request)
    {
        $siswa = Siswa::where('user_id',  Auth()->user()->id)->first();

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

        $data1 = Siswa::find($siswa->id);
        $data1->pembayaran_id = $data->id;
        $data1->update();

        return back()->with('success', 'Metode Pembayaran Telah Dipilih');
    }

    public function cash(Request $request)
    {
        $siswa = Siswa::where('user_id', Auth()->user()->id)->first();
        $now = Carbon::now();

        $data = Pembayaran::findorfail($siswa->pembayaran_id);
        $data->nominal = $request->nominal;
        $data->terbilang = $request->terbilang;
        $data->tgl_bayar = $now;
        $data->status = '2';
        if ($request->bukti) {
            $request->file('bukti')->move('images/biodata/', $request->file('bukti')->getClientOriginalName());
            $data->bukti = $request->file('bukti')->getClientOriginalName();
        }

        $data->update();

        return back()->with('success', 'Data Berhasil Terkirim');
    }

    public function cicil(Request $request)
    {
        $siswa = Siswa::where('user_id', Auth()->user()->id)->first();
        $now = Carbon::now();

        if ($request->cicilan == 1) {
            $cicil = new Cicilan;
            $cicil->cicilan_ke = $request->cicilan;
            $cicil->nominal = $request->nominal;
            $cicil->terbilang = $request->terbilang;
            if ($request->bukti) {
                $request->file('bukti')->move('images/biodata/', $request->file('bukti')->getClientOriginalName());
                $cicil->bukti = $request->file('bukti')->getClientOriginalName();
            }
            $cicil->save();
        } else {
            $cicil = Cicilan::find($siswa->pembayaran->cicilan->id);
            $cicil->cicilan_ke = $request->cicilan;
            $cicil->nominal = $cicil->nominal + $request->nominal;
            $cicil->terbilang = $request->terbilang;
            if ($request->bukti) {
                $request->file('bukti')->move('images/biodata/', $request->file('bukti')->getClientOriginalName());
                $cicil->bukti = $request->file('bukti')->getClientOriginalName();
            }
            $cicil->update();
        }

        $data = Pembayaran::findorfail($siswa->pembayaran_id);
        $data->status = '2';
        $data->tgl_bayar = $now;
        $data->cicilan_id = $cicil->id;
        $data->update();

        return back()->with('success', 'Data Berhasil Terkirim');
    }


    //admin konfirmasi
    public function indexadmin()
    {
        $pembayaran = Pembayaran::first();
        $data = Pembayaran::where('status', 2)->get();
        $cicil = Pembayaran::join('cicilans', 'cicilans.id', '=', 'pembayarans.cicilan_id')->where('pembayarans.status', 3)->where('cicilans.cicilan_ke', 2)->get();
        $lunas = Pembayaran::where('status', 4)->get();

        if (Pembayaran::where('cicilan_id', !null)->first() == !null) {
            $current = Carbon::parse($pembayaran->tgl_bayar);
            $expired = $current->addDays(30);
        }

        return view('admin.pembayaran.index', compact('data', 'lunas', 'cicil', 'expired'));
    }

    public function konfirmasi(Request $request)
    {

        $data = Pembayaran::find($request->id);
        $data->status = '4';
        $data->update();

        $siswa = Siswa::where('pembayaran_id', $request->id)->first();

        $data1 = Siswa::find($siswa->id);
        $data1->status = '4';
        $data1->update();

        return back()->with('success', 'Pembayaran Berhasil Dikonfirmasi');
    }

    public function konfirmasicicilan(Request $request)
    {
        if ($request->cicilanke == 1) {
            $siswa = Siswa::where('pembayaran_id', $request->id)->first();

            $data = Pembayaran::find($request->id);
            $data->status = '3';
            $data->update();

            $data1 = Siswa::find($siswa->id);
            $data1->status = '4';
            $data1->update();

            $pembayaran = Pembayaran::where('id', $request->id)->first();

            $data = Cicilan::find($pembayaran->cicilan_id);
            $data->cicilan_ke = '2';
            $data->update();
        } else {
            $pembayaran = Pembayaran::where('id', $request->id)->first();

            $data = Pembayaran::find($request->id);
            $data->status = '4';
            $data->update();

            $data = Cicilan::find($pembayaran->cicilan_id);
            $data->cicilan_ke = '3';
            $data->update();
        }

        return back()->with('success', 'Pembayaran Berhasil Dikonfirmasi');
    }
}
