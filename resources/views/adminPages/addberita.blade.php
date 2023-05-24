@extends('layouts.adminlayout')

@section('title', 'Tambah Berita')

@section('style')
<link href="assets/css/style_addberita.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Berita</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/adminberita">Berita</a></li>
            <li><a href="#">Tambah</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Berita</h2>
          <p>Berita SMAN 2 Sidoarjo</p>
        </div>
        <form action="/addberita/store" class="" method="POST" enctype="multipart/form-data">
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
              <div class="form-group">
                  <label for="judul">Judul Berita</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Berita">
              </div>
              <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select name="kategori" id="kategori" class="form-control">
                    <option value="Informasi">Informasi</option>
                    <option value="Prestasi">Prestasi</option>
                    <option value="Kurikulum">Kurikulum</option>
                    <option value="Adiwiyata">Adiwiyata</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="description">Deskripsi Berita</label>
                  <input type="text" class="form-control" name="description" id="deskripsi" placeholder="Deskripsi Berita">
              </div>
              <hr>
              <div class="custom-file">
                <label class="custom-file-label" for="foto_berita">Masukkan foto/gambar berita</label>
                <br>
                <input type="file" class="custom-file-input" id="foto_berita" name="foto_berita">
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