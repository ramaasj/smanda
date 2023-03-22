@extends('layouts.adminlayout')

@section('title', 'Update Berita')

@section('style')
<link href="assets/css/style_updateberita.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Berita</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/adminberita">Berita</a></li>
            <li><a href="#">Update</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Update Berita</h2>
          <p>Berita SMAN 2 Sidoarjo</p>
        </div>
        <form action="" class="">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul Berita">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Berita</label>
                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Berita">
            </div>
            <hr>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="fotoberita">
            <label class="custom-file-label" for="fotoberita">Masukkan foto/gambar berita</label>
            </div>
            <hr>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->
@endsection