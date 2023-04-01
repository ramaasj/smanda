@extends('layouts.adminlayout')

@section('title', 'Tambah Moto')

@section('style')
<link href="assets/css/style_addmoto.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Moto</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/adminprofil">Admin Profil</a></li>
            <li><a href="#">Tambah Moto Smanda</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Moto Smanda</h2>
        </div>
        <div class= "row justify-content-center">
          <form action="/addmoto/store" method="POST" class= "col-8">
            @csrf
            <div class="form-group">
                <label for="moto_points">Moto</label>
                <input type="text" name="moto_points" class="form-control" id="moto_points" placeholder="Moto SMAN 2 Sidoarjo">
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