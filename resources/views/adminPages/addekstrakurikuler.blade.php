@extends('layouts.adminlayout')

@section('title', 'Tambah Ekstrakurikuler')

@section('style')
<link href="assets/css/style_addekstrakurikuler.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Ekstrakurikuler</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/siswa">Ekstrakurikuler</a></li>
            <li><a href="/ekstra">Add</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Ekstrakurikuler</h2>
          <p>Ekstrakurikuler SMAN 2 Sidoarjo</p>
        </div>
        <form action="/addekstrakurikuler/store" class="col-16" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="namaekskul">Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" id="naama_ekskul" placeholder="Nama Ekstrakurikuler">
            </div>
            <hr>
            <div class="custom-file">
              <label class="custom-file-label" for="logoekstra">Masukkan logo/gambar ekstrakurikuler</label>
              <br>
              <input type="file" class="custom-file-input" id="logoekstra">
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