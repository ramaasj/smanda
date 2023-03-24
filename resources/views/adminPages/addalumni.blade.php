@extends('layouts.adminlayout')

@section('title', 'Tambah Alumni')

@section('style')
<link href="assets/css/style_addalumni.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Alumni</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/adminalumni">Daftar Alumni</a></li>
            <li><a href="#">Tambah</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Data Alumni</h2>
        </div>
        <form action="">
            <div class="form-group">
                <label for="universitas">Universitas</label>
                <input type="text" class="form-control" id="universitas" placeholder='UPN " Veteran" Jawa TImur'>
            </div>
            <div class="form-group">
                <label for="snm">SNMPTN</label>
                <input type="text" class="form-control" id="snm" placeholder="20">
            </div>
            <div class="form-group">
                <label for="sbm">SBMPTN</label>
                <input type="text" class="form-control" id="sbm" placeholder="15">
            </div>
            <div>
                <label for="mandiri">Mandiri</label>
                <input type="text" readonly class="form-control" id="mandiri" value=35>
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