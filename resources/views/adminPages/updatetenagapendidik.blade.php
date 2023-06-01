@extends('layouts.adminlayout')

@section('title', 'Edit Data Tenaga Kependidikan')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Data Tenaga Kependidikan</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminProfil">Admin Profil</a></li>
                    <li><a href="#">Edit Data Tenaga Kependidikan </a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Edit Data Tenaga Kependidikan</h2>
                <p>Data Tenaga Kependidikan Saat Ini </p>
            </div>
            <div class="row justify-content-center">
                <form action="/adminProfil/updateTenagaPendidik/{{$tenagaPendidikan -> id}}" method="POST" class="col-8" enctype="multipart/form-data">
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
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Tenaga Kependidikan</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$tenagaPendidikan -> nama}}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{$tenagaPendidikan -> jabatan}}">
                    </div>
                    <div class="form-group">
                        <label for="foto_tenaga_kependidikan">Foto Pendidik</label>
                        <input type="text" name="foto_tenaga_kependidikan" class="form-control" id="foto_tenaga_kependidikan" value="{{$tenagaPendidikan -> foto_tenaga_kependidikan}}">
                    </div>
                    <div class="form-group">
                        <label>Untuk Mengubah Link Gambar dari Google Drive Menjadi Direct Link</label>
                        <label>Akses Website: <a href="https://www.labnol.org/embed/google/drive/">https://www.labnol.org/embed/google/drive/</a>atau Website lainnya </label>
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