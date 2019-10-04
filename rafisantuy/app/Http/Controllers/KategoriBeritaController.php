<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        $listKategoriBerita=KategoriBerita::all();
        return view('kategori_berita.index',compact('listKategoriBerita'));
    }
     
    public function show($id){

        $kategoriBerita=kategoriBerita::find($id);

        return view('kategori_berita.show', compact('kategoriBerita'));
    }

    
}
