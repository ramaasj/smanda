@extends('layouts.adminlayout')

@section('title', 'Update Berita')

@section('style')
<link href="{{ asset('/assets/css/style_updateberita.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Berita</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/adminberita">Berita</a></li>
            <li><a href="#">Update</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Update Berita</h2>
          <p>Berita SMAN 2 Sidoarjo</p>
        </div>
        <form action="/updateberita/{{$berita -> id}}/store" method="POST" class="col-8" enctype="multipart/form-data">
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
  
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
  
            @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
          <div class="form-group">
              <label for="judul">Judul Berita</label>
              <input type="text" class="form-control" name="judul" id="judul" value="{{$berita -> judul}}">
          </div>
          <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" name="kategori" id="judul" value="{{$berita -> kategori}}">
          </div>
          <div class="form-group">
              <label for="deskripsi">Deskripsi Berita</label>
              <input type="text" class="form-control" name="description" id="deskripsi" value="{{$berita -> description}}">
          </div>
          <hr>
          <div class="form-group">
            <label for="foto_berita">Masukkan foto/gambar berita</label>
            <br>
            <input type="file" class="form-control" name="foto_berita" id="foto_berita" value="{{$berita -> foto_berita}}">
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