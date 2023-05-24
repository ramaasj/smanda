@extends('layouts.adminlayout')

@section('title', 'Update Bio Kepala Sekolah')

@section('style')
<link href="{{ asset('/assets/css/style_addmoto.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Update Bio Kepala Sekolah</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/adminProfil">Admin Profil</a></li>
          <li><a href="#">Update Bio Kepala Sekolah</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="siswa" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Update Bio Kepala Sekolah SMAN 2 Sidoarjo</h2>
      </div>
      <div class="row justify-content-center">
        <form action="/adminProfil/updateKepsek/{{$kepsek -> id}}" method="POST" class="col-8" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
              <div class="alert-title">
                <h4>Whoops!</h4>
              </div>
              There are some problems with your input.
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
          @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          @if (session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
          @endif
          <div class="form-group">
            <label for="foto_kepsek">Gambar Depan</label>
            <input type="file" name="foto_kepsek" class="form-control" id="foto_kepsek" value="{{$kepsek -> foto_kepsek}}">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{$kepsek -> nama}}">
          </div>
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" id="nip" value="{{$kepsek -> nip}}">
          </div>
          <div class="form-group">
            <label for="pangkat">Pangkat</label>
            <input type="text" name="pangkat" class="form-control" id="pangkat" value="{{$kepsek -> pangkat}}">
          </div>
          <div class="form-group">
            <label for="pendidikan">Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" id="pendidikan" value="{{$kepsek -> pendidikan}}">
          </div>
          <div class="form-group">
            <label for="masa_kerja">Masa Kerja</label>
            <input type="text" name="masa_kerja" class="form-control" id="masa_kerja" value="{{$kepsek -> masa_kerja}}">
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