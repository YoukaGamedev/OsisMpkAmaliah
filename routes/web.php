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



//Route::resource('/admin', AdminController::class);
Route::resource('/admin/datakelas', DataKelasController::class);
Route::resource('/admin/datakandidat', DataKandidatController::class);
Route::resource('/admin/datadpt', DataDptController::class);

Route::resource('/admin/dashboard', DashboardController::class);

Route::resource('/user/home', HomerController::class);
Route::resource('/user/pilihkandidat', PilihKandidatController::class,);

Route::post('/admin/votes/{kandidat}', [VoteController::class, 'store'])
    ->name('vote.store')
    ->middleware('auth');

Route::get('/admin/votes', [VoteController::class, 'index'])->name('/admin/votes');
Route::get('/after-login-vote', [VoteController::class, 'afterLoginVote'])->name('after-login-vote');




Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/index');
});


Route::get('/admin/hasilpemilihan', function () {
    return view('admin/hasilpemilihan');
});

Route::get('/admin/daftarhadir', function () {
    return view('admin/daftarhadir');
});

Route::get('/user/berespilih', function () {
    return view('user/berespilih');
});

Route::get('user/welcome', function () {
    return view('/user/welcome');
});

Route::get('user/formlogin', function () {
    return view('user/formlogin');
});
 
Route::get('/admin/gds/indexgds', function () {
    return view('/admin/gds/indexgds');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/gds/lembargds', RekapGdsController::class);
Route::get('/lembar-gds', [LembarGdsController::class, 'index'])->name('lembar-gds.index');




Route::resource('admin/gds/rekapgds', RekapGdsController::class);
Route::get('/siswa/search', [SiswaController::class, 'search'])->name('siswa.search');
Route::post('/siswa/scan', [SiswaController::class, 'scan'])->name('siswa.scan');
Route::post('/scan/store', [SiswaController::class, 'storeScan'])->name('scan.store');

Route::post('/siswa/check/{id}', [SiswaController::class, 'checkAndStoreLembarGds'])->name('siswa.checkAndStore');
Route::get('/siswa/{id}/edit', [SiswaController::class , 'edit'])->name('siswa.edit');
Route::post('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');








//Route::resource('rekapgds', RekapGdsController::class,);

//  Route::get('/admin/gds/rekapgds', [RekapGdsController::class, 'index'])->name('rekapgds.index');
//  Route::get('/admin/gds/rekapgds/create', [RekapGdsController::class, 'create'])->name('rekapgds.create');