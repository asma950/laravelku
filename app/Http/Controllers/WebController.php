<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Pastikan namespace model benar

class WebController extends Controller
{
   public function index(){
       $artikel = Article::all(); // Menggunakan Article yang benar
       return view('article', ['artikel' => $artikel]);
   }
}
