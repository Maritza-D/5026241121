<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Seminar Teknologi - Maritza Dara Athifa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: #f4f7f6;
        }

        .header-space {
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .toast-position {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="jumbotron header-space text-center">
            <h1 class="display-4">Seminar Inovasi RoboDog 2026</h1>
            <p class="lead">Kolaborasi ITS, Indosat, dan NVIDIA dalam pengembangan AI.</p>
            <hr class="my-4">
            <p>Klik tombol di bawah untuk mengonfirmasi kehadiran Anda pada acara ini.</p>

            <button type="button" class="btn btn-success btn-lg" id="btnKonfirmasi">
                Konfirmasi Kehadiran
            </button>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Detail Acara</h3>
                <p>Seminar ini akan membahas integrasi jaringan 5G dengan robotika otonom. Peserta akan mendapatkan
                    sertifikat digital dan akses ke AI-Ran Research Center.</p>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow-sm">
                    <h5>Lokasi:</h5>
                    <p>Gedung Research Center ITS, Surabaya</p>
                </div>
            </div>
        </div>
    </div>

    <div class="toast-position">
        <div id="notifSukses" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
            <div class="toast-header bg-primary text-white">
                <strong class="mr-auto">Sistem Pendaftaran</strong>
                <small>Baru saja</small>
                <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Selamat! Nama Anda telah berhasil terdaftar sebagai peserta seminar.
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#btnKonfirmasi").click(function() {
                $('#notifSukses').toast('show');
            });
        });
    </script>

</body>

</html>
