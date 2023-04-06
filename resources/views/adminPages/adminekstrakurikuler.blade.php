@extends('layouts.adminlayout')

@section('title', 'Admin Ekstrakurikuler')

@section('style')
<link href="assets/css/style_ekstrakurikuler.css" rel="stylesheet">
@endsection

@section('content')
<main>    

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Siswa</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/siswa">Daftar Siswa Aktif</a></li>
            <li><a href="/ekstrakurikuler">Ekstrakurikuler</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="ektrakurikuler" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Ekstrakurikuler</h2>
          <p>Peserta didik dapat memanfaatkan waktu luang mereka dengan kegiatan positif.</p>
          <p>Kami memberikan pilihan ekskul yang dapat mereka pilih untuk mengembangkan bakatnya.</p>

        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                    <a href="/addekstrakurikuler"   title="Tambah Ekstrakurikuler"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/futsal.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Futsal</h4>
                <div class="portfolio-links">
                    <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Update"><i class="bi bi-pencil-square"></i></a>
                    <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Delete"><i class="bi bi-trash3"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/basket.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Basket</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Paskibra</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Smandapala</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/voli.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voli</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pemuda Pancasila</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lainnya 3</h4>
                <p>Lainnya</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lainnya 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lainnya 1</h4>
                <p>Lainnya</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lainnya 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Prestasi 3</h4>
                <p>Prestasi</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Prestasi 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    
  </main><!-- End #main -->
@endsection