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
          <li><a href="/adminEkstrakurikuler">Ekstrakurikuler</a></li>
          <li><a href="#">Tambah Data Ekstrakurikuler</a></li>
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
      <form action="/addEkstrakurikuler/store" class="col-16" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            <div class="alert-title">
              <h4>Whoops!</h4>
            </div>
            There are some problems with your input.
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          @if (session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
          @endif
        </div>
        <div class="form-group">
          <label for="naama_ekskul">Nama Ekstrakurikuler</label>
          <input type="text" class="form-control" name="naama_ekskul" id="naama_ekskul" placeholder="Nama Ekstrakurikuler">
        </div>
        <hr>
        <div class="form-group">
          <label for="foto_ekskul">Direct Link Gambar Ekstrakurikuler</label>
          <input type="text" class="form-control" id="foto_ekskul" id="foto_ekskul" name="foto_ekskul">
        </div>
        <div class="form-group">
          <label>Untuk Mengubah Link Gambar dari Google Drive Menjadi Direct Link</label>
          <label>Akses Website: <a href="https://www.labnol.org/embed/google/drive/">https://www.labnol.org/embed/google/drive/</a>atau Website lainnya </label>
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