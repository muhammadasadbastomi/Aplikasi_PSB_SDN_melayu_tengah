<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Ayah;
use App\Ibu;
use App\Cicilan;
use App\Guru;
use App\Jadwal;
use App\Kalender;
use App\Kegiatan;
use App\Kelas_detail;
use App\Kalender_detail;
use App\Kelas;
use App\Mapel;
use App\Pembayaran;
use App\Siswa;
use App\Wali;

class LaporanController extends Controller
{
    public function guru()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Guru::all();

        $pdf = PDF::loadview('admin/laporan/laporanguru', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-guru-pdf');
    }

    public function pendaftar(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $start = $request->start;
        $end = $request->end;
        $data = Siswa::whereBetween('siswas.created_at', [$start, $end])
            ->join('users', 'users.id', '=', 'siswas.user_id')
            ->orderBy('users.name', 'ASC')->get();

        $pdf = PDF::loadview('admin/laporan/pendaftar', compact('data', 'start', 'end', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-pendaftar-pdf');
    }

    public function lulus(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $start = $request->start;
        $end = $request->end;
        $data = Siswa::where('status', '>=', '4')->whereBetween('siswas.created_at', [$start, $end])
            ->join('users', 'users.id', '=', 'siswas.user_id')
            ->orderBy('users.name', 'ASC')->get();

        $pdf = PDF::loadview('admin/laporan/siswalulus', compact('data', 'start', 'end', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-pendaftar-lulus-pdf');
    }

    public function kegiatan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $start = $request->start;
        $end = $request->end;
        $data = Kegiatan::whereBetween('tgl_mulai', [$start, $end])->get();

        $pdf = PDF::loadview('admin/laporan/kegiatan', compact('data', 'start', 'end', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-kegiatan-pdf');
    }

    public function kalender(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $kalender = $request->kalender;
        $tahun = Kalender::where('id', '=', $kalender)->first();
        $data = Kalender_detail::where('id', '=', $kalender )->get()->dd();

        $pdf = PDF::loadview('admin/laporan/kalender', compact('data' , 'tahun', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-kalender-pdf');
    }

    public function pembagiankelas(Request $request)
    {
        $tgl = Carbon::now()->format('d-m-Y');
        $filter = $request->filter;
        $data = Kelas_detail::join('kelas', 'kelas.id', '=', 'kelas_details.kelas_id')->where('kelas', 'like', "%" . $filter . "%")->orderBy('kelas', 'ASC')->get();


        $pdf = PDF::loadview('admin/laporan/pembagiankelas', compact('data', 'tgl'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-pembagiankelas-pdf');
    }

    public function jadwal($id)
    {
        $now = Carbon::now()->format('d-m-Y');
        $kelas = Kelas::where('id', $id)->first();
        $senin = Jadwal::where('kelas_id', $id)->where('hari', 1)->get();
        $selasa = Jadwal::where('kelas_id', $id)->where('hari', 2)->get();
        $rabu = Jadwal::where('kelas_id', $id)->where('hari', 3)->get();
        $kamis = Jadwal::where('kelas_id', $id)->where('hari', 4)->get();
        $jumat = Jadwal::where('kelas_id', $id)->where('hari', 5)->get();
        $sabtu = Jadwal::where('kelas_id', $id)->where('hari', 6)->get();

        $pdf = PDF::loadview('admin/laporan/jadwalmapel', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'kelas', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-jadwalmapel-pdf');
    }

    public function pendapatan(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $start = $request->start;
        $end = $request->end;
        $data = Pembayaran::whereBetween('tgl_bayar', [$start, $end])->with('cicilan')->get();

        $data  = $data->map(function ($item) {
        if($item->cicilan_id != null){
            $jumlah =  $item->nominal + $item->cicilan->nominal;
        }else{
            $jumlah =  $item->nominal;
        }
            $item['jumlah'] = $jumlah;

            return $item;
        });
        $total = $data->sum('jumlah');


        $pdf = PDF::loadview('admin/laporan/pendapatan', compact('data', 'start', 'end','total', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-pendapatan-pdf');
    }

    public function ketentuanbiaya()
    {
        $now = Carbon::now()->format('d-m-Y');
        $gedung = 50000;
        $seragam = 175000;
        $sppbln1 = 85000;

        $pdf = PDF::loadview('admin/laporan/ketentuanbiaya', compact('gedung', 'seragam', 'sppbln1', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-ketentuanbiaya-pdf');
    }

    public function siswa(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $start = $request->start;
        $end = $request->end;
        $data = Siswa::where('status', '>=', '5')->whereBetween('created_at', [$start, $end])->get();

        $pdf = PDF::loadview('admin/laporan/siswa', compact('data', 'start', 'end', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-siswa-pdf');
    }

    public function siswaall()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Siswa::where('status', '>=', '5')->get();

        $pdf = PDF::loadview('admin/laporan/siswaall', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-siswaKeseluruhan-pdf');
    }

    public function siswaditolak(Request $request)
    {
        $now = Carbon::now()->format('d-m-Y');
        $start = $request->start;
        $end = $request->end;
        $data = Siswa::where('status', '=', '3')->whereBetween('created_at', [$start, $end])->get();

        $pdf = PDF::loadview('admin/laporan/siswaditolak', compact('data', 'start', 'end', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-siswaditolak-pdf');
    }

    public function siswaditolakall()
    {
        $now = Carbon::now()->format('d-m-Y');
        $data = Siswa::where('status', '=', '3')->get();

        $pdf = PDF::loadview('admin/laporan/siswaditolakall', compact('data', 'now'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-siswaditolakkeseluruhan-pdf');
    }
}
