<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->usertype;
        
            if ($usertype == 'user') {
                return redirect()->route('home');
            } else if ($usertype == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect()->back();
            }
        } else {
            // Jika user belum login, redirect ke halaman login
            return redirect()->route('login');
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
