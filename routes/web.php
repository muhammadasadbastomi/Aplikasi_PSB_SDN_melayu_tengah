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

Route::get('/admin/siswa', 'SiswaController@index')->name('siswaIndex');
// Route::post('/admin/siswastore', 'SiswaController@store')->name('siswaStore');
// Route::get('/admin/siswaedit/{id}', 'SiswaController@edit')->name('siswaEdit');
// Route::put('/admin/siswaupdate', 'SiswaController@update')->name('siswaUpdate');
// Route::delete('/admin/siswa/delete', 'SiswaController@destroy')->name('siswaDelete');

Route::get('/admin/user/', 'UserController@profile')->name('userProfile');
