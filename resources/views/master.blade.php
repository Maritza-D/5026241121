<!DOCTYPE html>
<html>

<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="container">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">
                        PEGAWAI
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blog">
                        HOME
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blog/tentang">
                        TENTANG
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blog/kontak">
                        KONTAK
                    </a>
                </li>

            </ul>

        </nav>

        <hr />

        <center>

            <h3>5026241121 - Maritza Dara Athifa</h3>

            <p>
                Praktikum Laravel CRUD Pegawai
            </p>

        </center>

        <br />

        <!-- Judul Halaman -->
        <h4>@yield('judul_halaman')</h4>

        <br />

        <!-- Konten -->
        @yield('konten')

        <br />
        <br />

        <hr />

        <footer>

            <center>

                <p>
                    &copy; 2026 - Maritza Dara Athifa
                </p>

            </center>

        </footer>

    </div>

</body>

</html>
