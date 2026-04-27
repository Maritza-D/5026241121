<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Linktree Clone</title>

    <style>
        body {
            background-color: #a65a00;
            font-family: serif;
        }

        .main-box {
            width: 60%;
            margin: 5rem auto;
            background-color: #ff9900;
            border-radius: 2rem;
            text-align: center;
        }

        .top-icons {
            display: flex;
            justify-content: space-between;
            margin: 1.5rem 2rem;
        }

        .icon-circle {
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon-circle:hover {
            background-color: white;
        }

        .icon-circle img {
            width: 1.2rem;
        }

        .profile-img {
            width: 6rem;
            border-radius: 50%;
            margin-top: 1rem;
        }

        .title {
            font-size: 2rem;
            margin-top: 1rem;
            color: white;
        }

        .subtitle {
            color: white;
        }

        .box {
            width: 85%;
            margin: 2rem auto;
            background-color: white;
            border-radius: 1.5rem;
            box-shadow: 0.5rem 0.5rem 0 black;
        }

        .box:hover {
            background-color: #e0e0e0;
        }

        .grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 0.3rem;
            border-radius: 1rem;
            overflow: hidden;
        }

        .grid img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .grid img:nth-child(1) {
            grid-row: span 2;
        }

        .insta-title {
            letter-spacing: 0.5rem;
            margin-top: 1rem;
        }

        .follow-btn {
            background-color: #ddd;
            border-radius: 2rem;
            width: 30%;
            margin: 1rem auto;
            text-align: center;
        }

        .menu-btn {
            width: 85%;
            margin: 1rem auto;
            background-color: white;
            border-radius: 2rem;
            box-shadow: 0.5rem 0.5rem 0 black;
            display: flex;
            align-items: center;
            height: 3rem;
        }

        .menu-btn:hover {
            background-color: #e0e0e0;
        }

        .menu-left {
            display: flex;
            align-items: center;
            margin-left: 1rem;
            flex: 1;
        }

        .menu-left img {
            width: 1.5rem;
        }

        .menu-text {
            margin: 0 auto;
        }

        .menu-right {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            cursor: pointer;
        }

        .menu-right:hover {
            background-color: #d9d9d9;
        }

        .join {
            width: 60%;
            margin: 2rem auto;
            background-color: white;
            border-radius: 2rem;
            box-shadow: 0.3rem 0.3rem 0 rgba(0, 0, 0, 0.4);
        }

        .footer {
            margin-bottom: 2rem;
        }

        .footer span:hover {
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="main-box">

        <!-- ICON -->
        <div class="top-icons">
            <div class="icon-circle">
                <img src="{{ asset('assets/linktree.png') }}">
            </div>
            <div class="icon-circle">
                <img src="{{ asset('assets/sharelogo.png') }}">
            </div>
        </div>

        <!-- PROFILE -->
        <img src="{{ asset('assets/logobosscha.png') }}" class="profile-img">
        <div class="title">Tea Heritage</div>
        <div class="subtitle">Tea | Coffee | Eatery | Community | Events</div>

        <!-- INSTAGRAM -->
        <div class="box">

            <div class="grid">
                <img src="{{ asset('assets/bclumpiabangkok.jpg') }}">
                <img src="{{ asset('assets/bceskrim.jpg') }}">
                <img src="{{ asset('assets/bcspcarbonara.jpg') }}">
                <img src="{{ asset('assets/bchmbanana.jpg') }}">
                <img src="{{ asset('assets/bconionring.jpg') }}">
            </div>

            <div class="insta-title">INSTAGRAM</div>
            <div>@bosschaspace • 13.5K followers</div>

            <div class="follow-btn">Follow</div>

        </div>

        <!-- MENU -->
        <div class="menu-btn">
            <div class="menu-left">
                <img src="{{ asset('assets/buku.png') }}">
                <div class="menu-text">MENU</div>
            </div>
            <div class="menu-right">⋮</div>
        </div>

        <div class="menu-btn">
            <div class="menu-left">
                <img src="{{ asset('assets/bintang.png') }}">
                <div class="menu-text">REVIEW</div>
            </div>
            <div class="menu-right">⋮</div>
        </div>

        <div class="menu-btn">
            <div class="menu-left">
                <img src="{{ asset('assets/telp.png') }}">
                <div class="menu-text">INFO & RESERVATION</div>
            </div>
            <div class="menu-right">⋮</div>
        </div>

        <div class="menu-btn">
            <div class="menu-left">
                <img src="{{ asset('assets/lokasi.png') }}">
                <div class="menu-text">LOCATION</div>
            </div>
            <div class="menu-right">⋮</div>
        </div>

        <!-- JOIN -->
        <div class="join">Bergabung dengan bosschaspace di Linktree</div>

        <!-- FOOTER -->
        <div class="footer">
            <span>Cookie Preferences</span> •
            <span>Report</span> •
            <span>Privacy</span> •
            <span>Explore</span>
        </div>

    </div>

</body>

</html>
