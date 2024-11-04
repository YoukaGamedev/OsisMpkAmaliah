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

Route::middleware(['auth'])->group(function () {
    // Route yang butuh autentikasi
    Route::resource('/auth/register', RegisterController::class);
    // Tambahkan route lainnya di sini
});


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

Route::get('/admin/votes', [HasilController::class, 'index'])->name('/admin/votes');




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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
