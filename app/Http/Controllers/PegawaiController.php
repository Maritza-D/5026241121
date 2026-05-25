<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // route parameter
    public function index($nama)
    {
        return $nama;
    }

    // formulir
    public function formulir()
    {
        return view('formulir');
    }

    // proses formulir
    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $umur = $request->input('umur');

        return "Nama : " . $nama .
            ",<br>Umur : " . $umur .
            ", <br>Alamat : " . $alamat;
    }
}
