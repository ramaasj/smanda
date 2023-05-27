@extends('layouts.adminlayout')

@section('title', 'Admin Berita')

@section('style')
<link href="assets/css/style_adminberita.css" rel="stylesheet">
@endsection

@section('content')

<main>
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Berita</h2>
        <ol>
          <li><a href="#">Berita</a></li>
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

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="/adminberita/addberita" title="Tambah Berita"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>

        @foreach ($listBerita as $berita)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$berita->kategori}}">
          <div class="portfolio-wrap">
            <img src="{{asset($berita->foto_berita)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$berita->judul}}</h4>
              <p>{{$berita->kategori}}</p>
              <div class="portfolio-links">
                <a href="/adminberita/updateberita/{{$berita->id}}" title="Edit Berita"><i class="bi bi-pencil-square"></i></a>
                <form action="/adminberita/deleteberita/{{$berita->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit"><i class="bi bi-trash3" data-gallery="portfolioGallery" title="Delete"></i></button>
                </form>
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