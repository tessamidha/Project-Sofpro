@extends('layouts.main')
@section('title', 'cara pesan')

@section('content')
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f7f7f7;
    }

    /* === HEADER === */
    header {
      background-color: #90EE90; /* hijau muda */
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 30px;
      border-bottom: 1px solid #ccc;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo span {
      font-size: 36px;
      font-weight: 900;
      background-color: black;
      color: white;
      padding: 5px 12px;
      border-radius: 6px;
    }

    .logo-text {
      font-weight: 600;
      color: #004000;
      line-height: 1.2;
    }

    .search-box input {
      padding: 6px 10px;
      border-radius: 6px;
      border: none;
      outline: none;
      width: 180px;
    }

    /* === NAVBAR === */
    nav {
      background-color: white;
      display: flex;
      justify-content: center;
      gap: 40px;
      padding: 10px 0;
      font-weight: 600;
      border-bottom: 1px solid #ccc;
    }

    nav a {
      color: black;
      text-decoration: none;
      font-size: 18px;
      padding: 6px 14px;
      border-radius: 20px;
      transition: background-color 0.3s ease;
    }

    nav a.active {
      background-color: #b2f2bb;
    }

    nav a:hover {
      background-color: #b2f2bb;
    }

    /* === HERO SECTION === */
    .hero {
      background-image: url('img/carapemesanan.jpg'); /* gambar lokal */
      background-size: cover;
      background-position: center;
      width: 100%;
      height: 540px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero h1 {
      font-size: 40px;
      text-align: center;
      color: #000;
      font-weight: 500;
      line-height: 1.4;
      background: rgba(255, 255, 255, 0); /* transparan seperti mockup */
      padding: 0 10px;
    }
    .location-section {
        background-color: #d1fae5;
        padding: 60px 80px;
        border-radius: 20px 20px 0 0;
        margin-top: 60px;
    }

    .location-content {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: space-between;
        align-items: flex-start;
    }

    .location-left {
        flex: 1;
        min-width: 320px;
    }

    .location-left img {
        width: 70px;
        margin-bottom: 15px;
    }

    .location-left p {
        color: #333;
        line-height: 1.7;
    }

    .social-icons a img {
        width: 32px;
        margin-right: 12px;
        transition: transform 0.2s ease;
    }

    .social-icons a img:hover {
        transform: scale(1.1);
    }

    .location-right {
        flex: 1;
        min-width: 320px;
    }

    footer {
        text-align: center;
        font-size: 14px;
        color: #333;
        margin-top: 20px;
    }
  </style>
</head>
<body>
  <section class="hero">
    <h1>
      Cara Melakukan Order di Teras Bu Rini<br>
      Catering Homemade
    </h1>
  </section>

<section class="steps">
    <div class="step">
      <h2>1. Langkah Pertama – <span>Pemesanan Melalui Chatbot</span></h2>
      <img src="img/langkah1.jpg" alt="Langkah Pertama Pemesanan Chatbot">
    </div>

    <div class="step">
      <h2>2. Langkah Dua – <span>Pilih Menu Yang Diinginkan</span></h2>
      <img src="img/langkah2.jpg" alt="Langkah Dua Pilih Menu">
    </div>
  </section>
  <!-- Langkah 3 -->
    <div class="step">
      <h2>3. Langkah Tiga – <span>Tentukan Jumlah & Tanggal</span></h2>
      <div class="step-images">
        <img src="img/langkah3a.jpg" alt="Langkah Tiga Jumlah Tamu">
        <img src="img/langkah3b.jpg" alt="Langkah Tiga Pilih Tanggal">
      </div>
    </div>

    <!-- Langkah 4 -->
    <div class="step">
      <h2>4. Langkah Empat – <span>Masukkan Data Pemesan</span></h2>
      <img src="img/langkah4.jpg" alt="Langkah Empat Data Pemesan">
    </div>
  </section>
  <!-- Langkah 5 -->
    <div class="step">
      <h2>5. Langkah Lima – <span>Konfirmasi Pesanan</span></h2>
      <img src="img/langkah5.jpg" alt="Langkah Lima Konfirmasi Pesanan">
    </div>
  </section>
</body>
</html>
<!-- Bagian Lokasi -->
<section class="location-section">
    <div class="location-content">
        <div class="location-left">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Teras Bu Rini">
            <p>
                Catering Teras Bu Rini adalah penyedia jasa catering di Yogyakarta yang siap memenuhi berbagai kebutuhan konsumsi,
                mulai dari menu harian hingga acara seperti rapat, seminar, dan workshop. Kami menghadirkan hidangan lezat, bergizi,
                dan terjamin dengan cita rasa terbaik untuk setiap momen Anda.
            </p>
            <div class="social-icons mt-3">
                <a href="https://wa.me/6281234567890" target="_blank" title="WhatsApp">
                    <img src="{{ asset('icons/wa.png') }}" alt="WhatsApp">
                </a>
                <a href="https://www.instagram.com/terasburini" target="_blank" title="Instagram">
                    <img src="{{ asset('icons/ig.png') }}" alt="Instagram">
                </a>
                <a href="https://www.facebook.com/terasburini" target="_blank" title="Facebook">
                    <img src="{{ asset('icons/fb.png') }}" alt="Facebook">
                </a>
            </div>
        </div>

        <div class="location-right">
            <h4 class="fw-bold">Lokasi</h4>
            <p>📍 Garongan Kembang RT 02 RW 18, Wonokerto, Turi, Sleman 55551</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.583459911582!2d110.378!3d-7.678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDAnNDIuOCJTIDExMMKwMjInNDEuOCJF!5e0!3m2!1sen!2sid!4v1630000000000"
                width="100%" height="230" style="border:0; border-radius:10px;" allowfullscreen=""
                loading="lazy"></iframe>
        </div>
    </div>
@endsection