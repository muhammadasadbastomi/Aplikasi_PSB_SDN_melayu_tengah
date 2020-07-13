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
use App\Kelas;
use App\Mapel;
use App\Pembayaranl;
use App\Siswa;
use App\Wali;

class LaporanController extends Controller
{
    public function guru()
    {
        $data = Guru::all();

        $pdf = PDF::loadview('admin/laporan/laporanguru', compact('data'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-guru-pdf');
    }

    public function pendaftar(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = Siswa::whereBetween('siswas.created_at', [$start, $end])
        ->join('users', 'users.id', '=', 'siswas.user_id')
        ->orderBy('users.name', 'ASC')->get();

        $pdf = PDF::loadview('admin/laporan/pendaftar', compact('data' , 'start', 'end'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-pendaftar-pdf');
    }

    public function lulus(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = Siswa::where('status', 4)->whereBetween('siswas.created_at', [$start, $end])
        ->join('users', 'users.id', '=', 'siswas.user_id')
        ->orderBy('users.name', 'ASC')->get();

        $pdf = PDF::loadview('admin/laporan/siswalulus', compact('data' , 'start', 'end'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-pendaftar-lulus-pdf');
    }

    public function kegiatan(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = Kegiatan::whereBetween('tgl_mulai', [$start, $end])->get();

        $pdf = PDF::loadview('admin/laporan/kegiatan', compact('data', 'start', 'end'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-kegiatan-pdf');
    }

    public function kalender(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = Kalender::whereBetween('tgl_mulai', [$start, $end])->get();

        $pdf = PDF::loadview('admin/laporan/kalender', compact('data', 'start', 'end'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-kalender-pdf');
    }

    public function pembagiankelas(Request $request)
    {
        $tgl= Carbon::now()->format('d-m-Y');
        $filter = $request->filter;
        $data = Kelas_detail::join('kelas','kelas.id', '=', 'kelas_details.kelas_id')->where('kelas','like',"%" .$filter. "%")->orderBy('kelas', 'ASC')->get();


        $pdf = PDF::loadview('admin/laporan/pembagiankelas', compact('data','tgl'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-pembagiankelas-pdf');
    }

    public function jadwal($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $senin = Jadwal::where('kelas_id', $id)->where('hari', 1)->get();
        $selasa = Jadwal::where('kelas_id', $id)->where('hari', 2)->get();
        $rabu = Jadwal::where('kelas_id', $id)->where('hari', 3)->get();
        $kamis = Jadwal::where('kelas_id', $id)->where('hari', 4)->get();
        $jumat = Jadwal::where('kelas_id', $id)->where('hari', 5)->get();
        $sabtu = Jadwal::where('kelas_id', $id)->where('hari', 6)->get();


        $pdf = PDF::loadview('admin/laporan/jadwalmapel', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'kelas', 'mapel'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('laporan-jadwalmapel-pdf');
    }
}
