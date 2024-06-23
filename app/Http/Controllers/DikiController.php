<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota; // Menggunakan namespace model yang benar
use App\Models\Hadiah; // Menggunakan namespace model yang benar

class DikiController extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        return view('anggota', ['anggota' => $anggota]); // Menggunakan tanda kutip tunggal yang benar
        
    }
}
