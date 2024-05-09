<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home');
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }
    public function adminindex()
    {
        $jumlahSiswa = Siswa::count();
        $jumlahPembayaran = Pembayaran::where('status', 'menunggu konfirmasi')->count();
        $jumlahPembayaranDiterima = Pembayaran::where('status', 'diterima')->count();

        return view('admin.index', [
            'jumlahSiswa' => $jumlahSiswa,
            'jumlahPembayaran' => $jumlahPembayaran,
            'jumlahPembayaranDiterima' => $jumlahPembayaranDiterima
        ]);
    }
}
