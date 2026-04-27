<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Doesoen Roti</title>

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center">

    <a href="#" class="logo d-flex align-items-center me-auto">
      <h1 class="sitename">DOESOEN ROTI</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#why-us">Promo</a></li>
        <li><a href="#services">Produk</a></li>
      </ul>
    </nav>

  </div>
</header>

<main class="main">

<!-- HERO -->
<section id="hero" class="hero section dark-background">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1>Doesoen Roti Bakery</h1>
        <p>
          Snack Box Acara • Fresh • Halal <br>
          Buka setiap hari 06.00–22.00
        </p>

        <div class="d-flex">
          <a href="#" class="btn-get-started">Order Sekarang</a>
          <a href="https://instagram.com/doesoen_roti"
             class="btn-watch-video d-flex align-items-center">
            <i class="bi bi-instagram"></i>
            <span>Instagram</span>
          </a>
        </div>
      </div>

      <div class="col-lg-6">
        <img src="{{ asset('assets/img/woolbread.jpg') }}" class="img-fluid">
      </div>

    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="section light-background">
  <div class="container text-center">
    <h2>Tentang Kami</h2>
    <p>
      Doesoen Roti adalah bakery yang menyediakan snack box untuk berbagai acara.
      Menyajikan roti fresh, halal, dan berkualitas untuk kebutuhan harian.
    </p>
  </div>
</section>

<!-- PROMO -->
<section id="why-us" class="section">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h2>Promo Spesial</h2>
        <p>Promo harian tersedia</p>
        <p>Paket snack box untuk acara</p>
        <p>Diskon pembelian tertentu</p>
      </div>

      <div class="col-lg-6">
        <img src="{{ asset('assets/img/promo1.webp') }}" class="img-fluid">
      </div>

    </div>
  </div>
</section>

<!-- PRODUK -->
<section id="services" class="section light-background">
  <div class="container text-center">

    <h2>Produk Kami</h2>

    <div class="row">

      <div class="col-lg-4">
        <img src="{{ asset('assets/img/produkdoti1.jpg') }}" class="img-fluid">
        <h4>Mini Cake</h4>
        <p>Beragam pilihan cake dengan tampilan menarik</p>
      </div>

      <div class="col-lg-4">
        <img src="{{ asset('assets/img/produkdoti2.jpg') }}" class="img-fluid">
        <h4>Snack Box</h4>
        <p>Cocok untuk acara dan kebutuhan harian</p>
      </div>

      <div class="col-lg-4">
        <img src="{{ asset('assets/img/produkdoti3.jpg') }}" class="img-fluid">
        <h4>Aneka Roti</h4>
        <p>Roti lembut dengan berbagai varian rasa</p>
      </div>

    </div>

  </div>
</section>

</main>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
