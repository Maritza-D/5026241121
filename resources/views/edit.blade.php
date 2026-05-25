@extends('template')

@section('title', 'Edit Pegawai')

@section('konten')

<h3>Edit Data Pegawai</h3>

<a href="/pegawai" class="btn btn-secondary">
    Kembali
</a>

<br/>
<br/>

@foreach($pegawai as $p)

<form action="/pegawaiupdate" method="post">

    {{ csrf_field() }}

    <input type="hidden"
        name="id"
        value="{{ $p->pegawai_id }}">

    <div class="form-group">

        <label>Nama</label>

        <input type="text"
            required="required"
            name="nama"
            value="{{ $p->pegawai_nama }}"
            class="form-control">

    </div>

    <div class="form-group">

        <label>Jabatan</label>

        <input type="text"
            required="required"
            name="jabatan"
            value="{{ $p->pegawai_jabatan }}"
            class="form-control">

    </div>

    <div class="form-group">

        <label>Umur</label>

        <input type="number"
            required="required"
            name="umur"
            value="{{ $p->pegawai_umur }}"
            class="form-control">

    </div>

    <div class="form-group">

        <label>Alamat</label>

        <textarea required="required"
            name="alamat"
            class="form-control">{{ $p->pegawai_alamat }}</textarea>

    </div>

    <input type="submit"
        value="Simpan Data"
        class="btn btn-primary">

</form>

@endforeach

@endsection
