<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use App\Ayah;
use App\Ibu;
use App\Cicilan;
use App\Guru;
use App\Jadwal;
use App\Kalender;
use App\Kegiatan;
use App\Kelas_detail;
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
        return $pdf->stream('laporan-guru-pdf');
    }
}
