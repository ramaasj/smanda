@extends('layouts.adminlayout')

@section('title', 'Tambah Visi')

@section('style')
<link href="assets/css/style_addmoto.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Visi</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/adminprofil">Admin Profil</a></li>
            <li><a href="#">Tambah Visi Smanda</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Visi Smanda</h2>
        </div>
        <div class= "row justify-content-center">
          <form action="/addvisi/store" method="POST" class= "col-8">
            @csrf
            <div class="form-group">
                <label for="visi_points">Visi</label>
                <input type="text" name="visi_points" class="form-control" id="visi_points" placeholder="Visi SMAN 2 Sidoarjo">
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