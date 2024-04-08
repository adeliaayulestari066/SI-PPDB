<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/visimisi', function () {
    return view('visimisi.index');
});

Route::get('/kontak', function () {
    return view('kontak.index');
});

Route::get('/pengurus', function () {
    return view('pengurus.index');
});

Route::get('/foto', function () {
    return view('galeri.index');
});

Route::get('/sejarah', function () {
    return view('sejarah.index');
});

Route::get('/formulir', function () {
    return view('formulir.index');
});

Route::get('/ppdb', function () {
    return view('ppdb.index');
});

Route::get('/pembayaran', function () {
    return view('pembayaran.index');
});