@extends('layouts.adminlayout')

@section('title', 'Siswa Aktif')

@section('style')
<link href="assets/css/style_adminsiswaaktif.css" rel="stylesheet">
@endsection


@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Siswa</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/siswa">Daftar Siswa Aktif</a></li>
            <li><a href="/ekstra">Ekstrakurikuler</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Siswa</h2>
          <p>Daftar siswa tahun ajaran 2022/2023</p>
        </div>
        <div class="tablesiswa">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Kelas</th>
                    <th scope="col">L</th>
                    <th scope="col">P</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>XII MIPA 1</th>
                    <td>10</td>
                    <td>25</td>
                    <td>35</td>
                    <td><a href=""><i class="bi bi-pencil-square"></i></a><a href=""><i class="bi bi-trash3"></i></a></td>
                  </tr>
                  <tr>
                    <th>XII MIPA 2</th>
                    <td>13</td>
                    <td>21</td>
                    <td>24</td>
                    <td><a href=""><i class="bi bi-pencil-square"></i></a><a href=""><i class="bi bi-trash3"></i></a></td>
                  </tr>
                  <tr>
                    <th>XII MIPA 3</th>
                    <td>16</td>
                    <td>19</td>
                    <td>35</td>
                    <td><a href=""><i class="bi bi-pencil-square"></i></a><a href=""><i class="bi bi-trash3"></i></a></td>
                  </tr>
                  <tr>
                    <th>TOTAL</th>
                    <td>39</td>
                    <td>65</td>
                    <td>104</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->
@endsection