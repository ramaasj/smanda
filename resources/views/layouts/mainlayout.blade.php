<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMAN 2 Sidoarjo | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/smanda.png')}}" rel="icon" size="16x16">

  <!-- Google Fonts Open Sans-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Fonts Futura Md -->
  <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
  <!-- Google Fonts Montserrat-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  @yield('style')


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="/"><img src="{{asset('assets/img/smanda.png')}}" class="img-fluid alt=""><span>SMAN 2 SIDOARJO</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=" index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li class="dropdown"><a href="/profil"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/profil#sejarah">Sejarah Singkat</a></li>
              <li><a href="/profil#visi-misi">Visi Misi</a></li>
              <li><a href="/profil#kepala-sekolah">Kepala Sekolah</a></li>
              <li><a href="/profil#pendidik">Pendidik & Tenaga Kependidikan</a></li>
              <li><a href="/profil#organisasi-sekolah">Struktur Organisasi Sekolah</a></li>
              <li><a href="/profil#komite-sekolah">Komite Sekolah</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="/siswa"><span>Siswa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/siswa">Daftar Siswa Aktif</a></li>
              <li><a href="/ekstrakurikuler">Kegiatan Ekstrakurikuler</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/berita">Berita</a></li>
          <li class="dropdown"><a href="/alumni"><span>Lainnya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/alumni">Alumni</a></li>
              <li><a href="/">PPDB</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://sman2sidoarjo.sch.id/" target="_blank" rel="noopener noreferrer">MYSMANDA</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!--Content-->
  @yield('content')


  <!--Footer-->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-sm">
            <div class="footer-info">
              <h3>SMA Negeri 2 Sidoarjo</h3>
              <p>
                Jl. Lingkar Barat Gading Fajar 2<br>
                (61271) Sidoarjo<br>
                Jawa Timur - Indonesia<br><br>
                <strong>Telp:</strong> (031) 8961119<br>
                <strong>Email:</strong> smanda_sda@yahoo.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-sm footer-links">
            <h4>Menu Pintasan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/profil#pendidik">Staff</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/berita">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PPDB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">MYSMANDA</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/login">Admin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SMA Negeri 2 Sidoarjo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <strong><a href="#">PeKaeL</a></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>