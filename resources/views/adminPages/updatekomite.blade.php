@extends('layouts.adminlayout')

@section('title', 'Update Komite')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Update Komite</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/adminprofil">Admin Profil</a></li>
          <li><a href="#">Update Komite</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="siswa" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Update Daftar Komite Sekolah</h2>
        <p>Daftar Komite Sekolah Tahun Ajaran xxx</p>
      </div>
      <div class="row justify-content-center">
        <form action="/adminProfil/updatekomite/{{$komite -> id}}/store" method="POST" class="col-8">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{$komite -> nama}}">
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{$komite -> jabatan}}">
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