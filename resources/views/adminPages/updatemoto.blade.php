@extends('layouts.adminlayout')

@section('title', 'Update Moto')

@section('style')
<link href="{{ asset('/assets/css/style_addmoto.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Update Moto</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/adminProfil">Admin Profil</a></li>
          <li><a href="#">Update Moto</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="siswa" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Update Moto SMAN 2 Sidoarjo</h2>
      </div>
      <div class="row justify-content-center">
        <form action="/adminProfil/updatemoto/{{$moto -> id}}" method="POST" class="col-8">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="moto_points">Moto</label>
            <input type="text" name="moto_points" class="form-control" id="moto_points" value="{{$moto -> moto_points}}">
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