<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\DataKandidatController;
use App\Http\Controllers\DataDptController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomerController;
use App\Http\Controllers\PilihKandidatController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LembarGdsController;
use App\Http\Controllers\RekapGdsController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TambahDataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HasilPemilihanController;
use App\Http\Controllers\GdsController;
use App\Http\Controllers\JadwalPiketGDSController;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/welcome', function () {
//         return view('user.welcome');
//     })->name('user.welcome');
// });

Route::get('/logout', function () {
    Auth::logout();
    session()->flush();
    return redirect('/login');
});


Route::resource('vote', VoteController::class);
Route::resource('datakelas', DataKelasController::class);
Route::resource('datakandidat', DataKandidatController::class);
Route::resource('datadpt', DataDptController::class);
Route::resource('dashboardpemilu', DashboardController::class);
Route::resource('hasilpemilihan', HasilPemilihanController::class);
Route::resource('/user/pemilu/home', HomerController::class);
Route::resource('/user/pemilu/pilihkandidat', PilihKandidatController::class,);



Route::get('/admin', function () {
    return view('admin/index');
});


Route::get('/user/pemilu/berespilih', function () {
    return view('user/pemilu/berespilih');
});

Route::get('user', function () {
    return view('/user/welcome');
});
 
Route::resource('gds', GdsController::class);
Route::resource('tambahdata', TambahDataController::class);
Route::resource('lembargds', LembarGdsController::class);
Route::resource('rekapgds', RekapGdsController::class);
Route::resource('siswa', SiswaController::class);
Route::get('/search', [SiswaController::class, 'search'])->name('siswa.search');
Route::resource('jadwalgds', JadwalPiketGDSController::class);

