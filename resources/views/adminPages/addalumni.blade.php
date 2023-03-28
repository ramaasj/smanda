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
        <div class="row justify-content-center">
          <form action="/addalumni/store" method="POST" class="col-8">
            @csrf
            <div class="form-group">
                <label for="class">Universitas</label>
                <input type="text" name="class" class="form-control" id="class" placeholder='Nama Universitas'>
            </div>
            <div class="form-group">
                <label for="snmptn">SNMPTN</label>
                <input type="text" name="snmptn" class="form-control" id="snmptn" placeholder="Jumlah diterima jalur SNMPTN">
            </div>
            <div class="form-group">
                <label for="sbmptn">SBMPTN</label>
                <input type="text" name="sbmptn" class="form-control" id="sbmptn" placeholder="Jumlah diterima jalur SBMPTN">
            </div>
            <div>
                <label for="mandiri">Mandiri</label>
                <input type="text" name="mandiri" class="form-control" id="mandiri" placeholder="Jumlah diterima jalur Mandiri">
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