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
});

Route::group(['middleware' => ['auth', 'Checkrole:1']], function () {
    Route::get('/admin/siswa', 'SiswaController@index')->name('siswaIndex');
    Route::get('/admin/siswa/{id}', 'SiswaController@show')->name('siswaShow');
    Route::put('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi')->name('siswaKonfirmasi');
    Route::get('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi');
    Route::patch('/admin/siswa/tolak/{id}', 'SiswaController@tolak')->name('siswaTolak');
    Route::get('/admin/siswa/tolak/{id}', 'SiswaController@tolak');

    Route::get('/admin/pembayaran', 'PembayaranController@index')->name('pembayaranIndex');
    Route::post('/admin/pembayaran', 'PembayaranController@store')->name('pembayaranStore');
    Route::put('/admin/pembayaran', 'PembayaranController@update')->name('pembayaranUpdate');
    Route::delete('/admin/pembayaran/delete/{id}', 'PembayaranController@destroy')->name('pembayaranDelete');

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

    Route::get('/admin/user/', 'UserController@profile')->name('userProfile');
});

Route::group(['middleware' => ['auth', 'Checkrole:2']], function () {
    Route::get('/siswa/biodata', 'SiswaController@biodata')->name('biodataIndex');
    Route::post('/siswa/biodata', 'SiswaController@update')->name('biodataUpdate');
    Route::patch('/siswa/biodata', 'SiswaController@wali')->name('waliUpdate');
    Route::put('/siswa/biodata', 'SiswaController@orangtua')->name('orangtuaUpdate');
});
