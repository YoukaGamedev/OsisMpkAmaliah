<?php
use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\HalawalController;
use App\Http\Controllers\GaleriController;


// Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
// Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


Route::get('/logout', function () {
    Auth::logout();
    session()->flush();
    return redirect('/login');
});


Route::resource('useradmin', UserAdminController::class);

Route::resource('structure', StructureController::class);



Route::resource('vote', VoteController::class);
Route::resource('datakelas', DataKelasController::class);
Route::resource('datakandidat', DataKandidatController::class);
Route::resource('datadpt', DataDptController::class);
Route::resource('dashboardpemilu', DashboardController::class);
Route::post('/dashboardpemilu/mulai', [DashboardController::class, 'mulai'])->name('dashboardpemilu.mulai');
Route::post('/dashboardpemilu/toggle', [DashboardController::class, 'togglePemilu'])->name('dashboardpemilu.toggle');

Route::resource('hasilpemilihan', HasilPemilihanController::class);
Route::resource('home', HomerController::class);
Route::resource('/user/pemilu/pilihkandidat', PilihKandidatController::class,);

Route::get('/user/berespilih', [UserController::class, 'berespilih'])->name('user.berespilih');


Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/rekapgds/json', [RekapGDSController::class, 'json']);


Route::get('user', function () {
    return view('/user/welcome');
});

Route::get('admingds', function () {
    return view('/admin/gds/indexgds');
});

Route::get('/struktur', [UserController::class, 'struktur'])->name('user.struktur');
Route::get('/user/agenda', [UserController::class, 'agenda'])->name('user.agenda');
Route::get('/user/agenda/show/{id}', [UserController::class, 'agendaS'])->name('user.agenda.show');
Route::get('/user/jadwalgds', [UserController::class, 'jadwalgds'])->name('user.jadwalgds');
Route::resource('pelanggaran', PelanggaranController::class);
// Route::put('/pelanggaran/{pelanggaran}', [PelanggaranController::class, 'update'])->name('pelanggaran.update');


// Route::resource('gds', GdsController::class);
Route::resource('tambahdata', TambahDataController::class);
Route::resource('lembargds', LembarGdsController::class);
Route::resource('rekapgds', RekapGdsController::class);
Route::resource('siswa', SiswaController::class);
Route::get('/search', [SiswaController::class, 'search'])->name('siswa.search');
Route::resource('jadwalgds', JadwalPiketGDSController::class);
Route::resource('agenda', AgendaController::class);

Route::post('/reset-data', [HasilPemilihanController::class, 'reset'])->name('reset.data');

Route::get('/profilosis', [HalawalController::class, 'profilosis'])->name('profilosis');

Route::get('/gambar', [HalawalController::class, 'galeri']);

Route::get('/programkerja', [HalawalController::class, 'programkerja']);

Route::get('/developer', function () {
    return view('developer');
})->name('developer');

Route::resource('galeri', GaleriController::class);
