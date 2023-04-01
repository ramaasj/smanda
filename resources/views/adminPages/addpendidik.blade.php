@extends('layouts.adminlayout')

@section('title', 'Tambah Pendidik')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">;
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Tambah Pendidik</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminprofil">Admin Profil</a></li>
                    <li><a href="#">Tambah Daftar Pendidik</a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Tambah Anggota Pendidik Sekolah</h2>
                <p>Daftar Pendidik Tahun Ajaran 2022/2023</p>
            </div>
            <div class="row justify-content-center">
                <form action="/addpendidik/store" method="POST" class="col-8" enctype="multipart/form-data">
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
                            <label for="nama">Nama Pendidik</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="formFile">Foto</label>
                            <input type="file" name="foto_pendidik" class="form-control" id="formFile" required>
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