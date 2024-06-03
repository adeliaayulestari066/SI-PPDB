<?php


use App\Http\Controllers\Admin\DatapembayaranController as AdminDatapembayaranController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataguruController as AdminDataguruController;
use App\Http\Controllers\Admin\DatagaleriController as AdminDatagaleriController;
use App\Http\Controllers\admin\DatasiswaController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\DataguruController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiwayatController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);

// Route::get('/adminpage', function () {
//     return view('admin.loginadmin');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/formulir/', function () {
    return view('formulir.index');
})->middleware(['auth', 'verified']);
Route::post('/formulir/store', [\App\Http\Controllers\SiswaController::class, 'store'])->name('formulir.simpan');

require __DIR__ . '/auth.php';

// user
// beranda
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/', function () {
    if (Auth::check() && Auth::user()->usertype === "admin") {
        return redirect()->route('admin');
    } else {
        return redirect()->route('home');
    }
    // return view('home');
})->name('home');

// visi misi
Route::get('/visimisi', function () {
    return view('visimisi.index');
});

// kontak
Route::get('/kontak', function () {
    return view('kontak.index');
})->name('kontak.index');

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
// Route::get('/formulir/', function () {
//     return view('formulir.index');
// });
// Route::post('/formulir/store', [\App\Http\Controllers\SiswaController::class, 'store'])->name('formulir.simpan');

// route ppdb
Route::get('/ppdb', function () {
    return view('ppdb.index');
})->name('ppdb.index');

// route pembayaran
// Route::get('/pembayaran', function () {
//     return view('transaksi.index');
// });
// Route::post('/pembayaran/store',[PembayaranController::class, 'store'])->name('pembayaran.simpan');

// route bayar
// Rute untuk menampilkan halaman pembayaran dengan middleware auth
Route::get('/bayar', [BayarController::class, 'index'])
    ->middleware('auth')
    ->name('bayar');

// Rute untuk menyimpan data pembayaran dengan middleware auth
Route::post('/bayar/store', [BayarController::class, 'store'])
    ->middleware('auth')
    ->name('bayar.simpan');

// route terima kasih
Route::get('/terimakasih', function () {
    return view('terimakasih.index');
})->middleware('auth')->name('terimakasih');

// Rute untuk menampilkan riwayat transaksi dengan middleware auth
Route::get('/riwayat-transaksi', [RiwayatController::class, 'index'])
    ->middleware('auth')
    ->name('riwayat-transaksi');

// route admin
// route dashboard
// Route::get('/admin', function () {
//     return view('admin.index');
//     })->middleware(['auth', 'verified']);   

Route::get('/admin', [HomeController::class, 'adminindex'])->name('admin')->middleware(['auth', 'verified']);

// route manajemen data siswa
Route::get('/data-siswa', [DatasiswaController::class, 'index'])->name('data-siswa');
Route::get('/siswa/{id}/edit', [\App\Http\Controllers\Admin\DatasiswaController::class, 'edit']);
Route::put('/siswa/{id}', [\App\Http\Controllers\Admin\DatasiswaController::class, 'update']);
Route::get('/data-siswa/tambah', [DatasiswaController::class, 'tambah']);
Route::post('/data-siswa/simpan', [DatasiswaController::class, 'store'])->name('data-siswa-simpan');
Route::delete('/data-siswa/{siswa}/hapus', [DatasiswaController::class, 'hapus'])
    ->name('data-siswa.hapus');
Route::get('/data-siswa/{siswa_id}/cetak', [DatasiswaController::class, 'cetak'])->name('data-siswa.cetak');
Route::get('/data-siswa/{siswa}/lihat', [DatasiswaController::class, 'show'])->name('data-siswa.lihat');

// route manajemen data pengurus dan guru
Route::get('/data-guru', [AdminDataguruController::class, 'index'])->name('data-guru');
Route::get('/guru/{id}/edit', [AdminDataguruController::class, 'edit']);
Route::put('/guru/{id}', [AdminDataguruController::class, 'update']);
Route::get('/data-guru/tambah', [AdminDataguruController::class, 'tambah']);
Route::post('/data-guru/simpan', [AdminDataguruController::class, 'store'])->name('data-guru-simpan');
Route::delete('/data-guru/{guru}/hapus', [AdminDataguruController::class, 'hapus'])->name('data-guru.hapus');
Route::get('/data-guru/{guru}/cetak', [AdminDataguruController::class, 'cetak'])->name('data-guru.cetak');
Route::get('/data-guru/{guru}/lihat', [AdminDataguruController::class, 'show'])->name('data-guru.lihat');

// route manajemen galeri
Route::get('/data-galeri', [AdminDatagaleriController::class, 'index'])->name('data-galeri.index');
Route::get('/galeri/{id}/edit', [AdminDatagaleriController::class, 'edit']);
Route::put('/galeri/{id}', [AdminDatagaleriController::class, 'update']);
Route::get('/data-galeri/tambah', [AdminDatagaleriController::class, 'tambah']);
Route::post('/data/simpan', [AdminDatagaleriController::class, 'store'])->name('data-galeri-simpan');
Route::delete('/data-galeri/{galeri}/hapus', [AdminDatagaleriController::class, 'hapus'])->name('data-galeri.hapus');
Route::get('/data-galeri/{galeri}/lihat', [AdminDatagaleriController::class, 'show'])->name('data-galeri.lihat');

// route manajemen pembayaran
Route::get('/data-pembayaran', [AdminDatapembayaranController::class, 'index'])->name('data-pembayaran.index');
Route::get('/pembayaran/{id}/edit', [AdminDatapembayaranController::class, 'edit']);
Route::put('/pembayaran/{id}', [AdminDatapembayaranController::class, 'update']);
Route::get('/data-pembayaran/tambah', [AdminDatapembayaranController::class, 'tambah']);
Route::post('/data-pembayaran/simpan', [AdminDatapembayaranController::class, 'store'])->name('data-pembayaran-simpan');
Route::get('/data-pembayaran/{pembayaran}/lihat', [AdminDatapembayaranController::class, 'show'])->name('data-pembayaran.lihat');
Route::get('/data-pembayaran/{pembayaran}/cetak', [AdminDatapembayaranController::class, 'cetak'])->name('data-pembayaran.cetak');

// // route edit formulit
// Route::get('/siswa-user', [SiswaController::class, 'index2'])->name('siswa.index');
// Route::get('/siswa-user/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
// Route::put('/siswa-user/{id}', [SiswaController::class, 'update'])->name('siswa.update');

// Rute untuk menampilkan daftar siswa dengan middleware auth
Route::get('/siswa-user', [SiswaController::class, 'index2'])
    ->middleware('auth')
    ->name('siswa.index');

// Rute untuk menampilkan form siswa dengan middleware auth
Route::get('/siswa-user/{id}/edit', [SiswaController::class, 'edit'])
    ->middleware('auth')
    ->name('siswa.edit');

// // Rute untuk memperbarui data siswa dengan middleware auth
// Route::put('/siswa-user/{id}', [SiswaController::class, 'update'])
//     ->middleware('auth')
//     ->name('siswa.update');