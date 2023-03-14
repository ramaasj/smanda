@extends('layouts.adminlayout')

@section('title', 'Siswa Aktif')

@section('style')
<link href="assets/css/style_updatesiswaaktif.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Siswa</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/siswa">Daftar Siswa Aktif</a></li>
            <li><a href="/ekstra">Update</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Update Daftar Siswa Kelas XXX</h2>
          <p>Daftar siswa tahun ajaran 2022/2023</p>
        </div>
        <form action="">
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" id="kelas" placeholder="XII MIPA 4">
            </div>
            <div class="form-group">
                <label for="lakilaki">Laki-Laki</label>
                <input type="text" class="form-control" id="lakilaki" placeholder="20">
            </div>
            <div class="form-group">
                <label for="perempuan">Perempuan</label>
                <input type="text" class="form-control" id="perempuan" placeholder="15">
            </div>
            <div>
                <label for="jumlah">Jumlah</label>
                <input type="text" readonly class="form-control" id="jumlah" value=35>
            </div>
            <div>
                
            </div>
        </form>
      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->
@endsection