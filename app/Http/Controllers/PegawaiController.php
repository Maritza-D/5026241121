<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // route parameter lama
    public function index($nama)
    {
        return $nama;
    }

    // tampil data pegawai dari database
    public function pegawai()
    {
        $pegawai = DB::table('pegawai')->get();

        return view('pegawai', ['pegawai' => $pegawai]);
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
