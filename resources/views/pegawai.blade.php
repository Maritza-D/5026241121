<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
</head>
<body>

    <h2>Data Pegawai</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>

        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_id }}</td>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>
