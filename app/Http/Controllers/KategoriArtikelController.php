<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Artikel;
class KategoriArtikelController extends Controller
{
    public function index()
    {
        $kategori_artikel=Kategori_Artikel::all();
        
        return view('kategori_artikel.index',compact('kategori_artikel'));
    }
}
