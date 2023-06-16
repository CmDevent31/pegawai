<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\GoogleController;

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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/home', 'PegawaiController@home');
Route::get('/kintan','RestoController@kintan');
Route::get('/gyu','RestoController@gyu');
Route::get('/hana','RestoController@hana');
Route::get('/mcd','RestoController@mcd');
Route::get('/udon','RestoController@udon');
Route::get('/google-autocomplete', [GoogleController::class, 'index']);




// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::get('login', 'PegawaiController@showLoginForm')->name('login');
// Route::post('login', 'PegawaiController@login');
// Route::post('logout', 'PegawaiController@logout')->name('logout');
// Route::get('register', 'PegawaiController@showRegistrationForm')->name('register');
// Route::post('register', 'PegawaiController@register');
// Route::post('/examples/actions/confirmation', 'PegawaiController@confirmationAction');
// Route::post('/pegawai/storeUser','PegawaiController@storeUser');






