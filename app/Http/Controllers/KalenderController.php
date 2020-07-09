<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Kalender;
use App\Kalender_detail_ganjil;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index()
    {
        return view('admin.kalender.index');
    }

    public function semester(Request $request)
    {
        $kalender = Kalender::find('1');
        $kalender->ganjil1 = $request->ganjil1;
        $kalender->ganjil2 = $request->ganjil2;
        $kalender->genap1 = $request->genap1;
        $kalender->genap2 = $request->genap2;
        $kalender->update();

        return back()->with('success', 'Kalender Akademik Berhasil Dibuat.');
    }
}
