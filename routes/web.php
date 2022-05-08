<?php

use App\Http\Controllers\laborancontroller;
use Illuminate\Support\Facades\Route;
use App\Models\pasien;

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

Route::get('/dokter/login', function () {
    return view('login_dokter');
});

Route::get('/laboran/login', function () {
    return view('login_laboran');
});

Route::get('/laboran', [laborancontroller::class, 'index']);
Route::post('/laboran', [laborancontroller::class, 'store']);

Route::get('/data/pasien', function () {
    return view('input_data_laboran');
});

Route::get('/input/penjelasan', function () {
    return view('input_penjelasan');
});

Route::get('/sisi/dokter', function () {
    return view('sisi-dokter');
});

Route::get('/tentang/kami', function () {
    return view('tentang-kami');
});

Route::get('/sisi/pasien', function () {
    return view('sisi_pasien');
});

Route::get('/login/pasien', function () {
    return view('loginn_pasien');
});

Route::get('/daftar/akun/pasien', function () {
    return view('daftar_akun');
});

Route::get('/sisi/laboran', function () {
    return view('sisi_laboran');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/tambah', function () {
    return view('Tambah_pasien');
});

Route::get('/profil/dokter', function () {
    return view('profil_dokter');
});

Route::get('/profil/laboran', function () {
    return view('profil_laboran');
});

Route::get('/Home/laboran', function () {
    return view('HomeLaboran');
});

Route::get('/Home/dokter', function () {
    return view('HomeDokter');
});

Route::get('/Bantuan/laboran', function () {
    return view('bantuan_laboran');
});

Route::get('/Bantuan/dokter', function () {
    return view('bantuan_dokter');
});

Route::get('/Tentang/laboran', function () {
    return view('tentang_laboran');
});

Route::get('/Home/pasien', function () {
    return view('HomePasien');
});

Route::get('/Profil/pasien', function () {
    return view('profil_pasien');
});