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

          @foreach ($listEkskul as $ekskul)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="{{asset($ekskul->foto_ekskul)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$ekskul->naama_ekskul}}</h4>
                <div class="portfolio-links">
                  <a href="/updateEkstrakurikuler/{{$ekskul->id}}" data-gallery="portfolioGallery" title="Update"><i class="bi bi-pencil-square"></i></a>
                  <form action="/deleteEkstrakurikuler/{{$ekskul->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"><i class="bi bi-trash3"></i></button>
                    {{-- <a href="/deleteEkstrakurikuler/{{$ekskul->id}}" type="submit" data-gallery="portfolioGallery" title="Delete"><i class="bi bi-trash3"></i></a> --}}
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