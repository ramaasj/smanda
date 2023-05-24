@extends('layouts.adminlayout')

@section('title', 'Update Visi')

@section('style')
<link href="{{ asset('/assets/css/style_addmoto.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Update Visi</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/adminProfil">Admin Profil</a></li>
          <li><a href="#">Update Visi</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="siswa" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Update Visi SMAN 2 Sidoarjo</h2>
      </div>
      <div class="row justify-content-center">
        <form action="/adminProfil/updatevisi/{{$visi -> id}}/store" method="POST" class="col-8">
          @method('post')
          @csrf
          <div class="form-group">
            <label for="visi_points">Visi</label>
            <input type="text" name="visi_points" class="form-control" id="visi_points" value="{{$visi -> visi_points}}">
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