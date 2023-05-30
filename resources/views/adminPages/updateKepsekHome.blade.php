@extends('layouts.adminlayout')

@section('title', 'Edit Kepala Sekolah')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">;
@endsection

@section('content')
<main id="main">
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Kepala Sekolah</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminHome">Admin Home</a></li>
                    <li><a href="#">Edit Kepala Sekolah</a></li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Edit Kepala Sekolah Sekolah</h2>
                <p>Kepala Sekolah Saat Ini</p>
            </div>
            <div class="row justify-content-center">
                <form action="/adminHome/updateKepsekHome/{{$kepsek -> id}}" method="POST" class="col-8" enctype="multipart/form-data">
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
                        <label for="nama_kepsek">Nama Kepala Sekolah</label>
                        <input type="text" class="form-control" id="nama_kepsek" name="nama_kepsek" required value="{{$kepsek -> nama_kepsek}}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required value="{{$kepsek -> jabatan}}">
                    </div>
                    <div class="form-group">
                        <label for="foto_kepsek">Direct Link Foto Kepala Sekolah</label>
                        <input type="url" class="form-control" id="foto_kepsek" name="foto_kepsek" required>
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