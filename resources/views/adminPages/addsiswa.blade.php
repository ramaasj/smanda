@extends('layouts.adminlayout')

@section('title', 'Tambah Siswa Aktif')

@section('style')
<link href="assets/css/style_updatesiswaaktif.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Siswa</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/siswa">Daftar Siswa Aktif</a></li>
            <li><a href="/ekstra">Add</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Daftar Siswa Kelas XXX</h2>
          <p>Daftar siswa tahun ajaran 2022/2023</p>
        </div>
        <div class= "row justify-content-center">
          <form action="/addsiswa/store" method="POST" class= "col-8">
            @csrf
            <div class="form-group">
                <label for="class">Kelas</label>
                <input type="text" name="class" class="form-control" id="class" placeholder="XII MIPA 4">
            </div>
            <div class="form-group">
                <label for="laki">Laki-Laki</label>
                <input type="text" name="laki" class="form-control" id="laki" placeholder="20">
            </div>
            <div class="form-group">
                <label for="perempuan">Perempuan</label>
                <input type="text" name="perempuan" class="form-control" id="perempuan" placeholder="15">
            </div>
            <div>
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="jumlah" value=35>
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