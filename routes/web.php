<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'Checkrole:1,2']], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::post('/dashboard', 'HomeController@upload')->name('dashboardUpload');
    Route::put('/dashboard', 'HomeController@daftar')->name('dashboardDaftar');
});

Route::group(['middleware' => ['auth', 'Checkrole:1']], function () {
    Route::get('/admin/siswa', 'SiswaController@index')->name('siswaIndex');
    Route::get('/admin/siswa/{id}', 'SiswaController@show')->name('siswaShow');
    Route::put('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi')->name('siswaKonfirmasi');
    Route::get('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi');
    Route::patch('/admin/siswa/tolak/{id}', 'SiswaController@tolak')->name('siswaTolak');
    Route::get('/admin/siswa/tolak/{id}', 'SiswaController@tolak');

    Route::get('/admin/pembayaran', 'PembayaranController@indexadmin')->name('pembayaranIndexadmin');
    Route::put('/admin/pembayaran', 'PembayaranController@konfirmasi')->name('pembayaranKonfirmasi');
    Route::patch('/admin/pembayaran', 'PembayaranController@konfirmasicicilan')->name('pembayaranKonfirmasicicilan');

    Route::get('/admin/guru', 'GuruController@index')->name('guruIndex');
    Route::post('/admin/guru', 'GuruController@store')->name('guruStore');
    Route::put('/admin/guru', 'GuruController@update')->name('guruUpdate');
    Route::delete('/admin/guru/delete/{id}', 'GuruController@destroy')->name('guruDelete');

    Route::get('/admin/mapel', 'MapelController@index')->name('mapelIndex');
    Route::post('/admin/mapel', 'MapelController@store')->name('mapelStore');
    Route::put('/admin/mapel', 'MapelController@update')->name('mapelUpdate');
    Route::delete('/admin/mapel/delete/{id}', 'MapelController@destroy')->name('mapelDelete');

    Route::get('/admin/kelas', 'KelasController@index')->name('kelasIndex');
    Route::post('/admin/kelas', 'KelasController@store')->name('kelasStore');
    Route::put('/admin/kelas', 'KelasController@update')->name('kelasUpdate');
    Route::delete('/admin/kelas/delete/{id}', 'KelasController@destroy')->name('kelasDelete');

    Route::get('/admin/jadwal/{id}/{uuid}', 'JadwalController@index')->name('jadwalIndex');
    Route::post('/admin/jadwal/{id}/{uuid}', 'JadwalController@store')->name('jadwalStore');
    Route::delete('/admin/jadwal/delete/{id}', 'JadwalController@destroy')->name('jadwalDelete');

    Route::get('/admin/pembagian/{id}/{uuid}', 'PembagianController@index')->name('pembagianIndex');
    Route::post('/admin/pembagian/{id}/{uuid}', 'PembagianController@store')->name('pembagianStore');
    Route::delete('/admin/pembagian/delete/{id}', 'PembagianController@destroy')->name('pembagianDelete');

    Route::get('/admin/kegiatan/', 'KegiatanController@index')->name('kegiatanIndex');
    Route::post('/admin/kegiatan/', 'KegiatanController@store')->name('kegiatanStore');
    Route::put('/admin/kegiatan/', 'KegiatanController@update')->name('kegiatanUpdate');
    Route::delete('/admin/kegiatan/delete/{id}', 'KegiatanController@destroy')->name('kegiatanDelete');

    Route::get('/admin/kalender/', 'KalenderController@index')->name('kalenderIndex');
    Route::post('/admin/kalender/', 'KalenderController@store')->name('kalenderStore');
    Route::put('/admin/kalender/', 'KalenderController@update')->name('kalenderUpdate');

    Route::get('/admin/user/', 'UserController@profile')->name('userProfile');
});

Route::group(['middleware' => ['auth', 'Checkrole:2']], function () {
    Route::get('/siswa/biodata', 'SiswaController@biodata')->name('biodataIndex');
    Route::post('/siswa/biodata', 'SiswaController@update')->name('biodataUpdate');
    Route::patch('/siswa/biodata', 'SiswaController@wali')->name('waliUpdate');
    Route::put('/siswa/biodata', 'SiswaController@orangtua')->name('orangtuaUpdate');

    Route::get('/siswa/pembayaran', 'PembayaranController@index')->name('pembayaranIndex');
    Route::post('/siswa/pembayaran', 'PembayaranController@metode')->name('pembayaranMetode');
    Route::put('/siswa/pembayaran', 'PembayaranController@cash')->name('pembayaranCash');
    Route::patch('/siswa/pembayaran', 'PembayaranController@cicil')->name('pembayaranCicil');

    Route::get('/siswa/kegiatan/', 'KegiatanController@show')->name('kegiatanShow');

    Route::get('/siswa/kalender/', 'KalenderController@show')->name('kalenderShow');
});
