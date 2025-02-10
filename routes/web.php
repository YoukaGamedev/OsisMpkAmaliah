<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\DataKandidatController;
use App\Http\Controllers\DataDptController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomerController;
use App\Http\Controllers\PilihKandidatController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LembarGdsController;
use App\Http\Controllers\RekapGdsController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TambahDataController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Login & Logout Routes

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


Route::get('/logout', function () {
    Auth::logout();
    session()->flush();
    return redirect('/login');
});

// Route untuk User (hanya bisa diakses oleh user)
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/welcome', function () {
        return view('user.welcome');
    })->name('user.welcome');

    Route::resource('/user/pemilu/home', HomerController::class);
    Route::resource('/user/pemilu/pilihkandidat', PilihKandidatController::class);
    Route::get('/user/pemilu/berespilih', function () {
        return view('user/pemilu/berespilih');
    });
});

// Route untuk Admin (hanya bisa diakses oleh admin)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin/index');
    });

    Route::resource('/admin/pemilu/datakelas', DataKelasController::class);
    Route::resource('/admin/pemilu/datakandidat', DataKandidatController::class);
    Route::resource('/admin/pemilu/datadpt', DataDptController::class);
    Route::resource('/admin/pemilu/dashboard', DashboardController::class);

    Route::get('/admin/pemilu/hasilpemilihan', function () {
        return view('admin/pemilu/hasilpemilihan');
    });

    Route::get('/admin/pemilu/daftarhadir', function () {
        return view('admin/pemilu/daftarhadir');
    });

    Route::resource('admin/gds/tambahdata/tambahdata', TambahDataController::class);
    Route::resource('admin/gds/lembargds/lembargds', RekapGdsController::class);
    Route::resource('admin/gds/rekapgds/rekapgds', RekapGdsController::class);

    Route::get('/lembar-gds', [LembarGdsController::class, 'index'])->name('lembar-gds.index');
    
    Route::get('/admin/gds/indexgds', function () {
        return view('/admin/gds/indexgds');
    });

    Route::get('/admin/gds/jadwalgds/index', function () {
        return view('/admin/gds/jadwalgds/index');
    });

    Route::resource('siswa', SiswaController::class);
    Route::get('/siswa/search', [SiswaController::class, 'search'])->name('siswa.search');
});

   