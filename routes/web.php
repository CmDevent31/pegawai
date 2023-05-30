<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});


Route::get('blog', function () {
	return view('blog');
});


Route::get('/dosen', 'DosenController@index');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cari', 'PegawaiController@cari')->name('pegawai.cari');
Route::get('/pegawai/json', [\App\Http\Controllers\PegawaiController::class, 'data'])->name('index.data');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::delete('/data/{id}', 'DataController@destroy')->name('data.destroy');




