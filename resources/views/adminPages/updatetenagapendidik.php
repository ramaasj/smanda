@extends('layouts.adminlayout')

@section('title', 'Edit Data Pendidik')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Data Pendidik</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminProfil">Admin Profil</a></li>
                    <li><a href="#">Edit Data Pendidik </a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Update Data Pendidik</h2>
                <p>Data Pendidik Sekolah Tahun Ajaran </p>
            </div>
            <div class="row justify-content-center">
                <form action="/adminProfil/updatetenagapendidik/{{$tenaga_pendidik -> id}}" method="POST" class="col-8" enctype="multipart/form-data">
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
                        <label for="nama">Nama Tenaga Kependidikan</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$tenaga_pendidik -> nama}}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{$tenaga_pendidik -> jabatan}}">
                    </div>
                    <div class="form-group">
                        <label for="foto_tenaga_kependidikan">Foto Pendidik</label>
                        <input type="file" name="foto_tenaga_kependidikan" class="form-control" id="foto_tenaga_kependidikan" value="{{$tenaga_pendidik -> foto_tenaga_kependidikan}}">
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