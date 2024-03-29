@extends('layouts.mainlayout')

@section('title', 'Detail Berita')

@section('style')
<link href="{{asset('assets/css/style_berita.css')}}" rel="stylesheet">
@endsection

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Berita</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/berita">Berita</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper">

                <h2 style="font-weight: bolder;">{{$berita -> judul}}</h2>
                <img style="margin-top: 10px; border-radius: 10px" src="{{$berita -> foto_berita}}" alt="">
                <p style="margin-top: 20px; font-weight:700;"> {!! nl2br($berita -> description) !!} </p>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Terkait Berita Ini</h3>
            <ul>
              <li><strong>Kategori</strong>: {{$berita -> kategori}}</li>
              <li><strong>Tanggal</strong>: {{$berita->created_at->format('Y-m-d')}}</li>
            </ul>
          </div>
          <div class="portfolio-description">

            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection