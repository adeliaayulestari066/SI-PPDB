<?php

use App\Http\Controllers\Admin\DataguruController as AdminDataguruController;
use App\Http\Controllers\admin\DatasiswaController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\DataguruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

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

// route admin
// route dashboard
Route::get('/admin', function () {
    return view('admin.index');
    });   

// route manajemen data siswa
Route::get('/data-siswa', [DatasiswaController::class, 'index'])->name('data-siswa');
Route::get('/siswa/{id}/edit', [\App\Http\Controllers\Admin\DatasiswaController::class, 'edit']);
Route::put('/siswa/{id}', [\App\Http\Controllers\Admin\DatasiswaController::class, 'update']);
Route::get('/data-siswa/tambah', [DatasiswaController::class, 'tambah']);
Route::post('/data/simpan', [DatasiswaController::class, 'store'])->name('data.simpan');
Route::delete('/data-siswa/{siswa}/hapus', [DatasiswaController::class, 'hapus'])
        ->name('data-siswa.hapus');
Route::get('/data-siswa/{siswa_id}/cetak', [DatasiswaController::class, 'cetak'])->name('data-siswa.cetak');
Route::get('/data-siswa/{siswa}/lihat', [DatasiswaController::class, 'show'])->name('data-siswa.lihat');

// route manajemen data pengurus dan guru
Route::get('/data-guru', [AdminDataguruController::class, 'index'])->name('data-guru');
Route::get('/guru/{id}/edit', [AdminDataguruController::class, 'edit']);
Route::put('/guru/{id}', [AdminDataguruController::class, 'update']);
Route::get('/data-guru/tambah', [AdminDataguruController::class, 'tambah']);
Route::post('/data/simpan', [AdminDataguruController::class, 'store'])->name('data-guru-simpan');
Route::delete('/data-guru/{guru}/hapus', [AdminDataguruController::class, 'hapus'])->name('data-guru.hapus');
Route::get('/data-guru/{guru}/cetak', [AdminDataguruController::class, 'cetak'])->name('data-guru.cetak');
Route::get('/data-guru/{guru}/lihat', [AdminDataguruController::class, 'show'])->name('data-guru.lihat');

// route manajemen galeri