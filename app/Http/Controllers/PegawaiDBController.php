<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    // tampil data pegawai
    public function index()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(10);

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    // cari data pegawai
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    // tampil form tambah pegawai
    public function tambah()
    {
        return view('tambah');
    }

    // simpan data pegawai
    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    // edit data pegawai
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')
            ->where('pegawai_id', $id)
            ->get();

        return view('edit', ['pegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        DB::table('pegawai')
            ->where('pegawai_id', $request->id)
            ->update([
                'pegawai_nama' => $request->nama,
                'pegawai_jabatan' => $request->jabatan,
                'pegawai_umur' => $request->umur,
                'pegawai_alamat' => $request->alamat
            ]);

        return redirect('/pegawai');
    }

    // hapus data pegawai
    public function hapus($id)
    {
        DB::table('pegawai')
            ->where('pegawai_id', $id)
            ->delete();

        return redirect('/pegawai');
    }
}
