<?php

use App\Http\Controllers\BayarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PembayaranController;
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
// beranda
Route::get('/', function () {
    return view('home');
})->name('home');

// visi misi
Route::get('/visimisi', function () {
    return view('visimisi.index');
});

// kontak
Route::get('/kontak', function () {
    return view('kontak.index');
});

// route pengurus dan guru
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
Route::get('/formulir/', function () {
    return view('formulir.index');
});
Route::post('/formulir/store', [\App\Http\Controllers\SiswaController::class, 'store'])->name('formulir.simpan');

// route ppdb
Route::get('/ppdb', function () {
    return view('ppdb.index');
});

// route pembayaran
// Route::get('/pembayaran', function () {
//     return view('transaksi.index');
// });
// Route::post('/pembayaran/store',[PembayaranController::class, 'store'])->name('pembayaran.simpan');

// route bayar
Route::get('/bayar', function () {
    return view('bayar.index');
})->name('bayar');
Route::post('/bayar/store',[BayarController::class, 'store'])->name('bayar.simpan');

// route terima kasih
Route::get('/terimakasih', function () {
    return view('terimakasih.index');
})->name('terimakasih');
