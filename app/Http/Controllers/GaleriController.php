<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
class GaleriController extends Controller
{
    
       public function index()
    {
        $galeri=Galeri::all();
        
        return view('galeri.index',compact('galeri'));
    }
}
