<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\SiswaController;

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

// user
Route::get('/', function () {
    return view('home');
});

// visi misi
Route::get('/visimisi', function () {
    return view('visimisi.index');
});

// kontak
Route::get('/kontak', function () {
    return view('kontak.index');
});

// route pengurus
Route::get('/pengurus', function () {
    return view('pengurus.index');
});
Route::get('/pengurus', [GuruController::class, 'index'])->name('pengurus.index');

// route galeri
Route::get('/foto', function () {
    return view('galeri.index');
});
Route::get('/foto', [GaleriController::class, 'index'])->name('galeri.index');

// route sejarah
Route::get('/sejarah', function () {
    return view('sejarah.index');
});

// route formulir siswa
Route::get('/formulir', function () {
    return view('formulir.index');
});
Route::post('/formulir', [FormulirController::class, 'store'])->name('formulir.store');

// route ppdb
Route::get('/ppdb', function () {
    return view('ppdb.index');
});

// route pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran.index');
});
Route::post('/pembayaran/sukses',[PesananController::class, 'buktiTransaksi'])->name('pembayaran.sukses');

// admin
// manajemen data pendaftar
Route::prefix('admin')->group(function () {
    Route::get('/', [ManajemanDataPendaftarController::class, 'index'])->name('index');
    Route::get('/create', [ManajemanDataPendaftarController::class, 'create'])->name('create');
    Route::post('/', [ManajemanDataPendaftarController::class, 'store'])->name('store');
    Route::get('/{id}', [ManajemanDataPendaftarController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ManajemanDataPendaftarController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ManajemanDataPendaftarController::class, 'update'])->name('update');
    Route::delete('/{id}', [ManajemanDataPendaftarController::class, 'destroy'])->name('destroy');
});

// manajemen data galeri
// use App\Http\Controllers\Admin\ManajemenDataGaleriController;
// Route::prefix('admin')->group(function () {
//     Route::get('manajemen_data_galeri/create', [GaleriController::class, 'create'])->name('admin.manajemen_data_galeri.create');
//     Route::post('manajemen_data_galeri', [GaleriController::class, 'store'])->name('admin.manajemen_data_galeri.store');
//     Route::get('manajemen_data_galeri/{galeri}/edit', [GaleriController::class, 'edit'])->name('admin.manajemen_data_galeri.edit');
//     Route::put('manajemen_data_galeri/{galeri}', [GaleriController::class, 'update'])->name('admin.manajemen_data_galeri.update');
//     Route::get('manajemen_data_galeri/{galeri}', [GaleriController::class, 'show'])->name('admin.manajemen_data_galeri.show');
//     Route::get('manajemen_data_galeri', [GaleriController::class, 'index'])->name('admin.manajemen_data_galeri.index');
// });

// manajemen data guru

// manajemen data siswa

// manajemen data pembayaran
