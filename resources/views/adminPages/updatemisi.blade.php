@extends('layouts.adminlayout')

@section('title', 'Update Misi')

@section('style')
<link href="{{ asset('/assets/css/style_addmoto.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Update Misi</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/adminProfil">Admin Profil</a></li>
          <li><a href="#">Update Misi</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="siswa" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Update Misi SMAN 2 Sidoarjo</h2>
      </div>
      <div class="row justify-content-center">
        <form action="/adminProfil/updatemisi/{{$misi -> id}}/store" method="POST" class="col-8">
          @method('post')
          @csrf
          <div class="form-group">
            <label for="misi_points">Misi</label>
            <input type="text" name="misi_points" class="form-control" id="misi_points" value="{{$misi -> misi_points}}">
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