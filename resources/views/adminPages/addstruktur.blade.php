@extends('layouts.adminlayout')

@section('title', 'Tambah Struktur')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">;
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Tambah Struktur</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminprofil">Admin Profil</a></li>
                    <li><a href="#">Tambah Daftar Komite</a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Tambah Anggota Komite Sekolah</h2>
                <p>Daftar Komite Tahun Ajaran 2022/2023</p>
            </div>
            <div class="row justify-content-center">
                <form action="/addstruktur/store" method="POST" class="col-8" enctype="multipart/form-data">
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
                            <label for="desc">Tahun</label>
                            <input type="text" name="desc" class="form-control" id="desc" placeholder="Tahun" value="{{ old('desc') }}">
                        </div>
                        <div class="form-group">
                            <label for="formFile">Gambar</label>
                            <input type="file" name="foto_org_sekolah" class="form-control" id="formFile" required>
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