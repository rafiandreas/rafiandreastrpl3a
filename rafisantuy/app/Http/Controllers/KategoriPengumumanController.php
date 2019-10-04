<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        $listKategoriPengumuman=KategoriPengumuman::all();
        return view('kategori_pengumuman.index',compact('listPengumuman'));
    }
     
    public function show($id){

        $kategoriPengumuman=kategoriPengumuman::find($id);

        return view('kategori_pengumuman.show', compact('kategoriPengumuman'));
    }

    
}