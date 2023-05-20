@extends('layouts.adminlayout')

@section('title', 'Update Greet')

@section('style')
<link href="{{ asset('/assets/css/style_updateGreet.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Update Greet</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminhome">Admin Home</a></li>
                    <li><a href="#">Update Greet</a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Update Greet</h2>
            </div>
            <div class="row justify-content-center">
                <form action="/updateGreet/{{$greet -> id}}" method="POST" class="col-8" enctype="multipart/form-data">
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
                        <label for="gambar_greet">Gambar Depan</label>
                        <input type="file" name="gambar_greet" class="form-control" id="gambar_greet" value="{{$greet -> gambar_greet}}">
                    </div>
                    <div class="form-group">
                        <label for="tahun_greet">Lama Berdirinya Sekolah (Tahun)</label>
                        <input type="text" name="tahun_greet" class="form-control" id="tahun_greet" value="{{$greet -> tahun_greet}}">
                    </div>
                    <div class="form-group">
                        <label for="desc_tahun">Deskripsi</label>
                        <input type="text" name="desc_tahun" class="form-control" id="desc_tahun" value="{{$greet -> desc_tahun}}">
                    </div>
                    <div class="form-group">
                        <label for="siswa_greet">Jumlah Siswa</label>
                        <input type="text" name="siswa_greet" class="form-control" id="siswa_greet" value="{{$greet -> siswa_greet}}">
                    </div>
                    <div class="form-group">
                        <label for="desc_siswa">Deskripsi</label>
                        <input type="text" name="desc_siswa" class="form-control" id="desc_siswa" value="{{$greet -> desc_siswa}}">
                    </div>
                    <div class="form-group">
                        <label for="pendidik_greet">Jumlah Pendidik</label>
                        <input type="text" name="pendidik_greet" class="form-control" id="pendidik_greet" value="{{$greet -> pendidik_greet}}">
                    </div>
                    <div class="form-group">
                        <label for="desc_pendidik">Deskripsi</label>
                        <input type="text" name="desc_pendidik" class="form-control" id="desc_pendidik" value="{{$greet -> desc_pendidik}}">
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