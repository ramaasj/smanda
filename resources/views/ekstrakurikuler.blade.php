@extends('layouts.mainlayout')

@section('title', 'Ekstrakurikuler')

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

          @foreach ($listEkskul as $ekskul)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="{{asset($ekskul->foto_ekskul)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$ekskul->naama_ekskul}}</h4>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    
  </main><!-- End #main -->
@endsection