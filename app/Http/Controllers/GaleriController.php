<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all(); 
        // dd($guru);
        return view('galeri.index', compact('galeri'));

    }
}
