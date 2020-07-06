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
Route::put('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi')->name('siswaKonfirmasi');
Route::get('/admin/siswa/konfirmasi/{id}', 'SiswaController@konfirmasi');
Route::patch('/admin/siswa/tolak/{id}', 'SiswaController@tolak')->name('siswaTolak');
Route::get('/admin/siswa/tolak/{id}', 'SiswaController@tolak');

Route::get('/admin/guru', 'GuruController@index')->name('GuruIndex');
Route::post('/admin/guru', 'GuruController@store')->name('GuruStore');
// Route::get('/admin/guruedit/{id}', 'GuruController@edit')->name('guruEdit');
// Route::put('/admin/guruupdate', 'GuruController@update')->name('guruUpdate');
// Route::delete('/admin/guru/delete', 'GuruController@destroy')->name('guruDelete');

Route::get('/admin/user/', 'UserController@profile')->name('userProfile');
