<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Teras Bu Rini Catering Homemade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font Allison -->
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        /* Header Hijau */
        .header-top {
            background-color: #9ef7a1;
            color: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
        }

        .brand-text {
            font-weight: bold;
            line-height: 1.2;
        }

        .brand-text small {
            font-weight: normal;
            font-size: 14px;
        }

        .btn-auth {
            color: #000;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
        }

        /* Navbar */
        .nav-bar {
            background-color: #fff;
            padding: 10px 50px;
            display: flex;
            justify-content: flex-start; /* pindah ke kiri */
            align-items: center;
            border-bottom: 2px solid #9ef7a1;
            gap: 30px;
        }

        .nav-links a {
            color: #000;
            text-decoration: none;
            margin-right: 25px;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #46d66a;
        }

        .welcome-banner h1 {
            font-family: 'Allison', cursive;
            font-size: 64px;
            font-weight: 400;
            margin: 0;
            color: #2f2f2f;
            line-height: 1.2;
        }

        .welcome-banner span {
            display: block;
            font-size: 36px;
            font-family: 'Allison', cursive;
        }

        footer {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Header Hijau -->
    <div class="header-top">
        <div class="d-flex align-items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="60" height="60">
            <div class="brand-text">
                Teras Bu Rini<br>
                <small>Catering Homemade</small>
            </div>
        </div>
        <div>
            <a href="#" class="btn-auth">Masuk</a>
            <a href="#" class="btn-auth">Daftar</a>
        </div>
    </div>

    <!-- Navbar -->
    <div class="nav-bar">
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/menu">Menu</a>
            <a href="/cara-pesan">Cara Pesan</a>
            <a href="/tentang">Tentang</a>
        </div>
    </div>

    <!-- Konten Halaman -->
    <div class="container-fluid p-0">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Teras Bu Rini Catering Homemade — Semua hak dilindungi.
    </footer>

</body>
</html>
