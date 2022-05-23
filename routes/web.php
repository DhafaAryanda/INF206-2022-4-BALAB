<?php

use App\Http\Controllers\laborancontroller;
// use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\LoginPasienController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\logoutController;
// use App\Http\Controllers\laborancontroller;
use Illuminate\Support\Facades\Route;
use App\Models\pasien;
use App\Models\Dokter;
use App\Models\User;
use App\Models\Laboran;
use App\Models\dataPasien;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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

Route::get('/dokter/login', [Logincontroller::class, 'index1'])->middleware('guest');
Route::post('/dokter/login', [Logincontroller::class, 'authenticate1']);


Route::get('/laboran/login', [Logincontroller::class, 'index2'])->middleware('guest');
Route::post('/laboran/login', [Logincontroller::class, 'authenticate2']);

Route::get('/laboran', [laborancontroller::class, 'index'])->middleware('auth');
Route::post('/laboran', [laborancontroller::class, 'store']);

Route::get('/input/penjelasan/{post:id}', function (dataPasien $post) {
    return view('input_penjelasan', [
        "post" => $post
    ]);
})->middleware('auth');

Route::post('/input/penjelasan', function (Request $request) {
    $validateData['dokter_id']= Auth()->user()->id;
    $validateData['comment']=$request->comment;
    dataPasien::where('id',$request->record_id)
    ->update($validateData);
    return redirect('/sisi/dokter')->with('update', 'Data Berhasil di update');
});

Route::get('/sisi/dokter', [DokterController::class, 'index'])->middleware('auth');

Route::post('/sisi/dokter', [DokterController::class, 'store']);//input data pasien

// Route::resource('media', MediaController::class);


Route::get('/tentang/kami', function () {
    return view('tentang-kami');
})->middleware('auth');;

Route::get('/sisi/pasien/{post:id}',  [pasienController::class, 'indexSisi'])->middleware('auth');

Route::get('/sisi/pasien/',  [pasienController::class, 'indexSisi2'])->middleware('auth');
   


Route::get('/login/pasien', [App\Http\Controllers\Logincontroller::class, 'index3']);
Route::post('/login/pasien', [App\Http\Controllers\Logincontroller::class, 'authenticate3']);

Route::get('/daftar/akun/pasien', [App\Http\Controllers\LoginPasienController::class, 'index'])->middleware('guest');
 Route::post('/daftar/akun/pasien', [App\Http\Controllers\LoginPasienController::class, 'store']);


Route::get('/sisi/laboran/{post:id}', [laborancontroller::class, 'indexSisi'])->middleware('auth');

Route::post('/sisi/laboran',[laborancontroller::class, 'storePDF']);


Route::get('/bantuan', function () {
    return view('bantuan');
})->middleware('auth');

// Route::get('/tambah', function () {
//     return view('Tambah_pasien');
// });

Route::get('/profil/dokter', [DokterController::class, 'indexProfil'])->middleware('auth');
Route::post('/profil/dokter', [DokterController::class, 'storeProfil']);

Route::get('/profil/laboran', [laborancontroller::class, 'indexProfil'])->middleware('auth');
Route::post('/profil/laboran', [laborancontroller::class, 'storeProfil']);

Route::get('/Home/laboran', function () {
    return view('HomeLaboran');
})->middleware('auth');

Route::get('/Home/dokter', function () {
    return view('HomeDokter');
})->middleware('auth');;

Route::get('/Bantuan/laboran', function () {
    return view('bantuan_laboran');
})->middleware('auth');

Route::get('/Bantuan/dokter', function () {
    return view('bantuan_dokter');
});

Route::get('/Tentang/laboran', function () {
    return view('tentang_laboran');
});

Route::get('/Home/pasien', function () {
    return view('HomePasien',[
        "post" => dataPasien::where('user_id',Auth()->user()->id)->get()
    ]);
})->middleware('auth');


Route::get('/Profil/pasien', [pasienController::class, 'indexProfil'])->middleware('auth');;

Route::post('/Profil/pasien', [pasienController::class, 'storeProfil']);
Route::post('/logout', [logoutController::class, 'logout']);
