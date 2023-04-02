@extends('layouts.adminlayout')

@section('title', 'Tambah Komite')

@section('style')
<link href="assets/css/style_addkomite.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Tambah Komite</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/adminprofil">Admin Profil</a></li>
          <li><a href="#">Tambah Daftar Komite</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="siswa" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Tambah Anggota Komite Sekolah</h2>
        <p>Daftar Komite Tahun Ajaran 2022/2023</p>
      </div>
      <div class="row justify-content-center">
        <form action="/addkomite/store" method="POST" class="col-8">
          @csrf
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
          </div>
          <hr>
          <div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

    </div>
  </section><!-- End F.A.Q Section -->

</main><!-- End #main -->
@endsection