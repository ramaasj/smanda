@extends('layouts.adminlayout')

@section('title', 'Tambah Siswa Aktif')

@section('style')
<link href="assets/css/style_updatesiswaaktif.css" rel="stylesheet">
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
        <form action="" class="">
            <div class="form-group">
                <label for="kelas">Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" id="ekstrakurikuler" placeholder="Nama Ekstrakurikuler">
            </div>
            <hr>
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="logoekstra">
            <label class="custom-file-label" for="logoekstra">Masukkan logo/gambar ekstrakurikuler</label>
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