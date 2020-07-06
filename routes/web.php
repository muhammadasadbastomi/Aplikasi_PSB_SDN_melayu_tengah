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

Route::get('/admin', 'HomeController@index')->name('dashboard');


Route::get('/admin/siswa', 'SiswaController@index')->name('siswaIndex');
Route::get('/admin/siswa/{id}', 'SiswaController@show')->name('siswaShow');
Route::put('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi')->name('siswaKonfirmasi');
Route::get('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi');
Route::patch('/admin/siswa/tolak/{id}', 'SiswaController@tolak')->name('siswaTolak');
Route::get('/admin/siswa/tolak/{id}', 'SiswaController@tolak');

Route::get('/admin/guru', 'GuruController@index')->name('guruIndex');
Route::post('/admin/guru', 'GuruController@store')->name('guruStore');
Route::put('/admin/guru', 'GuruController@update')->name('guruUpdate');
Route::delete('/admin/guru/delete/{id}', 'GuruController@destroy')->name('guruDelete');

Route::get('/admin/kelas', 'KelasController@index')->name('kelasIndex');
Route::post('/admin/kelas', 'KelasController@store')->name('kelasStore');
Route::put('/admin/kelas', 'KelasController@update')->name('kelasUpdate');
Route::delete('/admin/kelas/delete/{id}', 'KelasController@destroy')->name('kelasDelete');

Route::get('/admin/mapel', 'MapelController@index')->name('mapelIndex');
Route::post('/admin/mapel', 'MapelController@store')->name('mapelStore');
Route::put('/admin/mapel', 'MapelController@update')->name('mapelUpdate');
Route::delete('/admin/mapel/delete/{id}', 'MapelController@destroy')->name('mapelDelete');

Route::get('/admin/user/', 'UserController@profile')->name('userProfile');
