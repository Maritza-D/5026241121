<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">

            <a class="navbar-brand" href="/pegawai">
                5026241121
            </a>

            <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">Pegawai</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/blog/tentang">Tentang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/blog/kontak">Kontak</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- Header -->
    <div class="container mt-5">

        <center>

            <h2>Maritza Dara Athifa</h2>

            <p>
                Praktikum Laravel CRUD Pegawai
            </p>

        </center>

        <hr>

        <!-- Konten -->
        @yield('konten')

    </div>

    <!-- JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
