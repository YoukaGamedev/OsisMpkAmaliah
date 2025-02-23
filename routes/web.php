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

// Route::resource('auth', AuthController::class);


Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


Route::middleware(['auth'])->group(function () {
    Route::get('/user/welcome', function () {
        return view('user.welcome');
    })->name('user.welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    session()->flush();
    return redirect('/login');
});



// Route::post('/vote', [VoteController::class, 'store'])->name('vote.store')->middleware('auth');
Route::resource('vote', VoteController::class);

//Route::resource('/admin', AdminController::class);
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

Route::get('user/welcome', function () {
    return view('/user/welcome');
});
 
Route::resource('gds', GdsController::class);

Route::get('/admin/gds/jadwalgds/index', function () {
    return view('/admin/gds/jadwalgds/index');
});

Route::resource('admin/gds/tambahdata/tambahdata', TambahDataController::class);


Route::resource('admin/gds/lembargds/lembargds', RekapGdsController::class);
Route::get('/lembar-gds', [LembarGdsController::class, 'index'])->name('lembar-gds.index');

Route::resource('rekapgds', RekapGdsController::class);

Route::resource('siswa', SiswaController::class);
Route::get('/admin/gds/lembargds/searchdata', [SiswaController::class, 'search'])->name('siswa.search');







// Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
// Route::get('/siswa/search', [SiswaController::class, 'search'])->name('siswa.search');
// Route::post('/siswa/check/{id}', [SiswaController::class, 'checkAndStoreLembarGds'])->name('siswa.checkAndStore');
// Route::get('/siswa/{id}/edit', [SiswaController::class , 'edit'])->name('siswa.edit');
// Route::post('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');








//Route::resource('rekapgds', RekapGdsController::class,);

//  Route::get('/admin/gds/rekapgds', [RekapGdsController::class, 'index'])->name('rekapgds.index');
//  Route::get('/admin/gds/rekapgds/create', [RekapGdsController::class, 'create'])->name('rekapgds.create');