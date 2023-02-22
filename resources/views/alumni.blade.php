@extends('layouts.mainlayout')

@section('title', 'Alumni')

@section('style')
<link href="assets/css/style_alumni.css" rel="stylesheet">
@endsection

@section('content')
<main>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Alumni</h2>
          <ol>
            <li><a href="/siswa">SNMPTN</a></li>
            <li><a href="/siswa">SbMPTN</a></li>
            <li><a href="/siswa">Mandiri</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="alumni" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2 style="font-weight: bolder;">ALUMNI</h2>
                <p>Daftar alumni yang diterima PTN per tanggal <span style="font-weight: bolder;">23-03-2018</span>
                    <span style="font-weight: bolder;">-</span>
                    <span style="font-weight: bolder;">23-03-2023</span></p>
            </div>
            <div class="tablesiswa">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Universitas</th>
                            <th scope="col">SNMPTN</th>
                            <th scope="col">SBMPTN</th>
                            <th scope="col">MANDIRI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>XII MIPA 1</td>
                            <td>10</td>
                            <td>25</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>XII MIPA 2</td>
                            <td>13</td>
                            <td>21</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>XII MIPA 3</td>
                            <td>16</td>
                            <td>19</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <th>TOTAL</th>
                            <td>39</td>
                            <td>65</td>
                            <td>104</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- End F.A.Q Section -->

    </main><!-- End #main -->
@endsection