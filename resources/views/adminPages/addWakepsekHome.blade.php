@extends('layouts.adminlayout')

@section('title', 'Tambah Wakil Kepala Sekolah')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">;
@endsection

@section('content')
<main id="main">
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Tambah Data Wakil Kepala Sekolah</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminHome">Admin Home</a></li>
                    <li><a href="#">Tambah Data Wakil Kepala Sekolah</a></li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Tambah Data Wakil Kepala Sekolah</h2>
                <p>Wakil Kepala Sekolah Saat Ini</p>
            </div>
            <div class="row justify-content-center">
                <form action="/adminHome/addWakepsekHome/store" method="POST" class="col-8" enctype="multipart/form-data">
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
                        <label for="nama">Nama Wakil Kepala Sekolah</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_wakepsek">Direct Link Foto Wakil Kepala Sekolah</label>
                        <input type="url" class="form-control" id="foto_wakepsek" name="foto_wakepsek" required>
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