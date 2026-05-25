@extends('template')

@section('title', 'Tambah Pegawai')

@section('konten')

<h3>Tambah Data Pegawai</h3>

<a href="/pegawai" class="btn btn-secondary">
    Kembali
</a>

<br/>
<br/>

<form action="/pegawaistore" method="post">

    {{ csrf_field() }}

    <div class="form-group">

        <label>Nama</label>

        <input type="text"
            name="nama"
            required="required"
            class="form-control">

    </div>

    <div class="form-group">

        <label>Jabatan</label>

        <input type="text"
            name="jabatan"
            required="required"
            class="form-control">

    </div>

    <div class="form-group">

        <label>Umur</label>

        <input type="number"
            name="umur"
            required="required"
            class="form-control">

    </div>

    <div class="form-group">

        <label>Alamat</label>

        <textarea name="alamat"
            required="required"
            class="form-control"></textarea>

    </div>

    <input type="submit"
        value="Simpan Data"
        class="btn btn-primary">

</form>

@endsection
