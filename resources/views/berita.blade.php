@extends('layouts.mainlayout')

@section('title', 'Berita')

@section('style')
<link href="{{asset('assets/css/style_berita.css')}}" rel="stylesheet">
@endsection

@section('content')

<main>
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Berita</h2>
        <ol>
          <li><a href="/berita">Berita</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="berita" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Berita</h2>
        <p>Informasi terbaru tentang kegiatan yang berjalan di SMA Negeri 2 Sidoarjo</p>
      </div>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Informasi">Informasi</li>
            <li data-filter=".filter-Prestasi">Prestasi</li>
            <li data-filter=".filter-Kurikulum">Kurikulum</li>
            <li data-filter=".filter-Adiwiyata">Adiwiyata</li>
            <li data-filter=".filter-Lainnya">Lainnya...</li>
          </ul>
        </div>
      </div>
      <div class="row portfolio-container">
        @foreach ($listBerita as $berita)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$berita->kategori}}">
          <div class="portfolio-wrap">
            <img src="{{asset($berita->foto_berita)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$berita->judul}}</h4>
              <p>{{$berita->kategori}}</p>
              <div class="portfolio-links">
                <a href="{{asset($berita->foto_berita)}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <a href="/berita/detailberita/{{$berita->id}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection