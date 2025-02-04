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



//Route::resource('/admin', AdminController::class);
Route::resource('/admin/pemilu/datakelas', DataKelasController::class);
Route::resource('/admin/pemilu/datakandidat', DataKandidatController::class);
Route::resource('/admin/pemilu/datadpt', DataDptController::class);
Route::resource('/admin/pemilu/dashboard', DashboardController::class);

Route::resource('/user/pemilu/home', HomerController::class);
Route::resource('/user/pemilu/pilihkandidat', PilihKandidatController::class,);



Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/index');
});


Route::get('/admin/pemilu/hasilpemilihan', function () {
    return view('admin/pemilu/hasilpemilihan');
});

Route::get('/admin/pemilu/daftarhadir', function () {
    return view('admin/pemilu/daftarhadir');
});

Route::get('/user/pemilu/berespilih', function () {
    return view('user/pemilu/berespilih');
});

Route::get('user/welcome', function () {
    return view('/user/welcome');
});
 
Route::get('/admin/gds/indexgds', function () {
    return view('/admin/gds/indexgds');
});

Route::get('/admin/gds/jadwalgds/index', function () {
    return view('/admin/gds/jadwalgds/index');
});

Route::resource('admin/gds/tambahdata/tambahdata', TambahDataController::class);


Route::resource('admin/gds/lembargds/lembargds', RekapGdsController::class);
Route::get('/lembar-gds', [LembarGdsController::class, 'index'])->name('lembar-gds.index');

Route::resource('admin/gds/rekapgds/rekapgds', RekapGdsController::class);

Route::resource('siswa', SiswaController::class);
Route::get('/siswa/search', [SiswaController::class, 'search'])->name('siswa.search');

// Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
// Route::get('/siswa/search', [SiswaController::class, 'search'])->name('siswa.search');
// Route::post('/siswa/check/{id}', [SiswaController::class, 'checkAndStoreLembarGds'])->name('siswa.checkAndStore');
// Route::get('/siswa/{id}/edit', [SiswaController::class , 'edit'])->name('siswa.edit');
// Route::post('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');








//Route::resource('rekapgds', RekapGdsController::class,);

//  Route::get('/admin/gds/rekapgds', [RekapGdsController::class, 'index'])->name('rekapgds.index');
//  Route::get('/admin/gds/rekapgds/create', [RekapGdsController::class, 'create'])->name('rekapgds.create');