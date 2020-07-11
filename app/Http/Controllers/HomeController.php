<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Kelas;
use App\Kelas_detail;
use App\Mapel;
use App\Siswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if (Auth::user()->role == 2) {
            $data = Siswa::where('user_id', Auth::user()->id)->first();
            if (Kelas_detail::where('siswa_id', $data->id)->first() != null) {
                $kelas = Kelas_detail::where('siswa_id', $data->id)->first();

                $senin = Jadwal::where('kelas_id', $kelas->kelas_id)->where('hari', 1)->get();
                $selasa = Jadwal::where('kelas_id', $kelas->kelas_id)->where('hari', 2)->get();
                $rabu = Jadwal::where('kelas_id', $kelas->kelas_id)->where('hari', 3)->get();
                $kamis = Jadwal::where('kelas_id', $kelas->kelas_id)->where('hari', 4)->get();
                $jumat = Jadwal::where('kelas_id', $kelas->kelas_id)->where('hari', 5)->get();
                $sabtu = Jadwal::where('kelas_id', $kelas->kelas_id)->where('hari', 6)->get();
                $mapel = Mapel::latest()->get();
            }
        }

        return view('dashboard/index', compact('data', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'kelas', 'mapel'));
    }

    public function upload(Request $request)
    {
        $siswa = Siswa::where('user_id', $request->id)->first();

        if ($request->akte) {
            $messages = [
                'mimes' => 'File harus berupa PDF atau JPG!',
                'file' => 'File harus berupa PDF atau JPG!',
                'max' => 'File tidak boleh lebih dari 500KB!',
            ];
            $validator = Validator::make($request->all(), [
                'akte' => 'file|mimes:jpeg,png,gif,pdf|max:500',
            ], $messages);

            if ($validator->fails()) {
                return back()->with('warning', $validator->errors()->all()[0])->withInput();
            }


            $data = Siswa::find($siswa->id);

            $request->file('akte')->move('images/biodata/', $request->file('akte')->getClientOriginalName());
            $data->akte = $request->file('akte')->getClientOriginalName();

            $data->update();
        } elseif ($request->kk) {
            $messages = [
                'mimes' => 'File harus berupa PDF atau JPG!',
                'file' => 'File harus berupa PDF atau JPG!',
                'max' => 'File tidak boleh lebih dari 500Kv!',
            ];
            $validator = Validator::make($request->all(), [
                'kk' => 'file|mimes:jpeg,png,gif,pdf|max:500',
            ], $messages);

            if ($validator->fails()) {
                return back()->with('warning', $validator->errors()->all()[0])->withInput();
            }

            $data = Siswa::find($siswa->id);

            $request->file('kk')->move('images/biodata/', $request->file('kk')->getClientOriginalName());
            $data->kk = $request->file('kk')->getClientOriginalName();
            $data->update();
        } elseif ($request->photos) {

            $messages = [
                'mimes' => 'File harus berupa PDF atau JPG!',
                'file' => 'File harus berupa PDF atau JPG!',
                'max' => 'File tidak boleh lebih dari 500KB!',
            ];
            $validator = Validator::make($request->all(), [
                'photos' => 'file|mimes:jpeg,png,gif,pdf|max:500',
            ], $messages);

            if ($validator->fails()) {
                return back()->with('warning', $validator->errors()->all()[0])->withInput();
            }

            $data = User::findorfail($request->id);

            $request->file('photos')->move('images/biodata/', $request->file('photos')->getClientOriginalName());
            $data->photos = $request->file('photos')->getClientOriginalName();
            $data->update();
        } else {
            return back()->with('warning', 'Data Gagal Diupload');
        }

        return back()->with('success', 'Data Berhasil Diupload');
    }

    public function daftar()
    {
        $pendaftaran = Siswa::where('user_id', Auth::user()->id)->first();

        $data = Siswa::findorfail($pendaftaran->id);
        $data->status = '1';
        $data->update();

        return back()->with('success', 'Pendaftaran Berhasil, Silahkan tunggu Konfirmasi Admin');
    }
}
